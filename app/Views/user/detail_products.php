<?= $this->extend('user/layouts/app4'); ?>
<?= $this->section('content'); ?>

    <!-- !start #header -->

    <!-- start #main-site -->

                <div class="container-2">
                    <div class="row">
                        <div class="col-sm-6">
                        <img src="<?= base_url("assets/img/product3.png") ?>" alt="Product Image" style="width: 300px; height: auto;">

                            <div class="form-row pt-4 font-size-16 font-baloo">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-5">
                            <h5 class="font-baloo font-size-20">Whiskas Tuna Flavour 1+ Years 80g</h5>
                            <small>by Whiskas</small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                                  <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                            </div>
                            <hr class="m-0">

                            <!---    product price       -->
                                <table class="my-3">

                                    <tr class="font-rale font-size-14">
                                        <td>Deal Price:</td>
                                        <td class="font-size-20 text-danger">Rp.<span>7.000</span><small class="text-dark font-size-12">&nbsp;&nbsp;not Include taxes</small></td>
                                    </tr>
                              
                                </table>
                            <!---    !product price       -->

                             <!--    #policy -->
                                <div id="policy">
                                    <div class="d-flex">
                                        <div class="return text-center mr-5">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">7 Days <br> Replacement</a>
                                        </div>
                                        <div class="return text-center mr-5">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">Same Day <br>Deliverd</a>
                                        </div>
                                        <div class="return text-center mr-5">
                                            <div class="font-size-20 my-2 color-second">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <!--    !policy -->
                                <hr>

                            <!-- order-details -->
                                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                    <small>Delivery by : Mar 29  - Apr 1</small>
                                    <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                                </div>
                             <!-- !order-details -->

                             <div class="row">
                                 <div class="col-6">
                                        
                                 </div>
                                 <div class="col-6">
                                   <!-- product qty section -->  
                                     <div class="qty d-flex">
                                         <h6 class="font-baloo">Qty</h6>
                                         <div class="px-4 d-flex font-rale">
                                             <button class="qty-up border bg-dark" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                             <input type="text" data-id="pro1" class="qty_input border px-1 w-30 bg-light" disabled value="1" placeholder="1">
                                             <button data-id="pro1" class="qty-down border bg-dark"><i class="fas fa-angle-down"></i></button>
                                         </div>
                                     </div>
                                    <!-- !product qty section -->  
                                 </div>
                             </div>

                            <!-- size -->
                            <div class="size my-3">
                                    <h6 class="font-baloo">Size :</h6>
                                    <div class="d-flex justify-content-between w-75">
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">80 g</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">1.1 Kg</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">1.2 Kg</button>
                                        </div>
                                    </div>
                                </div>
                            <!-- !size -->
                        </div>

                        <div class="col-12">
                            <h6 class="font-rubik">Product Description</h6>
                            <hr>
                            <p class="font-rale font-size-14">whiskas junior tuna pouch
                              berat 85gr</p>
                        </div>
                    </div>
                </div>
        <!--   !product  -->


         
              <!-- !owl carousel -->
            </div>
            <?= $this->endSection(); ?>
    