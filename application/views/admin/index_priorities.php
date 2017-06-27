<!--
<h1>Priorities</h1>
-->

<p class="bg-success">
	
<?php if($this->session->flashdata('priority_created')): ?>

<?php echo $this->session->flashdata('priority_created') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('priority_updated')): ?>

<?php echo $this->session->flashdata('priority_updated') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('priority_deleted')): ?>

<?php echo $this->session->flashdata('priority_deleted') ?>	

<?php endif; ?>	



</p>


<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>klf_admin/create_priority">Create Priority</a>

<div id="table-scrollable">
<table class="table table-hover">

	<thead>
		<tr>
			<th>
				Priorities				
			</th>			
			
			<!--
			<th>
				Ticket Description
				
			</th>
			-->
			
		</tr>
	</thead>
	<tbody>
		
	 
		
		<?php foreach($priorities as $priority): ?>
		

		<tr>	

			
		<?php echo "<td><a href='". base_url() ."klf_admin/display_priorities/". $priority->id_priority . "'>" . $priority->description . "</a></td>"; ?>	
		
		
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