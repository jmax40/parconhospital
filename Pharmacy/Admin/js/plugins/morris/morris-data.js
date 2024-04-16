// Morris.js Charts sample data for SB Admin template



$(function() {

    // Area Chart
     $.ajax({
        url: 'chart/area.php'
,
        dataType: 'json',
        success: function (data) {
            // Extract 'month' and 'cost' values from the retrieved data
            var xValues = data.map(function (item) {
                return item.month;
            });
    
            var yValues = data.map(function (item) {
                return item.cost;
            });
    
            // Create the Morris chart with the retrieved data
            Morris.Area({
                element: 'morris-area-chart',
                data: data,
                xkey: 'month',
                ykeys: ['cost'],
                labels: ['Sales'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });
        }
    });


    $.ajax({
        url: 'chart/dunot.php',
        dataType: 'json',
        success: function(databaseData) {
            // Extract the data for Morris Donut Chart
            var donutData = [];
            for (var i = 0; i < databaseData.length; i++) {
                donutData.push({ label: databaseData[i].stocker, value: databaseData[i].cost });
            }

            // Update the Morris Donut Chart with the new data
            Morris.Donut({
                element: 'morris-donut-chart',
                data: donutData,
                resize: true
            });
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });






    $.ajax({
        url: 'chart/line.php', // Replace with the actual path to your PHP script
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Creating Morris Line chart
            Morris.Line({
                element: 'morris-line-chart',
                data: data,
                xkey: 'day',
                ykeys: ['cost'],
                labels: ['Total Cost'],
                resize: true
            });
        },
        error: function(error) {
            console.log('Error fetching data:', error);
        }
    });






    
    $.ajax({
        url: 'chart/bar.php', // Replace with the actual path to your PHP script
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Creating Morris Bar chart
            Morris.Bar({
                element: 'morris-bar-chart',
                data: data,
                xkey: 'article',
                ykeys: ['cost'],
                labels: ['Total Cost'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
                resize: true
            });
        },
        error: function(error) {
            console.log('Error fetching data:', error);
        }
    });










});
