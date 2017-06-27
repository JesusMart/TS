<!--
<h1>Status</h1>
-->

<p class="bg-success">
	
<?php if($this->session->flashdata('status_created')): ?>

<?php echo $this->session->flashdata('status_created') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('status_updated')): ?>

<?php echo $this->session->flashdata('status_updated') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('status_deleted')): ?>

<?php echo $this->session->flashdata('status_deleted') ?>	

<?php endif; ?>	



</p>


<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>klf_admin/create_status">Create Status</a>

<div id="table-scrollable">
<table class="table table-hover">

	<thead>
		<tr>
			<th>
				Status				
			</th>			
			
			<!--
			<th>
				Ticket Description
				
			</th>
			-->
			
		</tr>
	</thead>
	<tbody>
		
	 
		
		<?php foreach($statuses as $status): ?>
		

		<tr>	

			
		<?php echo "<td><a href='". base_url() ."klf_admin/display_statuses/". $status->id_status . "'>" . $status->description . "</a></td>"; ?>	
		
		
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
</div>    