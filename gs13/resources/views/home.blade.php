@extends('layout.adminlayout')
@section('title' , 'Home')
@section('page-name')
    <h1>Home page</h1>
    <hr>
@endsection

@section('banner')
 <h2>This is Banner From Home</h2>   
@endsection

@section('main')
    <h3>This main contact From Home</h3>
@endsection

@section('default-page')
    @parent
<h4>This is main Default text </h4>  
@endsection