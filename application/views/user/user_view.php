<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User View</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>ID.</th>
            <th>Username</th>
            <th>Company</th>
        </tr>
        <?php
                echo "<tr>";

                echo "<th>";
                echo $user->id;
                echo "</th>";

                echo "<th>";
                echo $user->username;
                echo "</th>";

                echo "<th>";
                echo $user->company;
                echo "</th>";

                echo "</tr>";
        ?>
        <tr>
            <?php
                foreach ($userArray as $key => $value) {
                    echo "<tr>";

                    echo "<td>";
                    echo $value['id'];
                    echo "</td>";

                    echo "<td>";
                    echo $value['username'];
                    echo "</td>";

                    echo "<td>";
                    echo $value['company'];
                    echo "</td>";

                    echo "</tr>";
                }
            ?>
        </td>
    </table>
</body>
</html>

<pre>
<?php
    // print_r($userArray);
    // print_r($user);
?>
</pre>