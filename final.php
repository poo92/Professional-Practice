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
            <div id="title" class="col-sm-offset-3">Thank you!</div>
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
        <br><br>

        <!-- Questionary -->
        <div class="col-lg-offset-1 col-lg-8" id="final-question-container">
	        <form>
	        	<label class="col-xs-12 col-form-label">Specify your location</label>
	        	<div class="form-group">
	        		<br>
					<label class="col-xs-offset-1 col-xs-2 col-form-label">Province</label>
					<div class="col-xs-9">
						<select class="form-control" id="province">
							<option>Central Province</option>
							<option>Eastern Province</option>
							<option>North Central Province</option>
							<option>Northern Province</option>
							<option>North Western Province</option>
							<option>Sabaragamuwa Province</option>
							<option>Southern Province</option>
							<option>Uva Province</option>
							<option>Western Province</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label class="col-xs-offset-1 col-xs-2 col-form-label">District</label>
					<div class="col-xs-9">
						<select class="form-control" id="district">
							<option>Ampara</option>
							<option>Anuradhapura</option>
							<option>Badulla</option>
							<option>Batticaloa</option>
							<option>Colombo</option>
							<option>Galle</option>
							<option>Gampaha</option>
							<option>Hambantota</option>
							<option>Jaffna</option>
							<option>Kalutara</option>
							<option>Kandy</option>
							<option>Kegalle</option>
							<option>Kilinochchi</option>
							<option>Kurunegala</option>
							<option>Mannar</option>
							<option>Matale</option>
							<option>Matara</option>
							<option>Monaragala</option>
							<option>Mullaitivu</option>
							<option>Nuwara Eliya</option>
							<option>Polonnaruwa</option>
							<option>Puttalam</option>
							<option>Ratnapura</option>
							<option>Trincomalee</option>
							<option>Vavuniya</option>
						</select>
					</div>
				</div>
				<br><br>

				<label class="col-xs-12 col-form-label">Some personal information</label>
	        	<div class="form-group">
	        		<br>
					<label class="col-xs-offset-1 col-xs-2 col-form-label">Age group</label>
					<div class="col-xs-9">
						<select class="form-control" id="age">
							<option>below 12</option>
							<option>12 - 18</option>
							<option>18 - 25</option>
							<option>25 - 30</option>
							<option>30 - 35</option>
							<option>35 - 45</option>
							<option>above 45</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="form-group">
	        		<br>
					<label class="col-xs-offset-1 col-xs-2 col-form-label">Education level</label>
					<div class="col-xs-9">
						<select class="form-control" id="education">
							<option>GCE O/L</option>
							<option>GCE A/L</option>
							<option>Diploma</option>
							<option>Degree</option>
							<option>Masters</option>
							<option>Phd</option>
						</select>
					</div>
				</div>
				<br><br>

				<div class="form-group">
					<label for="province" class="col-xs-3 col-form-label">Email address</label>
					<div class="col-xs-9">
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="exampleSelect1" class="col-xs-3 col-form-label">Example select</label>
					<div class="col-xs-9">
						<select class="form-control" id="exampleSelect1">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
        <br>
    </div>

</form>
</body>

<script src="assets/js/jquery.min.js"></script>


</body>
</html>