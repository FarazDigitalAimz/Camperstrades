<?= $this->extend("layout/base");?>
<?= $this->section("content");?>
<main class="main-class">
    <!-- main head -->
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
                    <div class="selection-cont container">
                        <form method="get" action="<?php  echo site_url('adds')?>">
                        <div class="row">
                            <div class="section-col col-sm-12 col-md-3 col-lg-2">
                                <div class="form-group">
                                    <select class="js-example-basic-single w-100" name="make_id" id="make_id">
                                        <option value="">Choose Make</option>
                                        <?php foreach($makes as $make):?>
                                        <option value="<?= esc($make->slug)?>"><?=esc(ucfirst($make->title));?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="section-col col-sm-12 col-md-3 col-lg-2">
                                <div class="form-group">
                                    <select
                                        class="js-example-basic-single w-100"
                                        name="model" id="model_id">
                                        <option value="">Choose Model</option>

                                    </select>
                                </div>
                            </div>
                            <div class="section-col col-sm-12 col-md-3 col-lg-2">
                                <div class="form-group">
                                    <select
                                        class="js-example-basic-single w-100"
                                        name="price"
                                    >
                                        <option value="">Max Price</option>
                                        <?php foreach($prices as $price):?>
                                            <option value="<?= esc($price->price)?>"><?=esc('£'.$price->price);?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="section-col col-sm-12 col-md-3 col-lg-2">
                                <div class="form-group">
                                    <select
                                        class="js-example-basic-single w-100"
                                        name="vehicle_type"
                                    >
                                        <option value="">Choose Vehicle Type</option>
                                        <?php foreach($vehicle_types as $vehicle_type):?>
                                            <option value="<?= esc($vehicle_type)?>"><?=esc(ucfirst($vehicle_type));?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-4">
                                <div class="btnn">
                                    <button class="sign-btn">Search</button>
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
                        <div class="collum col-sm-12 col-md-6 col-lg-4">
                            <div class="carvans">
                                <div class="car-text">
                                    <img src="<?= base_url(); ?>/public/assets/home-img/Group 55.svg" alt="car van" />
                                    <h6>Carvans</h6>
                                </div>
                            </div>
                        </div>
                        <div class="collum col-sm-12 col-md-6 col-lg-4">
                            <div class="carvans">
                                <div class="car-text">
                                    <img src="<?= base_url(); ?>/public/assets/home-img/Group 22.svg" alt="car van" />
                                    <h6>Campervans</h6>
                                </div>
                            </div>
                        </div>
                        <div class="collum col-sm-12 col-md-6 col-lg-4">
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
</main>
<?= $this->endSection();?>
<?=$this->section("scripts")?>
<script type="text/javascript">

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
<?=$this->endSection()?>


