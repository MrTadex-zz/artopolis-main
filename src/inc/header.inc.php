<nav class="navbar navbar-header">
    <button class="navbar-toggler navbar-side-menu-icon" onclick="openNav()">
        <i class="fas fa-bars"></i>
    </button>
    <div style="margin: auto; padding: 0px; width: fit-content;">
        <a class="navbar-brand logo-link" href="./index.php">
            <img class="d-none d-lg-block d-print-block" src="./src/custom/img/artopolis-logo-black-normal.svg"
                width="70%">
            <img class="d-xl-none d-lg-none d-print-block" src="./src/custom/img/artopolis-logo-black-mobile.svg"
                width="40" height="40">
        </a>
    </div>

</nav>
<div id="mySidenav" class="sidenav">
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

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