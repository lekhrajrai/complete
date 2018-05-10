<div class="modal-content"> 
		<div class="modal-header"> 
			<h5 class="modal-title">Delete Hobby</h5> 
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
				<span aria-hidden="true">&times;</span> 
			</button> 
		</div> 

		<div class="modal-body"> 
			<form id="hobbies" method="post">
			  	<button type="button" id="btnDeleteHobby" data-id="{{$hobby->id}}"   class="btn btn-primary center-block">
			  	Confirm Delete?</button> 	
			  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
			</form>
		</div> 


	</div> 