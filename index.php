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
<!-- Header -->
<div style="background-color: #00b3b3; height: 75px;">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height: 65px;">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="padding: 10px 15px 0px; height: 46px;" >PC<strong style="color : #009b83; ">Know</strong></a>
        </div>
         
        <ul class="nav navbar-right top-nav" >
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
    </nav>
</div>
<!-- header end -->

<form role="form" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >

    <!-- Step 1 content -->
    <div id="step1" style="display: block;">
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

        <!-- video -->
        <div class="col-xs-12" style="text-align:center;">
            <iframe width="560" height="315"  style="border:1px solid black;" st src="https://www.youtube.com/embed/rH5RSR5rb4w" frameborder="0" allowfullscreen ></iframe>
        </div>
        <br><br>

        <!-- Arrow -->
        <div class="col-xs-12" style="text-align:center;">
        <img id="goImage" src="assets/img/arrow.png" onclick="return(alertMessage());">
        </div>

        <!-- Questionary -->
        <div id="targetDiv" class="col-xs-12" style="height: 600px; display: none;" >

            <div  id="imageDiv" class="image container">
                <img src="assets/img/q1/cpu-first-look.png" class="full-cpu" id="full">
                <img src="assets/img/q1/processer-fan.png" class="component processor" id="pro">
                <img src="assets/img/q1/power-supply.png" class="component powersupply" id="powersupply">
                <img src="assets/img/q1/cooling-fan.png" class="component fan" id="fan">
                <img src="assets/img/q1/speeker.png" class="component speeker" id="speeker">
            </div>

            <div style="position: absolute; top: 96px; left: 244px;">
        	    <div id="q1box" class="question-box" style="">
        	        <select id="q1" style="width:200px; color: black;">
        	            <option value="0">-- Select --</option>
        	            <option value="1">RAM</option>
        	            <option value="2">Power Supply Unit</option>
        	            <option value="3">VGA</option>
        	        </select>
        	    </div>
        	    <label id="errorq1" style="font-size: 15px; "></label>
        	</div>

        	<div style="position: absolute; top: 254px; left: 218px;">
        	    <div id="q2box" class="question-box">
        	        <select id="q2" style="width:200px; color: black;">
        	            <option value="0">-- Select --</option>
        	            <option value="1">RAM</option>
        	            <option value="2">Processor Cooling Fan </option>
        	            <option value="3">Cooling Fan</option>
        	        </select>
        	    </div>
        	    <label id="errorq2" style="font-size: 15px;"></label>
        	</div>
        	
        	<div style="position: absolute; top: 372px; left: 231px;">
        	    <div id="q3box" class="question-box">
        	        <select id="q3" style="width:200px; color: black;">
        	            <option value="0">-- Select --</option>
        	            <option value="1">Processor Cooling Fan</option>
        	            <option value="2">Processor</option>
        	            <option value="3">Cooling Fan</option>
        	        </select>
        	    </div>
        	    <label id="errorq3" style="font-size: 15px;"></label>
        	</div>

        	<div style="position: absolute; top: 467px; left: 251px;">
        	    <div id="q4box" class="question-box">
        	        <select id="q4" style="width:200px; color: black;">
        	            <option value="0">-- Select --</option>
        	            <option value="1">RAM</option>
        	            <option value="2">Default Speakers</option>
        	            <option value="3">VGA</option>
        	        </select>
        	    </div>
        	    <label id="errorq4" style="font-size: 15px;"></label>
        	</div>

            <div class="col-xs-12" style="top:525px; text-align: right;">
                <button class="btn btn-default" style="background-color: #2a6496; color: #ffffff;" id="submitButton1" onclick="return(validateForm());">Submit</button>
            </div>

            <div  class="col-xs-12" style="top: 525px; text-align: right;">
                <button id="nextButton1" name="nextButton1" class="btn btn-default hidden" style="background-color: #2a6496; color: #ffffff;" onclick="return(nextButton1Function());">Next</button>
            </div>
            </form>
        </div>
    </div>

    <!-- Ste 2 content -->
    <div id="step2" style="display: none;">
        <div>
            <h3 class="col-xs-3  col-xs-offset-5  homeIntroductionHrader">Phase 2</h3>

            <p class="col-xs-10 col-xs-offset-1 homeIntroductionParagraph">poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... poornima... 
                Let's begin learning with watching this video.
            </p>
        </div>
        <br>

        <!-- video -->
        <div class="col-xs-12" style="text-align:center;">
            <iframe width="560" height="315"  style="border:1px solid black;" st src="https://www.youtube.com/embed/voHZvhBrYJo" frameborder="0" allowfullscreen ></iframe>
        </div>
        <br><br>

        <!-- Arrow -->
        <div class="col-xs-12" style="text-align:center;">
        <img id="goImage" src="assets/img/arrow.png" onclick="return(alertMessage());">
        </div>
    </div>

    <!-- Ste 3 content -->
    <div id="step3"></div>

    <!-- Ste 4 content -->
    <div id="step4"></div>

</form>
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
                document.getElementById("errorq3").innerHTML = "Correct Answer : Processor Cooling Fan";
                errors1.push("notok");
            }

            if(val4 == 2){
                correctAnswer("q4box");
            }else {
                wrongAnswer("q4box","errorq4");
                document.getElementById("errorq4").innerHTML = "Correct Answer : Default Speakers";
                errors1.push("notok");
            }

            if(errors1.length >0){
                $( "#submitButton1" ).addClass( "hidden" );
                $( "#nextButton1" ).removeClass( "hidden" );
                return false;
            }else{
                $( "#submitButton1" ).addClass( "hidden" );
                $( "#nextButton1" ).removeClass( "hidden" );
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
            return true;
        }
    }

    function correctAnswer(element){
        document.getElementById(element).className += " greenBox";
    }

    function wrongAnswer(element,errorLbl){
        document.getElementById(element).className += " redBox";
    }

    function nextButton1Function(){
        document.getElementById("step1").style.display = "none";
        document.getElementById("step2").style.display = "block";
        return false;
    }
</script>



</html>