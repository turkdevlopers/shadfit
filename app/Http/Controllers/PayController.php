<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Pay\SadadFunctions;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public $Amount;
    public $OrderId;
    public $ReturnUrl;
    public $MerchantId;
    public $TerminalId;

    public function SendSadad($paykey)
    {
        $Sadad = new SadadFunctions();
        $key = $paykey;
        $MerchantId = $this->MerchantId;
        $TerminalId = $this->TerminalId;
        $Amount = $this->Amount; //YourAmount (Rials)
        $OrderId = $this->OrderId;
        $LocalDateTime = date("m/d/Y g:i:s a");
        $ReturnUrl = $this->ReturnUrl;
        $SignData = $Sadad->encrypt_pkcs7("$TerminalId;$OrderId;$Amount", "$key");

        $data = array(
            'TerminalId' => $TerminalId,
            'MerchantId' => $MerchantId,
            'Amount' => $Amount,
            'SignData' => $SignData,
            'ReturnUrl' => $ReturnUrl,
            'LocalDateTime' => $LocalDateTime,
            'OrderId' => $OrderId
        );

        $result = $Sadad->CallAPI('https://sadad.shaparak.ir/vpg/api/v0/Request/PaymentRequest', $data);

        if ($result->ResCode == 0) {
            $Token = $result->Token;
            $url = "https://sadad.shaparak.ir/VPG/Purchase?Token=$Token";
            header("Location:$url");
        } else {
            return $result->Description;
        }
    }
    public function VerifySadad($paykey)
    {
        $Sadad = new SadadFunctions();
        $key = $paykey;
        $OrderId = $_POST["OrderId"];
        $Token = $_POST["token"];
        $ResCode = $_POST["ResCode"];

        if ($ResCode == 0) {
            $verifyData = array(
                'Token' => $Token,
                'SignData' => $Sadad->encrypt_pkcs7($Token, $key)
            );

            $result = $Sadad->CallAPI('https://sadad.shaparak.ir/vpg/api/v0/Advice/Verify', $verifyData);
        }
        if ($result->ResCode != -1 && $result->ResCode == 0) {
            return (object) [
                'Satuse' => 'payed',
                'SystemTraceNo' => $result->SystemTraceNo,
                'RetrivalRefNo' => $result->RetrivalRefNo,
                'OrderId' => $OrderId
            ];
            //  "شماره سفارش:" . $OrderId . "<br>" . "شماره پیگیری : " . $result->SystemTraceNo . "<br>" . "شماره مرجع:" .
            //     $result->RetrivalRefNo . "<br> اطلاعات بالا را جهت پیگیری های بعدی یادداشت نمایید." . "<br>";
        } else
            return (object) [
                'Satuse' => 'notpayed',
                'Message' => 'تراکنش نا موفق بود در صورت کسر مبلغ از حساب شما حداکثر پس از 72 ساعت مبلغ به حسابتان برمی گردد.',
            ];
    }
}
