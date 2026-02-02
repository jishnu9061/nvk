<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Single Post Hero -->
        <section class="single-post-hero" style="<?php if (has_post_thumbnail()) : ?>background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');<?php endif; ?>">
            <div class="container">
                <div class="post-header">
                    <div class="post-category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo esc_html($categories[0]->name);
                        }
                        ?>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <div class="post-meta" style="justify-content: center; color: rgba(255,255,255,0.8);">
                        <span>📅 <?php echo get_the_date(); ?></span>
                        <span>👤 <?php the_author(); ?></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Post Content -->
        <section class="single-post-content">
            <div class="container">
                <article class="post-entry-content">
                    <?php the_content(); ?>
                    
                    <div class="post-footer">
                        <div class="post-tags">
                            <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    echo '<a href="' . get_tag_link($tag->term_id) . '">#' . $tag->name . '</a> ';
                                }
                            }
                            ?>
                        </div>
                        <div class="post-share">
                            <span>Share: </span>
                            <!-- Basic share links could be added here -->
                            <a href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">FB</a>
                            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" target="_blank">TW</a>
                        </div>
                    </div>
                </article>

                <!-- Navigation -->
                <div style="max-width: 800px; margin: 40px auto; display: flex; justify-content: space-between;">
                    <div class="prev-post">
                        <?php previous_post_link('%link', '❮ Previous Post'); ?>
                    </div>
                    <div class="next-post">
                        <?php next_post_link('%link', 'Next Post ❯'); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>

    <!-- Related Section or CTA -->
    <section style="padding: 100px 0; background: var(--base-alt);">
        <div class="container" style="text-align: center;">
            <h2 style="margin-bottom: 20px;">Hungry for more?</h2>
            <p style="margin-bottom: 40px; color: var(--text-muted);">Explore our menu and experience the magic of MVK Heritage Foods.</p>
            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="btn btn-primary">Check Our Menu</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
