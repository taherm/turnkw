@extends('layouts.master-en')
@section('content')


<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            {{-- <img src="{{asset('uploads/scope.jpg')}}" width="100%" height="auto"> --}}
            <br><br><br>
            <h1>Maintenance</h1>
            <p>
                For us to provide your business with the best maintenance possible, please fill out the Maintenance Form and press send when finished. The Maintenance team will contact you as soon as possible to resolve all your issues.

            </p>

            <a href="/maintenance_form" class="btn btn-lg" style="color:white !important;background:#666666" role="button">Maintenance Form</a>
        </div>

    </div>
    <br><br><br>
</div>


@endsection