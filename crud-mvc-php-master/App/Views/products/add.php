<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

<h1 class="text-center  mt-5 mb-2 py-3">Add New Voyage </h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            
                <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>


                <form class="p-5 border mb-5" method="POST" action="<?php url('products/store'); ?>">
                    <div class="form-group">
                        <label for="name">from</label>
                        <input type="text" required name="from" class="form-control" id="name" >
                    </div>
                    <div class="form-group">
                        <label for="price">to</label>
                        <input type="text" required class="form-control" name="to" id="price">
                    </div>

                    <div class="form-group">
                        <label for="description">price</label>
                        <input type="text" required class="form-control" name="price" id="description">
                    </div>

                    <div class="form-group">
                        <label for="qty">available places</label>
                        <input type="number" required class="form-control" name="availablePlaces" id="qty">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">add</button>
                </form>
                            
            </div>
        </div>
    </div>

<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>
