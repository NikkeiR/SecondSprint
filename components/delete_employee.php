<?php 
   if(isset($_GET["action"]) && $_GET["action"] == "delete") {
    $stmt = $conn->prepare("DELETE FROM Employees WHERE id=?");
    $stmt->bind_param("i", $_GET["id"]);
    $stmt->execute();
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    die();
    }
?>