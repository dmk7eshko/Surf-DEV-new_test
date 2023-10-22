               <section class="related-cases_grid">
                   <?php
				 
				if (have_rows('three_cases_grid')):
				 
				   	while ($i = 3 && have_rows('three_cases_grid') ) : the_row();
						$post_object = get_sub_field('cases_data');
				   		
						if( $post_object ) :
				  
						$post = $post_object;
				    
				   		$case_title = get_field('three_case_title', $post->ID);
				   		$case_bg = get_field('three_case_bg', $post->ID);
				   		$case_logo = get_field('three_case_logo', $post->ID);
				   		$case_award_logo = get_field('three_case_award_logo', $post->ID);
				   		$case_awards = get_field('three_case_awards', $post->ID);
				   		$case_mock = get_field('three_case_mock', $post->ID);
				   		$new_title = get_sub_field('new-title');
				  
						setup_postdata($post);
						
						?>
				  
                   <div class="case-item" style="background-color: <?php echo $case_bg ?>" onclick="window.location='<?php the_permalink($post->ID); ?>';">
					  
                       <div class="case-item_static">
                           <div class="case-item_logo">
							   <?php
									if($case_logo['url']){
										echo '<img src="' . $case_logo['url'] . '" alt="" />'; 
									} else{
							   			echo '<img src="https://surf.dev/staging/wp-content/uploads/2023/04/Vector1.png" alt="" />';
							   }
									?>
						   </div>
						   
                           <?php if (get_row_index() == '1') : ?>
							   <?php if ($new_title) : ?>
							   		<h2 class="case-item_title"><?php echo $new_title; ?></h2>
							   <?php else : ?>
						   			<h2 class="case-item_title"><?php echo $case_title; ?></h2>
							   <?php endif;  ?>

						   
                           <?php else : ?>
								<?php if ($new_title) : ?>
										 <div class="case-item_title"><?php echo $new_title; ?></div>
								   <?php else : ?>
										 <div class="case-item_title"><?php echo $case_title; ?></div>
							   <?php endif;  ?>
                           <?php endif;  ?>
						   
                           <?php if( $case_award_logo ) : ?>
                           <div class="case-item_award">
                               <?php echo '<img src="' . $case_award_logo['url'] . '" alt="" />'; ?>
                           </div>
                           <?php endif; ?>
                       </div>
						
					  	<?php if($case_mock['url']) : ?>
                       		<div class="case-item_image"><?php echo '<img src="' . $case_mock['url'] . '" alt="" />'; ?></div>
						<?php endif; ?>
                   </div>

                   <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                   <?php endif; ?>


                   <?php endwhile; ?>
                   <?php endif; ?>
               </section>

               <!-- End Repeater -->