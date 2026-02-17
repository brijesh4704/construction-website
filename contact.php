<?php 
include('include/header.php');

$sql = mysqli_query($conn, "SELECT * FROM tbl_contact_info ORDER BY id DESC");


?>
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Sr.No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Message</th>
			</tr>
		</thead>

		<tbody>
			<?php 
			$i = 1;

				while($data = mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $data['fname'];?></td>
				<td><?php echo $data['email'];?></td>
				<td><?php echo $data['contact'];?></td>
				<td><?php echo $data['message'];?></td>
			</tr>
		<?php $i++; } ?>
		</tbody>
	</table>
</div>

<?php 
include('include/footer.php');
?>