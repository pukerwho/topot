<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="pt-40 pb-20">
		<div class="container mx-auto" itemscope itemtype="http://schema.org/Article">
			<article class="content">
				<h1 class="w-full lg:w-4/5 text-3xl lg:text-5xl text-center font-bold mb-6 mx-auto" itemprop="headline"><?php the_title(); ?></h1>
				<div class="w-full lg:w-4/5 page bg-light shadow-md rounded-lg my-0 mx-auto lg:my-8 px-4 lg:px-8 py-8 lg:py-10">
					<div itemprop="articleBody">
						<?php the_content(); ?>	
					</div>
				</div>
			</article>
		</div> 
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>