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
$wp_customize->add_setting('erreur_titre', array(
  'default' => __('', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_setting('erreur_desc', array(
  'default' => __('', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_setting('hero_grandeur_carrousel', array(
  'default' => __('', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));



////////////////////////////////////// ajout du control de la donne
$wp_customize->add_control('hero_auteur', array(
  'label' => __('Auteur', 'theme_4w4'),
  'section' => 'hero_section',
  'type' => 'text',
));
$wp_customize->add_control('erreur_titre', array(
  'label' => __('titre 404', 'theme_4w4'),
  'section' => 'hero_section',
  'type' => 'text',
));
$wp_customize->add_control('erreur_desc', array(
  'label' => __('desc 404', 'theme_4w4'),
  'section' => 'hero_section',
  'type' => 'text',
));

$wp_customize->add_control('hero_grandeur_carrousel', array(
  'label' => __('Nombre image', 'theme_4w4'),
  'section' => 'hero_section',
  'type' => 'number',
));

////////////////////////background
// $wp_customize->add_setting('hero_background', array(
//   'default' => '',
//   'sanitize_callback' => 'esc_url_raw',
// ));
// $wp_customize->add_setting('hero_background2', array(
//   'default' => '',
//   'sanitize_callback' => 'esc_url_raw',
// ));
// $wp_customize->add_setting('hero_background3', array(
//   'default' => '',
//   'sanitize_callback' => 'esc_url_raw',
// ));
$wp_customize->add_setting('hero_erreur', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
//   'label' => __('Image arriere plan', 'theme_4w4'),
//   'section' => 'hero_section',
// )));
// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background2', array(
//   'label' => __('Image arriere plan', 'theme_4w4'),
//   'section' => 'hero_section',
// )));
// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background3', array(
//   'label' => __('Image arriere plan', 'theme_4w4'),
//   'section' => 'hero_section',
// )));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_erreur', array(
  'label' => __('Image erreur', 'theme_4w4'),
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
  
// création des images auto
$hero_grandeur_carrousel = get_theme_mod('hero_grandeur_carrousel', 1);
for ($index = 1; $index <= $hero_grandeur_carrousel; $index++) {
  $image_id = "hero_background_$index";

  $wp_customize->add_setting($image_id, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $image_id, array(
      'label' => sprintf(__('Image arrière-plan', 'theme_4w4'), $index),
      'section' => 'hero_section',
  )));

}
}



add_action('customize_register', 'theme_4w4_customize_register');
; ?>