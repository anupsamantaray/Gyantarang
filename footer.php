
<script type="text/javascript">
$(document).ready(function(){
  $("button#submit").click(function(){
		var name = $("input#inputName").val();
		if (name == ""){
		  $("#name-error").html("Name required!");
		  $("input#inputName").focus();
		  var error = 1;
		  return false;
		}else{
			$("#name-error").html("");
			var error = 0;
		}
		
		var email = $("#inputEmail").val();
		var filter = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{1,4}$/;
		if (email == ""){
		  $("#email-error").html("Email required!");
		  $("#inputEmail").focus();
		  var error = 1;
		  return false;
		}else if(!(filter.test(email))){
		  $("#email-error").html("Invalid email!");
		  $("#inputEmail").focus();
		  var error = 1;
		  return false;
		}else{
			$("#email-error").html("");
			var error = 0;
		}
		
		var contact = $("#inputPhoneNo").val();
		if (contact == ""){
		  $("#contact-error").html("Mobile number required!");
		  $("#inputPhoneNo").focus();
		  var error = 1;
		  return false;
		}else if(isNaN(contact)){
		  $("#contact-error").html("Only numbers accepted!");
		  $("#inputPhoneNo").focus();
		  var error = 1;
		  return false;
		}else{
			$("#contact-error").html("");
			var error = 0;
		}
		
		var message = $("textarea#inputComment").val();
		if(message == ""){
			$("#message-error").html("Message required!");
			$("textarea#inputComment").focus();
			var error = 1;
			return false;
		}else{
			$("#message-error").html("");
			var error = 0;
		}
		});
});
</script>

<style>
.frm_error {color: #FF0000;}
</style> 
 
  <div class="row" id="ffluid">
        	<div class="col-sm-6 col-sm-offset-4">
            	
          <div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
  <div class="row">
  	<div class="col-sm-4">
   		<p><a href="#myModal" class="btn btn-md btn-primary" data-toggle="modal">Feedback</a></p>
   			</div>
     <div class="col-sm-6">
    	<p style="padding:6px;">Copyright &copy; 2015 Designed by <a href="http://www.c9live.com" target="_new">Cloud9</a></p>
        </div>
  </div>          
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title">Feedback</h3>
                </div>
    <form class="form-horizontal" action="contact_form.php"  method="post">
        <div class="form-group">
        	<label for="inputName" class="control-label col-xs-3">Name:</label>
            <div class="col-xs-5">
                <input type="text" class="form-control" name="name" id="inputName" placeholder="Full Name">
                 
              </div>
              <span id="name-error" class="frm_error col-xs-4"></span>
          </div>  
           <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-3">Email:</label>
            <div class="col-xs-5">
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                
            </div>
            <span id="email-error" class="frm_error col-xs-4"></span>
        </div>
         <div class="form-group">
        	<label for="inputName" class="control-label col-xs-3">Phone No:</label>
            <div class="col-xs-5">
                <input type="text" class="form-control" name="contact" id="inputPhoneNo" placeholder="Phone Number">
                
                </div> 
                <span id="contact-error" class="frm_error col-xs-4"></span>  
          </div>  
        <div class="form-group">
            <label for="inputComment" class="control-label col-xs-3">Comment:</label>
            <div class="col-xs-5">
                <textarea  row="10"  class="form-control" name="message" id="inputComment" placeholder="Enter text here..."></textarea>
                
            </div>
            <span id="message-error" class="frm_error col-xs-4"></span>    
        </div>
        
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                   
                </div>
            </div>
          </form>
        </div>
    </div>
 </div>
 </div>
  </div>
  
</div> 
</body>
</html>                                		