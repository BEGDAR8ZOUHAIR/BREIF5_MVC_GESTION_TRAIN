<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

<h1 class="text-center  my-5 py-3">View All Voyage </h1>

<div class="container">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
                <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">from</th>
                    <th scope="col">to</th>
                    <th scope="col">price</th>
                    <th scope="col">available places</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i=1; ?>
                    <?php foreach($products as $row):  ?>
                        <tr>
                            <td> <?php echo $i; $i++; ?></td>
                            <td><?php echo $row['from']; ?></td>
                            <td><?php echo $row['to']; ?> </td>
                            <td><?php echo $row['price']; ?><b class="float-right"> $ </b></td>
                            <td><?php echo $row['available places']; ?></td>
                            <td>
                                <a href="<?php url('/products/edit/'.$row['id']) ?>" class="btn btn-info" >Edit</a>
                            </td>
                            <td>
                                <a href="<?php url('/products/delete/'.$row['id']) ?>" class="btn btn-danger" >Delete</a>
                            </td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>
</div>
<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>
