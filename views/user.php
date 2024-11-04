<?php
include 'header.php';
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 col-md-2 sidebar">
	<form role="search">
		<div class="form-group">
			<!-- <input type="text" class="form-control" placeholder="Search"> -->
		</div>
	</form>
	<ul class="nav menu">
		<img src="../assets/logo.png"
			style="width: 150px; height: 150px; position: relative; left: 50%; transform: translate(-50%);" />
		<div class="text-center" style="font-size: 2rem; margin: 1rem 0rem;">Hi, <span class="text-primary"
				style="color: #800000; font-weight: bold;"><?php echo $_SESSION['admin_name']; ?></span></div>
		<li class="">
			<a href="dashboard">
				<svg class="glyph stroked dashboard-dial">
					<use xlink:href="#stroked-dashboard-dial"></use>
				</svg>
				Dashboard
			</a>
		</li>
		<li class="parent">
			<a href="#sub-item-1" data-toggle="collapse">
				<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
						<use xlink:href="#stroked-chevron-down"></use>
					</svg></span> Item Reservation
			</a>
			<ul class="children collapse" id="sub-item-1">
				<li>
					<a class="" href="new">
						<svg class="glyph stroked plus sign">
							<use xlink:href="#stroked-plus-sign" />
						</svg>
						New
					</a>
				</li>
				<li>
					<a class="" href="reservation">
						<svg class="glyph stroked eye">
							<use xlink:href="#stroked-eye" />
						</svg>
						Reservations
					</a>
				</li>
				<li>
					<a href="items" class="">
						<svg class="glyph stroked desktop">
							<use xlink:href="#stroked-desktop" />
						</svg>
						Items
					</a>
				</li>
				<li>
					<a class="" href="borrow">
						<svg class="glyph stroked download">
							<use xlink:href="#stroked-download" />
						</svg>
						Borrowed Items
					</a>
				</li>
				<li>
					<a class="" href="return">
						<svg class="glyph stroked checkmark">
							<use xlink:href="#stroked-checkmark" />
						</svg>
						Returned Items
					</a>
				</li>
			</ul>
		</li>
		<li class="parent">
			<a href="#sub-item-2" data-toggle="collapse">
				<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down">
						<use xlink:href="#stroked-chevron-down"></use>
					</svg></span> Room Reservation
			</a>
			<ul class="children collapse" id="sub-item-2">
				<!-- <li>
						<a href="room">
							<svg class="glyph stroked plus sign">
								<use xlink:href="#stroked-plus-sign"/>
							</svg>
							Rooms
						</a>
					</li> -->
				<li>
					<a href="room_reservation" class="">
						<svg class="glyph stroked eye">
							<use xlink:href="#stroked-eye" />
						</svg>
						Reservations
					</a>
				</li>

				<li>
					<a href="room_requested">
						<svg class="glyph stroked checkmark">
							<use xlink:href="#stroked-checkmark" />
						</svg>
						Room Requested
					</a>
				</li>
			</ul>
		</li>
		<li class="parent">
			<a href="#sub-item-3" data-toggle="collapse">
				<span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down">
						<use xlink:href="#stroked-chevron-down"></use>
					</svg></span> Manager Users
			</a>
			<ul class="children collapse" id="sub-item-3">
				<li>
					<a href="user" style="color: white !important;" class="active-nav">
						<svg class="glyph stroked female user">
							<use xlink:href="#stroked-female-user" />
						</svg>
						Users
					</a>
				</li>
				<li>
					<a href="members" style="color: #800000 !important;">
						<svg class="glyph stroked male user ">
							<use xlink:href="#stroked-male-user" />
						</svg>
						Borrowers
					</a>
				</li>
			</ul>
		</li>
		<li class="parent">
			<a href="#sub-item-4" data-toggle="collapse">
				<span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron-down">
						<use xlink:href="#stroked-chevron-down"></use>
					</svg></span> Graphs
			</a>
			<ul class="children collapse" id="sub-item-4">
				<li>
					<a href="report" style="color: #800000 !important;">
						<svg class="glyph stroked line-graph">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-line-graph" />
						</svg>
						Items Graph
					</a>
				</li>
				<li>
					<a href="attendance-graph" style="color: #800000 !important;">
						<svg class="glyph stroked line-graph">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-line-graph" />
						</svg>
						Attadance Graph
					</a>
				</li>
			</ul>
		</li>
		<?php if ($_SESSION['admin_type'] == 1) { ?>


			<li>
				<a href="inventory">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper" />
					</svg>
					Inventory
				</a>
			</li>


			<?php
		}
		($_SESSION['admin_type'] == 1) ? include('include_history.php') : false;
		?>
		<!-- <li>
				<a href="setting">
					<svg class="glyph stroked gear">
						<use xlink:href="#stroked-gear"></use>
					</svg>
					Setting
				</a>
			</li> -->
	</ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">

	<div class="row" style="padding-top: 2rem !important;">
		<ol class="breadcrumb">
			<li><a href="dashboard" style="color: #800000 !important;"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Users</li>
		</ol>
		<div class="breadcrumb">
			<button class="btn btn-primary col-sm-offset-10 add_user">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign" />
				</svg>
				Add User
			</button>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table_user">
						<thead>
							<tr>
								<th>Name</th>
								<th>Type</th>
								<th>Username</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div><!-- panel -->
		</div><!-- panel -->

	</div><!-- row -->


</div>

<div class="right-sidebar user-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<form class="frmadd_users">
				<h4 class="alert bg-success">Add User</h4>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="u_fname" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="u_username" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="u_password" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>User Type</label>
					<select class="form-control" name="u_type" required="required">
						<option disabled selected>Please select user type</option>
						<option value="1">Administrator</option>
						<option value="2">Staff/ Sudent Assistant</option>
					</select>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<button class="btn btn-danger btn-block cancel_user" type="button">
								CANCEL
							</button>
						</div>
						<div class="col-md-6">
							<button class="btn btn-primary btn-block" type="submit">
								SAVE
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="right-sidebar userdiv">
	<div class="container-fluid">
		<div class="edit-userside"></div>
	</div>
</div>


<?php include 'footer.php'; ?>