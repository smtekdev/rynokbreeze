<!DOCTYPE html>
<html>
<head>
    <title>Rynokbay</title>

</head>
   
<body>
<div id="container"></div>
</body>
  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var orders =  <?php echo json_encode($orders) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'New Orders Growth, 2023'
        },
        subtitle: {
            text: 'Source: Rynokbay'
        },
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of New Orders'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true,
                color: '#B43434'             
            }
        },
        series: [{
            name: 'New Orders',
            data: orders
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>