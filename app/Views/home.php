<?= $this->extend("layout/base");?>
<?=$this->section("styles")?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/home.css" />
<?= $this->endSection();?>
<?= $this->section("content");?>
<?php

$start    = '1971-01-01';
$end      = date('Y-m-d');
$getRangeYear   = range(gmdate('Y', strtotime($start)), gmdate('Y', strtotime($end)));
$getRangeYear=array_reverse($getRangeYear);
?>
<section class="main-head">
    <div class="container">
        <div class="content">
            <div class="heading1">
                <h1>
                    Get a campervan and discover new <br />
                    adventures!
                </h1>
            </div>
            <div class="para">
                <p>
                    Check out our listings and find your new home <br />
                    on four wheels!
                </p>
            </div>
            <div class="butn">
                <button class="discover-btn">Discover more</button>
            </div>
        </div>
        <div class="dorp-section">
            <div class="selection">
                <div class="container">
                    <form method="get" action="<?php  echo site_url('adds')?>">
                    <div class="select-row row">
                        <div class="section-col col-sm-6 col-md-3 col-lg-2">
                            <div class="form-group">
                                <select class="choose js-example-basic-single w-100" name="make_id" id="make_id">
                                    <option value="">Choose Make</option>
                                    <?php foreach($makes as $make):?>
                                        <option value="<?= esc($make->slug)?>"><?=esc(ucfirst($make->title));?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="section-col col-sm-6 col-md-3 col-lg-2">
                            <div class="form-group">
                                <select class="choose js-example-basic-single w-100" name="model" id="model_id">
                                    <option value="">Choose Model</option>

                                </select>
                            </div>
                        </div>
                        <div class="section-col col-sm-6 col-md-3 col-lg-2">
                            <div class="form-group">

                                <select
                                        class="choose js-example-basic-single w-100"
                                        name="price"
                                >
                                    <option value="">Max Price</option>
                                    <?php foreach($prices as $price):?>
                                        <option value="<?= esc($price->price)?>"><?=esc('£'.$price->price);?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="section-col col-sm-6 col-md-3 col-lg-2">
                            <div class="form-group">

                                <select class="choose js-example-basic-single w-100" name="vehicle_type" >
                                    <option value="">Choose Vehicle Type</option>
                                    <?php foreach($vehicle_types as $vehicle_type):?>
                                        <option value="<?= esc($vehicle_type)?>"><?=esc(ucfirst($vehicle_type));?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="search-btnn">
                                <button class="search">Search</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services we offer -->
<section class="services-offer">
    <div class="container">
        <div class="services">
            <div class="services-text">
                <h1>Services we offer</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    pretium est ac tortor convallis sollicitudin eget vel nisi.
                    <br />
                    Aliquam dignissim ante tempus massa aliquam, et elementum dui
                    egestas.
                </p>
            </div>
            <div class="row">
                <div class="collum col-sm-12 col-md-6 col-lg-3">
                    <div class="hire">
                        <div class="inner-hire"><h6>"Buy"</h6></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="collum col-sm-12 col-md-6 col-lg-3">
                    <div class="hire">
                        <div class="inner-hire"><h6>"Sell"</h6></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="collum col-sm-12 col-md-4 col-lg-4">
                <div class="its-work">
                    <h6>How it works</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="learn-btn">
                        <button class="learn-more">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="collum col-sm-12 col-md-4 col-lg-2">
                <div class="browse">
                    <div class="box-content">
                        <h6>01</h6>
                        <h6>Browse</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
            </div>
            <div class="collum col-sm-12 col-md-4 col-lg-2">
                <div class="browse">
                    <div class="box-content">
                        <h6>02</h6>
                        <h6>Select</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
            </div>
            <div class="collum col-sm-12 col-md-4 col-lg-2">
                <div class="browse">
                    <div class="box-content">
                        <h6>03</h6>
                        <h6>Order</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
            </div>
            <div class="collum col-sm-12 col-md-4 col-lg-2">
                <div class="browse">
                    <div class="box-content">
                        <h6>04</h6>
                        <h6>Pickup</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Top Categories -->
<section class="Top-Categories">
    <div class="container">
        <div class="Top-Categories">
            <div class="categories-text">
                <h1>Top Categories</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    pretium est ac tortor convallis sollicitudin eget vel nisi.
                    Aliquam dignissim ante tempus massa aliquam, et elementum dui
                    egestas.
                </p>
            </div>
            <div class="categories-box">
                <div class="row">
                    <div class="collum col-sm-12 col-md-12 col-lg-4">
                        <div class="carvans">
                            <div class="car-text">
                                <img src="<?= base_url(); ?>/public/assets/home-img/Group 55.svg" alt="car van" />
                                <h6>Carvans</h6>
                            </div>
                        </div>
                    </div>
                    <div class="collum col-sm-12 col-md-12 col-lg-4">
                        <div class="carvans">
                            <div class="car-text">
                                <img src="<?= base_url(); ?>/public/assets/home-img/Group 22.svg" alt="car van" />
                                <h6>Campervans</h6>
                            </div>
                        </div>
                    </div>
                    <div class="collum col-sm-12 col-md-12 col-lg-4">
                        <div class="carvans">
                            <div class="car-text">
                                <img src="<?= base_url(); ?>/public/assets/home-img/Group 47.svg" alt="car van" />
                                <h6>Motorhomes</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Brands & Partners -->
<section class="featured">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="featured-text">
                    <h6>
                        Featured Brand <br />
                        & Partners
                    </h6>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6" >
                <div
                        id="carouselExampleControls"
                        class="carousel slide carousel-dark"
                        data-bs-ride="carousel"
                >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1438.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1440.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1441.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1442.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1438.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1440.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1441.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1442.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1438.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1440.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1441.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                                <div class="cards card">
                                    <img
                                            src="<?= base_url(); ?>/public/assets/home-img/Group 1442.png"
                                            class="card-img-top"
                                            alt="..."
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev"
                    >
                  <span
                          class="carousel-control-prev-icon"
                          aria-hidden="true"
                  ></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#carouselExampleControls"
                            data-bs-slide="next"
                    >
                  <span
                          class="carousel-control-next-icon"
                          aria-hidden="true"
                  ></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Explore Latest Blogs -->
<section class="blogs">
    <div class="blog-heading">
        <h1>Explore Latest Blogs</h1>
    </div>
    <!-- <div class="container"></div> -->
    <div
            id="carouselExampleControls_1"
            class="main-carousel carousel slide carousel-dark"
            data-bs-ride="carousel"
    >
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="blog-wrapper">
                    <div class="blog">
                        <img
                                src="<?= base_url(); ?>/public/assets/home-img/Rectangle 60.png"
                                class="card-img-top"
                                alt="..."
                        />
                        <div class="card-body">
                            <div class="blog-title">
                                <h5 class="card-title">Blog Title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>

                                <a href="#" class="cont-read">Continue reading</a>
                            </div>
                            <hr />
                            <div class="calander-comment">
                                <i class="icons fa fa-calendar-o"></i>
                                <a href="" class="october">October 25, 2021 <br></a>
                                <i class="icons fa fa-commenting-o"></i>
                                <a href="" class="no-comment">No Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog">
                        <img
                                src="<?= base_url(); ?>/public/assets/home-img/Rectangle 61.png"
                                class="card-img-top"
                                alt="..."
                        />
                        <div class="card-body">
                            <div class="blog-title">
                                <h5 class="card-title">Blog Title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>

                                <a href="#" class="cont-read">Continue reading</a>
                            </div>
                            <hr />
                            <div class="calander-comment">
                                <i class="icons fa fa-calendar-o"></i>
                                <a href="" class="october">October 25, 2021 <br></a>
                                <i class="icons fa fa-commenting-o"></i>
                                <a href="" class="no-comment">No Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog">
                        <img
                                src="<?= base_url(); ?>/public/assets/home-img/Rectangle 62.png"
                                class="card-img-top"
                                alt="..."
                        />
                        <div class="card-body">
                            <div class="blog-title">
                                <h5 class="card-title">Blog Title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>

                                <a href="#" class="cont-read">Continue reading</a>
                            </div>
                            <hr />
                            <div class="calander-comment">
                                <i class="icons fa fa-calendar-o"></i>
                                <a href="" class="october">October 25, 2021 <br></a>
                                <i class="icons fa fa-commenting-o"></i>
                                <a href="" class="no-comment">No Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="blog-wrapper">
                    <div class="blog">
                        <img
                                src="<?= base_url(); ?>/public/assets/home-img/Rectangle 60.png"
                                class="card-img-top"
                                alt="..."
                        />
                        <div class="card-body">
                            <div class="blog-title">
                                <h5 class="card-title">Blog Title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>

                                <a href="#" class="cont-read">Continue reading</a>
                            </div>
                            <hr />
                            <div class="calander-comment">
                                <i class="icons fa fa-calendar-o"></i>
                                <a href="" class="october">October 25, 2021 <br></a>
                                <i class="icons fa fa-commenting-o"></i>
                                <a href="" class="no-comment">No Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog">
                        <img
                                src="<?= base_url(); ?>/public/assets/home-img/Rectangle 61.png"
                                class="card-img-top"
                                alt="..."
                        />
                        <div class="card-body">
                            <div class="blog-title">
                                <h5 class="card-title">Blog Title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>

                                <a href="#" class="cont-read">Continue reading</a>
                            </div>
                            <hr />
                            <div class="calander-comment">
                                <i class="icons fa fa-calendar-o"></i>
                                <a href="" class="october">October 25, 2021 <br></a>
                                <i class="icons fa fa-commenting-o"></i>
                                <a href="" class="no-comment">No Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog">
                        <img
                                src="<?= base_url(); ?>/public/assets/home-img/Rectangle 62.png"
                                class="card-img-top"
                                alt="..."
                        />
                        <div class="card-body">
                            <div class="blog-title">
                                <h5 class="card-title">Blog Title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>

                                <a href="#" class="cont-read">Continue reading</a>
                            </div>
                            <hr />
                            <div class="calander-comment">
                                <i class="icons fa fa-calendar-o"></i>
                                <a href="" class="october">October 25, 2021 <br></a>
                                <i class="icons fa fa-commenting-o"></i>
                                <a href="" class="no-comment">No Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="blog-wrapper">
                    <div class="blog">
                        <img
                                src="<?= base_url(); ?>/public/assets/home-img/Rectangle 60.png"
                                class="card-img-top"
                                alt="..."
                        />
                        <div class="card-body">
                            <div class="blog-title">
                                <h5 class="card-title">Blog Title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>

                                <a href="#" class="cont-read">Continue reading</a>
                            </div>
                            <hr />
                            <div class="calander-comment">
                                <i class="icons fa fa-calendar-o"></i>
                                <a href="" class="october">October 25, 2021 <br></a>
                                <i class="icons fa fa-commenting-o"></i>
                                <a href="" class="no-comment">No Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog">
                        <img
                                src="<?= base_url(); ?>/public/assets/home-img/Rectangle 61.png"
                                class="card-img-top"
                                alt="..."
                        />
                        <div class="card-body">
                            <div class="blog-title">
                                <h5 class="card-title">Blog Title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>

                                <a href="#" class="cont-read">Continue reading</a>
                            </div>
                            <hr />
                            <div class="calander-comment">
                                <i class="icons fa fa-calendar-o"></i>
                                <a href="" class="october">October 25, 2021 <br></a>
                                <i class="icons fa fa-commenting-o"></i>
                                <a href="" class="no-comment">No Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog">
                        <img
                                src="<?= base_url(); ?>/public/assets/home-img/Rectangle 62.png"
                                class="card-img-top"
                                alt="..."
                        />
                        <div class="card-body">
                            <div class="blog-title">
                                <h5 class="card-title">Blog Title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make
                                    up the bulk of the card's content.
                                </p>

                                <a href="#" class="cont-read">Continue reading</a>
                            </div>
                            <hr />
                            <div class="calander-comment">
                                <i class="icons fa fa-calendar-o"></i>
                                <a href="" class="october">October 25, 2021 <br></a>
                                <i class="icons fa fa-commenting-o"></i>
                                <a href="" class="no-comment">No Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button
                class="control-btn carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleControls_1"
                data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
                class="control-btn carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleControls_1"
                data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<?= $this->endSection();?>
<?=$this->section("scripts")?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">

    $(".js-example-basic-single").select2();

    $("#make_id").change(function(){
        $.ajax({
            url: "<?php echo site_url('get-model'); ?>",
            beforeSend: function (f) {

            },
            method: 'POST',
            data: {
                id: $('#make_id').val(),
            },
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            success: function (response) {
                var models=JSON.parse(response);
                $("#model_id").empty();
                $("#model_id").append(new Option("Choose Model", "")).trigger("chosen:updated");
                $.each(models, function (i, model) {
                    $('#model_id').append($('<option>', {
                        value: model.slug,
                        text : model.title
                    })).trigger("chosen:updated");
                });
            }
        })
    });
</script>

<?= $this->endSection();?>
