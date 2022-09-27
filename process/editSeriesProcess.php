<?php

    if(isset($_POST['editSeries'])){
        include ('../db.php');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = implode(", ", $_POST['genre']);
        $realese = $_POST['realese'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $queryUpdate = mysqli_query($con, 
        "UPDATE series SET name ='$name', genre ='$genre', realese ='$realese', episode ='$episode', season ='$season', synopsis ='$synopsis' 
        Where id =$id") or die(mysqli_error($con));
        if($queryUpdate){   
            echo
            '<script>
            alert("Update Success"); window.location = "../page/listSeriesPage.php"
            </script>';
        }else{
            echo
            '<script>
            alert("Update Failed"); window.location = "../page/editSeriesPage.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>