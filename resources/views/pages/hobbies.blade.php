@extends('layout.master')

@section('title','Hobbies')

@section('content')
<h1>This is Hobbies</h1>
<div class="row">
	<div class="col-12 col-sm-12 col-md-12">
		<div class="custom-content mt-5">
			<!-- @if(!Auth::guest())
			<div class="btn btn-sm bg-success" id="btnAddHubby" data-target="#custom-modal" data-toggle="modal">Add Hubby
			</div>	
			@endif -->
		</div>
	</div>
</div>
@endsection
@section('hobby-content')
<div class="hobby-list">
	<ul>
	@foreach ($hobbies as $hobby)
		<li>{{$hobby->content}}</li>

		@if(!Auth::guest())
			@if(Auth::user()->id==$hobby->user_id)
				<button class="btn btn-sm bg-info" id="btnMyView" data-id="{{$hobby->id}}" >View</button>
				<button class="btn btn-sm bg-warning" id="btnMyEdit" data-id="{{$hobby->id}}">Edit</button>
				<button class="btn btn-sm bg-danger" id="btnMyDelete" data-id="{{$hobby->id}}"> Delete</button>	
			@endif
		@endif
	@endforeach
</ul>
</div>

	
@endsection