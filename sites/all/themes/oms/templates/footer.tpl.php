<footer>  <div id="footer" class="footer">    <div class="container">      <div class="row ">        <?php print render($page['footer_top']) ?>      </div>      <div class="row line">        <div class="col-md-12"><hr></div>      </div>      <div class="row">        <div class="col-md-4 footer-left">          <span class="footer-title"><?php echo t('Đăng ký liên hệ')?></span>          <?php print render($page['footer_left']) ?>        </div>        <div class="col-md-8 footer-right">          <span class="footer-title"><?php echo t('NAMSAN Stone')?></span>          <div class="row">            <?php print render($page['footer_right']) ?>          </div>        </div>      </div>    </div>  </div>  <div id="footer-bottom" class="footer-bottom">    <div class="container">      <?php print render($page['footer_bottom']) ?>    </div>  </div></footer><!--pushy menu--><div class="mobile-menu-container pushy pushy-right"></div><div class="site-overlay"></div><style>  .image-overlay{    display: block;    position: fixed;    height: 100vh;    width: 100vw;    z-index: 99999;    top: 0px;    left: 0px;    cursor: pointer;    background: transparent url('https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat top left  }</style><script type="text/javascript">  (function ($) {    var is_overlay = $.cookie('image-overlay');    if(is_overlay === '0'){      $('.image-overlay').hide();    }    $('.image-overlay').click(function () {      $.cookie('image-overlay','0');      $('.image-overlay').hide();    })  })(jQuery)</script><div class="image-overlay" title="click vao day de xem tiep"></div><!--!pushy menu-->