@extends('panel.root')
@section('title')
صورت حساب
@endsection
@section('invoice')
    active
@endsection
@section('content')

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