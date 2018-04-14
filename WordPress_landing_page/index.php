<?php get_header(); ?>
    <section id="introblocks">
      <div class="sectiontitle">
        <h6 class="heading"><?php bloginfo("name"); ?></h6>
        <p><?php bloginfo("description"); ?></p>
      </div>
      <ul class="nospace group">
        <?php
          if ( have_posts() ) {
              the_post(); ?>
          <li class="one_third first">
            <article>
              <h6 class="heading font-x1"><a href="#"><?php the_title();?></a></h6>
              <p><?php echo wp_trim_words( get_the_content(), 40); ?></p>
            </article>
          </li>
        <?php 
        }
      ?>
        
        <?php
          if ( have_posts() ) {
              the_post(); ?>
            <li class="one_third">
              <article>
                <h6 class="heading font-x1"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h6>
                <p><?php echo wp_trim_words( get_the_content(), 40); ?></p>
              </article>
            </li>
          <?php 
        }
      ?>
        
        <?php
          if(have_posts() ){
            the_post();?>
              <li class="one_third">
                <article>
                  <h6 class="heading font-x1"><a href="#"><?php the_title(); ?></a></h6>
                  <p><?php echo wp_trim_words( get_the_content(), 40); ?></p>
                </article>
              </li>

          <?php
          }
        ?>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
    <section>
      <div class="sectiontitle">
        <h6 class="heading"><?php bloginfo("name"); ?></h6>
        <p><?php bloginfo("description"); ?></p>
      </div>
      <ul class="nospace group overview">
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading"><?php bloginfo("name"); ?></h6>
              <p>A good website can show your future.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading"><?php bloginfo("name"); ?></h6>
              <p>A good website can show your future.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading"><?php bloginfo("name"); ?></h6>
              <p>A good website can show your future.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Leo vestibulum</h6>
              <p>A good website can show your future.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading"><?php bloginfo("name"); ?></h6>
              <p>A good website can show your picture.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading"><?php bloginfo("name"); ?></h6>
              <p>A good website can show your picture.</p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper coloured">
  <article class="hoc cta clear"> 
    <!-- ################################################################################################ -->
    <h6 class="three_quarter first">A good website can show your picture.</h6>
    <footer class="one_quarter"><a class="btn" href="#">gear up &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading"><?php bloginfo("name"); ?></h6>
      <p><?php bloginfo("description"); ?></p>
    </div>
    <ul class="nospace group latest">

     <?php 
        if(have_posts() ){
          the_post();
          ?>
            <li class="one_half first">
              <article>
                <div class="excerpt">
                  <ul class="nospace meta">
                    <li><i class="fa fa-user"></i> <a href="#"><?php the_author_posts_link(); ?></a></li>
                    <li><i class="fa fa-tag"></i> <a href="#"><?php the_category(" "); ?></a></li>
                  </ul>
                  <h6 class="heading"><?php the_title(); ?></h6>
                  <p><?php echo wp_trim_words( get_the_content(), 40); ?></p>
                  <footer><a href="<?php the_permalink(); ?>">Read More &raquo;</a></footer>
                </div>
                <time datetime="2045-04-06T08:15+00:00"><strong><?php the_time("d"); ?></strong> <em><?php the_time("M"); ?></em></time>
              </article>
            </li>
          <?php
        }
        ?>
      
      <?php
        if(have_posts()){
          the_post();
          ?>
            <li class="one_half">
              <article>
                <div class="excerpt">
                  <ul class="nospace meta">
                    <li><i class="fa fa-user"></i> <a href="#"><?php the_author_posts_link(); ?></a></li>
                    <li><i class="fa fa-tag"></i> <a href="#"><?php the_category(" "); ?></a></li>
                  </ul>
                  <h6 class="heading"><?php the_title(); ?></h6>
                  <p><?php echo wp_trim_words(get_the_content(), 40); ?></p>
                  <footer><a href="#">Read More &raquo;</a></footer>
                </div>
                <time datetime="2045-04-05T08:15+00:00"><strong><?php the_time("j"); ?></strong> <em><?php the_time("M"); ?></em></time>
              </article>
            </li>
          <?php
        }
      ?>
      
    </ul>
    <footer class="center"><a class="btn" href="#">View All Posts &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <figure class="hoc container clear clients"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_quarter first"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php get_footer(); ?>