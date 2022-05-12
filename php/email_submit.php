<html>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

         $to = "maxmcdonough35@gmail.com";
         $subject = $_POST["name"] . "website costomer";
         

         $message = "sent from" . $_POST["email"] ."\r\n";
         $message .= $_POST["message"];
         
         $header = "From:". $_POST['emial'] . "\r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
            echo $to;
            echo $message;
         }else {
            echo "Message could not be sent...";
         }
        }  
    ?>
</body>
</html>