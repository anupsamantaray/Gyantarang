<?php 
	include_once("function.php");
	include 'header_after_login.php';
	ob_start();
	if(!$_SESSION['name']){
	header("location:logout.php");
	}else{
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
				cursor: unset;
			}
			.navisationleft ul li a:hover{
				color:#fff;
				padding:10px;
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
			font-size:24px !important;
			padding:0 0 30px 0;
			font-weight:300 !important;
			color:#000 !important;
			margin:0;
		}
		.right_pert2 p{
			font-size: 18px !important;
			/*padding: 5px 0px 20px 0;*/
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
			display: block;
			color: #f68b1c;
			font-size: 16px;
			font-weight: 300;
			transition: all 0.4s ease;
		}
		.right_pert2 ul li a:hover{
			color:#000;
			padding:10px 15px;
			text-decoration: none;
		}
h2 {
    margin: 0px;
    color: #666;
    padding:0px 0 15px 0;
    font-size:18px;
	font-weight: 300;
}
</style>
<?php 
$time1=0;
$time2=0;
$time3=0;
$tid=$_GET['tid'];
$sqlgettopic="Select * from  student_topic where id=".$tid;
$resultgettopic=mysql_query($sqlgettopic);
if(mysql_num_rows($resultgettopic)>0){
	while($rows_gettopic=mysql_fetch_assoc($resultgettopic)){
		$topic=$rows_gettopic['topic'];
		$subject_id=$rows_gettopic['subject_id'];
	}
}
$sqlgetsubject="Select * from  student_subject where id=".$subject_id;
$resultgetsubject=mysql_query($sqlgetsubject);
if(mysql_num_rows($resultgetsubject)>0)
{
	while($rows_getsubject=mysql_fetch_assoc($resultgetsubject))
	{
		$subject1=$rows_getsubject['subject'];
		//$subject_id=$rows_gettopic['subject_id'];
	}
}
$sqlgettime="select * from  time where Topic='".$topic."'";
$result_gettime=mysql_query($sqlgettime);
if(mysql_num_rows($result_gettime)>0)
{
	while($rows_gettime=mysql_fetch_assoc($result_gettime))
	{
		$time1=$rows_gettime['time'];
		$time2=$rows_gettime['time1'];
		$time3=$rows_gettime['time2'];
		}
		
	}
	if($time1==NULL){
		$time1=1;
	}
	if($time2==NULL){
		$time2=1;
	}
	if($time3==NULL){
		$time3=1;
	}
	
echo ("<script>function showtime(){
	var low1=document.getElementById('cbouplimit').value 
	var up1=document.getElementById('cbollimit').value
	if(low1!='' && up1!='')
	{
	document.getElementById('btnlow').style.display='none'; 
	document.getElementById('btnmid').style.display='none'; 
	document.getElementById('btnhigh').style.display='none'; 
	document.getElementById('level').align='left';
	document.getElementById('level').innerHTML='Quiz Started...';
	/*document.getElementById('txtstarttime').value=".$time1.";*/
		
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('showquestions').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET','getquestion2.php?q=+".$tid."&d=0&l1='+low1+'&up1='+up1,true);
        xmlhttp.send();
		//alert('hello');
		
		//set timer countdown in seconds with callback
		//where 10 define the second left in count.
		//after 10 second it will show alert.
		//wait for 10 second to see it.
	 
	/*$('#countdown-1').timeTo(".$time1.", function()
	{
		var time=".$time1.";
		if(time==1)
		{
			callsubmit1();
		}
		else
		{
			alert('Countdown finished');
			callsubmit1();
		}
	});*/

	 //Set timer countdown to specified date
	/*$('#countdown-2').timeTo(
	{
		timeTo: new Date('Jul 10 2014 00:00:00'),
	});*/
	
	/*$('#countdown-3').timeTo(
	{
		timeTo: new Date('Jul 27 2014 12:00:00'),
		theme: 'black',
		displayCaptions: true,
		fontSize: 48,
		captionSize: 14
	});*/
	}
	else
	{
		alert('Please select The Question to start and the Question to End');
	}
}</script>");


echo("<script>function showtime2()
{
	var low1 = document.getElementById('cbouplimit').value;
	var up1 = document.getElementById('cbollimit').value;
	if(low1!='' && up1!='')
	{
	document.getElementById('btnlow').style.display='none'; 
	document.getElementById('btnmid').style.display='none'; 
	document.getElementById('btnhigh').style.display='none'; 
	document.getElementById('level').align='left';
	document.getElementById('level').innerHTML='Quiz Started...';
	/*document.getElementById('txtstarttime').value=".$time2." ;*/
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('showquestions').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET','getquestion2.php?q=+".$tid."&d=1&l1='+low1+'&up1='+up1,true);
        xmlhttp.send();

	
	/*$('#countdown-1').timeTo(".$time2.", function()
	{
		var time=".$time2.";
		if(time==1)
		{
			callsubmit1();
		}
		else
		{
			alert('Countdown finished');
			callsubmit1();
		}
		
	});*/


	/*$('#countdown-2').timeTo(
	{
		timeTo: new Date('Jul 10 2014 00:00:00'),
	});*/
	

	/*$('#countdown-3').timeTo(
	{

		timeTo: new Date('Jul 27 2014 12:00:00'),

		theme: 'black',

		displayCaptions: true,

		fontSize: 48,
		captionSize: 14
	});*/
	}
	else
	{
		alert('Please select The Question to start and the Question to End');
	}
}</script>");


echo("<script>function showtime3()
{
	var low1=document.getElementById('cbouplimit').value;
	var up1=document.getElementById('cbollimit').value;
	if(low1!='' && up1!=''){
		document.getElementById('btnlow').style.display='none'; 
		document.getElementById('btnmid').style.display='none'; 
		document.getElementById('btnhigh').style.display='none'; 
		document.getElementById('level').align='left';
		document.getElementById('level').innerHTML='Quiz Started...';
		/*document.getElementById('txtstarttime').value=".$time3.";*/
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('showquestions').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET','getquestion2.php?q=+".$tid."&d=2&l1='+low1+'&up1='+up1,true);
        xmlhttp.send();

	/*$('#countdown-1').timeTo(".$time3.", function()
	{
		var time=".$time3.";
		if(time==1)
		{
			callsubmit1();
		}
		else
		{
			alert('Countdown finished');
			callsubmit1()
		}
		
	});*/

	/*$('#countdown-2').timeTo(
	{
		timeTo: new Date('Jul 10 2014 00:00:00'),
	});*/
	
	/*$('#countdown-3').timeTo(
	{

		timeTo: new Date('Jul 27 2014 12:00:00'),

		theme: 'black',
		displayCaptions: true,
		fontSize: 48,
		captionSize: 14
	});*/
	}
	else
	{
		alert('Please select The Question to start and the Question to End');
	}
}

</script>");

?>
<script>
$(document).ready(function() {
	var rhgt = $(".right_pert2").height();
	$(".left_pert").height(rhgt+10);
});
function blankfun()
{

}
function callsubmit1(){
	/*var e11=document.getElementById("countdown-1").firstChild.firstChild.firstChild.innerHTML;
	e11=parseInt(e11);
	
	var e12=document.getElementById("countdown-1").childNodes[1].firstChild.firstChild.innerHTML;
	e12=parseInt(e12);
	
	var colon1=document.getElementById("countdown-1").childNodes[2].innerHTML;
	var e21=document.getElementById("countdown-1").childNodes[3].firstChild.firstChild.innerHTML;
	e11=parseInt(e21);
	//alert(e21);
	var e22=document.getElementById("countdown-1").childNodes[4].firstChild.firstChild.innerHTML;
	e12=parseInt(e22);
	//alert(e22);
	var colon2=document.getElementById("countdown-1").childNodes[5].innerHTML;
	//colon1=parseInt(colon1);
	//alert(colon2);
	
	var e31=document.getElementById("countdown-1").childNodes[6].firstChild.firstChild.innerHTML;
	e31=parseInt(e31);
	//alert(e31);
	var e32=document.getElementById("countdown-1").childNodes[7].firstChild.firstChild.innerHTML;
	e32=parseInt(e32);*/
	//alert(e32);
	/*document.getElementById("txtendtime").value=e11+e12+colon1+e21+e22+colon2+e31+e32;*/
	document.forms["f1"].submit();
	//var x1= x[0].firstChild.innerHTML;
}
</script>
<div class="container">
	<div class="row">
		<div class="col-md-12">  
			<div class="schocenter">
				<div class="arrow">
					<img src="images/center-1.png">
				</div>
					<h4 class="border1">Quizzes</h4>
			</div>
			<div class="col-md-2 left_pert">
				<div class="navisationleft">
					<ul>
						<li><a href="javascript:void(0);" class="active"><i></i> Class <?=$rescl['class']?></a></li>
						<li><a href="javascript:void(0);" style="background:#f6f6f6; color:#000;"><i></i> Subject <?=$subject1?></a></li>
						<li><a href="javascript:void(0);" style="background:#f6f6f6; color:#000;"><i></i> Topic <?=$topic?></a></li>
					</ul>
						<?php
							/*
							$sqlsubject="Select * from  student_subject where class_id=".$class;
							$result_subject=mysql_query($sqlsubject);
							echo("<div class='navisationleft'><h3>Subjects</h3></div><br>");
							if(mysql_num_rows($result_subject)>0){
								while($rows_subject=mysql_fetch_assoc($result_subject)){
									echo("<ul style='margin-left: 0px; padding: 1px 5px;'><li class='list active li_sub'><a href='ShowQuizesPartTwo.php?sid=".$rows_subject['id']."'>".$rows_subject['subject']."</a> </li>

								</ul>");	
								}
							}
						*/?>
				</div>
			</div>
            <form name='f1' method='post' id="rgtfrm" action='getresult.php'>
			<div class="col-md-10 right_pert2" style="height:inherit;">
				<!--p>Welcome <span> <?php /*if($_SESSION['name']){echo $_SESSION['name'];}*/ ?></span></p-->
				<!--h1>Subjects</h1-->
				<ul>
					<?php
				  echo("<script>
					var rhgt = $('.right_pert2').height();
					$('.left_pert').height(rhgt+10);
				  </script>
				  ");
				  	$tid=$_GET['tid'];?>
                    <span style="padding-left:18px; font-size:18px; color:rgb(140, 140, 140);">Start With the Question Number</span>
                    <select name='cbouplimit' style="width:15%;height:30px; margin-left:15px;" id="cbouplimit" onclick="ldlimit()" onchange="ldlimit()"><option></option>
                    	<?php
							$sql_uplimit="Select * from student_question where topic_id = ".(int)$tid;
							$result_uplimit=mysql_query($sql_uplimit);
							$iup=0;
							if(mysql_num_rows($result_uplimit)>0)
							{
								
								while($rows_uplimit=mysql_fetch_assoc($result_uplimit))
								{
									$iup++;
									echo("<option value='".$iup."'>".$iup."</option>");	
								}	
							}
						?>
                    </select>
                   <!-- <span style="padding-left:150px;padding-right:0px;"><a href="show_result.php?tid=<?php echo $tid; ?>" style="color:#06F;font-size:14px;">Click here to Display result</a></span>-->
                    <br/><input style="display:none;" type='text' name='txtuplimit' id="txtuplimit" value="<?php echo($iup); ?>" /><br />
                    <script>
					function ldlimit(){
						document.getElementById("cbollimit").options.length = 0;
						var up=document.getElementById("txtuplimit").value;
						var low=document.getElementById("cbouplimit").value;
						up=parseInt(up);
						low=parseInt(low);
						var x = document.getElementById("cbollimit");
						for(i=low;i<=up;i++){
							var option = document.createElement("option");
							option.text = i;
							option.value=i;
							x.add(option);
						}
					}
					</script>
                    <span style="padding-left:18px; font-size:18px; color:rgb(140, 140, 140);">End&nbsp; With the Question Number</span>
                    <select name="cbollimit" style="width:15%;height:30px; margin-left:15px;" id="cbollimit">
                    	
                    </select>                   
                    <?php
					echo("<h1 id='level' style='color:#e05f03; margin-top:15px;'>&nbsp;&nbsp;Levels</h1><br>");

							echo("<div class='sub'><span><b><a href='#' name='btnlow' id='btnlow' value='0'  onclick='showtime()'><b>Low</b></a></b></span>&nbsp;&nbsp;&nbsp;<span><b><a href='#' name='btnmid' value='1' id='btnmid' onclick='showtime2()'><b>Middle</b></a></b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><b><a href='#' name='btnhigh' value='2' id='btnhigh' onclick='showtime3()'><b>High</b></a></b></span></div><div id='clockcontainer' style='position:fixed; left:70%;'><div id='countdown-1'></div></div>");
                  ?>
                  <!--<form name='f1' method='post' action='getresult.php'>-->
                   <input type="text" name="txtname" id="txtname" value="<?php if($_SESSION['name']){echo $_SESSION['name'];} ?>" style="display:none;"/>
                    <input type="text" name="txtclass" id="txtclass" value="<?php echo $rescl['class'];?>" style="display:none;"/>
                     <input type="text" name="txtsubject" id="txtsubject" value="<?php echo $subject1;?>" style="display:none;"/>
                      <input type="text" name="txttopic" id="txttopic" value="<?php echo $topic;?>" style="display:none;"/>
                  <!--input type="text" name="txtendtime" id="txtendtime" style="display:none;"/-->
                  <!--input type="text" name="txtstarttime" id="txtstarttime" style="display:none;" /--> 
                  <div id='showquestions' height="100%" >
                  </div><!--/form-->
				</ul>
			<div class="clr"></div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php include 'footer.php';
}?>