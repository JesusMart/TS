<div class="col-xs-9">	

<div id="display_form">

	<h4><b><u>Software Property</u></b><br><br> <?php echo $software_property_data->name; ?></h4><br><br>

	<h4><b><u>Description</u></b><br><br>

	<?php echo $software_property_data->description; ?>
		
	</h4>

</div>

</div>

<div class="col-xs-3 pull-right">
<div class="list-group">
		
		<!--
		<h4>Actions</h4>
		-->

		<a class="list-group-item glyphicon glyphicon-pencil" href="<?php echo base_url(); ?>klf_admin/edit_software_property/<?php echo $software_property_data->id_software_property; ?>">     Edit</a>
		<a class="list-group-item glyphicon glyphicon-remove" href="<?php echo base_url(); ?>klf_admin/delete_software_property/<?php echo $software_property_data->id_software_property; ?>">     Delete</a> 


</div>
</div>