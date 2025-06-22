<?php
include 'ru.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      #packages {
        scroll-margin-top: -100px; 
      }
    </style>
  </head>
<body>

    <div class="keytether-cards">
        <div class="container-fluid px-0">
            <img class="img-background-1" src="/images/background-1.jpg" id="hero" alt="Background" />
            <img class="img-background-2" src="/images/background-2.png" alt="" />
            <div class="img-background-3" id="how-to-start">
            <img   src="/images/background-3.png"   alt="" />
            </div>
            <img class="img-background-4" src="/images/background-4.jpg" id="how-to-use" alt="" />
            <img class="img-background-5" src="/images/background-5.jpg" id="benefits" alt="" />
            <img class="img-background-7" src="/images/background-6.jpg" />
            <!-- Header -->
            <header class="header top-0 start-50 translate-middle-x">
                <div class="container h-100 px-4">
                    <div class="d-flex justify-content-between align-items-center h-100">
                        <img class="logo-1" src="/images/header-logo.svg" alt="KeyTether Logo" />
                        <div class="d-flex align-items-center">
                            <button class="header-button d-lg-none me-2">
                                <a class="text-3" href="https://t.me/keytether_support"><?= $lang['header']['get_card'] ?></a>
                            </button>
                            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav" aria-controls="mobileNav" aria-expanded="false" aria-label="Toggle navigation">
                                <img src="/images/burger.svg" >
                            </button>
                            <nav class="header-menu d-none d-lg-flex ms-3 justify-content-center align-items-center">
                                <a href="#hero" class="text-1"><?= $lang['header']['start'] ?></a>
                                <span class="text-2">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="#how-to-start"><?= $lang['header']['how_to_start'] ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#how-to-use"><?= $lang['header']['how_to_use'] ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#packages"><?= $lang['header']['packages'] ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#benefits"><?= $lang['header']['benefits'] ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#partner"><?= $lang['header']['partner'] ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#faq"><?= $lang['header']['faq'] ?></a>
                                </span>
                            </nav>
                            <button class="header-button d-none d-lg-block ms-3 ">
                                <a class="text-3" href="https://t.me/keytether_support"><?= $lang['header']['get_card'] ?></a>
                            </button>
                        </div>
                    </div>
                    <!-- Mobile Navigation -->
                    <div class="collapse navbar-collapse" id="mobileNav">
                        <div class="mobile-nav-container">
                            <nav class="mobile-nav">
                                <a href="#hero" class="mobile-nav-item"><?= $lang['header']['start'] ?></a>
                                <a href="#how-to-start" class="mobile-nav-item"><?= $lang['header']['how_to_start'] ?></a>
                                <a href="#how-to-use" class="mobile-nav-item"><?= $lang['header']['how_to_use'] ?></a>
                                <a href="#packages" class="mobile-nav-item"><?= $lang['header']['packages'] ?></a>
                                <a href="#benefits" class="mobile-nav-item"><?= $lang['header']['benefits'] ?></a>
                                <a href="#partner" class="mobile-nav-item"><?= $lang['header']['partner'] ?></a>
                                <a href="#faq" class="mobile-nav-item"><?= $lang['header']['faq'] ?></a>

                            </nav>
                        </div>
                    </div>
                </div>
            </header>

            
            <!-- Overlap Hero Section -->
            <div class="overlap-page-1 container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 group-1-page-1 order-last order-lg-first">
                        <p class="keytether-cards-USDT-page-1">
                            <span class="text-1-page-1"><?= $lang['hero']['title'] ?></span>
                            <span class="text-2-page-1"><?= $lang['hero']['subtitle'] ?></span>
                        </p>
                        <p class="keytether-KYC-USDT">
                            <span class="text-3-page-1"><?= $lang['hero']['description_1'] ?></span>
                            <span class="text-4-page-1"><?= $lang['hero']['description_2'] ?></span>
                            <span class="text-3-page-1"><?= $lang['hero']['description_3'] ?></span>
                            <span class="text-4-page-1"><?= $lang['hero']['description_4'] ?></span>
                        </p>
                        <div class="button-page-1">
                            <a class="text-5-page-1" href="https://t.me/keytether_support"><?= $lang['hero']['cta_button'] ?></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 text-center order-first order-lg-last position-relative main-image-container">
                        <img class="main-image-no-card" src="/images/main-image-withoutcardtokens.png" alt="Main background" />
                        <div class="card-flip-container">
                            <div class="card-flipper">
                                <div class="card-front">
                                    <img src="/images/Credit-Card_2-min.png" alt="Credit Card Front" />
                                </div>
                                <div class="card-back">
                                    <img src="/images/Credit-Card_1-min.png" alt="Credit Card Back" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Combined row for group-3-page-1 and group-4-page-1 side by side on desktop -->
                <div class="row mt-3">
                    <div class="col-lg-5 col-12 group-3-page-1 order-1 order-lg-1">
                        <p class="key-tether-page-1" id="how-to-start">
                        <span class="span"><?= $lang['how_to_start']['title_1'] ?></span> <span class="text-1-page-1"><?= $lang['how_to_start']['title_2'] ?></span>
                        </p>
                        <p class="div-2-page-1">
                        <span class="span"><?= $lang['how_to_start']['description_1'] ?></span>
                        <span class="text-6-page-1"><?= $lang['how_to_start']['description_2'] ?></span>
                        <span class="span"><?= $lang['how_to_start']['description_3'] ?></span>
                        <span class="text-6-page-1"><?= $lang['how_to_start']['description_4'] ?></span>
                        <span class="span"><?= $lang['how_to_start']['description_5'] ?></span>
                        <span class="text-6-page-1"><?= $lang['how_to_start']['description_6'] ?></span>
                        </p>
                        <div class="div-wrapper-page-1"><a class="element-page-1" href="https://t.me/keytether_support"><?= $lang['how_to_start']['cta_button'] ?></a></div>
                    </div>
                    <div class="col-lg-6 mt-4 lg-mt-0 col-12 order-2 order-lg-2  d-flex justify-content-lg-end">
                        <div class="group-4-content">
                            <div class="step-rect mb-3">
                                <div class="step-icon">
                                    <img class="icon-4-page-1" src="/images/frame-3-page-1.svg" />
                                </div>
                                <div class="step-text">
                                    <div class="text-wrapper-1-page-1"><?= $lang['steps']['step1']['title'] ?></div>
                                    <p class="text-wrapper-2-page-1"><?= $lang['steps']['step1']['description'] ?></p>
                                </div>
                            </div>
                            <div class="step-rect mb-3">
                                <div class="step-icon">
                                    <img class="icon-4-page-1" src="/images/frame-2-page-1.svg" />
                                </div>
                                <div class="step-text">
                                    <div class="text-wrapper-1-page-1"><?= $lang['steps']['step2']['title'] ?></div>
                                    <p class="text-wrapper-2-page-1"><?= $lang['steps']['step2']['description'] ?></p>
                                </div>
                            </div>
                            <div class="step-rect mb-3">
                                <div class="step-icon">
                                    <img class="icon-4-page-1" src="/images/frame-1-page-1.svg" />
                                </div>
                                <div class="step-text">
                                    <div class="text-wrapper-1-page-1"><?= $lang['steps']['step3']['title'] ?></div>
                                    <p class="text-wrapper-2-page-1"><?= $lang['steps']['step3']['description'] ?></p>
                                </div>
                            </div>
                            <div class="step-rect mb-3">
                                <div class="step-icon">
                                    <img class="icon-4-page-1" src="/images/frame-4-page-1.svg" />
                                </div>
                                <div class="step-text">
                                    <div class="text-wrapper-1-page-1"><?= $lang['steps']['step4']['title'] ?></div>
                                    <p class="text-wrapper-2-page-1"><?= $lang['steps']['step4']['description'] ?></p>
                                </div>
                            </div>
                            <div class="div-wrapper-page-1-2">
                                <a class="element-page-1" href="https://t.me/keytether_support"><?= $lang['how_to_start']['cta_button'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of combined row for group-3 and group-4 side by side -->
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="group-2-page-2">
                            <div class="group-box-page-1">
                                <div class="group">
                                    <div class="div">
                                        <p class="key-tether">
                                            <span class="text-wrapper"><?= $lang['where_to_use']['title_1'] ?></span> <span class="span"><?= $lang['where_to_use']['title_2'] ?></span>
                                        </p>
                                        <p class="p"><?= $lang['where_to_use']['description'] ?></p>
                                        <div class="frame-full">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 col-md-6 col-12 mb-4">
                                                    <div class="frame-3 card-mobile-flex">
                                                        <div class="card-mobile-header ">
                                                            <div class="icon-mobile"><img class="img img-special" src="/images/frame-1-page-2.svg" /></div>
                                                            <div class="card-mobile-title"><?= $lang['where_to_use']['categories']['everyday']['title'] ?></div>
                                                        </div>
                                                        <div class="card-mobile-content">
                                                            <img class="line" src="/images/line.svg" />
                                                            <div class="frame-4">
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['everyday']['items'][0]['title'] ?></div>
                                                                    <div class="text-wrapper-5"><?= $lang['where_to_use']['categories']['everyday']['items'][0]['description'] ?></div>
                                                                </div>
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['everyday']['items'][1]['title'] ?></div>
                                                                    <p class="text-wrapper-5"><?= $lang['where_to_use']['categories']['everyday']['items'][1]['description'] ?></p>
                                                                </div>
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['everyday']['items'][2]['title'] ?></div>
                                                                    <p class="text-wrapper-5"><?= $lang['where_to_use']['categories']['everyday']['items'][2]['description'] ?></p>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
                                                    <div class="frame-6 card-mobile-flex">
                                                        <div class="card-mobile-header ">
                                                            <div class="icon-mobile"><img class="img" src="/images/frame-2-page-2.svg" /></div>
                                                            <div class="card-mobile-title"><?= $lang['where_to_use']['categories']['travel']['title'] ?></div>
                                                        </div>
                                                        <div class="card-mobile-content">
                                                            <img class="line" src="/images/line.svg" />
                                                            <div class="frame-4">
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['travel']['items'][0]['title'] ?></div>
                                                                    <div class="text-wrapper-5"><?= $lang['where_to_use']['categories']['travel']['items'][0]['description'] ?></div>
                                                                </div>
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['travel']['items'][1]['title'] ?></div>
                                                                    <p class="text-wrapper-5"><?= $lang['where_to_use']['categories']['travel']['items'][1]['description'] ?></p>
                                                                </div>
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['travel']['items'][2]['title'] ?></div>
                                                                    <div class="text-wrapper-5"><?= $lang['where_to_use']['categories']['travel']['items'][2]['description'] ?></div>
                                                                </div>
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['travel']['items'][3]['title'] ?></div>
                                                                    <p class="text-wrapper-5"><?= $lang['where_to_use']['categories']['travel']['items'][3]['description'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
                                                    <div class="frame-7 card-mobile-flex">
                                                        <div class="card-mobile-header">
                                                            <div class="icon-mobile"><img class="element-2" src="/images/frame-3-page-2.svg" /></div>
                                                            <div class="card-mobile-title special-title"><?= $lang['where_to_use']['categories']['business']['title'] ?></div>
                                                        </div>
                                                        <div class="card-mobile-content">
                                                            <img class="line" src="/images/line.svg" />
                                                            <div class="frame-4">
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['business']['items'][0]['title'] ?></div>
                                                                    <p class="text-wrapper-5"><?= $lang['where_to_use']['categories']['business']['items'][0]['description'] ?></p>
                                                                </div>
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['business']['items'][1]['title'] ?></div>
                                                                    <p class="text-wrapper-5"><?= $lang['where_to_use']['categories']['business']['items'][1]['description'] ?></p>
                                                                </div>
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['business']['items'][2]['title'] ?></div>
                                                                    <p class="text-wrapper-5"><?= $lang['where_to_use']['categories']['business']['items'][2]['description'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
                                                    <div class="frame-8 card-mobile-flex">
                                                        <div class="card-mobile-header">
                                                            <div class="icon-mobile"><img class="element-3" src="/images/frame-4-page-2.svg" /></div>
                                                            <div class="card-mobile-title special-title"><?= $lang['where_to_use']['categories']['investments']['title'] ?></div>
                                                        </div>
                                                        <div class="card-mobile-content">
                                                            <img class="line" src="/images/line.svg" />
                                                            <div class="frame-4">
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['investments']['items'][0]['title'] ?></div>
                                                                    <div class="text-wrapper-5"><?= $lang['where_to_use']['categories']['investments']['items'][0]['description'] ?></div>
                                                                </div>
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['investments']['items'][1]['title'] ?></div>
                                                                    <div class="text-wrapper-5"><?= $lang['where_to_use']['categories']['investments']['items'][1]['description'] ?></div>
                                                                </div>
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['investments']['items'][2]['title'] ?></div>
                                                                    <div class="text-wrapper-5"><?= $lang['where_to_use']['categories']['investments']['items'][2]['description'] ?></div>
                                                                </div>
                                                                <div class="frame-5">
                                                                    <div class="text-wrapper-3"><?= $lang['where_to_use']['categories']['investments']['items'][3]['title'] ?></div>
                                                                    <div class="text-wrapper-5"><?= $lang['where_to_use']['categories']['investments']['items'][3]['description'] ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" row align-items-center"  id="packages" >
                    <div class="box-page-3" >
                            <div>
                                    <p class="div-3">
                                        <span class="span"><?= $lang['packages']['title_1'] ?></span> <span class="text-wrapper-2"><?= $lang['packages']['title_2'] ?></span>
                                    </p>
                                    <p class="text-wrapper-44"><?= $lang['packages']['description'] ?></p>
                                    <div class="box-page-3-1">
                                    <div class="overlap-9">
                                        <div class="group-45">
                                        <div class="text-wrapper-45"><?= $lang['packages']['basic']['price'] ?></div>
                                        <div class="text-wrapper-46"><?= $lang['packages']['basic']['currency'] ?></div>
                                        </div>
                                        <div class="basic"><?= $lang['packages']['basic']['name'] ?></div>
                                        <p class="element-20">


                                        <span class="text-wrapper-47"><?= $lang['packages']['basic']['cards'] ?><br /></span>



                                        <span class="text-wrapper-48"><?= $lang['packages']['basic']['features'] ?></span>
                                        </p>

                                        <div class="text-wrapper-49"><?= $lang['packages']['basic']['subtitle'] ?></div> 
                                        <div class="component-2"><a class="element" href="https://t.me/keytether_support"><?= $lang['packages']['basic']['cta_button'] ?></a></div>
                                        <div class="frame-42">
                                        <img class="check-circle" src="/images/checkcircleblack.svg" />
                                        <img class="check-circle" src="/images/checkcircleblack.svg" />
                                        <img class="check-circle" src="/images/checkcircleblack.svg" />
                                        </div>
                                        <img class="line-3" src="/images/line-page-3.svg" />
                                    </div>
                                    <div class="overlap-10">
                                        <div class="group-46">
                                        <div class="text-wrapper-50"><?= $lang['packages']['standard']['price'] ?></div>
                                        <div class="text-wrapper-51"><?= $lang['packages']['standard']['currency'] ?></div>
                                        </div>
                                        <div class="standard"><?= $lang['packages']['standard']['name'] ?></div>
                                        <p class="element-21">
                                        <span class="text-wrapper-52"><?= $lang['packages']['standard']['cards'] ?><br /></span>
                                        <span class="text-wrapper-48"><?= $lang['packages']['standard']['features'] ?></span>
                                        </p>
                                        <div class="text-wrapper-53"><?= $lang['packages']['standard']['subtitle'] ?></div>
                                        <div class="component-3"><a class="element-22" href="https://t.me/keytether_support"><?= $lang['packages']['standard']['cta_button'] ?></a></div>
                                        <div class="frame-43">
                                        <img class="check-circle-white" src="/images/checkcirclewhite.svg" />
                                        <img class="check-circle-white" src="/images/checkcirclewhite.svg" />
                                        <img class="check-circle-white" src="/images/checkcirclewhite.svg" />
                                        </div>
                                        <img class="line-4" src="/images/line-page-3.svg" />
                                    </div>
                                    <div class="overlap-11">
                                        <div class="group-47">
                                        <div class="overlap-group-4">
                                            <div class="text-wrapper-54"><?= $lang['packages']['premium']['price'] ?></div>
                                            <div class="text-wrapper-46"><?= $lang['packages']['premium']['currency'] ?></div>
                                        </div>
                                        </div>
                                        <div class="premium"><?= $lang['packages']['premium']['name'] ?></div>
                                        <div class="rectangle-12"></div>
                                        <p class="element-23">
                                        <span class="text-wrapper-47"><?= $lang['packages']['premium']['cards'] ?><br /></span>
                                        <span class="text-wrapper-48"><?= $lang['packages']['premium']['features'] ?></span>
                                        </p>
                                        <div class="text-wrapper-55"><?= $lang['packages']['premium']['subtitle'] ?></div>
                                        <div class="component-4"><a class="element" href="https://t.me/keytether_support"><?= $lang['packages']['premium']['cta_button'] ?></a></div>
                                        <div class="frame-44">
                                        <img class="check-circle" src="/images/checkcircleblack.svg" />
                                        <img class="check-circle" src="/images/checkcircleblack.svg" />
                                        <img class="check-circle" src="/images/checkcircleblack.svg" />
                                    
                                        </div>
                                        <img class="line-5" src="/images/line-page-3.svg" />
                                    </div>
                                    </div>
                                    <div class="component-5"><a class="element" href="https://t.me/keytether_support"><?= $lang['packages']['learn_more'] ?></a></div>
                                
                            </div>
                    </div>
                </div>


                    <div class="row align-items-center" >
                        <div class="page-4">
                            <div class="overlap-group">
                                <p class="p" >
                                    <span class="span"><?= $lang['benefits']['title_1'] ?></span> <span class="text-wrapper-2"><?= $lang['benefits']['title_2'] ?></span>
                                </p>
                                <p class="text-wrapper-3"><?= $lang['benefits']['description'] ?></p>
                                
                                <div class="frame">
                                    <div class="row justify-content-center">
                                        <!-- Card 1: Моментальная активация -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card-frame">
                                                <div class="frame-3">
                                                    <div class="element-wrapper">
                                                        <img class="element-7" src="/images/frame-1-page-4.svg" />
                                                    </div>
                                                    <div class="text-wrapper-4"><?= $lang['benefits']['cards']['card1']['title'] ?></div>
                                                </div>
                                                <p class="text-wrapper-9"><?= $lang['benefits']['cards']['card1']['description'] ?></p>
                                            </div>
                                        </div>
            
                                        <!-- Card 2: Низкая стоимость обслуживания -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card-frame">
                                                <div class="frame-3">
                                                    <div class="element-wrapper">
                                                        <img class="element-6" src="/images/frame-2-page-4.svg" />
                                                    </div>
                                                    <div class="text-wrapper-4"><?= $lang['benefits']['cards']['card2']['title'] ?></div>
                                                </div>
                                                <p class="text-wrapper-8"><?= $lang['benefits']['cards']['card2']['description'] ?></p>
                                            </div>
                                        </div>
            
                                        <!-- Card 3: Удобное пополнение криптовалютой -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card-frame">
                                                <div class="frame-3">
                                                    <div class="element-wrapper">
                                                        <img class="img" src="/images/frame-9-page-4.svg" />
                                                    </div>
                                                    <div class="text-wrapper-4"><?= $lang['benefits']['cards']['card3']['title'] ?></div>
                                                </div>
                                                <p class="text-wrapper-5"><?= $lang['benefits']['cards']['card3']['description'] ?></p>
                                            </div>
                                        </div>
            
                                        <!-- Card 4: Минимальные комиссии -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card-frame">
                                                <div class="frame-3">
                                                    <div class="element-wrapper">
                                                        <img class="img" src="/images/frame-4-page-4.svg" />
                                                    </div>
                                                    <div class="text-wrapper-6"><?= $lang['benefits']['cards']['card4']['title'] ?></div>
                                                </div>
                                                <p class="text-wrapper-8"><?= $lang['benefits']['cards']['card4']['description'] ?></p>
                                            </div>
                                        </div>
            
                                        <!-- Card 5: Привязка к Apple Pay и Google Pay -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card-frame">
                                                <div class="frame-3">
                                                    <div class="element-wrapper">
                                                        <img class="img" src="/images/frame-5-page-4.svg" />
                                                    </div>
                                                    <div class="text-wrapper-4"><?= $lang['benefits']['cards']['card5']['title'] ?></div>
                                                </div>
                                                <p class="text-wrapper-8"><?= $lang['benefits']['cards']['card5']['description'] ?></p>
                                            </div>
                                        </div>
            
                                        <!-- Card 6: Длительный срок действия карты -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card-frame">
                                                <div class="frame-3">
                                                    <div class="element-wrapper">
                                                        <img class="img" src="/images/frame-6-page-4.svg" />
                                                    </div>
                                                    <div class="text-wrapper-4"><?= $lang['benefits']['cards']['card6']['title'] ?></div>
                                                </div>
                                                <p class="text-wrapper-8"><?= $lang['benefits']['cards']['card6']['description'] ?></p>
                                            </div>
                                        </div>
            
                                        <!-- Card 7: Высокий лимит -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card-frame">
                                                <div class="frame-3">
                                                    <div class="element-wrapper">
                                                        <img class="element-4" src="/images/frame-7-page-4.svg" />
                                                    </div>
                                                    <div class="text-wrapper-6"><?= $lang['benefits']['cards']['card7']['title'] ?></div>
                                                </div>
                                                <p class="text-wrapper-8"><?= $lang['benefits']['cards']['card7']['description'] ?></p>
                                            </div>
                                        </div>

                                        <!-- Card 8: Мощный интерфейс управления -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card-frame">
                                                <div class="frame-3">
                                                    <div class="element-wrapper">
                                                        <img class="element-6" src="/images/frame-8-page-4.svg" />
                                                    </div>
                                                    <div class="text-wrapper-4"><?= $lang['benefits']['cards']['card8']['title'] ?></div>
                                                </div>
                                                <p class="text-wrapper-8"><?= $lang['benefits']['cards']['card8']['description'] ?></p>
                                            </div>
                                        </div>
                                        <!-- Card 9: Оплата без интернета и SIM-карты -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card-frame">
                                                <div class="frame-3">
                                                    <div class="element-wrapper">
                                                        <img class="element-4" src="/images/frame-9-page-4.svg"  />
                                                    </div>
                                                    <div class="text-wrapper-4"><?= $lang['benefits']['cards']['card9']['title'] ?></div>
                                                </div>
                                                <p class="text-wrapper-5"><?= $lang['benefits']['cards']['card9']['description'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                <div class="cifrovye-finansy-wrapper"                   id="partner">
                    <img
  
                    class="cifrovye-finansy"
                    src="/images/img-background-cifrovii-finansy.jpg"
                    />
                </div>

                <!-- Page 5: Referral Program -->
                <div class="row align-items-center"             >
                    <div class="col-lg-6 col-12 group-5-page-5 order-last order-lg-first">
                        <p class="keytether-referral-page-5">
                            <span class="text-1-page-5"><?= $lang['partner']['title_1'] ?></span>
                            <span class="text-2-page-5"><?= $lang['partner']['title_2'] ?></span>
                            <span class="text-3-page-5"><?= $lang['partner']['title_3'] ?></span>
                        </p>
                        <p class="keytether-referral-desc-page-5">
                            <span class="text-4-page-5"><?= $lang['partner']['description'] ?></span>
                        </p>
                        <div class="frame-32-page-5">
                            <div class="icon-text-pair">
                                <img class="group-7-page-5" src="/images/frame-1-page-5.svg" />
                                <div class="text-content">
                                    <div class="text-wrapper-35-page-5"><?= $lang['partner']['features']['feature1']['title'] ?></div>
                                    <p class="text-wrapper-36-page-5"><?= $lang['partner']['features']['feature1']['description'] ?></p>
                                </div>
                            </div>
                            <div class="icon-text-pair">
                                <img class="group-8-page-5" src="/images/frame-4-page-5.svg" />
                                <div class="text-content">
                                    <div class="text-wrapper-35-page-5"><?= $lang['partner']['features']['feature2']['title'] ?></div>
                                    <p class="text-wrapper-36-page-5"><?= $lang['partner']['features']['feature2']['description'] ?></p>
                                </div>
                            </div>
                            <div class="icon-text-pair">
                                <img class="group-9-page-5" src="/images/frame-2-page-5.svg" />
                                <div class="text-content">
                                    <div class="text-wrapper-35-page-5"><?= $lang['partner']['features']['feature3']['title'] ?></div>
                                    <p class="text-wrapper-36-page-5"><?= $lang['partner']['features']['feature3']['description'] ?></p>
                                </div>
                            </div>
                            <div class="icon-text-pair">
                                <img class="group-10-page-5" src="/images/frame-3-page-5.svg" />
                                <div class="text-content">
                                    <div class="text-wrapper-35-page-5"><?= $lang['partner']['features']['feature4']['title'] ?></div>
                                    <p class="text-wrapper-36-page-5"><?= $lang['partner']['features']['feature4']['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="button-page-5">
                            <a class="text-5-page-5" href="https://t.me/keytether_support"><?= $lang['partner']['cta_button'] ?></a>
                        </div>
                    </div>

                </div>

                <!-- Page 6: Reviews Section -->
                <div class="page-6">
                    <div class="">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <h2 class="text-wrapper-26"><?= $lang['reviews']['title'] ?></h2>
                                <div class="reviews-container">
                                    <div class="reviews-slider">
                                        <!-- Review 1 -->
                                        <div class="review-slide active" data-review="1">
                                            <div class="review-content">
                                                <img class="review-icon" src="/images/frame-1-page-6.svg" alt="Quote icon" />
                                                <div class="review-text">
                                                    <p class="text-wrapper-37"><?= $lang['reviews']['reviews']['review1']['text'] ?></p>
                                                    <div class="text-wrapper-38"><?= $lang['reviews']['reviews']['review1']['author'] ?></div>
                                                </div>
                                                <div class="review-dots">
                                                    <div class="review-dot dot-active" data-review="1"></div>
                                                    <div class="review-dot" data-review="2"></div>
                                                    <div class="review-dot" data-review="3"></div>
                                                    <div class="review-dot" data-review="4"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Review 2 -->
                                        <div class="review-slide" data-review="2">
                                            <div class="review-content">
                                                <img class="review-icon" src="/images/frame-1-page-6.svg" alt="Quote icon" />
                                                <div class="review-text">
                                                    <p class="text-wrapper-37"><?= $lang['reviews']['reviews']['review2']['text'] ?></p>
                                                    <div class="text-wrapper-38"><?= $lang['reviews']['reviews']['review2']['author'] ?></div>
                                                </div>
                                                <div class="review-dots">
                                                    <div class="review-dot" data-review="1"></div>
                                                    <div class="review-dot dot-active" data-review="2"></div>
                                                    <div class="review-dot" data-review="3"></div>
                                                    <div class="review-dot" data-review="4"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Review 3 -->
                                        <div class="review-slide" data-review="3">
                                            <div class="review-content">
                                                <img class="review-icon" src="/images/frame-1-page-6.svg" alt="Quote icon" />
                                                <div class="review-text">
                                                    <p class="text-wrapper-37"><?= $lang['reviews']['reviews']['review3']['text'] ?></p>
                                                    <div class="text-wrapper-38"><?= $lang['reviews']['reviews']['review3']['author'] ?></div>
                                                </div>
                                                <div class="review-dots">
                                                    <div class="review-dot" data-review="1"></div>
                                                    <div class="review-dot" data-review="2"></div>
                                                    <div class="review-dot dot-active" data-review="3"></div>
                                                    <div class="review-dot" data-review="4"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Review 4 -->
                                        <div class="review-slide" data-review="4">
                                            <div class="review-content">
                                                <img class="review-icon" src="/images/frame-1-page-6.svg" alt="Quote icon" />
                                                <div class="review-text">
                                                    <p class="text-wrapper-37"><?= $lang['reviews']['reviews']['review4']['text'] ?></p>
                                                    <div class="text-wrapper-38"><?= $lang['reviews']['reviews']['review4']['author'] ?></div>
                                                </div>
                                                <div class="review-dots">
                                                    <div class="review-dot" data-review="1"></div>
                                                    <div class="review-dot" data-review="2"></div>
                                                    <div class="review-dot" data-review="3"></div>
                                                    <div class="review-dot dot-active" data-review="4"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page 7: FAQ Section -->
                <div class="page-7" id="faq">

                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <div class="faq-header">
                                    <div class="text-wrapper-27"><?= $lang['faq']['title'] ?></div>
                                    <p class="text-wrapper-28">
                                        <?= $lang['faq']['description'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="faq-list">
     
                                    <div class="faq-item open">
                                        <div class="faq-question">
                                            <span class="faq-q"><?= $lang['faq']['questions']['q1']['question'] ?></span>
                                            <img class="faq-toggle" src="/images/plusminuscircle.svg" alt="minus" />
                                        </div>
                                        <div class="faq-answer" style="display:block;">
                                            <?= $lang['faq']['questions']['q1']['answer'] ?>
                                        </div>
                                    </div>

                                    <div class="faq-item">
                                        <div class="faq-question">
                                            <span class="faq-q"><?= $lang['faq']['questions']['q2']['question'] ?></span>
                                            <img class="faq-toggle" src="/images/pluscircle.svg" alt="plus" />
                                        </div>
                                        <div class="faq-answer">
                                            <?= $lang['faq']['questions']['q2']['answer'] ?>
                                        </div>
                                    </div>

                                    <div class="faq-item">
                                        <div class="faq-question">
                                            <span class="faq-q"><?= $lang['faq']['questions']['q3']['question'] ?></span>
                                            <img class="faq-toggle" src="/images/pluscircle.svg" alt="plus" />
                                        </div>
                                        <div class="faq-answer">
                                            <?= $lang['faq']['questions']['q3']['answer'] ?>
                                        </div>
                                    </div>

                                    <div class="faq-item">
                                        <div class="faq-question">
                                            <span class="faq-q"><?= $lang['faq']['questions']['q4']['question'] ?></span>
                                            <img class="faq-toggle" src="/images/pluscircle.svg" alt="plus" />
                                        </div>
                                        <div class="faq-answer">
                                            <?= $lang['faq']['questions']['q4']['answer'] ?>
                                        </div>
                                    </div>

                                    <div class="faq-item">
                                        <div class="faq-question">
                                            <span class="faq-q"><?= $lang['faq']['questions']['q5']['question'] ?></span>
                                            <img class="faq-toggle" src="/images/pluscircle.svg" alt="plus" />
                                        </div>
                                        <div class="faq-answer">
                                            <?= $lang['faq']['questions']['q5']['answer'] ?>
                                        </div>
                                    </div>

                                    <div class="faq-item">
                                        <div class="faq-question">
                                            <span class="faq-q"><?= $lang['faq']['questions']['q6']['question'] ?></span>
                                            <img class="faq-toggle" src="/images/pluscircle.svg" alt="plus" />
                                        </div>
                                        <div class="faq-answer">
                                            <?= $lang['faq']['questions']['q6']['answer'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>

                <!-- Page 8: Final CTA Section -->
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="page-8">
                            <div class="group-11">
                                <div class="overlap-6">
                                    <div class="rectangle-11">
                                        <div class="row">
                                            <div class="col-lg-8 col-12">
                                                <div class="frame-41">
                                                    <p class="key-tether-3 ">
                                                        <span class="text-wrapper-39"><?= $lang['final_cta']['title_1'] ?></span>
                                                        <span class="text-wrapper-17"><?= $lang['final_cta']['title_2'] ?></span>
                                                    </p>
                                                    <p class="key-tether-4">
                                                        <span class="text-wrapper-40"><?= $lang['final_cta']['description_1'] ?></span>
                                                        <span class="text-wrapper-41"><?= $lang['final_cta']['description_2'] ?></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-12 text-center">
                                                <div class="image">
                                                    <img src="/images/imageofthefinalpage.svg" class="image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-12">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-12 mt-5">
                                                    <div class="overlap-8">
                                                        <div class="text-wrapper-42"><?= $lang['final_cta']['feature_title'] ?></div>
                                                        <div class="text-wrapper-43"><?= $lang['final_cta']['wallet_title'] ?></div>
                                                        <img class="line-2" src="/images/line-page-8.svg" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12 mt-lg-5">
                                                    <div class="flexcontainer">
                                                        <ul class="custom-bullets">
                                                            <li><span class="span"><?= $lang['final_cta']['features']['feature1'] ?></span></li>
                                                            <li><span class="span"><?= $lang['final_cta']['features']['feature2'] ?></span></li>
                                                            <li><span class="text-wrapper-20"><?= $lang['final_cta']['features']['feature3'] ?></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-lg-4">
                                                <div class="col-12 text-center">
                                                    <div class="component justify-content-center">
                                                        <a class="element text-center" href="https://t.me/keytether_support"><?= $lang['final_cta']['cta_button'] ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Features Section -->


            </div>


        
            <!-- Footer -->
            <div class="footer ">
                <div class="overlap">
                    <div class="rectangle">
                    <img class="logo" src="/images/logo-footer.svg" />
                    <p class="text-wrapper"><?= $lang['footer']['copyright'] ?></p>
                    </div>

                    <div class="rectangle-2"></div>
                    <div class="rectangle-3"></div>
                </div>
            </div>


        </div>  
    </div>
    
    
    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Reviews Slider Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dots = document.querySelectorAll('.review-dot');
            const slides = document.querySelectorAll('.review-slide');
            
            // Function to show a specific review
            function showReview(reviewNumber) {
                // Hide all slides and remove active class from dots
                slides.forEach(slide => {
                    slide.classList.remove('active');
                });
                dots.forEach(dot => {
                    dot.classList.remove('active');
                });
                
                // Show selected slide and activate corresponding dot
                document.querySelector(`.review-slide[data-review="${reviewNumber}"]`).classList.add('active');
                document.querySelector(`.review-dot[data-review="${reviewNumber}"]`).classList.add('active');
            }
            
            // Add click event listeners to dots
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    const reviewNumber = this.getAttribute('data-review');
                    showReview(reviewNumber);
                });
            });
            
            // Optional: Auto-rotate reviews every 5 seconds
            let currentReview = 1;
            const totalReviews = slides.length;
            
            setInterval(() => {
                currentReview = currentReview % totalReviews + 1;
                showReview(currentReview);
            }, 5000);
        });
    </script>

    <!-- FAQ Accordion Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.faq-question').forEach(function(q, idx, arr) {
            q.addEventListener('click', function() {
                const item = this.closest('.faq-item');
                const isOpen = item.classList.contains('open');
                // Close all
                document.querySelectorAll('.faq-item').forEach(i => {
                    i.classList.remove('open');
                    i.querySelector('.faq-answer').style.display = 'none';
                    i.querySelector('.faq-toggle').src = '/images/pluscircle.svg';
                    i.querySelector('.faq-toggle').alt = 'plus';
                });
                // Open if was closed
                if (!isOpen) {
                    item.classList.add('open');
                    item.querySelector('.faq-answer').style.display = 'block';
                    item.querySelector('.faq-toggle').src = '/images/plusminuscircle.svg';
                    item.querySelector('.faq-toggle').alt = 'minus';
                }
            });
        });
    });
    </script>

    <script>
    window.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var flipper = document.querySelector('.card-flipper');
            if (flipper) {
                flipper.classList.add('flipped');
            }
        }, 0.5); // 0.5s delay for smooth effect
    });
    </script>

    <!-- Scroll to top button -->
    <button id="scrollToTop" class="scroll-to-top-btn" aria-label="Scroll to top">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 4L4 12H9V20H15V12H20L12 4Z" fill="currentColor"/>
        </svg>
    </button>

    <!-- Mobile Navigation Close Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the mobile nav collapse element
            const mobileNav = document.getElementById('mobileNav');
            const bsCollapse = new bootstrap.Collapse(mobileNav, {toggle: false});
            
            // Close mobile nav when any navigation link is clicked
            document.querySelectorAll('.mobile-nav-item').forEach(function(link) {
                link.addEventListener('click', function() {
                    bsCollapse.hide();
                });
            });
            
            // Close mobile nav when the button is clicked
            document.querySelector('.mobile-header-button').addEventListener('click', function() {
                bsCollapse.hide();
            });
        });
    </script>

    <!-- Scroll to top functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollToTopBtn = document.getElementById('scrollToTop');
            
            // Show button always (remove scroll-based visibility)
            scrollToTopBtn.classList.add('show');
            
            // Smooth scroll to hero section when button is clicked
            scrollToTopBtn.addEventListener('click', function() {
                const heroSection = document.getElementById('hero');
                if (heroSection) {
                    heroSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                } else {
                    // Fallback to top if hero section not found
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>

