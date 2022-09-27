<?php

if (isset($_POST['addSeries'])) {
    include('../db.php');

    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $realese = $_POST['realese'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];

    $query = mysqli_query($con, 
    "INSERT INTO series(name, genre, realese, episode, season, synopsis)
    VALUES
    ('$name', '$genre', '$realese', '$episode', '$season', '$synopsis')")
    or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
            alert("Series Added");
            window.location = "../page/listSeriesPage.php"
            </script>';
    } else {
        echo
        '<script>
            alert("Failed to add Series");
            window.location = "../page/addSeriesPage.php"
            </script>';
    }

} else{
    echo
    '<script>
        window.history.back()
    </script>';
}
        


?>
