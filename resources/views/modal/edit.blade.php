<div class="modal-content"> 
	<div class="modal-header"> 
		<h5 class="modal-title">Edit Hobby</h5> 
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
			<span aria-hidden="true">&times;</span> 
		</button> 
	</div> 

	<div class="modal-body"> 
		<form id="hobbies" method="post">

			<div class="form-group">
		    	<label for="content">id</label>
		    	<input type="text" class="form-control text-center" name="content" value="{{$hobby->id}}" disabled>
		  	</div>

		  	<div class="form-group">
		    	<label for="content">Hobby</label>
		    	<input type="text" class="form-control text-center" name="content" id="content" value="{{$hobby->content}}">
		  	</div>	
		</form>
	</div> 

	<div class="modal-footer"> 
		<button type="button" id="btnUpdateHobby"   class="btn btn-primary" data-id="{{$hobby->id}}">Update Hobby</button> 
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
	</div> 
</div> 