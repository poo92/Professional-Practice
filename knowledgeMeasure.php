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

$inQuery1 = "SELECT partName,count(answer) as answer FROM pp_3.useranswer as u,pp_3.part as p where answer=1 and u.partID=p.partID and u.partID BETWEEN 1 AND 4 group by u.partID ;";
$result = $mysqli->query($inQuery1);

// If the query returns a valid response, prepare the JSON string

if ($result) {
        // The `$arrData` array holds the chart attributes and data
        $arrData = array(
            "chart" => array(
                "caption" => "Phase 1",
                "paletteColors" => "#0075c2",
                "bgColor" => "#ffffff",
                "borderAlpha" => "20",
                "canvasBorderAlpha" => "1",
                "usePlotGradientColor" => "0",
                "plotBorderAlpha" => "10",
                "showXAxisLine" => "1",
                "xAxisLineColor" => "#999999",
                "divlineColor" => "#999999",
                "divLineIsDashed" => "1",
                "showAlternateHGridColor" => "0",
                "yAxisMaxValue" => "100",
                "yAxisMinValue" => "0",
                "xAxisName" => "Hardware Part",
                "numberSuffix" => "%",
                "yAxisName" => "Correct Answer Percentage",
                "decimals"=> "0",
                "baseFontSize" => "13"

            )
        );

        $arrData["data"] = array();


        // Push the data into the array
        while ($row = mysqli_fetch_array($result)) {
            $correctAnswers = $row["answer"];
            $percentage = ($correctAnswers / $userCount) * 100;
            array_push($arrData["data"], array(
                    "label" => $row["partName"],
                    "value" => $percentage

                )

            );
            //echo $arrData["data"]["value"];
//        echo '<script language="javascript">';
//        //echo 'alert('.$correctAnswers.')';
//        echo 'alert('.$arrData["data"]["value"].')';
//        echo '</script>';
        }

    /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

    $jsonEncodedData = json_encode($arrData);

    /*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

    $columnChart = new FusionCharts("column2D", "myFirstChart" , 1000, 500, "chart-1", "json", $jsonEncodedData);


    // Render the chart
    $columnChart->render();


    // Close the database connection
    //$mysqli->close();

}

$inQuery_2 = "SELECT partName,count(answer) as answer FROM pp_3.useranswer as u,pp_3.part as p where answer=1 and u.partID=p.partID and u.partID BETWEEN 5 AND 13 group by u.partID ;";
$result_2 = $mysqli->query($inQuery_2);

if ($result_2) {
    // The `$arrData` array holds the chart attributes and data
    $arrData_1 = array(
        "chart" => array(
            "caption" => "Phase 2",
            "paletteColors" => "#0075c2",
            "bgColor" => "#ffffff",
            "borderAlpha" => "20",
            "canvasBorderAlpha" => "1",
            "usePlotGradientColor" => "0",
            "plotBorderAlpha" => "10",
            "showXAxisLine" => "1",
            "xAxisLineColor" => "#999999",
            "divlineColor" => "#999999",
            "divLineIsDashed" => "1",
            "showAlternateHGridColor" => "0",
            "yAxisMaxValue" => "100",
            "yAxisMinValue" => "0",
            "xAxisName" => "Hardware Part",
            "numberSuffix" => "%",
            "yAxisName" => "Correct Answer Percentage",
            "decimals"=> "0",
            "baseFontSize" => "13"

        )
    );

    $arrData_1["data"] = array();


    // Push the data into the array
    while ($row = mysqli_fetch_array($result_2)) {
        $correctAnswers = $row["answer"];
        $percentage = ($correctAnswers / $userCount) * 100;
        array_push($arrData_1["data"], array(
                "label" => $row["partName"],
                "value" => $percentage

            )

        );
        //echo $arrData["data"]["value"];
//        echo '<script language="javascript">';
//        //echo 'alert('.$correctAnswers.')';
//        echo 'alert('.$arrData["data"]["value"].')';
//        echo '</script>';
    }

    /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

    $jsonEncodedData_1 = json_encode($arrData_1);

    /*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

    $columnChart_1 = new FusionCharts("column2D", "mySecondChart" , 1000, 500, "chart-2", "json", $jsonEncodedData_1);


    // Render the chart
    $columnChart_1->render();


    // Close the database connection
//    $mysqli->close();

}

$inQuery_3 = "SELECT partName,count(answer) as answer FROM pp_3.useranswer as u,pp_3.part as p where answer=1 and u.partID=p.partID and u.partID BETWEEN 14 AND 18 group by u.partID ;";
$result_3 = $mysqli->query($inQuery_3);

if ($result_3) {
    // The `$arrData` array holds the chart attributes and data
    $arrData_2 = array(
        "chart" => array(
            "caption" => "Phase 3",
            "paletteColors" => "#0075c2",
            "bgColor" => "#ffffff",
            "borderAlpha" => "20",
            "canvasBorderAlpha" => "1",
            "usePlotGradientColor" => "0",
            "plotBorderAlpha" => "10",
            "showXAxisLine" => "1",
            "xAxisLineColor" => "#999999",
            "divlineColor" => "#999999",
            "divLineIsDashed" => "1",
            "showAlternateHGridColor" => "0",
            "yAxisMaxValue" => "100",
            "yAxisMinValue" => "0",
            "xAxisName" => "Hardware Part",
            "numberSuffix" => "%",
            "yAxisName" => "Correct Answer Percentage",
            "decimals"=> "0",
            "baseFontSize" => "13"

        )
    );

    $arrData_2["data"] = array();


    // Push the data into the array
    while ($row = mysqli_fetch_array($result_3)) {
        $correctAnswers = $row["answer"];
        $percentage = ($correctAnswers / $userCount) * 100;
        array_push($arrData_2["data"], array(
                "label" => $row["partName"],
                "value" => $percentage

            )

        );

    }

    /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

    $jsonEncodedData_2 = json_encode($arrData_2);

    /*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

    $columnChart_2 = new FusionCharts("column2D", "myThirdChart" , 1000, 500, "chart-3", "json", $jsonEncodedData_2);


    // Render the chart
    $columnChart_2->render();


    // Close the database connection
    //$mysqli->close();

}


$inQuery_4 = "SELECT partName,count(answer) as answer FROM pp_3.useranswer as u,pp_3.part as p where answer=1 and u.partID=p.partID and u.partID BETWEEN 19 AND 23 group by u.partID ;";
$result_4 = $mysqli->query($inQuery_4);

if ($result_4) {
    // The `$arrData` array holds the chart attributes and data
    $arrData_3 = array(
        "chart" => array(
            "caption" => "Phase 4",
            "paletteColors" => "#0075c2",
            "bgColor" => "#ffffff",
            "borderAlpha" => "20",
            "canvasBorderAlpha" => "1",
            "usePlotGradientColor" => "0",
            "plotBorderAlpha" => "10",
            "showXAxisLine" => "1",
            "xAxisLineColor" => "#999999",
            "divlineColor" => "#999999",
            "divLineIsDashed" => "1",
            "showAlternateHGridColor" => "0",
            "yAxisMaxValue" => "100",
            "yAxisMinValue" => "0",
            "xAxisName" => "Hardware Part",
            "numberSuffix" => "%",
            "yAxisName" => "Correct Answer Percentage",
            "decimals"=> "0",
            "baseFontSize" => "13"

        )
    );

    $arrData_3["data"] = array();


    // Push the data into the array
    while ($row = mysqli_fetch_array($result_4)) {
        $correctAnswers = $row["answer"];
        $percentage = ($correctAnswers / $userCount) * 100;
        array_push($arrData_3["data"], array(
                "label" => $row["partName"],
                "value" => $percentage

            )

        );

    }

    /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

    $jsonEncodedData_3 = json_encode($arrData_3);

    /*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

    $columnChart_3 = new FusionCharts("column2D", "myFourthChart" , 1000, 500, "chart-4", "json", $jsonEncodedData_3);


    // Render the chart
    $columnChart_3->render();


    // Close the database connection
    //$mysqli->close();

}
?>

<div>
    <center><h1>Community Knowledge on hardware parts inside CPU</h1></center>
    <center><h2 style="font-weight: 100;"> Percentages out of <?php echo $userCount ?> users</h2></center>
</div>
<br><br>

<div id="chart-1" style="margin-left: 200px;"><!-- Fusion Charts will render here--></div><br><br><br><br>
<div id="chart-2" style="margin-left: 200px;" > </div> <br><br><br><br>
<div id="chart-3" style="margin-left: 200px;" >  </div>  <br><br><br><br>
<div id="chart-4" style="margin-left: 200px;" >  </div> <br><br><br><br>
</body>

</html>