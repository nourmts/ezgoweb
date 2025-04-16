<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'css/open-iconic-bootstrap.min.css' => [
        'path' => 'css/open-iconic-bootstrap.min.css',
        'type' => 'css',
    ],
    'css/animate.css' => [
        'path' => 'css/animate.css',
        'type' => 'css',
    ],
    'css/owl.carousel.min.css' => [
        'path' => 'css/owl.carousel.min.css',
        'type' => 'css',
    ],
    'css/owl.theme.default.min.css' => [
        'path' => 'css/owl.theme.default.min.css',
        'type' => 'css',
    ],
    'css/magnific-popup.css' => [
        'path' => 'css/magnific-popup.css',
        'type' => 'css',
    ],
    'css/aos.css' => [
        'path' => 'css/aos.css',
        'type' => 'css',
    ],
    'css/ionicons.min.css' => [
        'path' => 'css/ionicons.min.css',
        'type' => 'css',
    ],
    'css/bootstrap-datepicker.css' => [
        'path' => 'css/bootstrap-datepicker.css',
        'type' => 'css',
    ],
    'css/jquery.timepicker.css' => [
        'path' => 'css/jquery.timepicker.css',
        'type' => 'css',
    ],
    'css/flaticon.css' => [
        'path' => 'css/flaticon.css',
        'type' => 'css',
    ],
    'css/icomoon.css' => [
        'path' => 'css/icomoon.css',
        'type' => 'css',
    ],
    'css/style.css' => [
        'path' => 'css/style.css',
        'type' => 'css',
    ],
    'js/jquery.min.js' => [
        'path' => 'js/jquery.min.js',
    ],
    'js/jquery-migrate-3.0.1.min.js' => [
        'path' => 'js/jquery-migrate-3.0.1.min.js',
    ],
    'js/popper.min.js' => [
        'path' => 'js/popper.min.js',
    ],
    'js/bootstrap.min.js' => [
        'path' => 'js/bootstrap.min.js',
    ],
    'js/jquery.easing.1.3.js' => [
        'path' => 'js/jquery.easing.1.3.js',
    ],
    'js/jquery.waypoints.min.js' => [
        'path' => 'js/jquery.waypoints.min.js',
    ],
    'js/jquery.stellar.min.js' => [
        'path' => 'js/jquery.stellar.min.js',
    ],
    'js/owl.carousel.min.js' => [
        'path' => 'js/owl.carousel.min.js',
    ],
    'js/jquery.magnific-popup.min.js' => [
        'path' => 'js/jquery.magnific-popup.min.js',
    ],
    'js/aos.js' => [
        'path' => 'js/aos.js',
    ],
    'js/jquery.animateNumber.min.js' => [
        'path' => 'js/jquery.animateNumber.min.js',
    ],
    'js/bootstrap-datepicker.js' => [
        'path' => 'js/bootstrap-datepicker.js',
    ],
    'js/jquery.timepicker.min.js' => [
        'path' => 'js/jquery.timepicker.min.js',
    ],
    'js/scrollax.min.js' => [
        'path' => 'js/scrollax.min.js',
    ],
    'js/google-map.js' => [
        'path' => 'js/google-map.js',
    ],
    'js/main.js' => [
        'path' => 'js/main.js',
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
];
