</main>
<footer class="gnh-footer">
  <div class="gnh-inner">
    <div>
      <h4><?php echo site_config_escaped('site_name'); ?></h4>
      <p><?php echo htmlspecialchars(site_config('site_tagline'), ENT_QUOTES, 'UTF-8'); ?></p>
      <address style="font-style:normal;line-height:1.7;">
        <?php echo htmlspecialchars(site_address('<br>'), ENT_QUOTES, 'UTF-8'); ?><br>
        Tel: <?php echo site_config_escaped('phone'); ?><br>
        <?php echo site_email_link('email'); ?><br>
        <?php echo htmlspecialchars(site_config('business_hours'), ENT_QUOTES, 'UTF-8'); ?>
      </address>
    </div>
    <div>
      <h4>Explore</h4>
      <ul>
        <li><a href="<?php echo $__home; ?>index.php">Home</a></li>
        <li><a href="<?php echo $__home; ?>portfolio.php">Portfolio Collections</a></li>
        <li><a href="<?php echo $__home; ?>category/all-products.php">All Products</a></li>
        <li><a href="<?php echo $__home; ?>book-online.php">Book Online</a></li>
      </ul>
    </div>
    <div>
      <h4>Collections</h4>
      <ul>
        <li><a href="<?php echo $__home; ?>category/gold-jewelry.php">Gold Jewelry</a></li>
        <li><a href="<?php echo $__home; ?>category/gemstone-jewelry.php">Gemstone Jewelry</a></li>
        <li><a href="<?php echo $__home; ?>category/antique-treasures.php">Antique Treasures</a></li>
        <li><a href="<?php echo $__home; ?>product-page/amethyst-statement-ring.php">Amethyst Statement Ring</a></li>
      </ul>
    </div>
    <div>
      <h4>Connect</h4>
      <ul>
        <li><a href="<?php echo site_config_escaped('facebook'); ?>" target="_blank" rel="noopener">Facebook</a></li>
        <li><a href="<?php echo site_config_escaped('instagram'); ?>" target="_blank" rel="noopener">Instagram</a></li>
        <li><a href="<?php echo site_config_escaped('pinterest'); ?>" target="_blank" rel="noopener">Pinterest</a></li>
        <li><a href="<?php echo site_config_escaped('youtube'); ?>" target="_blank" rel="noopener">YouTube</a></li>
        <li><a href="mailto:<?php echo site_config_escaped('support_email'); ?>">Support</a></li>
      </ul>
    </div>
  </div>
  <div class="gnh-copy">
    &copy; <?php echo site_config_escaped('copyright_year'); ?> <?php echo site_config_escaped('company_name'); ?>.
    All rights reserved. &nbsp;|&nbsp;
    <a href="<?php echo site_url(site_config('privacy_policy')); ?>">Privacy Policy</a> &nbsp;|&nbsp;
    <a href="<?php echo site_url(site_config('terms_of_service')); ?>">Terms of Service</a>
  </div>
</footer>
<?php if (!empty($GLOBALS['page_scripts'])) : ?>
<?php foreach ($GLOBALS['page_scripts'] as $__s) : ?>
<script src="<?php echo htmlspecialchars($__s, ENT_QUOTES, 'UTF-8'); ?>"></script>
<?php endforeach; ?>
<?php endif; ?>
</body>
</html>
