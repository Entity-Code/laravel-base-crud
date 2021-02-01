@extends('layouts.main-layout')


@section('content') 

    <h2><li>Peripheral number {{$peripheral -> id}}</li></h2>
    <ul>
        <li>Name: {{$peripheral -> name}}</li>       
        <li>Model: {{$peripheral -> model}}</li>
        {{-- @php
            $price = $peripheral -> price;
            $transPrice = null;
            $priceLen = strlen((string)$price);
            if ($priceLen > 3) {
                $transPrice = $price / 100;
            }
        @endphp
        
        @if (!$transPrice)           
            <li>Price: {{$price}} €</li>
        @else
            <li>Price: {{($transPrice)}} €</li>
        @endif --}}
        <li>Price: {{$peripheral -> price}} €</li>
        
        <li>Expenditure: {{$peripheral -> expenditure}} W</li>
    </ul>

    
@endsection 