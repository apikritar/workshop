<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login Workshop Daily</title>
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
 
			border-color: #DBDBDB;
 
            background-color: #F4F4F4;
            padding-left: 2.375rem;
			}
		.card {
			transition: 0.2s;
		}

		.card:hover {
   		 box-shadow: 0 8px 16px 0 rgba(223, 223, 223, 0.8);
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
        session_start();

        if(isset($_POST['email'])) {
            //remove backslashes
            $email = stripslashes($_REQUEST['email']);
            // escape special character in a string
            $email = mysqli_real_escape_string($con,$email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);

            // Checking is user existing in the database or not
            $query = "SELECT * FROM users WHERE email='$email'AND password='".md5($password)."'";

            $result = mysqli_query($con, $query) or die(mysql_error());
            $row = mysqli_num_rows($result);

            if($row == 1) {
                 $_SESSION['email'] = $email;
                //  $email;
                //  while ($rowData = $data) {
                //   $email = $rowData['email'];
                //  }
                //  echo $email;
            //Redirect user to index.php
            // header("Location: index.html");
            } else {
                echo "<div class='form'>  
                    <h3>Email Address/Password is incorrect.</h3>
                    <br>Click here to <a href='login.php'>Login</a>
                    </div>";                           
            }
            } else {
    ?>

    
       
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff; box-shadow= 2px 4px 32px rgba(207, 207, 207, 0.25;" >
			<div class="container">
				 <a class="navbar-brand" href="index.html">
        		<img src="img/logo.svg" href="index.php" width="130" height="35" alt="">
     </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">

				    <form class="form-inline my-2 my-lg-0">		
						<input class="form-control mr-sm-2" type="search"  placeholder="Search Workshops" aria-label="Search">
					</form>


				    <ul class="navbar-nav mr-auto justify-content-end" style="width: 100%">
				      <li class="nav-item">
				        	<a class="nav-link" id="publish" href="publish.html">+ ลงประกาศเวิร์กช็อป <span class="sr-only">(current)</span></a>
					  </li>&nbsp;
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

        <form name="frmlogin"  method="post" action="login.php">
           <div class="form">         
                <h3 style="color: #087CE8">ยินดีตอนรับ</h3>
                <form action="" method="post" name="login">
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="submit" name="submit1" value="login"> </form>
                <p>ยังไม่มีบัญชี? <a href ='registration.php'>ลงทะเบียนผู้ใช้</a></p>              
            </div>
        </form>

        <?php } ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    </body>
</html>