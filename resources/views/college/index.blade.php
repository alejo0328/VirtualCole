
@extends('layouts.private.adminCollege.menu')

@section('content')
    <div class="container">
        <ul>
        @foreach($colleges as $college)
            <li>
                {{$college->name}}
            </li>

            @endforeach
        </ul>
    </div>
@endsection