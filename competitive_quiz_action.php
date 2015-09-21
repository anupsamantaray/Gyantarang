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
#container{
	margin: 0 13.9%;
}
</style>
<script type="text/javascript">

$(document).ready(function() {
	/*$("li.act_quiz").hover(function () {
		$(this).find(".sub_act_quiz").toggle();
	});*/
	$(this).find(".regpopup").show();
});
/*$(document).mouseup(function(e){
	var container = $(this).find("#partpoop");
	if (!container.is(e.target) && container.has(e.target).length === 0){
		$(this).find(".regpopup").hide();
	}

});*/
</script>
<body>
<?php
$tot=0;
if(isset($_POST['submit'])){
   if(!empty($_POST['1']))
   {
	$n1=$_POST['1'];
	$nh1=$_POST['h1'];
	if($n1==$nh1)
	{
		$tot=$tot+1;
	}
   }
   if(!empty($_POST['2']))
   {
	$n2=$_POST['2'];
	$nh2=$_POST['h2'];
	if($n2==$nh2)
	{
		$tot=$tot+1;
	}
   }
   if(!empty($_POST['3']))
   {
	$n3=$_POST['3'];
	$nh3=$_POST['h3'];
	if($n3==$nh3)
	{
		$tot=$tot+1;
	}
   }
   if(!empty($_POST['4']))
   {
	$n4=$_POST['4'];
	$nh4=$_POST['h4'];
	if($n4==$nh4)
	{
		$tot=$tot+1;
	}
   }
   if(!empty($_POST['5']))
   {
	$n5=$_POST['5'];
	$nh5=$_POST['h5'];
	if($n5==$nh5)
	{
		$tot=$tot+1;
	}
   }
   if(!empty($_POST['6']))
   {
	$n5=$_POST['6'];
	$nh5=$_POST['h6'];
	if($n5==$nh5)
	{
		$tot=$tot+1;
	}
   }
   if(!empty($_POST['7']))
   {
	$n5=$_POST['7'];
	$nh5=$_POST['h7'];
	if($n5==$nh5)
	{
		$tot=$tot+1;
	}
   }
 }?>
<div id="container">
	<div class="row">
		<div class="col-md-12">  
			<div class="schocenter">
                <div class="arrow">
					<img src="images/center-1.png">
				</div>
				<h4 class="border1">Basic Quiz</h4>
			</div>
			<div class="scholourcenter">
				<a href="#openModal" style="color:blue;" id="clickid"></a>
				<table>
					<tr>
						<td align="center">
							<h1> 
								Your score is <?php echo($tot); ?> out of 7
							</h1>
						</td>
                    </tr>
                    <tr>
                    	<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 1</span></td>
                    </tr>
                     <tr>
						<td>
							<b> Directions A person throws a ball vertically upward with an initial velocity of 15 m/s.How long the ball is in air before it comes to his hand?</b>
						</td>
                     </tr>
                     <tr><td style="padding-left:15px;">
                     <?php 
					 	if(!empty($_POST['1']))
						{
							if($_POST['1']=='1')
							{
					 ?>
                    			1.) 2.0 s &nbsp;&nbsp;&nbsp;<img src='images/correct.jpg'>
                     <?php
							}
							else
							{
					 ?>
                     			1.) 2.0 s	
                     <?php
							}
						}
						else
						{
								echo("1.) 2.0 s");
						}
					 ?>
                     
                     </td></tr>
                     <tr><td style="padding-left:15px;">
                      <?php 
					 	if(!empty($_POST['1']))
						{
							if($_POST['1']=='2')
							{
					 ?>
                     			2.) 1.0 s &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                      <?php
							}
							else
							{
					  ?> 
                      			2.) 1.0 s
                      <?php
							}
						}
						else
						{
								echo("2.) 1.0 s");
						}
					  ?> 
                        </td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php 
					 if(!empty($_POST['1']))
						{
					 		if($_POST['1']=='3')
							{
					 ?>
                  				  3.)  3.06 s &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                      <?php
							}
							else
							{
					  ?> 
                     			 3.) 3.06 s
                      <?php
							}
						}
					else
					{
							echo("3.) 3.06 s");
					}
						?>
                     </td></tr>
                     <tr><td style="padding-left:15px;">
                      <?php 
					 	if(!empty($_POST['1']))
						{
							if($_POST['1']=='4')
							{
					 ?>
			                     4.) 5.01 s &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                     <?php
							}
							else
							{
					  ?>
                     			 4.) 5.01 s
                      <?php
							}
						}
						else
						{
								echo("4.) 5.01 s");	
						}
						?> 
                     </td></tr>
                     
                     <?php
					 if(!empty($_POST['1']))
						{
					 		if($_POST['1']!='1')
							{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>2.0 s</b></td></tr>');
							}
						}
					else
						{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>2.0 s</b></td></tr>');
						}	
					 ?>
                     <tr><td><hr></td></tr>
                     
                     
                     <tr>
                    	<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 2</span></td>
                    </tr>
                     <tr> <td><b> When a body is stationary?</b></td>
                     </tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					   if(!empty($_POST['2']))
						{
					 		if($_POST['2']=='1')
							{
					 ?>
                     			1.) There is no force acting on it &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                     <?php
							}
							else
							{
						?>
                    			  1.)  There is no force acting on it 
                        <?php
							}
						}
						else
						{
								echo("1.)  There is no force acting on it ");
						}
						?>
                        
                     </td></tr>
                     <tr><td style="padding-left:15px;">
                      <?php
					   if(!empty($_POST['2']))
						{ 
					 		if($_POST['2']=='2')
							{
					 ?>
                     			2.) The force acting on it not in contact with it&nbsp;&nbsp;&nbsp;<img src='images/correct.jpg'>
                     <?php
							}
							else
							{
					 ?>
                    			2.) The force acting on it not in contact with it
                     <?php
							}
						}
						else

						{
								echo("2.) The force acting on it not in contact with it");
						}
						?>
                     </td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['2']))
						{ 
					 		if($_POST['2']=='3')
					 		{
						 ?>
                     			3.) The combination of forces acting on it balances each other &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                     <?php
					 		}
					 		else
					 		{
					 ?>
                     			3.) The combination of forces acting on it balances each other
                     <?php
					 		}
						}
						else
						{
								echo("3.) The combination of forces acting on it balances each other");
						}
					 ?>
                     </td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['2']))
						{ 
					 		if($_POST['2']=='4')
					 		{
						 ?>
                     			4.) The combination of forces acting on it balances each other &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                        <?php
					 		}
					 		else
					 		{
					 ?>			4.) The combination of forces acting on it balances each other
                     <?php
					 		}
						}
						else
						{
							echo("4.) The combination of forces acting on it balances each other");	
						}
					 ?>
                        </td></tr>
                        <?php
						if(!empty($_POST['2']))
						{ 
					 		if($_POST['2']!='2')
							{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>The force acting on it not in contact with it</b></td></tr>');
							}
						}
						else
						{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>The force acting on it not in contact with it</b></td></tr>');
						}
					 ?>
                     <tr><td><hr></td></tr>
                    
                     <tr>
                    	<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 3</span></td>
                    </tr>
                     <tr>
                      <td><b> A fish is swimming upward at an angle of 30 deg with the horizontal. The direction of the force of gravity acting on it is -</b></td>
                     </tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['3']))
						{ 
							 if($_POST['3']=='1')
							 {
						 ?>			1.) upward &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                         <?php
					 		 }
					 		else
							 {
						 ?>
                        		 1.) upward
                         <?php
					 		 }
						}
						else
						{
								echo("1.) upward");
						}
					 ?>
                         </td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['3']))
						{ 
					 		if($_POST['3']=='2')
					 		{
						 ?>
                     			2.) downward &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                     <?php
					 		}
					 		else
					 		{
					 ?>
                     			2.) downward
                     <?php
					 		}
						}
						else
						{
							echo("2.) downward");
						}?>
                     </td></tr>
                     <tr><td style="padding-left:15px;">
                      <?php
					  if(!empty($_POST['3']))
						{
							 if($_POST['3']=='3')
					 		{
						 ?>		3.) horizontal &nbsp;&nbsp;&nbsp;<img src='images/correct.jpg'>
                         <?php
					 		}
							else
					 		{
					 ?>
                     			3.) horizontal
                     <?php
					 		}
						}
						else
						{
								echo("3.) horizontal");
						}
                     ?></td></tr>
                     <tr><td style="padding-left:15px;">
                      <?php
					  if(!empty($_POST['3']))
						{
					 		if($_POST['3']=='4')
					 		{
						 ?>		4.) at an angle upward&nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                         <?php
					 		}
					 		else
					 		{
						 ?>		4.) at an angle upward
                         <?php
					 		}
						}
						else
						{
								echo("at an angle upward");
						}
					 ?></td></tr>
                      <?php
					   if(!empty($_POST['3']))
						{
					 		if($_POST['3']!='3')
							{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>horizontal</b></td></tr>');
							}
						}
						else
						{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>horizontal</b></td></tr>');
						}
					 ?>
                     <tr><td><hr></td></tr>
                     <tr>
                    	<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 4</span></td>
                    </tr>
                     <tr>
                      <td><b>Condensation and evaporation are : </b></td>
                     </tr>
                     <tr><td style="padding-left:15px;">
                      <?php
					   if(!empty($_POST['4']))
						{
							 if($_POST['4']=='1')
							 {
						 ?>			1.) Irreversible change  &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                         <?php 
							 }
							 else
							 {
						?>			1.) Irreversible change 
                        <?php
							 }
						}
						else
						{
								echo("1.) Irreversible change ");	
						}
					?></td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['4']))
						{
					 		if($_POST['4']=='2')
					 		{
						 ?>
                     			2.) Reversible change  &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                      <?php 
							}
							else
							{
						?>		2.) Reversible change
                         <?php
							}
						}
						else
						{
								echo("2.) Reversible change");	
						}
					?></td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['4']))
						{
					 		if($_POST['4']=='3')
					 		{
						 ?>		3.) Desirable change &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                         <?php 
							}
							else
							{
						?>		3.) Desirable change
                         <?php
							}
						}
						else
						{
								echo("3.) Desirable change");
						}
					?>
                         </td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['4']))
						{
					 		if($_POST['4']=='4')
					 		{
						 ?>
                     			4.) None of these &nbsp;&nbsp;&nbsp;<img src='images/correct.jpg'>
                      <?php 
							}
							else
							{
						?>
                        		4.) None of these
                        <?php
							}
						}
						else
						{
								echo("4.) None of these");
						}
					?>
                     </td></tr>
                      <?php
					   if(!empty($_POST['4']))
						{
					 		if($_POST['4']!='4')
							{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>None of these</b></td></tr>');
							}
						}
						else
						{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>None of these</b></td></tr>');
						}
					 ?>
                     <tr><td><hr></td></tr>
                     <tr>
                    	<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 5</span></td>
                    </tr>
                    
                    					 <tr>
                      <td><b>The speed of a falling body increases continuously, this is because -</b></td>
                     </tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['5']))
						{
							 if($_POST['5']=='1')
					 		{
						 ?>		1.) Temperature &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                        <?php 
							}
							else
							{
						?>		1.) Temperature
                        <?php
							}
						}
						else
						{
								echo("1.) Temperature");
						}
					?> </td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['5']))
						{
							 if($_POST['5']=='2')
					 		{
						 ?>
                        		 2.) Pressure &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                         <?php 
							}
							else
							{
						?>		2.)  Pressure
                        <?php
							}
						}
						else
						{
								echo("2.) Pressure");	
						}
					?></td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['5']))
						{
					 		if($_POST['5']=='3')
					 		{
						 ?>
                         		3.) Both &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                          <?php 
							}
							else
							{
						?>
                        		3.) Both
                        <?php
							}
						}
						else
						{
								echo("3.) Both");	
						}
					?></td></tr>
                     <tr><td style="padding-left:15px;">
                      <?php
					  if(!empty($_POST['5']))
						{
					 		if($_POST['5']=='4')
					 		{
						 ?>		4.) None of these &nbsp;&nbsp;&nbsp;<img src='images/correct.jpg'>
                         <?php 
							}
							else
							{
						?>
                        		4.) None of these
                        <?php
							}
						}
						else
						{
								echo("4.) None of these");	
						}
					?></td></tr>
                     <?php
					  if(!empty($_POST['5']))
						{
					 		if($_POST['5']!='4')
							{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>None of these</b></td></tr>');
							}
						}
						else
						{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>None of these</b></td></tr>');
						}
					 ?>
                    <tr><td><hr></td></tr>
                    
                     <tr>
                    	<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 6</span></td>
                    </tr>
                     <tr>
                      <td><b>Schiff's reagent gives pink colour with : </b></td>
                     </tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['6']))
						{
							 if($_POST['6']=='1')
					 		{
						 ?>		1.) Acetaldehyde &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                        <?php 
							}
							else
							{
						?>		1.) Acetaldehyde
                        <?php
							}
						}
						else
						{
								echo("1.) Acetaldehyde");
						}
					?> </td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['6']))
						{
							 if($_POST['6']=='2')
					 		{
						 ?>
                        		 2.) Formaldehyde &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                         <?php 
							}
							else
							{
						?>		2.)  Formaldehyde
                        <?php
							}
						}
						else
						{
								echo("2.) Formaldehyde");	
						}
					?></td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['6']))
						{
					 		if($_POST['6']=='3')
					 		{
						 ?>
                         		3.) Acetone &nbsp;&nbsp;&nbsp;<img src='images/correct.jpg'>
                          <?php 
							}
							else
							{
						?>
                        		3.) Acetone
                        <?php
							}
						}
						else
						{
								echo("3.) Acetone");	
						}
					?></td></tr>
                     <tr><td style="padding-left:15px;">
                      <?php
					  if(!empty($_POST['6']))
						{
					 		if($_POST['6']=='4')
					 		{
						 ?>		4.) None of these &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                         <?php 
							}
							else
							{
						?>
                        		4.) None of these
                        <?php
							}
						}
						else
						{
								echo("4.) None of these");	
						}
					?></td></tr>
                     <?php
					  if(!empty($_POST['6']))
						{
					 		if($_POST['6']!='4')
							{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>Acetone</b></td></tr>');
							}
						}
						else
						{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>Acetone</b></td></tr>');
						}
					 ?>
                    <tr><td><hr></td></tr>
                    
                    
                    
                    
                    
                    
                    <tr>
                    	<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 7</span></td>
                    </tr>
                     <tr>
                      <td><b>Why the dam of water reservoir is thick at the bottom -</b></td>
                     </tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['7']))
						{
							 if($_POST['7']=='1')
					 		{
						 ?>		1.) Quantity of water increases with depth  &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                        <?php 
							}
							else
							{
						?>		1.) Quantity of water increases with depth 
                        <?php
							}
						}
						else
						{
								echo("1.) Quantity of water increases with depth ");
						}
					?> </td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['7']))
						{
							 if($_POST['7']=='2')
					 		{
						 ?>
                        		 2.) Density of water increases with depth &nbsp;&nbsp;&nbsp;<img src='images/correct.jpg'>
                         <?php 
							}
							else
							{
						?>		2.)  Density of water increases with depth
                        <?php
							}
						}
						else
						{
								echo("2.) Density of water increases with depth");	
						}
					?></td></tr>
                     <tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['7']))
						{
					 		if($_POST['7']=='3')
					 		{
						 ?>
                         		3.) Pressure of water increases with depth &nbsp;&nbsp;&nbsp;<img src='images/wrong.jpg'>
                          <?php 
							}
							else
							{
						?>
                        		3.) Pressure of water increases with depth
                        <?php
							}
						}
						else
						{
								echo("3.) Pressure of water increases with depth");	
						}
					?></td></tr>
                     <tr><td style="padding-left:15px;">
                      <?php
					  if(!empty($_POST['7']))
						{
					 		if($_POST['7']=='4')
					 		{
						 ?>		4.) Temperature of water increases with dept &nbsp;&nbsp;&nbsp;<img src='wrong.jpg'>
                         <?php 
							}
							else
							{
						?>
                        		4.) Temperature of water increases with dept
                        <?php
							}
						}
						else
						{
								echo("4.) Temperature of water increases with dept");	
						}
					?></td></tr>
                     <?php
					  if(!empty($_POST['7']))
						{
					 		if($_POST['7']!='2')
							{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span> Density of water increases with depth</b></td></tr>');
							}
						}
						else
						{
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span> Density of water increases with depth</b></td></tr>');
						}
					 ?>
                    <tr><td><hr></td></tr>
                    
                    </table>
                    </div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
</body>
</html>