$(document).ready(function () {
  $error = $('<center><h2 class = "text-info">Please Check the Service Number and Re-Enter<h2></center>')
  $error1 = $('<center><h2 class = "text-info">Please Enter the Service Number<h2></center>')
  $('#login').click(function () {
    $error.remove()
    $error1.remove()
    $employee = $('#employee').val()
    // console.log($employee)
    // return
    if ($employee == '') {
      $error1.appendTo('#error')

      //console.log('bROKE')
      return
    }else {
      //console.log('here.....')

      $.post('check.php', {employee: $employee}, function (show) {

		$("#result").html("");

        if (show == 'Success') {


          $.ajax({
            type: 'POST',
            url: 'login.php',
            data: {
              employee: $employee
            },
			success: function (result)
			 {
				$("#form").addClass("hidden");

				$result = $(result).appendTo('#result')
				$('#employee').val('');
            }
          })
        }else {
          $('#employee').val('')
          $error.appendTo('#error')
        }
      }
      )}
  })
})
