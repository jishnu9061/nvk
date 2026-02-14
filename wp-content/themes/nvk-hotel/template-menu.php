<?php

/**
 * Template Name: Menu
 */
get_header(); ?>

<section class="menu-hero">
    <div class="menu-hero-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/shared/1000150051.jpg');"></div>
    <div class="container relative z-10">
        <div class="menu-hero-content">
            <span class="subtitle">Culinary Excellence</span>
            <h1>The Grand Menu</h1>
            <p>A journey through the authentic flavors of Malabar, crafted with passion and tradition.</p>
        </div>
    </div>
</section>

<main class="page-content dark-theme-page">
    <!-- Signature Specials -->
    <section class="signature-specials py-0">
        <div class="container">
            <div class="section-title text-center mb-60">
                <span class="text-secondary">Chef's Recommendations</span>
                <h2 class="text-white">Our Signature Masterpieces</h2>
            </div>

            <div class="signature-grid">
                <div class="signature-card" data-aos="fade-up">
                    <div class="signature-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/biriyani_gold.png" alt="Malabar Biriyani">
                    </div>
                    <div class="signature-info">
                        <h3>Malabar Dum Biriyani</h3>
                        <p>Authentic Kaima rice layered with tender meat and 18 secret spices.</p>
                        <span class="sig-price">₹220 onwards</span>
                    </div>
                </div>

                <div class="signature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="signature-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/beef_porotta_gold.png" alt="Beef Roast & Porotta">
                    </div>
                    <div class="signature-info">
                        <h3>Beef Roast & Porotta</h3>
                        <p>Slow-cooked spicy beef cubes served with flaky, layered Kerala flatbread.</p>
                        <span class="sig-price">₹280</span>
                    </div>
                </div>

                <div class="signature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="signature-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/seafood_gold.png" alt="Seafood Platter">
                    </div>
                    <div class="signature-info">
                        <h3>Karimeen Pollichathu</h3>
                        <p>Pearl Spot fish marinated in hand-ground masalas and grilled in banana leaf.</p>
                        <span class="sig-price">Seasonal</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Menu Categories Navigation (Sticky) -->
        <div class="menu-nav-tabs">
            <a href="#signature" class="active">Signature</a>
            <a href="#coastal">Coastal</a>
            <a href="#breads">Breads</a>
            <a href="#refreshments">Refreshments</a>
            <a href="#desserts">Desserts</a>
        </div>

        <div id="signature" class="menu-category-section">
            <div class="category-header">
                <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/biriyani_gold.png" alt=""></div>
                <div class="cat-title">
                    <h3>Signature Mains</h3>
                    <p>Traditional slow-cooked delicacies</p>
                </div>
            </div>
            <div class="menu-items-list">
                <div class="menu-row">
                    <div class="menu-col">
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Malabar Dum Biriyani (Chicken) <span class="badge-sig">Bestseller</span></h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹220</span>
                            </div>
                            <p class="item-desc">fragrant kaima rice cooked with tender chicken and secret spices</p>
                        </div>
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Mutton Dum Biriyani</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹340</span>
                            </div>
                            <p class="item-desc">succulent mutton pieces slow-cooked in traditional dum style</p>
                        </div>
                    </div>
                    <div class="menu-col">
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Fish Biriyani (King Fish)</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹380</span>
                            </div>
                            <p class="item-desc">fresh catch of the day layered with aromatic rice</p>
                        </div>
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Ghee Rice & Beef Roast <span class="badge-sig">Must Try</span></h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹280</span>
                            </div>
                            <p class="item-desc">classic combination of nei choru and spicy kerala beef roast</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="coastal" class="menu-category-section">
            <div class="category-header">
                <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/seafood_gold.png" alt=""></div>
                <div class="cat-title">
                    <h3>From The Coast</h3>
                    <p>Fresh catch from the Arabian Sea</p>
                </div>
            </div>
            <div class="menu-items-list">
                <div class="menu-row">
                    <div class="menu-col">
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Karimeen Pollichathu <span class="badge-sig">Chef's Choice</span></h4>
                                <span class="item-dots"></span>
                                <span class="item-price">Seasonal</span>
                            </div>
                            <p class="item-desc">pearl spot fish marinated and grilled in banana leaf</p>
                        </div>
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Chemmeen (Prawns) Roast</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹350</span>
                            </div>
                            <p class="item-desc">prawns tossed in spicy onion-tomato masala and coconut slivers</p>
                        </div>
                    </div>
                    <div class="menu-col">
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Squid Fry (Koonthal)</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹290</span>
                            </div>
                            <p class="item-desc">crispy rings of squid marinated in kerala spices</p>
                        </div>
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Fish Molee</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹320</span>
                            </div>
                            <p class="item-desc">mildly spiced fish stew cooked in rich coconut milk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="breads" class="menu-category-section">
            <div class="category-header">
                <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/beef_porotta_gold.png" alt=""></div>
                <div class="cat-title">
                    <h3>Breads & Accompaniments</h3>
                    <p>The perfect side for every curry</p>
                </div>
            </div>
            <div class="menu-items-list">
                <div class="menu-row">
                    <div class="menu-col">
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Kerala Porotta</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹20</span>
                            </div>
                            <p class="item-desc">flaky, layered flatbread</p>
                        </div>
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Nice Pathiri</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹15</span>
                            </div>
                            <p class="item-desc">thin rice flour flatbread</p>
                        </div>
                    </div>
                    <div class="menu-col">
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Appam</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹20</span>
                            </div>
                            <p class="item-desc">fermented rice pancake with soft center and crispy edges</p>
                        </div>
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Idiyappam</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹25</span>
                            </div>
                            <p class="item-desc">steamed rice noodles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="refreshments" class="menu-category-section">
            <div class="category-header">
                <div class="cat-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/drink_gold.png" alt=""></div>
                <div class="cat-title">
                    <h3>Refreshments</h3>
                    <p>Cool down with traditional drinks</p>
                </div>
            </div>
            <div class="menu-items-list">
                <div class="menu-row">
                    <div class="menu-col">
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Sulaimani</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹25</span>
                            </div>
                            <p class="item-desc">malabar spiced black tea with lemon</p>
                        </div>
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Fresh Lime Soda</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹40</span>
                            </div>
                            <p class="item-desc">sweet or salt, refreshing fizz</p>
                        </div>
                    </div>
                    <div class="menu-col">
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Kulukki Sarbath</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹60</span>
                            </div>
                            <p class="item-desc">shaken lemonade with basil seeds and green chili</p>
                        </div>
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Mango Lassi</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹90</span>
                            </div>
                            <p class="item-desc">thick yogurt blended with fresh mango pulp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NEW: Desserts Section -->
        <div id="desserts" class="menu-category-section">
            <div class="category-header">
                <div class="cat-icon"><span style="font-size: 2.5rem;">🍨</span></div>
                <div class="cat-title">
                    <h3>Desserts</h3>
                    <p>Sweet endings to your meal</p>
                </div>
            </div>
            <div class="menu-items-list">
                <div class="menu-row">
                    <div class="menu-col">
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Falooda (Royal)</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹180</span>
                            </div>
                            <p class="item-desc">rich sundae with fruits, nuts, jelly and ice cream</p>
                        </div>
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Carrot Halwa</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹120</span>
                            </div>
                            <p class="item-desc">warm grated carrot pudding with nuts</p>
                        </div>
                    </div>
                    <div class="menu-col">
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Gulab Jamun</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹90</span>
                            </div>
                            <p class="item-desc">soft milk dumplings in sugar syrup</p>
                        </div>
                        <div class="menu-item-v2">
                            <div class="menu-item-main">
                                <h4 class="item-name">Fruit Salad with Ice Cream</h4>
                                <span class="item-dots"></span>
                                <span class="item-price">₹140</span>
                            </div>
                            <p class="item-desc">fresh seasonal fruits topped with vanilla scoop</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-footer-cta" data-aos="fade-up">
            <div class="cta-content">
                <span class="cta-label">Experience The Legacy</span>
                <h3>Ready to Taste Malabar?</h3>
                <p>Book your table today and embark on a culinary journey like no other.</p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Reserve a Table</a>
                    <a href="tel:+91XXXXXXXXXX" class="btn btn-outline" style="color: white; border-color: rgba(255,255,255,0.3);">Call for Delivery</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>