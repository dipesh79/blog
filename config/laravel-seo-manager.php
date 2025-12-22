<?php

return [
    /**
     * Enable or Disable SEO Manager Dashboard.
     */
    'show_dashboard' => false,
    /**
     * Middleware for SEO Manager Route.
     */
    'middleware' => ['web', 'auth'],

    /**
     * Redirect URL from SEO Manager Dashboard.
     */
    'redirect_url' => '/admin',

    /**
     * Default Pagination Limit for SEO Manager.
     */
    'pagination_limit' => 10,

    /**
     * Default title for the application.
     *
     * The title will be used as the title of the page.
     */
    'title' => 'Blog CMS - Effortless Blog Management with SEO & Control',

    /**
     * Default meta-description for the application.
     *
     * The description will be used as the meta description of the page.
     */
    'description' => 'Blog CMS is a fully-featured content management system built on Laravel for fast, SEO-ready, and high-performance blog creation and management.',

    /**
     * Default meta-keywords for the application.
     *
     * The keywords will be used as the meta-keywords of the page.
     */
    'keywords' => 'Blog CMS, Laravel CMS, Blog platform, SEO ready, Content Management, full control, web development',

    /**
     * Default meta-robots for the application.
     *
     * Available options: index, noindex, follow, nofollow.
     */
    'robots' => 'index, follow',
];
