<!-- oliver -->
<?php include("header.php"); ?>
	<body>
		<div class="container-fluid">
			<div class="row">
				<?php include("sidebar.php"); ?>
				<div class="col-md-10 system-wrapper">
					<nav class="navbar navbar-light sticky-top system-header">
						<p class="navbar-brand">
							Account Settings
						</p>
						<span class="navbar-text">
							You are logged in as, <?=$this->session->userdata("first_name") ." ". $this->session->userdata("last_name");?>
						</span>
					</nav>
					<input type="hidden" class="form-control" id="sessIdTxt" value="<?=$this->session->userdata('id');?>">
					<div class="container">
						<?php
							if($this->session->userdata("usertype") == 1 || $this->session->userdata("usertype") == 2) { ?>
								<div class="card settings-card">
									<div class="card-body">
										<h4 class="card-title settings-card-title">Create Account</h4>
										<form action="POST" id="createEditAccForm">
											<div class="alert" id="createEditAccAlert" role="alert" style="display:none;"></div>
											<div class="row" style="margin-bottom:0.625em;">
												<input type="hidden" class="form-control" id="idTxt">
												<div class="col-md-3">
													<label for="firstNameTxt">First Name</label>
													<input type="text" class="form-control" id="firstNameTxt" placeholder="Enter your first name">
												</div>
												<div class="col-md-3">
													<label for="lastNameTxt">Last Name</label>
													<input type="text" class="form-control" id="lastNameTxt" placeholder="Enter your last name">
												</div>
												<div class="col-md-3">
													<label for="usernameTxt">Username</label>
													<input type="text" class="form-control" id="usernameTxt" placeholder="Enter your username">
												</div>
											</div>
											<div class="row">
												<div class="col-md-3">
													<label for="passwordTxt">Password</label>
													<input type="password" class="form-control" id="passwordTxt" placeholder="Enter your password">
													<label class="pass-label-txt" for="passwordTxt">Your password must be atleast 8 characters in length.</label>
												</div>
												<div class="col-md-3">
													<label for="accTypeSelect">Account Type</label>
													<select class="form-control" id="accTypeSelect"></select>
												</div>
											</div>
											<div class="float-right">
												<button type="submit" class="btn btn-warning" id="createAccResetBtn">Reset</button>
												<button type="submit" class="btn btn-success" id="createAccSaveBtn">Save</button>
											</div>
										</form>
									</div>
								</div>
								<div class="card settings-card">
									<div class="card-body">
										<h4 class="card-title settings-card-title">Accounts List</h4>
										<div class="alert" id="activateDeactAccAlert" role="alert" style="display:none;"></div>
										<div id="accListDiv">
											<table class="table table-striped table-responsive table-bordered" id="accListTable">
												<thead>
													<tr>
														<th>First Name</th>
														<th>Last Name</th>
														<th>Username</th>
														<th>User Type</th>
														<th>Account Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center" colspan="6">Loading... <span class="fa fa-spin fa-spinner"></span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
						<?php } else { ?>
								<div class="card settings-card">
									<div class="card-body">
										<h1 style="text-align:center;">Coming soon.</h1>
									</div>
								</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php include("footer.php"); ?>
