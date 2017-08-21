<html>
<head>
  <title>MyDashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/dash.css"); ?>">
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
		      		<li><a href="#"></a>

		      		</li>
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
		<div class="container-fluid">
			<form method="post" action="<?php echo base_url("welcome/search_category"); ?>">
		    	<div class="search-box">
	            	<div class="row">
	            		<div class="col-xs-4">
	            			<label>Unique Id</label>
	            			<input class="form-control" type="text" name="id" placeholder="Unique Id" value="<?php echo set_value('id'); ?>">
	            		</div>
	            		<div class="col-xs-4">
	            			<label>Name</label>
	            			<input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>">
	            		</div>
	            		<div class="col-xs-2" style="margin-top: 25px; margin-bottom: 15px;"> 
	            			<button class="form-control btn btn-primary btn-block" type="submit">Search</button>
	            		</div>
	            		<div class="col-xs-2" style="margin-top: 25px; margin-bottom: 15px;"> 
	            			<a href="<?php echo base_url("welcome/modify_category"); ?>" class="btn btn-danger btn-block">Reset</a>
	            		</div>
	            	</div>
	            </div>
			</form>
			<div class="white-box">
				<b>Total Categories:</b><p class="pull-right"><?php echo $rows_info; ?></p>
			</div>
			<?php if($this->session->flashdata('msg')): ?>
			<div class="alert alert-danger">
				<?php echo $this->session->flashdata('msg'); ?>
			</div>
		    <?php endif; ?>
			<form style="text-align: center; width: 1319px;" action="" method="">
				<table style=" margin-bottom: 20px;">
			     	<tr style="background-color: #2cabe3;">
			     		<th style="padding: 10px;">Id:</th>
			     		<th style="padding: 10px;">Name:</th>
			     		<th style="padding: 10px;">Description:</th>
			     		<th style="padding: 10px;">Image:</th>
			     		<th style="padding: 10px;">Delete:</th>
			     		<th style="padding: 10px;">Edit:</th>
			     	</tr>
			        <?php foreach($search_info as $m): ?>
			     	<tr style="text-align: justify;" class="box-shadow">
			     		<td style="padding: 10px;"><?php echo $id = $m['id']; ?></td>
			            <td style="padding: 10px;"><?php echo $m['name']; ?></td>
			            <td style="padding: 10px;"><?php echo $m['description']; ?></td>
			     		<td style="padding: 10px;"><img style="height: 120px; width: 140px;" src="<?php echo base_url().'uploads/'.$m['image']; ?>"></td>
			            <td style="padding: 10px;"><a href="<?php echo base_url("welcome/delete_category/$id"); ?>">Delete</a></td>
			            <td style="padding: 10px;"><a href="<?php echo base_url("welcome/edit_category/$id"); ?>">Edit</a></td>     		
			     	</tr>	
			        <?php endforeach; ?>
			    </table>
			</form>
		</div>
		<div class="footer" style="background-color: white; height: 50px;"></div>
	</body>
</html>