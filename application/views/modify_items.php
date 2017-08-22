<html>
<head>
  <title>MyDashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/dash.css"); ?>">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body style="background-color: #edf1f5;">
		<nav class="navbar navbar-inverse">
            <div class="">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <div class="">
                        <a class="navbar-brand" href="<?php echo base_url("welcome/dashboard"); ?>">Dashboard</a>
                    </div>
              
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Items Manager<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("welcome/add_items"); ?>">Add Items</a></li>
                                <li><a href="<?php echo base_url("welcome/modify_items"); ?>">Modify Items</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category Manager<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("welcome/add_category"); ?>">Add Category</a></li>
                                <li><a href="<?php echo base_url("welcome/modify_category"); ?>">Modify Category</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
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
                                <?php if($this->session->userdata('email')==$this->session->userdata('admin_email')): ?>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url("welcome/users"); ?>"><span style="padding-right: 5px;" class="glyphicon glyphicon-user"></span>Users</a></li>
                                <?php endif; ?>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url("welcome/logout"); ?>"><span style="padding-right: 5px;" class="glyphicon glyphicon-off"></span>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		<div class="container-fluid">
		    <form method="get" action="<?php echo base_url("welcome/search_items"); ?>">
		    	<div class="search-box">
	            	<div class="row">
	            		<div class="col-xs-3">
	            			<label>Unique Id</label>
	            			<input class="form-control" type="text" name="id" placeholder="Unique Id" value="<?php echo set_value('id'); ?>">
	            		</div>
	            		<div class="col-xs-3">
	            			<label>Name</label>
	            			<input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>">
	            		</div>
	            		<div class="col-xs-3">
	            			<label>Category</label>
	            			<select class="form-control" name="category">
	            				<option value>Category</option>
	            				<?php foreach($category_info as $c): ?>
	            				<option value="<?php echo $c['id']; ?>"><?php echo $c['name']; ?></option>
	            			    <?php endforeach; ?>
	            			</select>
	            		</div>
	            		<div class="col-xs-2" style="margin-top: 25px; margin-bottom: 15px;"> 
	            			<button class="form-control btn btn-primary btn-block" type="submit">Search</button>
	            		</div>
	            		<div class="col-xs-1" style="margin-top: 25px; margin-bottom: 15px;"> 
	            			<a href="<?php echo base_url("welcome/modify_items"); ?>" class="btn btn-danger btn-block">Reset</a>
	            		</div>
	            	</div>
	            </div>
			</form>
			<div class="white-box">
				<b>Total Items:</b><p class="pull-right"><?php if($rows_info){echo $rows_info;}else{echo 0;} ?></p>
			</div>
			<?php if($this->session->flashdata('msg')): ?>
			<div class="alert alert-danger">
				<?php echo $this->session->flashdata('msg'); ?>
			</div>
		    <?php endif; ?>
		    <?php if($modify_info): ?>
			<form class="table-responsive" style="text-align: center; width: 1303px;" action="" method="">
				<table class="responsive" style="width: 1303px;">
			     	<tr style="background-color: #2cabe3;">
			     		<th style="padding: 10px;">Id:</th>
			     		<th style="padding: 10px;">Name:</th>
			     		<th style="padding: 10px;">Category:</th>
			     		<th style="padding: 10px;">Description:</th>
			     		<th style="padding: 10px;">Image:</th>
			     		<th style="padding: 10px;">Delete:</th>
			     		<th style="padding: 10px;">Edit:</th>
			     	</tr>
			        <?php foreach($modify_info as $m): ?>
			     	<tr class="box-shadow" style="text-align: justify;">
			     		<td style="padding: 10px;"><?php echo $id = $m['id']; ?></td>
			            <td style="padding: 10px;"><?php echo $m['name']; ?></td>
			            <?php $category = getName($m['category']); foreach($category as $c): ?>
			            <td style="padding: 10px;"><?php echo $c['name']; ?></td>
			            <?php endforeach; ?>
			            <td style="padding: 10px;"><?php echo $m['description']; ?></td>
			     		<td style="padding: 10px;"><img style="height: 120px; width: 140px;" src="<?php echo base_url().'uploads/'.$m['image']; ?>"></td>
			            <td style="padding: 10px;"><a href="<?php echo base_url("welcome/delete/$id"); ?>">Delete</a></td>
			            <td style="padding: 10px;"><a href="<?php echo base_url("welcome/edit/$id"); ?>">Edit</a></td>     		
			     	</tr>	
			        <?php endforeach; ?>
			        <tr>
			            <td colspan="7" align="center"><?php ?></td>
			        </tr>
			        <div class="clearfix"></div>
			    </table>
			</form>
			<?php endif; ?>
				<div class="page">
				<?php echo $this->pagination->create_links(); ?>
				</div>	
		</div>
		<div class="footer">
			
		</div>
	</body>
</html>			