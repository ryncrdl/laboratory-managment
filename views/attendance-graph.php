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
                    <a href="attendance-graph" style="color: white !important;" class="active-nav">
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
            <li><a href="dashboard" style="color: #800000 !important;">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Attendance Bar Graph</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading" style=" margin-top: 2rem;">
                    <h4 class="panel-title">Attendance Bar Chart</h4>
                </div>
                <div class="row" style="margin-top: 1rem;">
                    <div class="col-md-4">
                        <label for="filterYear">Year:</label>
                        <select id="filterYear" class="form-control">
                            <option value="">All Years</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="filterMonth">Month:</label>
                        <select id="filterMonth" class="form-control">
                            <option value="">All Months</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="filterDepartment">Department:</label>
                        <select id="filterDepartment" class="form-control">
                            <option value="">All Departments</option>
                        </select>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="col-md-12" id="attendanceChart" style="height: 500px;"></div>
                </div>
            </div>
            <div class="panel-body" style="margin: 5rem 0rem;">
                <div class="table-responsive" style="margin-top: 20px;">
                    <table class="table table-bordered table-striped" id="attendanceTable">
                        <thead>
                            <tr>
                                <th style="padding: 1rem;">Department</th>
                                <th style="padding: 1rem;">Attendance Count</th>
                                <th style="padding: 1rem;">Year</th>
                                <th style="padding: 1rem;">Month</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>


<?php include 'footer.php'; ?>

<script type="text/javascript">
    $.ajax({
        type: "POST",
        url: "../class/display/display",
        data: {
            key: "attendance_data"
        }
    })
        .done(function (data) {
            console.log("Raw data from server:", data);

            try {
                provider = JSON.parse(data);
                console.log("Parsed data for chart:", provider);

                // Populate filters based on the data
                populateFilters(provider);

                // Initial render of the chart
                renderChart(provider);

            } catch (error) {
                console.error("Error parsing JSON:", error);
                return;
            }
        });

    function renderChart(data) {
        chart = AmCharts.makeChart("attendanceChart", {
            "type": "serial",
            "theme": "light",
            "categoryField": "m_department",
            "rotate": false,
            "startDuration": 1,
            "categoryAxis": {
                "gridPosition": "start",
                "position": "bottom",
                "labelRotation": 0
            },
            "valueAxes": [{
                "axisAlpha": 1,
                "position": "left",
                "title": "Attendance",
                "minimum": 0,
                "maximum": data.length,
                "strictMinMax": true
            }],
            "graphs": [{
                "type": "column",
                "title": "Attendance",
                "valueField": "value",
                "fillAlphas": 0.8,
                "balloonText": "[[title]]: [[value]] in [[month]]/[[day]]/[[year]]"
            }],
            "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "export": {
                "enabled": true
            },
            "dataProvider": data
        });
    }


    function populateFilters(data) {
        const years = new Set();
        const departments = new Set();

        data.forEach(item => {
            years.add(item.year);
            departments.add(item.m_department);
        });

        years.forEach(year => {
            $('#filterYear').append(new Option(year, year));
        });
        const uniqueDepartments = [...departments]; // Convert Set to Array
        console.log(departments)
        uniqueDepartments.forEach(department => {
            $('#filterDepartment').append(new Option(department, department));
        });
    }


    $('#filterYear, #filterMonth, #filterDepartment').on('change', function () {
        filterAndRenderChart();
    });

    function filterAndRenderChart() {
        const selectedYear = $('#filterYear').val();
        const selectedMonth = $('#filterMonth').val();
        const selectedDepartment = $('#filterDepartment').val();

        // Filter the data based on selected filters
        const filteredData = provider.filter(item => {
            return (!selectedYear || item.year === selectedYear) &&
                (!selectedMonth || item.month === selectedMonth) &&
                (!selectedDepartment || item.m_department === selectedDepartment);
        });

        // Update the chart data
        chart.dataProvider = filteredData;
        chart.validateData(); // Refresh the chart
    }


    function populateTable(data) {
        const tableBody = $('#attendanceTable tbody');
        tableBody.empty(); // Clear existing rows

        data.forEach(item => {
            const row = `<tr>
            <td>${item.m_department}</td>
            <td>${item.value}</td>
            <td>${item.year}</td>
            <td>${identifyMonth(item.month)}</td>
        </tr>`;
            tableBody.append(row);
        });
    }

    // Call populateTable function after parsing the JSON data
    $.ajax({
        type: "POST",
        url: "../class/display/display",
        data: {
            key: "attendance_data"
        }
    })
        .done(function (data) {
            console.log("Raw data from server:", data);

            try {
                provider = JSON.parse(data);
                console.log("Parsed data for chart:", provider);

                // Populate filters based on the data
                // populateFilters(provider);

                // Initial render of the chart
                renderChart(provider);

                // Populate the table with the same data
                populateTable(provider);

            } catch (error) {
                console.error("Error parsing JSON:", error);
                return;
            }
        });

    function identifyMonth(monthNumber) {
        const months = [
            '', 'January', 'February', 'March', 'April', 'May',
            'June', 'July', 'August', 'September', 'October',
            'November', 'December'
        ];
        return months[parseInt(monthNumber)];
    }


</script>