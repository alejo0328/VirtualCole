
@extends('layouts.private.adminCollege.menu')

@section('content')
    <div class="container col-md-9 center-block quitar-float text-center espacio-arriba">


        <table class="table table-hover">
            <tr>
                <td>NOMBRE</td>
                <td>OPERACIONES</td>

            </tr>
            @foreach($colleges as $college)

                <tr>
                    <td>{{$college->name}}</td>
                    <td>
                        <a href="#" class="btn btn-info" value={{$college->id}}>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </a>
                        <a href="#" class="btn btn-danger" value={{$college->id}}>
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>

                </tr>

            @endforeach
        </table>

        <ul>

        </ul>
    </div>
@endsection