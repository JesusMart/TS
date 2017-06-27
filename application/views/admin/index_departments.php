<!--
<h1>Departments</h1>
-->

<p class="bg-success">
	
<?php if($this->session->flashdata('department_created')): ?>

<?php echo $this->session->flashdata('department_created') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('department_updated')): ?>

<?php echo $this->session->flashdata('department_updated') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('department_deleted')): ?>

<?php echo $this->session->flashdata('department_deleted') ?>	

<?php endif; ?>	



</p>


<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>klf_admin/create_department">Create Department</a>

<div id="table-scrollable">
<table class="table table-hover">

	<thead>
		<tr>
			<th>
				Departments				
			</th>			
			
			<!--
			<th>
				Ticket Description
				
			</th>
			-->
			
		</tr>
	</thead>
	<tbody>
		
	 
		
		<?php foreach($departments as $department): ?>
		

		<tr>	

			
		<?php echo "<td><a href='". base_url() ."klf_admin/display_departments/". $department->id_department . "'>" . $department->description . "</a></td>"; ?>	
		
		
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