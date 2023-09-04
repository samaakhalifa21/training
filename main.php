<?php
require "connection.php";
 if (isset($_POST['submit'])){

    $book_name=$_POST['book_name'];
    $author=$_POST['author'];
    $price=$_POST['price'];

    $sql="insert into books(book_name,author,price) values ('$book_name',' $author',' $price')";
$query= mysqli_query($connect,$sql);
if ($query){
  echo "insertion";
}
else {echo "failed";}


 }







?>