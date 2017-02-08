
@extends('layouts.private.adminCollege.menu')

@section('content')
    <div class="container">

        <h1>Agregar estudiante a {{$college->name}}</h1>

        <form href="{{ route('student.store', $college) }}" method="POST">
            {{ csrf_field() }}
            {!! Field::text('dni') !!}
            {!! Field::text('firstName') !!}
            {!! Field::text('lastName') !!}
            {!! Field::date('birthday') !!}

            <input type="radio" name="sex" value="masculino" checked> Masculino </br>
            <input type="radio" name="sex" value="femenino" checked> Femenino </br>


            <button type="submit" class="btn btn-primary">
                Registrar
            </button>

        </form>

    </div>
@endsection