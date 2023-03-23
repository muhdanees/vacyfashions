<?php
    if(isset($_POST) && !empty($_POST)){
        $to = 'tsaifi847@gmail.com';
        $headers = "From: ";
        $subject = 'qubzllc.com Query';
        $message = NULL;
        $conerror = false;

        foreach($_POST as $key=>$value){
            $message .= ucwords(trim($key)).': '.trim($value)."\n\n";
        }

        $headers .= $_POST['email'];

        if(@mail($to, $subject, $message, $headers)){
            $conerror = "SUCCESS";
        }else{
            $conerror = "Your message could not be sent to us. Kindly try again.";
        }

        if($conerror == "SUCCESS"){
            echo '<div class="success radius">Thank you for sending your query. We will get back to you shortly.</div>';
        }else{
            echo '<div class="failure radius">'.$conerror.'</div>';
        }
    }
?>