<?php include ("../header.php"); ?>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="../index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">All Price</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">$0 - $100</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">$100 - $200</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">$200 - $300</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">$300 - $400</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">$400 - $500</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
                
                <!-- Brand Start -->
                <div id="form-ui" class="mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by Brand</h5>
                    <form>
                        
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="brand-all">
                            <label class="custom-control-label" for="brand-all" value="*">All Brands</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="brand-1" value=".Apple" name="Apple">
                            <label class="custom-control-label" for="brand-1" >Apple</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="brand-2">
                            <label class="custom-control-label" for="brand-2">Samsung</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="brand-3">
                            <label class="custom-control-label" for="brand-3" value=".Redmi">Redmi</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                    </form>
                </div>
                <!-- Brand End -->

            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="">
                            </form>
                            
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                            Sort by
                                        </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php 
                    $a =  $_GET['SubCatID'];
                    $product_shuffle = getSubData('product', 'SubCatID', $a);
                    foreach ($product_shuffle as $item) {  
                        $id=$item['ProdID']; ?>
                                <!-- html code -->
                                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                        <div class="card product-item border-0 mb-4 " style="height:500px;">
                                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0" style="height:350px;">
                                                <img class="img-fluid w-100" src="<?php echo $item['ProdImageLink']?>" alt="Image doesn't exist" 
                                                    style="
                                                    max-height:300px;
                                                    object-fit: contain;
                                                    margin-top:30px;"
                                                > 
                                            </div>
                                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3" style="height:100px;">
                                                <h6 class="text-truncate mb-3"><?php echo $item['ProdName']?></h6>
                                                <div class="d-flex justify-content-center">

                                                    <?php 
                                                    if ($item['ProdDiscount']!=null){ ?>
                                                        <h6>$ <?php echo $item['ProdPrice']- $item['ProdDiscount']?> </h6><h6 class="text-muted ml-2"><del>$ <?php echo $item['ProdPrice']?> </del></h6>
                                                    <?php }
                                                    else { ?>
                                                        <h6>$ <?php echo $item['ProdPrice'] ?> </h6>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                            
                                            <div class="card-footer d-flex justify-content-between bg-light border" style="height:50px;">
                                                
                                                <a href="detail.php? id=<?php echo $id ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>

                                                <?php
                                                    if(isset($_POST['fav'])) {
                                                        addToFav($CusID, $id);
                                                    }
                                                ?>

                                                <form method="post">
                                                    <button type="submit" name="fav" 
                                                    class="btn btn-sm text-dark p-0"><i class="fas fa-heart text-primary mr-1"></i>Add To Favourites</a>
                                                </form>

                                            </div>
                                        </div>
                                </div>

                    <?php } // closing foreach function ?>
                                
                        


                    <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
    
<?php include ("../footer.php"); ?>