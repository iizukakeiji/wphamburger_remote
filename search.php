<?php get_header(); ?>

  <main class="l-main c-gridlayout__main__index"><!-- メインは頁ごとに変わる -->
    <article class="l-contents__archive c-contents__archive"><!--ここから archive のmain 部分-->>
      <div class="c-contents__block__archive">
        <h2 class="c-contents__h2__archive">Menu:</h2>
        <P><?php echo get_search_query(); ?></P>
      </div>
    </article>

<!-- 検索結果の表示 -->
<div class="wp-search__list">  
    <?php if (have_posts()): ?>
    <ul>
      <?php while(have_posts()): the_post(); ?>
      <li>
  </div>
      <section class="p-burgerlist__archive">
            <?php the_post_thumbnail(''); ?>
          <div class="p-burgerlist__text__archive">
            <h4><?php the_title(); ?></h4>
            <h5><?php the_excerpt(); ?></h5>
            <button type="submit" class="c-btn__archive"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
          </div>  
        </section>
      </li>
      <?php endwhile; ?>
    </ul>


    <?php else: ?>
      <div class="wp-search__nolist">キーワードにマッチする記事はありませんでした</div?
    <?php endif; ?>

    <!-- 検索結果の表示 -->
    <!-- ページネーション -->
    <div class="p-pagenation">
      <div  class="p-pagenation__wplist">
        <?php wp_pagenavi(); ?>
      </div> 
    </div>

  </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
