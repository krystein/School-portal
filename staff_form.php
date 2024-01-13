<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Registration Form</title>
    <link rel="stylesheet" href="./css/bootstrap-grid.css" />
    <link rel="stylesheet" href="./css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="./css/bootstrap-utilities.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
</head>

<body>
    <div class="container p-3">
    <div class="d-flex justify-content-between align-items-center">
            <h2>Staff Registration Form</h2>
            <a href="index.php"><button class="btn btn-primary">Home</button></a>
        </div>
        <form action="includes/addStaff.inc.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" name="date_of_birth" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="text" name="phone_number" class="form-control">
            </div>
            <div class="form-group">
                <label for="marital_status">Marital Status:</label>
                <select name="marital_status" class="custom-select form-control">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sex">Sex:</label>
                <select name="sex" class="custom-select form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="state_of_origin">State of Origin:</label>
                <input type="text" name="state_of_origin" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>