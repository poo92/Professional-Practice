<?php

function formatAns($ans){
    if($ans == 0) {
        return 0;
    }
}

if (isset($_POST['finalSubmit'])) {
    $s1q1 = $s1q2 = $s1q3 = $s1q4 = "";
    $s2q1 = $s2q2 = $s2q3 = $s2q4 = $s2q5 = $s2q6 = $s2q7 = $s2q8 = $s2q9 = "";
    $s3q1 = $s3q2 = $s3q3 = $s3q4 = $s3q5 = "";
    $s4q1 = $s4q2 = $s4q3 = $s4q4 = $s4q5 = "";

    $s1q1 = $_POST['s1q1'];
    $s1q2 = $_POST['s1q2'];
    $s1q3 = $_POST['s1q3'];
    $s1q4 = $_POST['s1q4'];

    $s2q1 = $_POST['s2q1'];
    $s2q2 = $_POST['s2q2'];
    $s2q3 = $_POST['s2q3'];
    $s2q4 = $_POST['s2q4'];
    $s2q5 = $_POST['s2q5'];
    $s2q6 = $_POST['s2q6'];
    $s2q7 = $_POST['s2q7'];
    $s2q8 = $_POST['s2q8'];
    $s2q9 = $_POST['s2q9'];

    $s3q1 = $_POST['s3q1'];
    $s3q2 = $_POST['s3q2'];
    $s3q3 = $_POST['s3q3'];
    $s3q4 = $_POST['s3q4'];
    $s3q5 = $_POST['s3q5'];

    $s4q1 = $_POST['s4q1'];
    $s4q2 = $_POST['s4q2'];
    $s4q3 = $_POST['s4q3'];
    $s4q4 = $_POST['s4q4'];
    $s4q5 = $_POST['s4q5'];

    require("DBConnection.php");

    $db = DBConnection::getInstance();
    $mysqli = $db->getConnection();

    $lockQuery = "LOCK TABLES user";
    $mysqli->query($lockQuery);

    //temp query to test connection
    // $query = "select * from part";
    // $result = $mysqli->query($query);
    // $array = mysqli_fetch_assoc($result);
    // echo $array['partName'];

    $inQuery = "INSERT INTO user (publicIP) VALUES ('".$_SERVER['REMOTE_ADDR']."');";
    $result = $mysqli->query($inQuery);

    $getUserIDQuery = "SELECT MAX(userID)as userID FROM user";
    $userIDResult = $mysqli->query($getUserIDQuery);
    $userIDArray = mysqli_fetch_assoc($userIDResult);
    $userID = $userIDArray["userID"];

    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',1,'$s1q1');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',2,'$s1q2');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',3,'$s1q3');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',4,'$s1q4');";
    $mysqli->query($insertQuery);

    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',5,'$s2q1');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',6,'$s2q2');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',7,'$s2q3');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',8,'$s2q4');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',9,'$s2q5');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',10,'$s2q6');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',11,'$s2q7');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',12,'$s2q8');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',13,'$s2q9');";
    $mysqli->query($insertQuery);

    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',14,'$s3q1');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',15,'$s3q2');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',16,'$s3q3');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',17,'$s3q4');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',18,'$s3q5');";
    $mysqli->query($insertQuery);

    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',19,'$s4q1');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',20,'$s4q2');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',21,'$s4q3');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',22,'$s4q4');";
    $mysqli->query($insertQuery);
    $insertQuery = "INSERT INTO useranswer (userID, partID, answer) VALUES ('$userID',23,'$s4q5');";
    $mysqli->query($insertQuery);

    $unlockQuery = "UNLOCK TABLES";
    $mysqli->query($unlockQuery);

    // header('Location: DBConnection.php');

}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCKnow</title>


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mainCSS.css" rel="stylesheet">
    <link href="assets/css/bootstrap.techie.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <script src="assets/js/jquery-2.1.4.min.js"></script>

</head>


<body>
<!-- Header -->
<div id="header" style="background-color: #00b3b3; height: 61px;">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="min-height: 53px;">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="padding: 10px 15px 0px; height: 46px;">PC<strong
                    style="color : #009b83; ">Know</strong></a>
        </div>
        <div class="col-sm-8">
            <div id="title" class="col-sm-offset-3">Introduction</div>
        </div>
        <div class="col-sm-3">
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <ul class="pagination pagination-sm" style="margin: 10px 0px;">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- header end -->

<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <!-- Step 1 content -->
    <div id="step1" style="display: block;">
        <div class="row" style="margin-top: 25px; margin-left: 0px; margin-right: 0px;">
            <div class="col-xs-3 col-xs-offset-1 homeIntroductionParagraph">
                <p>This application is intended to improve your
                    hardware
                    knowledge in an interactive way. You can learn how to disassemble a CPU of a desktop computer while
                    recognizing all
                    the important hardware parts.
                    <br><br>
                    Let's begin learning with watching this video.
                    <br><br>
                </p>
                <!-- Arrow -->
                <div class="col-xs-12" style="text-align:center;">
                    <img class="goImage" src="assets/img/arrow.png" onclick="return(showStep1());">
                </div>
            </div>
            <br>

            <!-- video -->
            <div class="col-xs-8" style="text-align:center;">

                <iframe width="760" height="435" style="border:1px solid black;" src="https://www.youtube.com/embed/rH5RSR5rb4w?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        

        <!-- Questionary -->
        <div id="step1questionbox" class="col-xs-12" style="height: 600px; display: none; margin-top:10px;">

            <div id="imageDiv" class="image container">
                <img src="assets/img/step1/cpu-first-look.png" id="full-cpu">
                <img src="assets/img/step1/processer-fan.png" class="component" id="processor-fan">
                <img src="assets/img/step1/power-supply.png" class="component" id="powersupply">
                <img src="assets/img/step1/cooling-fan.png" class="component" id="fan">
                <img src="assets/img/step1/speeker.png" class="component" id="speeker">
            </div>

            <div style="position: absolute; top: 96px; left: 244px;">
                <div id="s1q1box" class="question-box" style="">
                    <select id="s1q1" name="s1q1" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="0">RAM</option>
                        <option value="1">Power Supply Unit</option>
                        <option value="0">VGA</option>
                    </select>
                </div>
                <label id="errors1q1" style="font-size: 15px; "></label>
            </div>

            <div style="position: absolute; top: 254px; left: 218px;">
                <div id="s1q2box" class="question-box">
                    <select id="s1q2" name="s1q2" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="0">RAM</option>
                        <option value="0">Processor Cooling Fan</option>
                        <option value="1">Cooling Fan</option>
                    </select>
                </div>
                <label id="errors1q2" style="font-size: 15px;"></label>
            </div>

            <div style="position: absolute; top: 372px; left: 231px;">
                <div id="s1q3box" class="question-box">
                    <select id="s1q3" name="s1q3" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="1">Processor Cooling Fan</option>
                        <option value="0">Processor</option>
                        <option value="0">Cooling Fan</option>
                    </select>
                </div>
                <label id="errors1q3" style="font-size: 15px;"></label>
            </div>

            <div style="position: absolute; top: 467px; left: 251px;">
                <div id="s1q4box" class="question-box">
                    <select id="s1q4" name="s1q4" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="0">RAM</option>
                        <option value="1">Default Speakers</option>
                        <option value="0">VGA</option>
                    </select>
                </div>
                <label id="errors1q4" style="font-size: 15px;"></label>
            </div>

            <div class="col-xs-12" style="top:525px; text-align: right;">
                <button class="btn btn-default" style="background-color: #2a6496; color: #ffffff;" id="submitButton1"
                        onclick="return(validateForms1());">Submit
                </button>
            </div>

            <div class="col-xs-12" style="top: 525px; text-align: right;">
                <button id="nextButton1" name="nextButton1" class="btn btn-default hidden"
                        style="background-color: #2a6496; color: #ffffff;" onclick="return(nextButton1Function());">Next
                </button>
            </div>

        </div>
    </div>

    <!-- Step 2 content -->
    <div id="step2" style="display: none;">
        <div class="row" style="margin-top: 25px;">
            <div class="col-xs-3 col-xs-offset-1 homeIntroductionParagraph">
                <p>This video will show you how to remove the other importatnt parts of the CPU.
                    <br><br>
                    Watch it and press on the arrow to continue!
                </p>
                <!-- Arrow -->
                <div class="col-xs-12" style="text-align:center;">
                    <img class="goImage" src="assets/img/arrow.png" onclick="return(showStep2());">
                </div>
            </div>
            <br>

            <!-- video -->
            <div class="col-xs-8" style="text-align:center;">

                <iframe width="760" height="435" style="border:1px solid black;" src="https://www.youtube.com/embed/4X4-4Dv7qQk?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <br><br>

        </div>

        <!-- Questionary -->
        <div id="step2questionbox" class="col-xs-12" style="height: 600px; display: none;">

            <div id="imageDiv" class="image container">
                <img src="assets/img/step2/motherboard.png" id="motherboard">
                <img src="assets/img/step2/agp.png" class="component" id="agp-slot">
                <img src="assets/img/step2/pci.png" class="component" id="pci-slot">
                <img src="assets/img/step2/south.png" class="component" id="south-bridge">
                <img src="assets/img/step2/ide.png" class="component" id="ide-slot">
                <img src="assets/img/step2/north.png" class="component" id="north-bridge">
                <img src="assets/img/step2/power.png" class="component" id="power-connector">
                <img src="assets/img/step2/processor.png" class="component" id="processor">
                <img src="assets/img/step2/ram.png" class="component" id="ram-slot">
                <img src="assets/img/step2/sata.png" class="component" id="sata-port">
            </div>

            <!-- Left side -->
            <div style="position: absolute; top: 60px; left: 131px;">
                <div id="s2q1box" class="question-box">
                    <select id="s2q1" name="s2q1" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="1">South bridge</option>
                        <option value="0">North bridge</option>
                        <option value="0">CMOS battery</option>
                    </select>
                </div>
                <label id="errors2q1" style="font-size: 15px; "></label>
            </div>

            <div style="position: absolute; top: 145px; left: 120px;">
                <div id="s2q2box" class="question-box">
                    <select id="s2q2" name="s2q2" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="0">IDE connector</option>
                        <option value="0">Serial connector</option>
                        <option value="1">SATA connector</option>
                    </select>
                </div>
                <label id="errors2q2" style="font-size: 15px; "></label>
            </div>

            <div style="position: absolute; top: 255px; left: 110px;">
                <div id="s2q3box" class="question-box">
                    <select id="s2q3" name="s2q3" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="0">PCI slot</option>
                        <option value="1">Motherboard power connector</option>
                        <option value="0">IDE connector</option>
                    </select>
                </div>
                <label id="errors2q3" style="font-size: 15px; "></label>
            </div>

            <div style="position: absolute; top: 359px; left: 118px;">
                <div id="s2q4box" class="question-box">
                    <select id="s2q4" name="s2q4" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="0">AGD slot</option>
                        <option value="0">PCI slot</option>
                        <option value="1">RAM slot</option>
                    </select>
                </div>
                <label id="errors2q4" style="font-size: 15px; "></label>
            </div>

            <div style="position: absolute; top: 463px; left: 130px;">
                <div id="s2q5box" class="question-box">
                    <select id="s2q5" name="s2q5" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="1">IDE connector</option>
                        <option value="0">SATA connector</option>
                        <option value="0">RAM slot</option>
                    </select>
                </div>
                <label id="errors2q5" style="font-size: 15px; "></label>
            </div>

            <!-- Right side -->

            <div style="position: absolute; top: 61px; left: 966px;">
                <div id="s2q6box" class="question-box">
                    <select id="s2q6" name="s2q6" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="1">PCI slot</option>
                        <option value="0">IDE connector</option>
                        <option value="0">SATA connector</option>
                    </select>
                </div>
                <label id="errors2q6" style="font-size: 15px; "></label>
            </div>

            <div style="position: absolute; top: 185px; left: 984px;">
                <div id="s2q7box" class="question-box">
                    <select id="s2q7" name="s2q7" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="0">Processor</option>
                        <option value="0">RAM slot</option>
                        <option value="1">AGP slot</option>
                    </select>
                </div>
                <label id="errors2q7" style="font-size: 15px; "></label>
            </div>

            <div style="position: absolute; top: 271px; left: 985px;">
                <div id="s2q8box" class="question-box">
                    <select id="s2q8" name="s2q8" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="0">South bridge</option>
                        <option value="1">North bridge</option>
                        <option value="0">CMOS battery</option>
                    </select>
                </div>
                <label id="errors2q8" style="font-size: 15px; "></label>
            </div>

            <div style="position: absolute; top: 418px; left: 984px;">
                <div id="s2q9box" class="question-box">
                    <select id="s2q9" name="s2q9" style="width:200px; color: black;">
                        <option value="-1">-- Select --</option>
                        <option value="0">IDE connector</option>
                        <option value="0">SATA connector</option>
                        <option value="1">Processor</option>
                    </select>
                </div>
                <label id="errors2q9" style="font-size: 15px; "></label>
            </div>

            <div class="col-xs-12" style="top:525px; text-align: right;">
                <button class="btn btn-default" style="background-color: #2a6496; color: #ffffff;" id="submitButton2"
                        onclick="return(validateForms2());">Submit
                </button>
            </div>

            <div class="col-xs-12" style="top: 525px; text-align: right;">
                <button id="nextButton2" name="nextButton1" class="btn btn-default hidden"
                        style="background-color: #2a6496; color: #ffffff;" onclick="return(nextButton2Function());">Next
                </button>
            </div>

        </div>
    </div>

    <!-- Ste 3 content -->
    <div id="step3" style="display: none;">
        <br>
        <div>
            <p class="col-xs-10 col-xs-offset-1 phase-3-Paragraph">Now try to identify following components.</p>
        </div>
        <br>
        <!-- Questionary -->
        <div id="step3questionbox" class="col-xs-12" style="height: 600px; margin-top:10px;">
            <div class="step3questionbox-row row">
                <div class="col-lg-3 single-question-box">
                    <img src="assets/img/step3/cd-dvd.png" style="height: 240px;">
                    <div style="margin-top: 15px;">
                        <div id="s3q1box" class="question-box" style="margin: 0px auto;">
                            <select id="s3q1" name="s3q1" style="width:200px; color: black;">
                                <option value="-1">-- Select --</option>
                                <option value="0">Floppy Disk Drive</option>
                                <option value="1">CD/DVD Drive</option>
                                <option value="0">Hard Disk Drive</option>
                            </select>
                        </div>
                    <label id="errors3q1" style="font-size: 15px; "></label>
                    </div>
                </div>
                <div class="col-lg-3 single-question-box">
                    <img src="assets/img/step3/floppy.png" style="height: 240px;">
                    <div style="margin-top: 15px;">
                        <div id="s3q2box" class="question-box" style="margin: 0px auto;">
                            <select id="s3q2" name="s3q2" style="width:200px; color: black;">
                                <option value="-1">-- Select --</option>
                                <option value="1">Floppy Disk Drive</option>
                                <option value="0">Hard Disk Drive</option>
                                <option value="0">RAM</option>
                            </select>
                        </div>
                    <label id="errors3q2" style="font-size: 15px; "></label>
                    </div>
                </div>
                <div class="col-lg-3 single-question-box">
                    <img src="assets/img/step3/hdd.png" style="height: 240px;">
                    <div style="margin-top: 15px;">
                        <div id="s3q3box" class="question-box" style="margin: 0px auto;">
                            <select id="s3q3" name="s3q3" style="width:200px; color: black;">
                                <option value="-1">-- Select --</option>
                                <option value="0">RAM</option>
                                <option value="0">Power Supply Unit</option>
                                <option value="1">Hard Disk Drive</option>
                            </select>
                        </div>
                    <label id="errors3q3" style="font-size: 15px; "></label>
                    </div>
                </div>
            </div>
            <div class="step3questionbox-row row">
                <div class="col-lg-3 single-question-box">
                    <img src="assets/img/step3/pci.png" style="height: 223px; margin-bottom: 16px;">
                    <div style="margin-top: 15px;">
                        <div id="s3q4box" class="question-box" style="margin: 0px auto;">
                            <select id="s3q4" name="s3q4" style="width:200px; color: black;">
                                <option value="-1">-- Select --</option>
                                <option value="0">Floppy Disk Drive</option>
                                <option value="0">CD/DVD Drive</option>
                                <option value="1">PCI Express Component</option>
                            </select>
                        </div>
                    <label id="errors3q4" style="font-size: 15px; "></label>
                    </div>
                </div>
                <div class="col-lg-3 single-question-box">
                    <img src="assets/img/step3/ram.png" style="height: 240px;">
                    <div style="margin-top: 15px;">
                        <div id="s3q5box" class="question-box" style="margin: 0px auto;">
                            <select id="s3q5" name="s3q5" style="width:200px; color: black;">
                                <option value="-1">-- Select --</option>
                                <option value="0">PCI Express Component</option>
                                <option value="0">Hard Disk Drive</option>
                                <option value="1">RAM</option>
                            </select>
                        </div>
                    <label id="errors3q5" style="font-size: 15px; "></label>
                    </div>
                </div>

                <div  id="submitButton3Box" class="col-lg-3" style="text-align: right; margin-top: 301px; margin-left: 75px;">
                    <button class="btn btn-default" style="background-color: #2a6496; color: #ffffff;" id="submitButton3"
                            onclick="return(validateForms3());">Submit
                    </button>
                </div>

                <div id="nextButton3Box" class="col-lg-3 hidden" style="text-align: right; margin-top: 301px; margin-left: 75px;">
                    <button id="nextButton3" name="nextButton3" class="btn btn-default"
                            style="background-color: #2a6496; color: #ffffff;" onclick="return(nextButton3Function());">Next
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Ste 4 content -->
    <div id="step4" style="display: none;">
        <br>
        <div>
            <p class="col-xs-10 col-xs-offset-1 phase-3-Paragraph">Now try to identify following components.</p>
        </div>
        <br>
        <!-- Questionary -->
        <div id="step4questionbox" class="col-xs-12" style="height: 600px; margin-top:10px;">
            <div class="step3questionbox-row row">
                <div class="col-lg-3 single-question-box">
                    <img src="assets/img/step4/ide-cable.png" style="height: 240px;">
                    <div style="margin-top: 15px;">
                        <div id="s4q1box" class="question-box" style="margin: 0px auto;">
                            <select id="s4q1" name="s4q1" style="width:200px; color: black;">
                                <option value="-1">-- Select --</option>
                                <option value="0">Motherboard Power Cable</option>
                                <option value="1">IDE Cable</option>
                                <option value="0">Peripheral Power Cable</option>
                            </select>
                        </div>
                    <label id="errors4q1" style="font-size: 15px; "></label>
                    </div>
                </div>
                <div class="col-lg-3 single-question-box">
                    <img src="assets/img/step4/motherboard-power-cable.png" style="height: 240px;">
                    <div style="margin-top: 15px;">
                        <div id="s4q2box" class="question-box" style="margin: 0px auto;">
                            <select id="s4q2" name="s4q2" style="width:200px; color: black;">
                                <option value="-1">-- Select --</option>
                                <option value="1">Motherboard Power Cable</option>
                                <option value="0">Sata Cable</option>
                                <option value="0">Sata Power Cable</option>
                            </select>
                        </div>
                    <label id="errors4q2" style="font-size: 15px; "></label>
                    </div>
                </div>
                <div class="col-lg-3 single-question-box">
                    <img src="assets/img/step4/peripheral-power-cable.png" style="height: 240px;">
                    <div style="margin-top: 15px;">
                        <div id="s4q3box" class="question-box" style="margin: 0px auto;">
                            <select id="s4q3" name="s4q3" style="width:200px; color: black;">
                                <option value="-1">-- Select --</option>
                                <option value="0">Sata Cable</option>
                                <option value="0">IDE Cable</option>
                                <option value="1">Peripheral Power Cable</option>
                            </select>
                        </div>
                    <label id="errors4q3" style="font-size: 15px; "></label>
                    </div>
                </div>
            </div>
            <div class="step3questionbox-row row">
                <div class="col-lg-3 single-question-box">
                    <img src="assets/img/step4/sata-cable.png" style="height: 223px; margin-bottom: 16px;">
                    <div style="margin-top: 15px;">
                        <div id="s4q4box" class="question-box" style="margin: 0px auto;">
                            <select id="s4q4" name="s4q4" style="width:200px; color: black;">
                                <option value="-1">-- Select --</option>
                                <option value="0">Sata Power Cable</option>
                                <option value="0">Peripheral Power Cable/option>
                                <option value="1">Sata Cable</option>
                            </select>
                        </div>
                    <label id="errors4q4" style="font-size: 15px; "></label>
                    </div>
                </div>
                <div class="col-lg-3 single-question-box">
                    <img src="assets/img/step4/sata-power-cable.png" style="height: 240px;">
                    <div style="margin-top: 15px;">
                        <div id="s4q5box" class="question-box" style="margin: 0px auto;">
                            <select id="s4q5" name="s4q5" style="width:200px; color: black;">
                                <option value="-1">-- Select --</option>
                                <option value="0">IDE Cable</option>
                                <option value="0">Motherboard Power Cable</option>
                                <option value="1">Sata Power Cable</option>
                            </select>
                        </div>
                    <label id="errors4q5" style="font-size: 15px; "></label>
                    </div>
                </div>

                <div  id="submitButton4Box" class="col-lg-3" style="text-align: right; margin-top: 301px; margin-left: 75px;">
                    <button class="btn btn-default" style="background-color: #2a6496; color: #ffffff;" id="submitButton4"
                            onclick="return(validateForms4());">Submit
                    </button>
                </div>

                <div  id="finalSubmitBox" class="col-lg-3 hidden" style="text-align: right; margin-top: 301px; margin-left: 75px;">
                    <button id="finalSubmit" name="finalSubmit" type="submit" class="btn btn-default "
                            style="background-color: #2a6496; color: #ffffff;">
                        Final Submit
                    </button>
                </div>
            </div>

        </div>
    </div>

</form>
</body>

<script src="assets/js/jquery.min.js"></script>
<script>
    function showStep1() {

        $("#step1questionbox").slideDown("fast", function () {
            $('html, body').animate({
                scrollTop: $("#step1questionbox").offset().top
            }, 900);
        });
        document.getElementById("title").innerHTML = "Phase 1";
    }

    function showStep2() {

        $("#step2questionbox").slideDown("fast", function () {
            $('html, body').animate({
                scrollTop: $("#step2questionbox").offset().top
            }, 900);
        });
    }

</script>

<script>
    function validateForms1() {
        var errors = [];

        var val1 = document.getElementById("s1q1").value;
        if (!selectValidationOnSubmit(val1, "errors1q1", "s1q1box")) {
            errors.push("errors1q1");
        }
        var val2 = document.getElementById("s1q2").value;
        if (!selectValidationOnSubmit(val2, "errors1q2", "s1q2box")) {
            errors.push("errors1q2");
        }

        var val3 = document.getElementById("s1q3").value;
        if (!selectValidationOnSubmit(val3, "errors1q3", "s1q3box")) {
            errors.push("errors1q3");
        }

        var val4 = document.getElementById("s1q4").value;
        if (!selectValidationOnSubmit(val4, "errors1q4", "s1q4box")) {
            errors.push("errors1q4");
        }

        if (errors.length > 0) {
            return false;
        } else {
            if (val1 == 1) {
                correctAnswer("s1q1box");
            } else {
                wrongAnswer("s1q1box", "errors1q1");
                document.getElementById("errors1q1").innerHTML = "Correct Answer : Power Supply Unit";
            }

            if (val2 == 1) {
                correctAnswer("s1q2box");
            } else {
                wrongAnswer("s1q2box", "errors1q2");
                document.getElementById("errors1q2").innerHTML = "Correct Answer : Cooling Fan";
            }

            if (val3 == 1) {
                correctAnswer("s1q3box");
            } else {
                wrongAnswer("s1q3box", "errors1q3");
                document.getElementById("errors1q3").innerHTML = "Correct Answer : Processor Cooling Fan";
            }

            if (val4 == 1) {
                correctAnswer("s1q4box");
            } else {
                wrongAnswer("s1q4box", "errors1q4");
                document.getElementById("errors1q4").innerHTML = "Correct Answer : Default Speakers";
            }

            $("#submitButton1").addClass("hidden");
            $("#nextButton1").removeClass("hidden");
            return false;
        }
    }

    function validateForms2() {
        var errors = [];

        var val1 = document.getElementById("s2q1").value;
        if (!selectValidationOnSubmit(val1, "errors2q1", "s2q1box")) {
            errors.push("errors2q1");
        }
        var val2 = document.getElementById("s2q2").value;
        if (!selectValidationOnSubmit(val2, "errors2q2", "s2q2box")) {
            errors.push("errors2q2");
        }

        var val3 = document.getElementById("s2q3").value;
        if (!selectValidationOnSubmit(val3, "errors2q3", "s2q3box")) {
            errors.push("errors2q3");
        }

        var val4 = document.getElementById("s2q4").value;
        if (!selectValidationOnSubmit(val4, "errors2q4", "s2q4box")) {
            errors.push("errors2q4");
        }

        var val5 = document.getElementById("s2q5").value;
        if (!selectValidationOnSubmit(val5, "errors2q5", "s2q5box")) {
            errors.push("errors2q5");
        }
        var val6 = document.getElementById("s2q6").value;
        if (!selectValidationOnSubmit(val6, "errors2q6", "s2q6box")) {
            errors.push("errors2q6");
        }

        var val7 = document.getElementById("s2q7").value;
        if (!selectValidationOnSubmit(val7, "errors2q7", "s2q7box")) {
            errors.push("errors2q7");
        }

        var val8 = document.getElementById("s2q8").value;
        if (!selectValidationOnSubmit(val8, "errors2q8", "s2q8box")) {
            errors.push("errors2q8");
        }

        var val9 = document.getElementById("s2q9").value;
        if (!selectValidationOnSubmit(val9, "errors2q9", "s2q9box")) {
            errors.push("errors2q9");
        }

        if (errors.length > 0) {
            return false;
        } else {
            if (val1 == 1) {
                correctAnswer("s2q1box");
            } else {
                wrongAnswer("s2q1box", "errors2q1");
                document.getElementById("errors2q1").innerHTML = "Correct Answer : South bridge";
            }

            if (val2 == 1) {
                correctAnswer("s2q2box");
            } else {
                wrongAnswer("s2q2box", "errors2q2");
                document.getElementById("errors2q2").innerHTML = "Correct Answer : SATA connector";
            }

            if (val3 == 1) {
                correctAnswer("s2q3box");
            } else {
                wrongAnswer("s2q3box", "errors2q3");
                document.getElementById("errors2q3").innerHTML = "Correct Answer :<br>Motherboard power connector";
            }

            if (val4 == 1) {
                correctAnswer("s2q4box");
            } else {
                wrongAnswer("s2q4box", "errors2q4");
                document.getElementById("errors2q4").innerHTML = "Correct Answer : RAM slot";
            }

            if (val5 == 1) {
                correctAnswer("s2q5box");
            } else {
                wrongAnswer("s2q5box", "errors2q5");
                document.getElementById("errors2q5").innerHTML = "Correct Answer : IDE connector";
            }

            if (val6 == 1) {
                correctAnswer("s2q6box");
            } else {
                wrongAnswer("s2q6box", "errors2q6");
                document.getElementById("errors2q6").innerHTML = "Correct Answer : PCI slot";
            }

            if (val7 == 1) {
                correctAnswer("s2q7box");
            } else {
                wrongAnswer("s2q7box", "errors2q7");
                document.getElementById("errors2q7").innerHTML = "Correct Answer : AGP slot";
            }

            if (val8 == 1) {
                correctAnswer("s2q8box");
            } else {
                wrongAnswer("s2q8box", "errors2q8");
                document.getElementById("errors2q8").innerHTML = "Correct Answer : North bridge";
            }

            if (val9 == 1) {
                correctAnswer("s2q9box");
            } else {
                wrongAnswer("s2q9box", "errors2q9");
                document.getElementById("errors2q9").innerHTML = "Correct Answer : Processor";
            }

            $("#submitButton2").addClass("hidden");
            $("#nextButton2").removeClass("hidden");

            return false;
        }
    }

    function validateForms3() {
        var errors = [];

        var val1 = document.getElementById("s3q1").value;
        if (!selectValidationOnSubmit(val1, "errors3q1", "s3q1box")) {
            errors.push("errors3q1");
        }
        var val2 = document.getElementById("s3q2").value;
        if (!selectValidationOnSubmit(val2, "errors3q2", "s3q2box")) {
            errors.push("errors3q2");
        }

        var val3 = document.getElementById("s3q3").value;
        if (!selectValidationOnSubmit(val3, "errors3q3", "s3q3box")) {
            errors.push("errors3q3");
        }

        var val4 = document.getElementById("s3q4").value;
        if (!selectValidationOnSubmit(val4, "errors3q4", "s3q4box")) {
            errors.push("errors3q4");
        }

        var val5 = document.getElementById("s3q5").value;
        if (!selectValidationOnSubmit(val4, "errors3q5", "s3q5box")) {
            errors.push("errors3q5");
        }

        if (errors.length > 0) {
            return false;
        } else {
            if (val1 == 1) {
                correctAnswer("s3q1box");
            } else {
                wrongAnswer("s3q1box", "errors3q1");
                document.getElementById("errors3q1").innerHTML = "Correct Answer : CD/DVD Drive";
            }

            if (val2 == 1) {
                correctAnswer("s3q2box");
            } else {
                wrongAnswer("s3q2box", "errors3q2");
                document.getElementById("errors3q2").innerHTML = "Correct Answer : Floppy Disk Drive";
            }

            if (val3 == 1) {
                correctAnswer("s3q3box");
            } else {
                wrongAnswer("s3q3box", "errors3q3");
                document.getElementById("errors3q3").innerHTML = "Correct Answer : Hard Disk Drive";
            }

            if (val4 == 1) {
                correctAnswer("s3q4box");
            } else {
                wrongAnswer("s3q4box", "errors3q4");
                document.getElementById("errors3q4").innerHTML = "Correct Answer : PCI Express Component";
            }

            if (val5 == 1) {
                correctAnswer("s3q5box");
            } else {
                wrongAnswer("s3q5box", "errors3q5");
                document.getElementById("errors3q5").innerHTML = "Correct Answer : RAM";
            }

            $("#submitButton3Box").addClass("hidden");
            $("#nextButton3Box").removeClass("hidden");

            return false;
        }
    }

    function validateForms4() {
        var errors = [];

        var val1 = document.getElementById("s4q1").value;
        if (!selectValidationOnSubmit(val1, "errors4q1", "s4q1box")) {
            errors.push("errors4q1");
        }
        var val2 = document.getElementById("s4q2").value;
        if (!selectValidationOnSubmit(val2, "errors4q2", "s4q2box")) {
            errors.push("errors4q2");
        }

        var val3 = document.getElementById("s4q3").value;
        if (!selectValidationOnSubmit(val3, "errors4q3", "s4q3box")) {
            errors.push("errors4q3");
        }

        var val4 = document.getElementById("s4q4").value;
        if (!selectValidationOnSubmit(val4, "errors4q4", "s4q4box")) {
            errors.push("errors4q4");
        }

        var val5 = document.getElementById("s4q5").value;
        if (!selectValidationOnSubmit(val4, "errors4q5", "s4q5box")) {
            errors.push("errors4q5");
        }

        if (errors.length > 0) {
            return false;
        } else {
            if (val1 == 1) {
                correctAnswer("s4q1box");
            } else {
                wrongAnswer("s4q1box", "errors4q1");
                document.getElementById("errors4q1").innerHTML = "Correct Answer : IDE Cable";
            }

            if (val2 == 1) {
                correctAnswer("s4q2box");
            } else {
                wrongAnswer("s4q2box", "errors4q2");
                document.getElementById("errors4q2").innerHTML = "Correct Answer : Motherboard Power Cable";
            }

            if (val3 == 1) {
                correctAnswer("s4q3box");
            } else {
                wrongAnswer("s4q3box", "errors4q3");
                document.getElementById("errors4q3").innerHTML = "Correct Answer : Peripheral Power Cable";
            }

            if (val4 == 1) {
                correctAnswer("s4q4box");
            } else {
                wrongAnswer("s4q4box", "errors4q4");
                document.getElementById("errors4q4").innerHTML = "Correct Answer : Sata Cable";
            }

            if (val5 == 1) {
                correctAnswer("s4q5box");
            } else {
                wrongAnswer("s4q5box", "errors4q5");
                document.getElementById("errors4q5").innerHTML = "Correct Answer : Sata Power Cable";
            }

            $("#submitButton4Box").addClass("hidden");
            $("#finalSubmitBox").removeClass("hidden");

            return false;
        }
    }

    function selectValidationOnSubmit(val, errorLbl, element) {
        if (val == "-1") {
            document.getElementById(errorLbl).innerHTML = "Please select a value";
            document.getElementById(errorLbl).className += " error-label";
            document.getElementById(element).className += " redBox";
            return false;
        } else {
            document.getElementById(errorLbl).innerHTML = "";
            return true;
        }
    }

    function correctAnswer(element) {
        document.getElementById(element).className += " greenBox";
        var img = document.createElement("img");
        img.src = "assets/img/tick.png";
        img.style = "position: absolute; height: 24px; top: -13px;"

        document.getElementById(element).appendChild(img);
    }

    function wrongAnswer(element, errorLbl) {
        document.getElementById(element).className += " redBox";
        document.getElementById(errorLbl).className += " error-label";
        var img = document.createElement("img");
        img.src = "assets/img/cross.png";
        img.style = "position: absolute; height: 24px; top: -13px;"

        document.getElementById(element).appendChild(img);
    }

    function nextButton1Function() {
        document.getElementById("step1").style.display = "none";
        document.getElementById("step2").style.display = "block";
        document.getElementById("title").innerHTML = "Phase 2";
        return false;
    }

    function nextButton2Function() {
        document.getElementById("step2").style.display = "none";
        document.getElementById("step3").style.display = "block";
        document.getElementById("title").innerHTML = "Phase 3";
        window.scrollTo(0, 0);
        return false;
    }

    function nextButton3Function() {
        document.getElementById("step3").style.display = "none";
        document.getElementById("step4").style.display = "block";
        document.getElementById("title").innerHTML = "Phase 4";
        window.scrollTo(0, 0);
        return false;
    }



</script>


</html>