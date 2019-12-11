<?php
include './config/datenbankzugriff.php';
$sql_files = 'SELECT * FROM Datei WHERE N_ID = :nid LIMIT 5';
$nid = $_COOKIE['N_ID'];
$get_files = $dbc->prepare($sql_files);
$get_files->bindParam(':nid', $nid);
$get_files->execute();
$res = $get_files->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>&#9729;AboveClouds - Name</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/dropdown.css">
    <!--

    Host Cloud Template

    https://templatemo.com/tm-541-host-cloud

    -->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Grid -->
    <div class="main-container">
        <!-- Header -->
        <header class="main-header">
            <h2><span class="cloud">&#9729;</span></h2>
        </header>

        <!-- Side Bars -->
        <div class="left">
            <div class="sidebar">


            </div>
        </div>

        <div class="filetable" style="margin-top:10%;">
            <form enctype="multipart/form-data" method="post" action="../files/upload.php">
                <input type="file" name="userfile">
                <button type="submit">Hochladen</button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th class="icon">Icon</th>
                        <th class="name">Name</th>
                        <th class="datum">Bearbeitet</th>
                        <th class="button">Buttons</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($res as $file) { ?>
                        <tr>
                            <td class="icon">Icon</td>
                            <td class="name"><?= $file['Name'] ?></td>
                            <td class="datum"><?= ($file['BDatum'] != NULL ? $file['BDatum'] : $file['ADatum']) ?></td>
                            <td class="button">
                                <div class="dropdown">
                                    <button onclick="openDropdown()" class="dropbtn">...</button>
                                    <div id="btnDropdown" class="dropdown-content">
                                        <a href="./aboveclouds/files/download.php">Download</a>
                                        <a href="./aboveclouds/files/delete.php">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="right">
            <div class="sidebar">

            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/dropdown.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>