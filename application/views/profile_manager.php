<html>
<head>
  <title>MyDashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/profile.css"); ?>">
</head>
	<body style="background-color: #edf1f5;">
        <nav class="navbar navbar-inverse">
		  	<div class="container-fluid">
	    		<ul class="nav navbar-nav">
	    		    <li class="active"><a href="<?php echo base_url("welcome/dashboard"); ?>">DashBoard</a></li>
		      		<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Items Manager
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="<?php echo base_url("welcome/add_items"); ?>">Add Item</a></li>
				          <li class="divider"></li>
				          <li><a href="<?php echo base_url("welcome/modify_items"); ?>">Modify Item</a></li>
				        </ul>
			        </li>
			        <li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category Manager
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="<?php echo base_url("welcome/add_category"); ?>">Add Catagory</a></li>
				          <li class="divider"></li>
				          <li><a href="<?php echo base_url("welcome/modify_category"); ?>">Modify Category</a></li>
				        </ul>
			        </li>
		    	</ul>
		    	<ul class="nav navbar-nav navbar-right">			      
		      		<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				        <img class="img-circle" style="width: 46px; margin-bottom: -8px; margin-top: -13px;" src="<?php echo base_url().'uploads/'.$this->session->userdata('image'); ?>">
				        <b><?php echo $this->session->userdata('name'); ?></b>
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu dropdown-menu-user">
				          	<li><a>
					          	<div class="row">
						            <div class="col-lg-4">
						          		<img class="img-round" style="width: 60px;" src="<?php echo base_url().'uploads/'.$this->session->userdata('image'); ?>">
						            </div>
					                <div class="col-lg-8">
					          			<small><?php echo $this->session->userdata('id'); ?></small><br>
					          			<small><?php echo $this->session->userdata('name'); ?></small><br>
					        			<small><?php echo $this->session->userdata('email'); ?></small>
					          		</div>
					          	</div>
				        	</a></li>
				        	<li class="divider"></li>
				          	<li><a href="<?php echo base_url("welcome/profile_manager"); ?>"><span style="padding-right: 5px;" class="glyphicon glyphicon-cog"></span>Account Setting</a></li>
				          	<li class="divider"></li>
				          	<li><a href="<?php echo base_url("welcome/logout"); ?>"><span style="padding-right: 5px;" class="glyphicon glyphicon-off"></span>Logout</a></li>
				        </ul>
			        </li>
		    	</ul>
		  	</div>
		</nav>
		<div class="container white-box box-shadow">
			<?php if($this->session->flashdata('msg')): ?>
			<div class="alert alert-danger">
				<b>Error: </b><?php echo $this->session->flashdata('msg'); ?>
			</div>
		    <?php endif; ?>
		    <?php if($this->session->flashdata('cmsg')): ?>
			<div class="alert alert-success">
				<b>Success: </b><?php echo $this->session->flashdata('cmsg'); ?>
			</div>
		    <?php endif; ?>
	        <div class="row">
	            <div class="col-lg-offset-2 col-lg-10">
	         	    <div class="profile-img">
 	         	   		<img class="bg-img img-circle" style="" src="<?php echo base_url().'uploads/'.$this->session->userdata('image'); ?>" class="img-responsive"> 
	                </div>         	
	         	</div>
	        </div>
	        <div class="row">
	        	<div class="col-lg-offset-9 col-lg-3">
	         		<div class="text-alignment">
	         		    <h3><a href="<?php echo base_url("welcome/edit_profile"); ?>">Edit Profile</a></h3>
	         	    </div>
	         	</div>
	        </div>
	        <div class="data-alignment">
	        <hr>
	        <form>
	        	<div class="row">
	        		<div class="col-lg-12">
	        			<div class="text-font">
	        				<strong>Name:</strong><input class="form-control" type="text" name="name" value="<?php echo $this->session->userdata('name'); ?>" readonly>
	        		    </div>
	        		</div>        		
	        	</div>
	        	<hr>
	        	<div class="row">
	        		<div class="col-lg-12">
	        			<div class="text-font">
	        				<strong>Username:</strong><input class="form-control" type="text" name="name" value="<?php echo $this->session->userdata('email'); ?>" readonly>
	        		    </div>
	        		</div>	
	        	</div>
	        	<hr>
	        	<div class="row">
	        		<div class="col-lg-12">
	        			<div class="text-font">
	        				<strong>Phone:</strong><input class="form-control" type="text" name="phone" value="<?php echo $this->session->userdata('phone'); ?>" readonly>
	        		    </div>
	        		</div>	
	        	</div>
	        	<hr>
	        </form>
	        </div>	
        </div>
        <div style="background-color: white; height: 50px;"></div>
	</body>
</html>	