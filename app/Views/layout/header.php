<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Campertrader</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/home.css" />
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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
          />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
          />
    <link
      href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
      rel="stylesheet"
          />
      <?= $this->renderSection("styles"); ?>
  </head>

  <body>
  <!-- header (logo menu and button) -->
  <header class="heade">
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
                                  <a href="" class="nav-link"> Home </a>
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
                                          <a class="drop-li dropdown-item" href="#"
                                          >RV For Sale</a
                                          >
                                      </li>
                                      <li>
                                          <a class="drop-li dropdown-item" href="#">Caravans</a>
                                      </li>
                                      <li>
                                          <a class="drop-li dropdown-item" href="#">Campervans</a>
                                      </li>
                                      <li>
                                          <a class="drop-li dropdown-item" href="#">Motorhomes</a>
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
                                  <a href="" class="nav-link"> FAQ's</a>
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
                  <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2">
                      <div class="btnn">
                          <button class="sign-btn">Sign in</button>
                      </div>
                  </div>
                  <div class="account col-lg-2">
                      <a href="#" class="account-text">
                          My Account <i class="fa fa-user" aria-hidden="true"></i
                          ></a>
                  </div>
              </div>
          </div>
      </nav>
  </header>