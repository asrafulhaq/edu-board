(function($){
	$(document).ready(function(){

		
		// Add new user modal
		$(document).on('click','#add_user_btn', function(){
			$('#add_user_modal').modal('show');

			return false;
		});


		// Add new user modal
		$(document).on('click','#add_student_btn', function(){
			$('#add_student_modal').modal('show');

			return false;
		});

		// Add new user modal
		$(document).on('click','#add_result_btn', function(){
			$('#add_result').modal('show');

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

		// Delete User account 
		$(document).on('click', 'a#delete_user', function(e){
			e.preventDefault();

			let del = confirm('Are you sure ?');
			let id = $(this).attr('user_id');

			if ( del == true ) {

				$.ajax({
					url : 'templates/ajax/user_delete.php',
					method : "POST",
					data : { id : id },
					success : function(data){
						
						$('.mess').html(data);
						allUsers();

					},
				});

			}else {

				return false;

			}


		});



		// Add new student
		$(document).on('submit','form#add_student_form', function(e){
			e.preventDefault();

			let name = $('form#add_student_form input[name="name"]').val();
			let roll = $('form#add_student_form input[name="roll"]').val();
			let reg = $('form#add_student_form input[name="reg"]').val();

			// Validation 
			if( name == '' || roll == '' || reg == '' ){
				$('.student-mess').html("<p class=\"alert alert-danger\">All fields are required ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>");
			}else {


				$.ajax({
					url : 'templates/ajax/student_add.php',
					method : "POST",
					data : new FormData(this),
					contentType : false,
					processData : false,
					success : function(data){
						$('form#add_student_form')[0].reset();
						$('#add_student_modal').modal('hide');
						$('.mess').html("<p class=\"alert alert-success\">Student added successfull  ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>");
						allStudents();
					}
				});


			}	

			
		});


		// Show all students 
		function allStudents(){

			$.ajax({
				url : 'templates/ajax/student_all.php',
				success : function(data){
					$('table tbody#all-student').html(data);
				}
			});
		}
		allStudents();


		// Search student for result 
		$(document).on('keyup', 'input#search_student', function(){
		 	let stu_val = $(this).val();

		 	$.ajax({
		 		url : 'templates/ajax/student_search.php',
		 		method : "POST",
		 		data : { stu_val : stu_val }, 
		 		success : function(data){
		 			$('.stu_res').html(data);
		 		}
		 	});

		});

		// Select a student
		$('.student-res-data').hide();
		$(document).on('click', 'li#student_select', function(){

			// get all values
		 	let stu_id = $(this).attr('student_id');
		 	let stu_name = $(this).attr('student_name');
		 	let stu_roll = $(this).attr('student_roll');
		 	let stu_reg = $(this).attr('student_reg');
		 	let stu_pic = $(this).attr('student_pic');

		 	// Set Values
		 	$('input#search_student').val(stu_id);
		 	$('.stu_res').hide();
		 	$('label#idstudent').text('Student id');
		 	$('input#search_student').attr('disabled', '');

		 	// Single student data
		 	$('.student-res-data').show();
		 	$('.student-res-data img').attr('src', 'students/' + stu_pic);
		 	$('.student-res-data h3').html(stu_name);
		 	$('.student-res-data h4').html("<strong>Roll :</strong>" + stu_roll + "<strong>Reg :</strong> "  + stu_reg );
		});

		// Alert function 
		function msgAlert(msg, type = 'success'){

			return "<p class=\"alert alert-"+ type +"\"> "+ msg +" ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}

		// Add Students Results
		$(document).on('submit', 'form#add_student_result', function(e){
		 	e.preventDefault();
		 	$('input#search_student').removeAttr('disabled');

		 	$.ajax({
		 		url : 'templates/ajax/result_add.php',
		 		method : "POST",
		 		data : new FormData(this),
		 		contentType: false,
		 		processData : false,
		 		success :  function(data){
		 			
		 			$('form#add_student_result')[0].reset();
		 			$('#add_result').modal('hide');
		 			$('.mess').html(msgAlert('Result Added successfull'));
		 			$('.student-res-data').hide();
		 		},
		 	});


		});



	});
})(jQuery)