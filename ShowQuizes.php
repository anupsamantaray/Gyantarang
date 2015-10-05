<?php 
	include_once("function.php");
	ob_start();
	if(!$_SESSION['name']){
		header("location:logout.php");
	}else{
		include 'header_after_login.php';
		$class=$_SESSION['class'];
		$sqlcl=mysql_query("select * from `student_class` where `id`='$class'");
		$rescl=mysql_fetch_array($sqlcl);
?>
<script>
	$(document).ready(function(){
		$('#usernmm').html('<?php echo $_SESSION["name"];?>');
	});
</script>
<style type="text/css">
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
		.right_pert2 p{
			font-size: 24px !important;
			padding: 5px 0px 20px 0;
			font-weight: 300 !important;
			color: #69A70B;
			margin: 0px;
			text-align: center;
		}
		.right_pert2 p span{
			font-size:18px !important;
			color:#000;
		}
	.right_pert2 ul{
		padding:0 !important;
	}
		.right_pert2 ul li{
			display:block;
			margin:0;
		}
		.right_pert2 ul li a{
			padding:10px;
			text-decoration: none;
			color: #f68b1c;
			font-size: 18px;
			line-height: 38px;
			font-weight: 300;
			transition: all 0.4s ease;
		}
		.right_pert2 ul li a:hover{
			color:#000;
			padding:10px 15px;
			text-decoration: none;
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
					<h4 class="border1">Quizs</h4>
			</div>
			<div class="col-md-2 left_pert">
				<div class="navisationleft">
					<ul>
						<li><a href="javascript:void(0);" class="active"><i></i>Class <?=$rescl['class']?></a></li>
						<!--li><a href="javascript:void(0);"><i></i>Your Text</a></li>
						<li><a href="javascript:void(0);"><i></i>Your Text</a></li>
						<li><a href="javascript:void(0);"><i></i>Your Text</a></li>
						<li><a href="javascript:void(0);"><i></i>Your Text</a></li>
						<li><a href="javascript:void(0);"><i></i>Your Text</a></li-->
					</ul>
				</div>
			</div>
			<div class="col-md-10 right_pert2">
				<!--p>Welcome <span> <?php /*if($_SESSION['name']){echo $_SESSION['name'];}*/ ?></span></p-->
				<h1>Subjects</h1>
				<ul>
					<?php
						$sqlsubject="Select * from  student_subject where class_id=".$class;
						//$result_subject=$con->query($sqlsubject);
						$result_subject=mysql_query($sqlsubject);
						if(mysql_num_rows($result_subject)>0){
							while($rows_subject=mysql_fetch_assoc($result_subject)){
								echo("<li><b><a href='ShowQuizesPartTwo.php?sid=".$rows_subject['id']."'>".$rows_subject['subject']."</a></b></li>");	
							}
						}
					?>
					<!--li><a href="javascript:void(0);">Your Question</a></li>
					<li><a href="javascript:void(0);">Your Question</a></li>
					<li><a href="javascript:void(0);">Your Question</a></li-->
				</ul>
			<div class="clr"></div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';
}?>