<?php

    include_once("koneksi.php");

    echo "<table border='1'>";
    echo "<tr>
            <th>Username</th>
            <th>Password</th>
            </tr>";

    $query = mysqli_query($koneksi, "SELECT * FROM admin");

    while($row=mysqli_fetch_array($query))
    {
        echo "<tr>
                <td>$row[username]</td>
                <td>$row[password]<td>
                </tr>";
    }
    echo "</table>";
?>
