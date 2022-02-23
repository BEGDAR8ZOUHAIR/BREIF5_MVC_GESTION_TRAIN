
<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

<body>

<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">


                    <div class="card">
               <div class="card-body">
                    <div class="m-sm-4">

          <div class="text-center mt-4">
               <h1 class="h2">Register Now</h1>
          </div><br>


                         <form action="" method="post">
                              <div class="mb-4">
                                   <label class="form-label">name</label>
                                   <input class="form-control form-control-lg" type="text" name="nom" placeholder="name"/>
                              </div>
                    <div class="mb-4">
                                   <label class="form-label">Last name</label>
                                   <input class="form-control form-control-lg" type="text" name="prenom" placeholder="Last name"/>
                              </div>
                    <div class="mb-4">
                                   <label class="form-label">Email</label>
                                   <input class="form-control form-control-lg" type="text" name="email" placeholder="Email"/>
                              </div>
                              <div class="mb-4">
                                   <label class="form-label">Password</label>
                                   <input class="form-control form-control-lg" type="password" name="pwd" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"/>
                              </div>

                             
                              <div class="col-lg-6 login-btm login-button ">
                                   
                                   <button name="submit" class="btn btn-primary ">Register</button>
                                   <p>Already have an account? </p>
                              </div>

                              <div>
                                   <!--  -->
                              </div>
                         </form>
                    </div>
               </div>
               </div>

          </div>
     </div>
</div>
</div>
	</main>
     <?php  include(VIEWS.'inc'.DS.'footer.php'); ?>
