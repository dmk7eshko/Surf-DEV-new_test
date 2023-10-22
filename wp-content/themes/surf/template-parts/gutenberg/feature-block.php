
<div class="swiper-container feature-block">
  <div class="swiper-wrapper">
    <?php
      if( have_rows('slides') ) {
        while( have_rows('slides') ) {
          the_row();

          $title = get_sub_field( 'title' );
          $desc = get_sub_field( 'description' );
          $image = get_sub_field( 'image' );

          ?>
            <div class="swiper-slide">
              <div class="slide-content">
                <h4><?= $title ?></h4>
                <p><?= preg_replace( "/(\n|\r|\n\r|\r\n){1}/", "</p><p>", $desc ) ?></p>
              </div>
              <div class="slide-image">
                <img src="<?= $image['url'] ?>" />
              </div>
            </div>
          <?php
        }
      }
    ?>
  </div>

  <div class="swiper-controls">
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next">Next</div>
  </div>
</div>
