<?php
session_start();
include("config.php");
include("header.php");

?>


<!-- ##### Side Bar ##### -->

<?php
include("nav.php");
?>

<!-- ##### Main Copy ##### -->

<div id="main-copy" class="table-container">
    <h2>About</h2>
    <?php if (isset($_GET['s'])) {
        echo "Successfully Added!!!";
    } ?>
    <table border="0" width="75%" height="100%" text-align: align="center" center style="font-size: 20px;">
        <tr align="center">
            <th>Introduction</th>

        </tr align="center">
        <tr align="center">
            <th></th>

        </tr align="center">
        <tr align="center">
            <th></th>

        </tr align="center">
        <tr align="center">
            <th></th>

        </tr align="center">
        <tr align="center">
            <th></th>

        </tr align="center">
        <tr>
            <td>The brain signature database is a collection of brain connectivity patterns, or "signatures," that have been analyzed using graph theory. Graph theory is a branch of mathematics that studies the relationships between objects and their connections to one another. In the context of brain connectivity, these objects are typically brain regions, and the connections between them represent the strength and direction of the communication between these regions.</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>By applying graph theory to brain connectivity data, we can extract meaningful insights about the organization and function of the brain. For example, we can measure the "centrality" of a brain region, which reflects its importance or influence within the brain network. We can also measure the "path length" between brain regions, which reflects the shortest distance between them. These and other measures of brain connectivity, or "brain signatures," can provide valuable information about brain function and dysfunction.</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>The brain signature database allows researchers and clinicians to access and compare brain connectivity patterns from a variety of sources. Each entry in the database includes a unique ID, as well as measures of degree centrality, betweeness centrality, path length, and clustering, as well as any additional fields that may be relevant. The database also includes raw data and detailed signature data for each entry, allowing users to explore the data in greater depth.</td>
        </tr>
    </table>


</div>

<!-- ##### Footer ##### -->

<div id="footer">
    <div class="left">
        E-mail:&nbsp;<a href="./index.php" title="Email webmaster">shayezkarimcide@gmai.com</a><br />
        <a href="./index.php" class="doNotPrint">Contact Us</a>
    </div>

    <br class="doNotDisplay doNotPrint" />

    <div class="right">
        
    </div>
</div>
</body>

</html>