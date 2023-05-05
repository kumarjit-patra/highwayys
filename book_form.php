<?php
    $connection=mysqli_connect('localhost','root','','book_db');
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $location = $_POST['location'];
            $members = $_POST['members'];
            $arrival = $_POST['arrival'];
            $leaving = $_POST['leaving'];

    $request =" insert into book_form(name, email, phone, address,location, members, arrival, leaving) values('$name','$email','$phone','$address','$locaton','$members','$arrival','$leaving')";
    mysqli_query($connection, $request);
    
    header('location:book.php');
   }else{
        echo 'something went wrong';
   } 
?>