@extends('layout.master')

@section('title','About')

@section('content')
<h1>This is about</h1>
<table id="table_id" class="display" data-order='[[ 1, "asc" ]]' data-page-length='5'>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    	@foreach ($users as $user)
    		
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
    	@endforeach
    </tbody>
</table>
@endsection

