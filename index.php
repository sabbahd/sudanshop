<?php
// if(){}
include_once 'header.php';

$visitorIP = $_SERVER['REMOTE_ADDR'];


$sudanIPS  = [
    "102.120.0.0",
    "102.130.248.0",
    "102.143.128.0",
    "102.181.0.0",
    "102.216.88.0",
    "102.218.68.0",
    "102.218.99.0",
    "102.220.152.0",
    "105.238.0.0",
    "149.115.124.0",
    "154.96.0.0",
    "155.196.0.0",
    "196.1.192.0",
    "196.202.128.0",
    "196.202.130.0",
    "196.223.152.0",
    "196.223.20.0",
    "196.29.160.0",
    "196.49.66.0",
    "197.208.0.0",
    "197.251.0.0",
    "197.251.39.0",
    "197.252.0.0",
    "197.254.192.0",
    "212.0.128.0",
    "41.202.160.0",
    "41.209.64.0",
    "41.218.0.0",
    "41.218.8.0",
    "41.223.160.0",
    "41.223.200.0",
    "41.240.0.0",
    "41.67.0.0",
    "41.78.108.0",
    "41.95.0.0",
    "62.12.96.0",
    "102.127.255.255",
"102.130.255.255",
"102.143.255.255",
"102.181.223.255",
"102.216.91.255",
"102.218.71.255",
"102.218.99.255",
"102.220.155.255",
"105.239.255.255",
"149.115.124.255",
"154.103.255.255",
"155.196.255.255",
"196.1.255.255",
"196.202.128.255",
"196.202.159.255",
"196.223.159.255",
"196.223.20.255",
"196.29.191.255",
"196.49.66.255",
"197.209.255.255",
"197.251.37.255",
"197.251.127.255",
"197.252.255.255",
"197.254.255.255",
"212.0.159.255",
"41.202.191.255",
"41.209.127.255",
"41.218.0.255",
"41.218.63.255",
"41.223.163.255",
"41.223.203.255",
"41.241.255.255",
"41.67.63.255",
"41.78.111.255",
"41.95.255.255",
"62.12.111.255"
];


if (in_array($visitorIP, $sudanIPS)) {
?>

    <body>

        <nav>
            <div class="nav-wrapper">
                <div class="nav-contents">
                    <div class="navbar-brand">
                        <img src="images/logo/sabbah_logo.svg" alt="">
                    </div>
                    <div class="right">
                        <ul>
                            <li><a>Main Website</a></li>
                            <li><a>Contact</a></li>
                            <li><a>FAQ</a></li>
                            <li><a>Support</a></li>
                        </ul>
                        <i class="fas fa-bars menu"></i>
                    </div>
                </div>
            </div>
        </nav>

        <div class="wrapper">
            <div class="title">
                <img src="images/logo/sabbah_logo.svg" alt="">
                <h3>Sudan Shop</h3>
                <button>Main Website</button>
            </div>
        </div>


        <footer>
            <p>Developed by Sabbah Altaj</p>
        </footer>

        <script src="js/script.js"></script>
    </body>

<?php

} else {
    echo "
     <div class='wrapper'>
        <div class='title'>
            <img src='images/logo/sabbah_logo.svg' alt=''>
            <h3>Sudan Shop</h3>
        <p>This web site is not available in your country</p>
        <p>$visitorIP</p>
    </div>
</div>";
}

?>

<!-- <script src="js/jquery.js"></script> -->
<!-- <script src="js/script.js"></script> -->

</html>