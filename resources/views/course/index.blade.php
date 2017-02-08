
@extends('layouts.private.adminCollege.menu')

@section('content')
    <h1>Cursos</h1>
    <a href="{{ url('course/create') }}" class="btn btn-success">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        Nuevo Curso
    </a>

    <div class="container col-md-9 center-block text-center espacio-arriba">


        <table class="table table-hover">
            <tr>
                <td>CURSO</td>
                <td>CREDITOS</td>
                <td>OPERACIONES</td>

            </tr>
            @foreach($courses as $course)

                <tr>
                    <td>{{$course->name}}</td>
                    <td>{{$course->credits}}</td>
                    <td>
                        <a href="#" class="btn btn-info" value={{$course->id}}>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </a>
                        <a href="{{URL::action('CourseController@delete',$course->id) }}" class="btn btn-danger" value={{$course->id}}>
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>

                </tr>

            @endforeach
        </table>

    </div>
@endsection