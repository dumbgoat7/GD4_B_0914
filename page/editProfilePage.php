<?php
    include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    
    <div class="body d-flex justify-content-between">
        <h4>Edit Profile</h4>
        
    </div>
    <hr>
    
    <form class="row g-3 " action="../process/editProfileProcess.php" method="post" >
            <input type="hidden" name="id" value="<?php echo $_SESSION['user']['id']?>">
            <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['user']['name']?>" required>
            </div>
            <div class="col-md-12">
                <label for="phonenum" class="form-label">Phone Number</label>
                <input type="text"  class="form-control" id="phonenum" name="phonenum" value="<?php echo $_SESSION['user']['phonenum']?>" required>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $_SESSION['user']['email']?>" required>
            </div>
            <div class="col-md-12">
                <label for="exampleInputEmail1" class="formlabel">Job</label>
                <select class="form-select" aria-label="Defaultselect example" name="job" id="job">
                    <option value="Student" <?php echo $_SESSION['user']['job'] == 'Student' ? ' selected' : ''; ?>>Student</option>
                    <option value="Lecturer" <?php echo $_SESSION['user']['job'] == 'Lecturer' ? ' selected' : ''; ?>>Lecturer</option>
                    <option value="Programmer" <?php echo $_SESSION['user']['job'] == 'Programmer' ? ' selected' : ''; ?>>Programmer</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="exampleInputEmail1" class="formlabel">Membership</label>
                <select class="form-select" aria-label="Defaultselect example" name="membership" id="membership" disabled>
                    <option value="Reguler" <?php echo $_SESSION['user']['membership'] == 'Reguler' ? ' selected' : ''; ?>>Reguler</option>
                    <option value="Platinum" <?php echo $_SESSION['user']['membership'] == 'Platinum' ? ' selected' : ''; ?>>Platinum</option>
                    <option value="Gold" <?php echo $_SESSION['user']['membership'] == 'Gold' ? ' selected' : ''; ?>>Gold</option>
                </select>
            </div>


            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="editProfile">Edit</button>
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