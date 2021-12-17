@extends('Inc.layout')
@section('page_title')
{{config('app.name')}} | Reach out to us
@endsection
@include('Inc.nav')
@section('content')
<style>
     .jumbotron.jumbotron-fluid {
      min-height: 100vh; 
      margin-bottom: 0;
      margin-top: 0; 
      padding-top: 200px;
        background:linear-gradient(rgba(12, 12, 12, 0.712),rgba(18, 18, 19, 0.685)), url('Img/ehr.jpg') no-repeat;
        color: antiquewhite;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    a.btn.btn-danger.btn-lg{
        background: #dc35468f;
        border-radius: 20px;
        padding: 10px 50px;
        border: none;
    }
</style>
<div class="jumbotron jumbotron-fluid">
    <div class="text-center container">
        <h1>WELCOME TO HEALTH MANAGEMENT SYSTEM</h1>
        <p>
            Get a know of what is wrong with you without having to step a foot in the hospital using our trusted algorithm.
        </p>
        <p>
            Just answer simple questions about how you feel and our system will handle the rest.
        </p>
        <a href="./details" class="btn btn-danger btn-lg">CHECK IT OUT!</a>
    </div>
</div>
@endsection