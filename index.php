<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Home</title>


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
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
<div style="background-color: #00b3b3; height: 83px;">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PC<strong style="color : #009b83;">Know</strong></a>
            </div>
             
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <ul class="pagination pagination-sm">
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
        </nav>
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
<img id="goImage" src="assets/img/arrow.png" onclick="return(alertMessage());">
</div>

<div id="targetDiv" class="col-xs-12" style="height: 665px; display: none;" >

    <form role="form" method="post" onsubmit="return(validateForm());">

    <div  id="imageDiv" class="image container">
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
            <option value="2">Power Supply Unit</option>
            <option value="3">VGA</option>
        </select>
    </div>

    <label id="errorq1" style="font-size: 15px;top:150px; left: -20px;"  class="col-xs-3 col-xs-offset-2 "></label>

    <div id="q2box" class="question-box" style="top: 268px; left: 204px;">
        <select id="q2" style="width:200px; color: black;">
            <option value="0">-- Select --</option>
            <option value="1">RAM</option>
            <option value="2">Processor Cooling Fan </option>
            <option value="3">Cooling Fan</option>
        </select>
    </div>

    <label id="errorq2" style="font-size: 15px; top:320px;left:-590px; " class="col-xs-3 col-xs-offset-2 "></label>

    <div id="q3box" class="question-box" style="top: 403px; left: 218px;">
        <select id="q3" style="width:200px; color: black;">
            <option value="0">-- Select --</option>
            <option value="1">Processor Cooling Fan</option>
            <option value="2">Processor</option>
            <option value="3">Cooling Fan</option>
        </select>
    </div>

    <label id="errorq3" style="font-size: 15px;top:420px;left:-30px; " class="col-xs-3 col-xs-offset-2 "></label>

    <div id="q4box" class="question-box" style="top: 485px; left: 229px;">
        <select id="q4" style="width:200px; color: black;">
            <option value="0">-- Select --</option>
            <option value="1">RAM</option>
            <option value="2">Default Speakers</option>
            <option value="3">VGA</option>
        </select>
    </div>

    <label id="errorq4" style="font-size: 15px; top:510px;left:-565px;" class="col-xs-3 col-xs-offset-2 "></label>

    <div  class="col-xs-1 col-xs-offset-11" style="top:550px;">
        <button id="submitButton" class="btn btn-default" style="background-color: #2a6496; color: #ffffff;" >Submit</button>
    </div>

        <div  class="col-xs-1 col-xs-offset-11 " style="top:530px; ">
            <button id="nextButton" name="nextButton" class="btn btn-default hidden" style="background-color: #2a6496; color: #ffffff;" >Next</button>
        </div>
        </form>
</div>



</body>
<script src="assets/js/jquery.min.js"></script>
<script>
    function alertMessage(){

        $( "#targetDiv" ).slideDown( "fast", function() {
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
        var val2 = document.getElementById("q2").value;
        if (!selectValidationOnSubmit(val2, "errorq2","q2box")) {
            errors.push("errorq2");
        }

        var val3 = document.getElementById("q3").value;
        if (!selectValidationOnSubmit(val3, "errorq3","q3box")) {
            errors.push("errorq3");
        }

        var val4 = document.getElementById("q4").value;
        if (!selectValidationOnSubmit(val4, "errorq4","q4box")) {
            errors.push("errorq4");
        }


        if (errors.length > 0) {
            return false;
        } else {
            var errors1 = [];
            if(val1 == 2){
                correctAnswer("q1box");
            }else {
                wrongAnswer("q1box","errorq1");
                document.getElementById("errorq1").innerHTML = "Correct Answer : Power Supply Unit";
               errors1.push("notok");
            }

            if(val2 == 3){
                correctAnswer("q2box");
            }else {
                wrongAnswer("q2box","errorq2");
                document.getElementById("errorq2").innerHTML = "Correct Answer : Cooling Fan";
                errors1.push("notok");
            }

            if(val3 == 1){
                correctAnswer("q3box");
            }else {
                wrongAnswer("q3box","errorq3");
                document.getElementById("errorq3").style.top = "430px";
                document.getElementById("errorq3").innerHTML = "Correct Answer : Processor Cooling Fan";
                errors1.push("notok");
            }

            if(val4 == 2){
                correctAnswer("q4box");
            }else {
                wrongAnswer("q4box","errorq4");
                document.getElementById("errorq4").style.top = "520px";
                document.getElementById("errorq4").innerHTML = "Correct Answer : Default Speakers";
                errors1.push("notok");
            }

            if(errors1.length >0){
                $( "#submitButton" ).addClass( "hidden" );
                $( "#nextButton" ).removeClass( "hidden" );
                return false;
            }else{
                $( "#submitButton" ).addClass( "hidden" );
                $( "#nextButton" ).removeClass( "hidden" );
                return false;

            }
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
            document.getElementById(element).style.borderColor = "black";
            return true;
        }
    }


    function correctAnswer(element){
        document.getElementById(element).style.borderColor = "green";



    }

    function wrongAnswer(element,errorLbl){
        document.getElementById(element).style.borderColor = "red";
        document.getElementById(errorLbl).style.color = "#808080";


    }
</script>



</html>