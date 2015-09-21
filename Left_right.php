<?php include 'header.php';?>
<style>
.act_quiz {
	background: #69a70b;
	border-radius:10px;
}
.navbar-default .navbar-nav>.act_quiz>a{
	color:#fff;
}

.col-md-12{
	padding-left:0px;
	padding-right:0px;
}
/*--------------------------Left_part------------------------------*/

	.left_pert{
		height: 100%;
		background:#f6f6f6 !important;
		padding:0 0 30px 0 !important;
		margin: 0;
		/*border-right: 1px solid #69A70B;*/
	}
	.navisationleft{
			padding:0;
		}
			.navisationleft ul{
				padding:0 !important;
			}
			.navisationleft ul li{
				display:block;
				border-bottom:1px solid #69A70B;
			}
			.navisationleft ul li a{
				padding:10px;
				text-decoration: none;
				display: block;
				color: #000;
				font-size: 16px;
				font-weight: 300;
				transition: all 0.4s ease;
			}
			.navisationleft ul li a:hover{
				color:#fff;
				padding:10px 15px;
				background:#69A70B;
				text-decoration: none;
			}
			.navisationleft ul li a.active{
				color:#fff;
				background:#69A70B;
				padding:10px 15px;
				text-decoration: none;
			}
				.smIcon{
					margin:0 7px 0 0 !important;
					vertical-align:inherit !important;
					padding-top:2px;
				}
				
/*-----------------rightpart--------------------*/
	.right_pert2{
		margin: 0;
		height:100%;
		padding:20px 30px !important;
		background:#fff !important;
	}
		.right_pert2 h1{
			font-size:24px !important;
			padding:0 0 30px 0;
			font-weight:300 !important;
			color:#000 !important;
			margin:0;
		}
	
</style>
<script type="text/javascript">
$(document).ready(function() {
	/*$("li.act_quiz").hover(function () {
		$(this).find(".sub_act_quiz").toggle();
	});*/
});
</script>
<div class="container">
	<div class="row">
		<div class="col-md-12">  
			<div class="schocenter">
				<div class="arrow">
					<img src="images/center-1.png">
				</div>
					<h4 class="border1">Basic Quiz</h4>
			</div>
			<div class="col-md-2 left_pert">
				<div class="navisationleft">
					<ul>
						<li><a href="javascript:void(0);" class="active"><i></i>Your Text</a></li>
						<li><a href="javascript:void(0);"><i></i>Your Text</a></li>
						<li><a href="javascript:void(0);"><i></i>Your Text</a></li>
						<li><a href="javascript:void(0);"><i></i>Your Text</a></li>
						<li><a href="javascript:void(0);"><i></i>Your Text</a></li>
						<li><a href="javascript:void(0);"><i></i>Your Text</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-10 right_pert2">
				<h1>Title</h1>
				<div class="subreg col-md-7" style="padding:0;">
					<!--h2><a href="javascript:void(0)" class="closse popclose"><img src="images/cross.png"></a></h2-->
					<form name="creataccount" action="creataction.php" method="post" enctype="multipart/form-data">
						<table>
							<tbody><tr>
								<td style="width:126px">Name</td>
								<td><input name="usrname" class="form-control" id="" validation="blank|Provide your name." placeholder="Type your name" required="required" type="username"></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input name="usremail" class="form-control" id="" validation="blank|Provide your name." placeholder="Type your email" required="required" type="email"></td>
							</tr>
							<tr>
								<td>Contact</td>
								<td><input name="usrcontact" class="form-control" id="" validation="blank|Provide your name." placeholder="Type your contact no." type="username"></td>
							</tr>
							<tr>
								<td>Class</td>
								<td>
									<select class="form-control" name="usrclass" id="usrclass">
										<option value="0">Select</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
									<span class="errorcls" style="display:none; color:#FF5454;">Please select your class.</span>
								</td>
							</tr>
							<tr>
								<td>School</td>
								<td><input name="usrschool" class="form-control" id="" validation="blank|Provide your name." placeholder="Type your school name" required="required" type="username"></td>
							</tr>
							<tr>
								<td>City</td>
								<td>
									<input name="usrcity" class="form-control" id="" validation="blank|Provide your name." placeholder="Type your city name" required="required" type="username">
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input name="usrpass" class="form-control" id="pass" validation="blank|Provide your password." placeholder="Type your password" required="required" type="password"></td>
							</tr>
							<tr>
								<td>Confirm Password</td>
								<td><input name="usrcpass" class="form-control" id="cpass" validation="blank|Provide your confirm password." placeholder="Type password again" required="required" type="password"><span class="errorpass" style="display:none; color:#FF5454;">Password and confirm password should be same.</span></td>
							</tr>
							<tr>
								<td>Upload Photo</td>
								<td><input name="fileToUpload" class="form-control picuplode" id="usrphoto" validation="blank|Provide your photo." type="file" style="padding:0; margin-bottom:15px; "></td>
							</tr>
							<tr>
								<td></td>
								<!--td><a href="javascript:void(0)" class="loginbutton">Register</a></td-->
								<td><input name="Register" class="company_button" type="submit"></td>
							</tr>
						</tbody>
					</table>
					</form>
				</div>
			</div>
			<div class="clr"></div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>