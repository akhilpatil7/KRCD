
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KRCD | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/style.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KRCD India</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp; Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
   </div><!-- /.container -->
   
 <!--header-->  
   <header id="header"> 
    <div class= "container">
    	<div class="row">
    		<div class="col-md-10">
            <h1><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;	Home <small> &nbsp;Know More About Us</small></h1>
            </div>
            <div class="col-md-2" >
            
            <div class="btn-group " role="group" aria-label="mid_button">
 				 
				 <button type="button" class="btn btn-default" data-target="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; LOGIN &nbsp; TO &nbsp;DASHBOARD</button>
 				 
</div>
            
            </div>
    </div>
    
    </div>
    
   </header>
   
   <section id="breadcrumb">
   	<div class="container">
    	<ol class="breadcrumb">
        <li class="active">Home</li>
        </ol>
    </div>
   </section>
   
   <!--main Qunote -->
   
 <section id="main" >
   <div class="container" id="maindiv">
   		<div class="row" >
        <div class="col-md-3">
               <ul class="list-group">
              <li><h4  align="center">LOCATIONS </h4></li>
              <li class="list-group-item"><b><h4 align="center">HEAD OFFICE & FACTORY</h4></b>
                                        Opp. Worli BDD Chawl No. 114, Worli, Mumbai 400 013. INDIA.<br>
                                        Tel: 022-24927154, 24925441, 24920076<br>
                                        Fax: +91-22-24974506<br>
                                        email: info@krcd.com<br></li>
              <li class="list-group-item"><h4 align="center">BRANCH OFFICE</h4>
                                            124 A, Ist Floor
                                            Antriksh Bhawan
                                            22 K.G.Marg
                                            New Delhi - 400 001.<br>
                                            Tel: 011-51521467, 23350474<br>
                                            Fax: +91-011-51521220</li>
              <li class="list-group-item"><h4 align="center">ASSOCIATE PARTNERS</h4>
                                            <strong>Aftab Electronics</strong>><br>
                                            Plot No. EL-180
                                            TTC Industrial Area Mahape Navi Mumbai<br>
                                            Tel: 3097 9978<br>
              								<strong>Vansal Agenices</strong><br>

                                            <a href="http://www.vansalagencies.com">http://www.vansalagencies.com</a><br><br>
                                            
                                            <strong>Rajes Art Printers</strong><br>
                                            <a href="http://www.rajesartprinters.com">http://www.rajesartprinters.com</a></li>
          
            </ul>
        
        
        
        
        </div>

<?php 

if ($_GET['il']) {
	#print_r("username exist");
	echo" <script type='text/javascript'>alert(' username exist');</script> " ;
	header("Location: http://localhost/test/krcd/registerer.php");
	echo "<meta http-equiv='refresh' content='0; url=http://localhost/test/krcd/registerer.php'>";
}
if ($_GET['em'] == '3') {
	#print_r("email exist");
	echo" <script type='text/javascript'>alert('email exist');</script>  ";	
	echo "<meta http-equiv='refresh' content='0; url=http://localhost/test/krcd/registerer.php'>";
}
 ?>
 <br>
<form class="form-group" action="register.php" method="POST">
	EMAIL: <input style="max-width:700px" class="form-control" type="text" name="email"><br>
	USERNAME: <input style="max-width:700px" class="form-control" type="text" name="username"><br>
	PASSWORD: <input style="max-width:700px" class="form-control" type="password" name="password"><br>
	RETYPE PASSWORD: <input style="max-width:700px" class="form-control" type="password" name="repassword"><br>
	<input style="max-width:700px ; background-color:#e74c3c ; border-color:#c0392b" class="form-control btn btn-primary" type="submit" VALUE="SUBMIT">
</form>
</div>
        </div>
   </div>	
   
   </section>
</div>
</div>

    <!-- Modal 1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">LOGIN&nbsp; TO &nbsp; YOUR &nbsp; DASHBOARD</h4>
      </div>
      <div class="modal-body">
      <!--FORM FOR UPLOAD -->
         <form class="form-group" action="login.php" method="POST" enctype="multipart/form-data">
			<b>Username: </b><input class="form-control" type="text" name="username"><br>	
			<b>Password: </b> <input class="form-control" type="password" name="password"><br>
			
			
             
			<?php 
				session_start();
				$_SESSION['username'] = $var_value;

			?>
				
      </div>
      <div class="modal-footer">
      
      	<a class ="btn btn-default btn-primary"  href="registerer.php?il=0">Register</a>
		
        <button  type="button" class="btn btn-default btn-primary" data-target="#forgotpass" data-toggle="modal">Forgot Password</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input class ="btn btn-default btn-primary " type="submit" value="LOGIN">
        
        
      </div>
      </form>
    </div>
  </div>
</div>


 <!-- Modal 2 -->
<div class="modal fade" id="forgotpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">CHANGE&nbsp; YOUR &nbsp; YOUR &nbsp; PASSWORD</h4>
      </div>
      <div class="modal-body">
      <!--FORM FOR UPLOAD -->
            <form class="form-group" action="forgotpass.php" method="POST" enctype="multipart/form-data">
            <b>email </b><input class="form-control" type="text" name="email"><br>
           
            <input class="form-control btn btn-default btn-primary" type="submit" name="ForgotPassword" value="Request Reset">	
            
            
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--footer-->
<footer id="footer">
	<p>Copyright KRCD , &copy;2017 </p>	

</footer>    




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
