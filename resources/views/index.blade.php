@extends('layouts.main')

@section('content')

<!-- HOME -->
<section id="home" class="padbot0">

  <!-- TOP SLIDER -->
  <div class="flexslider top_slider">
    <ul class="slides">
      <li class="slide1">
        <div class="flex_caption1">
          <p class="title1 captionDelay2 FromTop">Creative</p>
          <p class="title2 captionDelay4 FromTop">White</p>
          <p class="title3 captionDelay6 FromTop">Templates</p>
          <p class="title4 captionDelay7 FromBottom">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
        </div>
        <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
      <li class="slide2">
        <div class="flex_caption1">
          <p class="title1 captionDelay6 FromLeft">Responsive</p>
          <p class="title2 captionDelay4 FromLeft">Design</p>
          <p class="title3 captionDelay2 FromLeft">Theme</p>
          <p class="title4 captionDelay7 FromLeft">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
        </div>
        <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
      </li>
      <li class="slide3">
        <div class="flex_caption1">
          <p class="title1 captionDelay1 FromBottom">Amazing</p>
          <p class="title2 captionDelay2 FromBottom">Video</p>
          <p class="title3 captionDelay3 FromBottom">Background</p>
          <p class="title4 captionDelay5 FromBottom">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
        </div>
        <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>

        <!-- VIDEO BACKGROUND -->
        <a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide3',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
        <!-- //VIDEO BACKGROUND -->
      </li>
    </ul>
  </div>
  <div id="carousel">
    <ul class="slides">
      <li><img src="{{URL::asset('images/slider/slide1_bg.jpg')}}" alt="" /></li>
      <li><img src="images/slider/slide2_bg.jpg" alt="" /></li>
      <li><img src="images/slider/slide3_bg.jpg" alt="" /></li>
    </ul>
  </div><!-- //TOP SLIDER -->
</section><!-- //HOME -->


<!-- ABOUT -->
<section id="about">

  <!-- SERVICES -->
  <div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">

    <!-- CONTAINER -->
    <div class="container">

      <!-- ROW -->
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
          <a class="services_item" href="javascript:void(0);" >
            <p><b>Easy</b> Customize</p>
            <span>Quality and very comfortable design, does not hurt the eyes and pleasant to use.</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
          <a class="services_item" href="javascript:void(0);" >
            <p><b>Modern</b> Design</p>
            <span>Quality and unique design that meets all the requirements and trends of modern web design.</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
          <a class="services_item" href="javascript:void(0);" >
            <p><b>Responsive</b> Design</p>
            <span>Design that will be equally beautifully displayed on all your devices, tablet, smartphone or computer.</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
          <a class="services_item" href="javascript:void(0);" >
            <p><b>Free</b> Updates & Support</p>
            <span>Hour and great support template. You can always ask a question and we will help you.</span>
          </a>
        </div>
      </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
  </div><!-- //SERVICES -->

  <!-- CLEAN CODE -->
  <div class="cleancode_block">

    <!-- CONTAINER -->
    <div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">

      <!-- CASTOM TAB -->
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active clearfix" id="tab1">
          <p class="title"><b>Clean</b> Code</p>
          <span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
        </div>
        <div class="tab-pane fade clearfix" id="tab2">
          <p class="title"><b>Technical</b> Support</p>
          <span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
        </div>
        <div class="tab-pane fade clearfix" id="tab3">
          <p class="title"><b>Responsive</b></p>
          <span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
        </div>
        <div class="tab-pane fade clearfix" id="tab4">
          <p class="title"><b>Documentation</b></p>
          <span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
        </div>
        <div class="tab-pane fade clearfix" id="tab5">
          <p class="title"><b>Quality</b></p>
          <span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
        </div>
        <div class="tab-pane fade clearfix" id="tab6">
          <p class="title"><b>Support</b></p>
          <span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
        </div>
      </div>
      <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a class="i1" href="#tab1" data-toggle="tab" ><i></i><span>Clean Code</span></a></li>
        <li><a class="i2" href="#tab2" data-toggle="tab" ><i></i><span>Support</span></a></li>
        <li><a class="i3" href="#tab3" data-toggle="tab" ><i></i><span>Responsive</span></a></li>
        <li><a class="i4" href="#tab4" data-toggle="tab" ><i></i><span>Documentation</span></a></li>
        <li><a class="i5" href="#tab5" data-toggle="tab" ><i></i><span>Quality</span></a></li>
        <li><a class="i6" href="#tab6" data-toggle="tab" ><i></i><span>Support</span></a></li>
      </ul><!-- CASTOM TAB -->
    </div><!-- //CONTAINER -->
  </div><!-- //CLEAN CODE -->

  <!-- MULTI PURPOSE -->
  <div class="purpose_block">

    <!-- CONTAINER -->
    <div class="container">

      <!-- ROW -->
      <div class="row">

        <div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
          <h2><b>Multi-purpose</b> WordPress Theme</h2>
          <p>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</p>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <a class="btn btn-active" href="javascript:void(0);" ><span data-hover="Yes I want it">Byu This theme</span></a>
          <a class="btn" href="javascript:void(0);" >View more templates</a>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-5 ipad_img_in" data-appear-top-offset="-200" data-animated="fadeInRight">
          <img class="ipad_img1" src="images/img1.png" alt="" />
        </div>
      </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
  </div><!-- //MULTI PURPOSE -->
</section><!-- //ABOUT -->


<!-- PROJECTS -->
<section id="projects" class="padbot20">

  <!-- CONTAINER -->
  <div class="container">
    <h2><b>Featured</b> Works</h2>
  </div><!-- //CONTAINER -->


  <div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
    <!-- PROJECTS SLIDER -->
    <div class="owl-demo owl-carousel projects_slider">

      <!-- work1 -->
      <div class="item">
        <div class="work_item">
          <div class="work_img">
            <img src="images/works/1.jpg" alt="" />
            <a class="zoom" href="images/works/1.jpg" rel="prettyPhoto[portfolio1]" ></a>
          </div>
          <div class="work_description">
            <div class="work_descr_cont">
              <a href="portfolio-post.html" >Ginger Beast</a>
              <span>17 March, 2041</span>
            </div>
          </div>
        </div>
      </div><!-- //work1 -->

      <!-- work2 -->
      <div class="item">
        <div class="work_item">
          <div class="work_img">
            <img src="images/works/2.jpg" alt="" />
            <a class="zoom" href="images/works/2.jpg" rel="prettyPhoto[portfolio1]" ></a>
          </div>
          <div class="work_description">
            <div class="work_descr_cont">
              <a href="portfolio-post.html" >Ginger Beast</a>
              <span>17 March, 2041</span>
            </div>
          </div>
        </div>
      </div><!-- //work2 -->

      <!-- work3 -->
      <div class="item">
        <div class="work_item">
          <div class="work_img">
            <img src="images/works/3.jpg" alt="" />
            <a class="zoom" href="images/works/3.jpg" rel="prettyPhoto[portfolio1]" ></a>
          </div>
          <div class="work_description">
            <div class="work_descr_cont">
              <a href="portfolio-post.html" >Ginger Beast</a>
              <span>17 March, 2041</span>
            </div>
          </div>
        </div>
      </div><!-- //work3 -->

      <!-- work4 -->
      <div class="item">
        <div class="work_item">
          <div class="work_img">
            <img src="images/works/4.jpg" alt="" />
            <a class="zoom" href="images/works/4.jpg" rel="prettyPhoto[portfolio1]" ></a>
          </div>
          <div class="work_description">
            <div class="work_descr_cont">
              <a href="portfolio-post.html" >Ginger Beast</a>
              <span>17 March, 2041</span>
            </div>
          </div>
        </div>
      </div><!-- //work4 -->

      <!-- work5 -->
      <div class="item">
        <div class="work_item">
          <div class="work_img">
            <img src="images/works/5.jpg" alt="" />
            <a class="zoom" href="images/works/5.jpg" rel="prettyPhoto[portfolio1]" ></a>
          </div>
          <div class="work_description">
            <div class="work_descr_cont">
              <a href="portfolio-post.html" >Ginger Beast</a>
              <span>17 March, 2041</span>
            </div>
          </div>
        </div>
      </div><!-- //work5 -->

      <!-- work6 -->
      <div class="item">
        <div class="work_item">
          <div class="work_img">
            <img src="images/works/6.jpg" alt="" />
            <a class="zoom" href="images/works/6.jpg" rel="prettyPhoto[portfolio1]" ></a>
          </div>
          <div class="work_description">
            <div class="work_descr_cont">
              <a href="portfolio-post.html" >Ginger Beast</a>
              <span>17 March, 2041</span>
            </div>
          </div>
        </div>
      </div><!-- //work6 -->

      <!-- work7 -->
      <div class="item">
        <div class="work_item">
          <div class="work_img">
            <img src="images/works/7.jpg" alt="" />
            <a class="zoom" href="images/works/7.jpg" rel="prettyPhoto[portfolio1]" ></a>
          </div>
          <div class="work_description">
            <div class="work_descr_cont">
              <a href="portfolio-post.html" >Ginger Beast</a>
              <span>17 March, 2041</span>
            </div>
          </div>
        </div>
      </div><!-- //work7 -->
    </div><!-- //PROJECTS SLIDER -->
  </div>


  <!-- OUR CLIENTS -->
  <div class="our_clients">

    <!-- CONTAINER -->
    <div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">

      <!-- ROW -->
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 client_img">
          <img src="images/clients/1.jpg" alt="" />
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 client_img">
          <img src="images/clients/2.jpg" alt="" />
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 client_img">
          <img src="images/clients/3.jpg" alt="" />
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 client_img">
          <img src="images/clients/4.jpg" alt="" />
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 client_img">
          <img src="images/clients/5.jpg" alt="" />
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 client_img">
          <img src="images/clients/6.jpg" alt="" />
        </div>
      </div><!-- //ROW -->
    </div><!-- CONTAINER -->
  </div><!-- //OUR CLIENTS -->
</section><!-- //PROJECTS -->


<!-- TEAM -->
<section id="team">

  <!-- CONTAINER -->
  <div class="container">
    <h2><b>Our</b> Team</h2>

    <!-- ROW -->
    <div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">

      <!-- TEAM SLIDER -->
      <div class="owl-demo owl-carousel team_slider">

        <!-- crewman1 -->
        <div class="item">
          <div class="crewman_item">
            <div class="crewman">
              <img src="images/team/1.jpg" alt="" />
            </div>
            <div class="crewman_descr center">
              <div class="crewman_descr_cont">
                <p>Sarah Brown</p>
                <span>Director</span>
              </div>
            </div>
            <div class="crewman_social">
              <a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
        </div><!-- crewman1 -->

        <!-- crewman2 -->
        <div class="item">
          <div class="crewman_item">
            <div class="crewman">
              <img src="images/team/2.jpg" alt="" />
            </div>
            <div class="crewman_descr center">
              <div class="crewman_descr_cont">
                <p>David Jones</p>
                <span>Creative Director</span>
              </div>
            </div>
            <div class="crewman_social">
              <a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
        </div><!-- crewman1 -->

        <!-- crewman3 -->
        <div class="item">
          <div class="crewman_item">
            <div class="crewman">
              <img src="images/team/3.jpg" alt="" />
            </div>
            <div class="crewman_descr center">
              <div class="crewman_descr_cont">
                <p>Kate Smith</p>
                <span>Manager</span>
              </div>
            </div>
            <div class="crewman_social">
              <a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
        </div><!-- crewman3 -->

        <!-- crewman4 -->
        <div class="item">
          <div class="crewman_item">
            <div class="crewman">
              <img src="images/team/4.jpg" alt="" />
            </div>
            <div class="crewman_descr center">
              <div class="crewman_descr_cont">
                <p>Peter Parker</p>
                <span>Manager</span>
              </div>
            </div>
            <div class="crewman_social">
              <a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
        </div><!-- crewman4 -->

        <!-- crewman5 -->
        <div class="item">
          <div class="crewman_item">
            <div class="crewman">
              <img src="images/team/5.jpg" alt="" />
            </div>
            <div class="crewman_descr center">
              <div class="crewman_descr_cont">
                <p>Jim Moss</p>
                <span>Designer</span>
              </div>
            </div>
            <div class="crewman_social">
              <a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
        </div><!-- crewman5 -->

        <!-- crewman6 -->
        <div class="item">
          <div class="crewman_item">
            <div class="crewman">
              <img src="images/team/6.jpg" alt="" />
            </div>
            <div class="crewman_descr center">
              <div class="crewman_descr_cont">
                <p>John Marks</p>
                <span>Designer</span>
              </div>
            </div>
            <div class="crewman_social">
              <a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
        </div><!-- crewman6 -->

        <!-- crewman7 -->
        <div class="item">
          <div class="crewman_item">
            <div class="crewman">
              <img src="images/team/7.jpg" alt="" />
            </div>
            <div class="crewman_descr center">
              <div class="crewman_descr_cont">
                <p>Joe Mades</p>
                <span>Developer</span>
              </div>
            </div>
            <div class="crewman_social">
              <a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
        </div><!-- crewman7 -->

        <!-- crewman8 -->
        <div class="item">
          <div class="crewman_item">
            <div class="crewman">
              <img src="images/team/8.jpg" alt="" />
            </div>
            <div class="crewman_descr center">
              <div class="crewman_descr_cont">
                <p>Julia Anderson</p>
                <span>Developer</span>
              </div>
            </div>
            <div class="crewman_social">
              <a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
              <a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
        </div><!-- crewman8 -->
      </div><!-- TEAM SLIDER -->
    </div><!-- //ROW -->
  </div><!-- //CONTAINER -->
</section><!-- //TEAM -->


<!-- NEWS -->
<section id="news">

  <!-- CONTAINER -->
  <div class="container">
    <h2><b>Clients</b> say about us</h2>

    <!-- TESTIMONIALS -->
    <div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">

      <!-- TESTIMONIALS SLIDER -->
      <div class="owl-demo owl-carousel testim_slider">

        <!-- TESTIMONIAL1 -->
        <div class="item">
          <div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
          <div class="testim_author">—  Anna Balashova, <b>Philosopher</b></div>
        </div><!-- TESTIMONIAL1 -->

        <!-- TESTIMONIAL2 -->
        <div class="item">
          <div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
          <div class="testim_author">—  Anna Balashova, <b>Philosopher</b></div>
        </div><!-- TESTIMONIAL2 -->

        <!-- TESTIMONIAL3 -->
        <div class="item">
          <div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
          <div class="testim_author">—  Anna Balashova, <b>Philosopher</b></div>
        </div><!-- TESTIMONIAL3 -->
      </div><!-- TESTIMONIALS SLIDER -->
    </div><!-- //TESTIMONIALS -->

    <!-- RECENT POSTS -->
    <div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
      <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
        <div class="post_item">
          <div class="post_item_img">
            <img src="images/blog/1.jpg" alt="" />
            <a class="link" href="blog-post.html" ></a>
          </div>
          <div class="post_item_content">
            <a class="title" href="blog-post.html" >Inteligent Transitions In UX Design</a>
            <ul class="post_item_inf">
              <li><a href="javascript:void(0);" >Anna</a> |</li>
              <li><a href="javascript:void(0);" >Photography</a> |</li>
              <li><a href="javascript:void(0);" >10 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
        <div class="post_item">
          <div class="post_item_img">
            <img src="images/blog/2.jpg" alt="" />
            <a class="link" href="blog-post.html"></a>
          </div>
          <div class="post_item_content">
            <a class="title" href="blog-post.html" >Recent trends in storytelling</a>
            <ul class="post_item_inf">
              <li><a href="javascript:void(0);" >Anna</a> |</li>
              <li><a href="javascript:void(0);" >Web Design</a> |</li>
              <li><a href="javascript:void(0);" >No comment</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
        <div class="post_item">
          <div class="post_item_img">
            <img src="images/blog/3.jpg" alt="" />
            <a class="link" href="blog-post.html"></a>
          </div>
          <div class="post_item_content">
            <a class="title" href="blog-post.html" >Supernatural FX Showreel</a>
            <ul class="post_item_inf">
              <li><a href="javascript:void(0);" >Anna</a> |</li>
              <li><a href="javascript:void(0);" >Creative</a> |</li>
              <li><a href="javascript:void(0);" >3 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- RECENT POSTS -->
  </div><!-- //CONTAINER -->
</section><!-- //NEWS -->
@endsection