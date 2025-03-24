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
					<a href="user" style="color: #800000 !important;">
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
						Attendance Graph
					</a>
				</li>
			</ul>
		</li>
		<?php if ($_SESSION['admin_type'] == 1) { ?>


			<li>
				<a href="inventory" style="color: white !important;" class="active-nav">
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
			<li class="active">Inventory</li>
		</ol>
		<div class="breadcrumb">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-pills">
						<li class="active"><a href="#new" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;New</a></li>
						<li><a href="#old" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Old</a></li>
						<li><a href="#lost" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Lost</a></li>
						<li><a href="#damaged" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Damaged</a></li>
						<!-- <li><a href="#pulledout" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Total Items</a></li> -->
						<li><a href="#transferred" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Transferred</a></li>
						<li><a href="#report2" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Borrowed</a></li>
					</ul>
				</div>
				<!-- <div class="col-md-2">
						<button class="btn btn-primary add_equipment ">
							<svg class="glyph stroked plus sign">
								<use xlink:href="#stroked-plus-sign"/>
							</svg> &nbsp;
							Add Equipment
						</button>
					</div> -->
			</div>
		</div>
	</div><!--/.row-->


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="new">
							<table class="table table_inventory_new">
								<thead>
									<tr>
										<th>Model</th>
										<th>Category</th>
										<th>Brand</th>
										<th>Quantity</th>
										<th>Quantity Left</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tab-pane fade" id="old">
							<table class="table table_inventory_old">
								<thead>
									<tr>
										<th>Model</th>
										<th>Category</th>
										<th>Brand</th>
										<th>Quantity</th>
										<th>Quantity Left</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tab-pane fade" id="lost">
							<table class="table table_inventory_lost">
								<thead>
									<tr>
										<th>Model</th>
										<th>Category</th>
										<th>Brand</th>
										<th>No. of items</th>
										<th>Remarks</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tab-pane fade" id="damaged">
							<table class="table table_inventory_damaged">
								<thead>
									<tr>
										<th>Model</th>
										<th>Category</th>
										<th>Brand</th>
										<th>No. of items</th>
										<th>Remarks</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tab-pane fade" id="pulledout">
							<!-- <table class="table table_inventory_all">
								<thead>
									<tr>
										<th>Category</th>
										<th>New</th>
										<th>(Old / Damage / Lost / Borrowed / Transferred)</th>
										<th>Total</th>
									</tr>
								</thead>
							</table> -->
						</div>

						<div class="tab-pane fade" id="transferred">
							<div class="row">
								<div class="col-sm-1 pull-right">
									<div class="form-group text-right">
										<button type="button" class="btn btn-primary"
											id="btnReloadTransferredList">Reload List</button>
									</div>
								</div>
								<div class="col-sm-3 pull-right">
									<div class="form-group">
										<select id="selectYearTransferred" class="form-control">
											<option value="">Show All</option>
											<?php
											$currentYear = date('Y');
											for ($i = $currentYear; $i >= ($currentYear - 15); $i--):
												?>
												<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
											<?php endfor; ?>
										</select>
									</div>
								</div>
								<div class="col-sm-3 pull-right">
									<div class="form-group">
										<select id="selectMonthTransferred" class="form-control">
											<option value="">Show All</option>
											<?php
											$monthArr = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
											for ($i = 0; $i < 12; $i++):
												$month = ($i + 1);
												?>
												<option value="<?php echo $month; ?>"><?php echo $monthArr[$i]; ?></option>
											<?php endfor; ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table class="table table_inventory_transfer">
										<thead>
											<tr>
												<th>Model</th>
												<th>Category</th>
												<th>Brand</th>
												<th>No. of items</th>
												<th>Room</th>
												<th>Person-in-charge</th>
												<th>User</th>
												<th>Date Transferred</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="report2">
							<div class="row">
								<div class="col-sm-1 pull-right">
									<div class="form-group text-right">
										<button type="button" class="btn btn-primary" id="btnReloadList">Reload
											List</button>
									</div>
								</div>
								<div class="col-sm-3 pull-right">
									<div class="form-group">
										<select id="selectYear" class="form-control">
											<option value="">Show All</option>
											<?php
											$currentYear = date('Y');
											for ($i = $currentYear; $i >= ($currentYear - 15); $i--):
												?>
												<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
											<?php endfor; ?>
										</select>
									</div>
								</div>
								<div class="col-sm-3 pull-right">
									<div class="form-group">
										<select id="selectMonth" class="form-control">
											<option value="">Show All</option>
											<?php
											$monthArr = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
											for ($i = 0; $i < 12; $i++):
												$month = ($i + 1);
												?>
												<option value="<?php echo $month; ?>"><?php echo $monthArr[$i]; ?></option>
											<?php endfor; ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table class="table tbl_return">
										<thead>
											<tr>
												<th>Borrower</th>
												<th>Items</th>
												<th>Borrowed Date</th>
												<th>Returned Date</th>

											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- panel -->
		</div><!-- panel -->
	</div><!-- row -->


</div>



<?php include 'footer.php'; ?>