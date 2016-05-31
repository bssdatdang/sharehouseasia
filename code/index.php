<?php get_header() ?>
    <div class="content ">
      <div class="slider-video" id="slider-video">
        <div class="slider-inner">
          <div class="slider-background video-control" aria-hidden="false">
            <video preload="auto" loop="loop" id="slider-video-main" class="video-playing" autoplay>
              <source src="https://a0.muscache.com/airbnb/static/P1-background-vid-compressed-2.mp4" type="video/mp4">
              <source src="https://a0.muscache.com/airbnb/static/P1-background-vid-compressed-2.webm" type="video/webm">
            </video>
            <div class="overlay">
            </div>
            <div class="video-caption">
              <a href="#" class="btn btn-circle  btn-play hide-md" data-video="slider-video-main"><i class="fa fa-play-circle" ></i></a>
              <h2 class="text-branding text-jumbo text-contrast"> Live There </h2>
              <p class="text-contrast"> Book homes from local hosts in 191+ countries and experience a place like you live there. </p>
              <a href="#" class="btn btn-circle  btn-play hide-sm" data-video="slider-video-main"><i class="fa fa-play-circle" ></i></a>
            </div>
          </div>
          <div class="slider-player  video-control" aria-hidden="true">
            <video preload="auto" loop="loop" id="slider-video-player" class="video-playing">
              <source src="https://a0.muscache.com/airbnb/static/US_60_ANTHEM.mp4" type="video/mp4">
              <source src="https://a0.muscache.com/airbnb/static/US_60_ANTHEM.webm" type="video/webm">
            </video>
            <span class="btn-close "><i class="fa fa-remove"></i></span>
            <div class="video-caption">
              <a href="#" class="btn btn-circle  btn-play" data-video="slider-video-player"><i class="fa fa-play-circle" ></i></a>
            </div>
          </div>
          <!--Start Box Check Availablity-->
          <div class="checking" id="checking">
            <div class="box-inner panel panel-default">
              <div class="container">
                <div class="panel-body">
                  <form class="form-check-available form-inline" method="post" action="#">
                    <div class="form-group">
                      <div class="input-group">
                        <select class="searchform-location searchform-input">
                          <option value="" disabled selected hidden>Please select your area...</option>
                          <option value="1">North Binh Thanh District</option>
                          <option value="1">Southern Binh Thanh District</option>
                          <option value="1">District 2</option>
                          <option value="1">District 3</option>
                        </select>
                        <input type="text" name="dateStart" data-check="start" class=" searchform-input searchform-date date-check-in" placeholder="Check in" id="date-check-in">
                        <input type="text" name="dateEnd" data-check="end" class=" searchform-input searchform-date date-check-out" placeholder="Check out" id="date-check-out">
                        <select class="searchform-guest searchform-input">
                          <option value="1">1 Guest</option>
                          <option value="2">2 Guest</option>
                        </select>
                        <button class="btn btn-search   ">
                          Search
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--/End Box Check Availablity-->
        </div>
      </div>
      <!--Start Box Service-->
      <div class="service box odd" id="service">
        <div class="box-inner panel panel-default">
          <div class="container">
            <div class="panel-heading ">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                  <h3 class="panel-title">Service</h3>
                  <p>Loem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                  <div class="service-inner wow fadeIn" data-wow-duration="0.9s" data-wow-delay="700ms">
                    <div class="service-icon">
                      <i class="fa fa-empire"></i>
                    </div>
                    <h4 class="service-title">Live</h4>
                    <ul class="service-list list-unstyled">
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-file-text-o"></i>
                          Personal Contract
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          Each room have its own contract which is independent from the whole flat. No matter how many person sharing the flat, you pay the same price for all the contract duration.
                        </div>
                      </li>
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-pie-chart"></i>
                          Bills Management 
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          You won’t ever have to worry about managing your bills for your flat; every month you will receive only one bill with your equally-shared part of expenses and charges.
                        </div>
                      </li>
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-recycle"></i>
                          Cleaning Service 
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          We offer a 3 times/week cleaning service for all common areas of the flat (kitchen, bathroom, living room, etc.) with the option of a custom cleaning of bedrooms, washing and ironing clothes upon request!
                        </div>
                      </li>
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-signal"></i>
                          Fully furnished 
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          All of our flats are fully furnished. From a desk, bed and wardrobe, washing machine to multiples Internet routers accessible from everywhere and a fully equipped kitchen.
                        </div>
                      </li>
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-plug"></i>
                          Local Support
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          We have your maintenance needs covered with our technical team. Moreover, as part of the community, you will have access to our best deal in term of travelling and restaurant. Last but not least, we provide to our tenants, the internship and job placement service to provide the best local experiences ever.
                        </div>
                      </li>
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-users"></i>
                          Very Good Ambience
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          We organize trips and events to make you and your housemates join our international community from others flatshares.
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                  <div class="service-inner wow fadeIn" data-wow-duration="0.9s" data-wow-delay="1000ms">
                    <div class="service-icon">
                      <i class="fa fa-file-word-o"></i>
                    </div>
                    <h4 class="service-title">Play & Work</h4>
                    <ul class="service-list list-unstyled">
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-user"></i>
                          Event
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          updating....
                        </div>
                      </li>
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-user"></i>
                          Intership 
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          updating....
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                  <div class="service-inner wow fadeIn" data-wow-duration="0.9s" data-wow-delay="700ms">
                    <div class="service-icon">
                      <i class="fa fa-life-ring"></i>
                    </div>
                    <h4 class="service-title">Support</h4>
                    <ul class="service-list list-unstyled">
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-file-text"></i>
                          Documenttation 
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          updating....
                        </div>
                      </li>
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-list-alt"></i>
                          FAQ 
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          updating....
                        </div>
                      </li>
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-home"></i>
                          House 
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          updating....
                        </div>
                      </li>
                      <li class="service-item">
                        <h6 class="sc-item-title">
                          <i class="fa fa-user"></i>
                          Personal service 
                          <span class="control-caret pull-right"> 
                          <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                        <div class="sc-item-description">
                          updating....
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/End Box Check Availablity-->
      <!--Start Box Location-->
      <div class="location box even" id="checking">
        <div class="box-inner panel panel-default">
          <div class="container">
            <div class="panel-heading ">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                  <h3 class="panel-title">Location</h3>
                  <p>Loem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-8 col-xs-8 location-top location-item ">
                  <a href="room_detail.html">
                    <div class="location-inner  ">
                      <div class="location-thumbnail">
                        <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/binhthanh.jpg">
                      </div>
                      <div class="location-info">
                        <strong> North Binh Thanh</strong>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-xs-4 location-top location-item ">
                  <a href="room_detail.html">
                    <div class="location-inner ">
                      <div class="location-thumbnail">
                        <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/nambinhthanh.jpg">
                      </div>
                      <div class="location-info">
                        <strong>Southern Binh Thanh</strong>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 col-xs-4 location-bottom location-item ">
                  <a href="room_detail.html">
                    <div class="location-inner  ">
                      <div class="location-thumbnail">
                        <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/nambinhthanh.jpg">
                      </div>
                      <div class="location-info">
                        <strong>District 3</strong>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4  col-xs-4 location-bottom location-item ">
                  <a href="room_detail.html">
                    <div class="location-inner  ">
                      <div class="location-thumbnail">
                        <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/nambinhthanh.jpg">
                      </div>
                      <div class="location-info">
                        <strong>District 5</strong>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4  col-xs-4 location-bottom location-item ">
                  <a href="room_detail.html">
                    <div class="location-inner  ">
                      <div class="location-thumbnail">
                        <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/nambinhthanh.jpg">
                      </div>
                      <div class="location-info">
                        <strong>District 10</strong>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/End Box Location-->
      <!--Start Box Event-->
      <div class="event box odd" id="event">
        <div class="box-inner panel panel-default">
          <div class="container">
            <div class="panel-heading  wow fadeIn" data-wow-duration="0.7s" data-wow-delay="500ms">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                  <h3 class="panel-title">Event</h3>
                  <p>Loem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="slider-category  wow fadeIn" data-wow-duration="0.7s" data-wow-delay="600ms">
                    <div class="slider slider-for">
                      <div class="slider-category-item">
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc  1</a>
                            </div>
                          </div>
                        </div>
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc 2</a>
                            </div>
                          </div>
                        </div>
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc 3</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="slider-category-item">
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc  1 - 2</a>
                            </div>
                          </div>
                        </div>
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc 2 - 2</a>
                            </div>
                          </div>
                        </div>
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc 3 - 2</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="slider-category-item">
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc  1 - 3</a>
                            </div>
                          </div>
                        </div>
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc 2 - 3</a>
                            </div>
                          </div>
                        </div>
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc 3 - 3</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="slider-category-item">
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc  1 - 4</a>
                            </div>
                          </div>
                        </div>
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc 2 - 4</a>
                            </div>
                          </div>
                        </div>
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc 3 - 4</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="slider-category-item">
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc  1 - 5</a>
                            </div>
                          </div>
                        </div>
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc 2 - 5</a>
                            </div>
                          </div>
                        </div>
                        <div class="event-item">
                          <div class="event-inner">
                            <div class="event-thumbnail">
                              <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new1.jpg">
                            </div>
                            <div class="event-info">
                              <a href="#"> ABC abc 3 - 5</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slider slider-nav">
                      <div class="event-item">
                        <div class="event-inner">
                          <div class="event-thumbnail">
                            <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/newcat.jpg">
                          </div>
                          <div class="event-info">
                            <a href="#"> cate 1</a>
                          </div>
                        </div>
                      </div>
                      <div class="event-item">
                        <div class="event-inner">
                          <div class="event-thumbnail">
                            <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/news.jpg">
                          </div>
                          <div class="event-info">
                            <a href="#"> cate 2</a>
                          </div>
                        </div>
                      </div>
                      <div class="event-item">
                        <div class="event-inner">
                          <div class="event-thumbnail">
                            <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/newcat.jpg">
                          </div>
                          <div class="event-info">
                            <a href="#">  cate 3</a>
                          </div>
                        </div>
                      </div>
                      <div class="event-item">
                        <div class="event-inner">
                          <div class="event-thumbnail">
                            <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/news.jpg">
                          </div>
                          <div class="event-info">
                            <a href="#">  cate 4</a>
                          </div>
                        </div>
                      </div>
                      <div class="event-item">
                        <div class="event-inner">
                          <div class="event-thumbnail">
                            <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/news.jpg">
                          </div>
                          <div class="event-info">
                            <a href="#">  cate 5</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 event-right">
                  <div class="row  wow fadeIn" data-wow-duration="0.9s" data-wow-delay="1000ms">
                    <div class="col-md-6 event-item">
                      <div class="event-inner">
                        <div class="event-thumbnail">
                          <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new2.jpg">
                        </div>
                        <div class="event-info">
                          <a href="#"> ABC abc </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 event-item">
                      <div class="event-inner">
                        <div class="event-thumbnail">
                          <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new3.jpg">
                        </div>
                        <div class="event-info">
                          <a href="#"> ABC abc </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 event-item">
                      <div class="event-inner">
                        <div class="event-thumbnail">
                          <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/new4.jpg">
                        </div>
                        <div class="event-info">
                          <a href="#"> ABC abc </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 event-item">
                      <div class="event-inner">
                        <div class="event-thumbnail">
                          <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/news.jpg">
                        </div>
                        <div class="event-info">
                          <a href="#"> ABC abc </a>
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
      <!--/End Box Event-->
      <!--Start Box Testimonial-->
      <div class="testimonial box even" id="testimonial">
        <div class="box-inner panel panel-default">
          <div class="container">
            <div class="panel-heading  wow fadeIn" data-wow-duration="0.7s" data-wow-delay="700ms">
              <h3 class="panel-title">What Our Customers Are Saying</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="list-testimonials  wow fadeIn" data-wow-duration="0.7s" data-wow-delay="700ms">
                    <div class="testimonial-item">
                      <div class="testimonial-info">
                        <p class="testimonial-content">Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
                        <p class="testimonial-author">Tâm Nguyễn - TP.HCM - <a href="#">www.mobigo.vn</a> </p>
                      </div>
                      <div class="testimonial-thumbnail">
                        <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/news.jpg">
                      </div>
                    </div>
                    <div class="testimonial-item">
                      <div class="testimonial-info">
                        <p class="testimonial-content">Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
                        <p class="testimonial-author">Hung Hoang - TP.HCM - <a href="#">www.hunghk.com</a> </p>
                      </div>
                      <div class="testimonial-thumbnail">
                        <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/news.jpg">
                      </div>
                    </div>
                    <div class="testimonial-item">
                      <div class="testimonial-info">
                        <p class="testimonial-content">Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
                        <p class="testimonial-author">Dat Quoc - TP.HCM - <a href="#">www.datquoc.com</a> </p>
                      </div>
                      <div class="testimonial-thumbnail">
                        <img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/news.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/End Box Client Say-->
      <!--Start Box Client-->
      <div class="client box odd" id="client">
        <div class="box-inner panel panel-default">
          <div class="container">
            <div class="panel-heading  wow fadeIn" data-wow-duration="0.7s" data-wow-delay="700ms">
              <h3 class="panel-title">Client</h3>
            </div>
            <div class="panel-body">
              <div class="brands  wow fadeIn" data-wow-duration="0.7s" data-wow-delay="700ms">
                <div class="brand-item">
                  <a href="#"><img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png"></a>
                </div>
                <div class="brand-item">
                  <a href="#"><img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png"></a>
                </div>
                <div class="brand-item">
                  <a href="#"><img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png"></a>
                </div>
                <div class="brand-item">
                  <a href="#"><img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png"></a>
                </div>
                <div class="brand-item">
                  <a href="#"><img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png"></a>
                </div>
                <div class="brand-item">
                  <a href="#"><img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png"></a>
                </div>
                <div class="brand-item">
                  <a href="#"><img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png"></a>
                </div>
                <div class="brand-item">
                  <a href="#"><img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png"></a>
                </div>
                <div class="brand-item">
                  <a href="#"><img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png"></a>
                </div>
                <div class="brand-item">
                  <a href="#"><img src="<?php echo SHAREHOUSE_THEME_ASSETS_URI?>/images/default.png"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/End Box Client-->
    </div>

<?php get_footer() ?>