function sendAjax(request ,callback=''){
	var url = request.url?request.url:'/'; 
	var method = request.method?request.method:'get'; 
	var data = request.data?request.data:{}; 


	$.ajaxSetup({ 
		headers: { 
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
		} 
	});

	$.ajax({ 
		url : url, 
		method : method, 
		data : data, 


		success: function(response){ 
			$('#custom-modal').modal('hide');
				if (typeof(callback) != 'string') {
					callback(response); 
				} 
			} 
	}); 
} 


function showModal(url){ 
	$('#custom-modal').modal(); 
		sendAjax({url:url},
		function(data){ 
			$('#ModalBody').html(data); 
		});
	}




$(document).ready(function(){
	$(document).on('click','#btnSaveHobby',function(){
		//var data = $('input#content').val();
		var data = $('#hobbies').serializeArray();
		console.log(data);

		sendAjax({
			url:'storeHobby',
			method:'post',
			data:data,
		},function(data){
			location.reload(true);
		});
	});
});



//update and delete
$(document).ready(function(){
	$(document).on('click','#btnUpdateHobby',function(e){
		e.preventDefault();
		var data = $('#hobbies').serializeArray();
		console.log(data);
		var id = $(this).attr('data-id');
		console.log(id);
		sendAjax({
			url:'updateHobby/'+id,
			method:'post',
			data:data
		},function(data){
			location.reload(true);
		});
	});
});

$(document).ready(function(){
	$(document).on('click','#btnDeleteHobby', function(e){
		e.preventDefault();

		var id = $(this).attr('data-id');
		console.log(id);

		sendAjax({
			url:'deleteConfirm/'+id,
			method:'post',

		}, function(){
			location.reload(true);
		})
	})
})


