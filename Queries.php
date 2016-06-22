<?php
function insertDatabase($bloodType ,$city){
    require("DBConnection.php");

    $db = Database::getInstance();
    $mysqli = $db->getConnection();

    $searchBloodDonorQuery ="SELECT fNAme,lName,email,nic,contact,birthday,b.donatedBefore,b.donationPeriod,gender FROM donor d ,blooddonor b WHERE d.donorTypeID='1' or d.donorTypeID='3' and b.bloodTypeID = '$bloodType' and d.donorID = b.donorID and d.city='$city'";

    $bloodDonorList = $mysqli->query($searchBloodDonorQuery);
    $bloodDonorListArray = mysqli_fetch_all($bloodDonorList);


    return $bloodDonorListArray;

}