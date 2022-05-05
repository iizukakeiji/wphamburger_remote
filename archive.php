<?php get_header(); ?>

  <main class="l-main c-gridlayout__main__index"><!-- メインは頁ごとに変わる -->
    <article class="l-contents__archive c-contents__archive"><!--ここから archive のmain 部分-->>
      <div class="c-contents__block__archive">
        <h2 class="c-contents__h2__archive">Menu:</h2>
<P>
        <?php if (in_category(array('hamburger'))) {?>
          <?php $cat = get_the_category(); $cat = $cat[2]; { echo $cat->cat_name; } ?>
        <?php } elseif(in_category(array('side'))){ ?>
          <?php $cat = get_the_category(); $cat = $cat[2]; { echo $cat->cat_name; } ?>
        <?php } elseif(in_category(array('drink'))){ ?>
          <?php $cat = get_the_category(); $cat = $cat[2]; { echo $cat->cat_name; } ?>
        <?php }else{ ?>
          <p>選択されていません</P>
        <?php } ?>
        </P>
      </div>
    </article>
    <section class="c-smallheading__archive">
    <?php echo category_description(); ?><!-- 小見出しが入ります -->
    </section>  

    <?php if (in_category(array('hamburger'))) {?>
      <?php if(have_posts()): while(have_posts()): the_post();?>
    <section class="p-burgerlist__archive">
      <?php the_post_thumbnail(''); ?>
      <div class="p-burgerlist__text__archive">
        <h4><?php the_title(); ?></h4>
        <h5><?php the_excerpt(); ?></h5>
        <button type="submit" class="c-btn__archive"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
      </div>  
    </section>
    <?php endwhile; endif; ?>

    <?php } elseif(in_category(array('drink'))){ ?>
      <?php if(have_posts()): while(have_posts()): the_post();?>
      <section class="p-burgerlist__archive">
      <?php the_post_thumbnail(''); ?>
      <div class="p-burgerlist__text__archive">
        <h4><?php the_title(); ?></h4>
        <h5><?php the_excerpt(); ?></h5>
        <button type="submit" class="c-btn__archive"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
      </div>  
    </section>
    <?php endwhile; endif; ?>

    <?php } elseif(in_category(array('side'))){ ?>
      <?php if(have_posts()): while(have_posts()): the_post();?>
      <section class="p-burgerlist__archive">
      <?php the_post_thumbnail(''); ?>
      <div class="p-burgerlist__text__archive">
        <h4><?php the_title(); ?></h4>
        <h5><?php the_excerpt(); ?></h5>
        <button type="submit" class="c-btn__archive"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
      </div>  
    </section>
    <?php endwhile; endif; ?>

<?php }else{ ?>
<P>投稿がありません。</P>  
<?php } ?>


    <!-- ページネーション -->
    <div class="p-pagenation">
      <div  class="p-pagenation__wplist">
        <?php wp_pagenavi(); ?>
      </div> 
    </div>
  </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
