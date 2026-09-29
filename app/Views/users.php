<!DOCTYPE html>
<html>
<head>
    <title>User Accounts - POS System</title>
</head>
<body>

    <h1>User Accounts</h1>

    <nav>
        <a href="./">Home</a> |
        <a href="./about">About</a> |
        <a href="./customers">Customer Accounts</a> |
        <a href="./users">User Accounts</a>
    </nav>

    <hr>

<?php foreach ($users as $user): ?>

    <p>
        <strong><?= esc($user['username']) ?></strong><br>
        Name: <?= esc($user['full_name']) ?>
    </p>

    <hr>

<?php endforeach; ?>

</body>
</html>