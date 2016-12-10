<?php
    $connection = mysql_connect("localhost","root","hasan");
    mysql_select_db("perpustakaan");
    $query = "SELECT id FROM buku";
    $result = mysql_query($query);
    while($record = mysql_fetch_row($result))
    {
        echo "<tr>";
        echo "<td align='center'>";
        echo "<a class='btn btn-default'><em class='fa fa-pencil'></em></a>";
        echo "<a class='btn btn-danger'><em class='fa fa-trash'></em></a>";
        echo "</td>";
        echo "<td>$record[0]</td><td>$record[1]</td><td>$record[2]</td><td>$record[3]</td><td>$record[4]</td>";
        echo "</tr>";
}
?>