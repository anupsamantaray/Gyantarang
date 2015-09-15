<!DOCTYPE html>
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
<nav id="myNavbar" class=" navbar-default  navbar" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
      <div class="row">  
        
       <div class="col-md-10"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav ">
				<li  class="header act_abt"><a href="index.php">About Us</a></li>
				<li class="header act_work"><a href="ourworks.php" >Our Works</a></li>
                <li class="header act_miss"><a href="mission.php" >Mission</a></li>
                <li class="header act_scho"><a href="Scholarship.php" >Scholarship</a></li>
               	<li class="header act_cont"><a href="contactus.php">Contact Us</a></li>
               	<li class="header act_quiz">
					<a href="basic_quiz.php">Quizzes</a>
					<ul class="dropdown-menu2 sub_act_quiz" style="display:none;">
						<li><a href="#s">Basic Quiz</a></li>
						<li><a href="#s">Competitive Quiz</a></li>
					</ul>
				</li>
               	<li class="header act_memlogin"><a href="login.php">Member Login</a></li>
            </ul>
        </div>
        </div>
        		<div class="col-md-2"><!--col-sm-offset-2-->
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
					<a href="#"><img class="img-rounded img-responsive" id="imgradius" src="images/2.jpg" alt="image02" width="350" height="100"></a>
					<a href="#"><img class="img-rounded img-responsive" id="imgradius" src="images/3.jpg" alt="image03" width="350" height="100"></a>
					
				</div>
				<!--nav>	
					<span class="dg-prev">&lt;</span>
					<span class="dg-next">&gt;</span>
				</nav-->
			</section>
</div>
</div>
</div>

