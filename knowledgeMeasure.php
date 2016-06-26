<?php
include("fusioncharts/fusioncharts.php");
?>
<html>
<head>
    <title>FusionCharts XT - Column 2D Chart - Data from a database</title>
<!--    <link  rel="stylesheet" type="text/css" href="fusioncharts/assets/css/style.css" />-->



    <script src="fusioncharts/js/fusioncharts.js"></script>
</head>

<body>

<?php

require("DBConnection.php");

$db = DBConnection::getInstance();
$mysqli = $db->getConnection();

$countQuery = "SELECT count(distinct userID) as userCount FROM pp_3.useranswer;";
$result1 = $mysqli->query($countQuery);
$countArray = mysqli_fetch_assoc($result1);
$userCount = $countArray["userCount"];

//echo '<script language="javascript">';
//echo 'alert('.$userCount.')';
//echo '</script>';

$inQuery = "SELECT partName,count(answer) as answer FROM pp_3.useranswer as u,pp_3.part as p where answer=1 and u.partID=p.partID group by u.partID ;";
$result = $mysqli->query($inQuery);

// If the query returns a valid response, prepare the JSON string
if ($result) {
    // The `$arrData` array holds the chart attributes and data
    $arrData = array(
        "chart" => array(

            "caption" => "Community Knowledge on hardware parts inside CPU",
            "paletteColors" => "#0075c2",
            "bgColor" => "#ffffff",
            "borderAlpha"=> "20",
            "canvasBorderAlpha"=> "1",
            "usePlotGradientColor"=> "0",
            "plotBorderAlpha"=> "10",
            "showXAxisLine"=> "1",
            "xAxisLineColor" => "#999999",
            "divlineColor" => "#999999",
            "divLineIsDashed" => "1",
            "showAlternateHGridColor" => "0",
            "yAxisMaxValue" => "100",
            "yAxisMinValue" => "0",
            "xAxisName" => "Hardware Part",
            "numberSuffix"=> "%",
            "yAxisName" => "Correct Answer Percentage",
            "baseFontSize" =>"13"

        )
    );

    $arrData["data"] = array();


    // Push the data into the array
    while($row = mysqli_fetch_array($result)) {
        $correctAnswers =  $row["answer"];
        $percentage = ($correctAnswers/$userCount)*100;
        array_push($arrData["data"], array(
                "label" => $row["partName"],
                "value" => $percentage

            )

        );
//        echo '<script language="javascript">';
//        echo 'alert('.$correctAnswers.')';
//        echo '</script>';
    }


    /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

    $jsonEncodedData = json_encode($arrData);


    /*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

    $columnChart = new FusionCharts("column2D", "myFirstChart" , 1000, 500, "chart-1", "json", $jsonEncodedData);


    // Render the chart
    $columnChart->render();


    // Close the database connection
    $mysqli->close();

}


?>

<div>
    <center><h1>Topic here</h1></center>
</div>
<br><br>

<div id="chart-1" style="margin-left: 200px;"><!-- Fusion Charts will render here--></div>

</body>

</html>