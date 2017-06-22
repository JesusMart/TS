<div class="col-xs-9">	



<h1>Software Property: <?php echo $software_property_data->name; ?></h1>

<h3>Description</h3>

<p><?php echo $software_property_data->description; ?></p>


</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Actions</h4>

		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/edit_software_property/<?php echo $software_property_data->id_software_property; ?>">Edit Software Property</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/delete_software_property/<?php echo $software_property_data->id_software_property; ?>">Delete Software Property</a></li> 


</ul>
</div>