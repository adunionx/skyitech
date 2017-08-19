<?php

/************************************

Script : Adnetwork
Website : http://facebook.com/pranto007

Script is created and provided by Pranto (http://facebook.com/pranto007)
**************************************/
include '../db.php';
include '../functions.php';
include '../mobiled.php';
include 'test.php';

$uid=formget("uid");
$sid=formget("sid");
$activee="<font color='green'>Active</font>";
$test=getCountryFromIP($ip,'code');

$errors=array();

$chSite=mysql_query("SELECT * FROM sites WHERE id='$sid' AND userid='$uid'");
$chSblock=mysql_fetch_array(mysql_query("SELECT * FROM sites WHERE id='$sid'"));

if(empty($sid)){
 $errors[]='Site is Empty!';
}
if(empty($uid)){
 $errors[]='User is Empty!';
}
if(mysql_num_rows($chSite)<1){
 $errors[]='Site Not Found!';
}
if($chSblock["status"]=="BLOCKED"){
 $errors[]='Site is Blocked';
}


if(empty($errors)){
   if($chSblock["adult"] == 1){
  $getAds=mysql_query("SELECT * FROM advertises WHERE status='RUNNING' AND adult='1' AND country LIKE '%$test%' OR country='ALL' ORDER BY rand() LIMIT 0,1");

  $ip=userip();
  $ua=$_SERVER["HTTP_USER_AGENT"];
  $ref=$_SERVER["HTTP_REFERER"];

  while($Ads=mysql_fetch_array($getAds)){

   $AdsOwner=$Ads["userid"];
   $AdsId=$Ads["id"];
   
   if($Ads["spent"]<0.008){
      mysql_query("UPDATE advertises SET status='Paused' WHERE id='$AdsId'");
   }
   else {
      $_SESSION["ip"]=$ip;
      $_SESSION["ua"]=$ua;
      $_SESSION["ref"]=$ref;
      $_SESSION["uid"]=$uid;
      $_SESSION["sid"]=$sid;
      $_SESSION["aid"]=$AdsId;
      
      $rand="".rand(1,9)."".rand(0,9)."".rand(0,9)."".rand(0,9)."".rand(0,9)."".rand(0,9)."";
      
      $_SESSION["hash"]=$rand;
if($chSblock["status"] == BLOCKED){
include 'a.php';
$pr='<font color="red"><b>Sorry Your Site Is Blocked At SparkHost.me</b></font>';
}
if($chSblock["status"] == REJECT){
$pr='<font color="red"><b>Sorry Your Site Is Reject At SparkHost.me</b></font>';
include 'a.php';
}
if($chSblock["status"] == PENDING){
$pr='<font color="red"><b>Your Site Is Pending At SparkHost.me</b></font>';
include 'a.php';
}
if($chSblock["status"] == $activee){
 if (mobile()) {
     if($Ads["type"]=="text"){
      $pr='<a href="http://SparkHost.me/ads/adc.php?s='.$rand.'">'.$Ads["name"].'</a>';
include 'a.php';
      }
      else {
      $pr='<a href="http://SparkHost.me/ads/adc.php?s='.$rand.'"><img src="'.$Ads["name"].'" alt="Please Wait.."/></a></br><a fref="http://earnbuzz.in/cpa_promo.php?type=MainStream&user=madmasti"><font color="red"><b>Sunny Leone+Ranbir Kapor Sex App Download</b></font></a>';
include 'a.php';
}
} else {
   if($Ads["type"]=="text"){
      $pr='<a href="http://earnbuzz.in/cpa_promo.php?type=Adult&user=madmasti"><img src="'.$Ads["name"].'" alt="Please Wait.."/></a></br><a fref="http://earnbuzz.in/cpa_promo.php?type=MainStream&user=madmasti"><font color="red"><b>Sunny Leone+Ranbir Kapor Sex App Download</b></font></a>';
include 'a.php';
      }
      else {
      $pr='<a href="http://earnbuzz.in/cpa_promo.php?type=Adult&user=madmasti"><img src="'.$Ads["name"].'" alt="Please Wait.."/></a></br><a fref="http://earnbuzz.in/cpa_promo.php?type=MainStream&user=madmasti"><font color="red"><b>Sunny Leone+Ranbir Kapor Sex App Download</b></font></a>';
include 'a.php';
}
}
      }
   }
   }

   echo 'document.write(\''.$pr.'\');';
}
}
if($chSblock["adult"] == 0){
  $getAds=mysql_query("SELECT * FROM advertises WHERE status='RUNNING' AND adult='0' AND country LIKE '%$test%' OR country='ALL' ORDER BY rand() LIMIT 0,1");

  $ip=userip();
  $ua=$_SERVER["HTTP_USER_AGENT"];
  $ref=$_SERVER["HTTP_REFERER"];

  while($Ads=mysql_fetch_array($getAds)){

   $AdsOwner=$Ads["userid"];
   $AdsId=$Ads["id"];
      if($Ads["spent"]<0.008){
      mysql_query("UPDATE advertises SET status='Paused' WHERE id='$AdsId'");
   }
   else {
      $_SESSION["ip"]=$ip;
      $_SESSION["ua"]=$ua;
      $_SESSION["ref"]=$ref;
      $_SESSION["uid"]=$uid;
      $_SESSION["sid"]=$sid;
      $_SESSION["aid"]=$AdsId;
      
      $rand="".rand(1,9)."".rand(0,9)."".rand(0,9)."".rand(0,9)."".rand(0,9)."".rand(0,9)."";
      
      $_SESSION["hash"]=$rand;
if($chSblock["status"] == BLOCKED){
$pr='<font color="red"><b>Sorry Your Site Is Blocked At SparkHost.me</b></font>';
include 'na.php';
}
if($chSblock["status"] == REJECT){
$pr='<font color="red"><b>Sorry Your Site Is Reject At SparkHost.me</b></font>';
include 'na.php';
}
if($chSblock["status"] == PENDING){
$pr='<font color="red"><b>Your Site Is Pending At SparkHost.me</b></font>';
include 'na.php';
}
if($chSblock["status"] == $activee){
  if (mobile()) {
     if($Ads["type"]=="text"){
      $pr='<a href="http://SparkHost.me/ads/adc.php?s='.$rand.'">'.$Ads["name"].'</a>';
include 'na.php';
      }
      else {
      $pr='<a href="http://SparkHost.me/ads/adc.php?s='.$rand.'"><img src="'.$Ads["name"].'" alt="Please Wait.."/></a></br><a fref="http://earnbuzz.in/cpa_promo.php?type=MainStream&user=madmasti"><font color="red"><b>Free Internet Browser(Opera Mini) Download</b></font></a>';
include 'na.php';
}
} else {
   if($Ads["type"]=="text"){
      $pr='<a href="http://earnbuzz.in/cpa_promo.php?type=Adult&user=madmasti"><img src="'.$Ads["name"].'" alt="Please Wait.."/></a></br><a fref="http://earnbuzz.in/cpa_promo.php?type=MainStream&user=madmasti"><font color="red"><b>Free Download All Playstore Paid Apps</b></font></a>';
include 'na.php';
      }
      else {
      $pr='<a href="http://earnbuzz.in/cpa_promo.php?type=Adult&user=madmasti"><img src="'.$Ads["name"].'" alt="Please Wait.."/></a></br><a fref="http://earnbuzz.in/cpa_promo.php?type=MainStream&user=madmasti"><font color="red"><b>Free Download All Playstore Paid Apps</b></font></a>';
include 'na.php';
}
}
      }
   }
   }

   echo 'document.write(\''.$pr.'\');';

}
else {

foreach($errors as $error){
echo 'document.write(\''.$error.'\');';
}
}

$date=date("d-m-Y");
$chimp=mysql_query("SELECT * FROM imp WHERE uid='$uid' AND date='$date'");
$chimpc=mysql_fetch_array($chimp);
if(mysql_num_rows($chimp)>0){
$newimp=($chimpc["imp"]+1);
mysql_query("UPDATE imp SET imp='$newimp' WHERE uid='$uid' AND date='$date'");
}
else {
mysql_query("INSERT INTO imp (uid,imp,date) VALUES ('$uid',1,'$date')");
}
header('Content-type: application/js');
?>
