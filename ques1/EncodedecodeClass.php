<?php

class EncodedecodeClass {
 
	function customEncode($str) {
        
        $var = substr(time(),9,2)."-454@g4$43njkasfyeq7eqeqjeqe$%^&&$@!DGSFKJSFSAFSFMASOFNAJFNASUIFBSAFBSYFBFASFHJBASJDJADHADAHJdADYGAgheqetq76eq5eqeq6etq7662425462742642472482424";
        $final = "";
        if(strlen($str)>=$var){
            $var = $var.$var;
        }
        
        for($i=0; $i<strlen($str); $i++){
            $final .= $var[$i].$str[$i];
        }
        return $final;
    }

	function customDecode($str) {
        $final = "";
        $j =0;
		for($i=0; $i<strlen($str); $i++){
            if($j!=0){
                $final .= $str[$i];
                $j =0;
            }else{
                $j++;
            }
        }
        return $final;
	}
 
 
}
?>