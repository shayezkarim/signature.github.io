<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="author" content="haran" />
  <meta name="generator" content="author" />

  <!-- Navigational metadata for large websites (an accessibility feature): -->
  <link rel="stylesheet" type="text/css" href="sinorca-screen.css" media="screen" title="Sinorca (screen)" />
  <link rel="stylesheet alternative" type="text/css" href="sinorca-screen-alt.css" media="screen"
    title="Sinorca (alternative)" />
  <link rel="stylesheet" type="text/css" href="sinorca-print.css" media="print" />

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

      <div class="left"> <span class="doNotDisplay">Related sites:</span> <a href="./index.php"></a>  <a href="./index.php"></a> </div>
      <div class="right"> <span class="doNotDisplay">More related sites:</span>
	  <?php if(!isset($_SESSION['login_user'])){ ?>
        <a href="./login.php">Sign In </a> | <a href="./signup.php">Sign Up</a> 
	  <?php } else { ?>
		Welcome to <?php echo $_SESSION['login_user'];?> |
        <a href="./logout.php">Logout </a> 
	  <?php } ?>
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