<div class="col-xs-9">	



<h1>Priority: <?php echo $priority_data->name; ?></h1>

<h3>Description</h3>

<p><?php echo $priority_data->description; ?></p>


</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Actions</h4>

		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/edit_priority/<?php echo $priority_data->id_priority; ?>">Edit Priority</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/delete_priority/<?php echo $priority_data->id_priority; ?>">Delete Priority</a></li> 


</ul>
</div>