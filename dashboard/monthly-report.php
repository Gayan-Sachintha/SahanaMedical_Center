<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>
<style>
    #chartContainer {
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  padding: 10px;
  height: 500px;
}

<?php
$sql = "SELECT COUNT(*) AS count, MONTH(appointment_Date) AS month
        FROM appointments
        GROUP BY MONTH(appointment_Date)";

$result = mysqli_query(db(), $sql);
$dataPoints = array();

while ($row = mysqli_fetch_assoc($result)) {
    $count = intval($row['count']);
    $month = $row['month'];
    $dateObj = DateTime::createFromFormat('!m', $month);
    $monthName = $dateObj->format('F');
    $dataPoint = array(
        "label" => $monthName,
        "y" => $count
    );
    array_push($dataPoints, $dataPoint);
}

$dataPointsJson = json_encode($dataPoints);
?>

</style>
    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
        <?php include 'includes/topbar.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
            

            

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                       

                        <div style="border-color:black; border-radius: 8px">
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Monthly Report of appointments</h4>
                                            <div id="chartContainer" class="chartContainer"></div>
                                        <!-- end table-responsive -->
                                    </div>
                                    <button id="exportChart">Download Chart</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include 'includes/footer.php'; ?>


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <?php include 'includes/js.php'; ?>

        <script>
        window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Summary Per Month"
            },
            axisX: {
                valueFormatString: "MMM"
            },
            axisY: {
                title: "Appointments"
            },
            data: [{
                type: "line",
                dataPoints: <?=$dataPointsJson; ?>
            }]
        });
        document.getElementById("exportChart").addEventListener("click",function(){
            chart.exportChart({format: "jpg"});
        }); 
        chart.render();
    }
    </script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        
    </body>


</html>