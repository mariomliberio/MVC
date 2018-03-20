<?php
$prepSelect = $connect->query("SELECT * FROM users WHERE id = 1");
$row = $prepSelect->fetch();
?>