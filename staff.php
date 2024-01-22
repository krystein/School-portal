<?php

include("includes/class-autoload.inc.php");

$staffs = new StaffView();

$allStaffs = $staffs->showStaff();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Index</title>
    <link rel="stylesheet" href="./css/bootstrap-grid.css" />
    <link rel="stylesheet" href="./css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="./css/bootstrap-utilities.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Staff List</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Fullname</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Phone Number</th>
                                    <th class="border-top-0">Sex</th>
                                    <th class="border-top-0">Position</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($allStaffs as $staff) {
                                ?>
                                    <tr>
                                        <td> <?php echo $staff['name']; ?></td>
                                        <td> <?php echo $staff['email']; ?></td>
                                        <td><?php echo $staff['phone_number']; ?></td>
                                        <td><?php echo $staff['sex']; ?></td>
                                        <td><?php echo $staff['position']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>