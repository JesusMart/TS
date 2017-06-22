<h1>Categories</h1>

<p class="bg-success">
	
<?php if($this->session->flashdata('category_created')): ?>

<?php echo $this->session->flashdata('category_created') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('category_updated')): ?>

<?php echo $this->session->flashdata('category_updated') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('category_deleted')): ?>

<?php echo $this->session->flashdata('category_deleted') ?>	

<?php endif; ?>	



</p>


<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>klf_admin/create_category">Create Category</a>


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
		
	 
		
		<?php foreach($categories as $category): ?>
		

		<tr>	

			
		<?php echo "<td><a href='". base_url() ."klf_admin/display_categories/". $category->id_category . "'>" . $category->description . "</a></td>"; ?>	
		
		
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