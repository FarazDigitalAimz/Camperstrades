<?= $this->extend("layout/base");?>
<?=$this->section("styles")?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/list-view.css" />
<link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/inventory.css" />
<?= $this->endSection();?>
<?= $this->section("content");?>
<?php

$start    = '1971-01-01';
$end      = date('Y-m-d');
$getRangeYear   = range(gmdate('Y', strtotime($start)), gmdate('Y', strtotime($end)));
$getRangeYear=array_reverse($getRangeYear);
?>
<section class="inventory ">

    <div class="main-inventory">
        <div class="container">
            <div class="row position-relative">
                <div class="img-backdrop transparent" style="position: absolute; inset: 0px; z-index: 100;
         background: rgba(255,255,255,0.7); display: none;" ></div>
                <div class="col-md-3 col-sm-12">
                    <div class="search-menu-bar">
                        <div class="search-head">
                            <p>Search Option</p>
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="search-select">
                            <select class="js-example-basic-single make_id" name="make_id">
                                <option value="">Make</option>
                                <?php foreach($makes as $make):?>
                                    <option value="<?= esc($make->slug)?>" <?= isset($makeSlug) && $makeSlug==$make->slug ? 'selected' : ''?>><?=esc(ucfirst($make->title));?></option>
                                <?php endforeach;?>
                            </select>
                            <hr />
                            <select class="js-example-basic-single common" id="model_id">
                                <option value="">Model</option>
                                <?php if(!empty($allModels)):?>
                                <?php foreach($allModels as $models):?>
                                    <option value="<?= esc($models->slug)?>" <?= isset($modelSlug) && $modelSlug==$models->slug ? 'selected' : ''?>><?=esc(ucfirst($models->title));?></option>
                                <?php endforeach;endif;?>
                            </select>
                            <hr />
                            <select
                                    class="js-example-basic-single w-100 common"
                                     id="price"
                            >
                                <option value="">Max Price</option>
                                <?php foreach($prices as $price):?>
                                    <option value="<?= esc($price->price)?>" <?= isset($priceSlug) && $priceSlug==$price->price ? 'selected' : ''?>><?=esc('£'.$price->price);?></option>
                                <?php endforeach;?>
                            </select>
                            <hr />
                            <select class="choose js-example-basic-single w-100 common" id="vehicle_type" >
                                <option value="">Choose Vehicle Type</option>
                                <?php foreach($vehicle_types as $vehicle_type):?>
                                    <option value="<?= esc($vehicle_type)?>" <?= isset($vehicle) && $vehicle==$vehicle_type ? 'selected' : ''?>><?=esc(ucfirst($vehicle_type));?></option>
                                <?php endforeach;?>
                            </select>
                            <hr />
                            <select class="js-example-basic-single common" id="year">
                                <option value="">Year</option>
                                <?php foreach ($getRangeYear as $getRange){?>
                                    <option value="<?php echo $getRange?>" <?php echo isset($year) && $year==$getRange ? 'selected' : '' ?>><?php echo $getRange ?></option>
                                <?php } ?>
                            </select>
                            <hr />
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="sort" >
                        <div class="sort-main">
                            <div class="sort-menu">
                                <span class="sort-lable">SORT BY:</span>
                                <select
                                        class="js-example-basic-single test-search"
                                        name="state"
                                >
                                    <option value="">Date: newest first</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                            <div class="sort-icons">
                                <div class="grid-icon">
                                    <button class="grid-view" id="grided">
                                        <i class="fa fa-th-large"></i>
                                    </button>
                                </div>
                                <div class="list-icon">
                                    <button class="list-view" id="listed">
                                        <i class="fa fa-list"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                    <div id="response_search"></div>
                </div>

            </div>

        </div>
    </div>
</section>

<?= $this->endSection();?>
<?=$this->section("scripts")?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>/public/assets/js/list-view.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $(".js-example-basic-single").select2();
    });
   // var default=defaultFunction();
    var url_string=window.location.href;
    var url = new URL(url_string);
    var c = url.searchParams.get("page");
    var page_no= parseInt(c -1);
    if(page_no > 0){
        page_no=page_no;
        window.history.go(page_no);
    }else{
        page_no=1;
    }
   $(window).on('popstate', function(event) {
       defaultFunction(page_no)
   });

   $( document ).ready(function() {
       defaultFunction();
   });
    function defaultFunction(page_no=1)
    {
        $('.img-backdrop').show();
        var url_string=window.location.href;
        $.ajax({
            url: url_string,
            beforeSend: function (f) {

            },
            method: 'GET',
            // DataTPE:JSON,
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            success: function (data) {
            var response=JSON.parse(data);
            $('.img-backdrop').hide();
            $('#response_search').html('');
            $('#response_search').append(response.html);

            }
        })
    }

   $(document).on('click', 'ul.pagination li a', function(e) {
       e.preventDefault();
       var href=$(this).attr("href");
       const nextURL = href;
       const nextTitle = 'Adds';
       const nextState = { additionalInformation: 'Updated the URL with JS' };
       window.history.pushState(nextState, nextTitle, nextURL);
       window.history.replaceState(nextState, nextTitle, nextURL);
       $('.img-backdrop').show();
           $.ajax({
               url: href,
               beforeSend: function (f) {

               },
               method: 'GET',
               headers: {'X-Requested-With': 'XMLHttpRequest'},
               success: function (data) {
                   $('.img-backdrop').hide();
                   var response=JSON.parse(data);
                   $('#response_search').html('');
                   $('#response_search').append(response.html);
               }
           })
   });

    $(".make_id").change(function(){
        $.ajax({
            url: "<?php echo site_url('get-model'); ?>",
            beforeSend: function (f) {

            },
            method: 'POST',
            data: {
                id: $('.make_id').val(),
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
                setCurrentUrl();
            }
        })
    });
    $(".common").change(function(){
        setCurrentUrl();
    });
    function setCurrentUrl()
    {
        var make_title=$('.make_id').val();
        var model=$('#model_id').val();
        var price=$('#price').val();
        var vehicle_type=$('#vehicle_type').val();
        var year=$('#year').val();
        history.pushState(null, "", location.href.split("?")[0]);
        var myNewURL = window.location.href;
        var url = new URL(myNewURL);
        if(make_title!=''){url.searchParams.append('make_id',make_title );}
        if(model!=''){url.searchParams.append('model',model );}
        if(price!=''){url.searchParams.append('price',price );}
        if(vehicle_type!=''){url.searchParams.append('vehicle_type',vehicle_type );}
        if(year!=''){url.searchParams.append('year',year );}
        //window.history.pushState("", "Adds Listing", "/" + url );
        const nextState = { additionalInformation: 'Updated the URL with JS' };
        window.history.pushState(nextState, '', url);
        window.history.replaceState(nextState, '', url);
        defaultFunction(page_no=1)
    }
</script>
<?= $this->endSection();?>


