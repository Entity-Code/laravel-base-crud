@extends('layouts.main-layout')


@section('content') 

    <h2><li>Peripheral number {{$peripheral -> id}}</li></h2>
    <ul>       
        <li>Model: {{$peripheral -> model}}</li>
        <li>Price: {{$peripheral -> price}} €</li>
        <li>Expenditure: {{$peripheral -> expenditure}} W</li>
    </ul>

    
@endsection 