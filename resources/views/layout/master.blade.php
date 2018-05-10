<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Master Title')</title>
	<meta name="csrf-token" content="{{csrf_token()}}" >
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
</head>
<body>
	@include('inc.navbar')
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				@yield('content')
				@yield('hobby-content')
			</div>
		</div>
		
	
	<script type="text/javascript" src="{{asset('js/all.js')}}"></script>

	<script type="text/javascript">
		//add hobbies
		$(document).ready(function(){
			$(document).on('click','#btnAddHubby',function(e){
				e.preventDefault();
				showModal('addHobby');
			});
		});


		//update and delete hobby
		$(document).ready(function(){
			$(document).on('click','#btnMyView',function(e){
				e.preventDefault();
				var id = $(this).attr('data-id');
				console.log(id);
				
				showModal('viewHobby/'+id);
			});
		});

		$(document).ready(function(){
			$(document).on('click','#btnMyEdit',function(e){
				e.preventDefault();
				var id = $(this).attr('data-id');
				console.log(id);
				showModal('editHobby/'+id);
			});
		});

		$(document).ready(function(){
			$(document).on('click','#btnMyDelete',function(e){
				e.preventDefault();
				var id = $(this).attr('data-id');
				console.log(id);
				
				showModal('deleteHobby/'+id);
			});
		});
		
	</script>

</body>
</html>