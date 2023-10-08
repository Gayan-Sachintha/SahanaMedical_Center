<!doctype html>
<html lang="en">

    
<?php include 'includes/head.php'; ?>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script type="text/javascript">

    function downloadimage() {
        /*var container = document.getElementById("image-wrap");*/ /*specific element on page*/
        var container = document.getElementById("chartContainer"); /* full page */
        html2canvas(container, { allowTaint: true }).then(function (canvas) {

            var link = document.createElement("a");
            document.body.appendChild(link);
            link.download = "html_image.jpg";
            link.href = canvas.toDataURL();
            link.target = '_blank';
            link.click();
        });
    }

</script>
<style>
    #chartContainer {
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  padding: 10px;
  height: 500px;
}

<?php
// Assuming you have a database connection already established

// Query to fetch the count of appointments per day
$sql = "SELECT COUNT(*) AS count, appointment_Date
        FROM appointments
        GROUP BY appointment_Date";

$result = mysqli_query(db(), $sql);

// Create an array to hold the data points for the chart
$dataPoints = array();

// Iterate through the query results and format the data points
while ($row = mysqli_fetch_assoc($result)) {
    $count = intval($row['count']); // or $count = (int)$row['count'];
    $appointmentDate = $row['appointment_Date'];

    // Create a JavaScript date object for the appointment date
    $dateObj = DateTime::createFromFormat('Y-m-d', $appointmentDate);
    $dateLabel = $dateObj->format('M d');

    // Create a data point object and add it to the array
    $dataPoint = array(
        "label" => $dateLabel,
        "y" => $count
    );
    array_push($dataPoints, $dataPoint);
}

// Convert the dataPoints array to JSON format
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
        

            window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    title: {
                        text: "Appointments per Day"
                    },
                    axisX: {
                        interval: 1,
                        labelAngle: -45
                    },
                    axisY: {
                        title: "Appointments"
                    },
                    data: [{
                        type: "column",
                        dataPoints: <?php echo $dataPointsJson; ?>
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