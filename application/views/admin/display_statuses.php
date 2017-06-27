<div class="col-xs-9">	

<div id="display_form">

	<h4><b><u>Status</u></b><br><br> <?php echo $status_data->name; ?></h4><br><br>

	<h4><b><u>Description</u></b><br><br>

	<?php echo $status_data->description; ?>
	</h4>





</div>

</div>

<div class="col-xs-3 pull-right">
<div class="list-group">
		
		<!--
		<h4>Actions</h4>
		-->

		<a class="list-group-item glyphicon glyphicon-pencil" href="<?php echo base_url(); ?>klf_admin/edit_status/<?php echo $status_data->id_status; ?>">     Edit</a>
		<a class="list-group-item glyphicon glyphicon-remove" href="<?php echo base_url(); ?>klf_admin/delete_status/<?php echo $status_data->id_status; ?>">     Delete</a>


</div>
</div>