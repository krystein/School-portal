<?php

include("includes/class-autoload.inc.php");

$students = new StudentView();

$allStudents = $students->showStudent();
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
                    <h3 class="box-title">Student List</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Fullname</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Mat-No</th>
                                    <th class="border-top-0">Telephone</th>
                                    <th class="border-top-0">sex</th>
                                    <th class="border-top-0">Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($allStudents as $student) {
                                ?>
                                    <tr>
                                        <td> <?php echo $student['name']; ?></td>
                                        <td> <?php echo $student['email']; ?></td>
                                        <td><?php echo $student['matriculation_number']; ?></td>
                                        <td><?php echo $student['phone_number']; ?></td>
                                        <td><?php echo $student['sex']; ?></td>
                                        <td><?php echo $student['level']; ?></td>
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