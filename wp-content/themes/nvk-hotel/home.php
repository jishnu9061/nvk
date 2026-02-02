<?php get_header(); ?>

<main>
    <!-- Blog Hero -->
    <section class="blog-hero">
        <div class="container">
            <h1>Our Stories & Updates</h1>
            <p>Stay updated with the latest news, culinary secrets, and heritage stories from MVK Heritage Foods.</p>
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
                    <p>No posts found.</p>
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

    <!-- CTA Section -->
    <section style="padding: 100px 0; background: var(--dark); text-align: center; color: white;">
        <div class="container">
            <h2 style="color: var(--secondary); margin-bottom: 20px;">Experience Our Hospitality</h2>
            <p style="margin-bottom: 40px; opacity: 0.8;">Book your table today and enjoy the authentic flavors of Malabar.</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Book a Table Now</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
