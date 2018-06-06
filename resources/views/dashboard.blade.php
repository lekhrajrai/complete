@extends('layout.master')

@section('content')
    <div>
        <div class="btn btn-sm bg-success mt-5 ml-5" id="btnAddHubby" data-target="#custom-modal" data-toggle="modal">Add Hubby
        </div>  
        <h1>Your Hobbies</h1>
        <div class="user-hobby">
            <ul>
            @if(count($hobbies)>0)
            
                @foreach ($hobbies as  $hobby)
                    <li>{{$hobby->content}}</li>
                    <button class="btn btn-sm bg-info" id="btnMyView" data-id="{{$hobby->id}}" >View</button>
                    <button class="btn btn-sm bg-warning" id="btnMyEdit" data-id="{{$hobby->id}}">Edit</button>
                    <button class="btn btn-sm bg-danger" id="btnMyDelete" data-id="{{$hobby->id}}"> Delete</button> 
                @endforeach
           
            @else
                <h1>There are no post</h1>
            @endif

            </ul>
        </div>
        
    </div>

@endsection
