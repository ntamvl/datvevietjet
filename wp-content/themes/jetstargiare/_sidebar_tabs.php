<div class="tab-spacer">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="myTab">

    <li class="active"><a href="#home" data-toggle="tab"> <i class="fa fa-bolt"></i> Khuyến mãi</a></li>
    <li><a href="#profile" data-toggle="tab"> <i class="fa fa-clock-o"></i> Mới nhất</a></li>
    <li><a href="#top-views" data-toggle="tab"> <i class="fa fa-eye"></i> Xem nhiều nhất</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <div class="tab-pane fade in active" id="home">

      <?php // POPULAR POST
      $posts_per_page = 10;

      $popular_query = array(
                        'posts_per_page' => $posts_per_page,
                        // 'meta_key' => 'wpb_post_views_count',
                        // 'orderby' => 'meta_value_num',
                        'tag_slug__in' => array(
                                                  've-may-bay',
                                                  've-may-bay-vietjet',
                                                  've-may-bay-jetstar',
                                                  've-may-bay-vietnam-airlines',
                                                  've-may-vietjet-gia-re',
                                                  'promotion',
                                                  've-may-bay-khuyen-mai',
                                                  'khuyen mai',
                                                  've may bay gia re'
                                                ),
                        'orderby' => 'date',
                        'order' => 'DESC'
                      );
      $popularpost = new WP_Query( $popular_query );
      while ( $popularpost->have_posts() ) : $popularpost->the_post();?>

      <a href="<?php the_permalink(); ?>">

        <?php $video = get_post_meta($post->ID, 'fullby_video', true );

        if($video != '') {?>

          <img src="http://img.youtube.com/vi/<?php echo $video ?>/1.jpg" class="grid-cop"/>

        <?php

              } else if ( has_post_thumbnail() ) { ?>

                    <?php the_post_thumbnail('thumbnail', array('class' => 'thumbnail')); ?>

                <?php } ?>

          <h2 class="title"><?php the_title(); ?></h2>

          <div class="date"><i class="fa fa-clock-o"></i> <?php the_time('d/m/Y') ?> &nbsp;
          <span class="post-view">
            <i class="fa fa-eye"></i>
            <?php echo get_post_meta( get_the_ID(), 'wpb_post_views_count', true ); ?> lượt xem</span>

          <?php
          $video = get_post_meta($post->ID, 'fullby_video', true );

          if($video != '') { ?>

                  <i class="fa fa-video-camera"></i> Video

                <?php } else if (strpos($post->post_content,'[gallery') !== false) { ?>

                  <i class="fa fa-th"></i> Gallery

                <?php } else {?>

                <?php } ?>

          </div>

        </a>

      <?php endwhile; ?>

      <?php wp_reset_query(); ?>

    </div>

    <!-- begin lastest posts -->
    <div class="tab-pane fade" id="profile">

        <?php
      $popularpost = new WP_Query( array( 'posts_per_page' => $posts_per_page) );
      while ( $popularpost->have_posts() ) : $popularpost->the_post();?>

        <a href="<?php the_permalink(); ?>">

          <?php $video = get_post_meta($post->ID, 'fullby_video', true );

          if($video != '') {?>

            <img src="http://img.youtube.com/vi/<?php echo $video ?>/1.jpg" class="grid-cop"/>

          <?php

                } else if ( has_post_thumbnail() ) { ?>

                        <?php the_post_thumbnail('thumbnail', array('class' => 'thumbnail')); ?>

                    <?php } ?>

            <h2 class="title"><?php the_title(); ?></h2>

            <div class="date"><i class="fa fa-clock-o"></i> <?php the_time('d/m/Y') ?> &nbsp;
              <span class="post-view">
                <i class="fa fa-eye"></i>
                <?php echo get_post_meta( get_the_ID(), 'wpb_post_views_count', true ); ?> lượt xem</span>

            <?php
            $video = get_post_meta($post->ID, 'fullby_video', true );

            if($video != '') { ?>

                    <i class="fa fa-video-camera"></i> Video

                  <?php } else if (strpos($post->post_content,'[gallery') !== false) { ?>

                    <i class="fa fa-th"></i> Gallery

                  <?php } else {?>

                  <?php } ?>

            </div>

          </a>

      <?php endwhile; ?>

      <?php wp_reset_query(); ?>

    </div>
    <!-- end lastest posts -->

    <!-- begin most view -->
    <div class="tab-pane fade" id="top-views">

      <?php
      $top_views_query = array(
                        'posts_per_page' => $posts_per_page,
                        'meta_key' => 'wpb_post_views_count',
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC'
                      );
      $popularpost = new WP_Query( $top_views_query );
      while ( $popularpost->have_posts() ) : $popularpost->the_post();?>

        <a href="<?php the_permalink(); ?>">

          <?php $video = get_post_meta($post->ID, 'fullby_video', true );

          if($video != '') {?>

            <img src="http://img.youtube.com/vi/<?php echo $video ?>/1.jpg" class="grid-cop"/>

          <?php

                } else if ( has_post_thumbnail() ) { ?>

                        <?php the_post_thumbnail('thumbnail', array('class' => 'thumbnail')); ?>

                    <?php } ?>

            <h2 class="title"><?php the_title(); ?></h2>

            <div class="date"><i class="fa fa-clock-o"></i> <?php the_time('d/m/Y') ?> &nbsp;
              <span class="post-view">
                <i class="fa fa-eye"></i>
                <?php echo get_post_meta( get_the_ID(), 'wpb_post_views_count', true ); ?> lượt xem</span>

            <?php
            $video = get_post_meta($post->ID, 'fullby_video', true );

            if($video != '') { ?>

                    <i class="fa fa-video-camera"></i> Video

                  <?php } else if (strpos($post->post_content,'[gallery') !== false) { ?>

                    <i class="fa fa-th"></i> Gallery

                  <?php } else {?>

                  <?php } ?>

            </div>

          </a>

      <?php endwhile; ?>

      <?php wp_reset_query(); ?>

    </div>
    <!-- end most view -->

  </div>

</div>
