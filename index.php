<?php
session_start();
include 'connection.php';
if(isset($_SESSION['name'])){
	include 'header_after_login.php';
}else{
	include 'header.php';
}
?>
<script src="js/bookmarkscroll.js"></script>
<script type="text/javascript"></script>
<style>
.act_abt{
	background-color: #69a70b;
	border-radius:10px;
}
.navbar-default .navbar-nav>.act_abt>a{
	color:#fff;
}
</style>
<script>
	$(document).ready(function(){
		$('#usernmm').html('<?php echo $_SESSION["name"];?>');
	});
</script>
<div class="container" id="mcol">
	<br />
    
       <div class="row">
            <div class="col-sm-3">  
             <div class="center2">
                <div class="arrow">
                      <img src="images/center-1.png"></div>
                      <h4 class="border">OUR<span>&nbsp;&nbsp;TEAM</span></h4>
            		</div>
                 <div  id="ourcenter4">
                 <br />
      				<p>Our team comprises of development professionals, education <span>professionals</span>, workers, activists, MBAs, consultants and anyone else who brings their experiences, expertise, and perspectives to the organization. What unifies them is the common goal of improving the future of our children and youth.</p>   
                 <div class="row">
                    <div class="col-sm-6 col-sm-offset-5">
                  <a href="ourworks.php"><p id="read">Read more</p></a>
                     </div>
                    </div>
                    
        </div>  	
         <div class="col-sm3"> 
           <div class="project">
                <div class="arrow">
                   <img src="images/center-1.png" /></div>
                   <h4 class="border">OUR<span>&nbsp;&nbsp;PROJECTS</span></h4> </div>
                <div class="ourcenterproject">  
                	<img src="images/project.jpg" />
               <div class="row">
                 <div class="col-sm-6 col-sm-offset-5">
                  <a href="#s"><p id="read">Read more</p></a>
               </div>
       
          </div>  
        </div> 
       </div>
      </div>       
                  
               
           		
    <div class="col-sm-6" style="padding-bottom:30px;">
               <div class="center1">
                <div class="arrow">
                      <img src="images/center-1.png"></div>
                      <h4 class="border1">ABOUT<span>&nbsp;&nbsp;GYAN-</span>&nbsp;<span>TARANG</span></h4></div>
               
                   
               <div class="ourcenter1">
                 <div class="row"> 
                  <div class="col-md-6">
                  <br />
                      <img src="images/ngo.png" /></div>
                        <div class="col-md-6">
                        <br /><br /><br /><br /><br /><br /><br /><br />
                          <p class="aboutgyan"><span>Gyan Tarang</span> is an innovative NGO committed to improve the quality of education in India.</p></div>
                          <p class="aboutgyan" id="abotgyan"> As one of the new age non-governmental organizations in the country, we focus on high-quality, low-cost, and replicable interventions to address gaps in the education system.</p>
                 
                    
                  
                   		<div class="col-md-12" id="abotgyan">    
                  <p style="padding:5px 8px; border:1px solid #42403b; box-shadow:3px 3px 3px #CCCCCC;">Established in 2012 to provide education to children in the rural districts of India, envisages improvement in the spread of education through mass awareness and use of technological tools.Gyan Tarang means ' wave of knowledge ' in Sanskrit. True to its name, it is the first major organization to embark on use of wide-scale improvement in educational landscape like a wave of ocean. This has been made possible due to various policies and strategies adopted by the organization. </p>
						</div>
                 
                  </div>
                  </div>
     </div>       
            <div class="col-sm-3"> 
              <div class="center">
                <div class="arrow">
                   <img src="images/center-1.png" /></div>
                   <h4 class="border1">OUR<span>&nbsp;&nbsp;PROGRAMMES</span></h4> </div> 
                       
            <div class="ourcenter">
            	<br />
                <div id="wn">
    <div id="lyr">
    	<div class="col-sm-12">
           <div>
              	<p class="imgbox">Scholarship exam conducted for students of Kandura village at <strong>Balangir</strong></p><br />
                <p  class="imgbox">Distribution of books & prizes to meritorious students at Deepshikha School,<strong>Sambalpur</strong></p><br />
                <p  class="imgbox">Enrollment of students’s parents in Shiksha Nirantar program in Kordih village in <strong>Kharagpur</strong></p><br />
            </div>         
            <div id="rpt"><p  class="imgbox">Scholarship exam conducted for students of Kandura village at <strong>Balangir</strong></p><br />
                <p  class="imgbox">Distribution of books & prizes to meritorious students at Deepshikha School,<strong>Sambalpur</strong></p><br />
                <p  class="imgbox">Enrollment of students’s parents in Shiksha Nirantar program in Kordih village in <strong>Kharagpur</strong></p><br />
                </div>     
                 
                
             </div>     
         
         </div>
          </div>      
             </div>
       </div>
         
         
         <div class="col-sm-3"> 
              <div class="center">
                <div class="arrow">
                   <img src="images/center-1.png" /></div>
                   <h4 class="border1">OUR<span>&nbsp;&nbsp;DONATOR</span></h4> </div> 
           <div class="ourcenter">
           <br />
           <div id="wd">
    <div id="2yr">
    	<div class="col-sm-12">
            <div class="donator">
			<?php 
				$sql = "SELECT * FROM donaters";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					
			?>
              <marquee direction="up" scrolldelay="250"><div class="row">
              	<div class="col-sm-2">
                	<img src="images/star.png">
                   </div>
                <div class="col-sm-10">
                <a href="ourworks.php?scrollto=<?php  echo $row["Dname"] ?>"><p><?php  echo $row["Dname"] ?></p></a>
                   </div>
               </div></marquee>
			    <?php
				} } ?>
         </div>
                </div>  
                 </div> 
                 </div>
                 </div>     
            </div>
          </div>  
  </div>   
  </div> 
<?php include 'footer.php';?>
<?php
	/*if(isset($_SESSION['name'])){*/
	if(isset($_REQUEST['err'])){
		echo "<script>alert('".$_REQUEST['err']."');</script>";
	}
?>