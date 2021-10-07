@extends('layouts.app', ['class' => 'register-page', 'page' => __('Register Page'), 'contentClass' => 'register-page'])
<div class="top-nav-bar">
        <div class="search-box">

            <input type="text" class="form-control">
            <span class="input-group-text"><i class="fa fa-search"></i></span>
        </div>
        <div class="menu-bar">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-shopping-basket"></i> cart</a>
                </li>
            </ul>
        </div>
    </div>

    <section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="slider">
                        <div id="product-slider" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/product (1).jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/product (2).jpg" class="d-block w-100" alt="...">
                                </div>`
                                <div class="carousel-item">
                                    <img src="images/product (3).jpg" class="d-block w-100" alt="...">
                                </div>
                                <a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-5">
                    <p class="new-arrival text-center">NEW</p>
                    <h2>Men's T shirt V neck - Black Color</h2>
                    <p>Product Code: PORIEJAJ</p>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                    <p class="price">USD $15.00</p>
                    <p><b>Availability: In stock </b></p>
                    <p><b>Condition: New</b></p>
                    <label>Quantity:</label>
                    <input type="text" value="1">
                    <button type="button" class="btn btn-primary">Add To Cart</button>
                    <br>
                    <br>
                    <label>Bid:</label>
                    <input type="text" value="100">
                    <button type="button" class="btn btn-primary">Taka</button>

                </div>
                <div class="col-lg-2">

                </div>
            </div>
        </div>

    </section>

    <section class="product-desc">
        <div class="container">
            <h6>Product Description</h6>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere velit repellendus tenetur non perferendis libero corrupti suscipit, eos cupiditate dolorum placeat culpa molestiae tempore ipsam! Dolorem minima officiis porro magni.</p>
            <hr>
        </div>
        <div class="container">
            <div class="title-box">
                <h2>Similar</h2>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-top">
                        <img src="images/shoes.jpg" alt="">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-shopping-cart"></i>
                            </button>

                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <h3>Fitness Shoes</h3>
                        <h5>$40.00</h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-top">
                        <img src="images/shoes.jpg" alt="">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-shopping-cart"></i>
                            </button>

                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Fitness Shoes</h3>
                        <h5>$40.00</h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-top">
                        <img src="images/shoes.jpg" alt="">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-shopping-cart"></i>
                            </button>

                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <h3>Fitness Shoes</h3>
                        <h5>$40.00</h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-top">
                        <img src="images/shoes.jpg" alt="">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-shopping-cart"></i>
                            </button>

                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <h3>Fitness Shoes</h3>
                        <h5>$40.00</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>