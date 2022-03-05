@extends('panel.root')
@section('title')
صورت حساب
@endsection
@section('invoice')
    active
@endsection
@section('content')

@if ($message = session()->get('message'))
<div class="alert alert-success" role="alert" style="text-align: right;">
    <strong>موفقیت </strong>{{ $message }}
</div>
@endif
@if ($message = session()->get('failmessage'))
<div class="alert alert-info" role="alert" style="text-align: right;">
    <strong>توجه </strong>{{ $message }}
</div>
@endif

<div class="container-fluid pt-4 px-4">  
    <x-final-invoices-component />
</div>
<br>
<br>
<br>
{{-- payed --}}

<div class="container-fuild pt-4 px-4">
    <x-payed-invoices-component />
</div>
@endsection