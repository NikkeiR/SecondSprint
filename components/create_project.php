<?php 
    if(isset($_POST["create_project"]) && !empty($_POST["project"])) {
        $stmt = $conn->prepare("INSERT INTO Projects (name) VALUES (?)");
        $stmt->bind_param("s", $name);
        $name = $_POST["project"];
        $stmt->execute();
        header("Location: " . $_SERVER["PHP_SELF"] . "?" . $_SERVER["QUERY_STRING"]);
        die();
    }
?>