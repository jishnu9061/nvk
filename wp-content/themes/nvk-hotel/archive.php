<?php get_header(); ?>

<main>
    <!-- Archive Hero -->
    <section class="blog-hero">
        <div class="container">
            <h1><?php the_archive_title(); ?></h1>
            <div class="archive-description">
                <?php the_archive_description(); ?>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="blog-main">
        <div class="container">
            <div class="blog-grid">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <div class="post-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/hero.png" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="post-category">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                }
                                ?>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span>📅 <?php echo get_the_date(); ?></span>
                                <span>👤 <?php the_author(); ?></span>
                            </div>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="post-excerpt">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read Full Story</a>
                        </div>
                    </article>
                <?php endwhile;
                else : ?>
                    <p>No posts found in this category.</p>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'prev_text' => '❮',
                    'next_text' => '❯',
                ));
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
