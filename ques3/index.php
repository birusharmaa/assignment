<?php
    $var = substr(time(),9,2)."-454@g4$43njkasfyeq7eqeqjeqe$%^&&$@!DGSFKJSFSAFSFMASOFNAJFNASUIFBSAFBSYFBFASFHJBASJDJADHADAHJdADYGAgheqetq76eq5eqeq6etq7662425462742642472482424";
    $var2 = substr(time(),8,2)."-454@g4$43njkasfyeq7eqeqjeqe$%^&&$@!DGSFKJSFSAFSFMASOFNAJFNASUIFBSAFBSYFBFASFHJBASJDJADHADAHJdADYGAgheqetq76eq5eqeq6etq7662425462742642472482424";
    $var3 = substr(time(),7,3)."-454@g4$43njkasfyeq7eqeqjeqe$%^&&$@!DGSFKJSFSAFSFMASOFNAJFNASUIFBSAFBSYFBFASFHJBASJDJADHADAHJdADYGAgheqetq76eq5eqeq6etq7662425462742642472482424";
    function fun1($i, $var){    
        return $var[$i];
    }
    function fun2($i, $var){    
        return $var[$i];
    }
    function fun3($i, $var){    
        return $var[$i];
    }

    function myFinal($i, $var, $var2, $var3){
        return fun1($i,$var).fun2($i, $var2).fun3($i,$var3).fun1($i,$var).fun2($i, $var2).fun3($i,$var3);
    }
    
    for($i=1; $i<=50; $i++){
        $final[] = myFinal($i, $var, $var2, $var3);
    }
    echo "<h4>Ques3:- Write a function to return 50 random numbers. Do not use any predefined PHP functions e.g. rand, mt_rand etc.</>";
    echo "<h4>Ans3:- </h4>";
    echo "<pre>";
    print_r($final);
    
?>