<?php 
session_start();
if(!isset($_SESSION['login_user']))
{header("location:index.php?errlm=You have to Login first.");}
include 'header_admin.php';
include 'connection.php';
?>
<script src="js/bookmarkscroll.js"  ></script>
<style>
	.act_abt {
		background-color: #69a70b;
		border-radius:10px;
		
	}
	.navbar-default .navbar-nav>.act_abt>a{
		color:#fff;
	}
</style>
<style>
	textarea {
	resize: none;
	}
</style>
<div class="container" id="mcol">
	<br />
   <div class="row">
	   <div class="col-sm-6" style="padding-bottom:30px;">
		   <div class="center1">
				<div class="arrow">
					<img src="images/center-1.png">
				</div>
				<h4 class="border1">Add<span>&nbsp;&nbsp;Donaters-</span>&nbsp;<span>Info</span></h4>
			</div>
			<div class="ourcenter1">
				<div class="row"> 
					<form method="POST" action="donatersadd1.php" enctype="multipart/form-data">
						<div class="col-md-6">
							<br />
							<input type="text" name="Dname" class="form-control" placeholder = "Enter Donator name">
							<br />
							
							<textarea rows="5" cols="50" name="Message" placeholder="Enter your text here...">
							
							</textarea>
							</br></br>
							<input type="file" name="Filename" class="form-control" >
							</br>
							<input type="submit" class="btn btn-success" value="Submit">
						</div>
					</form>  
		 
				</div>
			</div>
		</div>     
		<div class="col-sm-6" style="padding-bottom:30px;">
			<div class="center1">
				<div class="arrow">
					<img src="images/center-1.png">
				</div>
				<h4 class="border1">Add<span>&nbsp;&nbsp;Scholarship-</span>&nbsp;<span>Student</span></h4>
			</div>
			<div class="ourcenter1">
				<div class="row"> 
					<form method="POST" action="studentadd.php" enctype="multipart/form-data">
						<div class="col-md-6"><br />
							<input type="text" name="Sname" class="form-control" placeholder = "Student Name">
							<br />
							
							<textarea rows="5" cols="50" name="Message" placeholder="Enter your text here...">
							
							</textarea>
							</br></br>
							<input type="file" name="Filename" class="form-control" >
							</br>
							<input type="submit" class="btn btn-success" value="Submit">
						</div>
					</form>
				</div>
			</div>
		</div> 
	</div>  
</div>    
<?php include 'footer.php';?>
