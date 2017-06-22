<div class="col-xs-9">	



<h1>Status: <?php echo $status_data->name; ?></h1>

<h3>Description</h3>

<p><?php echo $status_data->description; ?></p>


</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Actions</h4>

		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/edit_status/<?php echo $status_data->id_status; ?>">Edit Status</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/delete_status/<?php echo $status_data->id_status; ?>">Delete Status</a></li> 


</ul>
</div>