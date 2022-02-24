<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

<h1 class="text-center  mt-5 mb-2 py-3">Edit Voyage </h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            
                <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>


                <form class="p-5 border mb-5" method="POST" action="<?php url('products/update'); ?>">

                <div class="form-group">
                        <label for="price">from</label>
                        <input type="text" required class="form-control" value="<?php echo $row['from']; ?>" name="from" id="price">
                        
                    
                    </div>

                    <div class="form-group">
                        <label for="price">to</label>
                        <input type="text" required class="form-control" value="<?php echo $row['to']; ?>" name="to" id="price">
                    </div>

                    <div class="form-group">
                        <label for="description">price</label>
                        <input type="number" required class="form-control" value="<?php echo $row['price']; ?>" name="price" id="description">
                    </div>

                    <div class="form-group">
                        <label for="qty">available places</label>
                        <input type="number" required class="form-control" value="<?php echo $row['available places']; ?>" name="availablePlaces" id="qty">
                    </div>
                    <button type="submit" value="<?php echo $row['id']; ?>" name="submit" class="btn btn-primary">Submit</button>
                </form>
                            
            </div>
        </div>
    </div>

<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>
