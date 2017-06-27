<div class="col-xs-9">	

<div id="display_form">

	<h4><b><u>Type Service</u></b><br><br> <?php echo $type_service_data->name; ?></h4><br><br>

	<h4><b><u>Description</u></b><br><br>

	<?php echo $type_service_data->description; ?>
	</h4>

</div>


</div>

<div class="col-xs-3 pull-right">
<div class="list-group">
		
		<!--
		<h4>Actions</h4>
		-->
		<!--
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/edit_type_service/<?php echo $type_service_data->id_type_service; ?>">Edit</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/delete_type_service/<?php echo $type_service_data->id_type_service; ?>">Delete</a></li> 
		-->

		<a class="list-group-item glyphicon glyphicon-pencil" href="<?php echo base_url(); ?>klf_admin/edit_type_service/<?php echo $type_service_data->id_type_service; ?>">     Edit</a> 
		<a class="list-group-item glyphicon glyphicon-remove" href="<?php echo base_url(); ?>klf_admin/delete_type_service/<?php echo $type_service_data->id_type_service; ?>">     Delete</a> 		


</div>
</div>