<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>　　　</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- テンプレートタグ -->
  <?php wp_head(); ?>
</head>

<body class="c-gridlayout__outside" <?php body_class(); ?>><!-- 全頁共通の外側のグリッドレイアウト -->
  <div class="c-btn__gridlayout">
  <button type="submit" class="c-btn__nav">Menu</button><!-- 共通のボタン -->
</div>
<header class="l-header c-header"><!-- 全頁共通のヘッダー -->
    <div class="c-header__pcdisplay">
      <h1 class="c-logo__h1"><a href="<?php echo home_url('/'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <?php get_search_form(); ?>
<!--      <form class="p-search-form">
        <label class="screen-reader-text">
          <input type="text" class="p-search-form__keyword" placeholder="ここに入力">
        </label>
        <button type="submit" class="p-search-form__submit">検索</button>
      </form>
-->
    </div>
</header>

