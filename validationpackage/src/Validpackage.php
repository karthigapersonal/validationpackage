<?php

namespace Obspackage\Optisolvalidationpackage;

class Validpackage
{

    /** 
    * Email validation, user calling function
    **/
    public function emailvalidate(String $email) {
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status =2;
            $message = $email." is not a valid email address";
        }
       else if($this->domainExists($email)) {
            $status = 1;
            $message = "DNS available. ".$email." is a valid email";
        }       
        else {
            $status =3;
            $message =  "DNS not available. ".$email." is invalid email";
        }
        if($status == 1) {
           $status =true;
        } else {
            $status =false;
        }
        $arrayData = array(
            'status'  => $status,
            'message'=>$message);
        return $arrayData;
    }
    /** 
    * 
    **/
    public function domainExists($email, $record = 'MX')    {
        list($user, $domain) = explode('@', $email);
        return checkdnsrr($domain, $record);
    }

    /**
    ** Row validation
    **
    */
    public function rowvalidation($attr) {
            $error = 0;;
            $aToUpdate = [];
            $emptyProd = [];
            $status = false;
            if(is_array($attr) && count($attr)) {
                for($i=0; $i < count($attr); $i++) {
                    if($attr[$i] == "") {
                        $emptyProd[] = $i;
                        $error++;
                    }
                }
                if(!$error) {
                    $status = true;
                }
            }
            $arrayData = array(
                'status'  => $status,
                'data'=>$emptyProd);
            return $arrayData;
    }

}