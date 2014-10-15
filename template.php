<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function discubre_omega_theme(){
    $items = array();
    $items['user_login'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme','discubre_omega').'/templates',
        'template' => 'user-login',
    );
    return $items;
}

function discubre_omega_form_alter(&$form, &$form_state, $form_id){
    //TODO Custom theme for login form
    if($form_id == 'user_login'){
        $form['name']['#prefix'] = '<div id="discubre-user" class="grid-4 prefix-1 suffix-1 alpha omega">';
        $form['name']['#attributes'] = array(
            'placeholder' => t('Nombre de usuario'),
        );
        $form['name']['#title'] = NULL;
        $form['name']['#suffix'] = '</div>';

        $form['pass']['#prefix'] = '<div id="discubre-pass" class="grid-4 prefix-1 suffix-1 alpha omega">';
        $form['pass']['#title'] = NULL;
        $form['pass']['#suffix'] = '</div>';

        $form['actions']['submit']['#prefix'] = '<div id="discubre-submit" class="grid-4 prefix-1 suffix-1 alpha omega">';;
        $form['actions']['submit']['#suffix'] = '</div>';
        $form['actions']['submit']['#id'] = 'login-submit';
    }
}
