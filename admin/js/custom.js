(function($){
	$(document).ready(function(){

		
		// Add new user modal
		$(document).on('click','#add_user_btn', function(){
			$('#add_user_modal').modal('show');

			return false;
		});

		// All user data fetch
		function allUsers(){

			$.ajax({
				url : 'templates/ajax/user_all.php',
				success : function(data){
					$('tbody#all_users_tbody').html(data);
				}
			});

		}
		allUsers();


		// Add user form submit 
		$(document).on('submit','form#add_user_form', function(event){
			event.preventDefault();

			$.ajax({
				url : 'templates/ajax/user_add.php',
				method : "POST",
				data : new FormData(this),
				contentType: false,
				processData : false,
				success :  function(data){
					
					$('form#add_user_form')[0].reset();
					$('#add_user_modal').modal('hide');
					$('.mess').html(data);
					allUsers();

				},
			});


		});

	});
})(jQuery)