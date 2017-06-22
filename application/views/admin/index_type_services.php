<h1>Type Services</h1>

<p class="bg-success">
	
<?php if($this->session->flashdata('type_service_created')): ?>

<?php echo $this->session->flashdata('type_service_created') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('type_service_updated')): ?>

<?php echo $this->session->flashdata('type_service_updated') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('type_service_deleted')): ?>

<?php echo $this->session->flashdata('type_service_deleted') ?>	

<?php endif; ?>	



</p>


<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>klf_admin/create_type_service">Create Type Service</a>


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
		
	 
		
		<?php foreach($type_services as $type_service): ?>
		

		<tr>	

			
		<?php echo "<td><a href='". base_url() ."klf_admin/display_type_services/". $type_service->id_type_service . "'>" . $type_service->description . "</a></td>"; ?>	
		
		
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