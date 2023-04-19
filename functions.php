<?php
if(isset($_GET['password'])){
    $caratteripassword = $_GET['password'];
};
$letter='abcdefghijklmnopqrstuvwxyz';
    $number='1234567890';
    $special='._/!&';
    $all= $letter . $number . $special;
    $arrayAll = str_split($all);

 function generatePassword($arrayAll, $caratteripassword){
    $password=[];

    for ($i =0; $i< $caratteripassword; $i++){
      $randomnumber= rand(0, count($arrayAll));
      foreach($arrayAll as $key=> $caratteri){
        if ($randomnumber==$key){
            $password[]=$caratteri;
        }
      }
    }
     return $password;
   
}
?>