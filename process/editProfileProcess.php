<?php
    session_start();
    if(isset($_POST['editProfile'])){
        include ('../db.php');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $job = $_POST['job'];
        $phonenum = $_POST['phonenum'];

        $queryUpdate = mysqli_query($con, 
        "Update users SET name ='$name', email ='$email', phonenumber='$phonenum', membership = '$membership', job = '$job' 
        Where id = $id") or die(mysqli_error($con));
        if($queryUpdate){   
            echo
            '<script>
            alert("Delete Success"); window.location = "../page/profilePage.php"
            </script>';
        }else{
            echo
            '<script>
            alert("Delete Failed"); window.location = "../page/listMoviesPage.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>