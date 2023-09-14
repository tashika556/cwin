
<?php 
function add_h6_tags_to_li($content) {
    $pattern = '/<li>(.*?)<\/li>/s';
    $replacement = '<li><h6 class="list_auto text-white">$1</h6></li>';
    $modified_content = preg_replace($pattern, $replacement, $content);

    return $modified_content;
}

?>
<?php 
function add_h6listauto_tags_to_li($content) {
    $pattern = '/<li>(.*?)<\/li>/s';
    $replacement = '<li><h6 class="list_auto">$1</h6></li>';
    $modified_content = preg_replace($pattern, $replacement, $content);

    return $modified_content;
}

?>
<?php
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'primary'=>'Top Menu'
    )
    );
?>
<?php
function createteam_posttype(){
    register_post_type('team',
    array(
        'labels'=>array(
            'name'=>'Team',
            'singular_name'=>'team',
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug','team'),
        'supports'=>array('title','editor','thumbnail'),
        'taxonomies'=>array('category'),
        'show_in_rest'=>true,
    )
);
}
add_action('init','createteam_posttype');
?>
<?php
function createthematic_posttype(){
    register_post_type('thematic',
    array(
        'labels'=>array(
            'name'=>'Thematic Area',
            'singular_name'=>'thematic',
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug','thematic'),
        'supports'=>array('title','editor','thumbnail'),
        'taxonomies'=>array('category'),
        'show_in_rest'=>true,
    )
);
}
add_action('init','createthematic_posttype');
?>
<?php
function creatework_posttype(){
    register_post_type('work',
    array(
        'labels'=>array(
            'name'=>'Our Works',
            'singular_name'=>'work',
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug','work'),
        'supports'=>array('title','editor','thumbnail'),
        'taxonomies'=>array('category'),
        'show_in_rest'=>true,
    )
);
}
add_action('init','createpublications_posttype');
?>
<?php
function createpublications_posttype(){
    register_post_type('publications',
    array(
        'labels'=>array(
            'name'=>'Publications',
            'singular_name'=>'publications',
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug','publications'),
        'supports'=>array('title','editor','thumbnail'),
        'taxonomies'=>array('category'),
        'show_in_rest'=>true,
    )
);
}
add_action('init','createpublications_posttype');
?>
<?php
function createannouncements_posttype(){
    register_post_type('announcements',
    array(
        'labels'=>array(
            'name'=>'Announcements',
            'singular_name'=>'announcements',
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug','announcements'),
        'supports'=>array('title','editor','thumbnail'),
        'taxonomies'=>array('category'),
        'show_in_rest'=>true,
    )
);
}
add_action('init','createannouncements_posttype');
?>
<?php
function createevents_posttype(){
    register_post_type('events',
    array(
        'labels'=>array(
            'name'=>'Events',
            'singular_name'=>'events',
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug','events'),
        'supports'=>array('title','editor','thumbnail'),
        'taxonomies'=>array('category'),
        'show_in_rest'=>true,
    )
);
}
add_action('init','createevents_posttype');
?>
<?php
function createprograms_posttype(){
    register_post_type('programs',
    array(
        'labels'=>array(
            'name'=>'Programs',
            'singular_name'=>'programs',
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug','programs'),
        'supports'=>array('title','editor','thumbnail'),
        'taxonomies'=>array('category'),
        'show_in_rest'=>true,
    )
);
}
add_action('init','createprograms_posttype');
?>
<?php
function createnews_posttype(){
    register_post_type('news',
    array(
        'labels'=>array(
            'name'=>'News',
            'singular_name'=>'news',
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug','news'),
        'supports'=>array('title','editor','thumbnail'),
        'taxonomies'=>array('category'),
        'show_in_rest'=>true,
    )
);
}
add_action('init','createnews_posttype');
?>
<?php
function createpressrelease_posttype(){
    register_post_type('pressrelease',
    array(
        'labels'=>array(
            'name'=>'Press Release',
            'singular_name'=>'pressrelease',
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug','pressrelease'),
        'supports'=>array('title','editor','thumbnail'),
        'taxonomies'=>array('category'),
        'show_in_rest'=>true,
    )
);
}
add_action('init','createpressrelease_posttype');
?>
<?php
function createpartners_posttype(){
    register_post_type('partners',
    array(
        'labels'=>array(
            'name'=>'Working Partners',
            'singular_name'=>'partners',
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug','partners'),
        'supports'=>array('title','editor','thumbnail'),
        'taxonomies'=>array('category'),
        'show_in_rest'=>true,
    )
);
}
add_action('init','createpartners_posttype');
?>
