<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Home</title>


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mainCSS.css" rel="stylesheet">
    <link href="assets/css/bootstrap.techie.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src = "assets/js/jquery-2.1.4.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#pro").click(function(){
                $("#1").slideDown(500);
                $("#2").hide('fast');
            });
        });

        $(document).ready(function(){
            $("#full").click(function(){
                $("#2").slideDown(500);
                $("#1").hide('fast');
            });
        });
    </script>

</head>


<body>
<div style="background-color: dodgerblue; height: 100px;">
    <p>header here</p>
</div>

<div>
    <h3 class="col-xs-3  col-xs-offset-5  homeIntroductionHrader">Introduction</h3>

    <p class="col-xs-10 col-xs-offset-1 homeIntroductionParagraph">This application is intended to improve your hardware
        knowledge in an interactive way. You can learn how to disassemble a CPU of a desktop computer while recognizing all
        the important hardware parts.
        <br>
        Let's begin learning with watching this video.
    </p>
</div>
<br>

<div class="col-xs-6 col-xs-offset-3">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/8UyJMiYqvs4" frameborder="0"
            allowfullscreen></iframe>

</div>
<br> <br>

<!--<div class="col-xs-4 col-xs-offset-5">-->
<!--    <button class="btn btn-primary homeGoBTN"  > GO </button>-->
<!---->
<!--</div>-->
<div class="col-xs-4 col-xs-offset-5">
<img id="goImage" src="assets/img/arrow.png" onclick="alertMessage();">
</div>

<div id="targetDiv" class="col-xs-12" style="height: 650px; display: none;" >

    <form role="form" method="post" onsubmit="return(validateForm())">

    <div class="image container">
        <img src="assets/img/q1/cpu-first-look.png" class="full-cpu" id="full">
        <img src="assets/img/q1/processer-fan.png" class="component processor" id="pro">
        <img src="assets/img/q1/power-supply.png" class="component powersupply" id="powersupply">
        <img src="assets/img/q1/cooling-fan.png" class="component fan" id="fan">
        <img src="assets/img/q1/speeker.png" class="component speeker" id="speeker">
    </div>
    <!-- Left side -->
    <div id="q1box" class="question-box" style="top: 101px; left: 230px;">
        <select id="q1" style="width:200px; color: black;">
            <option value="0">-- Select --</option>
            <option value="1">RAM</option>
            <option value="2">Processor</option>
            <option value="3">VGA</option>
        </select>
    </div>

    <label id="errorq1" style="font-size: 15px;top:150px;"  class="col-xs-3 col-xs-offset-2 "></label>

    <div id="q2box" class="question-box" style="top: 268px; left: 204px;">
        <select id="q2" style="width:200px; color: black;">
            <option value="0">-- Select --</option>
            <option value="1">RAM</option>
            <option value="2">Processor</option>
            <option value="3">VGA</option>
        </select>
    </div>

    <label id="errorq2" style="font-size: 15px; top:320px;left:-550px; " class="col-xs-3 col-xs-offset-2 "></label>

    <div id="q3box" class="question-box" style="top: 403px; left: 218px;">
        <select id="q3" style="width:200px; color: black;">
            <option value="0">-- Select --</option>
            <option value="1">RAM</option>
            <option value="2">Processor</option>
            <option value="3">VGA</option>
        </select>
    </div>

    <label id="errorq3" style="font-size: 15px;top:420px;left:0px; " class="col-xs-3 col-xs-offset-2 "></label>

    <div id="q4box" class="question-box" style="top: 485px; left: 229px;">
        <select id="q4" style="width:200px; color: black;">
            <option value="0">-- Select --</option>
            <option value="1">RAM</option>
            <option value="2">Processor</option>
            <option value="3">VGA</option>
        </select>
    </div>

    <label id="errorq4" style="font-size: 15px; top:500px;left:-550px;" class="col-xs-3 col-xs-offset-2 "></label>

    <div class="col-xs-1 col-xs-offset-11" style="top:595px;">
        <button class="btn btn-default" style="background-color: #2a6496; color: #ffffff;" >Submit</button>
    </div>
        </form>
</div>



</body>
<script src="assets/js/jquery.min.js"></script>
<script>
    function alertMessage(){

        $( "#targetDiv" ).slideDown( "slow", function() {
            $('html, body').animate({
                scrollTop: $("#targetDiv").offset().top
            }, 900);
        });

        e.preventDefault();
        e.stopPropagation();
    }
</script>

<script>
    function validateForm(){
        var errors = [];

        var val1 = document.getElementById("q1").value;
        if (!selectValidationOnSubmit(val1, "errorq1","q1box")) {
            errors.push("errorq1");
        }
        var val2 = document.getElementById("q1").value;
        if (!selectValidationOnSubmit(val2, "errorq2","q2box")) {
            errors.push("errorq2");
        }

        var val3 = document.getElementById("q1").value;
        if (!selectValidationOnSubmit(val3, "errorq3","q3box")) {
            errors.push("errorq3");
        }

        var val4 = document.getElementById("q1").value;
        if (!selectValidationOnSubmit(val4, "errorq4","q4box")) {
            errors.push("errorq4");
        }


        if (errors.length > 0) {
            return false;
        } else {
            return true;
        }
    }



    function selectValidationOnSubmit(val, errorLbl,element) {
        if (val == "0") {
            document.getElementById(errorLbl).innerHTML = "Please select a value";
            document.getElementById(errorLbl).style.color = "red";
            document.getElementById(element).style.borderColor = "red";
            return false;
        } else {
            document.getElementById(errorLbl).innerHTML = "";
            return true;
        }
    }
</script>


</html>