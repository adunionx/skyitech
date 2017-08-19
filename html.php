<?php

/************************************

Script : Adnetwork
Website : http://facebook.com/pranto007

Script is created and provided by Pranto (http://facebook.com/pranto007)
**************************************/
error_reporting(0);
echo '<title>Free Mobile Downloads Zone</title>';
include '../db.php';
include '../functions.php';
include '../mobiled.php';
include 'test.php';
include 'dev.php';
echo '<link rel="stylesheet" type="text/css" href="http://SparkHost.me/xtremeitech.css" />';

$uid=formget("uid");
$sid=formget("sid");
$test=getCountryFromIP($ip,'code');
$activee="<font color='green'>Active</font>";
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



if(empty($errors)){
if($chSblock["adult"]==1){
$getAds=mysql_query("SELECT * FROM advertises WHERE status='RUNNING' AND adult='1' AND (country LIKE '%$test%' OR country='ALL') AND (device LIKE '%$pabu%' OR device='ALL') ORDER BY rand() LIMIT 0,1");

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

if($Ads["type"]=="text"){
$pr='<a href="http://SparkHost.me/ads/click.php?s='.$rand.'">'.$Ads["name"].'</a>';
}
else {
$pr='<a href="http://SparkHost.me/ads/click.php?s='.$rand.'"><img src="'.$Ads["name"].'" alt="Please Wait.."/></br><strong style="color:red">Click Here..</strong></a>';
}
}
}

echo '<div class="line">Free Sex Download Zone!</div>';
echo '<div class="updates"><a href="http://earnbuzz.in/cpa_promo.php?type=MainStream&user=madmasti"><img src="http://SparkHost.me/app9/h1.jpg" alt=""/></a></div>';
if($chSblock["status"] == BLOCKED){
echo '<div class="updates"><font color="red"><b>Sorry Your Site Is Blocked</b></font></div>';
}
if($chSblock["status"] == REJECT){
echo '<div class="updates"><font color="red"><b>Sorry Your Site Is Reject</b></font></div>';
}
if($chSblock["status"] == PENDING){
echo '<div class="updates"><font color="red"><b>Your Site Is Pending</b></font></div>';
} 
if($chSblock["status"] == $activee){
echo '<div class="updates">'.$pr.'</div>';
echo '<div class="updates"><a href="http://earnbuzz.in/cpa_promo.php?type=Adult&user=madmasti"><img src="http://SparkHost.me/app9/h2.jpg" alt="Please Wait.."/></a></div>';
echo '<div class="updates">'.$pr.'</div>';
}
echo '<div class="updates"><a href="http://earnbuzz.in/cpa_promo.php?type=MainStream&user=madmasti"><img src="http://SparkHost.me/app9/h3.jpg" alt=""/></a></div>';
echo '<div class="updates"><a href="http://earnbuzz.in/cpa_promo.php?type=Adult&user=madmasti"><img src="http://SparkHost.me/adultb.php" alt="Please Wait.."/></a></div>';
}
else {

foreach($errors as $error){
echo $error;
}
}
if($chSblock["adult"]==0){
$getAds=mysql_query("SELECT * FROM advertises WHERE status='RUNNING' AND adult='0' AND (country LIKE '%$test%' OR country='ALL') AND (device LIKE '%$pabu%' OR device='ALL') ORDER BY rand() LIMIT 0,1");

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

if($Ads["type"]=="text"){
$pr='<a href="http://SparkHost.me/ads/click.php?s='.$rand.'">'.$Ads["name"].'</a>';
}
else {
$pr='<a href="http://SparkHost.me/ads/click.php?s='.$rand.'"><img src="'.$Ads["name"].'" alt="Please Wait.."/></br><strong style="color:red">Click Here..</strong></a>';
}
}
}

echo '<div class="line">Free Download Zone!</div>';
echo '<div class="updates"><a href="http"><img src="http://SparkHost.me/banner.php" alt=""/></a></div>';
if($chSblock["status"] == BLOCKED){
echo '<div class="updates"><font color="red"><b>Sorry Your Site Is Blocked</b></font></div>';
}
if($chSblock["status"] == REJECT){
echo '<div class="updates"><font color="red"><b>Sorry Your Site Is Reject</b></font></div>';
}
if($chSblock["status"] == PENDING){
echo '<div class="updates"><font color="red"><b>Your Site Is Pending</b></font></div>';
} 
if($chSblock["status"] == $activee){
echo '<div class="updates"> <a href="http://earnbuzz.in/cpa_promo.php?type=MainStream&user=madmasti"><img src="http://SparkHost.me/banner.php" alt=""/></div>';
echo '<div class="updates">'.$pr.'</div>';
echo '<div class="updates"> <a href="http://earnbuzz.in/cpa_promo.php?type=MainStream&user=madmasti"><img src="http://SparkHost.me/banner.php" alt=""/></a>
</div>';
echo '<div class="updates">'.$pr.'</div>';
}
echo '<div class="updates"> <a href="http://earnbuzz.in/cpa_promo.php?type=Adult&user=madmasti"><img src="http://earnbuzz.in/banner.php" alt=""/></a>
</div>';
echo '<div class="updates"><a href="http://earnbuzz.in/cpa_promo.php?type=Adult&user=madmasti"><img src="http://SparkHost.me/banner.php" alt="Please Wait.."/></a></div>';
}
else {

foreach($errors as $error){
echo $error;
}
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

echo '<div class="line" align="center">Start Earn Money @ SparkHost.Me</b></a></div>';
include 'counter.php';
echo '</head></html>';
?>
