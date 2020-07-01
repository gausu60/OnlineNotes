<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Help Us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--Navigation Bar-->  
      <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
      
          <div class="container-fluid">
            
              <div class="navbar-header">
              
                  <a class="navbar-brand">Online Notes786</a>
                  <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  
                  </button>
              </div>
              <div class="navbar-collapse collapse" id="navbarCollapse">
                  <ul class="nav navbar-nav">
                    <li ><a href="index.php">Home</a></li>
                    <li class="active"><a href="help.php">Help</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                  </ul>
              
              </div>
          </div>
      
      </nav>
      <!--Jumbotron with Sign up Button-->
      <div class="jumbotron" id="myContainer">
          <h1>How can i help you?</h1>
          
      </div>
      <div class="container-fluid">
        <div class="row" translate="no">
          <div class="col-sm-offset-3 col-sm-4">
            <div class="fb-like" data-href="http://mrgausu.offyoucode.co.uk/NotesApp/" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        </div>
        <div class="col-sm-4">
          <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-a82d1c55-6eaf-4b76-b89c-580d8d8c49eb"></div>
        </div>
        <div class="col-sm-4">
          <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Hello%20world"
  data-size="large">
Tweet</a>

          
        </div>
      </div>
      <!--Login form-->    
      <form method="post" id="loginform">
      	<div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      		<div class="modal-dialog">
      			<div class="modal-content">
      				<div class="modal-header">
      					<button class="close" data-dismiss="modal">
                    	&otimes;
                  		</button>
                  		<h4 id="myModalLabel">Login: </h4>
      				</div>
      				<div class="modal-body">
      					 <!--Login message from PHP file-->
      					 <div id="loginmessage"></div>
      					
      				</div>
      				<div class="form-group">
      					<label for="loginemail" class="sr-only">Email:</label>
                      	<input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
      				</div>
      				<div class="form-group">
                      <label for="loginpassword" class="sr-only">Password</label>
                      <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">

      				</div>
      				<div class="checkbox">
      					<label>
      						<input type="checkbox" name="rememberme" id="rememberme">
                        Remember me 
                        <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal" id="forgetlink">
                      Forgot Password?
                      	</a>


      					</label>
      				</div>
      			<div class="modal-footer">
      				<input class="btn green" name="login" type="submit" value="Login">
	                <button type="button" class="btn btn-default" data-dismiss="modal">
	                  Cancel
	                </button>
	                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
	                  Register
	                </button>  

      			</div>	
      			</div>
      		</div>
      	</div>

      </form>
      <!--Sign up form--> 
      <form method="post" id="signupform">
      	<div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      		<div class="modal-dialog">
      			<div class="modal-content">
      				<div class="modal-header">
      					<button class="close" data-dismiss="modal">
                    &times;
                  		</button>
                  		<h4 id="myModalLabel">
		                    Sign up today and Start using our Online Notes App! 
		                </h4>
		            </div>
		            <div class="modal-body">
		            	<!--Sign up message from PHP file-->
                  		<div id="signupmessage"></div>
                  		<div class="form-group">
                  			<label for="username" class="sr-only">Username:</label>
                      		<input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
                      	</div>

                      	<div class="form-group">
                  			<label for="email" class="sr-only">Email:</label>
                      		<input class="form-control" type="email" name="email" id="email" placeholder="Email" maxlength="30">
                      	</div>

                      	<div class="form-group">
                  			<label for="password" class="sr-only">Choose Your Remember Password:</label>
                      		<input class="form-control" type="password" name="password" id="password" placeholder="Choice Your Remember Password">
                      	</div>

                      	<div class="form-group">
                  			<label for="username" class="sr-only">Confirm Password:</label>
                      		<input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm Password">
                      	</div>
                      	<div class="form-group">
                      		<label for="role" class="sr-only">Proffessional</label>
                      		<select>
                      			<option value="students">Students</option>
                      			<option value="professor">Professor/Teachers</option>
                      			<option value="enterprenue">Enterprenue</option>
                      			<option value="other">Other</option>
                      		</select>
                      		<input type="checkbox" name="agreeform" id="agreeform">I Agree...
                      	</div>

		            	
		            </div><br>
		            <div class="footer">
		            	<input class="btn green" name="signup" type="submit" value="Sign up">
		            	<button type="button" class="btn btn-default " data-dismiss="modal">
		            		Cancel
		            	</button>

		            </div>
      			</div>
      			
      		</div>
      	</div>

      </form>
      <!--Forgot password form-->
      <form method="post" id="forgotpasswordform">
      	<div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      		<div class="modal-dialog">
      			<div class="modal-content">
      				<div class="modal-header">
      					<button class="close" data-dismiss="modal">
                    &times;
                  		</button>
                  		<h4 id="myModalLabel">
                    Forgot Password? Enter your email address: 
                  		</h4>


      					
      				</div>
      				<div class="modal-body">
      					<!--forgot password message from PHP file-->
      					<div id="forgotpasswordmessage"></div>
      					<div class="form-group">
      						<label for="forgotemail" class="sr-only">Email:</label>
      						<input type="email" name="forgotemail" id="forgotemail" placeholder="Enter Your Valid Email" maxlength="30" class="form-control">
      						
      					</div>
      				</div>
      				<div class="modal-footer">
      					<input type="submit" value="Submit" class="btn green">
      					<button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                		</button>
                		<button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                  Register
                		</button>


      				</div>
      				
      			</div>
      			
      		</div>
      	</div>
      	
      </form>

      

      <!-- Footer-->
      <div class="footer">
          <div class="container">
              <p>MR. Gausu Copyright &copy; 2018-<?php $today = date("Y"); echo $today?>.</p>
          </div>
      </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/mr_IN/sdk.js#xfbml=1&version=v5.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>

</body>
</html>