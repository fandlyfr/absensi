<?php include 'header.php'; ?>
	<div class="wrapper">
    	<div class="main my-5">
			<h1 class="text-dark slideInDown animated">Kelola Data Pengurus</h1>
			<h2 class="text-dark slideInDown animated">Tambah atau Ubah Data</h2>
			<div class="form-style-5 slideInDown animated">
				<div class="alert">
					<label id="alert"></label>
				</div>
				<form>
					<fieldset>
						<legend><span class="number">1</span> User Fingerprint ID:</legend>
						<label>Enter Fingerprint ID between 1 & 127:</label>
						<input type="number" name="fingerid" id="fingerid" placeholder="User Fingerprint ID...">
						<button type="button" name="fingerid_add" class="fingerid_add">Add Fingerprint ID</button>
					</fieldset>
					<fieldset>
						<legend><span class="number">2</span> User Info</legend>
						<input type="text" name="name" id="name" placeholder="User Name...">
						<input type="text" name="number" id="number" placeholder="Position...">
						<input type="email" name="email" id="email" placeholder="User Email...">
					</fieldset>
					<fieldset>
						<legend><span class="number">3</span> Additional Info</legend>
						<label>
							Time In:
							<input type="time" name="timein" id="timein">
							<input type="radio" name="gender" class="gender" value="Female">Female
							<input type="radio" name="gender" class="gender" value="Male" checked="checked">Male
						</label>
					</fieldset>
					<button type="button" name="user_add" class="user_add">Add User</button>
					<button type="button" name="user_upd" class="user_upd">Update User</button>
					<button type="button" name="user_rmo" class="user_rmo">Remove User</button>
				</form>
			</div>

			<div class="section">
				<!--User table-->
				<div class="tbl-header slideInRight animated">
					<table cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th>Finger .ID</th>
								<th>Name</th>
								<th>Gender</th>
								<th>Position</th>
								<th>Date</th>
								<th>Time in</th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="tbl-content slideInRight animated">
					<table cellpadding="0" cellspacing="0" border="0">
						<div id="manage_users"></div>
				</div>
			</div>

		</div>
	</div>
<?php include 'footer.php'; ?>