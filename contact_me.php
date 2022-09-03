<?php
if(isset($_POST['submit']))
{
   extract($_POST); 
    $to="anitha13mar@gmail.com"; 
    $strSubject="Pole Star General Enquiry";
    $message =  "<table width='100%' border='1' cellspacing='0' cellpadding='0'>
                <tr>
                <td width='10%' colspan='4' bgcolor='#E31E24' style='padding:10px; color: #fff; font-weight:bold;font-size:24px;'>
                      Enquiry Form</td>
                </tr>
                <tr>
                <td style='padding:5px;font-weight:bold;'>Name </td>
                <td style='padding:5px;'>".$form_name."</td>
                </tr>
                <tr>
                <td style='padding:5px;font-weight:bold;'>Phone number </td>
                <td style='padding:5px;'>".$form_phone."</td>
                </tr>
                <tr>
                <td style='padding:5px;font-weight:bold;'>Email Id</td>
                <td style='padding:5px;'>".$form_email."</td>
                </tr>
                
                
                
               
                
               
                </table>";              
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
    $from = 'anitha13mar@gmail.com'; // a valid address on your domain
    $headers .= "From: $from\r\nReply-to: $email";
    $mail_sent=mail($to, $strSubject, $message, $headers);  
if($mail_sent)
        echo "<script>
        window.location='https://gpsagrilife.com/demo/polestar/thankyou.php';</script>";
    else
        echo "<script>
        window.location='https://gpsagrilife.com/demo/polestar/thankyou.php';</script>";
}
?>
