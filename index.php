<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Workshop Daily</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit:300,400&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/670bc05586.js" crossorigin="anonymous"></script>
</head>

<body>
	<style>
		body {
			background-color: #F8F7FA;
			font-family: 'Kanit', sans-serif;
		}

		input[type="search"] {

			border-radius: 15px;
			transition: 0.5s;
			border: 2px solid;
			border-color: #DBDBDB;
			padding-left: 2.375rem;
			background-color: #F4F4F4;
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

	<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #fff; box-shadow: 2px 4px 32px rgba(207, 207, 207, 0.25 ">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="img/logo.svg" href="index.php" width="130" height="35" alt="">
			</a>
			<button class="navbar-toggler" type="button">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<div class="form-inline my-2 my-lg-0">
					<!-- <span class="fa fa-search form-control-feedback"></span> -->
					<input class="form-control mr-sm-2" type="search" placeholder="Search Workshops"
						aria-label="Search">
				</div>


				<ul class="navbar-nav mr-auto justify-content-end" style="width: 100%">
					<li class="nav-item">
						<a class="nav-link" id="publish" href="publish.php">+ ลงประกาศเวิร์กช็อป <span
								class="sr-only">(current)</span></a>
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

	<div class="container">
		<div class="row" style="margin-top: 30px;">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="img/Banner_01.png" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/Banner_02.png" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/Banner_02.png" alt="Second slide">
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 60px;">
			<div class="col-sm">
				<h5>หมวดหมู่</h5>
			</div>
			<div class="col-sm">
				<a href="#" style="float: right;">ทั้งหมด</a>
			</div>
		</div>

		<div class="row" style="margin-top: 20px;">
			<div class="col col-sm">
				<div class="card" href="detail.html" style="margin: auto;">
					<img src="img/icon/icon_business.png" class="card-img-top"
						style="width: 50px; margin: auto; margin-top: 30px;">
					<div class="card-body" style="text-align: center;">
						<h6 class="card-subtitle mb-2 text-muted">ธุรกิจ</h6>
					</div>
				</div>
			</div>

			<div class="col col-sm">
				<div class="card" style="margin: auto;">
					<img src="img/icon/icon_tech.png" class="card-img-top"
						style="width: 50px; margin: auto; margin-top: 30px;">
					<div class="card-body" style="text-align: center;">
						<h6 class="card-subtitle mb-2 text-muted">เทคโนโลยี</h6>
					</div>
				</div>
			</div>

			<div class="col col-sm">
				<div class="card" style="margin: auto;">
					<img src="img/icon/icon_film.png" class="card-img-top"
						style="width: 50px; margin: auto; margin-top: 30px;">
					<div class="card-body" style="text-align: center;">
						<h6 class="card-subtitle mb-2 text-muted">ฟิลม์และมีเดีย</h6>
					</div>
				</div>
			</div>

			<div class="col col-sm">
				<div class="card" style="margin: auto;">
					<img src="img/icon/icon_social.png" class="card-img-top"
						style="width: 50px; margin: auto; margin-top: 30px;">
					<div class="card-body" style="text-align: center;">
						<h6 class="card-subtitle mb-2 text-muted">สังคม</h6>
					</div>
				</div>
			</div>

			<div class="col col-sm">
				<div class="card" style="margin: auto;">
					<img src="img/icon/icon_art.png" class="card-img-top"
						style="width: 50px; margin: auto; margin-top: 30px;">
					<div class="card-body" style="text-align: center;">
						<h6 class="card-subtitle mb-2 text-muted">ศิลปะ</h6>
					</div>
				</div>
			</div>

			<div class="col col-sm">
				<div class="card" style="margin: auto;">
					<img src="img/icon/icon_health.png" class="card-img-top"
						style="width: 50px; margin: auto; margin-top: 30px;">
					<div class="card-body" style="text-align: center;">
						<h6 class="card-subtitle mb-2 text-muted">สุขภาพ</h6>
					</div>
				</div>
			</div>

			<div class="col col-sm">
				<div class="card" style="margin: auto;">
					<img src="img/icon/icon_food.png" class="card-img-top"
						style="width: 50px; margin: auto; margin-top: 30px;">
					<div class="card-body" style="text-align: center;">
						<h6 class="card-subtitle mb-2 text-muted">อาหาร</h6>
					</div>
				</div>
			</div>

			<div class="col col-sm">
				<div class="card" style="margin: auto;">
					<img src="img/icon/icon_music.png" class="card-img-top"
						style="width: 50px; margin: auto; margin-top: 30px;">
					<div class="card-body" style="text-align: center;">
						<h6 class="card-subtitle mb-2 text-muted">ดนตรี</h6>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 40px;">
			<div class="col-sm">
				<h5>เวิร์กช็อปเป็นที่นิยม</h5>
			</div>
			<div class="col-sm">
				<a href="#" style="float: right;">ทั้งหมด</a>
			</div>
		</div>

		<div class="row" style="margin-top: 15px;">
			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/workshop_img.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text" style="color: #B64C00;">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/workshop_img.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text" style="color: #B64C00;">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/workshop_img.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text" style="color: #B64C00;">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/workshop_img.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text" style="color: #B64C00;">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/workshop_img.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text" style="color: #B64C00;">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/workshop_img.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text" style="color: #B64C00;">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/workshop_img.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text" style="color: #B64C00;">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/workshop_img.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text" style="color: #B64C00;">20 November 2019 </p>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 40px;">
			<div class="col-sm">
				<h5>บทความที่น่าสนใจ</h5>
			</div>
			<div class="col-sm">
				<a href="#" style="float: right;">ทั้งหมด</a>
			</div>
		</div>

		<div class="row" style="margin-top: 15px;">
			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/img_1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/img_1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/img_1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/img_1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text">20 November 2019 </p>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top:40px;">
			<div class="col-sm">
				<h5>มาใหม่</h5>
			</div>
			<div class="col-sm">
				<a href="#" style="float: right;">ทั้งหมด</a>
			</div>
		</div>

		<div class="row" style="margin-top: 15px;">
			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/img_1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/img_1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/img_1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text">20 November 2019 </p>
					</div>
				</div>
			</div>

			<div class="col col-sm-3 workshop-card">
				<div class="card" style="margin: auto;">
					<img class="card-img-top" src="img/img_1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text </p>
						<p class="card-text">20 November 2019 </p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
</body>

</html>