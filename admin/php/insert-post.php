<?php
$title = $_POST["title"];
$seo = $_POST["seo"];
$content = $_POST["content"];
$category = $_POST["category"]; // example: 1 2 4
$author = $_POST["author"];

require "db.php";
$query = "INSERT INTO post (title, seo_title, content, author) 
VALUES ('$title', '$seo', '$content', '$author')";
mysqli_execute($db, $query);
