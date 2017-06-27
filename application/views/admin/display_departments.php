<div class="col-xs-9 modal-top">	

<div id="display_form">

	<h4><b><u>Department</u></b><br><br> <?php echo $department_data->name; ?></h4><br><br>

	<h4><b><u>Description</u></b><br><br>

	<?php echo $department_data->description; ?>
	</h4>

</div>

</div>

<div class="col-xs-3 pull-right">

<div class="list-group">
		
		<!--
		<h4>Actions</h4>
		-->

		<a class="list-group-item glyphicon glyphicon-pencil" href="<?php echo base_url(); ?>klf_admin/edit_department/<?php echo $department_data->id_department; ?>">     Edit</a>
		<a class="list-group-item glyphicon glyphicon-remove" href="<?php echo base_url(); ?>klf_admin/delete_department/<?php echo $department_data->id_department; ?>">     Delete</a>


</div>

</div>