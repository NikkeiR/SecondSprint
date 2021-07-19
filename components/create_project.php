<?php 
    if(isset($_POST["create_project"]) && !empty($_POST["project"])) {
        $stmt = $conn->prepare("INSERT INTO Projects (name) VALUES (?)");
        $stmt->bind_param("s", $name);
        $name = $_POST["project"];
        $stmt->execute();
        header("Location: " . strtok($_SERVER["REQUEST_URI"], "?"));
        die();
    }
?>