<?php
    include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

    <div class="body d-flex justify-content-between">
        <h4>Add Movie</h4>
    </div>
    <hr>
    <form class="row g-3 " action="../process/addMovieProcess.php" method="post" >
            <div class="col-md-12">
            <label for="name" class="form-label">Movie Title</label>
            <input class="form-control" id="name" name="name">
            </div>
            <div class="col-md-12">
                <label for="genre" class="form-label">Genre</label>
                    <select class="form-select"  id="genre" name="genre">
                        <option value="Romance">Romance</option>
                        <option value="Sci-Fi">Sci-Fi</option>
                        <option value="Horror">Horror</option>
                    </select>
            </div>
            <div class="col-md-12">
                <label for="realese" class="form-label">Release</label>
                <input class="form-control" id="realese" name="realese">
            </div>
            <div class="col-md-12">
                <label for="season" class="form-label">Season</label>
                <input class="form-control" id="season" name="season">
            </div>
            <div class="col-md-12">
                <label for="synopsis" class="form-label">Synopsis</label>
                <input  class="form-control" id="synopsis" name="synopsis" >
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="addMovie">Add Movie</button>
            </div>
        </form>

    </div>
  </div>
</aside>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/896ee8ff62.js" crossorigin="anonymous"></script>
</body>
</html>