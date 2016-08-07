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
            <div id="title" class="col-sm-offset-3">Congratulation!</div>
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
    <!-- Content -->
    <div id="step5" style="display: block;">
        <br>
        <div>
            <p class="col-xs-10 col-xs-offset-1 phase-3-Paragraph">You have successfully completed the PCKnow servey. We thank you for your time and hope that you learned something!
            <br>
            You can help us futher more by giving some personal information.
            <br>
            Thank you!</p>
        </div>
        <br>
    </div>

</form>
</body>

<script src="assets/js/jquery.min.js"></script>

</body>
</html>