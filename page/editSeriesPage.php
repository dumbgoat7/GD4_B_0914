<?php
    include '../component/sidebar.php';
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * from series where id = $id");
    $series = mysqli_fetch_array($query);
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    
    <div class="body d-flex justify-content-between">
        <h4>Edit Series</h4>
        
    </div>
    <hr>
    
    <form class="row g-3 " action="../process/editSeriesProcess.php" method="post" >
            <input type="hidden" name="id" value="<?php echo $series['id'] ?>">
            <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $series['name'] ?>" required>
            </div>
            
            <div class="col-md-12">
            <!-- https://youtu.be/ntNkP8X1__I -->
                <label for="exampleInputEmail1" class="formlabel">Genre</label>
                <select class="form-select" multiple = "multiple" name="genre[]" value="<?php echo $series['genre']?>">
                    <option value="Romance">Romance</option>
                    <option value="Sci-fi">Sci-fi</option>
                    <option value="Horror">Horror</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Family">Family</option>
                    <option value="Comedy">Comedy</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="realese" class="form-label">Release</label>
                <input type="text"  class="form-control" id="realese" name="realese" value="<?php echo $series['realese']?>" required>
            </div>
            <div class="col-md-12">
                <label for="episode" class="form-label">Episode</label>
                <input type="text" class="form-control" id="episode" name="episode" value="<?php echo $series['episode']?>" required>
            </div>
            <div class="col-md-12">
                <label or="season" class="form-label">Season</label>
                <input type="text"  class="form-control" id="season" name="season" value="<?php echo $series['season']?>" required>
            </div>
            <div class="col-md-12">
                <label for="synopsis" class="form-label">Synopsis</label>
                <input type="text"  class="form-control" id="synopsis" name="synopsis" value="<?php echo $series['synopsis']?>" required>
            </div>


            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="editSeries">Edit</button>
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