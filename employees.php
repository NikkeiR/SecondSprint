<?php require_once("./components/mysql_conn.php"); ?>
<?php require_once("./components/create/create_employee.php"); ?>
<?php require_once("./components/delete/delete_employee.php"); ?>
<!-- <?php require_once("./components/update/employee_update.php"); ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header class="container">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Projects</a>
            </li>
            <li>
                <a class="nav-link active" href="./employees.php">Employees</a>
            </li>
        </ul>
    </header>
    <section class="container">
        <?php require_once("./components/data/employees_data.php"); ?>
    </section>
    <section class="container">
        <form action="" method="POST">
            <input type="text" name="employee" placeholder="Employee name"><br>
            <input type="text" name="project_id" placeholder="Project ID"><br>
            <input type="submit" name="create_employee" value="Add employee">
        </form>
        <!-- <form action="" method="POST">
            <input type="text" name="id" placeholder="Employee ID"><br>
            <input type="text" name="name" placeholder="Employee name"><br>
            <input type="text" name="id_project" placeholder="Project ID"><br>
            <input type="submit" name="update_employee" value="Update">
        </form> -->
    </section>
</body>
</html>