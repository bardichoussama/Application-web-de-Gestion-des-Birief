<?php
 
    function logingValidation($formateurs,$inputMail,$inputPass,$mailErreur,$passErreur){
        foreach($formateurs as $formateur){
            $login = new login($formateur["EMAIL"],$formateur["MOT_DE_PASSE"]);
            if($login->mailValidation($inputMail)){
                $mailErreur = false;
                if($login->passValidation($inputPass)){
                    $passErreur = false;
                    return $formateur["ID_FORMATEUR"];
                }
        }
    }

}



?>