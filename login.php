<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="description" content="">
    <meta name="author" content="">
 
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
		html, body {
        	background-color: #eee;
		}
		body {
        padding-top: 120px;
      	}

		.login-form {
			margin-left: 30%;
			width: 300px;
			background-color: #fff;
			padding: 20px;
			
	        -webkit-border-radius: 10px 10px 10px 10px;
	        -moz-border-radius: 10px 10px 10px 10px;
	        border-radius: 10px 10px 10px 10px;
	        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
	        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
	        box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }
 
      
 
    </style>
 
</head>
<body>
	<div class="navbar navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	          <a class="brand" href="#">Project name</a>
	          <div class="nav-collapse">
	            <ul class="nav">

	              <li class="active"><a href="#">Home</a></li>
	              <li><a href="#about">About</a></li>
	              <li><a href="#contact">Contact</a></li>
	            </ul>
	          <!--/.nav-collapse -->
	        </div>
	      </div>
	    </div></div>
		<div class="container">
		        <div class="content">
		            <div class="row">
		                <div class="login-form">
		                    <h2>Login</h2>
		                    <form action="">
		                        <fieldset>
		                            <div class="clearfix">
		                                <input type="text" placeholder="Username">
		                            </div>
		                            <div class="clearfix">
		                                <input type="password" placeholder="Password">
		                            </div>
		                            <button class="btn btn-primary" type="submit">Sign in</button>
		                        </fieldset>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div> <!-- /container -->
		</body>
</body>
</html>