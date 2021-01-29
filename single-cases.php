<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="pt-32 pb-20">
		<div class="container mx-auto">
			<!-- Хлебные крошки -->
			<div class="breadcrumbs mb-4" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
		    <ul class="flex justify-center uppercase">
					<li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>
						<a itemprop="item" href="<?php echo home_url(); ?>" class="red-color hover:text-white">
							<span itemprop="name"><?php _e( 'Главная', 'topot' ); ?></span>
						</a>                        
						<meta itemprop="position" content="1">
					</li>
					<span class="mx-1">—</span>
		      <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>
		        <a itemprop="item" href="<?php echo get_post_type_archive_link( 'cases' ); ?>" class="red-color hover:text-white">
		          <span itemprop="name"><?php _e( 'Кейсы', 'topot' ); ?></span>
		        </a>                        
		        <meta itemprop="position" content="2">
		      </li>
		    </ul>
		  </div>
			<!-- END Хлебные крошки -->
			<h1 class="text-3xl lg:text-5xl text-center font-bold mb-8"><?php the_title(); ?></h1>
			<!-- Вступительный текст -->
			<div class="w-full lg:w-4/5 text-white text-2xl opacity-75 mx-auto mb-8">
				<?php echo carbon_get_the_post_meta('crb_cases_description'); ?>
			</div>
			<!-- END Вступительный текст -->
			<div class="w-full lg:w-4/5 page bg-light shadow-md rounded-lg my-0 mx-auto lg:my-8 px-4 lg:px-8 pt-8 lg:pt-10">
				<article class="content">
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>