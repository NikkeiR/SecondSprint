<?php
    $sql = "SELECT Employees.id, firstname, Projects.name FROM Employees
    LEFT JOIN Projects ON Projects.id = Employees.project";
    $result = mysqli_query($conn, $sql);

    print("<table class='table'><thead>");
    print("<tr><th>ID</th><th>Name</th><th>Project</th><th>Action</th></tr>");
    print("</thead>");
    if (mysqli_num_rows($result) > 0) { 
        while($row = mysqli_fetch_assoc($result)) {
            print('<tr><td>'.$row["id"].'</td>
                        <td>'.$row["firstname"].'</td>
                        <td>'.$row["name"].'</td>
                        <td><a href="?action=delete&id='.$row["id"].'"><button>DELETE</button></a></td></tr>');
        }
    } else {
        echo "0 results";
    }
    print("</table>");

    mysqli_close($conn);
?>