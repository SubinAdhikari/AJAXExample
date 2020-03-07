<?php
 include 'app/call.php';
 $state=$_GET['state'];
 

 
 $array=CitiesFetchFunction($conn,$state);

if(isset($array)){
foreach($array as $row => $value){
    foreach($value as $key){
    echo "<option value=$key>$key</option>";
    }
}
}




//  $a1=array('Biratnagar','Dharan','itahari');
//  $a2=array('Birjung','siraha','janakpur');
//  $a3=array('kathamndu','Bhaktapur','lalitpur');
//  $a4=array('Pokhara','Modi','Waling');
//  $a5=array('Arghakhanchi','Banke','Bardiya');
//  $a6=array('Simkot','narayan','Birendanagar');
//  $a7=array('Dhangadi','kailali','Tikapur');

//  if($state=="Prov1"){
// foreach($a1 as $a1){
//     echo "<option value=$a1>$a1</option>";
// }
//  }
// else if($state=="Prov2"){
//     foreach($a2 as $a2){
//         echo "<option value=$a2>$a2</option>";
//     }
// }
// else if($state=="Prov3"){
//     foreach($a3 as $a3){
//         echo "<option value=$a3>$a3</option>";
//     }
// }
// else if($state=="Prov4"){
//     foreach($a4 as $a4){
//         echo "<option value=$a4>$a4</option>";
//     }
// }
// else if($state=="Prov5"){
//     foreach($a5 as $a5){
//         echo "<option value=$a5>$a5</option>";
//     }
// }
// else if($state=="Prov6"){
//     foreach($a6 as $a6){
//         echo "<option value=$a6>$a6</option>";
//     }
// }
// else if($state=="Prov7"){
//     foreach($a7 as $a7){
//         echo "<option value=$a7>$a7</option>";
//     }
// }
// else{
//     echo "<option value=''>First Select State</option>";
// }



?>