<?php 
    if(isset($_POST["update_employee"]) && !empty($_POST["name"]) && !empty($_POST["id"]) && !empty($_POST["id_project"])) {
        $stmt = $conn->prepare("UPDATE FROM Employees SET firstname = '".$_POST['name']."' project = '".$_POST['id_project']."'  WHERE id = '".$_POST["id"]."'");
        $stmt->bind_param("isi", $id, $firstname, $project);
        $id = $_POST["id"];
        $firstname = $_POST["name"];
        $project = $_POST["id_project"];
        $stmt->execute();
        header("Location: " . strtok($_SERVER["REQUEST_URI"], "?"));
        die();
    }
?>