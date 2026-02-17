<?php
include ('include/header.php');
?>
<div class="container">
		<h2 class="text-danger" style="text-align: center;">contact us<h2>
			<div class="row border bg-light">
			<form id="contact">
				<h4 class="mt-3 success" id="submit" style="text-align:center;"></h4>

				<div class="col-md-6 offset-3">
					<div class="form-group mt-5">
						<label>full name</label>
						<input type="text" class="form-control" placeholder="Enter full Name" id="fname">
					</div>
					<div class="form-group mt-3">
						<label>Email Id</label>
						<input type="text" class="form-control" placeholder="Enter email id" id="email">
					</div>
					<div class="form-group mt-3">
						<label>Contact Number</label>
						<input type="text" class="form-control" placeholder="Enter contact" id="contact_num">
					</div>
					<div class="form-group mt-3">
						<label>message</label>
						<input type="text" class="form-control" placeholder="Enter message" id="message">
					</div>
					</div>

					<div class="form-group mt-3 mb-5">
						<button type="submit" class="btn btn-success w-100">Submit</button>
					</div>
					<?php 
				if($_SESSION['error'] !== '') { ?>
						<span style="color: red; text-align: center;"><?php echo $_SESSION['error']; ?></span>
					<?php
				}$_SESSION['error'] ='';
				?>

				<?php 
				if($_SESSION['success'] !== '') { ?>
						<span style="color: green; text-align: center;"><?php echo $_SESSION['success']; ?></span>
					<?php
				}$_SESSION['success'] ='';
				?>
				</div>
				</form>
			</div>
	</div>
<?php
include('include/footer.php');
?>