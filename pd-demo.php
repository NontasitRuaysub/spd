<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include('elements/head.php') ?>
<link rel="stylesheet" href="css/product-page.css">
<body>
    <header>
        <!-- Shop Annoucement -->
        <?php include('elements/shop-announce.php') ?>
        <!-- Header Navbar -->
        <?php include('elements/navbar.php') ?>
    </header>

    <main>
    <section id="product-detail-section" class="section color-bg">
            <div class="container">
                <div class="product-detail columns is-multiline is-mobile is-vcentered">
                    <div class="column is-12-mobile is-6-tablet">
                        <div class="content">
                            <img class="product-img" src="images/products-img/demo.png" alt="">
                        </div>
                    </div>
                    <div class="product-info column is-12-mobile is-6-tablet">
                        <div class="content">
                            <h4 class="is-size-4 has-text-weight-bold">Earthborn Holistic Ocean Fusion</h4>
                            <p class="is-size-5 my-5">ขนาด 1.5 kg</p>
                            <p class="is-size-5 my-5">ราคาทั่วไป<span class="price general-price">890 บาท</span></p>
                            <p class="is-size-5 my-5">ราคาสมาชิก<span class="price member-price">875 บาท</span></p>
                            <img src="images/contact-tagline-img/line-for-pd-page.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="content product-description">
                    <p class="is-size-4 has-text-weight-semibold">รายละเอียดสินค้า</p>
                    <p class="is-size-4">I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.</p>
                </div>
                <div class="content page-link-group">
                    <p class="page-link is-size-4"><a href="#"><span>&lt;</span>ก่อนหน้า</a></p>
                    <p class="page-link is-size-4"><a href="#">หน้าถัดไป<span>&gt;</span></a></p>
                </div>
                <hr>
            </div>
        </section>

        <!-- Relate products -->
        <section class="section my-6">
            <div class="container">
                <h4 class="is-size-4 has-text-weight-semibold has-text-centered mb-6">คุณอาจจะชอบสิ่งนี้</h4>
                <div class="columns is-multiline is-mobile">
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <img src="images/products-img/demo.png" alt="">
                            <h4 class="is-size-4">ชื่อสินค้า</h4>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="#">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <img src="images/products-img/demo.png" alt="">
                            <h4 class="is-size-4">ชื่อสินค้า</h4>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="#">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <img src="images/products-img/demo.png" alt="">
                            <h4 class="is-size-4">ชื่อสินค้า</h4>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="#">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <img src="images/products-img/demo.png" alt="">
                            <h4 class="is-size-4">ชื่อสินค้า</h4>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="#">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Call to Action -->
        <?php include('elements/call-to-action.php') ?>
<!-- Footer Section -->
        <?php include('elements/footer.php') ?>
    </main>


    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous"></script>
    <!-- Jquey CDN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <!-- Owl Carousel CDN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <!-- JS File -->
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>