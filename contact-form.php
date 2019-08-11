<?php
$link['config'] =  "lib/function.php";
if(file_exists($link['config'])){
  include_once('lib/function.php');
}
?>
<?php
    if(isset($_POST['submit'])){
      $fullname = "";
      $email = "";
      $subject = "";
      $feedback = "";
        if(validate_field($_POST['name'])){
          if(validate_field($_POST['email'])){
            if(validate_field($_POST['subject'])){
              if(validate_field($_POST['feedback'])){
                $fullname = mysql_fix_string(trim($_POST['name']));
                $email_sender = mysql_fix_string(trim($_POST['email']));
                $subject = mysql_fix_string(trim($_POST['subject']));
                $feedback = mysql_fix_string(trim($_POST['feedback']));
                  $recipient = "info@etpunimak.edu";
                  $mailheader = "From: $email_sender \r\n";
                   if(mail($recipient, $subject, $formcontent, $mailheader)){
                    location('contact.php?flag=0X001&sen_fig=#*ajsk~");');
                    }else {

                     //echo "Mailer Error: " . $mail->ErrorInfo;
                      location('location: contact.php?flag=0X001&sen_fig=#*ajsk~');
                      exit;
                   }
              }else{
                header("location: contact.php?error_code=0X004&flag=#*ajsk~");
              }
            }else{
              header("location: contact.php?error_code=0X003&flag=#*ajsk~");
            }
          }else{
            header("location: contact.php?error_code=0X002&flag=#*ajsk~");
          }
        }else{
          header("location: contact.php?error_code=0X001&flag=#*ajsk~");
        }
    }else{
      echo "Button not set";
    }
?>
