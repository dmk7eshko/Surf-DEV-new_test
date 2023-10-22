<?php 
$parent = get_field('title-and-text-block-1-3'); 

$tab1_title = get_field('tab1-title');
$tab2_title = get_field('tab2-title');
$tab3_title = get_field('tab3-title');
$tab4_title = get_field('tab4-title');

$tab1_content = get_field('tab1-content');
$tab2_content = get_field('tab2-content');
$tab3_content = get_field('tab3-content');
$tab4_content = get_field('tab4-content');
?>
<section class="tabs-section">
 <div class="container">
     <div class="heading">
                <div class="row">
                    <h2 class="heading-title col-12 col-lg-3"><?php echo $parent['title']; ?></h2>
                    <div class="heading-text col-12 col-lg-6 col-lg-offset-1">
                        <?php echo $parent['text']; ?>
                    </div>
                </div>
        </div>
     <div class="tabs-section_wrap">
    <?php if($tab1_title) : ?>
  <input type="radio" name="tabs" id="tab1" checked="checked">
  <label for="tab1"><?php echo $tab1_title; ?></label>
  <div class="tab">
    <?php echo $tab1_content ?>
  </div>
  <?php endif; ?>
  
   <?php if($tab2_title) : ?>
   <input type="radio" name="tabs" id="tab2">
  <label for="tab2"><?php echo $tab2_title; ?></label>
  <div class="tab">
    <?php echo $tab2_content ?>
  </div>
   <?php endif; ?>
  
   <?php if($tab3_title) : ?>
   <input type="radio" name="tabs" id="tab3">
  <label for="tab3"><?php echo $tab3_title; ?></label>
  <div class="tab">
    <?php echo $tab3_content ?>
  </div>
   <?php endif; ?>
  
   <?php if($tab4_title) : ?>
   <input type="radio" name="tabs" id="tab4">
  <label for="tab4"><?php echo $tab4_title; ?></label>
  <div class="tab">
    <?php echo $tab4_content ?>
  </div>
   <?php endif; ?>
   </div>
  </div>
</section>