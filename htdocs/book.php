<?php

$conn = mysqli_connect("localhost","root","","dbase");
 if (!$conn){
	 die("connection failed: " . mysqli_connect_error());
 }
 
 $b_name = $_POST['b_name'];
 $name_author = $_POST['name_author'];
 $issn_number = $_POST['issn_number'];
 $publisher = $_POST['publisher'];
 $b_title = $_POST['b_title'];
 $sql = "INSERT INTO books ( b_name,name_author,issn_number,publisher,b_title)
 VALUES ('$b_name','$name_author','$issn_number','$publisher','$b_title,);
 
 if (mysqli_query($conn, $sql)) {
    echo "successfull!";
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>