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
		      		<li><a href="<?php echo base_url("welcome/profile_manager"); ?>">Profile Manager</a></li>
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
		      		<li><a href="<?php echo base_url("welcome/logout"); ?>">Log Out</a></li>
		    	</ul>
		  	</div>
		</nav>
		<div class="container-fluid">
		    <form method="post" action="<?php echo base_url("welcome/search_items"); ?>">
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
	            				<option value="<?php echo $c['id']; ?>"
	            				<?php echo $search_result[0]['category']==$c['id'] ? "selected":"" ?>	
	            				>
	            				<?php echo $c['name']; ?>	
	            				</option>
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
			<?php  ?>
			<div class="white-box">
				<b>Total Items:</b><p class="pull-right"><?php if($rows_info){echo $rows_info;}else{echo 0;} ?></p>
			</div>
			<?php if($this->session->flashdata('msg')): ?>
			<div class="alert alert-danger">
				<?php echo $this->session->flashdata('msg'); ?>
			</div>
		    <?php endif; ?>
		    <?php if($search_result): ?>
			<form class="table-responsive" style="text-align: center; width: auto;" action="" method="">
				<table>
			     	<tr style="background-color: #2cabe3;">
			     		<th style="padding: 10px;">Id:</th>
			     		<th style="padding: 10px;">Name:</th>
			     		<th style="padding: 10px;">Category:</th>
			     		<th style="padding: 10px;">Description:</th>
			     		<th style="padding: 10px;">Image:</th>
			     		<th style="padding: 10px;">Delete:</th>
			     		<th style="padding: 10px;">Edit:</th>
			     	</tr>
			        
			        <?php foreach($search_result as $m): ?>
			     	<tr style="text-align: justify;">
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
	</body>
</html>