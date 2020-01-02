<?php
/*
Template Name: Home Page
 */
//Custom Fields
$prelaunch_price       = get_post_meta( 9, 'prelaunch_price', true );
$launch_price          = get_post_meta( 9, 'launch_price', true );
$final_price           = get_post_meta( 9, 'final_price', true );
$course_url            = get_post_meta( 9, 'course_url', true );
$button_text           = get_post_meta(9, 'button_text', true);
$optin_text            = get_post_meta(9, 'optin_text', true);
$optin_button_text     = get_post_meta(9, 'optin_button_text', true);


get_header();
?>
<!-- HERO -->
  <section id="hero" data-type="background" data-speed="5">
    <!-- article start -->
    <article>
      <!-- containter clearfix start -->
      <div class="container clearfix">
        <!-- row start -->
        <div class="row">
          <!-- col start -->
          <div class="col-sm-5">
            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo" />
          </div>
          <!-- col end -->
          <!-- col start -->
          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo('name');?></h1>
            <p class="head">
              <?php bloginfo('description');?>
            </p>
            <!-- price-timeline start -->
            <div id="price-timeline">
              <!-- price active -->
              <div class="price active">
                <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                <span><?php echo $prelaunch_price;?></span>
              </div>
              <!-- price active end -->
              <!-- price start -->
              <div class="price">
                <h4>Launch Price <small>Coming soon!</small></h4>
                <span><?php echo $launch_price; ?></span>
              </div>
              <!-- price end -->
              <!-- price start -->
              <div class="price">
                <h4>Final Price <small>Coming soon!</small></h4>
                <span><?php echo $final_price;?></span>
              </div>
              <!-- price end -->
            </div>
            <!-- price-timeline end -->
            <p>
              <a href="<?php echo $course_url;?>" class="btn btn-lg btn-danger" role="button"><?php echo $button_text;?></a>
            </p>
          </div>
          <!-- col end  -->
        </div>
        <!-- row end -->
      </div>
      <!-- containter clearfix end -->
    </article>
    <!-- article end -->
  </section>
  <!-- HERO end -->
  <!-- OPT INSECTION -->
  <section id="optin">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <p class="lead">
            <?php echo $optin_text;?>
          </p>
        </div>
        <!-- col -->
        <div class="col-sm-4">
          <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
            <?php echo $optin_button_text;?>
          </button>
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>
  <!-- optin end -->
  <!-- BOOST YOUR INCOME -->
  <section id="boost-income">
    <div class="container">
      <div class="section-header">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-boost.png" alt="Chart" />
        <h2>
          How You Can Boost Your Income
        </h2>
        <p class="lead">
          Whether you’re a freelance designer, entrepreneur, employee for a
          company, code hobbyist, or looking for a new career — this course
          gives you an immensely valuable skill that will enable you to
          either:
        </p>
        <div class="row">
          <div class="col-sm-6">
            <h3>
              Make money on the side
            </h3>
            <p>
              So you can save up for that Hawaiian vacation you’ve been
              wanting, help pay off your debt, your car, your mortgage, or
              simply just to have bonus cash laying around.
            </p>
          </div>
          <div class="col sm-6">
            <h3>Create a Full-Income Website</h3>
            <p>
              WordPress developers have options. Many developers make a
              generous living off of creating custom WordPress themes and
              selling them on websites like ThemeForest. Freelance designers
              and developers can also take on WordPress projects and make an
              extra $1,000 - $5,000+ per month.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- boost income -->
  <!-- WHO BENEFITS -->
  <section id="who-benefits">
    <div class="container">
      <div class="section-header">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-pad.png" alt="Pad and pencil" />
        <h2>Who Should Take This Course?</h2>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h3>Graphics &amp; and Web Designers</h3>
            <p>
              Graphic designers are extremely talented, but ask them to code
              their designs and they’ll freeze up! This leaves them with no
              other choice but to hire a web developer. Any professional
              graphic designers knows web developers can be expensive.
            </p>
            <p>
              If you&rsquo;’re a designer, learning to code your own WordPress
              websites can change your business entirely! Now, not only are
              you a great designer, but you’re a skillful developer, too! This
              puts you in a position to
              <strong> make an extra 1,000 – 5,000 per project.</strong>
            </p>
            <h3>Entrepreneurs</h3>
            <p>
              Entrepreneurs have big dreams, and in many cases, shoestring
              budgets. In order to survive in the cut-throat world of the
              Startup company, it&rsquo;’s a necessity to have a world-class
              website. However, world-class websites come with a large price
              tag.
            </p>
            <p>
              If you can learn how to build a high-quality startup website by
              yourself, then you’ve just saved yourself a lot of cash,
              <strong> tens of thousands of dollars in many cases. </strong>
            </p>
            <h3>Employees</h3>
            <p>
              Any company knows the education &amp; training of their
              employees is key to a thriving team.
            </p>
          </div>
        </div>
      </div>
      <!-- section-header -->
    </div>
    <!-- container -->
  </section>
  <!-- who-benefits -->

  <!-- COURSE FEATURES -->
  <section id="course-features">
    <div class="container">
      <div class="section-header">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-rocket.png" alt="Rocket" />
        <h2>Course Features</h2>
      </div>
      <!-- section header -->
      <div class="row">
        <div class="col-sm-2">
          <i class="ci ci-computer"></i>
          <h4>Lifetime access to 80+ lectures</h4>
        </div>
        <!-- col end -->
        <div class="col-sm-2">
          <i class="ci ci-watch"></i>
          <h4>10+ of HD video Content</h4>
        </div>
        <!-- col end -->
        <div class="col-sm-2">
          <i class="ci ci-calender"></i>
          <h4>30-day money back garuntee</h4>
        </div>
        <!-- col end -->
        <div class="col-sm-2">
          <i class="ci ci-community"></i>
          <h4>Access to a Communnity of like-minded students</h4>
        </div>
        <!-- col end -->
        <div class="col-sm-2">
          <i class="ci ci-instructor"></i>
          <h4>Direct Access to the instructor</h4>
        </div>
        <!-- col end -->
        <div class="col-sm-2">
          <i class="ci ci-device"></i>
          <h4>Accessible on your mobile devices</h4>
        </div>
        <!-- col end -->
      </div>
    </div>
  </section>
  <!-- PROJECT FEATURES -->
  <section id="project-features">
    <div class="container">
      <h2>Final Project Features</h2>
      <p class="lead">
        Throughout this entire course, you work towards building an incredibly
        beautiful website. Want to see the website <strong>you</strong> are
        going to build? <em>You're looking at it!</em> The website you're
        using right now is the website you will have built entirely by
        yourself, by the end of this course.
      </p>
      <div class="row">
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-design.png" alt="Design" />
          <h3 class="">Sexy &amp; Modern Design</h3>
          <p>
            You get to get work with a modern, professional quality design
            &amp; layout.
          </p>
        </div>
        <!-- column end -->

        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-code.png" alt="Code" />
          <h3 class="">Qoality HTML5 &amp; CSS3</h3>
          <p>
            You'll learn how hand-craft a stunning website with valid,
            semantic and beautiful HTML5 &amp; CSS3.
          </p>
        </div>
        <!-- column end -->
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-cms.png" alt="CMS" />
          <h3 class="">Easy-to-use CMS</h3>
          <p>
            Allow your clients to easily update their websites by converting
            your static websites to dynamic websites, using WordPress.
          </p>
        </div>
        <!-- column end -->
      </div>
      <!-- row end -->
    </div>
  </section>
  <!-- VIDEO FEATURETTE  -->
  <section id="featurette">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2>Watch the Course Introduction</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/ifAfweJtf_k?controls=0" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- video featurette end -->

  <!-- PROJECT FEATURES End -->
  <!-- INSTRUCTOR -->
  <section id="instructor">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">
          <div class="row">
            <div class="col-lg-8">
              <h2>Your Instructor <small>Brad Hussy</small></h2>
            </div>
            <!-- col end -->
            <div class="col-lg-4">
              <a target="_blank" class="badge social twitter" href="https://twitter.com/bradhussey"><i
                  class="fa fa-twitter"></i></a>
              <a target="_blank" class="badge social facebook" href="https://facebook.com/bradhussey"><i
                  class="fa fa-facebook"></i></a>
              <a target="_blank" class="badge social gplus" href="https://plus.google.com/+BradHussey"><i
                  class="fa fa-google-plus"></i></a>
            </div>
            <!-- col end -->
          </div>
          <!-- row end -->
          <p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer,
            developer, blogger and digital
            entrepreneur.</p>
          <p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver,
            Canada) to educate
            and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the
            web, crafting
            design solutions, and speaking in code.
          </p>
          <p>
            Brad's determination and love for what he does has landed him in some pretty interesting places with some
            neat people.
            He's had the privilege of working with, and providing solutions for, numerous businesses, big & small,
            across the
            Americas.
          </p>
          <p>
            Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company,
            Brightside
            Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium
            quality web
            design tutorials and courses for tens of thousands of amazing people desiring to master their craft.
          </p>
          <hr>
          <h3>The Numbers <small>They Don't Lie</small></h3>
          <div class="row">
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">41,000+</div>
                <span>Students</span>
              </div>
            </div>
            <!-- col end -->
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">568</div>
                <span>reviews</span>
              </div>
            </div>
            <!-- col end -->
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">8</div>
                <span>courses</span>
              </div>
            </div>
            <!-- col end -->
          </div>
          <!-- row end -->

        </div>
        <!-- col end -->
      </div>
      <!-- row end -->
    </div>
    <!-- container -->
  </section>
  <!-- instructor end -->
  <!-- TESTIMONIAL -->
  <section id="kudos">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2>What People Are Saying About Brad</h2>
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/brennan.jpg" alt="Brennan">
            </div>
            <!-- col end -->
            <div class="col-sm-8">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius vestibulum posuere.
                Nulla ac libero fringilla,
                blandit turpis id, sollicitudin est. Pellentesque laoreet vehicula rutrum. Donec suscipit ex sagittis,
                cursus diam
                maximus, imperdiet enim.
                <cite>&mdash; Brennen, graduate of all of Brad's courses
                </cite>
              </blockquote>
            </div>
            <!-- col end -->
          </div>
          <!-- row end -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
            </div>
            <!-- col end -->
            <div class="col-sm-8">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius vestibulum posuere.
                Nulla ac libero fringilla,
                blandit turpis id, sollicitudin est. Pellentesque laoreet vehicula rutrum. Donec suscipit ex sagittis,
                cursus diam
                maximus, imperdiet enim.
                <cite>&mdash; Brennen, graduate of all of Brad's courses
                </cite>
              </blockquote>
            </div>
            <!-- col end -->
          </div>
          <!-- row end -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/aj.png" alt="Illustration of a man with a moustache">
            </div>
            <!-- col end -->
            <div class="col-sm-8">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius vestibulum posuere.
                Nulla ac libero fringilla,
                blandit turpis id, sollicitudin est. Pellentesque laoreet vehicula rutrum. Donec suscipit ex sagittis,
                cursus diam
                maximus, imperdiet enim.
                <cite>&mdash; Brennen, graduate of all of Brad's courses
                </cite>
              </blockquote>
            </div>
            <!-- col end -->
          </div>
          <!-- row end -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
            </div>
            <!-- col end -->
            <div class="col-sm-8">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius vestibulum posuere.
                Nulla ac libero fringilla,
                blandit turpis id, sollicitudin est. Pellentesque laoreet vehicula rutrum. Donec suscipit ex sagittis,
                cursus diam
                maximus, imperdiet enim.
                <cite>&mdash; Brennen, graduate of all of Brad's courses
                </cite>
              </blockquote>
            </div>
            <!-- col end -->
          </div>
          <!-- row end -->
        </div>
        <!-- col end -->
      </div>
      <!-- row end -->
    </div>
    <!-- Container End -->
  </section>
  <!-- Testimonial End -->

<?php
get_footer();
