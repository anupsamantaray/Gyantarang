<?php 
session_start();
if(!isset($_SESSION['login_user']))
{header("location:index.php?errlm=You have to Login first.");}
include 'header_admin.php';
include 'connection.php';
?>
<script src="js/bookmarkscroll.js"></script>
<style>
.act_work {
	background: #69a70b;
	border-radius:10px;
}
.navbar-default .navbar-nav>.act_work>a{
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
				<h4 class="border1">Our Works</h4>
			</div>
			<div class="scholourcenter">
				<h6>Low-cost, replicable models</h6>
				<p>We have worked to develop low-cost, replicable models that can easily spread and be adopted by other organizations. Volunteers work with us to implement learning 'interventions' at the grassroots level. These volunteers are mobilized, trained, and monitored by us. They are also provided with teaching-learning material and books developed by Pratham.
				Not only does this ensure more effective implementation of the programs, but it also helps to build an infrastructure focused on providing quality education to children.</p>
				<h6>A focus on innovation</h6>
				<p>Gyan Tarang’s strategies reconfigure teaching methodologies, away from traditional tactics and current rote learning mechanisms in our schools. Our programmes are innovative and outcome-driven. We want to develop innovative teaching-learning methods, materials, and measurement methods.</p>
			</div>
        </div>
	</div>
	<div class="row" id="ourdonator">
		<div class="col-md-6 col-md-offset-5">
			<p style="color:#FFF; margin-top:10px; font-size:20px; font-family:Arial Rounded M..., 'Times New Roman', Times, serif; padding:1px;">Our Donator</p>
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
			$sql = "SELECT * FROM donaters";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					
					?>
					<div class="row" id="donatorBorder">   
						<div class="col-sm-4">
							<img src="donaters/<?php  echo $row["Filename"] ?>" width="200" height="180" alt="" class="img-rounded center-block" style="margin-top:15px;">
						</div> 
						<div class="col-sm-7">
							<h3 class="dotcolor"><?php  echo $row["Dname"] ?></h1> 
							<p class="aboutworks"><?php  echo $row["Message"] ?></p>
							<span style="float:right">
								<a href="Donator_edit.php?id=<?php  echo $row['Id'] ?>"><button>Edit</button></a>
								<a href="edit/delete.php?name=donator&id=<?php  echo $row['Id'] ?>"><button onclick="validate()">Delete</button></a>
							</span>
						</div>
					</div> 
			<?php
				} 
			} 
		?>
		<br />
	</div>
</div>    
<?php include 'footer.php';?>