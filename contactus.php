<?php
session_start();
include 'connection.php';
if(isset($_SESSION['name'])){
	include 'header_after_login.php';
}else{
	include 'header.php';
}
?>
<script>
	$(document).ready(function(){
		$('#usernmm').html('<?php echo $_SESSION["name"];?>');
	});
</script>
<style>
.act_cont {
	background: #69a70b;
	border-radius:10px;
}
.navbar-default .navbar-nav>.act_cont>a{
	color:#fff;
}

.col-md-12{
	padding-left:0px;
	padding-right:0px;
}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-12">  
			<div class="schocenter">
                <div class="arrow">
					<img src="images/center-1.png">
				</div>
				<h4 class="border1">Contact Us</h4>
			</div>
			<div class="company_address">
				<div class="row">
					<div class="col-sm-6">
						<h3>&nbsp;&nbsp;Reach Us:</h3>
						<div class="col-sm-8">
							<p>270, Block - N, B P,<br />
								&nbsp;&nbsp;&nbsp;	Township, Patuli, <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kolkata- 700094</p>
							<p>Phone: (022) 666 444</p>
							<p>Email: <span><a href="mailto:sahayak@gyantarang.com">sahayak@gyantarang.com</a></span></p>
                        </div>
                    </div>
					<div class="col-sm-6">
						<div class="contact_info">
							<div class="map">
								<!--iframe  width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px;">View Larger Map</a></small-->
								
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14735.90800052538!2d88.43368259259033!3d22.579963531261853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275b020703c0d%3A0xece6f8e0fc2e1613!2sSector+V%2C+Salt+Lake+City%2C+Kolkata%2C+West+Bengal!5e0!3m2!1sen!2sin!4v1442518883844" width="477" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>