<?php
session_start();
include("config.php");
if(!isset($_SESSION['login_user'])){
      echo "<script> window.location.href='login.php';</script>";
      die();
   }
$success="";
if(isset($_POST['submit'])){
		
		$user_id=$_SESSION['user_id'];
		
		$degree_centrality=$_POST['degree_centrality'];
		$betweeness_centrality=$_POST['betweeness_centrality'];
		$path_length=$_POST['path_length'];
		$clustering=$_POST['clustering'];
		$globale_efficiency=$_POST['globale_efficiency'];
		$local_efficiency=$_POST['local_efficiency'];
		$age_max=$_POST['age_max'];
		$age_min=$_POST['age_min'];
		$subject_pool=$_POST['subject_pool'];
		$sample_size=$_POST['sample_size'];
		$subject_gender=$_POST['subject_gender'];
		$subject_medical_history=$_POST['subject_medical_history'];
		$connectivity_matrix=$_POST['connectivity_matrix'];
		$atlas_used=$_POST['atlas_used'];
		$imaging_modality=$_POST['imaging_modality'];
		$scanner=$_POST['scanner'];
		 
		$sql = "insert into raw_data (user_id, connectivity_matrix, atlas_used, imaging_modality, scanner) value('".$user_id."','".$connectivity_matrix."', '".$atlas_used."', '".$imaging_modality."','".$scanner."')";
		
		$result = mysqli_query($conn, $sql);
		if($result)
		{
		    
		    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$raw_data_id = $conn->insert_id;
			
		//	$sql2 = "insert into brain_signature (user_id, raw_data_id, degree_centrality, betweeness_centrality, path_length, clustering, globale_efficiency, local_efficiency, age_max, age_min, subject_pool, sample_size, subject_gender, subject_medical_history) values ('".$user_id."', '".$raw_data_id."', '".$degree_centrality."', '".$betweeness_centrality."', '".$path_length."', '$clustering','".."', '".$local_efficiency."', '".$age_max."', '".$age_min."', '".$subject_pool."', '".$sample_size."', '".$subject_gender."','".$subject_medical_history."')";
			
			$sql2 = "INSERT INTO `brain_signature` (`id`, `user_id`, `raw_data_id`, `degree_centrality`, `betweeness_centrality`, `path_length`, `clustering`, `globale_efficiency`, `local_efficiency`, `age_max`, `age_min`, `subject_pool`, `sample_size`, `subject_gender`, `subject_medical_history`) VALUES (NULL, '$user_id', '$raw_data_id', '$degree_centrality', '$betweeness_centrality', '$path_length', '$clustering', '$globale_efficiency', '$local_efficiency', '$age_max', '$age_max', '$subject_pool', '$sample_size', '$subject_gender', '$subject_medical_history')";
			//var_dump($sql2);die();
			$result = mysqli_query($conn, $sql2);
			echo "<script> window.location.href='index.php?s=1';</script>";
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

            <div class="left"> <span class="doNotDisplay">Related sites:</span> <a href="./index.php"></a>  <a href="./index.php"></a> </div>
            <div class="right"> <span class="doNotDisplay">More related sites:</span>
			Welcome to <?php echo $_SESSION['login_user'];?> |
        <a href="./logout.php">Logout </a> 
      </div>
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

        <div class="header_update">
            <h2>Update</h2>
        </div>
		<div><?php echo $success;?></div>
        <form method="post" action="" class="form_update">
            <div class="table-container2" style="overflow: hidden;">
                <table border="0" height="100%" class="table_update">
                    <tr>
                        <th>Degree Centrality</th>
                    <td>
                        <input type="text" name = "degree_centrality" value="" placeholder="Enter Degree Centrality"
                             size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Betweeness Centrality</th>
                    <td>
                        <input type = "text" name = "betweeness_centrality" value ="" placeholder="Enter Betweeness Centrality"
                             size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Path Length	</th>
                    <td>
                        <input type = "text" name = "path_length" value = "" placeholder="Enter Path Length"
                             size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Clustering	</th>
                    <td>
                        <input type = "text" name ="clustering" value = "" placeholder="Enter Clustering"
                             size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Globale Efficiency</th>
                    <td>
                        <input type = "text" name = "globale_efficiency" value = "" placeholder="Enter Globale Efficiency"
                             size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Local Efficiency</th>
                    <td>
                        <input type = "text" name = "local_efficiency" value = "" placeholder="Enter Local Efficiency"
                             size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Age Max</th>
                    <td>
                        <input type = "text" name = "age_max" value = "" placeholder="Enter Age Max"
                            size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Age Min	</th>
                    <td>
                        <input type = "text" name = "age_min" value = "" placeholder="Enter Age Min"
                             size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Subject Pool</th>
                    <td>
                        <input type = "text" name = "subject_pool" value = "" placeholder="Enter Subject Pool"
                             size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Sample Size</th>
                    <td>
                        <input type = "text" name = "sample_size" value = "" placeholder="Enter Sample Size"
                            required size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Subject Gender</th>
                    <td>
                        <input type = "text" name = "subject_gender" value = "" placeholder="Enter Subject Gende"
                            required size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Subject Medical History	</th>
                    <td>
                        <input type = "text" name = "subject_medical_history" value = "" placeholder="Enter Subject Medical History"
                             size = "30" maxlength = "20" >
                        </td>
                    </tr>

                
                </table>
                <table border="0" height="100%" class="table_update">
                    <tr>
                        <th>Reference</th>
                    <td>
                        <input type = "text" name = "connectivity_matrix" value = "" placeholder="Enter Reference(EXample:doi)<"
                            required size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Atlas used</th>
                    <td>
                        <input type = "text" name = "atlas_used" value = "" placeholder="Enter Atlas used"
                            required size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Imaging modality</th>
                    <td>
                        <input type = "text" name = "imaging_modality" value = "" placeholder="Enter Imaging modality"
                            required size = "30" maxlength = "20" >
                        </td>
                    </tr>
                    <tr>
                        <th>Scanner</th>
                    <td>
                        <input type = "text" name = "scanner" value = "" placeholder="Enter Scanner"
                            required size = "30" maxlength = "20" >
                        </td>
                    </tr>
                   
                  
                </table>
            </div>


            <div class="input-group">
                <button type="submit" class="btn" name="submit">Add</button>
            </div>
            <p>
                <a href="index.php">Back</a>
            </p>
        </form>
    </div>

    <!-- ##### Footer ##### -->

    <div id="footer">
        <div class="left">
            E-mail:&nbsp;<a href="./index.php" title="Email webmaster">shayezkaimcide@gmail.com</a><br />
            <a href="./index.php" class="doNotPrint">Contact Us</a>
        </div>

        <br class="doNotDisplay doNotPrint" />

        <div class="right">
            
        </div>
    </div>
</body>

</html>