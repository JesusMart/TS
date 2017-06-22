<div class="col-xs-9">	



<h1>Category: <?php echo $category_data->name; ?></h1>

<h3>Description</h3>

<p><?php echo $category_data->description; ?></p>


</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Actions</h4>

	   <li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/edit_category/<?php echo $category_data->id_category; ?>">Edit Category</a></li> 
	   <li class="list-group-item"><a href="<?php echo base_url(); ?>klf_admin/delete_category/<?php echo $category_data->id_category; ?>">Delete category</a></li> 


</ul>
</div>