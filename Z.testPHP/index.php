<?php
class CustomException2 extends Exception {
    public function orrorMessage(){
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address.';
        return $errormsg;
    }
}
$email = "someone@example.com";
try {
    if (filter_var($email,FILTER_VALIDATE_EMAIL) === FALSE){
        throw new CustomException2($email);
    }
}
catch (CustomException2 $e){
    echo $e ->orrorMessage();
}
catch (Exception $e){
    echo $e ->getMessage();
}
?>