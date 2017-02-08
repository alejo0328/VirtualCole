
@extends('layouts.private.adminCollege.menu')

@section('content')
    <h1>{{$college->name}}</h1>
    <a href="{{URL::action('StudentController@create',$college->id) }}" class="btn btn-success">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        Agregar Estudiante
    </a>

    <div class="container col-md-9 center-block text-center espacio-arriba">


        <table class="table table-hover">
            <tr>
                <td>DNI</td>
                <td>APELLIDOS</td>
                <td>NOMBRES</td>
                <td>SEXO</td>
                <td>OPERACIONES</td>

            </tr>

            @foreach($college->students as $student)
                <tr>
                    <td>{{$student->dni}}</td>
                    <td>{{$student->lastName}}</td>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->sex}}</td>
                    <td>
                        <a href="#" class="btn btn-info" value={{$college->id}}>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection