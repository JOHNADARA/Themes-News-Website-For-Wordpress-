<?php get_header(); ?>

<div id="main-content" class="container">
    <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-meta">
                    Posted on <?php the_date(); ?> by <?php the_author(); ?>
                </div>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p>No news articles found.</p>
        <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>