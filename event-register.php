<?php 
if(isset($_POST["register"]))
{
  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $age=$_POST["age"];
  $dob=$_POST["dob"];
  $gender=$_POST["gender"];
  $parent=$_POST["parent"];
  $email=$_POST["email"];
  $whatsappno=$_POST["whatsappno"];
  $city = $_POST["city"];
  $to = "hillorganization85@gmail.com";
  $subject="Trishion Fashion Show Registration";
   //$to = "sethu.spiketechnologies@gmail.com";
    $headers = 'From: '.$email."\r\n";
    $headers .= "Organization: Hill Charity Organization\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
    $headers.= 'Content-Type: text/html; charset=ISO-8859-1' . " \r\n";
    $body='<html>
        <head>
        <style> table, td, th  { border: 1px solid black;} table { border-collapse: collapse; width: 40%; } th { height: 50px; }</style>
        </head>
        <body>
        <p>Hi! you received a mail from a site visitor</p>
        <table>
        <tr> <td>First name </td> <td>'.$firstname.'</td> </tr>
        <tr> <td>Last name </td> <td>'.$lastname.'</td> </tr>
        <tr> <td>Age </td> <td>'.$age.'</td> </tr>
        <tr> <td>Date of Birth</td> <td>'.$dob.'</td> </tr>
        <tr> <td>Gender </td> <td>'.$gender.'</td> </tr>
        <tr> <td>Parent </td> <td>'.$parent.'</td> </tr>
        <tr> <td>Email </td> <td>'.$email.'</td> </tr>
        <tr> <td>whatsapp Number </td> <td>'.$whatsappno.'</td> </tr>
        <tr> <td>City </td> <td>'.$city.'</td> </tr>
        </table>
        </body>
       </html>';
        if(mail($to,$subject,$body,$headers))
        {
        ?>
            <script language="javascript" type="text/javascript">
            alert('Thank you for registration. We will contact you shortly.');
            window.location = 'https://imjo.in/Ap7hwc';
            </script>
        <?php
        }
        else
        {
        ?>
        <script language="javascript" type="text/javascript">
        alert('Message failed. Please, send an email to hillorganization85@gmail.com');
        window.location = 'fashion-show-register.html';
        </script>
        <?php
        }
}
?>