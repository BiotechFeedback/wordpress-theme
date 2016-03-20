<?php
/*
Template Name: Homepage
*/
?>

</div><!-- / .row -->
</div><!-- / .container -->

<div class="sigla jumbotron">
  <div class="container">
    <div class="row">
      <h3 class="tagline half-black">A voice for science in online media coverage of biotechnology</h3>
    </div>
  </div>
</div>

<div class="container">

  <section class="highlevel-overview">
    <div class="row ">
      <div class="col-sm-6 ">
        <h3 class="spaceup">Online information about biotechnology can be conflicting - and confusing</h3>
        <p>There is a plethora of information about biotechnology online. However, it is difficult to identify which news reports of biotechnology are accurate, and which are not. This is especially true for the vast majority of us who are not experts in the field. </p>
      </div>
      <div class="col-sm-6">
        <img class="fig" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/i1_confusion.png">
      </div>
    </div>

    <div class="row ">
      <div class="col-sm-6 hidden-xs">
        <img alt="A daily mail article annotated by scientists." src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/i2_our-process.png" class="fig" />
      </div>
      <div class="col-sm-6 ">
        <h3 class="spaceup">What if popular media could be reviewed by scientific experts?</h3>
        <p>Thanks to the <a href="http://hypothes.is" target="_blank">Hypothesis</a> online annotation platform, scientists now have a way to give line-by-line feedback to online news reports of biotechnology. This allows readers to view scientists’ remarks in the context of the original text to identify exactly where the information is consistent - or inconsistent - with expert understanding in the field.
        </p>
      </div>
      <div class="col-sm-6 visible-xs">
        <img alt="A daily mail article annotated by scientists." src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/i2_our-process.png" class="fig" />
      </div>
    </div>

    <div class="row ">
      <div class="col-sm-6">
        <h3 class="spaceup">Freely available, accurate information: the foundation of a functioning democracy</h3>
        <p>In order to make informed decisions regarding their day-to-day lives, citizens need access to credible information from trusted sources. The goal of Biotech Feedback is to leverage the expertise of the scientific community to 1) provide direct feedback to journalists and 2) provide readers with easily accessible credibility assessments for online news articles.</p>
      </div>
      <div class="col-sm-6">
        <img alt="" class="fig" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/i3_result.png">
      </div>
    </div>
  </section>

</div><!-- / .container -->
<!--
<section class="scientist-signup">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 call-to-action">
        <div class="media-left">
          <img alt="" class="sci-fig" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/scientists-logo2.png">
        </div>
        <div class="media-body">
          <h3>SCIENTISTS!</h3>
          <h4>Help us create a better informed society. Join our community today!</h4>
          <a href="for-scientists/" class="btn btn-primary btn-lg">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<div class="container">
  <section class="news-and-evaluations">
    <div class="row section">
      <div class="col-sm-6">
        <!-- Evaluations -->
        <h2>Latest Feedbacks</h2>
        <?php
        $args = array(
          'post_type' => array( 'evaluation'),
          'posts_per_page' => 3 );
        $loop = new WP_Query( $args );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <article>
            <header>
              <?php if ( 'press' == get_post_type() ) : ?>
                <h4 class="headline">
                  <a href="<?php $key_1_value = get_post_meta( get_the_ID(), 'link', true );
                  if( ! empty( $key_1_value ) ) { echo $key_1_value; } ?>"><?php the_title(); ?>
                  </a>
                </h4>
              <?php endif; ?>
              <?php if ( 'press' != get_post_type() ) : ?>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <?php endif; ?>
            </header>
            <div class="media-left hidden-xs">
              <a class="frontpagepostpic" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail() ?>
              </a>
            </div>
            <div class="media-body small">
              <h4 style="margin-bottom:-1em;"><?php echo get_post_meta( get_the_ID(), 'outlet', true ); ?></h4>
              <?php the_excerpt(); ?>
            </div>
          </article>
          <hr/>
        <?php endwhile; ?>
        <a href="feedbacks/" class="btn btn-primary">More Feedbacks</a>
      </div>

      <div class="col-sm-6">
        <!-- News -->
        <h2>News</h2>
        <?php
        $args = array(
          'post_type' => array( 'post', 'press' ),
          'posts_per_page' => 3 );
        $loop = new WP_Query( $args );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <article>
            <header>
              <?php if ( 'press' == get_post_type() ) : ?>
                <h4 class="headline">
                  <a href="<?php $key_1_value = get_post_meta( get_the_ID(), 'link', true );
                  if( ! empty( $key_1_value ) ) { echo $key_1_value; } ?>"><?php the_title(); ?>
                  </a>
                </h4>
              <?php endif; ?>
              <?php if ( 'press' != get_post_type() ) : ?>
                <h4 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <?php endif; ?>
            </header>
            <div class="media-left hidden-xs">
              <a class="frontpagepostpic" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail() ?>
              </a>
            </div>
            <div class="media-body small">
              <?php the_excerpt(); ?>
            </div>
          </article>
          <hr/>
        <?php endwhile; ?>

         <a href="blog-posts/" class="btn btn-primary">More Posts</a> 
      </div>

    </div>
  </section>

</div><!-- / .container -->

<!-- 
<section class="press-show">
  <div class="container">

    <h4>HEAR WHAT THEY’RE SAYING ABOUT US</h4>
    <div class="row">
      <div class="col-4">
        <a href="http://j.mp/CF_OnTheMedia" target="_blank"> <img class="press-fig" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/press-npr.png"> </a>
      </div>
      <div class="col-4">
        <a href="http://www.salon.com/2014/12/04/new_mit_app_lets_scientists_fact_check_the_media_on_climate/" target="_blank">   <img class="press-fig" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/press-salon.png"></a>
      </div>
      <div class="col-4 forbes">
        <a href="http://www.forbes.com/sites/tomzeller/2015/02/24/policing-the-online-climate-conversation/" target="_blank"> <img class="press-fig" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/press-forbes.png"></a>
      </div>
      <div class="col-4">
        <a href="press/" class="btn btn-primary">More Press</a>
      </div>
    </div>

  </div>
</section>
-->
