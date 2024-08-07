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
		<div class="text-center" style="font-size: 2rem; margin: 1rem 0rem;">Hi, <span class="text-primary" style="color: #800000; font-weight: bold;"><?php echo $_SESSION['member_name'];?></span></div>
			<li>
				<a href="home">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
					Dashboard
				</a>
			</li>
			<li class="active-nav">
				<a href="reserve_logs">
					<svg class="glyph stroked female user">
						<use xlink:href="#stroked-female-user"/>
					</svg>
					Reservation Status
				</a>
			</li>
			<li>
				<a href="room_reservation">
					<svg class="glyph stroked home">
						<use xlink:href="#stroked-home"/>
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
					<div class="col-lg-12">
						<h1 class="page-header">Reservation Status</h1>
					</div>
				</div><!--/.row-->

				<div class="row">
					<div class="panel panel-default">
						<table class="table table-bordered tbluser_reservation">
							<thead>
								<tr>
									<th>Reservation Date</th>
									<th>Items</th>
									<th>Room Assign</th>
									
									<th>Status</th>
									<th>Remarks</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
				

			</div>
		</div>
	</div>



<?php include 'footer.php'; ?>

