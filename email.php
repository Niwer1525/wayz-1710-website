<?php 
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $subject = "Form submission";
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
        $headers = "From:" . $from;

        mail("EMAIL", $subject, $message, $headers);
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>