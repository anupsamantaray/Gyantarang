<?php 
include 'header.php';

?>
<script src="js/bookmarkscroll.js"  ></script>

<style>
.act_abt {
	
	background-color: #69a70b;
	border-radius:10px;
	
}
.navbar-default .navbar-nav>.act_abt>a{
	color:#fff;
}

</style>

<style>
	textarea {
	resize: none;
  }
</style>
<div class="container" id="mcol">
	<br />
    
       <div class="row">
              
            <div class="col-sm-3" style="padding-bottom:30px;">
        
            </div>
           		
    <div class="col-sm-6" style="padding-bottom:30px;">
               <div class="center1">
                <div class="arrow">
                      <img src="images/center-1.png"></div>
                      <h4 class="border1">Login Here</h4></div>
               
                   
               <div class="ourcenter1">
                 <div class="row"> 
				 <form Method="POST" Action="logindb.php" enctype="multipart/form-data">
					<div class="col-md-6">
						<br />
						<input type="email" name="Email" class="form-control" placeholder = "Enter Your Email">
						<br />
						
						<input type="password" name="Password" class="form-control" placeholder = "*******">

						</br>
						<input type="submit" class="btn btn-success" value="Submit">
						
                    </div>
                </form>  
                 
                  </div>
                  </div>
     </div>       
            
         
         
         
          </div>  
  </div>   
  </div> 
<?php include 'footer.php';?>
