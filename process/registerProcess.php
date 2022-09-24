<?php
    
    include('../db.php');

    if(isset($_POST['register'])){

        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];
        
        $emailUnik = mysqli_query($con, "SELECT * FROM users WHERE email= '$email'") or die(mysqli_error($con));
        $row_count1 = mysqli_num_rows($emailUnik); 

        $phonenumUnik = mysqli_query($con, "SELECT * FROM users WHERE phonenum= '$phonenum'") or die(mysqli_error($con));
        $row_count2 = mysqli_num_rows($phonenumUnik)
        
        if($row_count1 != 0) {
            echo
            '<script> 
                alert("Email sudah terdaftar!");
            </script>';
        }
        if($row_count2 != 0) {
            echo
            '<script> 
                alert("Nomor HP sudah terdaftar!");
            </script>';
        }
        if($row_count1==0 && $row_count2==0) {
            $query = mysqli_query($con,
            "INSERT INTO users(email, password, name, phonenum, membership)
            VALUES
            ('$email', '$password', '$name', '$phonenum', '$membership')")
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
            if($query){
                echo
                '<script>
                    alert("Register Success");
                    window.location = "../index.php"
                </script>';
            }else{
                echo
                '<script>
                    alert("Register Failed");
                </script>';
            }
        }

    

    }else{
        echo
        '<script>
            window.history.back()
        </script>';
    }
            


?>