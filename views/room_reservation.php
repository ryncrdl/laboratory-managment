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
			<img src="../assets/logo.png" style="width: 150px; height: 150px; position: relative; left: 50%; transform: translate(-50%);"/>
			<div class="text-center" style="font-size: 2rem; margin: 1rem 0rem;">Hi, <span class="text-primary" style="color: #800000; font-weight: bold;"><?php echo $_SESSION['admin_name'];?></span></div>
			<li>
				<a href="dashboard" >
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
					Dashboard
				</a>
			</li>
			<li class="parent">
				<a href="#sub-item-1" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Item Reservation
				</a>
				<ul class="children collapse" id="sub-item-1">
					
					<li >
						<a class="" href="reservation">
							<svg class="glyph stroked eye">
								<use xlink:href="#stroked-eye"/>
							</svg>
							Reservations
						</a>
					</li>


					<li>
						<a class="" href="new">
							<svg class="glyph stroked plus sign">
								<use xlink:href="#stroked-plus-sign"/>
							</svg>
							New
						</a>
					</li>
					<li>
						<a class="" href="borrow">
							<svg class="glyph stroked download">
								<use xlink:href="#stroked-download"/>
							</svg>
							Borrowed Items
						</a>
					</li>
					<li>
						<a class="" href="return">
							<svg class="glyph stroked checkmark">
								<use xlink:href="#stroked-checkmark"/>
							</svg>
							Returned Items
						</a>
					</li>
				</ul>
			</li>
			<li class="parent">
				<a href="#sub-item-2" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Room Reservation
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
					<li  class="active-nav">
						<a href="room_reservation">
							<svg class="glyph stroked eye">
								<use xlink:href="#stroked-eye"/>
							</svg>
							Reservations
						</a>
					</li>
				
					<li>
						<a href="room_requested">
							<svg class="glyph stroked checkmark">
								<use xlink:href="#stroked-checkmark"/>
							</svg>
							Room Requested
						</a>
					</li>
				</ul>
			</li>
			<?php if($_SESSION['admin_type'] == 1){ ?>
			<li>
				<a href="items">
					<svg class="glyph stroked desktop">
						<use xlink:href="#stroked-desktop"/>
					</svg>
					Items
				</a>
			</li>
			<li>
				<a href="members">
					<svg class="glyph stroked male user ">
						<use xlink:href="#stroked-male-user"/>
					</svg>
					Borrowers
				</a>
			</li>
			<li>
				<a href="inventory">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper"/>
					</svg>
					Inventory
				</a>
			</li>
			<li>
				<a href="report">
					<svg class="glyph stroked line-graph">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-line-graph"/>
					</svg>
					Graph
				</a>
			</li>
			<li>
				<a href="user">
					<svg class="glyph stroked female user">
						<use xlink:href="#stroked-female-user"/>
					</svg>
					Users
				</a>
			</li>
			<?php 
				}
				($_SESSION['admin_type'] == 1) ? include('include_history.php') : false;
			 ?>
		</ul>
	</div><!--/.sidebar-->


	<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main" >
		
		<div class="row" style="padding-top: 2rem !important;">
			<ol class="breadcrumb">
				<li><a href="dashboard" style="color: #800000 !important;"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Reservation</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-pills">
					<li class="active"><a href="#pending" data-toggle="tab"><i class="fa fa-list"></i>&nbsp;&nbsp;Pending Reservation</a></li>
					<li><a href="#reserved" data-toggle="tab"><i class="fa fa-question"></i>&nbsp;&nbsp;Accepted Reservation</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="tab-content">

							<div class="tab-pane fade in active" id="pending">
								<table class="table table-bordered room_tbl_pendingres">
									<thead>
										<tr>
											<th>Request By</th>
											<th>Request Date & Time</th>
											<th>Requested Date & Time</th>
											<th>Requested Rooms</th>
											<th>Action</th>
										</tr>
									</thead>
								</table>
							</div>

							<div class="tab-pane" id="reserved">
								<table class="table table-bordered room_tbl_reserved">
									<thead>
										<tr>
											<th>Request By</th>
											<th>Request Date & Time</th>
											<th>Requested Date & Time</th>
											<th>Requested Rooms</th>
											<th>Action</th>
										</tr>
									</thead>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form class="frm_room_cancelreservation">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Cancel Reservation</h4>
					</div>
					<div class="modal-body">
					<div class="form-group">
						<label>Cancellation Remarks</label>
						<textarea name="remarks_cancel" class="form-control" required style="height: 200px"></textarea>
						<input type="hidden" name="codereserve">
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>


<?php include 'footer.php'; ?>