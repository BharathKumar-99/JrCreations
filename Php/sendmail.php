<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['tel'];
      $mes =$_POST['msg'];
      $sub=$_POST['sub'];
         $to = "bharthblaster@gmail.com";
         
         $subject = $sub;
         
         $message = "$name <br> $email <br> $phone <br> $mes <br> " ;
      
         
         $header = "From:Orders@jr.com \r\n";
        
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>