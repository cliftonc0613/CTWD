<?php
/* Template Name: Projects */


get_header(); 

query_posts('post_type=portfolio&posts_per_page=9');


?>

<div class="row">
	<div class="twelve columns group">
		<h1>Portfolio</h1>
	</div>

	<div class="twelve columns">
			<div class="group">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php
		$title= str_ireplace('"', '', trim(get_the_title()));
		$desc= str_ireplace('"', '', trim(get_the_content()));
	?>	

				<div class="item">
							<div class="img"><a title="<?=$title?>: <?=$desc?>" rel="lightbox[work]" href="<?php print  portfolio_thumbnail_url($post->ID) ?>"><?php the_post_thumbnail(); ?></a></div>
							<p><strong><?=$title?>:</strong> <?php print get_the_excerpt(); ?> <!--<a title="<?=$title?>: <?=$desc?>" rel="lightbox[work]" href="<?php print  portfolio_thumbnail_url($post->ID) ?>">(more)</a>--></p>
							<?php $site= get_post_custom_values('projLink'); 
								if($site[0] != ""){
							
							?>
								<p><a target="_blank" href="<?=$site[0]?>">Visit the Site</a></p>
								
							<?php }else{ ?>
								<p><em>Live Link Unavailable</em></p>
							<?php } ?>
				</div>

		
<?php endwhile; endif; ?>

			</div>
	</div>
</div>

<?php get_footer(); ?>