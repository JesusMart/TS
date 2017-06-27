<div class="col-xs-9">	


<div id="display_form">
	<h4><b><u>Category</u></b><br><br> <?php echo $category_data->name; ?></h4> <br><br>

	<h4><b><u>Description</u></b><br><br>

	<?php echo $category_data->description; ?>
	</h4>

</div>

</div>

<div class="col-xs-3 pull-right">
<div class="list-group actions" >
		
		<!--
		<h4>Actions</h4>
		-->

	   <a class="list-group-item glyphicon glyphicon-pencil" href="<?php echo base_url(); ?>klf_admin/edit_category/<?php echo $category_data->id_category; ?>">     Edit</a>
	   <a class="list-group-item glyphicon glyphicon-remove" href="<?php echo base_url(); ?>klf_admin/delete_category/<?php echo $category_data->id_category; ?>">     Delete</a>


</div>
</div>