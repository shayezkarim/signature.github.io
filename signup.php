

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="author" content="haran" />
  <meta name="generator" content="author" />

  <!-- Navigational metadata for large websites (an accessibility feature): -->
  <link rel="stylesheet" type="text/css" href="sinorca-screen.css" media="screen" title="Sinorca (screen)" />
  <link rel="stylesheet alternative" type="text/css" href="sinorca-screen-alt.css" media="screen" title="Sinorca (alternative)" />
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
          </a>  <a href="./index.php"></a> </div>
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
      <h2>Register</h2>
    </div>
    <form method="post" action="signup.php">
      <div class="input-group">
        <input type="text" id="name" name="name" placeholder="Insert Name" required>
      </div>
      <div class="input-group">
        <input type="text" name="username" id="username" placeholder="Insert Username" required>
      </div>
      <div class="input-group">
        <input type="email" name="email" id="email" placeholder="Insert Email" required>
      </div>
      <div class="input-group">
        <input type="text" name="institute" , id="institute" placeholder="Insert institute name">
      </div>


      <div class="input-group">
        <label>Position</label>
        <select name="position" class="select" name="position" id="position">
          <option value="researcher">Researcher</option>
          <option value="gs">Graduate Student</option>
          <option value="ps">PhD Student</option>
          <option value="as">Academic Staff</option>
        </select>
      </div>

      <div class="input-group">
        <input type="password" name="password" placeholder="Create Password" id="password">
      </div>

      <div class="input-group">
        <input type="password" name="password_confirm" placeholder="Re-enter password">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="submit">Sign up</button>
      </div>
      <p>
        Already have an account <a href="login.php">Sign in</a>
      </p>
    </form>
  </div>

  <!-- ##### Footer ##### -->

  <div id="footer">
    <div class="left">
      E-mail:&nbsp;<a href="./index.php" title="Email webmaster">shayezkarimcide@gmail.com</a><br />
      <a href="./index.php" class="doNotPrint">Contact Us</a>
    </div>

    <br class="doNotDisplay doNotPrint" />

    <div class="right">
      
    </div>
  </div>
</body>

</html>

<?php
require("config.php");

// NEW Code
/*
if (isset($_REQUEST['submit'])) {
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $institute = $_REQUEST['institute'];
  $position = $_REQUEST['position'];
  $password = $_REQUEST['password'];
  $username = $_REQUEST['username'];
  // checking empty fields
  if (empty($name) || empty($email) || empty($institute) || empty($position) || empty($password) || empty($username)) {
    if (empty($name)) {
      echo "<font color='red'> field is empty.</font><br>";
    }
    if (empty($email)) {
      echo "<font color='red'>field is empty.</font><br>";
    }
    if (empty($institute)) {
      echo "<font color='red'>field is empty.</font><br>";
    }
    if (empty($position)) {
      echo "<font color='red'>field is empty.</font><br>";
    }
    if (empty($password)) {
      echo "<font color='red'>field is empty.</font><br>";
    }
    if (empty($username)) {
      echo "<font color='red'>field is empty.</font><br>";
    }
    //link to the previous page
    echo "<br><a href='login.php'>Go Back</a>";
  } else {
    // if all the fields are filled (not empty)             
    //insert data to database
    $sql = mysqli_query($conn, "INSERT INTO user (name, position,username,password,email) VALUES ('$name', '$position','$username','$password', '$email')");


    //display success message
    echo "<font color='green'>Data added successfully.</font>";
  }
}
*/
if (!isset($_POST['name'], $_POST['email'], $_POST['institute'],$_POST['position'],$_POST['password'],$_POST['username'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['institute'])||empty($_POST['position'])||empty($_POST['password'])||empty($_POST['username'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
if($_POST['password']!=$_POST['password_confirm']){
	exit('Confirm password doesnt match');
}


// We need to check if the account with that username exists.
if ($stmt = $conn->prepare('SELECT id, password FROM user WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
	} else {
		// Insert new account
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
//$conn->close();

// Username doesnt exists, insert new account
if ($stmt = $conn->prepare('INSERT INTO user (name, position,username,password,email) VALUES (?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sssss', $_POST['name'], $_POST['position'],$_POST['username'], $password, $_POST['email']);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
?>

