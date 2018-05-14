<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Quản Lý Nhân Viên</title>
	<base href="{{ asset('') }}">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/userdetail.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

</head>
<body>
	@yield('content')
</body>
<!-- jQuery -->
<script src="js/jquery-3.2.1.min.js"></script>
 
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/scripts.min.js"></script> -->
<script>
// submit form từ bên ngoài
	function loadForm() {
	    document.getElementById('myform').submit();
	}
//Refer data
	function refer() {
		var root = '{{url('/')}}';
		var bien = document.getElementById('userid');
		var key = bien.value;
		//truyen gia tri key qua userid nhan
		$.get(root + '/search', { userid : key }, function(data, status){
			console.log(data.users.gender);
			document.getElementById('shortname').value = data.users.user_nm;
			document.getElementById('kataname').value = data.users.user_kn;
			document.getElementById('fullname').value = data.users.user_ab;
			document.getElementById('birthday').value = data.users.birth_day;
			if (data.users.gender == 'Mal') {
				document.getElementById('gender').options[0].text;
			}else if (data.users.gender == 'Fem') {
				document.getElementById('gender').options[1].text;
			}
			var gt = document.getElementById('gender').options[1].text;
			console.log(gt);
			// var d = document.createElement("option");
			// d.text = data.users.gender;
			// gt.options.add(d, 0);	

			document.getElementById('address').value = data.users.user_ard;
			document.getElementById('password').value = data.users.password;
			document.getElementById('note').value = data.users.note;
			// document.getElementById('img').src = data.users.avatar;
		});
	}

	//reset form
	function reset() {
		document.getElementById("myform").reset();
		document.getElementById("gender").focus();
	}
	//load Img
	function loadimg() {
		var preview = document.querySelector('img'); //selects the query named img
       	var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       	//console.log(file);
       	var reader  = new FileReader();

       	reader.onloadend = function () {
           preview.src = reader.result;
       	}
		//console.log(preview);
       	if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       	} else {
           preview.src = "";
       	}
       //loadimg();
		// var x = document.getElementById("fileimg");
		// var txt = "";
  //   	console.log(x.files);
  //   	if ('files' in x) {
		//     if (x.files.length == 0) {
		//         txt = "Select one or more files.";
		//     } else {
		//         for (var i = 0; i < x.files.length; i++) {
		//             var file = x.files[i];
		//             if ('name' in file) {
		//                 txt += file.name;
		//             }
		//         }
		//     }
		// }
		// document.getElementById ("imgavatar").src = txt;
		// document.getElementById ("imgavatar").hidden = false;
		// document.getElementById ("fileimg").hidden = true;
	}

</script>
	<script type="text/javascript">
	//load calendar
            (function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</html>