<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>遠見房屋</title>

    <link rel="stylesheet" href="./public/css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="./public/css/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="./public/css/common.css" />
    <link rel="stylesheet" href="./public/css/font.css" />
    <link rel="stylesheet" href="./public/css/style.css" />
  </head>
  <body>
    <!-- header -->
    <header>
      <div class="info">
        <div
          class="
            container
            d-flex
            align-items-center
            justify-content-between
            h-100
          "
        >
          <div class="d-flex align-items-center">
            <img
              class="icon-mobile"
              src="./public/img/icon-mobile.svg"
              alt=""
            />
            <span>0938-319152</span>
          </div>
          <a href="#"
            ><img class="icon-fb" src="./public/img/icon-fb.svg" alt=""
          /></a>
        </div>
      </div>
      <div class="header-flex">
        <div
          class="container d-flex align-items-center justify-content-between"
        >
          <img src="./public/img/logo.png" alt="" class="header-icon" />
          <nav>
            <ul class="header-nav">
              <li class="header-highlights" data-goto-target="#news">
                最新消息
              </li>
              <li class="header-highlights" data-goto-target="#recc">
                推薦好案
              </li>
              <li class="header-highlights" data-goto-target="#intro">
                案件介紹
              </li>
              <li class="header-highlights" data-goto-target="#contact">
                聯絡我們
              </li>
            </ul>
          </nav>
          <div id="menu-icon">
            <div class="top-bar bar"></div>
            <div class="middle-bar bar"></div>
            <div class="bottom-bar bar"></div>
          </div>
        </div>
      </div>
    </header>

    <main>
      <!-- banner -->
      <div class="banner position-relative">
        <img src="./public/img/banner-pc.png" alt="" class="d-sm-block d-none pic w-100"/>
        <img src="./public/img/banner-mobile.png" alt="" class="d-sm-none d-block pic w-100"/>
        <div class="link-box">
          <a href="https://www.facebook.com/Dreamhouse.9213" target="_blank"><img src="./public/img/link-fb.png" alt=""></a>
          <a href="https://line.me/ti/p/hHeLaoOc_N" target="_blank"><img src="./public/img/link-line.png" alt=""></a>
          <a href="https://youtube.com/user/tyjf2943" target="_blank"><img src="./public/img/link-yt.png" alt=""></a>
        </div>
        <img class="w-100 position-absolute style-bg" src="./public/img/bg-style-1.svg" alt=""/>
      </div>

      <!-- 最新消息 -->
      <div class="news pb-100 pt-40" id="news">
        <h2 class="title">最新消息</h2>
        <div>
          <!-- 第一則 -->
          <div class="news news-group" data-bs-toggle="modal" data-bs-target="#news-popup-1">
            <div class="news-flex">
              <div class="news-flex-date">
                <h5>2021.10.05</h5>
              </div>
              <div class="news-flex-title">
                <p>
                  房地合一稅2.0六大修法重點一覽表文宣內容
                </p>
              </div>
              <img src="./public/img/arrow.svg" alt="" class="news-icon" />
            </div>
          </div>
          <!-- 第一則 end -->

          <!-- 第二則 -->
          <div class="news news-group" data-bs-toggle="modal" data-bs-target="#news-popup-2">
            <div class="news-flex">
              <div class="news-flex-date">
                <h5>2021.10.06</h5>
              </div>
              <div class="news-flex-title">
                <p>
                    為什麼你應該（幾乎總是）把網站 Logo 放在左上角？
                </p>
              </div>
              <img src="./public/img/arrow.svg" alt="" class="news-icon" />
            </div>
          </div>
          <!-- 第二則 end -->

          <!-- 第三則 -->
          <div class="news news-group" data-bs-toggle="modal" data-bs-target="#news-popup-3">
            <div class="news-flex">
              <div class="news-flex-date">
                <h5>2021.10.07</h5>
              </div>
              <div class="news-flex-title">
                <p>
                    首先，放左邊的理由是什麼？
                </p>
              </div>
              <img src="./public/img/arrow.svg" alt="" class="news-icon" />
            </div>
          </div>
          <!-- 第三則 end -->

          <!-- 第四則 -->
          <div class="news news-group" data-bs-toggle="modal" data-bs-target="#news-popup-4">
            <div class="news-flex">
              <div class="news-flex-date">
                <h5>2021.10.08</h5>
              </div>
              <div class="news-flex-title">
                <p>
                    放在右邊的話，可能會傷害品牌認知
                </p>
              </div>
              <img src="./public/img/arrow.svg" alt="" class="news-icon" />
            </div>
          </div>
          <!-- 第四則 end -->

          <!-- 第五則 -->
          <div class="news news-group" data-bs-toggle="modal" data-bs-target="#news-popup-5">
            <div class="news-flex">
              <div class="news-flex-date">
                <h5>2021.10.09</h5>
              </div>
              <div class="news-flex-title">
                <p>
                放在中間的話，會讓網站難以使用
                </p>
              </div>
              <img src="./public/img/arrow.svg" alt="" class="news-icon" />
            </div>
          </div>
          <!-- 第五則 end -->
        </div>
      </div>
      <?php include("./news-popup.php"); ?>

      

      <!-- 推薦好案 -->
      <div class="reccomand" id="recc">
        <img class="style-bg w-100" src="./public/img/bg-style-2.svg" alt="" />
        <h2 class="title pt-40">推薦好案</h2>
        <div class="pb-100">
          <div class="swiper-box">
            <div class="swiper-container RSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="recc d-flex flex-wrap">

                    <!-- 第一則 -->
                    <div class="content">
                      <a target="_blank" href="https://manage.foresightrealtors.com.tw/api/CaseView.aspx?share=c61em4-d65faa96-9a4d-482f-8f1a-b73080548b70">
                        <div class="content-box">
                          <img class="pic" src="./public/img/case-pic-4.png" alt=""/>
                          <div class="hover-box"></div>
                          <div class="case-name">舊社公園松竹捷運大3房</div>
                          <div class="price">890萬</div>
                        </div>
                      </a>
                    </div>
                    <!-- 第一則 end -->

                    <!-- 第二則 -->
                    <div class="content" data-bs-toggle="modal" data-bs-target="#recc-popup-2">
                      <a target="_blank" href="https://manage.foresightrealtors.com.tw/api/CaseView.aspx?share=c61em4-d65faa96-9a4d-482f-8f1a-b73080548b70">
                        <div class="content-box">
                          <img class="pic" src="./public/img/case-pic-4.png" alt=""/>
                          <div class="hover-box"></div>
                          <div class="case-name">舊社公園松竹捷運大3房</div>
                          <div class="price">890萬</div>
                        </div>
                      </a>
                    </div>
                    <!-- 第二則 end -->
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="recc d-flex flex-wrap">
                    <!-- 第三則 -->
                    <div class="content" data-bs-toggle="modal" data-bs-target="#recc-popup-3">
                      <a target="_blank" href="https://manage.foresightrealtors.com.tw/api/CaseView.aspx?share=c61em4-d65faa96-9a4d-482f-8f1a-b73080548b70">
                        <div class="content-box">
                          <img class="pic" src="./public/img/case-pic-4.png" alt=""/>
                          <div class="hover-box"></div>
                          <div class="case-name">舊社公園松竹捷運大3房</div>
                          <div class="price">890萬</div>
                        </div>
                      </a>
                    </div>
                    <!-- 第三則 end -->

                    <!-- 第四則 -->
                    <div class="content" data-bs-toggle="modal" data-bs-target="#recc-popup-4">
                      <a target="_blank" href="https://manage.foresightrealtors.com.tw/api/CaseView.aspx?share=c61em4-d65faa96-9a4d-482f-8f1a-b73080548b70">
                        <div class="content-box">
                          <img class="pic" src="./public/img/case-pic-4.png" alt=""/>
                          <div class="hover-box"></div>
                          <div class="case-name">舊社公園松竹捷運大3房</div>
                          <div class="price">890萬</div>
                        </div>
                      </a>
                    </div>
                    <!-- 第四則 end -->
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="recc d-flex flex-wrap">
                    <!-- 第五則 -->
                    <div class="content" data-bs-toggle="modal" data-bs-target="#recc-popup-5">
                      <a target="_blank" href="https://manage.foresightrealtors.com.tw/api/CaseView.aspx?share=c61em4-d65faa96-9a4d-482f-8f1a-b73080548b70">
                        <div class="content-box">
                          <img class="pic" src="./public/img/case-pic-4.png" alt=""/>
                          <div class="hover-box"></div>
                          <div class="case-name">舊社公園松竹捷運大3房</div>
                          <div class="price">890萬</div>
                        </div>
                      </a>
                    </div>
                    <!-- 第五則 end -->

                    <!-- 第六則 -->
                    <div class="content" data-bs-toggle="modal" data-bs-target="#recc-popup-6">
                      <a target="_blank" href="https://manage.foresightrealtors.com.tw/api/CaseView.aspx?share=c61em4-d65faa96-9a4d-482f-8f1a-b73080548b70">
                        <div class="content-box">
                          <img class="pic" src="./public/img/case-pic-4.png" alt=""/>
                          <div class="hover-box"></div>
                          <div class="case-name">舊社公園松竹捷運大3房</div>
                          <div class="price">890萬</div>
                        </div>
                      </a>
                    </div>
                    <!-- 第六則 end -->
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="recc d-flex flex-wrap">
                    <!-- 第七則 -->
                    <div class="content" data-bs-toggle="modal" data-bs-target="#recc-popup-7">
                      <a target="_blank" href="https://manage.foresightrealtors.com.tw/api/CaseView.aspx?share=c61em4-d65faa96-9a4d-482f-8f1a-b73080548b70">
                        <div class="content-box">
                          <img class="pic" src="./public/img/case-pic-4.png" alt=""/>
                          <div class="hover-box"></div>
                          <div class="case-name">舊社公園松竹捷運大3房</div>
                          <div class="price">890萬</div>
                        </div>
                      </a>
                    </div>
                    <!-- 第七則 end -->

                    <!-- 第八則 -->
                    <div class="content" data-bs-toggle="modal" data-bs-target="#recc-popup-8">
                      <a target="_blank" href="https://manage.foresightrealtors.com.tw/api/CaseView.aspx?share=c61em4-d65faa96-9a4d-482f-8f1a-b73080548b70">
                        <div class="content-box">
                          <img class="pic" src="./public/img/case-pic-4.png" alt=""/>
                          <div class="hover-box"></div>
                          <div class="case-name">舊社公園松竹捷運大3房</div>
                          <div class="price">890萬</div>
                        </div>
                      </a>
                    </div>
                    <!-- 第八則 end -->
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
        <img class="style-bg w-100" src="./public/img/bg-style-3.svg" alt="" />
      </div>
      <?php include("./reccomand-popup.php"); ?>

      <!-- 案件介紹 -->
      <div class="introduce pt-40" id="intro">
        <h2 class="title">案件介紹</h2>

        <ul class="nav nav-tabs intro-tab" id="introTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="intro-tab-1" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">西屯逢甲</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="intro-tab-2" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">12期重劃區</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="intro-tab-3" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">水湳經貿園區</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="intro-tab-4" data-bs-toggle="tab" data-bs-target="#tab-4" type="button" role="tab" aria-controls="tab-4" aria-selected="false">11期重劃區</button>
          </li>
        </ul>
        <div class="tab-content" id="introTabContent">
          <!-- 西屯逢甲 -->
          <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="intro-tab-1">
            <div class="intro-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-1_1">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-2.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-1_2">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-1.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-1_3">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-4.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-1_4">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-3.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-1_5">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-2.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-1_6">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-1.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 西屯逢甲 end -->

          <!-- 12期重劃區 -->
          <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="intro-tab-2">
            <div class="intro-content">
              <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 px-2">
                        <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-2_1">
                            <div class="introduce-flex">
                                <div class="introduce-img">
                                    <img src="./public/img/case-pic-1.png" alt="" />
                                </div>
                                <div class="introduce-text-group">
                                    <p>
                                    「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                                    </p>
                                </div>
                            </div>
                            <div class="introduce-title">
                                <h4>達麗創世紀</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 px-2">
                        <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-2_2">
                            <div class="introduce-flex">
                                <div class="introduce-img">
                                    <img src="./public/img/case-pic-2.png" alt="" />
                                </div>
                            <div class="introduce-text-group">
                                <p>
                                    「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                                </p>
                            </div>
                        </div>
                        <div class="introduce-title">
                            <h4>達麗創世紀</h4>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 px-2">
                        <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-2_3">
                            <div class="introduce-flex">
                                <div class="introduce-img">
                                    <img src="./public/img/case-pic-3.png" alt="" />
                                </div>
                                <div class="introduce-text-group">
                                    <p>
                                        「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                                    </p>
                                </div>
                            </div>
                            <div class="introduce-title">
                                <h4>達麗創世紀</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 px-2">
                        <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-2_4">
                            <div class="introduce-flex">
                                <div class="introduce-img">
                                    <img src="./public/img/case-pic-4.png" alt="" />
                                </div>
                                <div class="introduce-text-group">
                                    <p>
                                    「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                                    </p>
                                </div>
                            </div>
                            <div class="introduce-title">
                                <h4>達麗創世紀</h4>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 12期重劃區 end -->

          <!-- 水湳經貿園區 -->
          <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="intro-tab-3">
            <div class="intro-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-3_1">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-3.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-3_2">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-2.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-3_3">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-4.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-3_4">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-1.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-3_5">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-3.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-3_6">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-4.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-3_7">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-2.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6 px-2">
                    <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-3_8">
                      <div class="introduce-flex">
                        <div class="introduce-img">
                          <img src="./public/img/case-pic-1.png" alt="" />
                        </div>
                        <div class="introduce-text-group">
                          <p>
                            「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                          </p>
                        </div>
                      </div>
                      <div class="introduce-title">
                        <h4>達麗創世紀</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 水湳經貿園區 end -->

          <!-- 11期重劃區 -->
          <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="intro-tab-4">
            <div class="intro-content">
              <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 px-2">
                        <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-4_1">
                            <div class="introduce-flex">
                                <div class="introduce-img">
                                    <img src="./public/img/case-pic-1.png" alt="" />
                                </div>
                                <div class="introduce-text-group">
                                    <p>
                                    「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                                    </p>
                                </div>
                            </div>
                            <div class="introduce-title">
                                <h4>達麗創世紀</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 px-2">
                        <div class="introduce-group" data-bs-toggle="modal" data-bs-target="#intro-popup-4_2">
                            <div class="introduce-flex">
                                <div class="introduce-img">
                                    <img src="./public/img/case-pic-4.png" alt="" />
                                </div>
                            <div class="introduce-text-group">
                                <p>
                                    「達麗創世紀」位於台中市北屯區順平二街與順平路口，由達麗建設事業股份有限公司投資
                                </p>
                            </div>
                        </div>
                        <div class="introduce-title">
                            <h4>達麗創世紀</h4>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 11期重劃區 end -->
        </div>
      </div>
      <!-- 西屯逢甲 popup -->
      <?php include("./introduce-popup-1.php"); ?>
      <!-- 12期重劃區 popup -->
      <?php include("./introduce-popup-2.php"); ?>
      <!-- 水湳經貿園區 popup -->
      <?php include("./introduce-popup-3.php"); ?>
      <!-- 11期重劃區 popup -->
      <?php include("./introduce-popup-4.php"); ?>

      <!-- 聯絡我們 -->
      <div class="contact" id="contact">
        <img class="w-100 mt-n2" src="./public/img/bg-style-2.svg" alt="" />
        <h2 class="title pt-40">聯絡我們</h2>
        <div class="container">

          <p class="welcome">如果您有任何需求，歡迎與我們聯繫</p>
          <form class="contact_box" method="post" action="index.php" name="frmMessage" id="frmMessage" enctype="application/x-www-form-urlencoded">
            <div class="contact_item">
              <label>您想諮詢的服務項目<span class="must">*</span></label>
              <div class="check">
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkService[]" type="checkbox" id="chkService1" value="買房">
                  </div>
                  <label class="check_label" for="chkService1">買房</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkService[]" type="checkbox" id="chkService2" value="賣房">
                  </div>
                  <label class="check_label" for="chkService2">賣房</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkService[]" type="checkbox" id="chkService3" value="租屋">
                  </div>
                  <label class="check_label" for="chkService3">租屋</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkService[]" type="checkbox" id="chkService4" value="其他">
                  </div>
                  <label class="check_label" for="chkService4">其他</label>
                </div>
              </div>
            </div>
            <div class="contact_item">
              <label>您待購/待售的物件，在台中哪裡？<span class="must">*</span></label>
              <div class="check">
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkLocation[]" type="checkbox" id="chkLocation1" value="水湳經貿區">
                  </div>
                  <label class="check_label" for="chkLocation1">水湳經貿區</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkLocation[]" type="checkbox" id="chkLocation2" value="北屯區">
                  </div>
                  <label class="check_label" for="chkLocation2">北屯區</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkLocation[]" type="checkbox" id="chkLocation3" value="西屯區">
                  </div>
                  <label class="check_label" for="chkLocation3">西屯區</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkLocation[]" type="checkbox" id="chkLocation4" value="南屯區">
                  </div>
                  <label class="check_label" for="chkLocation4">南屯區</label>
                </div>

                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkLocation[]" type="checkbox" id="chkLocation6" value="北區">
                  </div>
                  <label class="check_label" for="chkLocation6">北區</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkLocation[]" type="checkbox" id="chkLocation7" value="西區">
                  </div>
                  <label class="check_label" for="chkLocation7">西區</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkLocation[]" type="checkbox" id="chkLocation8" value="東區">
                  </div>
                  <label class="check_label" for="chkLocation8">東區</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkLocation[]" type="checkbox" id="chkLocation9" value="南區">
                  </div>
                  <label class="check_label" for="chkLocation9">南區</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkLocation[]" type="checkbox" id="chkLocation10" value="中區">
                  </div>
                  <label class="check_label" for="chkLocation10">中區</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkLocation[]" type="checkbox" id="chkLocation11" value="其他">
                  </div>
                  <label class="check_label" for="chkLocation11">其他</label>
                </div>
              </div>
            </div>
            <div class="contact_item">
              <label>房型規劃<span class="must">*</span></label>
              <div class="check">
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkHouse[]" type="checkbox" id="chkHouse1" value="1房">
                  </div>
                  <label class="check_label" for="chkHouse1">1房</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkHouse[]" type="checkbox" id="chkHouse2" value="2房">
                  </div>
                  <label class="check_label" for="chkHouse2">2房</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkHouse[]" type="checkbox" id="chkHouse3" value="3房">
                  </div>
                  <label class="check_label" for="chkHouse3">3房</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkHouse[]" type="checkbox" id="chkHouse4" value="4房">
                  </div>
                  <label class="check_label" for="chkHouse4">4房</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkHouse[]" type="checkbox" id="chkHouse5" value="透天">
                  </div>
                  <label class="check_label" for="chkHouse5">透天</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkHouse[]" type="checkbox" id="chkHouse6" value="其他">
                  </div>
                  <label class="check_label" for="chkHouse6">其他</label>
                </div>
              </div>
            </div>
            <div class="contact_item">
              <label>車位需求<span class="must">*</span></label>
              <div class="check">
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkCar[]" type="checkbox" id="chkCar1" value="平面車位">
                  </div>
                  <label class="check_label" for="chkCar1">平面車位</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkCar[]" type="checkbox" id="chkCar2" value="機械車位">
                  </div>
                  <label class="check_label" for="chkCar2">機械車位</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkCar[]" type="checkbox" id="chkCar3" value="無車位皆可">
                  </div>
                  <label class="check_label" for="chkCar3">無車位皆可</label>
                </div>
                <div class="check_item">
                  <div class="check_box">
                    <img src="./public/img/check.svg" alt="">
                    <input name="chkCar[]" type="checkbox" id="chkCar4" value="其他">
                  </div>
                  <label class="check_label" for="chkCar4">其他</label>
                </div>
              </div>
            </div>
            <div class="contact_item price">
              <label for="">預算/售價<span class="must">*</span></label>
              <div class="input">
                <input type="text" name="txtBudget" id="txtBudget"><span>萬</span>
              </div>
            </div>
            <div class="contact_item">
              <label for="">姓名<span class="must">*</span></label>
              <input type="text" name="txtName" id="txtName">
            </div>
            <div class="contact_item">
              <label for="">行動電話<span class="must">*</span></label>
              <input type="phone" name="txtMobile" id="txtMobile">
            </div>
            <div class="contact_item">
              <label for="">LINE ID (純訊息回覆-不受語音打擾)</label>
              <input type="text" name="txtLine" id="txtLine">
            </div>
            <div class="contact_item">
              <label for="">EMAIL</label>
              <input type="email" name="txtEmail" id="txtEmail">
            </div>
            <div class="contact_item">
              <label for="">想補充些什麼</label>
              <textarea name="txtMessage" id="txtMessage" cols="30" rows="10"></textarea>
            </div>
            <INPUT type="button" value="送出" id="btnSubmit" name="btnSubmit" onClick="checkForm();">
          </form>
        </div>
      </div>
    </main>

    <footer class="pt-3">
      <div class="copyright">
        <span>© 2021 - Designed by</span>
        <a href="#" class="logo-box"></a>
      </div>
      <div class="container">
        <div
          class="d-flex align-items-center justify-content-between flex-wrap"
        >
          <div class="me-4 mb-3 d-flex align-items-center">
            <img src="./public/img/icon-mobile-white.svg" alt="" />
            <span>0938-319152 湯聲威</span>
          </div>
          <div class="me-4 mb-3 d-flex align-items-center">
            <img src="./public/img/icon-mail.svg" alt="" />
            <a href="mailto:tyjf2943@gmail.com">tyjf2943@gmail.com</a>
          </div>
          <div class="me-4 mb-3 d-flex align-items-center">
            <img class="icon-line" src="./public/img/icon-line.svg" alt="" />
            <span>dear8852</span>
          </div>
          <div class="me-4 mb-3 d-flex align-items-center">
            <img src="./public/img/icon-map.svg" alt="" />
            <span>台中市北屯區中清路二段673號</span>
          </div>
        </div>
      </div>
    </footer>

    <script src="./public/js/jquery/jquery.min.js"></script>
    <script src="./public/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./public/js/swiper/swiper-bundle.min.js"></script>
    <script src="./public/js/index.js"></script>
  </body>
</html>
