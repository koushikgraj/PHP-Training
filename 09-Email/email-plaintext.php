<?php
$to = 'mishradebendra111@gmail.com';
$subject = 'Project Proposal';
$message = 'Hi Ram, Shall we have further discussion about the project?'; 
$from = 'koushikgraj@yahoo.com';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>