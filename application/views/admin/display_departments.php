<div class="col-xs-9">	



<h1>Department: <?php echo $department_data->name; ?></h1>

<h3>Description</h3>

<p><?php echo $department_data->description; ?></p>


</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Actions</h4>

		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/edit_department/<?php echo $department_data->id_department; ?>">Edit Department</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/delete_department/<?php echo $department_data->id_department; ?>">Delete Department</a></li> 


</ul>
</div>