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
				<div class="subreg panel-body">
					<table class="table table-hover">
					  <thead>
						<tr>
						  <th>#</th>
						  <th>First Name</th>
						  <th>Last Name</th>
						  <th>Username</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td>1</td>
						  <td>Mark</td>
						  <td>Otto</td>
						  <td>@mdo</td>
						</tr>
						<tr>
						  <td>2</td>
						  <td>Jacob</td>
						  <td>Thornton</td>
						  <td>@fat</td>
						</tr>
						<tr>
						  <td>3</td>
						  <td>Larry</td>
						  <td>the Bird</td>
						  <td>@twitter</td>
						</tr>
					  </tbody>
                    </table>
				</div>
			</div>
			<div class="clr"></div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>