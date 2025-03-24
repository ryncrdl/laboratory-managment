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
          <a href="report" style="color: white !important;" class="active-nav">
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
      <li class="active">Graph</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <br />
    <br />
    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4 class="panel-title">Borrowed Items</h4>
        </div>
        <div class="panel-body">
          <div class="col-md-12" id="chartdiv" style="height: 500px;"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4 class="panel-title">Returned Items</h4>
        </div>
        <div class="panel-body">
          <div class="col-md-12" id="returndiv" style="height: 500px;"></div>
        </div>
      </div>
    </div>



    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4 class="panel-title">Frequency of Use</h4>
        </div>
        <div class="panel-body">
          <div class="col-md-12" id="frequency" style="height: 500px;"></div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4 class="panel-title">Items Inventory</h4>
        </div>
        <div class="panel-body">
          <div class="col-md-12" id="inventory" style="height: 500px;"></div>
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
      key: "chart_borrow"
    }
  })
    .done(function (data) {
      console.log(data);
      var provider = JSON.parse(data);
      var chart = AmCharts.makeChart("chartdiv", {
        "type": "serial",
        "theme": "light",
        "marginRight": 40,
        "marginLeft": 40,
        "autoMarginOffset": 20,
        "mouseWheelZoomEnabled": true,
        "dataDateFormat": "YYYY-MM-DD",
        "valueAxes": [{
          "id": "v1",
          "axisAlpha": 0,
          "position": "left",
          "ignoreAxisWidth": true
        }],
        "balloon": {
          "borderThickness": 1,
          "shadowAlpha": 0
        },
        "graphs": [{
          "id": "g1",
          "balloon": {
            "drop": true,
            "adjustBorderColor": false,
            "color": "#ffffff"
          },
          "bullet": "round",
          "bulletBorderAlpha": 1,
          "bulletColor": "#FFFFFF",
          "bulletSize": 5,
          "hideBulletsCount": 50,
          "lineThickness": 2,
          "title": "red line",
          "useLineColorForBulletBorder": true,
          "valueField": "value",
          "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
        }],
        "chartScrollbar": {
          "graph": "g1",
          "oppositeAxis": false,
          "offset": 30,
          "scrollbarHeight": 80,
          "backgroundAlpha": 0,
          "selectedBackgroundAlpha": 0.1,
          "selectedBackgroundColor": "#888888",
          "graphFillAlpha": 0,
          "graphLineAlpha": 0.5,
          "selectedGraphFillAlpha": 0,
          "selectedGraphLineAlpha": 1,
          "autoGridCount": true,
          "color": "#AAAAAA"
        },
        "chartCursor": {
          "pan": true,
          "valueLineEnabled": true,
          "valueLineBalloonEnabled": true,
          "cursorAlpha": 1,
          "cursorColor": "#258cbb",
          "limitToGraph": "g1",
          "valueLineAlpha": 0.2,
          "valueZoomable": true
        },
        "valueScrollbar": {
          "oppositeAxis": false,
          "offset": 50,
          "scrollbarHeight": 10
        },
        "categoryField": "date",
        "categoryAxis": {
          "parseDates": true,
          "dashLength": 1,
          "minorGridEnabled": true
        },
        "export": {
          "enabled": true
        },
        "dataProvider": provider
      });

      chart.addListener("rendered", zoomChart);

      zoomChart();

      function zoomChart() {
        chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
      }
    });

</script>

<script type="text/javascript">
  $.ajax({
    type: "POST",
    url: "../class/display/display",
    data: {
      key: "chart_return"
    }
  })
    .done(function (data) {
      console.log(data);
      var provider = JSON.parse(data);
      var chart = AmCharts.makeChart("returndiv", {
        "type": "serial",
        "theme": "light",
        "marginRight": 40,
        "marginLeft": 40,
        "autoMarginOffset": 20,
        "mouseWheelZoomEnabled": true,
        "dataDateFormat": "YYYY-MM-DD",
        "valueAxes": [{
          "id": "v1",
          "axisAlpha": 0,
          "position": "left",
          "ignoreAxisWidth": true
        }],
        "balloon": {
          "borderThickness": 1,
          "shadowAlpha": 0
        },
        "graphs": [{
          "id": "g1",
          "balloon": {
            "drop": true,
            "adjustBorderColor": false,
            "color": "#ffffff"
          },
          "bullet": "round",
          "bulletBorderAlpha": 1,
          "bulletColor": "#FFFFFF",
          "bulletSize": 5,
          "hideBulletsCount": 50,
          "lineThickness": 2,
          "title": "red line",
          "useLineColorForBulletBorder": true,
          "valueField": "value",
          "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
        }],
        "chartScrollbar": {
          "graph": "g1",
          "oppositeAxis": false,
          "offset": 30,
          "scrollbarHeight": 80,
          "backgroundAlpha": 0,
          "selectedBackgroundAlpha": 0.1,
          "selectedBackgroundColor": "#888888",
          "graphFillAlpha": 0,
          "graphLineAlpha": 0.5,
          "selectedGraphFillAlpha": 0,
          "selectedGraphLineAlpha": 1,
          "autoGridCount": true,
          "color": "#AAAAAA"
        },
        "chartCursor": {
          "pan": true,
          "valueLineEnabled": true,
          "valueLineBalloonEnabled": true,
          "cursorAlpha": 1,
          "cursorColor": "#258cbb",
          "limitToGraph": "g1",
          "valueLineAlpha": 0.2,
          "valueZoomable": true
        },
        "valueScrollbar": {
          "oppositeAxis": false,
          "offset": 50,
          "scrollbarHeight": 10
        },
        "categoryField": "date",
        "categoryAxis": {
          "parseDates": true,
          "dashLength": 1,
          "minorGridEnabled": true
        },
        "export": {
          "enabled": true
        },
        "dataProvider": provider
      });

      chart.addListener("rendered", zoomChart);

      zoomChart();

      function zoomChart() {
        chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
      }
    });

</script>
<!-- Chart code -->
<script>

  $.ajax({
    type: "POST",
    url: "../class/display/display",
    data: {
      key: "chart_inventory"
    }
  })
    .done(function (data) {
      console.log(data);
      var provider = JSON.parse(data);
      var chart = AmCharts.makeChart("inventory", {
        "type": "pie",
        "startDuration": 0,
        "theme": "light",
        "addClassNames": true,
        "legend": {
          "position": "right",
          "marginRight": 100,
          "autoMargins": false
        },
        "innerRadius": "30%",
        "defs": {
          "filter": [{
            "id": "shadow",
            "width": "200%",
            "height": "200%",
            "feOffset": {
              "result": "offOut",
              "in": "SourceAlpha",
              "dx": 0,
              "dy": 0
            },
            "feGaussianBlur": {
              "result": "blurOut",
              "in": "offOut",
              "stdDeviation": 5
            },
            "feBlend": {
              "in": "SourceGraphic",
              "in2": "blurOut",
              "mode": "normal"
            }
          }]
        },
        "dataProvider": provider,
        "valueField": "litres",
        "titleField": "country",
        "export": {
          "enabled": true
        }
      });

      chart.addListener("init", handleInit);

      chart.addListener("rollOverSlice", function (e) {
        handleRollOver(e);
      });

      function handleInit() {
        chart.legend.addListener("rollOverItem", handleRollOver);
      }

      // function handleRollOver(e){
      //   var wedge = e.dataItem.wedge.node;
      //   wedge.parentNode.appendChild(wedge);
      // }
    });

</script>

<script>

  $.ajax({
    type: "POST",
    url: "../class/display/display",
    data: {
      key: "chart_frequency"
    }
  })
    .done(function (data) {
      console.log(data);
      var provider = JSON.parse(data);
      var chart = AmCharts.makeChart("frequency", {
        "type": "pie",
        "startDuration": 0,
        "theme": "light",
        "addClassNames": true,
        "legend": {
          "position": "right",
          "marginRight": 100,
          "autoMargins": false
        },
        "innerRadius": "30%",
        "defs": {
          "filter": [{
            "id": "shadow",
            "width": "200%",
            "height": "200%",
            "feOffset": {
              "result": "offOut",
              "in": "SourceAlpha",
              "dx": 0,
              "dy": 0
            },
            "feGaussianBlur": {
              "result": "blurOut",
              "in": "offOut",
              "stdDeviation": 5
            },
            "feBlend": {
              "in": "SourceGraphic",
              "in2": "blurOut",
              "mode": "normal"
            }
          }]
        },
        "dataProvider": provider,
        "valueField": "litres",
        "titleField": "country",
        "export": {
          "enabled": true
        }
      });

      chart.addListener("init", handleInit);

      chart.addListener("rollOverSlice", function (e) {
        handleRollOver(e);
      });

      function handleInit() {
        chart.legend.addListener("rollOverItem", handleRollOver);
      }

      // function handleRollOver(e){
      //   var wedge = e.dataItem.wedge.node;
      //   wedge.parentNode.appendChild(wedge);
      // }
    });

</script>