<?php
/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
  add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
  add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
  add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
  add_theme_support( 'html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
add_action( 'after_setup_theme', 'my_setup' );

/* CSSの読み込み
---------------------------------------------------------- */
function register_stylesheet() { //読み込むCSSを登録する
  wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css', array(), '5.15.3', 'all');
	wp_register_style('scroll', get_template_directory_uri().'/css/scroll-hint.css');
	wp_register_style('reset', get_template_directory_uri().'/css/reset.css');
	wp_register_style('style', get_template_directory_uri().'/css/style.css');
}
function add_stylesheet() { //登録したCSSを以下の順番で読み込む
	register_stylesheet();
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css', array(), '5.15.3', 'all');
	wp_enqueue_style('scroll', '', array(), '1.0', false);
	wp_enqueue_style('reset', '', array(), '1.0', false);
	wp_enqueue_style('style', '', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

/* スクリプトの読み込み
---------------------------------------------------------- */
function register_script(){ //読み込むJSを登録する
	wp_register_script('script', get_template_directory_uri().'/js/script.js');
	wp_register_script('scroll', get_template_directory_uri().'/js/scroll-hint.min.js');
}
function add_script(){ //登録したJSを以下の順番で読み込む
	register_script();
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', '', array(), '1.0', true);
	wp_enqueue_script('scroll', '', array(), '5.7.2', true);
}
add_action('wp_print_scripts','add_script');

/*title tagの出力変更
------------------------------------------------------*/
function correct_title($title){
  if(is_search()){
      $title['title'] = '検索結果：'.get_search_query();
  }elseif(is_404()){
      $title['title'] = 'お探しのページは見つかりません';
  }
  return $title;
}
add_filter('document_title_parts', 'correct_title');

/*titleの仕切りを変更
------------------------------------------------------*/
function change_title_separator($sep){
  $sep = '|';
  return $sep;
}
add_filter('document_title_separator', 'change_title_separator');

// =============================================================================================================================================//
//カテゴリー名の取得を独自関数にて作成
/**
* カテゴリーを1つだけ表示
*
*  $anchor aタグで出力するかどうか.
*  $id 投稿id.
* 
*/

function my_the_post_category( $anchor = true , $id = 0 ) {
  global $post;
  //引数が渡されていなければ投稿IDを見るように指定
  if ( 0 === $id ) {
    $id = $post->ID;
  }

  //カテゴリー取得
  $this_categories = get_the_category( $id );
  if ( $this_categories[0] ) {
    if ( $anchor ) { //引数がtrueならリンク付きで出力
      echo '<a href="' . esc_url( get_category_link( $this_categories[0]->term_id ) ) . '">' . esc_html( $this_categories[0]->cat_name ) . '</a>';
    } else {
      echo esc_html( $this_categories[0]->cat_name );
    }
  }
}

/*文字数の設定
------------------------------------------------------*/
function max_excerpt_length( $string, $maxLength ) {
  $length = mb_strlen($string, 'UTF-8');
  if($length < $maxLength){
    return $string;
  } else {
    $string = mb_substr( $string , 0 , $maxLength, 'utf-8' );
    return $string.'[...]';
  }
}

// =============================================================================================================================================//
// カテゴリータイトルの前のカテゴリー：を消す

/**
* アーカイブタイトル書き換え
*
*  $title 書き換え前のタイトル.
*  $title 書き換え後のタイトル.
*/
function my_archive_title( $title ) {

  if ( is_category() ) { // カテゴリーアーカイブの場合
  $title = single_cat_title( '', false );
  } elseif ( is_tag() ) { // タグアーカイブの場合
  $title = single_tag_title( '', false );
  } elseif ( is_post_type_archive() ) { // 投稿タイプのアーカイブの場合
  $title = post_type_archive_title( '', false );
  } elseif ( is_tax() ) { // タームアーカイブの場合
  $title = single_term_title( '', false );
  } elseif ( is_author() ) { // 作者アーカイブの場合
  $title = get_the_author();
  } elseif ( is_date() ) { // 日付アーカイブの場合
  $title = '';
  if ( get_query_var( 'year' ) ) {
  $title .= get_query_var( 'year' ) . '年';
  }
  if ( get_query_var( 'monthnum' ) ) {
  $title .= get_query_var( 'monthnum' ) . '月';
  }
  if ( get_query_var( 'day' ) ) {
  $title .= get_query_var( 'day' ) . '日';
  }
  }
  return $title;
  };
  add_filter( 'get_the_archive_title', 'my_archive_title' );


?>