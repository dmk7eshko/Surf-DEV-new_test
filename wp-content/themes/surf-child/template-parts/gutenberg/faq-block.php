<?php $parent = get_field('title-and-text-block-1-3'); ?>
<?php if ($fl = get_field('faq_list')) : ?>

<section class="faq">
    <div class="container">
       <?php if ($parent){ ?>
    <div class="heading">
                <div class="row">
                    <h2 class="heading-title col-12 col-md-3"><?php echo $parent['title']; ?></h2>
                    <div class="heading-text col-12 col-md-6 col-md-offset-1">
                        <?php echo $parent['text']; ?>
                    </div>
                </div>
        </div>
        <?php } ?>
                    <div class="faq-wrap col-md-8 col-sm-12 col-md-offset-4">
                        <?php foreach ($fl as $item) : ?>
                        <div class="faq-tab">
                            <a href="#" class="faq-tab__link">
                                <span><?= $item['question']; ?></span>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28 44L28 12" stroke="#121212" stroke-width="1.5" />
                                    <path d="M41 30.9589L28 44L15 30.9589" stroke="#121212" stroke-width="1.5" />
                                </svg>
                            </a>
                            <div class="faq-tab__panel">
                                <div class="faq-item__content"><?= $item['answer']; ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                
            </div>
</section>
<?php endif; ?>