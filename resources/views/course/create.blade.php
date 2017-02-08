
@extends('layouts.private.adminCollege.menu')

@section('content')
    <div class="container">

       {!! Form::open(['method'=>'POST', 'route'=>'course.create']) !!}
            {!! Field::text('name') !!}
            {!! Field::number('credits') !!}

        <button type="submit" class="btn btn-primary">
            Registrar
        </button>
        {!! Form::close() !!}

    </div>
@endsection