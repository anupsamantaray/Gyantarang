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
	$(document).ready(function() {
		$("li.act_quiz").hover(function () {
			$(this).children("ul.sub_act_quiz").toggle();
		});
	});
</script>
<div class="container">
	<div class="row">
            <div class="col-md-12">  
             <div class="schocenter">
                <div class="arrow">
                      <img src="images/center-1.png"></div>
                      <h4 class="border1">Basic Quiz</h4>
            		</div>
                 <div class="scholourcenter">
					<div class="col-md-12">
						<h2 class="texttitle">For more quizzes <a href="#s"> Click Here</a></h2>
						<div class="total_quiz">
							<p class="quiz">1. A person throws a ball vertically upward with an initial velocity of 15 m/s.How high it goes?</p>
							<ul>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										11.5m
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										12.5m
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										8m
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										6m
									</label>
								</li>
							</ul>
						</div>
						<div class="total_quiz">
							<p class="quiz">2.A body, whose momentum is constant, must have constant-</p>
							<ul>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Force
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Velocity
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Acceleration
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										All of these
									</label>
								</li>
							</ul>
						</div>
						
						
						<div class="total_quiz">
							<p class="quiz">3.A man getting down a running bus, falls forward because-</p>
							<ul>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										due to inertia of rest, road is left behind and man reaches forward
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										due to inertia of motion upper part of body continues to be in motion in forward direction while feet come to rest as soon as they touch the road
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										he leans forward as a matter of habit
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										of the combined effect of all the three factors stated in (1), (2) and (3)
									</label>
								</li>
							</ul>
						</div>
						<div class="total_quiz">
							<p class="quiz">4. Which of the following class of forces is different from others -</p>
							<ul>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Pulling of a cart
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Stretching of a coiled spring
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Kicking of a football
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Electrical force
									</label>
								</li>
							</ul>
						</div>
						<div class="total_quiz">
							<p class="quiz">5.The speed of a falling body increases continuously, this is because  -</p>
							<ul>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										No force acts on it
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										It is very light
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										The air exert the frictional force
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										The earth attract it
									</label>
								</li>
							</ul>
						</div>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
				</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php';?>