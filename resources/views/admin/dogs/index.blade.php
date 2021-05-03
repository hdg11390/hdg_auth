@extends('layouts.staghorn_table')
@section('content')

<div class="container">
    @if($dogs)
        <table id="example" class="table table-striped table-sm" style="width:100%">
            <thead>
            <tr>

                <th>ID</th>
                <th>Call Name</th>
                <th>Registered Name</th>
                <th>Birthday</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Pedigree</th>

            </tr>
            </thead>
            <tbody>
            @foreach($dogs as $dog)
                <tr>
                    <td>{{$dog->id}}</td>
                    <td>{{$dog->callName}}</td>
                    <td>{{$dog->regName}}</td>
                    <td>{{$dog->birthday}}</td>
                    <td>{{$dog->dogstat}}</td>
                    <td><a href="{{ route('admin.dogs.edit', $dog->id) }}"><img src="{{asset('images/edit.png')}}" alt=""></a></td>
                    <td><img src="{{asset('images/delete.png')}}" alt=""></td>
                    <td><button>Ped</button></td>
                </tr>

            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Call Name</th>
                <th>Registered Name</th>
                <th>Birthday</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    @endif
</div>

@endsection