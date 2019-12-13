<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>registration Workshop Daily</title>
    <link rel="stylesheet" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit:300,400&display=swap" rel="stylesheet">

</head>
<style>
    		body {
			background-color: #F8F7FA;
			font-family: 'Kanit', sans-serif;
		}			

		input[type="search"] {  			
			border-radius: 15px;
			transition: 0.5s;
    		border: 1px solid ;
			border-color: #DBDBDB;
			padding-left: 2.375rem;
			background-color: #F4F4F4;
            }
            
            #publish {
			text-transform: uppercase;
			background: linear-gradient(to right, #A1D570 0%, #49A5E5 100%);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
        }
               
</style>
<body>
    <?php 
        require('db.php'); 
        // if form submitted, insert values into database

        if(isset($_REQUEST['email']))     {
            // remove backslash
            $email = stripslashes($_REQUEST['email']);
            // escape specail character in a string
            $email = mysqli_real_escape_string($con, $email);
            $firstname = stripslashes($_REQUEST['firstname']);
            $firstname = mysqli_real_escape_string($con, $firstname);
            $lastname = stripslashes($_REQUEST['lastname']);
            $lastname = mysqli_real_escape_string($con, $lastname);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $trn_date = date("Y-m-d H:i:s");

            $query = "INSERT INTO users (email, password, firstname, lastname, trn_date)
                values ('$email', '".md5($password)."', '$firstname', '$lastname', '$trn_date')";

            $result = mysqli_query($con, $query);

            if($result) {
                echo "<div class='form'>
                <h3> You are registered successfully</h3>
                <br> Click here to <a href='login.php'>Login</a> 
                </div>";

            }

        } else {
        
        ?>

            <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #fff;">
			<div class="container">
				 <a class="navbar-brand" href="#">
        		<img src="img/logo.svg" href="index.html" width="130" height="35" alt="">
                
                </a>
				  <button class="navbar-toggler" type="button">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					 <div class="form-inline my-2 my-lg-0">	
						<!-- <span class="fa fa-search form-control-feedback"></span> -->
						<input class="form-control mr-sm-2" type="search"  placeholder="Search Workshops" aria-label="Search">
					</div>
			

				    <ul class="navbar-nav mr-auto justify-content-end" style="width: 100%">
				      <li class="nav-item">
				        	<a class="nav-link" id="publish" href="publish.html">+ ลงประกาศเวิร์กช็อป <span class="sr-only">(current)</span></a>
					  </li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="home.html">เกี่ยวกับ</a>
					  	</li>&nbsp &nbsp
						<li class="nav-item">
				        	<a class="nav-link" href="login.php">ลงชื่อเข้าใช้</a>
				      </li>
				    </ul>
				  </div> 
		  	</div>
		</nav>
        
        <div class="form">
        <h3 style="color: #087CE8" >มาเริ่มกันเลย</h3>
        <form name="registration" action="" method="POST">
        
        <input type="email" name="email" placeholder="Email" require><br>
        <input type="text" name="firstname" placeholder="Firstname" require>
        <input type="text" name="lastname" placeholder="Lastname" require><br>
        <input type="password" name="password" placeholder="Password" require><br>
        <input type="submit" name="Submit" value="Register" >
        </form>
        <p> มีบัญชีแล้ว? <a href="login.php">Log in</a></p>
        <p id="privacy">By continuning, I accept the Workshop Daily <a href="#">terms of service</a>, have read <a href="#">privacy policy.</a></p>
        </div>

    <?php } ?>

</body>
</html>