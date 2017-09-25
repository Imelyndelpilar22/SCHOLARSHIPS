<?php
	session_start();
	include 'spn_lock.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>FindScholar</title>

    <!-- Bootstrap -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link href="assets/css/prettyPhoto.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet" />		
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
   <body>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 1000px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Request Form</h4>
      </div>
      <div class="modal-body"  style="height: 700px;">
        <iframe src="" id="myFile" width="100%" height="100%"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Reject</button>
        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Interview</button>
        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.php"><h1><span>Find</span>Scholar</h1></a>
						</div>
					</div>
	
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="spn_programs.php" >My Programs</a></li>
								<li role="presentation"><a href="spn_scholars.php">My Scholars</a></li>
								<li role="presentation"><a href="spn_interview.php" >Interview</a></li>
								<li role="presentation"><a href="spn_request.php" class="active">Request</a></li>
                                <li role="presentation"><a href="spn_profile.php" >Profile</a></li>
								<li role="presentation"><a href="logout.php" >Logout</a></li>		
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li></li>
			</div>		
		</div>	
	</div>
	<section id="blog" class="container" style="min-height: 400px;">
				 <div class="col-md-10 col-md-offset-1">	
						<h1 class="text-center" style="color: #000">REQUEST</h1>
						<div class="blog-item" style="min-height: 500px;border-top: 1px solid #ccc;padding-top: 30px;">
						
								<input type="text" name="" class="input-md col-md-4" style="border: 1px solid #2FA4E7;border-radius: 5px;color: #000; padding: 3px;margin-bottom: 5px;" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"/>
							
	                       <table class="table table-bordered" id="myTable">
								<thead>
									<tr style="background-color: #2FA4E7">
										<th class="text-center col-md-1">
											<h5 style="color: #fff;">Date</h5>
										</th>
										<th class="col-md-4">
											<h5 style="color: #fff;">Name</h5>
										</th>
										<th class="col-md-1 text-center">
											<h5 style="color: #fff;">Status</h5>
										</th>
										<th class="col-md-1 text-center">
											<h5 style="color: #fff;">Program</h5>
										</th>
										<th class="col-md-1 text-center">
											<h5 style="color: #fff;">Actions</h5>
										</th>
									</tr>
								</thead>
							<tbody>

								<?php
									require 'spn_request_script.php';
								?>	
							</tbody>
						 </table> 
						 </div>
						 </div>

    </section><!--/#blog-->

     <script>
		function myFunction() 
		{
		  var input, filter, table, tr, td, i;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("myTable");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) 
		  {
		    td = tr[i].getElementsByTagName("td")[1];
		    if (td) {
		      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
		      {
		        tr[i].style.display = "";
		      } else {
		        tr[i].style.display = "none";
		      }
		    }       
		  }
		}
</script>
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>  
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/functions.js"></script>
	
</body>
</html>