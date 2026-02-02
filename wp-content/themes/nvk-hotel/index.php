<?php get_header(); ?>

<main>
    <section class="blog-hero">
        <div class="container">
            <h1><?php wp_title(''); ?></h1>
        </div>
    </section>

    <div class="blog-main">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (is_singular()) : ?>
                    <article class="post-entry-content">
                        <?php the_content(); ?>
                    </article>
                <?php else : ?>
                    <article class="post-card" style="margin-bottom: 30px;">
                        <div class="post-content">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="post-excerpt"><?php the_excerpt(); ?></div>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>