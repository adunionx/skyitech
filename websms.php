<?php header("Content-type: text/html");
    $servername = "localhost";
    $username = "bingloft_sms";
    $password = "mysms@321";
    $dbname = "bingloft_sms";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // sql to create table
    $sql = "CREATE TABLE websms (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    mobile VARCHAR(30) NOT NULL,
    body VARCHAR(1000) NOT NULL,
   delivery int(11) NOT NULL default 0 ,
    time TIMESTAMP
    )";
    
    if (mysqli_query($conn, $sql)) {} 
    
if ( isset($_GET['websms']) ) {
$res=mysqli_query($conn,"SELECT mobile, body, id FROM websms WHERE delivery=0 order by id ASC LIMIT 1 ");
   $sms=mysqli_fetch_array($res); 
$count = mysqli_num_rows($res); 
//here send messege in app
if($count==1){echo"$sms[mobile]:$sms[body]"; $update=mysqli_query($conn,"UPDATE websms SET delivery =1 WHERE id = '$sms[id]' LIMIT 1");} }else{ 
 


echo '<?xml version="1.0" encoding="utf-8"?>';?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">

 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:lang="en">
<head><title>BingLoft.Com - SMS System</title>


 	
</head>
<body>
<style type="text/css"> body{border: 0px #32b6ce solid; margin: 0px 0px 0px 0px; padding: 0px; font-size: 18px; font-family: Times New Roman, Verdana, Arial, Helvetica, sans-serif; background-color:#cccccc; color: #000000; min-width:100%;} 
.err {background: #e41b17; color:#ffffff; border: 1px solid #e41b17; line-height:
1.3em; margin: 4px;
padding: 5px; position:
relative; text-align: left;
border-radius: 4px;}
.err:after, .err:before {bottom: 100%;
border: solid transparent;
content: " "; height: 0;
width: 0; position: absolute;
pointer-events: none; }
.err:after {border-
color: transparent
transparent #e41b17
transparent; border-style:
solid; border-width: 10px;
height: 0; width: 0; position:
absolute; top: -19px; left:
10px; } .err:before
{border-color: transparent
transparent #e41b17
transparent; border-style:
solid; border-width: 10px;
height: 0; width: 0; position:
absolute; top: -21px; left:
10px;} 
.msg{color: #4CC417; text-align: center;
border: 1px solid #7FE817;
background-color: #ffffff;
margin: 3px; padding: 5px
5px 5px; border-
radius:4px;} .status{ padding: 5px 5px 5px 8px; background: #f4f4f4 url(/images/bgr.png) repeat-x top; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc;} </style>
<?php
 function textinput($str)
{


 $text = trim($str);
  $text = strip_tags($text);
  $text = htmlspecialchars($text);
 return $text ;  
  
}
 if ( isset($_POST['send']) ) {
  
  // clean user inputs to prevent sql injections
  $phone = textinput($_POST['number']);
  
  
  $body = textinput($_POST['body']);
  
  
  
  
  // basic name validation
  if (empty($phone)) {
   $error = true;
   $phoneError = "invaild phone";
  } else if (strlen($phone) < 5) {
   $error = true;
   $phoneError = "invaild phone";
  } 
 if (empty($body)) {
   $error = true;
   $bodyError = "message too short";
  } 
  

  // if there's no error, continue to signup
  if( !$error ) {
   
   $query = "INSERT INTO websms(mobile,body) VALUES('$phone','$body')";
   if (mysqli_query($conn, $query)) {
  $suc = true;
   $msg = "message delivery successful ";


}

}
}
    mysqli_close($conn);
    ?><div class="status"><b>Send message from internet</b>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
     <?php
   if ( isset($suc) ) {  echo'<div class="msg">'.$msg.' </div>'; }?>
             
             <br>
                
      
        <input type="text" name="number" class="form-control" placeholder="mobile number">
        
		  <?php
   if ( isset($phoneError) ) {  echo'<div class="err">'.$phoneError.' </div>'; }?>
      <br/>
	    <b>Message:</b>   <br/>
  <textarea name="body">
</textarea>
        
		  <?php
   if ( isset($bodyError) ) {  echo'<div class="err">'.$bodyError.' </div>'; }?>
      <br/>
	    
 <button type="submit" name="send">Send</button></div> </body>
</html>
<?php } ?>

