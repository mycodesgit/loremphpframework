<?php

if (isset($_POST['btn-update'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $emp_email = $_POST['emp_email'];
    $emp_birthdate = $_POST['emp_birthdate'];
    $emp_age = $_POST['emp_age'];
    $emp_contact = $_POST['emp_contact'];
    $emp_gender = $_POST['emp_gender'];
    $civil_status = $_POST['civil_status'];
    $usertype = $_POST['usertype'];
    $emp_address = $_POST['emp_address'];
    $token = $_GET['token'];

    if (!empty($fname) && !empty($lname) && !empty($username)) {

        $sql = "UPDATE users SET fname=?, mname=?, lname=?, username=?, emp_email=?, emp_birthdate=?, emp_age=?, emp_contact=?, emp_gender=?, civil_status=?, usertype=?, emp_address=? WHERE token=?";

        $stmt = $DB->prepare($sql);
        $stmt->bind_param("ssssssissssss", $fname, $mname, $lname, $username, $emp_email, $emp_birthdate, $emp_age, $emp_contact, $emp_gender, $civil_status, $usertype, $emp_address, $token);

        if($stmt->execute()){
            set_message("<i class='fa fa-check'></i> Employee Updated Successfully",  'success');
        } else {
            set_message("<i class='fa fa-times'></i> Employee Failed to Update" .$DB->error, 'danger');
        }
    }
}

?>
