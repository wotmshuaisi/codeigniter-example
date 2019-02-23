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
            <th>No.</th>
            <th>Username</th>
            <th>Company</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?= $userArray['username'] ?></td>
            <td><?= $userArray['company'] ?></td>
        </tr>
    </table>
</body>
</html>

<pre>
<?php
    print_r($userArray);
?>
</pre>