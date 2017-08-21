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
		<div class="container">
		    <input type="hidden" name="id" value="<?php $id = $this->session->userdata('id'); ?>">
			<form action="<?php echo base_url("welcome/update_password/$id"); ?>" method="post">
				<div class="heading-bg">
						<h4>Change Password</h4>
				</div>
				<div class="white-box box-shadow">
					<div class="">
						<b>Previous Password:</b><input class="form-control" type="password" name="prev_password" value="<?php echo set_value('prev_password'); ?>">
						<?php if($this->session->flashdata('pass_change')): ?>
						<div class="text-danger">
							<?php echo $this->session->flashdata('pass_change'); ?>
						</div>
						<?php endif; ?>
						<br>
						<b>New Password:</b><input class="form-control" type="password" name="new_password" value="<?php echo set_value('new_password'); ?>">
						
						<?php echo form_error('new_password'); ?>
						<br>
						<b>Confirm New Password:</b><input class="form-control" type="password" name="c_new_password" value="<?php echo set_value('c_new_password'); ?>">
						
						<?php echo form_error('c_new_password'); ?>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-12">
							<button class="btn-size btn btn-info btn-block">Submit</button>
						</div>
					</div>					
				</div>
			</form>
		</div>
		<div style="margin-top: 135px; background-color: white; height: 50px;"></div>
	</body>
</html>		