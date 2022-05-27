<div class="main-list-view">
    <div class="row">
        <?php if(!empty($adds)){?>
            <?php foreach($adds as $add){?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xxs-12">
            <div class="list-card">
                <div class="images ">
                    <?php if(!empty($add['totalImages']['image_path'])){?>
                        <img src="https://dev.camperstrader.uk/assets/sell_images/<?php echo isset($add['totalImages']['image_path']) ? $add['totalImages']['image_path'] : 0?>"  alt="" />
                    <?php }else {?>
                        <img src="<?php echo base_url()?>/public/assets/adds_images/default.png" alt=""/>
                    <?php  }?>
                    <div class="icons">
                        <div class="camara1">
                            <i class="fa fa-camera"></i>
                            <p><?= isset($add['totalImages']['totalImage']) ? $add['totalImages']['totalImage'] : 0?></p>
                        </div>
                        <div class="star1">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="top-content">
                        <a href="#">
                            <p><?php  echo $add['make_title'].' '.$add['model_title']?></p>
                            <div class="text">
                                <p><?php  echo $add['year']?></p>
                            </div></a
                        >
                        <button class="price"><?= isset($add['regular_price']) ? '<s>£ '.$add['regular_price'].'</s><br>' : ''?>£ <?php echo $add['price']?></button>
                    </div>
                    <div class="bottom-content">
                        <div class="top-icons">
                            <i class="fa-solid fa-certificate"><p><?= esc(ucfirst($add['condition']));?></p></i>
                            <i class="fa-solid fa-gears"><p><?= esc(ucfirst($add['make_title']));?></p></i>
                        </div>
                        <div class="bottom-icons">
                            <i class="fa-solid fa-calendar-days"><p><?= esc($add['year']);?></p></i>
                            <i class="fa-solid fa-bed"><p>4</p></i>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </div>
            <?php }?>
        <?php }else {?>
            <div class="text-center"><strong >No Record Found!</strong></p></div>
        <?php  }?>
    </div>
</div>

<!-- gride view  -->
<div class="main-gride-view">
    <div class="row">
        <?php if(!empty($adds)){?>
            <?php foreach($adds as $add){?>
        <div class="col-md-4 col-sm-4 col-xs-12 col-xxs-12">
            <div class="card">
                <a href="" class="rmv_txt_drctn">
                    <div class="image">
                        <?php if(!empty($add['totalImages']['image_path'])){?>
                        <img src="https://dev.camperstrader.uk/assets/sell_images/<?php echo isset($add['totalImages']['image_path']) ? $add['totalImages']['image_path'] : 0?>" alt="" />
                        <?php }else {?>
                            <img src="<?php echo base_url()?>/public/assets/adds_images/default.png" alt=""/>
                        <?php  }?>
                        <div class="icons">
                            <div class="camara">
                                <i class="fa fa-camera"></i>
                                <p><?= isset($add['totalImages']['totalImage']) ? $add['totalImages']['totalImage'] : 0?></p>
                            </div>
                            <div class="star">
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-text card-body">
                        <h5 class="card-title"><?php  echo $add['make_title'].' '.$add['model_title']?></h5>
                        <button class="price"><?= isset($add['regular_price']) ? '<s>£ '.$add['regular_price'].'</s><br>' : ''?>£ <?php echo $add['price']?></button>
                    </div>
                    <hr />
                    <div class="certified">
                        <div class="top-icons">
                            <i class="fa-solid fa-certificate"><p><?= esc(ucfirst($add['condition']));?></p></i>
                            <i class="fa-solid fa-gears"><p><?= esc(ucfirst($add['make_title']));?></p></i>
                        </div>
                        <div class="bottom-icons">
                            <i class="fa-solid fa-calendar-days"><p><?= esc($add['year']);?></p></i>
                            <i class="fa-solid fa-bed"><p>4</p></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
            <?php }?>
        <?php }else {?>
            <div class="text-center"><strong>No Record Found!</strong></p></div>
        <?php  }?>
    </div>

</div>

<!--<nav aria-label="Page navigation example">-->
<!--    <ul class="pagination">-->
<!--        <li class="page-item">-->
<!--            <a class="page-link" href="#" aria-label="Previous">-->
<!--                        <span aria-hidden="true"-->
<!--                        ><i class="fa fa-angle-left"></i>-->
<!--                        </span>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="page-item active" aria-current="page">-->
<!--            <a class="page-link" href="#">1</a>-->
<!--        </li>-->
<!--        <li class="page-item">-->
<!--            <a class="page-link" href="#">2</a>-->
<!--        </li>-->
<!--        <li class="page-item">-->
<!--            <a class="page-link" href="#">3</a>-->
<!--        </li>-->
<!--        <li class="page-item">-->
<!--            <a class="page-link" href="#">4</a>-->
<!--        </li>-->
<!--        <li class="page-item">-->
<!--            <a class="page-link" href="#" aria-label="Next">-->
<!--                        <span aria-hidden="true"-->
<!--                        ><i class="fa fa-angle-right"></i>-->
<!--                        </span>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</nav>-->
<?php if ($pager) :?>
    <?php $pagi_path='camperstraders_front/adds';
    $pager->setPath($pagi_path);
    ?>

    <?= $pager->links() ?>
<?php endif ?>