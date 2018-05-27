<?php
	$CI = & get_instance();
?>
<div class="list-view-section">
	<?php
if (! empty($students)) {
    ?>
	<table>
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th	>
				<th>Father's Name</th>
				<th>Mothers Name</th>
				<th>D.O.B</th>
				<th>Class</th>
				<th>Courses</th>
				<th>Batch</th>
				<th>Time</th>
				<th>Contact No.</th>
				<th>Email</th>
				<th>Fee Per Month</th>
				<th>Fee Per Year</th>

			</tr>

		</thead>
		<tbody>
	<?php
    foreach ($students as $key => $value) {
    	?>

			<tr>
				<td><?php echo ucfirst($value->FirstName); ?></td>
				<td><?php echo ucfirst($value->LastName); ?></td>
				<td><?php echo ucfirst($value->FathersName); ?></td>
				<td><?php echo ucfirst($value->MothersName); ?></td>
				<td><?php echo Date('Y-m-d',$value->dob); ?></td>
				<td><?php echo $value->class; ?></td>
				<td><?php echo $value->courses; ?></td>
				<td><?php echo $value->batch; ?></td>
				<td><?php echo $value->time; ?></td>
				<td><?php echo $value->MobileNumber; ?></td>
				<td><?php echo $value->email; ?></td>
				<td><?php echo $value->FeePerMonth; ?></td>
				<td><?php echo $value->FeePerYear; ?></td>
			</tr>	

	<?php } ?>
					
		</tbody>
	</table>
	<?php	}else{ ?>
		<p>No Record Found!</p>
	<?php } ?>
	
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".delete-order").on('click',function(e){
			var id = $(this).attr("data-id");
			if(confirm('Are you sure?')){
				$.ajax({
					type: "POST",
					url:  "order/delete",
					data: {'order_id':id},
					success: function(data){
						window.location.reload();
					}
				});
			}
			
		});
	});
</script>