<?php
    $sql = "SELECT Projects.id, Projects.name, group_concat(' ', Employees.firstname) as names FROM Projects
    LEFT JOIN Employees ON Projects.id = Employees.project GROUP BY Projects.id";
    $result = mysqli_query($conn, $sql);

    print("<table class='table'><thead>");
    print("<tr><th>ID</th><th>Project</th><th>Name</th><th>Action</th></tr>");
    print("</thead>");
    if (mysqli_num_rows($result) > 0) { 
        while($row = mysqli_fetch_assoc($result)) {
            print('<tr><td>'.$row["id"].'</td>
                        <td>'.$row["name"].'</td>
                        <td>'.$row["names"].'</td>
                        <td><a href="?action=delete&id='.$row["id"].'"><button>DELETE</button></a></td></tr>');
        }
    } else {
        echo "0 results";
    }
    print("</table>");

    mysqli_close($conn);
?>