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
										Option one is this and that
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Option one is this and that
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Option one is this and that
									</label>
								</li>
							</ul>
						</div>
						<div class="total_quiz">
							<p class="quiz">1. A person throws a ball vertically upward with an initial velocity of 15 m/s.How high it goes?</p>
							<ul>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Option one is this and that
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Option one is this and that
									</label>
								</li>
								<li>
									<label>
										<input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
										Option one is this and that
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