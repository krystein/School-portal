<?php
require("includes/class-autoload.inc.php");
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$userView = new UserView();

$email =  $_SESSION['email'];
$user = $userView->showStudent($email);
$staff = $userView->showStaff($email);

if ($user) {
    $link = "studentprofile.php";
    $links = "studentresult.php";
} else if ($staff) {
    $link = "staffprofile.php";
    $links = "staffresult.php";
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Student portal</title>
    <link href="css/style.min.css" rel="stylesheet">
    <style>
        .id-card {
            max-width: 400px;
            margin: 50px auto;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .id{
            border: 1px solid #41b3f9;
            border-radius: 10px;
            padding: 10px;
        }
    </style>
</head>


<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo $link; ?>" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="IDcard.php" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">IDcard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo $links; ?>" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Result</span>
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center">
                        <form action="./includes/logout.inc.php" method="GET">
                            <input type="hidden" name="action" value="logout">
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <?php
                if ($user) {
                ?>
                    <div class="container">
                        <div class="id-card">
                            <div class="id">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="assests/IMG/SEEES Logo.png" alt="seees" class="img-fluid" style="width: 100px; height: 100px;" />
                                <h3><i>Society of Electrical Electronic Engineering Student</i></h3>
                            </div>
                            <hr>
                            <h2 class="text-center">UNIPORT CHAPTER</h2>
                            <h4 class="text-center text-danger">Student ID CARD</h4>
                            <div class="text-center">
                                <img src="./image/<?php echo $user['image']; ?>" alt="Profile Image" class="img-fluid" style="width: 200px; height: 200px;">
                            </div>
                            <h4 class="text-uppercase mt-3"><strong>Fullname: </strong><?php echo $user['name']; ?></h4>
                            <h4><strong>Mat-no: </strong><?php echo $user['matriculation_number']; ?></h4>
                            <hr>
                            <h1 class="text-center text-danger">MEMBER</h1>
                        </div>
                        </div>
                    </div>
        <?php
                } else if ($staff) {
        ?>
            <div class="container">
                        <div class="id-card">
                            <div class="id">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="assests/IMG/uniport.png" alt="seees" class="img-fluid" style="width: 100px; height: 100px;" />
                                <h3><i>Department of Electrical Electronic Engineering</i></h3>
                            </div>
                            <hr>
                            <h4 class="text-center text-danger">Staff ID CARD</h4>
                            <div class="text-center">
                                <img src="./image/<?php echo $staff['image']; ?>" alt="Profile Image" class="img-fluid" style="width: 200px; height: 200px;">
                            </div>
                            <h4 class="text-uppercase mt-3"><strong>Fullname: </strong><?php echo $staff['name']; ?></h4>
                            <h4><strong>Email: </strong><?php echo $staff['email']; ?></h4>
                            <h4><strong>Phone: </strong><?php echo $staff['phone_number']; ?></h4>
                            <hr>
                            <h1 class="text-center text-danger">MEMBER</h1>
                        </div>
                        </div>
                    </div>
        <?php
                } else {
                    echo "User not Found";
                }
        ?>
        </div>
    </div>
    </div>
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>