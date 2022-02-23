<script src="jquery-1.9.1.js"></script>
<script src="Chart.min.js"></script>

<?php
$con = mysqli_connect("localhost","root","","onlinestore");
if(!$con) {
    echo "Disconnected!" . mysqli_error();
} else {
    $sql = "SELECT * FROM product_table";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) {
        $product[] = $row['product'];
        $sales[] = $row['sales'];
    }
}
?>

<canvas id = "chartjs_bar"></canvas>
<script type = "text/javascript">
    var ctx = document.getElementById("chartjs_bar").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:<?php echo json_encode($product);?>,
            datasets: [{
                backgroundColor: [
                    "#5969ff",
                    "#ff407b",
                    "#25d5f2",
                    "#ffc750",
                    "#2ec551",
                    "#7040fa",
                    "#ff004e",
                ],
                data:<?php echo json_encode($sales);?>,
            }]
        },
        options: {
            legend: {
                display: true,
                position: 'bottom',

                labels: {
                    fontColor: '#71748d',
                    fontFamily: 'Circular Std Book',
                    fontSize: 14,
                }
            }
        }
    });
</script>