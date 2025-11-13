<?php

/**
 * SEO Enhancements for Eline Jewelry Website
 */

// Add custom meta tags to WordPress head
function eline_add_custom_meta_tags() {
    // Language and region
    echo '<meta name="language" content="Dutch">' . "\n";
    echo '<meta name="geo.region" content="NL">' . "\n";
    echo '<meta name="geo.placename" content="Amsterdam">' . "\n";
    
    // Business info
    echo '<meta name="classification" content="Jewelry Store">' . "\n";
    echo '<meta name="category" content="Luxury Jewelry, Lab-Grown Diamonds">' . "\n";
    
    // Additional SEO tags
    echo '<meta name="theme-color" content="#000000">' . "\n";
    echo '<meta name="msapplication-navbutton-color" content="#000000">' . "\n";
    echo '<meta name="apple-mobile-web-app-status-bar-style" content="black">' . "\n";
}
add_action('wp_head', 'eline_add_custom_meta_tags');

// Add structured data for jewelry products
function eline_add_product_schema() {
    if (is_front_page() || is_product()) {
        ?>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebSite",
                    "@id": "<?php echo home_url(); ?>/#website",
                    "url": "<?php echo home_url(); ?>",
                    "name": "Eline Sieraden",
                    "description": "Luxe handgemaakte sierraden met lab-grown diamanten. Tijdloze designs, ethisch geproduceerd.",
                    "publisher": {
                        "@id": "<?php echo home_url(); ?>/#organization"
                    },
                    "potentialAction": [{
                        "@type": "SearchAction",
                        "target": {
                            "@type": "EntryPoint",
                            "urlTemplate": "<?php echo home_url(); ?>/?s={search_term_string}"
                        },
                        "query-input": "required name=search_term_string"
                    }]
                },
                {
                    "@type": "Organization",
                    "@id": "<?php echo home_url(); ?>/#organization",
                    "name": "Eline Sieraden",
                    "alternateName": "Eline Jewelry",
                    "url": "<?php echo home_url(); ?>",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "<?php echo get_theme_file_uri('resources/images/logo.png'); ?>"
                    },
                    "contactPoint": {
                        "@type": "ContactPoint",
                        "telephone": "+31-20-1234567",
                        "contactType": "customer service",
                        "availableLanguage": ["Dutch", "English"]
                    },
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "Kalverstraat 1",
                        "addressLocality": "Amsterdam",
                        "postalCode": "1012 NX",
                        "addressCountry": "NL"
                    },
                    "sameAs": [
                        "https://www.instagram.com/elinesieraden",
                        "https://www.facebook.com/elinesieraden",
                        "https://www.pinterest.com/elinesieraden"
                    ]
                }
            ]
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'eline_add_product_schema');

// Optimize WordPress title tags
function eline_custom_title($title) {
    if (is_front_page()) {
        return 'Eline Sieraden - Handgemaakte Luxe Sierraden | Lab-Grown Diamanten | Amsterdam';
    }
    return $title;
}
add_filter('wp_title', 'eline_custom_title');

// Add breadcrumbs schema
function eline_breadcrumb_schema() {
    if (!is_front_page()) {
        $breadcrumbs = [];
        $breadcrumbs[] = [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => home_url()
        ];
        
        if (is_category() || is_single()) {
            $breadcrumbs[] = [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => get_the_title(),
                'item' => get_permalink()
            ];
        }
        
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $breadcrumbs
        ];
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
add_action('wp_head', 'eline_breadcrumb_schema');

// Add FAQ schema for jewelry-related questions
function eline_faq_schema() {
    if (is_front_page()) {
        $faq_schema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'Wat zijn lab-grown diamanten?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Lab-grown diamanten zijn identiek aan natuurlijke diamanten maar worden ethisch geproduceerd in een gecontroleerde omgeving. Ze hebben dezelfde chemische, fysieke en optische eigenschappen als natuurlijke diamanten.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Biedt Eline maatwerk sierraden aan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Ja, Eline biedt maatwerk sierraden aan. Elk stuk wordt met zorg handgemaakt voor de perfecte uitdrukking van jouw persoonlijke stijl.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Wat voor garantie geeft Eline op sierraden?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Alle Eline sierraden komen met een kwaliteitsgarantie. We bieden ook reparatieservices en waardering voor verzekeringsdoeleinden.'
                    ]
                ]
            ]
        ];
        
        echo '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
add_action('wp_head', 'eline_faq_schema');

// Optimize images with lazy loading and proper alt tags
function eline_optimize_images($content) {
    // Add lazy loading to images
    $content = str_replace('<img', '<img loading="lazy"', $content);
    return $content;
}
add_filter('the_content', 'eline_optimize_images');

// Add canonical URLs
function eline_add_canonical() {
    if (is_singular()) {
        echo '<link rel="canonical" href="' . get_permalink() . '" />' . "\n";
    } elseif (is_home() || is_front_page()) {
        echo '<link rel="canonical" href="' . home_url() . '" />' . "\n";
    }
}
add_action('wp_head', 'eline_add_canonical');

// Add robots meta tag based on page type
function eline_robots_meta() {
    if (is_admin() || is_search() || is_404()) {
        echo '<meta name="robots" content="noindex, nofollow" />' . "\n";
    } else {
        echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />' . "\n";
    }
}
add_action('wp_head', 'eline_robots_meta');

// Add hreflang for international SEO (if needed)
function eline_add_hreflang() {
    if (is_front_page()) {
        echo '<link rel="alternate" hreflang="nl" href="' . home_url() . '" />' . "\n";
        echo '<link rel="alternate" hreflang="en" href="' . home_url() . '/en/" />' . "\n";
        echo '<link rel="alternate" hreflang="x-default" href="' . home_url() . '" />' . "\n";
    }
}
add_action('wp_head', 'eline_add_hreflang');