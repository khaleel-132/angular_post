<?php
$conn = mysqli_connect("localhost","root","","internship");
$info = json_decode(file_get_contents("php://input"));
if(count($info) > 0)
{
        $name = mysqli_real_escape_string($conn,$info->name);
        $email = mysqli_real_escape_string($conn,$info->email);
        $age = mysqli_real_escape_string($conn,$info->age);

        $query = 'INSERT INTO details (name,email,age) VALUES ('$name','$email','$age')';

        if(mysqli_query($conn,$query))
        {
            echo "Inserted Data Successfully";
        }
        else
        {
            echo 'Failed';
        }
}

?>