@extends('layouts.staghorn_table')
@section('content')


    <h1>Register a Photo</h1>
<div class="row">
    <div class="col-lg-3"></div>
<div class="col-lg-6">
    {!! Form::open(['method'=>'POST', 'action'=>'AdminPhotoController@store ']) !!}

    <div class="form-group">
        {!! Form::label('callName','Call Name:') !!}
        {!! Form::text('callName', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('img_pos','Position:') !!}
        {!! Form::text('img_pos', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pics','Photo:') !!}
        {!! Form::text('pics', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('img_by','Photo By:') !!}
        {!! Form::text('img_by', null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Register', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
</div>
   <div class="col-lg-3"></div>


</div>
@endsection
