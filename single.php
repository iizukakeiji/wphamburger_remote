<?php get_header(); ?>

  <main class="l-main c-gridlayout__main__index"><!-- メインは頁ごとに変わる --><!-- ここからsingleの main -->
<!--    <article class="l-contents__single c-contents__single">  -->
<!-- アイキャッチの背景設定 -->
    <?php if(has_post_thumbnail()): ?>
      <article class="l-contents__single c-contents__single" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
    <?php else: ?>
      <article class="l-contents__single c-contents__single" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/cheezburger_fot_pcheader.jpg)">
    <?php endif; ?>

      <div class="c-contents__block__single">
        <h2 class="c-contents__h2__single"><?php the_title(); ?></h2>
      </div>
    </article>
    
    <article class="p-paragraph__single">
      <?php if(have_posts()): while(have_posts()): the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </article>
    
  <!-- 最上段の写真 -->
  <!-- １段目 -->
  <!-- ２段目 -->
  <!-- 最下段 -->
  <!-- チーズバーガー写真９つ -->
  <!-- リストリストのところ -->
 
  <!-- htmlなどを表示するところ -->
  <!--  <section class="c-alphavetview__single">
      <pre>
      <code>
                &lt;html&gt;
                        &lt;head&gt;
                        &lt;/head&gt;
                        &lt;body&gt;
                        &lt;/body&gt;
                &lt;/html&gt;
      </code>
      </pre>
    </section>  -->

  <!-- ここからテーブル -->
    
  <!-- 最下部のボタン -->
<!--  <div class="c-btn__single">
      <button>ボタン</button>
    </div>  -->
    
  <!-- bold のところ -->
<!--  <div class="c-boldtext">boldboldboldboldbold</div>  -->

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

