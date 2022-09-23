<?php
    session_start();
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $email = $_POST['email'];
        // $password = $_GET['password'];
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_GET['membership'];
        $Job = $_POST['job'];

        $queryUpdate = mysqli_query($con, 
        "Update users SET id = $id, name ='$name', email ='$email', phonenumber='$phonenum', membership = '$membership', job = '$job'" )
        // $queryDelete = mysqli_query($con, "DELETE FROM movies WHERE id='$id'") or
        // die(mysqli_error($con));
        // if($queryDelete){
            echo
            '<script>
            alert("Delete Success"); window.location = "../page/listMoviesPage.php"
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