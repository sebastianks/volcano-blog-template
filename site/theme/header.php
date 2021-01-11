<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My blog &mdash; <?php site_meta('title', true); ?></title>
        <meta name="description" content="<?php site_meta('description', true); ?>">
        <?php get_stylesheets(); ?>
        <?php get_scripts(); ?>
    </head>
    <body class="<?php body_class(); ?>">
        <div class="wrap">
            <div class="header">
                <div class="logo">
                    <a href="/">Volcano</a>
                </div>
                <ul class="navigation">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                </ul>
            </div>
