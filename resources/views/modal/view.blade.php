<div class="modal-content"> 
	<div class="modal-header"> 
		<h5 class="modal-title">View Hobby</h5> 
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
			<span aria-hidden="true">&times;</span> 
		</button> 
	</div> 

	<div class="modal-body"> 
		<form id="hobbies">
			 <div class="form-group">
			    <label for="content">Id</label>
			    <input type="text" class="form-control text-center" name="content"
			    value="{{$hobby->id}}" disabled>
			 </div>	

			 <div class="form-group">
			    <label for="content">Hobby</label>
			    <input type="text" class="form-control text-center" name="content" id="content" 
			    value="{{$hobby->content}}" disabled>
			 </div>	
		</form>
	</div> 

	<div class="modal-footer">  
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
	</div> 
</div> 