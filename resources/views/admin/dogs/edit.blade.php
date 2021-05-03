@extends('layouts.staghorn_table')
@section('content')
<div class="text-center p2"><h1>Add Dog to the Database</h1></div>

<div class="row">
    <div class="col-lg-4"></div>    
<div class="col-lg-4">


    {!! Form::model($dogs, ['method'=>'PATCH', 'action'=>['App\Http\Controllers\DogController@update', $dogs->id]]) !!}

<div class="form-group">
    {!! Form::label('callame','Call Name:') !!}
    {!! Form::text('callName', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('regName','Registered Name:') !!}
    {!! Form::text('regName', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::Label('mped_id', 'Sire:') !!}
{!! Form::select('mped_id', $mitems, $selectedID, (dogs->'mped_id') ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('fped_id', 'Dame:') !!}
    {!! Form::select('fped_id', $fitems, $selectedID, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('clearances','Clearances:') !!}
    {!! Form::text('clearances', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('birthday','Date of Birth:') !!}
    {!! Form::date('birthday', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('pic','Picture:') !!}
    {!! Form::text('pic', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('dogstat','Status:') !!}
    {!! Form::select('dogstat',['Upcoming' => 'Upcoming', 'Active' => 'Active', 'Greeter' => 'Greeter', 'Retitred' => 'Retired', 'Rainbow' => 'Rainbow'], ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('colour','Colour:') !!}
    {!! Form::select('colour',['Yellow '=> 'Yellow', 'Black'=> 'Black', 'Chocolate' => 'Chocolate'], ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('sex','Sex:') !!}
    {!! Form::select('sex',['Male '=> 'Male', 'Female'=> 'Female'], ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('blurb','Content:') !!}
    {!! Form::textarea('blurb', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Add Dog', ['class'=>'btn btn-primary']) !!}    
    </div>
   {!! Form::close() !!}
</div>
<div class="col-lg-4"></div>
</div>
    
@endsection