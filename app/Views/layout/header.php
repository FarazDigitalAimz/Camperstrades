<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Camperstrader</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/main.css">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
    />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
    />

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />

    <!-- slider -->

    <?= $this->renderSection("styles"); ?>
</head>

<body>
<!-- loader -->
<!-- <div id="preloader"></div> -->
<!-- header (logo menu and button) -->
<header class="heade"id="load-header">
    <nav class="navibar navbar navbar-expand-sm">
        <div class="container">
            <div class="roow row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-1">
                    <div class="logo">
                        <a href="<?php echo site_url()?>" class="navbar-brand">
                            <img src="<?= base_url(); ?>/public/assets/home-img/Group 143.png" alt="logo" />
                        </a>
                        <div class="bars">
                            <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarCollapse"
                            >
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="nav-col col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="oder-list navbar-nav ml-auto">
                            <li class="list nav-item">
                                <a href="<?php echo site_url()?>" class="nav-link"> Home </a>
                            </li>
                            <li class="list nav-item dropdown">
                                <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        id="navbarDropdown"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                >
                                    Buy<i class="fa fa-angle-down"></i
                                    ></a>
                                <ul
                                        class="drop-ul dropdown-menu"
                                        aria-labelledby="navbarDropdown"
                                >

                                    <li>
                                        <a class="drop-li dropdown-item" href="<?= site_url('caravan')?>">Caravans</a>
                                    </li>
                                    <li>
                                        <a class="drop-li dropdown-item" href="<?= site_url('campervan')?>">Campervans</a>
                                    </li>
                                    <li>
                                        <a class="drop-li dropdown-item" href="<?= site_url('motorhome')?>">Motorhomes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list nav-item">
                                <a href="" class="nav-link"> Sell Your Car </a>
                            </li>
                            <li class="list nav-item">
                                <a href="" class="nav-link"> Pricing </a>
                            </li>

                            <li class="list nav-item">
                                <a href="<?php echo site_url('faqs')?>" class="nav-link"> FAQ's</a>
                            </li>
                            <li class="list nav-item">
                                <a href="" class="nav-link"> Blogs </a>
                            </li>
                            <li class="list nav-item">
                                <a href="" class="nav-link"> Contact Us </a>
                            </li>
                            <li class="list sign-in-nav nav-item">
                                <a href="" class="nav-link">Sign in</a>
                            </li>
                            <li class="list sign-in-nav nav-item">
                                <a href="#">
                                    My Account <i class="fa fa-user" aria-hidden="true"></i
                                    ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="head-line"></div>
                </div>
                <?php
                if (session('loggedin') != true){?>
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2">
                    <div class="btnn">
                        <button class="sign-btn">Sign in</button>
                    </div>
                </div>
                <?php }?>
                <?php
                if (session('loggedin') == true){?>
                <div class="account col-lg-2">
                    <a href="#" class="account-text">
                        My Account <i class="fa fa-user" aria-hidden="true"></i
                        ></a>
                </div>
                <?php }?>
            </div>
            <!-- </div> -->
    </nav></div>
</header>