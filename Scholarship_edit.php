<?php 
session_start();
if(!isset($_SESSION['login_user']))
{header("location:index.php?errlm=You have to Login first.");}
include 'header_admin.php';
include 'connection.php';
?>
<script src="js/bookmarkscroll.js"  ></script>
<style>
.act_abt{
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
    <?php 
		$sql = "SELECT * FROM scholarship where Id=".$_GET["id"]."";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
		?>      
				<div class="col-sm-6" style="padding-bottom:30px;">
					<div class="center1">
						<div class="arrow">
							<img src="images/center-1.png">
						</div>
						<h4 class="border1"><span>&nbsp;&nbsp;Scholarship-</span>&nbsp;<span>Student</span></h4>
					</div>	  
					<div class="col-sm-6">
						<img src="students/<?php  echo $row["Filename"] ?>" width="200" height="180" alt="" class="img-rounded center-block" style="margin-top:15px;">
					</div> 
					<div class="col-sm-6">
						<h3 class="dotcolor"><?php  echo $row["Sname"] ?></h1>
						<p class="aboutworks"><?php  echo $row["Message"] ?></p>
				   </div>
				</div>
				<div class="col-sm-6" style="padding-bottom:30px;">
				   <div class="center1">
						<div class="arrow">
							<img src="images/center-1.png">
						</div>
						<h4 class="border1">Update<span>&nbsp;&nbsp;Scholarship-</span>&nbsp;<span>Student</span></h4>
					</div>
					<div class="ourcenter1">
						<div class="row"> 
							<form id="uploadimage" name="uploadimage" action="" method="post" enctype="multipart/form-data">
								<div class="col-md-6">
									<br />
									<input type="text" name="Sname" class="form-control" value="<?php  echo $row["Sname"] ?>" placeholder = "Student Name">
									<br />
									
									<textarea rows="5" cols="50" name="Message" placeholder="Enter your text here...">
									<?php  echo $row["Message"] ?>
									</textarea>
									</br></br>
									<input type="file" name="Filename" class="form-control" accept="image/*" >
									<input type="hidden" name="id" value="<?php  echo $row["Id"] ?>" >
									</br>
									<input type="submit" class="btn btn-success" value="Update">
									<a href="edit/delete.php?name=scholarship&id=<?php  echo $row['Id'] ?>"><input type="button" class="btn btn-success" value="Delete" onclick="validate()"></a>
								</div>
							</form> 
						</div>
					</div>
				</div>    	 
        <?php 
			}
		} ?>

    </div>  
</div>    
<?php include 'footer.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
$(document).ready(function (e){
	$("#uploadimage").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
			url: "edit/scholarship.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,        // To send DOMDocument or non processed data file it is set to false
			success: function(data){   // A function to be called if request succeeds
				alert(data);
				location.reload();
			}
		});
	}));
});

function validate(){
	  alert("Want To Delete");
	  }
</script>