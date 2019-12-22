<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Publish your Workshop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit:300,400&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/670bc05586.js" crossorigin="anonymous"></script>
    
</head>
<style>
    

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
			
    h3 {
        font-size: 20px;
		}
		
  	h4 {
	   margin-bottom:10px;
	   font-size: 18px;
	   color: #087CE8;
   		}

   h5 {
	   font-size: 16px;
	   margin: 0px 0px 0px;
   }
   h6 {
	font-size: 14px;
	color: #666;
	margin-top: 20px;

   }
   p{
       color: #292929;
   }

   input[type="text"],
   input[type="number"] {
	width: 495px;
    height: 35px;
    border-radius: 3px;
    border: 1px solid;
    border-color: #C5C5C5;
    padding: 10px;
    color: #333;
    font-size: 14px;
    margin-top: 0px;
   }

   #tag-button {
	   color: #087CE8;
	   width: 72px;
	   height: 35px;
	   background-color: #F2F8FE;
	   border-color: #087CE8;  

   }

   #tag-button:hover {
    background-color: #ADD6FF;
   }

	.btn.dropdown-toggle:focus {
    outline: none !important;
	}

.bootstrap-select>.dropdown-toggle {
	width: 495px;
    height: 35px;
    border-radius: 3px;
    border: 1px solid;
	border-color: #C5C5C5;
	padding: 0px 10px!important;
	}

	a.dropdown-item {
	width: auto;
	}

	.bootstrap-select .dropdown-menu {
	width: 495px;
	}

	#custom-button {
	padding: 8px;
    color: #3D3D3D;
    background-color: #F1F1F1;
    border: 1px solid #D4D4D4;
    border-radius: 5px;
	cursor: pointer;
	  }
	  
	#custom-button1 {
	padding: 8px;
    color: #3D3D3D;
    background-color: #F1F1F1;
    border: 1px solid #D4D4D4;
    border-radius: 5px;
	cursor: pointer;
  	}
  
  	#custom-text,#custom-text1 {
    margin-left: 10px;
    font-family: sans-serif;
    color: #aaa;
	  }
	 

  	footer {
    left: 0;
    margin: 50px 0px 0px;
    bottom: 0;
    width: 100%;
    height: 45px;
    background-color: #087CE8;
    color: white;
	text-align: left;
	padding: 10px 70px 10px;
  	}

  	#nextPage  {
  	float: right;
	margin-top: 40px;
	}

</style>

<body >
	
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

		<div class="container" style="margin-top: 80px;">
           <div> <H3 style="color: #087CE8">ลงประกาศเวิร์กช็อปของคุณกับ<img src="img/logo.svg" width="140" height="40"></H3></div>
            
			<div class="container" style="margin-top: 50px;">
				<div class="row">
					<div class="col col-sm-12">
						<h4>ข้อมูลทั่วไป</h4>
						<h5>ตั้งชื่อเวิร์กช็อปและบอกผู้คนที่สนใจว่า ทำไมพวกเขาถึงต้องมา<br>
                        ใส่รายละเอียดที่เป็นไฮไลท์ของเวิร์กช็อปที่ไม่เหมือนใคร</h5>

					   <h6>ชื่อเวิร์กช็อป</h6>
					   <input type="text" name="title" placeholder="" maxlength="250" require><br>
					   <h6 style="margin-top: 20px;">คำโปรยเวิร์กช็อป</h6>
					   <input type="text" name="intro" placeholder="" style="height: 60px;" require><br>
					   <h6 style="margin-top: 20px;">หมวดหมู่</h6>
					<div>
            			<select multiple data class="selectpicker w-auto" name="Category"><br>
                			<option>ธุรกิจ</option>
                			<option>เทคโนโลยี</option>
							<option>อาหาร</option>
						</select>
					</div>  

					<h6 style="margin-top: 20px;">แท็ก</h6>  
						<div class="input-group">
  						<input type="text" name="tag "placeholder="ใส่แท็กของคุณ" aria-label="Tag" aria-describedby="button-addon2" style="margin-right:15px;" require>
   						<button class="btn btn-outline-secondary" type="submit" id="tag-button" >เพิ่ม</button>
					 </div><br><hr><br>

					 <div>
					 	<h4> อัพโหลดรูปภาพหัวข่าว</h4>
					 	<h5 style="margin-top: 10px;">สำหรับใส่ในส่วนหัวข่าว</h5>
					 	<h6 style="margin-top: 5px;">ขนาด 900x500 พิกเซล (ไม่เกิน 2 MB)</h6>
					 	<input type="file" name="title_img" id="real-file1" hidden="hidden" require/>
						<button type="button" id="custom-button1" style="margin-top:10px"><h5>เลือกไฟล์</h5></button>
						<span id="custom-text1">No file chosen.</span>
					 </div>

					 <div>
					 	<h4 style="margin-top: 30px;">อัพโหลดภาพโปสเตอร์</h4>
					 	<h5 style="margin-top: 10px;">ภาพนี้จะอยู่ในหน้ารายละเอียดเวิร์กช็อปบนเว็บไซต์</h5>
					 	<h6 style="margin-top: 5px;">ขนาดไม่เกิน 2 MB</h6>
					 	<input type="file" name="detail_img" id="real-file" hidden="hidden" require/>
						<button type="button" id="custom-button" style="margin-top:10px"><h5>เลือกไฟล์</h5></button>
						<span id="custom-text">No file chosen.</span>
					 </div><br><hr><br>
					  
					 <div>
					 	<h4>วันและเวลา</h4>
						 <h5 >บอกผู้คนว่าเวิร์กช็อปของคุณเริ่มและจบเมื่อใด พวกเขาจะได้วางแผนที่จะเข้าร่วมเวิร์กช็อป</h5>
						 
					<!-- Style01-<table> 
					<table>
					<tr>
						<h6 >วันและเวลาที่เริ่มจัดกิจกรรม</h6>
						<td><input class="form-control" width="200" height="35" type="date" name="dateStart" /></td>
						<td><input class="form-control" type="time" name="timeStart" /></td>
					</tr>
					</table>

					<table>
					<tr>
						<h6 >วันและเวลาที่เสร็จสิ้นการจัดกิจกรร</h6>
						<td><input class="form-control" type="date" name="dateEnd" /></td>
						<td><input class="form-control" type="time" name="timeEnd" /></td>
					</tr>
					</table> -->


					<!-- Style02-<class="col" -->
					<div class="row">
     					<div class="col-3">
      					<h6 >วันที่เริ่มจัดกิจกรรม</h6>
	  					<input class="form-control" type="date" name="dateStart"/>
      				</div>
      				<div class="col-3">
      					<h6 >เวลาเริ่มจัดกิจกรรม</h6>
	  					<input class="form-control" type="time" name="timeStart" />
      				</div>
					</div>



					<div class="row">
						<div class="col-3">
						<h6 >วันที่สิ้นสุดกิจกรรม</h6>
						<input class="form-control" type="date" name="dateEnd" />
					</div>
					<div class="col-3">
						<h6 >เวลาสิ้นสุดกิจกรรม</h6>
						<input class="form-control" type="time" name="timeEnd" />
					</div>
					</div>
					<div class="row">
						<div class="col-3">
						<h6 style="color: #B64C00;">หมดเขรับสมัคร</h6>
						<input class="form-control" type="date" name="registExpire" />
						</div>
					</div>					
					</div><br><hr><br>

					<div class="row">
						<div class="col-3">
						<h4>จำนวนที่รับ</h4>
						<input type="number" name="amount" value="amount" style="width: 190px">
					</div></div><br><hr><br>

					
					<form>
						<h4>ค่าใช้จ่าย</h4>				
						<input type="radio" name="join" value="free" checked> ฟรี<br>
						<input type="radio" name="join" value="purchase" > มีค่าใช้จ่าย<br>
					</form><br><hr><br>

					<div>
					<h4>สถานที่</h4>
						<h5 >บอกผู้คนว่าเวิร์กช็อปของคุณจัดที่ใด</h5>
						<h6>สถานที่</h6>
						<input type="text" name="locationName" require><br>
						<h6>ที่อยู่</h6>
						<input type="text" name="locationAddress" require><br>
						</div><br><hr><br>

						<div>
						<h4>รายละเอียดทั้งหมดของเวิร์ก็อป</h4>
						<input type="text" name="fullDetail" placeholder="" style="height: 155px;" require><br>
						</div><br><hr><br>

						<div>
						<h4>ลิงค์คลิปโปรโมท Youtube</h4>
						<h5 style="margin-bottom:10px">ข้อมูลเหล่านี้จะทำให้หน้ารายละเอียดกิจกรรมของคุณครบถ้วน น่าสนใจ และมีคุณภาพมากขึ้น</h5>
						<input type="text" name="videoUrl" autocomplete="off"><br>
						<h6 style="margin-top:4px">ไม่จำเป็นต้องกรอก</h6>
						
						</div>
					

					</div>
					<button type="button" href="#" id="nextPage" class="btn btn-primary">ถัดไป <i class="fas fa-arrow-right"></i></button>		
					</div>
				</div>
			</div>
		</div>

		

		<footer>
  			<a>Workshop Daily</a>
		</footer> 
			 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
	<script type="text/javascript">
    	
		$(function () {
	    	$('.selectpicker').selectpicker();
		});
		const realFileBtn1 = document.getElementById("real-file");
		const customBtn = document.getElementById("custom-button");
		const customTxt = document.getElementById("custom-text");
		
		const realFileBtn2 = document.getElementById("real-file1");
		const customBtn2 = document.getElementById("custom-button1");
		const customTxt2 = document.getElementById("custom-text1");
		

		customBtn.addEventListener("click", function() {
  			realFileBtn1.click();
		});
		customBtn2.addEventListener("click", function() {
  			realFileBtn2.click();
		});
		realFileBtn1.addEventListener("change", function() {
  			if (realFileBtn1.value) {
    		customTxt.innerHTML = realFileBtn1.value.match(
      		/[\/\\]([\w\d\s\.\-\(\)]+)$/
    	)[1];
  		} else {
   			 customTxt.innerHTML = "No file chosen, yet.";
  			}

			  
		}

		
		
		);
    </script>
	
</body>



</html>