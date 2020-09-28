<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$hometeam =$_REQUEST['name'];
$scorehome = $_REQUEST['email'];
$awayteam = $_REQUEST['subject'];
$scoreaway = $_REQUEST['message'];
$ins_query="insert into contact (`date`,`name`,`email`,`subject`,`message`) values ('$trn_date','$hometeam','$scorehome','$awayteam','$scoreaway')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "Message sent Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>KHF</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="register/main.css">
<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">body{background-color: #2f3542;} img{border-radius: 50%;} label,p{color: white;}</style>
<div class="heading" ><img src="images\logo\khf1.jpg" alt="images/khflogo" height="200" width="200">Kenya Handball Federation</div>	
<a href='home2.php' class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Home</a>
<div>
	<div class="header">
		<h1>Contact Us</h1>
  <style type="text/css">
    .header{
      background-color:blue;
      min-height: 70px;
    }
</style>
</div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><label>Name&nbsp&nbsp</label><input type="text" name="name" placeholder="Name" required /></p><br>
<p><label>Email&nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="email" name="email" placeholder="Email" required /></p><br>
<p><label>Subject&nbsp&nbsp</label><input type="text" name="subject" placeholder="Subject" required /></p><br>
<p><label>Message&nbsp&nbsp</label><textarea name="message" rows="10" cols="30"  placeholder="Type text here...">
</textarea></p>
<p><input class="btn btn-primary" name="submit" type="submit" value="Submit">

</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<br /><br /><br /><br />


</div>
<footer class="footer-distributed">

      <div class="footer-left">
         <img src="images\logo\khf1.jpg" alt="images/khflogo" height="200" width="200">
        
        <p class="footer-links">
          <a href="about.php">About</a>
          
          <a href="contact.php">Contact</a>
        </p>

        <p class="footer-company-name">Kenya Handball Federation &#169; 2020</p>
      </div>

      <div class="footer-center">

        <div>
          <img src="imForSite/location.png" alt="location icon"  height="20" width="20">
          <p>Lang`ata Rd, Nyayo Stadium Handball Court </p>
        </div>

        <div>
          <img src="imForSite/call.png" alt="smartphone logo"  height="20" width="20">
          <p>+254 701694441</p>
        </div>

        <div>
          <img src="imForSite/email.jpg" alt="gmail logo" height="20" width="20" >
          <p><a href="mailto:khfkenya1@gmail.com">khfkenya1@gmail.com.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>Competitions we Are Associated With:</span>
            
              <ul type="Square">
                <li>Kenya Universities Sports Assocciation</li>
                <li>Kenya Handball Federation Handball National League </li>
                <li>Kenya Secondary Schools Sports Association</li>
              </ul>
            
        </p>

        <div class="footer-icons">

          <a href="https://web.facebook.com/kenyahandballfederation" target="_blank"><img src="imForSite/facebook.png" alt="facebook logo" target="_blank" height="20" width="20"></a>
          <a href="https://twitter.com/handball_kenya" target="_blank"><img src="imForSite/twitter-logo.png" alt="twitter logo"  height="20" width="20"></a>
          <a href="https://api.whatsapp.com/send?phone=254701694441" target="_blank"><img src="imForSite/whatsapp-logo.png" alt="whatsapp" height="20" width="20"></a>
          <a href="https://www.instagram.com/kenyahandball/" target="_blank"><img src="imForSite/instagram.png" alt="instagram logo" height="20" width="20" ></a>
          <a href="mailto: khfkenya1@gmail.com" target="_blank"><img src="imForSite/email.jpg" alt="gmail logo" height="20" width="20" ></a>
        </div>

      </div>

    </footer>
</body>
</html>
