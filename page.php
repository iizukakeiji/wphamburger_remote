<?php get_header(); ?>

  <main class="l-main c-gridlayout__main__index"><!-- メインは頁ごとに変わる --><!-- ここからpageの main -->
    <article class="l-contents__page c-contents__page">
      <div class="c-contents__block__page">
        <h2 class="c-contents__h2__page"><?php the_title(); ?></h2>
      </div>
    </article>

  <div>
  <?php
    $page_id = get_page_by_path('http://wphamburger.local/page/ショップについて');  //スラッグ名
    $page = get_post( $page_id );
//    echo $page -> ID;     //IDを取得
//    echo $page -> post_title;    //タイトルを取得
    echo $page -> post_content;  //本文を取得
  ?>
  </div>


  </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

