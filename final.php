<!DOCTYPE html>
<html>

<?php 
	session_start();

	if (isset($_POST['finalSubmit'])) {
		$userid = $_SESSION["userid"];

		$province = $district = $age = $education = $email = "";

		$province = $_POST["province"];
		$district = $_POST["district"];
		$age = $_POST['age'];
		$education = $_POST['education'];
		$email = $_POST['email'];

		require("DBConnection.php");

        $db = DBConnection::getInstance();
        $mysqli = $db->getConnection();

        $lockQuery = "LOCK TABLES user";
        $mysqli->query($lockQuery);

        $insertQuery = "INSERT INTO userdetails (userID, province, district, `age-group`, education, email) VALUES ('$userid', '$province', '$district', '$age', '$education', '$email');";
        $mysqli->query($insertQuery);
        //echo $insertQuery;
        $unlockQuery = "UNLOCK TABLES";
        $mysqli->query($unlockQuery);

        header('Location: index.php');
	}
?>
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
        	<label class="col-xs-12 col-form-label">Specify your location</label>
        	<div class="form-group">
        		<br>
				<label class="col-xs-offset-1 col-xs-4 col-form-label">Province</label>
				<div class="col-xs-7">
					<select class="form-control" id="province" name="province">
						<option value="-1">-- Select --</option>
						<option value="Central Province">Central Province</option>
						<option value="Eastern Province">Eastern Province</option>
						<option value="North Central Province">North Central Province</option>
						<option value="Northern Province">Northern Province</option>
						<option value="North Western Province">North Western Province</option>
						<option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
						<option value="Southern Province">Southern Province</option>
						<option value="Uva Province">Uva Province</option>
						<option value="Western Province">Western Province</option>
					</select>
					<label id="province-error" class="final-error"></label>
				</div>
			</div>
			<br><br>
			<div class="form-group">
				<label class="col-xs-offset-1 col-xs-4 col-form-label">District</label>
				<div class="col-xs-7">
					<select class="form-control" id="district" name="district">
						<option value="-1">-- Select --</option>
						<option value="Ampara">Ampara</option>
						<option value="Anuradhapura">Anuradhapura</option>
						<option value="Badulla">Badulla</option>
						<option value="Batticaloa">Batticaloa</option>
						<option value="Colombo">Colombo</option>
						<option value="Galle">Galle</option>
						<option value="Gampaha">Gampaha</option>
						<option value="Hambantota">Hambantota</option>
						<option value="Jaffna">Jaffna</option>
						<option value="Kalutara">Kalutara</option>
						<option value="Kandy">Kandy</option>
						<option value="Kegalle">Kegalle</option>
						<option value="Kilinochchi">Kilinochchi</option>
						<option value="Kurunegala">Kurunegala</option>
						<option value="Mannar">Mannar</option>
						<option value="Matale">Matale</option>
						<option value="Matara">Matara</option>
						<option value="Monaragala">Monaragala</option>
						<option value="Mullaitivu">Mullaitivu</option>
						<option value="Nuwara Eliya">Nuwara Eliya</option>
						<option value="Polonnaruwa">Polonnaruwa</option>
						<option value="Puttalam">Puttalam</option>
						<option value="Ratnapura">Ratnapura</option>
						<option value="Trincomalee">Trincomalee</option>
						<option value="Vavuniya">Vavuniya</option>
					</select>
					<label id="district-error" class="final-error"></label>
				</div>
			</div>
			<br><br>

			<label class="col-xs-12 col-form-label">Some personal information</label>
        	<div class="form-group">
        		<br>
				<label class="col-xs-offset-1 col-xs-4 col-form-label">Age group</label>
				<div class="col-xs-7">
					<select class="form-control" id="age" name="age">
						<option value="-1">-- Select --</option>
						<option value="below 12">below 12</option>
						<option value="12 - 18">12 - 18</option>
						<option value="18 - 25">18 - 25</option>
						<option value="25 - 30">25 - 30</option>
						<option value="30 - 35">30 - 35</option>
						<option value="35 - 45">35 - 45</option>
						<option value="above 45">above 45</option>
					</select>
					<label id="age-error" class="final-error"></label>
				</div>
			</div>
			<br><br>
			<div class="form-group">
        		<br>
				<label class="col-xs-offset-1 col-xs-4 col-form-label">Highest education level</label>
				<div class="col-xs-7">
					<select class="form-control" id="education" name="education">
						<option value="-1">-- Select --</option>
						<option value="GCE O/L">GCE O/L</option>
						<option value="GCE A/L">GCE A/L</option>
						<option value="Diploma">Diploma</option>
						<option value="Degree">Degree</option>
						<option value="Masters">Masters</option>
						<option value="Phd">Phd</option>
					</select>
					<label id="education-error" class="final-error"></label>
				</div>
			</div>
			<br><br>

			<div class="form-group">
				<br>
				<label class="col-xs-offset-1 col-xs-4 col-form-label">Email address</label>
				<div class="col-xs-7">
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
					<label id="email-error" class="final-error"></label>
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					<br>
					<small><input type="checkbox" id="email-checkbox"> I don't want to share my email.</small>
				</div>
			</div>
			<br>

			<div  id="finalSubmitBox" class="col-lg-3" style="text-align: right; margin-top: 15px; float:right; margin-bottom: 15px;">
                <button id="finalSubmit" name="finalSubmit" type="submit" class="btn btn-default "
                        style="background-color: #2a6496; color: #ffffff;"  onclick="return validate()">
                    Submit
                </button>
            </div>
            <br><br>

		</div>
        <br>
    </div>

</form>
</body>

<script src="assets/js/jquery.min.js"></script>

<script type="text/javascript">
	
	function validate() {
		
        var errors = [];

        var val1 = document.getElementById("province").value;
        if (!selectValidationOnSubmit(val1, "province-error", "province")) {
            errors.push("province");
        }

        var val2 = document.getElementById("district").value;
        if (!selectValidationOnSubmit(val2, "district-error", "district")) {
            errors.push("district");
        }

        var val3 = document.getElementById("age").value;
        if (!selectValidationOnSubmit(val3, "age-error", "age")) {
            errors.push("age");
        }

        var val4 = document.getElementById("education").value;
        if (!selectValidationOnSubmit(val4, "education-error", "education")) {
            errors.push("education");
        }

        if (!document.getElementById("email-checkbox").checked) {
	        var email = document.getElementById("email").value;
	        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	        if (!re.test(email)) {
	            document.getElementById("email-error").innerHTML = "Please select a value";
            	document.getElementById("email").className += " redBox";
            	errors.push("email");
	        } else {
	        	document.getElementById("email-error").innerHTML = "";
            	document.getElementById("email").className = "form-control";
	        }
	    } else {
        	document.getElementById("email-error").innerHTML = "";
        	document.getElementById("email").className = "form-control";
        }

        if (errors.length > 0) {
            return false;
        } else {
            return true;
        }
    }

    function selectValidationOnSubmit(val, errorLbl, element) {
        if (val == "-1") {
            document.getElementById(errorLbl).innerHTML = "Please select a value";
            document.getElementById(element).className += " redBox";
            return false;
        } else {
            document.getElementById(errorLbl).innerHTML = "";
            document.getElementById(element).className = "form-control";
            return true;
        }
    }
</script>

</body>
</html>