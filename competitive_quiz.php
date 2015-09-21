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
</style>
<script type="text/javascript">
	/*$(document).ready(function() {
		$("li.act_quiz").hover(function () {
			$(this).find(".sub_act_quiz").toggle();
		});
	});*/
</script>
<div class="container">
	<div class="row">
		<div class="col-md-12">  
			<div class="schocenter">
				<div class="arrow">
					<img src="images/center-1.png">
				</div>
				<h4 class="border1">Compitative Quiz</h4>
			</div>
			<div class="scholourcenter">
				<form name="f" action="competitive_quiz_action.php" method="post">
				<div class="col-md-12">
					<h2 class="texttitle">For more quizzes <a href="javascript:void(0);" class="morequizzs"> Click Here</a></h2>
						<div class="total_quiz">
							<p class="quiz">1. Directions A person throws a ball vertically upward with an initial velocity of 15 m/s.How long the ball is in air before it comes to his hand.?</p>
							<ul>
								<li>
									<label>
										<input name="1" id="1" value="1" type="radio">
										2.0 s
									</label>
								</li>
								<li>
									<label>
										<input name="1" id="1" value="2" type="radio">
										1.0 s
									</label>
								</li>
								<li>
									<label>
										<input name="1" id="1" value="3" type="radio">
										3.06 s
									</label>
								</li>
								<li>
									<label>
										<input name="1" id="1" value="4" type="radio">
										5.01 s
									</label>
								</li>
							</ul>
							<input type="hidden" name="h1" value="1" >
						</div>
						<div class="total_quiz">
							<p class="quiz">2. When a body is stationary?</p>
							<ul>
								<li>
									<label>
										<input name="2" id="2" value="1" type="radio">
										There is no force acting on it
									</label>
								</li>
								<li>
									<label>
										<input name="2" id="2" value="2" type="radio">
										The force acting on it not in contact with it
									</label>
								</li>
								<li>
									<label>
										<input name="2" id="2" value="3" type="radio">
										The combination of forces acting on it balances each other
									</label>
								</li>
								<li>
									<label>
										<input name="2" id="2" value="4" type="radio">
										The body is in vacuum
									</label>
								</li>
							</ul>
							<input type="hidden" name="h2" value="2" >
						</div>
						<div class="total_quiz">
							<p class="quiz">3.  A fish is swimming upward at an angle of 30 deg with the horizontal. The direction of the force of gravity acting on it is -</p>
							<ul>
								<li>
									<label>
										<input name="3" id="3" value="1" type="radio">
										upward
									</label>
								</li>
								<li>
									<label>
										<input name="3" id="3" value="2" type="radio">
										downward
									</label>
								</li>
								<li>
									<label>
										<input name="3" id="3" value="3" type="radio">
										horizontal
									</label>
								</li>
								<li>
									<label>
										<input name="3" id="3" value="4" type="radio">
										at an angle upward
									</label>
								</li>
							</ul>
							<input type="hidden" name="h3" value="3">
						</div>
						<div class="total_quiz">
							<p class="quiz">4. Condensation and evaporation are:</p>
							<ul>
								<li>
									<label>
										<input name="4" id="4" value="1" type="radio">
										There is no force acting on it
									</label>
								</li>
								<li>
									<label>
										<input name="4" id="4" value="2" type="radio">
										Irreversible change
									</label>
								</li>
								<li>
									<label>
										<input name="4" id="4" value="3" type="radio">
										Desirable change
									</label>
								</li>
								<li>
									<label>
										<input name="4" id="4" value="4" type="radio">
										None of these
									</label>
								</li>
							</ul>
							<input type="hidden" name="h4" value="4">
						</div>
						<div class="total_quiz">
							<p class="quiz">5.	Solubility is affected by:</p>
							<ul>
								<li>
									<label>
										<input name="5" id="5" value="1" type="radio">
										Temperature
									</label>
								</li>
								<li>
									<label>
										<input name="5" id="5" value="2" type="radio">
										Pressure
									</label>
								</li>
								<li>
									<label>
										<input name="5" id="5" value="3" type="radio">
										Both
									</label>
								</li>
								<li>
									<label>
										<input name="5" id="5" value="4" type="radio">
										None of these	
									</label>
								</li>
							</ul>
							 <input type="hidden" name="h5" value="4">
						</div>
						
						<div class="total_quiz">
							<p class="quiz">6.	Schiff's reagent gives pink colour with:</p>
							<ul>
								<li>
									<label>
										<input name="6" id="6" value="1" type="radio">
										Acetaldehyde
									</label>
								</li>
								<li>
									<label>
										<input name="6" id="6" value="2" type="radio">
										Formaldehyde
									</label>
								</li>
								<li>
									<label>
										<input name="6" id="6" value="3" type="radio">
										Acetone
									</label>
								</li>
								<li>
									<label>
										<input name="6" id="6" value="4" type="radio">
										None of these	
									</label>
								</li>
							</ul>
							<input type="hidden" name="h6" value="3" >
						</div>
						<div class="total_quiz">
							<p class="quiz">7.	Solubility is affected by:</p>
							<ul>
								<li>
									<label>
										<input name="7" id="7" value="1" type="radio">
										Temperature
									</label>
								</li>
								<li>
									<label>
										<input name="7" id="7" value="2" type="radio">
										Pressure
									</label>
								</li>
								<li>
									<label>
										<input name="7" id="7" value="3" type="radio">
										Both
									</label>
								</li>
								<li>
									<label>
										<input name="7" id="7" value="4" type="radio">
										None of these	
									</label>
								</li>
							</ul>
							<input type="hidden" name="h7" value="2">
						</div>
						<div class="clr"></div>
				</div>
				<div class="clr"></div>
				<input type="submit" name="submit" value="submit" class="company_button2">
			</form>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>