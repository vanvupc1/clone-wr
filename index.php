<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');

}
?>
<html>
<head>
	<title>trang chủ</title>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
	 <?php  $username=$_SESSION['username'];  ?> 
     <nav class="navbar navbar-expand-lg bg-light navbar-fixed-top">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <a class="navbar-brand" href="index.php"><strong>MIS Website</strong></a>
    
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home </a></li>
		<li><a href="info.php">Info </a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Working Report <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="working_report.php">Show Report</a></li>
			
			<li><a href="search_report.php">Search Report</a></li>
            <li><a href="input.php">Submit Report</a></li>
			<li><a href="hashtag_search.php">Hashtag</a></li>
		
			<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Keyword</a>
				<ul class="dropdown-menu">                  
					<li><a href="add_keyword.php">Add</a></li>
					
					<li><a href="view_keyword.php">View</a></li>
					                                  
				</ul>
			</li> 
			
			<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub-Keywords</a>
				<ul class="dropdown-menu">                  
					
					<li><a href="add_detail.php">Add </a></li>
				
					<li><a href="delete_subkeywords.php">View</a></li>	                                  
				</ul>
			</li> 
		
		
		
		<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">User</a>
				<ul class="dropdown-menu">                  
					<li><a href="create_user.php">Add user</a></li>
					<li><a href="show_user.php">Show user</a></li>
					                                  
				</ul>
			</li> 
		
		
			
			
          </ul>
        </li>
	
        
		 <li><a href="license.php">Check License</a></li>
		
		
		
		<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IP<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="ip.php">List all IP</a></li>
		<li><a href="ping.php">Check online</a></li>
		<li><a href="nslookup.php">NSLookup</a></li>
		
          </ul>
        </li>
		<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Documents<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="sms_map.php">SMS Map</a></li>
		<li><a href="service_request.php">Service Request Form</a></li>
		<li><a href="Account_Reset.php">Account Reset Form</a></li>
          </ul>
        </li>
        
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Feedback System <span class="caret"></span></a>
          <ul class="dropdown-menu">
			
			<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Mistake</a>
				<ul class="dropdown-menu dropdown-menu-right">                  
					<li><a href="mistake-submit.php">Submit</a></li>
					<li><a href="mistake-show.php">Show</a></li>
					
				</ul>
			</li> 
			
			
			<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">IT Staff Report</a>
				<ul class="dropdown-menu dropdown-menu-right">                  
					<li><a href="feedback_itstaff.php">Type 1</a></li>
					<li><a href="itstaff_feedback.php">Type 2</a></li>
					<li><a href="itstaff_feedback_total.php">Type 3</a></li>
					<li><a href="invidual_staff_report.php">Individual Staff</a></li>
					<li><a href="leader_staff.php">Leader and Staff</a></li>
					<li><a href="bad_feedback.php">Bad Feedback</a></li>
				</ul>
			</li> 
		
			<li><a href="job_feedback_report.php">Job report</a></li>
			<li><a href="user_feedback_report.php">User report</a></li>
			<li><a href="feedback_report.php">Score report</a></li>
			<li><a href="domain_user_detail.php">Domain User Detail</a></li>
			
		
			 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Email</a>
				<ul class="dropdown-menu">                  
					<li><a href="show_special_user.php">View</a></li>
					<li><a href="add_special_user.php">Add</a></li>	                                  
				</ul>
			</li> 
			
			
          </ul>
        </li>
	    
		<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sensor System<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="thermo_input.php">Submit Data</a></li>
		<li><a href="thermo_report.php">Show Data</a></li>
		<li><a href="thermal_report_custom_combine.php">Show Combine Data</a></li>
		
          </ul>
        </li>
		 <li><a href="vote.php">Vote</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php?out=1">Sign out, <strong><?php echo $username?></strong></a></li>
       
      </ul>
    </div>
  </div>
</nav>
</body>
</html>