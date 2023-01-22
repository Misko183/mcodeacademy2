$fname = "jano";
         $lname = "cucicek";
         $email = "AHOJKYZAVINACjanko.sk";
         $phone = "045894646";
         $subject = "subject";
         $message = "spr8va";
         $from = "no-reply@mcodeacademy.sk";

         $mailTo =  $row['email'];
         $headers = "From: ".$from;
         $txt =  "Email od: ".$email."\n"."Meno a Priezvisko: ".$fname." ".$lname."\n"."Tel. číslo: ".$phone."\n\n\n\n"."Správa: "."\n\n".$message;


         mail($mailTo, $subject, $txt, $headers);