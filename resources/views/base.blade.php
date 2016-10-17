<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <style>
	    * {
	    	margin: 0;
	    	padding: 0;
	    }
	    body {
	   
	      display: flex;
	      min-height: 100vh;
	      flex-direction: column;
	    }

	    main {
	      flex: 1 0 auto;
	    }

	    body {
	      background: #fff;
	    }

	    .input-field input[type=date]:focus + label,
	    .input-field input[type=text]:focus + label,
	    .input-field input[type=email]:focus + label,
	    .input-field input[type=password]:focus + label {
	      color: #e91e63;
	    }

	    .input-field input[type=date]:focus,
	    .input-field input[type=text]:focus,
	    .input-field input[type=email]:focus,
	    .input-field input[type=password]:focus {
	      border-bottom: 2px solid #e91e63;
	      box-shadow: none;
	    }
	</style>
</head>
<body>
		  <nav>
		    <div class="nav-wrapper">
		      <img src="{{ asset('logoaaveg_white.png') }}"style="width:150px;margin:5px;">
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="/oc">OC</a></li>
		        <li><a href="/content">Content</a></li>
		        <li onclick=""><a href="/admin/login">Logout</a></li>
		      </ul>
		    </div>
		  </nav>
		  <script type="text/javascript">
		  	function logout() {
				var route = '/content/shortlist';
				var method = 'POST';

				var request = $.ajax({
					url: route,
					method: method,
					data: {
					}
				});
				request.done(function(data){
					var info = JSON.parse(data);
					if(info.status_code == 200) {
					} else {
						alert('Updation Failed');
					}
				});
			}
		  </script>
</body>
<div class="container">
@yield('main')
</div>
</html>