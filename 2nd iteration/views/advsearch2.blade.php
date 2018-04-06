<!DOCTYPE html>
<html>
<head>
<title>Search Blade</title>
	<!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Exact login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->

	<!-- Custom Theme files -->
	<link href="css/style3.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom Theme files -->
	
	<!-- web font --> 
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web font --> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/penna" type="text/css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="btm_border">
<div class="h_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
		</div>
		<div class="clear"></div>
	</div>
	<div class='h_btm'>
		<div class='cssmenu'>
			<ul>
			    <li class='active'><a href='/'><span>Home</span></a></li>
			    <li><a href='/adv1'><span>Advanced Search 1</span></a></li>
			    <li><a href='/adv2'><span>Advanced Search 2</span></a></li>
			    <li class='has-sub'><a href='/login'><span>Login</span></a></li>
			    <li class='last'><a href='/register'><span>Sign Up</span></a></li>
			 	<div class="clear"></div>
			 </ul>
	</div>
	<div class="search">
    	<form>
    		<input type="text" Placeholder="Basic Search" value="">
    		<input type="submit" value="">
    	</form>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>

	<div class="main">
		<div class="container">
		<div class="jumbotron">
			<h1>Book Details</h1>
			<p>Advanced Search</p>
			</div>
			</div>
		<div class="main-w3lsrow">
			<div class="login-form login-form-left"> 
				<div class="agile-row">					
					<div class="clear"></div>
					<div class="login-agileits-top">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var max_fields      = 10; 
    var wrapper         = $(".input_fields_wrap"); 
    var add_button      = $(".add_field_button"); 
    
    var x = 1;
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;
            $(wrapper).append('<div> <select name="name[]"> <option value="AND">AND</option> <option value="OR">OR</option><option value="NOT">NOT</option></select><input type="text" name="mytext[]"/><select name="place[]"> <option value="title">title</option> <option value="author">author</option><option value="publisher">publisher</option><option value="genre">genre</option><option value="language">language</option><option value="translations">translations</option><option value="keywords">keywords</option><option value="description">description</option></select><a href="#" class="remove_field">Remove</a></div>'); 
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
						<form action="/search1" method="get">
{{ csrf_field() }}
<div class="input_fields_wrap">

    <button class="add_field_button">Add More Fields</button>
    <div>
    <select name="name[]">
  <option value="AND">AND</option>
  <option value="OR">OR</option>
  <option value="NOT">NOT</option>
	</select>
	
	<input type="text" name="mytext[]"/>
	
	<select name="place[]"> 
	<option value="title">title</option> 
	<option value="author">author</option>
	<option value="publisher">publisher</option>
	<option value="genre">genre</option>
	<option value="language">language</option>
	<option value="translations">translations</option>
	<option value="keywords">keywords</option>
	<option value="description">description</option>
	</select>
	

</div>
</div>
<input type="submit" value="Submit">
</form>	
					</div> 
				</div>  
		</div> 
		</div> 
	</div>	
	<!--footer-->
<div class="footer-bg">	
<div class="wrap">
<div class="footer">
  <div class="box1">
	<h4 class="btm">What We Do</h4>
	<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. ions from the 1914 below for those  by H. Rackham</p>
	<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those The standard chunk of Lorem Ipsum used since the 1500s is reproduced reproduced</p>
  </div>
   <div class="box1">
	<h4 class="btm">Categories</h4>
	<nav>
		<ul>
			<li><a href="#">The standard chunk of Lorem Ipsum used since </a></li>
			<li><a href="#">Duis a augue ac libero euismod viverra sitth</a></li>
			<li><a href="#">Duis a augue ac libero euismod viverra sit </a></li>
			<li><a href="#">The standard chunk of Lorem Ipsum used since </a></li>
			<li><a href="#">Duis a augue ac libero euismod viverra sit </a></li>
			<li><a href="#">The standard chunk of Lorem Ipsum used since </a></li>
			<li><a href="#">Duis a augue ac libero euismod viverra sit </a></li>
	    </ul>
	</nav>
	</div>
	<div class="box1">
		<h4 class="btm">Get in touch</h4>
		<div class="box1_address">
			<p>500 Lorem Ipsum Dolor Sit,</p>
			<p>22-56-2-9 Sit Amet, Lorem,</p>
			<p>USA</p>
			<p>Phone:(00) 222 666 444</p>
			<p>Fax: (000) 000 00 00 0</p>
			<p>Email: <a href="mailto:info@gmail.com">info[at]mycompany.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>

		</div>
	</div>
	<div class="clear"></div>			
</div>
</div>
</div>
<!--footer1-->
</body>
</html>