<h1>History Display View</h1>

<table class="table table-bordered">

	<thead>
		<tr>
			<th>
				History Description
			</th>			
			<th>
				History Date Time
			</th>
			<th>
				History Id Status
			</th>			
		</tr>
	</thead>
	<tbody>

		
		
		

		<tr>	
			
		<td>
			<div class="history-description">
				<?php echo  $history->description;  ?>
			</div>	
			
			<div class="history-actions">
				<a href="<?php echo base_url(); ?>klf_history/edit/<?php echo $history->id_history; ?>">Edit</a>
				
				<a href="<?php echo base_url(); ?>klf_history/delete/<?php echo $history->id_history; ?>">Deleteee</a>		
			</div>		
		</td>
		<td><?php echo  $history->date_time;  ?></td>
		<td><?php echo  $history->id_status;  ?></td>


		</tr>



		

	</tbody>
</table>