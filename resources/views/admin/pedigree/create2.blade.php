@extends('layouts.staghorn_table')
@section('content')
<h1>Create Pedigree</h1>


{!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\PedigreeController@index']) !!}

<div class="form-group">
    {!! Form::label('Name','Registered Name:') !!}
    {!! Form::text('regName', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::Label('mped_id', 'Sire:') !!}
{!! Form::select('mped_id', $mitems, $selectedID, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('fped_id', 'Dame:') !!}
    {!! Form::select('fped_id', $fitems, $selectedID, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('colour','Colour:') !!}
    {!! Form::select('colour',['Yellow', 'Black','Chocolate'], ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('birthday','Date of Birth:') !!}
    {!! Form::date('birthday', null, ['class'=>'form-control']) !!}
</div>






@endsection