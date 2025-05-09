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
				style="color: #800000; font-weight: bold;"><?php echo $_SESSION['member_name']; ?></span></div>
		<li class="active-nav">
			<a href="#">
				<svg class="glyph stroked dashboard-dial">
					<use xlink:href="#stroked-dashboard-dial"></use>
				</svg>
				Dashboard
			</a>
		</li>
		<li>
			<a href="reserve_logs">
				<svg class="glyph stroked female user">
					<use xlink:href="#stroked-female-user" />
				</svg>
				Item Reservation
			</a>
		</li>
		<li>
			<a href="room_reservation">
				<svg class="glyph stroked home">
					<use xlink:href="#stroked-home" />
				</svg>
				Room Reservation
			</a>
		</li>

	</ul>
</div><!--/.sidebar-->

<div class="row-fluid">
	<div class="col-md-12 main">
		<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3">


			<div class="row">
				<div class="col-lg-12" style="display: flex; justify-content: space-between;">
					<h1 class="page-header">Item Reservation</h1>
					<a href="request_room"
						style="margin-top: 4rem; height: 4rem; padding: 1rem 2rem; background: #800000; color: white; border-radius: 0.5rem;">Request
						Room</a>
				</div>

			</div><!--/.row-->

			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked email">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-email"></use>
						</svg> Make Reservation</div>
					<div class="panel-body">
						<form class="form-horizontal client_reservation" action="">
							<fieldset>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Items (maximum of 5 items)</label>
									<div class="col-md-9">
										<select class="form-control input-lg borrowitem" name="reserve_item[]"
											multiple="multiple" required="required" style="width: 100%">
											<option></option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Date </label>
									<div class="col-md-9">
										<input type="text" class="form-control datepicker" name="reserved_date"
											required="required">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Time</label>
									<div class="col-md-9">
										<input type="time" placeholder="" class="form-control" name="reserved_time"
											required="required">
										<input type="hidden" name="client_id"
											value="<?php echo $_SESSION['member_id']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Select Room</label>
									<div class="col-md-9">
										<select class="form-control" name="item_reserve_room" required></select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Time Limit</label>
									<div class="col-md-9">
										<input name="time_limit" id="timeLimit" type="text" class="form-control"
											value="" />
									</div>
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-primary btn-md pull-right">Reserve
											Item</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
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
			maxTime: '10:00',
			minDate: 0,
			format: 'Y-m-d h:i A',
			step: 15
		});
	});
</script>