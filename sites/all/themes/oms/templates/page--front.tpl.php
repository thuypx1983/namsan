<div id="wrap">    <?php    include(drupal_get_path('theme', 'oms').'/templates/header.tpl.php');    ?>  <?php if ($page['home_banner']): ?>      <div id="home-banner"> <?php print render($page['home_banner']); ?></div>  <?php endif; ?>    <div class="home-highlights" class="clearfix">        <?php if ($page['home_high']): ?>            <div class="home-highlight-box">                <div class="container home-highlight-box1"><?php print render($page['home_high']); ?></div>            </div>        <?php endif; ?>    </div>    <div class="home-highlights" class="clearfix">        <?php if ($page['home_high0']): ?>            <div class="home-highlight-box">                <div class="container home-highlight-box1"><?php print render($page['home_high0']); ?></div>            </div>        <?php endif; ?>    </div>    <div class="home-highlights" class="clearfix">      <?php if ($page['home_high1']): ?>          <div class="home-highlight-box">              <div class="container home-highlight-box1"><?php print render($page['home_high1']); ?></div>          </div>      <?php endif; ?>      <?php if ($page['home_high2']): ?>          <div class="home-highlight-box">              <div class="container home-highlight-box2">                  <div class="row">                    <?php print render($page['home_high2']); ?>                  </div>              </div>          </div>      <?php endif; ?>    </div>  <?php  include(drupal_get_path('theme', 'oms').'/templates/footer.tpl.php');  ?></div>