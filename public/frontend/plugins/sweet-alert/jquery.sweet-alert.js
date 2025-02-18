$(function(e) {

	//Basic
	$('#swal-basic').on('click', function () {
		$('body').removeClass('timer-alert');
		swal('Welcome to Your Admin Page')
	});

	//A title with a text under
	$('#swal-title').click(function () {
		$('body').removeClass('timer-alert');
		swal(
			{
				title: 'Here is  a title!',
				text: 'Title alert',
			}
		)
	});

	//Success Message
	$('#swal-success').click(function () {
		$('body').removeClass('timer-alert');
		swal(
			{
				title: 'Well done!',
				text: 'You clicked the button!',
				type: 'success',
				confirmButtonColor: '#57a94f'
			}
		)
	});

	//Warning Message
	$('#swal-warning').click(function () {
		$('body').removeClass('timer-alert');
		swal({
		  title: "Are you sure?",
		  text: "Your will not be able to recover this imaginary file!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn btn-danger",
		  confirmButtonText: "Yes, delete it!",
		  closeOnConfirm: false
		},
		function(){
		  swal("Deleted!", "Your imaginary file has been deleted.", "success");
		});
	});

	//Parameter
	$('#swal-parameter').click(function () {
		$('body').removeClass('timer-alert');
		swal({
		  title: "Are you sure?",
		  text: "You will not be able to recover this imaginary file!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "Yes, delete it!",
		  cancelButtonText: "cancel !",
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm) {
		  if (isConfirm) {
			swal("Deleted!", "Your imaginary file has been deleted.", "success");
		  } else {
			swal("Cancelled", "Your imaginary file is safe :)", "error");
		  }
		});
	});

	//Custom Image
	$('#swal-image').click(function () {
		$('body').removeClass('timer-alert');
		swal({
			title: 'Lovely!',
			text: 'your image is uploaded.',
			imageUrl: '../assets/images/brand/logo-2.png',
			animation: false,
		})
	});

	//Auto Close Timer
	$('#swal-timer').click(function () {
		$('body').removeClass('timer-alert');
		swal({
			title: 'Auto close alert!',
			text: 'I will close in 1 seconds.',
			timer: 1000
		})?.then(
			function () {
			},
			// handling the promise rejection
			function (dismiss) {
				if (dismiss === 'timer') {
					console.log('I was closed by the timer')
				}
			}
		)
	});


	//Ajax with Loader Alert
	$('#swal-ajax').click(function () {
		$('body').removeClass('timer-alert');
		swal({
		  title: "Ajax request example",
		  text: "Submit to run ajax request",
		  type: "info",
		  showCancelButton: true,
		  closeOnConfirm: false,
		  showLoaderOnConfirm: true
		}, function () {
		  setTimeout(function () {
			swal("Ajax request finished!");
		  }, 2000);
		});
	});

	//alert with timer
	$(document).on("click", "#swal-danger", function(e) {
		$('body').removeClass('timer-alert');
		swal({
			title: "Alert",
			text: "Danger alert",
			type: "error",
			showCancelButton: true,
			confirmButtonText: 'Exit',
			cancelButtonText: 'Stay on the page'
		});
	});

	//
	$(document).on("click", "#swal-info", function(e) {
		$('body').removeClass('timer-alert');
		swal({
			title: "Alert",
			text: "Info alert",
			type: "info",
			showCancelButton: true,
			confirmButtonText: 'Exit',
			cancelButtonText: 'Stay on the page'
		});
	});

		// Message
	$(document).on("click", "#but1", function(e) {
		$('body').removeClass('timer-alert');
		var message = $("#message").val();
		if (message == "") {
			message = "Your message";
		}
		swal(message);
	});

	// With message and title
	$(document).on("click", "#but2", function(e) {
		$('body').removeClass('timer-alert');
		var message = $("#message").val();
		var title = $("#title").val();
		if (message == "") {
			message = "Your message";
		}
		if (title == "") {
			title = "Your message";
		}
		swal(title, message);
	});
});