<?php

// Template Name: Home Page

//custom fields
$prelaunch_price = get_field('prelaunch_price');
$launch_price = get_field('launch_price');
$final_price = get_field('final_price');
$course_url = get_field('course_url');
$button_text = get_field('button_text');
$optin_text = get_field('optin_text');
$optin_button_text = get_field('optin_button_text');

//advanced custom fields
$income_feature_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_feature_description');
$income_left_column_title = get_field('income_left_column_title');
$income_left_column_text = get_field('income_left_column_text');
$income_right_column_title = get_field('income_right_column_title');
$income_right_column_text = get_field('income_right_column_text');


$who_feature_image = get_field('who_feature_image');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');

$project_feature_title = get_field('project_feature_title');
$project_feature_body = get_field('project_feature_body');

$video_section_title = get_field('video_section_title');
$video_section_url = get_field('video_section_url');

$instructor_section_title = get_field('instructor_section_title');
$instructor_name = get_field('instructor_name');
$bio_excerpt = get_field('bio_excerpt');
$full_bio = get_field('full_bio');
$twitter_user_name = get_field('twitter_user_name');
$facebook_user_name = get_field('facebook_user_name');
$instagram_user_name = get_field('instagram_user_name');
$number_of_students = get_field('number_of_students');
$number_of_reviews = get_field('number_of_reviews');
$number_of_courses = get_field('number_of_courses');

get_header();
?>



  <!-- HERO ======================================= -->
  <section id="hero" data-type="background" data-speed="5">
    <article>
      <div class="container clearfix">

        <div class="row">

          <div class="col-sm-5">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" class="logo" alt="badge">
          </div>
          
          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo('name')?></h1>
            <p class="lead"><?php bloginfo('description')?></p>
            <div id="price-timeline">

            <div class="price active">
              <h4>Price or something<small> Coming soon</small></h4><span><?php echo $prelaunch_price; ?></span>
            </div>
            <div class="price">
              <h4>Price or something<small> Coming soon</small></h4><span><?php echo $launch_price; ?></span>
            </div>
            <div class="price">
              <h4>Price or something<small> Coming soon</small></h4><span><?php echo $final_price; ?></span>
            </div>
          </div>
          <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>"><?php echo $button_text?></a></p>
          </div>
        </div>

      </div>
    </article>
  </section>

    <!-- OPT IN SECTION ================================================== -->
    <section id="optin">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <p class="lead"><?php echo $optin_text; ?></p>
          </div>
          <div class="col-sm-4">
            <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
          </div>
        </div>
      </div>

    </section><!-- optin -->

  <!-- BOOST YOUR INCOME======================================= -->
 
  <section id="boost-income">
    <div class="container">
  
      <div class="section-header">

     
        <!-- // if user uploaded an image -->
         <?php if( !empty($income_feature_image)) : ?>
          <img src="<?php echo $income_feature_image['url'];?>" alt="<?php $income_feature_image['alt'];?>">
         <?php endif; ?>
      

        <h2><?php echo $income_section_title; ?></h2>
      </div><!-- section-header -->
  
      <p class="lead"><?php echo $income_section_description; ?>
      </p>
      <div class="row">
        <div class="col-sm-6">
          <h3><?php echo $income_left_column_title; ?></h3>
          <p><?php echo $income_left_column_text; ?></p>
        </div><!-- end col -->
  
        <div class="col-sm-6">
          <h3><?php echo $income_right_column_title; ?></h3>
          <p><?php echo $income_right_column_text; ?></p>
        </div><!-- end col -->
      </div><!-- row -->
  
    </div><!-- container -->
  </section><!-- boost-income -->
  


  <!-- WHO BENEFITS??========================= -->

    <section id="who-benefits">
      <div class="container">
    
        <div class="section-header">

              <!-- // if user uploaded an image -->
         <?php if( !empty($who_feature_image)) : ?>
          <img src="<?php echo $who_feature_image['url'];?>" alt="<?php $who_feature_image['alt'];?>">
         <?php endif; ?>
      


          <h2><?php echo $who_section_title; ?></h2>
        </div><!-- section-header -->
    
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
    
            <?php echo $who_section_body; ?>
    
          </div><!-- end col -->
        </div><!-- row -->
    
      </div><!-- container -->
    </section><!-- who-benefits -->

  <!-- COURSE FEATURES======================================= -->
  <section id="course-features">
    <div class="container">
  
      <div class="section-header">
       
              <!-- // if user uploaded an image -->
         <?php if( !empty($features_section_image)) : ?>
          <img src="<?php echo $features_section_image['url'];?>" alt="<?php $features_section_image['alt'];?>">
         <?php endif; ?>

        <h2><?php echo $features_section_title; ?></h2>



        <!-- OPTIONAL BODY TEXT ================================== -->
          <?php if( !empty($features_section_body) ) : ?>
        <p class="lead"><?php echo $features_section_body; ?></p>

          <?php endif; ?>

      </div><!-- section-header -->
  
      <div class="row">


      <!-- =============== looping through icons================ -->
      
        <?php $loop = new WP_Query( array( 'post_type' => 'course_feature',
        'orderby' => 'post_id', 'order' => 'ASC') ); ?>

        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-sm-2">
          <i class="<?php the_field('course_feature_icon'); ?>"></i>
          <h4><?php the_title(''); ?></h4>
        </div>

        <?php endwhile; ?>
    

  
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- course-features -->

  <!-- PRJOECT FEATURES======================================= -->
  <section id="project-features">
    <div class="container">
  
      <h2><?php echo $project_feature_title; ?></h2>
      <p class="lead"><?php echo $project_feature_body; ?></p>
  
      <div class="row">
        <?php $loop = new WP_Query( array( 'post_type' => 'project_feature',
        'orderby' => 'post_id', 'order' => 'ASC') ); ?>

        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-sm-4">
            <?php 
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                } 

              ?>


          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div><!-- col -->

        <?php endwhile; ?>
  
      </div><!-- row -->
  
    </div><!-- container -->
  </section><!-- project-features -->


  <!-- VIDEO FEATURETTE======================================= -->
  <section id="featurette">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2><?php echo $video_section_title; ?></h2>
          <!-- <iframe width="100%" height="415" src="https://www.youtube.com/embed/JSD8k3JwSVU" frameborder="0"
            allowfullscreen></iframe> -->
            <iframe width="100%" height="415" src="<?php echo $video_section_url?>" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div><!-- end col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- featurette -->


  <!-- INSTRUCTOR======================================= -->
  <section id="instructor">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">
          <div class="row">
            <div class="col-lg-8">
              <h2><?php echo $instructor_section_title; ?><small><?php echo $instructor_name; ?></small></h2>
            </div><!-- end col -->
            <div class="col-lg-4">
              <?php if(!empty($twitter_user_name) ) :  ?>
                <a href="https://twitter.com/<?php echo $twitter_user_name; ?>" class="badge social twitter" target="_blank"><i class="fab fa-twitter"></i></a>
              <?php endif; ?>

            <?php if(!empty($facebook_user_name) ) :  ?>
              <a href="https://facebook.com/<?php echo $facebook_user_name; ?>" class="badge social facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <?php endif; ?>

            <?php if(!empty($instagram_user_name) ) :  ?>
              <a href="https://www.instagram.com/<?php echo $instagram_user_name; ?>" class="badge social instagram" target="_blank"><i class="fab fa-instagram"></i></a>
             <?php endif; ?>

            </div><!-- end col -->
  
          </div><!-- row -->
  
          <p class="lead"><?php echo $bio_excerpt; ?>
          <p>
  
          <p><?php echo $full_bio; ?></p>
  
          <hr>
  
          <h3>The Numbers <small>They Don't Lie</small></h3>
          <div class="row">
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $number_of_students; ?> <span>students</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- end col -->
  
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $number_of_reviews; ?> <span>reviews</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- end col -->
  
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $number_of_courses; ?> <span>courses</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- end col -->
          </div><!-- row -->
  
        </div><!-- end col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- instructor -->


  <!--TESTIMONIALS ======================================= -->
  <section id="kudos">
    <div class="container">
      <div class="row">
  
        <div class="col-sm-8 col-sm-offset-2">
          <h2>What People Are Saying About Brad</h2>
  
          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you
                chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have
                questions he is right there with a simple solution or a helpful suggestion to keep me going forward with
                the course work.
                <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->
  
          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                I found Brad to be a great teacher, and a very inspiring person. It's clear he is very passionate about
                helping designers learn to code, and I look forward to more courses from him!
                <cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->
  
          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Illustration of a man with a beard">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                Brad is amazing and I honestly think he's the best tutor of all the courses I have taken on Udemy. Will
                definitely be following him in the future. Thanks Brad!
                <cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->
  
          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                Brad is an excellent instructor. His content is super high quality, and you can see the love and care put
                into every section. The tutorials are the perfect length, and you feel like your doing something right out
                the gate! I really can't believe this is free. I highly recommend taking advantage of this course.
                <cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->
  
        </div><!-- end col -->
  
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- kudos -->




<?php get_footer(); ?>

