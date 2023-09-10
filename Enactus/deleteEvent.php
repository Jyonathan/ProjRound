<?php
include_once 'database.php';
$eDelName=$_GET['eDelName'];
function delEvent($dayNum,$DelName){
    if ($dayNum==1){
    $ksql="UPDATE TT set Monday=NULL where Monday='$DelName';";
    }elseif ($dayNum==2){
    $ksql="UPDATE TT set Tuesday=NULL where Tuesday='$DelName';";
    }elseif ($dayNum==3){
    $ksql="UPDATE TT set Wednesday=NULL where Wednesday='$DelName';";
    } else if ($dayNum==4){
    $ksql="UPDATE TT set Thursday=NULL where Thursday='$DelName';";
    }else if ($dayNum==5){
    $ksql="UPDATE TT set Friday=NULL where Friday='$DelName';";
    }else if ($dayNum==6){
    $ksql="UPDATE TT set Saturday=NULL where Saturday='$DelName';";
    }else{
    $ksql="UPDATE TT set Sunday=NULL where Sunday='$DelName';";
    }
    return $ksql;}
for ($x=1;$x<8;$x++){
    $dSql=delEvent($x,$eDelName);
    mysqli_query($conn,$dSql);
}
header("Location:main.php")
?>