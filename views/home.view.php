<a href="#site" id="top">Haut</a>

<section class="hero pt-4" id="home">
    <div class="container-fluid mt-5">
        
        <div class="row">
            <div class="col-12">
                <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/doctor1.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/doctor2.png" class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/doctor3.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</section>

<section class="section-padding mt-5" id="about">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h2 class="mb-lg-3 mb-3"><?= ucwords("A propos de nous") ?></h2>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Excepturi recusandae temporibus quo architecto, laboriosam alias
                    ea consequatur quod perspiciatis aliquam nisi impedit laudantium
                    eos odit vero vitae accusamus id fuga nobis culpa officia tenetur?
                    Fugiat corrupti, maiores placeat voluptas nulla rerum amet harum, neque
                    ipsa consectetur aliquam exercitationem nostrum fugit iure nihil eveniet
                    veniam alias? Laborum, hic voluptatibus rem dolorem nisi sequi vel voluptatum
                    necessitatibus corrupti enim, atque pariatur eum? Quo expedita magni temporibus,
                    recusandae atque quae odio, quibusdam repellendus vel,
                    eius harum? Debitis possimus at provident nam eaque hic autem, porro
                    quia ut eius placeat odio rerum laborum facilis?</p>

            </div>

            <div class="col-lg-4 col-md-5 mx-auto">
                <div class="circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                    <p class="featured-text"><span class="featured-number">12</span> ans<br> d'Expériences</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="search">
    <?php require_once("views/search.php"); ?>
</section>

<section id="gallery">
    <div class="container pt-5 mb-5">
        <h2 class="mb-lg-3 mb-3"><?= ucwords("nos galéries")  ?></h2>

        <div class="row">
            <div class="col-lg-6 col-6 ps-0">
                <img src="assets/images/c1.jpg" class="img-fluid galleryImage" alt="get a vaccine"
                    title="get a vaccine for yourself">
            </div>

            <div class="col-lg-6 col-6 pe-0">
                <img src="assets/images/c2.jpg" class="img-fluid galleryImage" alt="wear a mask"
                    title="wear a mask to protect yourself">
            </div>

        </div>
        <div class="row mt-3">

            <div class="col-lg-6 col-6 ps-0">
                <img src="assets/images/c3.jpg" class="img-fluid galleryImage" alt="get a vaccine"
                    title="get a vaccine for yourself">
            </div>

            <div class="col-lg-6 col-6 pe-0">
                <img src="assets/images/c4.jpg" class="img-fluid galleryImage" alt="wear a mask"
                    title="wear a mask to protect yourself">
            </div>

        </div>
    </div>
</section>

<section id="reserve">
    <div class="container pt-5 mb-5">
        <h2 class="mb-lg-3 mb-5 text-center"><?= ucwords("Prendre une reservation")  ?></h2>

        <?php require_once('controllers/reservationControlleur.php'); ?>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-md-4 text-center">
                <h2>Ouverture</h2>
                <h1>7j/7</h1>
                <h1>24h/24</h1>
            </div>
            <div class="col-md-4 text-center">
                <h2>Contact</h2>
                <h3>Email : <br> sunuhopital@gmail.com</h3>
                <h3>Tel : <br> +221 77 874 87 78</h3>
            </div>
            <div class="col-md-4 text-center">
                <h2>Adresse</h2>
                <h3>PA U.17 <br> EN FACE <br>
                    TERMINUS 227</h3>
            </div>
        </div>
    </div>

</section>
<section id="pied" class="bg-success p-2">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                &copy; Touts droits réservés à SunuHopital
            </div>
            <div class="col-md-6 text-md-right">Conçu avec coeur par <a href="" class="text-warning">Sunucode</a> </div>
        </div>
    </div>
</section>