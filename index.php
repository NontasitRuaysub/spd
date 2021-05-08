<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include('elements/head.php') ?>
<body>
    <header>
        <!-- Shop Annoucement -->
        <?php include('elements/shop-announce.php') ?>
        <!-- Header Navbar -->
        <?php include('elements/navbar.php') ?>
        <!-- Carousel header -->
        <div id="header-carousel" class="owl-carousel owl-theme">
            <div class="item">
                <img src="imgs/carousel-img/dog-food.png" alt="STAR PETS by DEE DOG" title="STAR PETS by DEE DOG">
            </div>
            <div class="item">
                <img src="imgs/carousel-img/dog-care.png" alt="STAR PETS by DEE DOG" title="STAR PETS by DEE DOG">
            </div>
        </div>
        <div class="has-text-centered header-group">
            <div class="container">
                <div class="columns">
                    <div class="column header-group-text">
                        <div class="content">
                            <h3 class="is-size-3">บริการยอดเยี่ยม</h3>
                            <p>กว่า 90% ของลูกค้าพึงพอใจในบริการของเรา</p>
                        </div>
                    </div>
                    <span class="divider"></span>
                    <div class="column header-group-text">
                        <div class="content">
                            <h3 class="is-size-3">สินค้าคุณภาพ</h3>
                            <p>เพื่อให้มั่นใจว่าลูกค้าจะได้รับสินค้าที่ดีที่สุด</p>
                        </div>
                    </div>
                    <span class="divider"></span>
                    <div class="column header-group-text">
                        <div class="content">
                            <h3 class="is-size-3">จัดส่งถึงบ้าน</h3>
                            <p>การคำนวณราคาค่าจัดส่งตามน้ำหนักจริง</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
<!-- Product Categories Section -->
        <section id="product-cate-section" class="section color-bg has-text-centered">
            <div class="container">
                <h2 class="is-size-2 has-text-weight-semibold">หมวดหมู่สินค้า</h2>
                <div class="columns">
                    <div class="column">
                        <div class="content">
                            <a href="data/product-categories/dog-section/dog-landing-pg.php">
                                <img src="imgs/product-categories-img/dog-logo.png" class="Product-Categories-img" alt="สินค้าสำหรับน้องหมา">
                                <p class="pc-text is-size-3 has-text-weight-semibold">น้องหมา</p>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content">
                            <a href="data/product-categories/cat-section/cat-landing-pg.php">
                                <img src="imgs/product-categories-img/cat-logo.png" class="Product-Categories-img" alt="สินค้าสำหรับน้องแมว">
                                <p class="pc-text is-size-3 has-text-weight-semibold">น้องแมว</p>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content">
                            <a href="data/product-categories/other-section/other-landing-pg.php">
                                <img src="imgs/product-categories-img/rabbit-logo.png" class="Product-Categories-img" alt="สินค้าสำหรับสัตว์อื่นๆ">
                                <p class="pc-text is-size-3 has-text-weight-semibold">สัตว์อื่นๆ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Promotions Section -->
        <section id="first-promotion" class="section color-bg">
            <div class="container">
                <h2 class="is-size-2 has-text-weight-semibold has-text-centered">โปรโมชั่น</h2>
                <div class="columns">
                    <div class="column">
                        <div class="content">
                            <a href="#">
                                <img src="imgs/promotion-img/duostick.jpg" alt="Jerhigh Duo Stick 3 ชิ้น ราคา 130 บาท" title="Duo Stick 3 ชิ้น ราคา 130 บาท">
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content">
                            <a href="#">
                                <img src="imgs/promotion-img/jerhigh.jpg" alt="Jerhigh Pounch 12 ชิ้น ราคา 200 บาท" title="Jerhigh 12 ชิ้น ราคา 200 บาท">
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content">
                            <a href="#">
                                <img src="imgs/promotion-img/monchou.jpg" alt="Monchou Dog 4 ชิ้น ราคา 100 บาท" title="Monchou 4 ชิ้น ราคา 100 บาท">
                            </a>
                        </div>
                    </div>
                </div>
                <p class="view-all-promo-link"><a href="data/promotions/promotions-landing-pg.php" class="is-size-4">ดูโปรโมชั่นทั้งหมด</a></p>
            </div>
        </section>
<!-- Line and Ads Section -->
        <section id="line-ads-section" class="section color-bg">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column">
                        <div class="content line-detail">
                            <h3 class="is-size-3 has-text-weight-bold">สินค้าท้าลมร้อน!</h3>
                            <p class="is-size-4">Lorem, ipsum dolor sit amet magni veritatis quo repudiandae sapiente nostrum atque natus cum distinctio autem sed iste obcaecati, dignissimos nobis officia quas asperiores consequuntur?</p>
                            <a class="button line-button is-large" href="https://lin.ee/96so2yC">แอด Line เลยวันนี้!</a>
                        </div>
                    </div>
                    <div class="column">
                        <img src="imgs/line-ads-section-img/line-ads-section-img.png" alt="สินค้าท้าลมร้อน" title="สินค้าท้าลมร้อน">
                    </div>
                </div>
            </div>
        </section>
<!-- Best Selling Section -->
        <section id="best-sell-section" class="section color-bg">
            <div class="container">
                <h2 class="is-size-2 has-text-weight-semibold has-text-centered">สินค้าขายดี</h2>
                <div class="columns is-multiline is-mobile">
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <a href="pd-detail-demo.html">
                                <img src="imgs/best-sell-img/demo.png" alt="" title="">
                                <h4 class="is-size-4">ชื่อสินค้า</h4>
                            </a>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="pd-detail-demo.html">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <a href="pd-detail-demo.html">
                                <img src="imgs/best-sell-img/demo.png" alt="" title="">
                                <h4 class="is-size-4">ชื่อสินค้า</h4>
                            </a>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="pd-detail-demo.html">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <a href="pd-detail-demo.html">
                                <img src="imgs/best-sell-img/demo.png" alt="" title="">
                                <h4 class="is-size-4">ชื่อสินค้า</h4>
                            </a>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="pd-detail-demo.html">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <a href="pd-detail-demo.html">
                                <img src="imgs/best-sell-img/demo.png" alt="" title="">
                                <h4 class="is-size-4">ชื่อสินค้า</h4>
                            </a>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="pd-detail-demo.html">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <a href="pd-detail-demo.html">
                                <img src="imgs/best-sell-img/demo.png" alt="" title="">
                                <h4 class="is-size-4">ชื่อสินค้า</h4>
                            </a>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="pd-detail-demo.html">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <a href="pd-detail-demo.html">
                                <img src="imgs/best-sell-img/demo.png" alt="" title="">
                                <h4 class="is-size-4">ชื่อสินค้า</h4>
                            </a>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="pd-detail-demo.html">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <a href="pd-detail-demo.html">
                                <img src="imgs/best-sell-img/demo.png" alt="" title="">
                                <h4 class="is-size-4">ชื่อสินค้า</h4>
                            </a>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="pd-detail-demo.html">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <a href="pd-detail-demo.html">
                                <img src="imgs/best-sell-img/demo.png" alt="" title="">
                                <h4 class="is-size-4">ชื่อสินค้า</h4>
                            </a>
                            <p class="is-size-5">แท็กไลน์..........</p>
                            <a class="button best-sell-button" href="pd-detail-demo.html">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
                <div class="view-all-button">
                    <a class="button view-best-sell-button" href="data/best-sell-section/best-sell-pg.php">ดูทั้งหมด</a>
                </div>
            </div>
        </section>
<!-- Contact Tagline -->
        <?php include('elements/contact-tagline.php') ?>
<!-- Promotion Announcement -->
        <section id="promo-announce" class="section color-bg">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column">
                        <img src="imgs/promo-announce-img/demo1.png" alt="แจกฟรี! เสื้อน้องหมาสุดชิค เมื่อซื้อสินค้าจากทางร้าน Start Pets by Dee Dog" title="แจกฟรี! เสื้อน้องหมาสุดชิค เมื่อซื้อสินค้าจากทางร้าน Start Pets by Dee Dog">
                    </div>
                    <div class="column">
                        <div class="content promo-announce-detail">
                            <h3 class="is-size-2">แจกฟรี! เสื้อน้องหมาสุดชิค</h3>
                            <p class="is-size-4">มูลค่า 199 บาท</p>
                            <a class="button promo-detail-button mb-4" href="#">คลิกเพื่ออ่านรายละเอียด</a>
                            <p class="is-size-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ad nam assumenda ex autem quas commodi libero officia. Asperiores ad molestias id quas labore est rem cumque quis totam odio!</p>
                            <!-- Wait icon -->
                            <div class="share-button">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Grooming Service -->
        <section id="grooming-service" class="section">
            <div class="grooming-gradient"></div>
            <div class="container">
                <div class="content">
                    <h1>Grooming Service</h1>
                    <p>Tell your brand’s strou through images</p>
                </div>
            </div>
        </section>
<!-- Products Keyword -->
        <section id="product-keyword" class="section color-bg">
            <div class="container">
                <h2 class="is-size-2 has-text-weight-semibold has-text-centered">สินค้า Keyword</h2>
                <div class="columns is-multiline is-mobile">
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <img src="imgs/product-key-img/demo.png" alt="">
                            <h4>ชื่อสินค้า</h4>
                            <p>แท็กไลน์..........</p>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <img src="imgs/product-key-img/demo.png" alt="">
                            <h4>ชื่อสินค้า</h4>
                            <p>แท็กไลน์..........</p>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <img src="imgs/product-key-img/demo.png" alt="">
                            <h4>ชื่อสินค้า</h4>
                            <p>แท็กไลน์..........</p>
                        </div>
                    </div>
                    <div class="column is-6-mobile is-3-tablet">
                        <div class="content">
                            <img src="imgs/product-key-img/demo.png" alt="">
                            <h4>ชื่อสินค้า</h4>
                            <p>แท็กไลน์..........</p>
                        </div>
                    </div>
                </div>
                <div class="view-all-button product-key-button">
                    <a class="button key-sell-button" href="#">ดูทั้งหมด</a>
                </div>
            </div>
        </section>
<!-- Articles Section -->
        <section id="article-section" class="section color-bg ">
            <div class="container">
                <h2 class="is-size-2 has-text-weight-semibold has-text-centered">บทความน่าสนใจ</h2>
                <div class="columns">
                    <div class="column">
                        <div class="content px-5">
                            <h2 class="is-size-2">Your post's title here</h2>
                            <p class="is-size-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur suscipit repellat tempora reiciendis nulla velit esse officiis aut a consectetur nesciunt numquam et, similique consequuntur nisi impedit itaque aperiam maxime?</p>
                            <a class="button article-button" href="#">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content px-5">
                            <h2 class="is-size-2">Your post's title here</h2>
                            <p class="is-size-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur suscipit repellat tempora reiciendis nulla velit esse officiis aut a consectetur nesciunt numquam et, similique consequuntur nisi impedit itaque aperiam maxime?</p>
                            <a class="button article-button" href="#">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content px-5">
                            <h2 class="is-size-2">Your post's title here</h2>
                            <p class="is-size-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur suscipit repellat tempora reiciendis nulla velit esse officiis aut a consectetur nesciunt numquam et, similique consequuntur nisi impedit itaque aperiam maxime?</p>
                            <a class="button article-button" href="#">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Promotions Section -->
        <section id="second-promotion" class="section color-bg">
            <div class="container">
                <h2 class="is-size-2 has-text-weight-semibold has-text-centered">โปรโมชั่น</h2>
                <div class="columns">
                    <div class="column">
                        <div class="content">
                            <a href="#">
                                <img src="imgs/promotion-img/jinny.jpg" alt="Jinny Stick 6 ชิ้น ราคา 120 บาท" title="Jinny 6 ชิ้น ราคา 120 บาท">
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content">
                            <a href="#">
                                <img src="imgs/promotion-img/monchou-pack-cat.jpg" alt="Monchou cat 5 ชิ้น ราคา 100 บาท" title="Monchou cat 5 ชิ้น ราคา 100 บาท">
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content">
                            <a href="#">
                                <img src="imgs/promotion-img/creamy.jpg" alt="Creamy Treats 3 ชิ้น ราคา 110 บาท" title="Creamy Treats 3 ชิ้น ราคา 110 บาท">
                            </a>
                        </div>
                    </div>
                </div>
                <p class="view-all-promo-link"><a href="data/promotions/promotions-landing-pg.php" class="is-size-4">ดูโปรโมชั่นทั้งหมด</a></p>
            </div>
        </section>
<!-- Review Section -->
        <section id="review-section" class="section color-bg">
            <div class="container has-text-centered">
                <h2 class="title s-size-2 has-text-weight-semibold has-text-centered">รีวิวจากลูกค้า</h2>
                <div class="review-carousel owl-carousel owl-theme carousel-group">
                    <div class="item carousel-item">
                        <p><i class="fas fa-quote-left"></i></p>
                        <blockquote>สินค้าดีไม่มีชำรุดให้น้องกระต่ายที่บ้านทานแล้วโอเคดีค่ะ</blockquote> - คุณ nongeye
                    </div>
                    <div class="item carousel-item">
                        <p><i class="fas fa-quote-left"></i></p>
                        <blockquote>พนักงานต้อนรับน่ารัก บริการเป็นกันเอง แนะนำสินค้าได้ดี ชอบมากๆเลย</blockquote> - คุณ Eve Thipapan
                        Kakhanmalee
                    </div>
                    <div class="item carousel-item">
                        <p><i class="fas fa-quote-left"></i></p>
                        <blockquote>ร้านบริการดีมากค่ะ ราคาไม่แพง พนักงานน่ารักมากๆค่ะ</blockquote> - คุณ Fah Wichuda
                    </div>
                    <div class="item carousel-item">
                        <p><i class="fas fa-quote-left"></i></p>
                        <blockquote>ร้านบริการดีมากค่ะ ราคาไม่แพง พนักงานน่ารักมากๆค่ะ</blockquote> - คุณ Fah Wichuda
                    </div>
                </div>
            </div>
        </section>
<!-- Call to Action -->
        <?php include('elements/call-to-action.php') ?>
<!-- Footer -->
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