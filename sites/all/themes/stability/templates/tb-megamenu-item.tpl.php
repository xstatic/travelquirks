<li class="<?php print $classes;?>">
  <a href="<?php print in_array($item['link']['href'], array('<nolink>')) ? "#" : url($item['link']['href']);?>" class="<?php print implode(" ", $a_classes);?>">
    <?php if(!empty($item_config['xicon'])) : ?>
      <i class="fa <?php print $item_config['xicon'];?>"></i>
    <?php endif;?>    
    <?php print t($item['link']['link_title']);?>
    <?php if(!empty($item_config['caption'])) : ?>
      <span class="caption"><?php print t($item_config['caption']);?></span>
    <?php endif;?>
  </a>
  <?php print $submenu ? $submenu : "";?>
</li>
