<h1>Software Property</h1>

<p class="bg-success">
	
<?php if($this->session->flashdata('software_property_created')): ?>

<?php echo $this->session->flashdata('software_property_created') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('software_property_updated')): ?>

<?php echo $this->session->flashdata('software_property_updated') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('software_property_deleted')): ?>

<?php echo $this->session->flashdata('software_property_deleted') ?>	

<?php endif; ?>	



</p>


<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>klf_admin/create_software_property">Create Sofware Property</a>


<table class="table table-hover table-scrollable">

	<thead>
		<tr>
			<th>
				Title				
			</th>			
			
			<!--
			<th>
				Ticket Description
				
			</th>
			-->
			
		</tr>
	</thead>
	<tbody>
		
	 
		
		<?php foreach($software_properties as $software_property): ?>
		

		<tr>	

			
		<?php echo "<td><a href='". base_url() ."klf_admin/display_software_properties/". $software_property->id_software_property . "'>" . $software_property->description . "</a></td>"; ?>	
		
		
		<!--	
		<?php //echo "<td>" . $ticket->description . "</td>"; ?>	
		-->
		
		<!--	
		<td><a class="btn btn-danger" href="<?php echo base_url(); ?>klf_tickets/delete/<?php //echo $ticket->id_ticket; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
		-->

		</tr>

		
		<?php endforeach; ?>
		



	</tbody>
</table>