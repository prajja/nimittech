 <?php 
            $name=$_POST['name'];
            $mobile=$_POST['mobile'];
           $email=$_POST['email'];
           $message=$_POST['message'];  
            
       $message='<div style="color:#333;font-size: 14px;">
    
    <table border="1" style="border-collapse:collapse; border:thin dotted #CCC; padding:5px; color:#333; font-size:13px;">
      <tr>
        <td><h3>Client Information</h3></td>    
      </tr>

      <tr><td> Name</td>    <td>'. $name .'</td></tr>
      <tr><td> Mobile</td>    <td>'. $mobile .'</td></tr>
      <tr><td> Email</td>    <td>'. $email .'</td></tr>
      <tr><td> Message</td>    <td>'. $message .'</td></tr>
    </table>
    </div>';  
    
     $to= "nimittechnologiespvtltd@gmail.com";
        $subject="Nimit Technologies Enquery";  
        /*$headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers.= "From:Nimittech\r\n"; ///////changes will be done
         $headers .="NimitTech \r\n";
       */
       
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <webmaster@example.com>' . "\r\n";
        $headers .= 'Cc: myboss@example.com' . "\r\n";


       if($name!='' && $email!='' && $mobile!='' && $message!='')
       {
            @mail($to,$subject,$message,$headers); 
            
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Our Team Contact Soon !!');
    window.location.href='https://www.nimittech.com';
    </script>");
       }
          
              
       
    
    ?>