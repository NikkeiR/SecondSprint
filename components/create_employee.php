<?php 
    if(isset($_POST["create_employee"]) && !empty($_POST["employee"]) && !empty($_POST["project_id"])) {
        $stmt = $conn->prepare("INSERT INTO Employees (firstname, project) VALUES (?,?)");
        $stmt->bind_param("si", $firstname, $project);
        $firstname = $_POST["employee"];
        $project = $_POST["project_id"];
        $stmt->execute();
        header("Location: " . $_SERVER["PHP_SELF"] . "?" . $_SERVER["QUERY_STRING"]);
        die();
    }
?>