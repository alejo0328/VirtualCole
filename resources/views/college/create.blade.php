
@extends('layouts.private.adminCollege.menu')

@section('content')
    <div class="container">

       {!! Form::open(['method'=>'POST', 'route'=>'college.create']) !!}
            {!! Field::text('name') !!}

        <button type="submit" class="btn btn-primary">
            Registrar
        </button>
        {!! Form::close() !!}

    </div>
@endsection