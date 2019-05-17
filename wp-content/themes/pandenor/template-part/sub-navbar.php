<div class="secondary-nav d-none d-lg-flex justify-content-between">
	<div class="left-side flex-fill"></div>
	<div class="middle"></div>
    <div class="right-side flex-fill position-relative">
        <div class="position-absolute secondary-navbar-subtitle">
            <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <?php the_field('subtitle') ?>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg d-none d-lg-flex secondary-navbar">
	<div class="container">
		<div class="collapse navbar-collapse justify-content-between">
			<ul class="navbar-nav flex-fill justify-content-between mt-2 mt-lg-0 secondary-navbar-title">
				<li class="nav-item">
					<a class="nav-link" href="#">
                        <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                            <?php the_title() ?>
                        <?php endwhile; wp_reset_postdata(); endif; ?>
                    </a>
				</li>
			</ul>
			<div class="d-none d-lg-block" style="width: 480px"></div>
			<ul class="navbar-nav flex-fill justify-content-between mt-2 mt-lg-0 ml-n2 secondary-navbar-subtitle">
				<li class="nav-item">
				</li>
			</ul>
		</div>
	</div>
</nav>