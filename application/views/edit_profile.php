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
		  	<div class="contain">
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
		      		<li><a href="#"></a>

		      		</li>
		      		<li class="dropdown user-info">
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
		<?php if($this->session->flashdata('pass_change')): ?>     
		<div class="alert alert-success">
			<b>Success</b><?php echo $this->session->flashdata('pass_change'); ?>
		</div>
		<?php endif; ?>      
		<div class="container">
		<input type="hidden" name="id" value="<?php echo $id = $this->session->userdata('id'); ?>">
			<form action="<?php echo base_url("welcome/do_upload_profile/$id"); ?>" method="post" enctype="multipart/form-data">   
	      		<div class="heading-bg">
	          			<h4>Edit Profile</h4>
	        	</div>
	      		<div class="white-box box-shadow">
	        		<div class="">
	        			<div class="row">
	        				<div class="col-lg-offset-2 col-lg-8">
	        					<img src="<?php echo base_url().'uploads/'.$this->session->userdata('image'); ?>" class="img-design img-responsive img-circle">
	        				</div>	
	        		    </div>
	        		    <div class="row">
	        		    	<div class="col-lg-2 pull-right">
	        		    		<span class="btn btn-primary btn-file">
								    Upload Image<input type="file" name="userfile">
								</span>
	        		    	</div>
	        		    </div>
	        		    <input type="hidden" name="id" value="<?php $id = $this->session->userdata('id'); ?>">
	           			<b>Name:</b> <input class="form-control" type="text" name="name" value="<?php echo $this->session->userdata('name'); ?>">
	           			<br>
	            		<b>Email:</b> <input type="text" name="email" class="form-control" value="<?php echo $this->session->userdata('email'); ?>">    
	            		<br>
	            		<b>Phone:</b> <input type="text" name="phone" class="form-control" value="<?php echo $this->session->userdata('phone'); ?>">    
	            		<br>
	            		<a class="btn btn-primary btn-block" href="<?php echo base_url("welcome/change_password/$id"); ?>"><b>Change Password</b></a>
	        		</div>
	        		<br>
	        		<div class="row">
	        			<div class="col-lg-12">
	          			    <input type="submit" name="submit" class="btn-size btn btn-info btn-block" value="Submit">
	        		    </div>
	        		</div>
	      		</div>	
			</form>  	
		</div>
		<div style="background-color: white; height: 50px;"></div>
	</body>
</html>		