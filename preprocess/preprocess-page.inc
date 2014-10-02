<?php

function discubre_omega_alpha_preprocess_html(&$vars){
    drupal_add_css('//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800',array('type' => 'external'));
    drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array('type' => 'external'));
    $path = drupal_get_path('theme', 'discubre_omega');
    drupal_add_js(drupal_get_path('theme', 'discubre_omega') .'/js/placeholdem_min.js', array('type'=>'file', 'scope'=>'footer'));
    if(drupal_is_front_page()){
        drupal_add_css($path . '/css/animations.css');
        drupal_add_js(drupal_get_path('theme', 'discubre_omega') .'/js/isFront.js', array('type'=>'file', 'scope'=>'footer'));
    } else {
        drupal_add_js(drupal_get_path('theme', 'discubre_omega') .'/js/behaviors.js', array('type'=>'file', 'scope'=>'footer'));
    }
}

function discubre_omega_alpha_preprocess_page(&$vars) {
    if (isset($vars['page']['content']['content']['content']['system_main']['default_message'])) {
        unset($vars['page']['content']['content']['content']['system_main']['default_message']);
        drupal_set_title(t(''));
    }
}