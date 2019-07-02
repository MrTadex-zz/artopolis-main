<html>

<head>
    <!-- Font awesome - free (FA) -->
    <link rel="stylesheet" href="./src/fa/css/all.min.css">
    <script src="./src/fa/js/all.min.js"></script>

    <!-- Bootstrap - free (BS) -->
    <link rel="stylesheet" href="./src/bs/css/bootstrap.min.css">
    <script src="./src/bs/js/bootstrap.min.js"></script>

    <!-- Font awesome - free (FA) -->
    <link rel="stylesheet" href="./src/custom/css/main.css">
</head>

<body>
    <!-- Just an image -->
    <nav class="navbar navbar-header">
        <button class="navbar-toggler navbar-side-menu-icon" onclick="openNav()">
            <i class="fas fa-bars"></i>
        </button>
        <div style="margin: auto; border: 1px solid green; padding: 0px; width: fit-content;">
            <a class="navbar-brand logo-link" href="./index.php">
                <img class="d-none d-lg-block d-print-block" src="./src/custom/img/artopolis-logo-black-normal.svg" width="70%">
                <img class="d-xl-none d-lg-none d-print-block" src="./src/custom/img/artopolis-logo-black-mobile.svg" width="40" height="40">
            </a>
        </div>

    </nav>
    <div id="mySidenav" class="sidenav">
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

</body>

<script>
    var toggled = 0;

    function openNav() {
        if (toggled == 0) {
            document.getElementById("mySidenav").style.width = "200px";
            toggled = 1;
        } else if (toggled == 1) {
            document.getElementById("mySidenav").style.width = "0";
            toggled = 0;
        }
    }
</script>

</html>