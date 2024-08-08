<?php
date_default_timezone_set('Asia/Manila');
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
		<li>
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
					<a class="" href="reservation">
						<svg class="glyph stroked eye">
							<use xlink:href="#stroked-eye" />
						</svg>
						Reservations
					</a>
				</li>


				<li class="active-nav">
					<a class="" href="new">
						<svg class="glyph stroked plus sign">
							<use xlink:href="#stroked-plus-sign" />
						</svg>
						New
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
							<use xlink:href="#stroked-plus-sign" />
						</svg>
						Rooms
					</a>
				</li> -->
				<li>
					<a href="room_reservation">
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
		<?php if ($_SESSION['admin_type'] == 1) { ?>
			<li>
				<a href="items">
					<svg class="glyph stroked desktop">
						<use xlink:href="#stroked-desktop" />
					</svg>
					Items
				</a>
			</li>
			<li>
				<a href="members">
					<svg class="glyph stroked male user ">
						<use xlink:href="#stroked-male-user" />
					</svg>
					Borrowers
				</a>
			</li>
			<li>
				<a href="inventory">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper" />
					</svg>
					Inventory
				</a>
			</li>
			<li>
				<a href="report">
					<svg class="glyph stroked line-graph">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-line-graph" />
					</svg>
					Graph
				</a>
			</li>
			<li>
				<a href="user">
					<svg class="glyph stroked female user">
						<use xlink:href="#stroked-female-user" />
					</svg>
					Users
				</a>
			</li>
		<?php
		}
		($_SESSION['admin_type'] == 1) ? include ('include_history.php') : false;
		?>
	</ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">

	<div class="row" style="padding-top: 2rem !important;">
		<ol class="breadcrumb">
			<li><a href="dashboard" style="color: #800000 !important;"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Borrow</li>
		</ol>

		<div class="row">
			<br />
			<br />

			<div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
				<div class="panel panel-primary custom-panel">
					<div class="panel-heading">
						<i class="fa fa-plus-circle"></i>
						Borrow Item/s
					</div>
					<div class="panel-body">
						<form class="frm_borrow">
							<div class="form-group">
								<label class="">Select Borrower</label>
								<select class="form-control input-lg" name="borrow_membername" required="required">
									<option></option>
								</select>
							</div>
							<div class="form-group">
								<label class="">Select Items (maximum of 5 items)</label>
								<select class="form-control input-lg borrowitem" name="borrowitem[]" multiple="multiple"
									required="required">
									<option></option>
								</select>
								<input type="hidden" name="user_id" value="<?php echo $_SESSION['admin_id']; ?>">
							</div>
							<div class="form-group">
								<label>Select Room</label>
								<select class="form-control" name="reserve_room" required></select>
							</div>
							<div class="form-group">
								<label class="">Time Limit</label>
								<input name="expected_time_of_return" id="timeLimit" type="text" class="form-control"
									value="<?php echo date('Y-m-d h:i A'); ?>" />
							</div>
							<div class="form-group">
								<div class="pull-right">
									<button class="btn btn-primary" type="submit">
										Confirm Borrow
										<i class="fa fa-chevron-right"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



	<?php include 'footer.php'; ?>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#timeLimit").datetimepicker({
				minTime: '<?php echo date("H:i"); ?>',
				maxTime: '18:00',
				minDate: 0,
				maxDate: 0,
				format: 'Y-m-d h:i A',
				step: 15
			});
		});
	</script>