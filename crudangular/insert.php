<?php

    $conn = mysqli_connect("localhost", "root", "", "angular");

    $info = json_decode(file_get_contents("php://input"));

    if(count($info) > 0) {
        $name = $info->name;
        $email = $info->email;
        $age = $info->age;
        $btn_name = $info->btnName;

        if($btn_name == "Insert") {
            $query = "INSERT INTO insert_emp_info(name, email, age) VALUES('$name', '$email', '$age')";

            if(mysqli_query($conn, $query)) {
                echo "Data Inserted Successfully...";
            } else {
                echo "Insert Failed";
            }
        }

        if($btn_name == "Update") {
            $id = $info->id;

            $query = "UPDATE insert_emp_info SET name = '$name', email = '$email', age = '$age' WHERE id = '$id'";

            mysqli_query($conn, $query);
        }
    }

?>