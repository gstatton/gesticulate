<?php
/**
 * Launch Template Include
 *
 * Contains the shell around the Launch form
 *
 * @package WordPress
 * @subpackage Launch_Effect
 *
 */
?>

	<div id="signup-page-wrapper"> 
		
		<div id="signup-page"> 
			
			<!-- LEARN MORE BUTTON (Premium) -->
			<?php 
			if(lefx_version() == 'premium') {
				if(ler('lefx_pages_enable') != false) { ?>
				<div id="learn-more-tab">
					<a href="<?php le('lefx_pages_learnmoretab_link'); ?>" id="learn-more"><?php le('lefx_pages_learnmoretab_text'); ?> &rsaquo;</a>	
				</div>	
			<?php } 
			}?>	
			
			<div class="clear"></div>
			
			<div id="signup" class="<?php le('container_width'); ?> <?php le('container_position'); ?> <?php if(get_option('lefx_cust_field1')) { echo 'hascf'; } else { echo 'nocf'; } ?>"> 
			
				<div id="signup-content-wrapper">
			
				<!-- LOGO -->
				
				<header>
					<?php if(leimg('bkt_logo', 'bkt_logodisable', 'launchmodule_options')) { ?><img src="<?php echo leimg('bkt_logo', 'bkt_logodisable', 'launchmodule_options'); ?>"/><?php } ?>
					<h1 class="<?php if(leimg('bkt_logo', 'bkt_logodisable', 'launchmodule_options')) { echo 'haslogo'; } else { echo 'nologo'; } ?> <?php if(ler('heading_disable') == false) { echo 'hastextheading'; } else { echo 'notextheading'; }?>">
						<?php if(leimg('bkt_logo','bkt_logodisable', 'launchmodule_options')) { echo '<span></span>'; } le('heading_content'); ?>
					</h1>
				</header>
				
				
				<!-- YOUTUBE / VIMEO EMBED -->
				
				<?php if(ler('video_embed')) { le('video_embed'); } ?>
				
				<!-- PROGRESS INDICATORS (Premium) -->
				<?php if(lefx_version() == 'premium') { include(TEMPLATEPATH . '/premium/progress.php'); } ?>	
					
				<!-- H2 SUBHEADING / P DESCRIPTION (PRESIGNUP) -->
				<div id="signup-body">
					<div id="presignup-content" class="signup-left">
						<?php if(ler('subheading_content')) { ?><h2><?php le('subheading_content'); ?></h2><?php } ?>
						<?php if(ler('description_content')) { ?><p><?php le('description_content'); ?></p><?php } ?>
					</div>
					
					
					<!-- H2 SUBHEADING / P DESCRIPTION (SUCCESS) -->
					<div id="success-content">
						<?php if(ler('subheading_content2')) { ?><h2><?php le('subheading_content2'); ?></h2><?php } ?>
						<?php if(ler('description_content2')) { ?><p><?php le('description_content2'); ?></p><?php } ?>
					</div>		
					
					<!-- FORM -->
					<?php include(TEMPLATEPATH . '/inc/launch-form.php'); ?>
					
					<!-- PRIVACY POLICY MODAL -->
					<div id="privacy-policy" class="jqmWindow">
						<a href="#" class="close">&times;</a>
						<h2><?php le('lefx_privacy_policy_heading'); ?></h2>
						<p><?php le('lefx_privacy_policy'); ?></p>
					</div>
								
				</div><!-- end div -->
				
				<!-- LINK TO BLOG/OTHER WEBSITES -->
					
				<?php include(TEMPLATEPATH . '/inc/launch-footer.php'); ?>
				
				</div> <!-- end #signup-content-wrapper -->
				
			</div> <!-- end #signup -->
	
		</div> <!-- end #signup-page -->
	
	</div> <!-- end #signup-page-wrapper -->