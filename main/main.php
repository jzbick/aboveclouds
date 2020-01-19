<?php
include './config/config.php';

$sql_files = 'SELECT * FROM Datei WHERE N_ID = :nid LIMIT 11';
$sql_username = 'SELECT Vorname, Nachname FROM nutzer where N_ID =:nid';
if (isset($_SESSION['N_ID'])) {
    $nid = $_SESSION['N_ID'];
    $get_files = $dbc->prepare($sql_files);
    $get_files->bindParam(':nid', $nid);
    $get_files->execute();
    $res = $get_files->fetchAll(PDO::FETCH_ASSOC);
    $get_user = $dbc->prepare($sql_username);
    $get_user->bindParam(':nid', $nid);
    $get_user->execute();
    $res_username = $get_user->fetchAll(0);
    $username = $res_username[0]['Vorname'] . ' ' . $res_username[0]['Nachname'];
}
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
    <div class="container">
        <a href="index.php"><span class="cloud">&#9729;</span></a>
        <input type="search" id="suche" placeholder="Suchen...">
        <img onclick="openDropdownImg()" class="drop" id="img" src="assets/images/Bender-Profil.png">
    </div>
    <div id="ImgDropdown" class="dropdown-content">
        <a href="Einstellung.php"><?= $username ?></a>
        <hr class="Menu-Separierer">
        <a href="Einstellung.php">Einstellungen</a>
        <hr class="Menu-Separierer">
        <a href="logout.php">Abmelden</a>
    </div>
    </header>

    <!-- Side Bars -->
    <div class="left">
        <div class="sidebar">
        </div>
    </div>


    <div class="filetable">
        <table>
            <thead>
            <tr>
                <th class="name" colspan="2">Name</th>
                <th class="datum" colspan="2">Bearbeitet</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($res as $file) { ?>
                <tr>
                    <td class="icon">Icon</td>
                    <td class="name"><?= $file['Name']; ?></td>
                    <td class="datum"><?= ($file['BDatum'] != NULL ? $file['BDatum'] : $file['ADatum']); ?></td>
                    <td class="button">
                        <div class="dropdown">
                            <button onclick="openDropdown('<?= $file['Name'] ?>')" class="drop" id="btn">...</button>
                            <div id="<?= $file['Name'] ?>" class="dropdown-content">
                                <a href="./files/download.php?did=<?= $file['D_ID']; ?>">Herunterladen</a>
                                <a href="./files/delete.php?did=<?= $file['D_ID']; ?>">Löschen</a>
                                <a onclick="location.href=this.href+prompt('Geben Sie einen neuen Dateinamen ein:');return false;"
                                   href="./files/rename.php?did=<?= $file['D_ID']; ?>&new_name=">Umbenennen</a>
                            </div>
                    </td>
                </tr> <?php } ?> </tbody>
        </table>
    </div>
    <div class=" right">
        <div class="sidebar">
            <form id="upload_form" name="upload_form" enctype="multipart/form-data" method="post"
                  action="./files/upload.php">
                <input id="userfile_upload" type="file" name="userfile[]" multiple="multiple" style="display: none; onchange="this.form.submit();">
            </form>
            <button id="uploadbtn" onclick="handleUpload()"><span id="upload">&#8625;</span>Hochladen</button>
        </div>
    </div>
</div>
</div>

<div class="main-footer">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="footer-heading">
                            <h2>Über uns</h2>
                        </div>
                        <p>AboveClouds ist eine von Studenten selber erstellte Cloudlösung, welche sich an andere
                            Studenten
                            weltweit richten soll!</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="footer-heading">
                            <h2></h2>
                        </div>
                        <ul class="footer-list">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="footer-heading">
                            <h2></h2>
                        </div>
                        <ul class="footer-list">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="footer-heading">
                            <h2>Mehr Informationen</h2>
                        </div>
                        <ul class="footer-list">
                            <li>Email: <a href="#">kontakt@aboveclouds.online</a></li>
                            <li>Support: <a href="#">support@aboveclouds.online</a></li>
                            <li>Website: <a href="#">www.AboveClouds.online</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2019 AboveClouds Company</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/dropdown.js"></script>
<script src="assets/js/upload_btn.js"></script>
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