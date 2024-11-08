<?php

namespace App\Views\Client;

use App\Views\BaseView;

class Home extends BaseView
{
    public static function render($data = null)
    {
?>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="../../../public/assets/client/img/shop01.png" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Laptop<br>Bộ sưu tập</h3>
                                <a href="#" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="../../../public/assets/client/img/shop03.png" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Phụ kiện<br>Bộ sưu tập</h3>
                                <a href="#" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="../../../public/assets/client/img/shop02.png" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Cameras<br>Bộ sưu tập</h3>
                                <a href="#" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">Sản phẩm mới</h3>
                            <div class="section-nav">
                                <ul class="section-tab-nav tab-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="products-tabs">
                                <div id="tab1" class="tab-pane active">
                                    <div class="products-slick" data-nav="#slick-nav-1">
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../../public/assets/client/img/product01.png" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                    <span class="Mới">Mới</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-Danh mục">Danh mục</p>
                                                <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                                <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm yêu thích</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm so sánh</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem thêm</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>

                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../../public/assets/client/img/product02.png" alt="">
                                                <div class="product-label">
                                                    <span class="Mới">Mới</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-Danh mục">Danh mục</p>
                                                <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                                <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm yêu thích</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm so sánh</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem thêm</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>

                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../../public/assets/client/img/product03.png" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-Danh mục">Danh mục</p>
                                                <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                                <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                                <div class="product-rating">
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm yêu thích</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm so sánh</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem thêm</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>

                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../../public/assets/client/img/product04.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-Danh mục">Danh mục</p>
                                                <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                                <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm yêu thích</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm so sánh</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem thêm</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>

                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../../public/assets/client/img/product05.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-Danh mục">Danh mục</p>
                                                <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                                <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm yêu thích</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm so sánh</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem thêm</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="slick-nav-1" class="products-slick-nav"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="hot-deal" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hot-deal">
                            <ul class="hot-deal-countdown">
                                <li>
                                    <div>
                                        <h3>02</h3>
                                        <span>Ngày</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3>10</h3>
                                        <span>Giờ</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3>34</h3>
                                        <span>Phút</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3>60</h3>
                                        <span>Giây</span>
                                    </div>
                                </li>
                            </ul>
                            <h2 class="text-uppercase">Khuyến mãi cuối tuần</h2>
                            <p>Giảm giá lên đến 50% cho các bộ sưu tập</p>
                            <a class="primary-btn cta-btn" href="#">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">Bán chạy nhất</h3>
                            <div class="section-nav">
                                <ul class="section-tab-nav tab-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Cameras</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="products-tabs">
                                <div id="tab2" class="tab-pane fade in active">
                                    <div class="products-slick" data-nav="#slick-nav-2">
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../../public/assets/client/img/product06.png" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                    <span class="Mới">Mới</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-Danh mục">Danh mục</p>
                                                <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                                <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm yêu thích</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm so sánh</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem thêm</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>

                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../../public/assets/client/img/product07.png" alt="">
                                                <div class="product-label">
                                                    <span class="Mới">Mới</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-Danh mục">Danh mục</p>
                                                <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                                <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm yêu thích</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm so sánh</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem thêm</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>

                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../../public/assets/client/img/product08.png" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-Danh mục">Danh mục</p>
                                                <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                                <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                                <div class="product-rating">
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm yêu thích</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm so sánh</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem thêm</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>

                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../../public/assets/client/img/product09.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-Danh mục">Danh mục</p>
                                                <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                                <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm yêu thích</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm so sánh</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem thêm</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>

                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../../public/assets/client/img/product01.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-Danh mục">Danh mục</p>
                                                <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                                <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm yêu thích</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm so sánh</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem thêm</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="slick-nav-2" class="products-slick-nav"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">Bán chạy nhất</h4>
                            <div class="section-nav">
                                <div id="slick-nav-3" class="products-slick-nav"></div>
                            </div>
                        </div>
                        <div class="products-widget-slick" data-nav="#slick-nav-3">
                            <div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product07.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product08.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product09.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product01.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product02.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">Mới nhất</h4>
                            <div class="section-nav">
                                <div id="slick-nav-4" class="products-slick-nav"></div>
                            </div>
                        </div>

                        <div class="products-widget-slick" data-nav="#slick-nav-4">
                            <div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product04.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product05.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product06.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product07.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product08.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product09.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-sm visible-xs"></div>
                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">Nhiều lượt xem nhất</h4>
                            <div class="section-nav">
                                <div id="slick-nav-5" class="products-slick-nav"></div>
                            </div>
                        </div>

                        <div class="products-widget-slick" data-nav="#slick-nav-5">
                            <div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product01.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product02.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product04.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product05.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../../public/assets/client/img/product06.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-Danh mục">Danh mục</p>
                                        <h3 class="product-name"><a href="#">Sản phẩm 1</a></h3>
                                        <h4 class="product-price">980.000đ <del class="product-old-price">990.000đ</del></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<?php
    }
}
