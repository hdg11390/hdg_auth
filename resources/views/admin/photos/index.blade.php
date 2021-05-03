@extends('layouts.staghorn_table')
@section('content')

<div class="container">
    @if($photos)
        <table id="example" class="table table-striped table-sm" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Call Name</th>
                <th>Position</th>
                <th>Photo</th>
                <th>Photo By</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            </thead>
            <tbody>
            @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td>{{$photo->callName}}</td>
                    <td>{{$photo->img_pos}}</td>
                    <td>{{$photo->pics}}</td>
                    <td>{{$photo->img_by}}</td>
                    <td><img src="{{asset('images/edit.png')}}" alt=""></td>
                    <td><img src="{{asset('images/delete.png')}}" alt=""></td>
                </tr>

            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Call Name</th>
                <th>Position</th>
                <th>Photo</th>
                <th>Photo By</th>
                <th></th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    @endif
</div>

@endsection


