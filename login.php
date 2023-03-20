<?php
session_start();
include("config.php");
$error = "";
		if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = $_POST['username'];  
		$password = $_POST['password'];  
		$username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from user where username = '$username'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
	
		if(password_verify($password,$row['password'])){
			$_SESSION['login_user'] = $row['name'];
			$_SESSION['user_id'] = $row['id'];
			echo "<script> window.location.href='index.php';</script>";
			//header("location: index.php");
			//echo "Password verified";
		}
            //echo "<h1><center> Login successful </center></h1>";  
			 
         $error = "Your Login Name or Password is invalid";
         
        }else{
			 $error = "Your Login Name or Password is invalid";
		}			
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="author" content="haran" />
  <meta name="generator" content="author" />

  <!-- Navigational metadata for large websites (an accessibility feature): -->
  <link rel="top" href="./index.php" title="Homepage" />
  <link rel="up" href="./index.php" title="Up" />
  <link rel="first" href="./index.php" title="First page" />
  <link rel="previous" href="./index.php" title="Previous page" />
  <link rel="next" href="./index.php" title="Next page" />
  <link rel="last" href="./index.php" title="Last page" />
  <link rel="toc" href="./index.php" title="Table of contents" />
  <link rel="index" href="./index.php" title="Site map" />

  <link rel="stylesheet" type="text/css" href="sinorca-screen.css" media="screen" title="Sinorca (screen)" />
  <link rel="stylesheet alternative" type="text/css" href="sinorca-screen-alt.css" media="screen"
    title="Sinorca (alternative)" />
  <link rel="stylesheet" type="text/css" href="sinorca-print.css" media="print" />
  <link rel="stylesheet" type="text/css" href="style.css">


  <title>Signature Database</title>
  <style type="text/css">
    <!--
    .style1 {
      color: #C1FF64
    }
    -->
  </style>
</head>

<body>
  <!-- For non-visual user agents: -->
  <div id="top"><a href="#main-copy" class="doNotDisplay doNotPrint">Skip to main content.</a></div>

  <!-- ##### Header ##### -->

  <div id="header">
    <div class="superHeader">

      <div class="left"> <span class="doNotDisplay">Related sites:</span> <a href="./index.php">
      </a> <a href="./index.php"></a> </div>
      <div class="right"> <span class="doNotDisplay">More related sites:</span>
      </div>
    </div>

    <div class="midHeader">
      <h1 class="headerTitle">Signature Database</h1>
    </div>

    <div class="subHeader">
      <span class="doNotDisplay">Navigation:</span>
      <a href="./index.php">Home</a> |
      <a href="./index.php" class="highlight">Signature Database</a> |
      <a href="./add_signature.php" class="highlight">Add Signature</a> |
      
    </div>
  </div>

  <!-- ##### Side Bar ##### -->

  <div id="side-bar">
    <div>
      <p class="sideBarTitle"></p>
      <ul>
        <li><a href="./introduction.php">&rsaquo; Introduction</a></li>
        <li><a href="#cross-browser" title="Improved cross-browser compatibility">&rsaquo; About</a></li>
        <li><a href="#stylesheets" title="Modified stylesheets">&rsaquo; Team</a></li>
        <li><a href="#accessibility" title="Improved accessibility">&rsaquo; Contact</a></li>
      </ul>
    </div>

    

    <div class="lighterBackground">
      <p class="sideBarTitle">Brain Connectome</p>
      <span class="sideBarText">
      A brain connectome is a map of the connections between different regions of the brain. It can be represented as a network, with the brain regions represented as nodes and the connections between them represented as edges. The connectome can be used to study how different regions of the brain communicate with each other, and how this communication is affected by various factors such as disease, aging, and environmental influences..
      </span>
      
    </div>

    <div>
      <p class="sideBarTitle">Validation</p>
      <span class="sideBarText">
        Validate the <a href="http://validator.w3.org/check/referer">XHTML</a> and
        <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> of this page.
      </span>
    </div>
  </div>

  <!-- ##### Main Copy ##### -->

  <div id="main-copy" class="table-container">

    <div class="header">
      <h2>Login</h2>
    </div>

    <form method="post" action="">
      <?php echo $error;//include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
      </div>
      <p>
        Craete an account <a href="signup.php">Sign up</a>
      </p>
    </form>
  </div>

  <!-- ##### Footer ##### -->

  <div id="footer">
    <div class="left">
      E-mail:&nbsp;<a href="./index.php" title="Email webmaster">shayezkairmcide@gmail.com</a><br />
      <a href="./index.php" class="doNotPrint">Contact Us</a>
    </div>

    <br class="doNotDisplay doNotPrint" />

    <div class="right">
      
    </div>
  </div>
</body>

</html>