<div class="col-xs-9">	



<h1>Type Service: <?php echo $type_service_data->name; ?></h1>

<h3>Description</h3>

<p><?php echo $type_service_data->description; ?></p>


</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Actions</h4>

		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/edit_type_service/<?php echo $type_service_data->id_type_service; ?>">Edit Type Service</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/delete_type_service/<?php echo $type_service_data->id_type_service; ?>">Delete Type Service</a></li> 


</ul>
</div>