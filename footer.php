<footer>
    <div class="footer-top py-5">
        <div class="container">
        <?php $top_footer = get_field('top_footer', 'option'); ?>
            <?php if(!empty($top_footer)): ?>
            <div class="row f-menu">
                <?php foreach($top_footer as $column): ?>
                <div class="col-12 col-md-3 col-lg-3">
                    <h4 class="f-menu-title"><?php echo $column['heading']; ?></h4>
                    <?php if(!empty($column['list'])): ?>
                    <ul class="footer-menu-list p-0 list-unstyled d-none d-md-block">
                        <?php foreach($column['list'] as $id => $element): ?>
                        <li>
                            <a href="<?php echo $element['list_item']['url']; ?>" class="text-decoration-none"><?php echo $element['list_item']['title']; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
  <div class="footer-bottom py-5">
    <div class="secondary-container">
      <div class="row">
        <div class="col-12 col-md-3">
        <?php $bottom_footer = get_field('bottom_footer', 'option'); ?>
         <?php if(!empty($bottom_footer['user_links'])): ?>
          <ul class="footer-menu-list-light p-0 list-unstyled">
          <?php foreach($bottom_footer['user_links'] as $id => $element): ?>
            <li>
              <a href="<?php echo $element['list_item']['url']; ?>" class="text-decoration-none text-uppercase text-white"><?php echo $element['list_item']['title']; ?></a>
            </li>
             <?php endforeach; ?>
          </ul>
           <?php endif; ?>
        </div>
        <div class="col-12 col-md-3 footer-widgets">
          <h5 class="mb-3 text-white text-uppercase"><?php echo $bottom_footer['footer_menu_1']['heading']; ?></h5>
          <?php if(!empty($bottom_footer['footer_menu'])): ?>
          <ul class="footer-menu-list p-0 list-unstyled">
         <?php foreach($bottom_footer['footer_menu']['footer_menu'] as $id => $element): ?>
            <li>
              <a href="<?php echo $element['menu']['url']; ?>" class="text-decoration-none "><?php echo $element['menu']['title']; ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
         <?php endif; ?>
        </div>
        <div class="col-12 col-md-3 footer-widgets">
        <h5 class="mb-3 text-white text-uppercase"><?php echo $bottom_footer['footer_menu_1']['heading']; ?></h5>
         <?php if(!empty($bottom_footer['footer_menu_1'])): ?>
          <ul class="footer-menu-list p-0 list-unstyled">
          <?php foreach($bottom_footer['footer_menu_1']['footer_menu'] as $id => $element): ?>
            <li>
              <a href="<?php echo $element['menu']['url']; ?>" class="text-decoration-none"><?php echo $element['menu']['title']; ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
        <div class="col-12 col-md-3 footer-widgets">
         <?php if(!empty($bottom_footer['social_icon'])): ?>
          <ul class="footer-menu-list social-icon p-0 list-unstyled d-block">
          <?php foreach($bottom_footer['social_icon']['icon_item'] as $id => $element): ?>
            <li class="d-inline-block"> 
               <a href="<?php echo $element['link']['url']; ?>" class="text-decoration-none" aria-label="Twitter"><i class="<?php echo $element['icon']; ?>"></i>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
           <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="secondary-container border-top-footer">
      <div class="row below-footer pt-3">
        <div class="col-12 col-md-6 mb-2">
          <p><?php echo $bottom_footer['text']; ?></p>
        </div>
        <div class="col-12 col-md-6 mb-2">
         <?php if(!empty($bottom_footer['copyright_menu'])): ?>
          <ul class="below-footer-menu text-left text-md-right">
          <?php foreach($bottom_footer['copyright_menu'] as $id => $element): ?>
            <li class="d-block d-md-inline-block">
              <a href="<?php echo $element['menu_item']['url']; ?>" class="text-decoration-none text-uppercase text-white"><?php echo $element['menu_item']['title']; ?></a>
            </li>
           <?php endforeach; ?>
          </ul>
           <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer();?>
</body>
</html>