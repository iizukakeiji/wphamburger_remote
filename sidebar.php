<article class="p-sidebar c-sidebar__gridlayout"><!-- 全頁共通のサイドバー -->
  <div class="c-sidebar__icon"><span class="c-sidebar__icon__1"></span><span class="c-sidebar__icon__2"></span></div>
  <div class="p-sidebar__category">

  <?php wp_nav_menu( array(
   'theme_location'=>'cateogrymenu', 
            'container'     =>'', 
            'menu_class'    =>'',
            'items_wrap' => '%3$s',//<ul>を出力しない
          ));
    ?>

  </div>
</article>
