<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Home</title>


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mainCSS.css" rel="stylesheet">


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

<div id="targetDiv" class="col-xs-4 col-xs-offset-5" style="height: 500px; background-color: #00b3ff; display: none;" >

</div>



</body>
<script src="assets/js/jquery.min.js"></script>
<script>
    function alertMessage(){

        $( "#targetDiv" ).slideDown( "slow", function() {
            $('html, body').animate({
                scrollTop: $("#targetDiv").offset().top
            }, 3000);
        });

        e.preventDefault();
        e.stopPropagation();
    }
</script>




</html>