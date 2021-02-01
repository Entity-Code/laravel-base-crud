@extends('layouts.main-layout')

@section('content')


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
