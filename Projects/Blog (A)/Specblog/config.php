<?php 
        session_start();
        // connect to database
        $conn = mysqli_connect("localhost", "root", "", "specblogdb");

        if (!$conn) {
                die("Error connecting to database: " . mysqli_connect_error());
        }
?>