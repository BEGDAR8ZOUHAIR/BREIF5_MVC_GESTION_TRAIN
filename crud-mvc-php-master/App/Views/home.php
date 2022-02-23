<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

  <div class="jumbotron text-center mt-5">
  <h1 class="display-4">Reserver Now</h1>
  
  <form>

<div class="signup-form bg-dark mb-4">

    <div class="Signup-head bg-primary">
        <h1>Reserve Your Ticket</h1>
    </div>

   

    <div class="signup-content2 col-6 mx-auto">
        <input type="text" placeholder="From" class="input bg-dark form-control">
        <input type="text" placeholder="To" class="input bg-dark form-control"><br>


    <label class="text-white" style="margin-left:10px;">Depart</label>
    <input type="date" class="tarikh bg-dark text-white form-control">
    <label class="text-white" style="margin-left:10px;">Return</label>
    <input type="date" class="tarikh bg-dark form-control">

    <input type="number" class="bg-dark person form-control" placeholder="Adults">
    <input type="number" class="bg-dark person form-control" placeholder="Children"><br>

   

    <input type="submit" value="Check Availability" class="submit-btn bg-warning">
    </div>
</div>
</form>
  <a class="btn btn-primary btn-lg " href="<?php url('products') ?>" role="button">SHOW VOYAGE</a>
</div>

<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>
