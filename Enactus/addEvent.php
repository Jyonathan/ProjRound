<?php
include_once 'database.php'; 
function insert_Event($fday,$fEvent,$fTime){
    if ($fday=='Monday'){
        $msql="UPDATE TT set Monday= '$fEvent' where Time='$fTime';";
        return $msql;}
    if ($fday=='Tuesday'){
        $msql="UPDATE TT set Tuesday= '$fEvent' where Time='$fTime';";
        return $msql;}
    if ($fday=='Wednesday'){
        $msql="UPDATE TT set Wednesday= '$fEvent' where Time='$fTime';";
        return $msql;}
    if ($fday=='Thursday'){
        $msql="UPDATE TT set Thursday= '$fEvent' where Time='$fTime';";
        return $msql;}
    if ($fday=='Friday'){
        $msql="UPDATE TT set Friday= '$fEvent' where Time='$fTime';";
        return $msql;}
    if ($fday=='Saturday'){
        $msql="UPDATE TT set Saturday= '$fEvent' where Time='$fTime';";
        return $msql;}
    if ($fday=='Sunday'){
        $msql="UPDATE TT set Sunday= '$fEvent' where Time='$fTime';";
        return $msql;}
    }
$event=$_GET['eName'];
$day=$_GET['Day'];
$sTime=$_GET['sTime'];
$eTime=$_GET['eTime'];
$Time= array('00:00','01:00','02:00','03:00','04:00','05:00','06:00','07:00'
,'08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00'
,'17:00','18:00','19:00','20:00','21:00','22:00','23:00');
$Days= array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
$fSlot=array_search($sTime,$Time);
$lSlot=array_search($eTime,$Time);
    if ($lSlot>= $fSlot){
        $len=$lSlot-$fSlot+1;
        foreach(array_slice($Time,$fSlot,$len) as $tempTime){
            $fsql=insert_Event($day,$event,$tempTime);
            mysqli_query($conn,$fsql);
        }
    }
    else{
        if ($day='Sunday'){
        foreach(array_slice($Time,$fSlot) as $tempTime){
            $fsql=insert_Event('Sunday',$event,$tempTime);
            mysqli_query($conn,$fsql);}
        foreach(array_slice($Time,0,$lSlot+1) as $tempTime){
            $fsql=insert_Event('Monday',$event,$tempTime);
            mysqli_query($conn,$fsql);
        }
    }
        else{
            foreach(array_slice($Time,$fSlot) as $tempTime){
                $fsql=insert_Event($day,$event,$tempTime);
                mysqli_query($conn,$fsql);
            }
            $posDay=array_search($day,$Days) + 1;
            foreach (array_slice($Time,0,$lSlot+1) as $tempTime){
                $fsql=insert_Event($Days[$posDay],$event,$tempTime);
                mysqli_query($conn,$fsql);
            }
        }
    }
header("Location:main.php")
?>