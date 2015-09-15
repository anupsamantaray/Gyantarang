<?php 
session_start();
include 'connection.php';
if(!isset($_SESSION['login_user']))
{header("location:index.php?errlm=You have to Login first.");}
include 'header_admin.php';
?>
<style>
.act_scho {
	background: #69a70b;
	border-radius:10px;
}
.navbar-default .navbar-nav>.act_scho>a{
	color:#fff;
	
}
.col-md-12{
	padding-left:0px;
	padding-right:0px;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">  
			<div class="schocenter">
				<div class="arrow">
					<img src="images/center-1.png">
				</div>
				<h4 class="border1">Scholarship <span>Programe</span></h4>
			</div>
			<div class="scholourcenter"><br />
				 <p>The programme identifies students based on multiple criteria including family income, parents' educational background, social background but most importantly the child's improvement in tests conducted by us</p>
				 <p> Our scholarship program envisages conducting quiz and exams at schools and rewarding not only toppers but also students who show continuous improvement. We have conducted exams at various schools in Odisha and Chattisgarh.</p>
				 <p>The idea is to incentivize continuous education and support related expenses as well. A comprehensive view is taken to give academic support that enables them to make a success of their schooling experience but also material support. This includes  rewards like uniforms, school bags, shoes, socks etc. to enable the child to go to school with dignity. The material kit is ceremoniously handed over to each child at the beginning of the academic year.</p>
                 <br /><br />
			</div>
			<div class="row" id="ourdonator">
				<div class="col-md-6 col-md-offset-5">
					<p style="color:#FFF; margin-top:10px; font-size:20px; font-family:Arial Rounded M..., 'Times New Roman', Times, serif; padding:1px;">Student List</p>
				</div>
			</div>
			<div class="row" id="donatorWorks">
				<div class="col-sm-12">
					<div id="Amit" >
						<div class="extra_wrapper"></div>
					</div>
				</div>
				<br />
				<?php 
				$sql = "SELECT * FROM scholarship";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						
				?>
					<div class="row" id="donatorBorder">   
						<div class="col-sm-4">
						  <img src="students/<?php  echo $row["Filename"] ?>" width="200" height="180" alt="" class="img-rounded center-block" style="margin-top:15px;">
						</div>
						<div class="col-sm-7">
							<h3 class="dotcolor"><?php  echo $row["Sname"] ?></h3>
							<p class="aboutworks"><?php  echo $row["Message"] ?></p>
							<span style="float:right">
								<a href="Scholarship_edit.php?id=<?php  echo $row['Id'] ?>"><button>Edit</button></a>
								<a href="edit/delete.php?name=scholarship&id=<?php  echo $row['Id'] ?>"><button onclick="validate()">Delete</button></a>
							</span>
 
						</div>
		  
					</div>
					<?php  
					}
				} ?>
				<br />
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
<script>
function validate(){
  alert("Want To Delete");
}
</script>

