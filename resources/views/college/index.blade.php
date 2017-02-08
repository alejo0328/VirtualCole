
@extends('layouts.private.adminCollege.menu')

@section('content')
    <h1>Colegios</h1>
    <a href="{{ url('college/create') }}" class="btn btn-success">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        Nuevo Colegio
    </a>

    <div class="container col-md-9 center-block text-center espacio-arriba">


        <table class="table table-hover">
            <tr>
                <td>NOMBRE</td>
                <td>ESTUDIANTES</td>
                <td>OPERACIONES</td>

            </tr>
            @foreach($colleges as $college)

                <tr>
                    <td>{{$college->name}}</td>
                    <td>{{count($college->students)}}</td>
                    <td>
                        <a href="{{URL::action('CreateCollegeController@show',$college->id) }}" class="btn btn-info" value={{$college->id}}>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </a>
                        <a href="{{URL::action('CreateCollegeController@delete',$college->id) }}" class="btn btn-danger" value={{$college->id}}>
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>

                </tr>

            @endforeach
        </table>

    </div>
@endsection