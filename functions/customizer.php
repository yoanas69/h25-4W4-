<?php 
function theme_4w4_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Section Hero', 'theme_4w4'),
    'priority' => 30,
));
////////////////////////////////////// ajout de la donne
$wp_customize->add_setting('hero_auteur', array(
  'default' => __('Yoan assan', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
////////////////////////////////////// ajout du control de la donne
$wp_customize->add_control('hero_auteur', array(
  'label' => __('Auteur', 'theme_4w4'),
  'section' => 'hero_section',
  'type' => 'text',
));
////////////////////////background
$wp_customize->add_setting('hero_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
  'label' => __('Image arriere plan', 'theme_4w4'),
  'section' => 'hero_section',
)));

$wp_customize->add_setting('hero_couleur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
    'label' => __('couleur du texte', 'theme_4w4'),
    'section' => 'hero_section',
  )));
  

}


add_action('customize_register', 'theme_4w4_customize_register');
; ?>