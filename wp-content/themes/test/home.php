<?php get_header(); ?>

<main>
    <!--? Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? Hero Area End-->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : ?>
                                <?php the_post(); ?>
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <?php if (get_the_post_thumbnail_url()) : ?>
                                            <img class="card-img rounded-0" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post_preview'); ?>" alt="<?php esc_attr(get_the_title()); ?>">
                                            <a href="#" class="blog_item_date">
                                                <h3>15</h3>
                                                <p>Jan</p>
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                            <?php the_title('<h2>', '</h2>'); ?>
                                        </a>
                                        <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                            he earth it first without heaven in place seed it second morning saying.</p>
                                        <ul class="blog-info-link">
                                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                        </ul>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php _e('Постов нет...'); ?>
                        <?php endif; ?>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
</main>

<?php
get_footer();
