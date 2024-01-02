<?php

function fastier_bootstrapping()
{
    load_theme_textdomain("fastier");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "fastier_bootstrapping");
