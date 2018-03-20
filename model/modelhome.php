<?php
$prepSelect = $connect->query("SELECT * FROM users WHERE id = 2");
$row = $prepSelect->fetch();
?>