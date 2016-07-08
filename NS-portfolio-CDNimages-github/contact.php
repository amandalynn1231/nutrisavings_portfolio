<?php 
if(isset($_POST['submit'])){
    $to = "amandalynn1231@gmail.com"; // this is your Email address
    $from = $_POST['info@nutrisavings.com']; // this is the sender's Email address
    $name = $_POST['requester'];
    $subject = "Request Form Submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " requested the following:" . "\n\n" . $_POST['message'];
    // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


