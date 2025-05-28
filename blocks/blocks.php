<?php
function register_acf_block_types()
{
  acf_register_block_type(array(
    'name'              => 'separator',
    'title'             => __('separator'),
    'render_template'   => 'blocks/separator/separator.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'separator'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => false,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-separator',  get_template_directory_uri() . '/blocks/separator/separator.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'steps',
    'title'             => __('etapy'),
    'render_template'   => 'blocks/steps/steps.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('etapy', 'steps'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => false,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-steps',  get_template_directory_uri() . '/blocks/steps/steps.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'etapy',
    'title'             => __('etapy - v2'),
    'render_template'   => 'blocks/etapy/etapy.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('etapy', 'etapy'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => false,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-etapy',  get_template_directory_uri() . '/blocks/etapy/etapy.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'info-contact',
    'title'             => __('Info kontakt'),
    'render_template'   => 'blocks/info-contact/info-contact.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('kontakt', 'info-contact'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-info-contact',  get_template_directory_uri() . '/blocks/info-contact/info-contact.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'container',
    'title'             => __('Wązki kontener'),
    'render_template'   => 'blocks/container/container.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'container'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-container',  get_template_directory_uri() . '/blocks/container/container.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'bg',
    'title'             => __('Tło - kontener'),
    'render_template'   => 'blocks/bg/bg.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'bg'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-bg',  get_template_directory_uri() . '/blocks/bg/bg.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'hero',
    'title'             => __('Hero'),
    'render_template'   => 'blocks/hero/hero.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'hero'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    // 'enqueue_assets'    => function () {
    //   wp_enqueue_style('go-hero',  get_template_directory_uri() . '/blocks/hero/hero.min.css');
    //   wp_enqueue_script('go-paroller-init', get_template_directory_uri() . '/src/js/paroller.min.js', array('jquery'), '3', true);
    //   wp_enqueue_script('go-paroller', get_template_directory_uri() . '/blocks/hero/hero.js', array('jquery'), '3', true);
    // }
  ));

  function enqueue_hero()
  {
    wp_enqueue_style('go-hero',  get_template_directory_uri() . '/blocks/hero/hero.min.css');
    wp_enqueue_script('go-paroller-init', get_template_directory_uri() . '/src/js/paroller.min.js', array('jquery'), '3', true);
    wp_enqueue_script('go-paroller', get_template_directory_uri() . '/blocks/hero/hero.js', array('jquery'), '3', true);
  }
  add_action('wp_enqueue_scripts', 'enqueue_hero');
  add_action('admin_enqueue_scripts', 'enqueue_hero');

  acf_register_block_type(array(
    'name'              => 'contact',
    'title'             => __('Kontakt'),
    'render_template'   => 'blocks/contact/contact.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'contact'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-contact',  get_template_directory_uri() . '/blocks/contact/contact.min.css');
    }
  ));

  acf_register_block_type(array(
    'name'              => 'bullets',
    'title'             => __('Bullets'),
    'render_template'   => 'blocks/bullets/bullets.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'bullets'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => false,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-bullets',  get_template_directory_uri() . '/blocks/bullets/bullets.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'section-img',
    'title'             => __('section-img'),
    'render_template'   => 'blocks/section-img/section-img.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Img', 'section-img'),
    'supports'    => [
      'align'      => false,
      'anchor'    => false,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-section-img',  get_template_directory_uri() . '/blocks/section-img/section-img.min.css');
    }
  ));

  acf_register_block_type(array(
    'name'              => 'posts-grid',
    'title'             => __('Posty - grid'),
    'render_template'   => 'blocks/posts-grid/posts-grid.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Aktualności'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-posts-grid',  get_template_directory_uri() . '/blocks/posts-grid/posts-grid.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'faq',
    'title'             => __('Najczęściej zadawane pytania'),
    'render_template'   => 'blocks/faq/faq.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('faq'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-faq',  get_template_directory_uri() . '/blocks/faq/faq.min.css');
      wp_enqueue_script('go-faq-init', get_template_directory_uri() . '/blocks/faq/faq.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'item-download',
    'title'             => __('Downlads'),
    'render_template'   => 'blocks/item-download/item-download.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Dokumenty'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-item-download',  get_template_directory_uri() . '/blocks/item-download/item-download.min.css');
    },
  ));

  acf_register_block_type(array(
    'name'              => 'title',
    'title'             => __('Title'),
    'render_template'   => 'blocks/title/title.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Title'),
    'supports' => array('align' => true),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-title',  get_template_directory_uri() . '/blocks/title/title.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'tw-box',
    'title'             => __('Hero'),
    'render_template'   => 'blocks/two-box/two-box.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('two-box'),
    'supports' => array('align' => true),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-two-box',  get_template_directory_uri() . '/blocks/two-box/two-box.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'button-cus',
    'title'             => __(' Przycisk '),
    'render_template'   => 'blocks/button/button.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('przycisk'),
    'supports' => array('align' => true),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-button',  get_template_directory_uri() . '/blocks/button/button.min.css');
    },
  ));
}
if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'register_acf_block_types');
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point($path)
{
  // Update path
  $path = get_template_directory() . '/blocks/acf-json';
  // Return path
  return $path;
}
