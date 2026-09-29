<?php
$conn = mysqli_connect("localhost", "root", "", "stitch");
if (!$conn) {
    echo "Error: " . mysqli_connect_error();
}
