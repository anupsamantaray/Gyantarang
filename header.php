<html lang="en">
<head>
<meta charset="UTF-8">
<title>Gyan-Tarang</title>
<link rel="icon" href="logo.png" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/jsjquery.min.js"></script>
<!--<script src="js/jquery.min.js" ></script>  -->
<script src="js/dw_con_scroller.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/form.css">
<!--<link href="css/font-effect.css" rel="stylesheet" type="text/css" /> -->
<!--<link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
       <!--  <script type="text/javascript" src="js/jquery.min.js"></script>-->
		<script type="text/javascript" src="js/jquery.gallery.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#dg-container').gallery({
					autoplay	:	true
				});
			});
			$(document).ready(function() {
				$("li.act_quiz").hover(function () {
					$(this).find(".sub_act_quiz").toggle();
				});
				$(".morequizzs").click(function(){
					$(".regpopup").show();
				});
				$(".popclose").click(function(){
					$(".regpopup").hide();
				});
			});
			$(document).mouseup(function(e){
				var container = $(this).find("#partpoop");
				if (!container.is(e.target) && container.has(e.target).length === 0){
					$(this).find(".regpopup").hide();
				}
			});
</script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
	
	 .form-horizontal .control-label{
        padding-top: 7px;
    }
	
</style>
      
<style type="text/css">

h2{
    margin: 0;     
    color: #666;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
	background-image:url(Untitled-4.jpg);
    background: #333;    
    text-align: center;
	z-index:1;
/*	  width:100%;
    height:300px !important;*/
}
.carousel{
    margin-top:-20px;
}
.bs-example{
	margin:auto;
	
}
</style>

<style type="text/css">
div#wn { 
    position:relative; 
    height:240px; 
    overflow:hidden;
    }

</style>

<style type="text/css">
div#wd { 
    position:relative; 
    height:130px; 
    overflow:hidden;
    }

</style>

<script src="js/dw_con_scroller.js" type="text/javascript"></script>
<script type="text/javascript">
if ( DYN_WEB.Scroll_Div.isSupported() ) {
	
	DYN_WEB.Event.domReady( function() {
		
		// arguments: id of scroll area div, id of content div
		var wndo = new DYN_WEB.Scroll_Div('wn', 'lyr');
		// see info online at http://www.dyn-web.com/code/scrollers/continuous/documentation.php
		wndo.makeSmoothAuto( {axis:'v', bRepeat:true, repeatId:'rpt', speed:30, bPauseResume:true} );
		
	});
}

</script>

<script type="text/javascript">
if ( DYN_WEB.Scroll_Div.isSupported() ) {
	
	DYN_WEB.Event.domReady( function() {
		
		// arguments: id of scroll area div, id of content div
		var wndo = new DYN_WEB.Scroll_Div('wd', '2yr');
		// see info online at http://www.dyn-web.com/code/scrollers/continuous/documentation.php
		wndo.makeSmoothAuto( {axis:'v', bRepeat:true, repeatId:'rpt1', speed:30, bPauseResume:true} );
		
	});
}

</script>
</head>
<body>
<div class="wrapper">

<!--regpopup-->

<div class="regpopup" style="display:none;">
	<div class="childreg">
		<div class="tab-container tab-left tab-danger" id="partpoop">
			<ul class="nav nav-tabs" style="margin:-1px 0 0 -1px">
				<li class="active"><a href="#home2" data-toggle="tab">Login</a></li>
				<li class=""><a href="#profile2" data-toggle="tab">Registration</a></li>
				<li><a href="javascript:void(0)" class="closse popclose"><img src="images/cross.png"></a></li>
			</ul>
			<div class="tab-content" style="padding: 20px 15px;">
				<div class="tab-pane active" id="home2">
					<div class="subreg">
						<!--h2><a href="javascript:void(0)" class="closse popclose"><img src="images/cross.png"></a></h2-->
						<form name="creataccount" action="creataction.php" method="post" enctype="multipart/form-data">
							<table>
								<tbody>
								<tr>
									<td style="width:126px">Email</td>
									<td><input name="usremail" class="form-control" id="" validation="blank|Provide your name." placeholder="Type your email" required="required" type="email"></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input name="usrpass" class="form-control" id="pass" validation="blank|Provide your password." placeholder="Type your password" required="required" type="password"></td>
								</tr>
								<tr>
									<td></td>
									<!--td><a href="javascript:void(0)" class="loginbutton">Register</a></td-->
									<td><input name="Login" class="company_button" type="submit"></td>
								</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
				<div class="tab-pane" id="profile2">
					<div class="subreg">
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
									<td><input name="fileToUpload" class="form-control picuplode" id="usrphoto" validation="blank|Provide your photo." type="file"></td>
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
				</div>
			</div>
		</div>
	</div>
</div>
<!--regpopup-->
<nav id="myNavbar" class=" navbar-default  navbar" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
		<div class="row">  
			<div class="col-md-10" style="padding:0 15px 0 0;"> 
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbarCollapse" style="padding-left: 0px; ">
					<ul class="nav navbar-nav ">
						<li  class="header act_abt"><a href="index.php">About Us</a></li>
						<li class="header act_work"><a href="ourworks.php" >Our Works</a></li>
						<li class="header act_miss"><a href="mission.php" >Mission</a></li>
						<li class="header act_scho"><a href="Scholarship.php" >Scholarship</a></li>
						<li class="header act_cont"><a href="contactus.php">Contact Us</a></li>
						<li class="header act_quiz">
							<a href="basic_quiz.php" class="actquixz act_quiz">Quizzes</a>
							<div class="sub_act_quiz" style="display:none; margin-top: -2px;">
								<ul class="dropdown-menu2 act_quiz">
									<li class="act_quiz"><a href="basic_quiz.php">Basic Quiz</a></li>
									<li class="act_quiz"><a href="competitive_quiz.php">Competitive Quiz</a></li>
								</ul>
							</div>
						</li>
						<li class="header act_memlogin"><a href="login.php">Member Login</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2" style="text-align:right; padding-right:0;"><!--col-sm-offset-2-->
			   <div id="sonarmenu">
					  <span><a href="#s"><img src="images/facebook.png" /></a></span> <span><a href="#s"><img src="images/twitter.png"  /></a></span> <span><a href="#s"><img src="images/google-plus.png" /></a></span>
				  </div>     
			</div>
		</div>  
    </div>
</nav>
<div class="container" id="colfluid">
	<div class="row">
		<div class="col-sm-5">
			<img class="logo" src="images/ngo-logo.png" />
		</div>
		<div class="col-sm-6">
			<section id="dg-container" class="dg-container">
				<div class="dg-wrapper">
					<a href="#"><img src="images/1.png" class="img-rounded img-responsive" id="imgradius" alt="image01" width="350" height="100"></a>
					<!--a href="#"><img class="img-rounded img-responsive" id="imgradius" src="images/2.jpg" alt="image02" width="350" height="100"></a>
					<a href="#"><img class="img-rounded img-responsive" id="imgradius" src="images/3.jpg" alt="image03" width="350" height="100"></a-->
					
					<a href="javascript:void(0)"><img class="img-rounded img-responsive" id="imgradius" src="images/slid1.jpg" alt="slid1" width="350" height="100"></a>
					<a href="javascript:void(0)"><img class="img-rounded img-responsive" id="imgradius" src="images/slid2.jpg" alt="slid2" width="350" height="100"></a>
					
				</div>
					<!--nav>	
						<span class="dg-prev">&lt;</span>
						<span class="dg-next">&gt;</span>
					</nav-->
			</section>

		</div>
	</div>
</div>


