<?php 
function mail() {
    $action=$_REQUEST['action']; 
    if ($action=="")    /* display the contact form */ 
        { 
        echo "A problem has occured, please send an email directly";
        return
        }  
    else                /* send the submitted data */ 
        { 
        $name=$_REQUEST['name']; 
        $email=$_REQUEST['email']; 
        $subject_sent = $_REQUEST['email'];
        $message=$_REQUEST['message']; 
        if (($name=="")||($email=="")||($message=="")||($message=="")) 
            { 
            echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
            return "A problem has occured, please send an email directly";
            } 
        else{         
            $from="From: $name<$email>\r\nReturn-path: $email"; 
            $subject="$subject_sent - Message sent using your contact form"; 
            mail("contact@ravivrach.com", $subject, $message, $from); 
            echo "Email sent!"; 
            return "OK";
            } 
        }
    }
    mail();
?> 