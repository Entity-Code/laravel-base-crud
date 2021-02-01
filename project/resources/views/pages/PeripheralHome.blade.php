@extends('layouts.main-layout')

@section('content')
    <h1>
        <a href="{{route('peripheral-create')}}"> Ask for a custom component!</a>
    </h1>

    <h1>PERIPHERALS LIST</h1>

    <ul>
        @foreach ($peripherals as $peripheral)
            
            <li>
                <a href="{{ route('peripheral-details', $peripheral -> id) }}">
                    {{$peripheral -> name}} <br>
                </a>
            </li>
        @endforeach
    </ul> 


@endsection 
