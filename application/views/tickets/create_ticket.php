
<h2>Create Ticket</h2>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('klf_tickets/create', $attributes); ?>


<div class="form-group">
	
	<?php echo form_label('Ticket Title'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'title',
			'placeholder' => 'Enter Ticket Title'

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Ticket Description'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'description',
        	'rows'        => '3'
        	


		);

	?>

	<?php echo form_textarea($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Software Property'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'id_software_property',
			

		);


	?>

	
	<?php  
		$options = []; 
		
		//print_r($software_property);
	    
        
	    foreach($software_property as $soft_prop) {

	    	$options[$soft_prop->id_software_property] = $soft_prop->name;

		} 
		
	?>

	
	<?php echo form_dropdown('id_software_property', $options, set_value('id_software_property', 0),'class="form-control"'); ?>
	

</div>

<div class="form-group">
	
	<?php echo form_label('Type Service'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'id_type_service',
			

		);

	?>

	<?php  
		$options = []; 
		
		//print_r($software_property);
	    
        
	    foreach($type_service as $type) {

	    	$options[$type->id_type_service] = $type->name;

		} 
		
	?>	

	<!-- <?php //echo form_input($data); ?> -->
	<?php echo form_dropdown('id_type_service', $options, set_value('id_type_service', 0),'class="form-control"'); ?>	


</div>

<div class="form-group">
	
	<?php echo form_label('Category'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'id_category',
			

		);

	?>

	<?php  
		$options = []; 
        
	    foreach($category as $categ) {

	    	$options[$categ->id_category] = $categ->name;

		} 
		
	?>		

	<!-- <?php //echo form_input($data); ?> -->
	<?php echo form_dropdown('id_category', $options, set_value('id_category', 0),'class="form-control"'); ?>	

</div>

<div class="form-group">
	
	<?php echo form_label('Priority'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'id_priority',
			

		);

	?>

	<?php  
		$options = []; 
		
	    foreach($priority as $prior) {

	    	$options[$prior->id_priority] = $prior->name;

		} 
		
	?>			

	<!-- <?php //echo form_input($data); ?> -->
	<?php echo form_dropdown('id_priority', $options, set_value('id_type_service', 0),'class="form-control"'); ?>	

</div>

<div class="form-group">
	
	<?php echo form_label('Attachements'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'attachements',
			

		);

	?>

	<?php echo form_input($data); ?>

</div>



<div class="form-group">
	

	<?php

		$data = array(

			'class' => 'btn btn-primary',
			'name' => 'submit',
			'value' => 'Create'

		);

	?>

	<?php echo form_submit($data); ?>

</div>



<?php echo form_close(); ?>
