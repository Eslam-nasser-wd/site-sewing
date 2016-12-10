<?php include 'assets/header.php' ?>

<!--Start Categories cards-->
<section id="categories_cards">
    <div class="grid">
        
        <div class="col-one">
            <div class="card card_1"
                style="background-image: url('assets/img/wallpaper/7.png')">
                <div class="text">
                    Category name
                    <span>65 products</span>
                </div>
            </div><!--/card-->
            <div class="card card_4"
            style="background-image: url('assets/img/wallpaper/9.jpg')">
                <div class="text">
                    Category name
                    <span>65 products</span>
                </div>
            </div><!--/card-->
        </div><!--/col-one-->
        
        <div class="col-two">
            <div class="card card_2"
                style="background-image: url('assets/img/wallpaper/8.jpg')">
                <div class="text">
                    Category name
                    <span>65 products</span>
                </div>
            </div><!--/card-->
            <div class="card card_3"
                style="background-image: url('assets/img/wallpaper/6.jpg')">
                <div class="text">
                    Category name
                    <span>65 products</span>
                </div>
            </div><!--/card-->
        </div>

    </div><!--/grid-->
</section>
<!--End Categories cards-->
<div class="cf"></div>
<!--Start Shop Samples-->
<section id="shop_samples">
    <div class="devider">
        <h4>featured products</h4>
        <span></span>
    </div><!--/devider-->

    <div class="products-list row">
        
        <?php for ($i=1; $i < 9; $i++) { ?> 
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="single-product">
                <a href="#">
                    <div class="product-image"
                        style="background-image: url('assets/img/products/0<?php echo $i ?>.png')">
                        <div class="price">100LE</div>    
                    </div>
                </a>
                <div class="product-name">
                    <a href="#">Product Name</a>
                </div>
                <div class="description">Some description about the product</div>
                <div class="category-name"><a href="#">Category name</a></div>
                <a href="#" class="order-btn">Order</a>
            </div><!--single-product-->  
        </div><!--/cols-->
        <?php } ?>
        
    </div><!--/products-list-->
</section>
<!--End Shop Samples-->

<!--Start Gallery-->
<section id="gallery">
    <div class="devider">
        <h4>Gallery</h4>
        <span></span>
    </div><!--/devider-->

    <div class="grid">
        <?php for ($i=1; $i < 11; $i++) { ?>
            <div class="grid-item <?php if($i % 2 == 0) { echo 'grid-item--height2'; } ?>">
                <img src="https://unsplash.it/280/350/?random=<?php echo $i ?>" alt="">
                <a href="https://unsplash.it/280/350/?random=<?php echo $i ?>" data-lightbox="image-1" data-title="My caption">
                    <div class="layer">
                        <i class="icon ion-arrow-expand"></i>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>

</section>
<!--End Gallery-->

<?php include 'assets/footer.php' ?>