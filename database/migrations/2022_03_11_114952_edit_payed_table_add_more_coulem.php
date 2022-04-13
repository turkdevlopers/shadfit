<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditPayedTableAddMoreCoulem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payed', function (Blueprint $table) {
            $table->string('SystemTraceNo')->after('order_id');
            $table->string('RetrivalRefNo')->after('SystemTraceNo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payed', function (Blueprint $table) {
            //
        });
    }
}
