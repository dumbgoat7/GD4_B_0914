<?php
    include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    
    <div class="body d-flex justify-content-between">
        <h4>Edit Profile</h4>
    </div>
    <hr>
    
    <form>
  <div class="mb-12">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "<?php echo $name; ?>">
  </div>

  <div class="mb-12">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "<?php echo $phonenum; ?>">
  </div>

  <div class="mb-12">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "<?php echo $email; ?>">
  </div>
  <div class = "mb-12">
    <label for="validationTooltip03" class="form-label">Job</label>
    <select class="form-select" id="validationTooltip04">
        <option>College Student</option>
        <option>Normal Student</option>
        <option>Amazing Student</option>
  </div>
  <div class = "mb-12">
  <label for="exampleInputEmail1" class="form-label">Membership</label>
    <input class="form-control" type="text" value="<?php echo $membership ?>" aria-label="Disabled input example" disabled>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>