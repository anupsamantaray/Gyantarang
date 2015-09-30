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
		height:auto;
		padding:20px 30px !important;
		background:#fff !important;
	}
		.right_pert2 h1{
			font-size:24px;
			padding:0 0 30px 0;
			font-weight:300 !important;
			color:#000 !important;
			margin:0;
		}
		.right_pert2 p{
			font-size: 24px;
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
		.total_quiz ul li{
			list-style: outside none none !important;
			padding: 5px !important;
			font-weight: 300 !important;
			font-size: 15px !important;
			font-family: verdana,arial,helvetica,helve,sans-serif !important;
		}
		.quiz{
			font-size: 18px !important;
			font-weight: 400 !important;
			text-align:left !important;
			color:#000 !important;
		}
		.quiz_count{
			background:#F2F2F2;
			padding:10px 15px;
			margin:0 0 10px;
		}
		.quiz_count h1{
			font-size:20px;
			margin:0;
			padding:0;
		}
		.linkText{
			text-align:right !important;
			padding:15px 0;
			font-size:16px !important;
			font-weight:300;
		}
		.uncer_question{
			padding:10px 0;
		}
		.uncer_question p{
			font-size: 18px !important;
			padding: 0;
			font-weight: 300 !important;
			color: #2a2a2a !important;
			margin: 0px;
			text-align:left !important;
		}
		.uncer_question p span{
			font-size:18px !important;
			color:#69A70B !important;
			font-weight:400 !important;
			padding-right:5px;
			margin-right:5px;
		}
		.bottom_ancar{
			text-align:center !important;
			padding:15px 0;
			font-size:16px !important;
			font-weight:300;
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
				<p><span>Your Score is : 0 out of 1</span></p>
				<div class="ques_bec">
					<p class="linkText"><a href="javascript:void(0)">Click Here To Publish Your Result</a></p>
					<div class="quiz_count">
						<h1>Question 1</h1>
						<div class="clr"></div>
					</div>
					<div class="total_quiz">
						<p class="quiz">Slow eating away if iron articles in the presence of moist air is called</p>
						<ul style="padding:0;">
							<li>
								<label>
									<!--input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio"-->
									<input name="1" id="optionsRadios1" value="1" type="radio">
									11.5m
								</label>
							</li>
							<li>
								<label>
									<input name="1" id="optionsRadios1" value="2" type="radio">
									12.5m
								</label>
							</li>
							<li>
								<label>
									<input name="1" id="optionsRadios1" value="3" type="radio">
									8m
								</label>
							</li>
							<li>
								<label>
									<input name="1" id="optionsRadios1" value="4" type="radio">
									6m
								</label>
							</li>
						</ul>
						<input name="h1" value="1" type="hidden">
						<div class="uncer_question">
							<p><span>Correct  Answer</span> : Rusting</p>
							<p><span>Concepts  Included<span> :  </p>
						</div>
					</div>
					<div>
						<p class="bottom_ancar"><a href="javascript:void(0);">Click Here To Publish Your Result</a></p>
					</div>
				</div>
			</div>
			<div class="clr"></div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>