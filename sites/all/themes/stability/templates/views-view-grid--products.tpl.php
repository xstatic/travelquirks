<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
// Match Column numbers to Bootsrap class
$columns_classes = array(3 => 4, 4 => 3, 2 => 6, 6 => 2);
$bootsrap_class = isset($columns_classes[$view->style_plugin->options['columns']]) ? $columns_classes[$view->style_plugin->options['columns']] : 3;
?>
<?php foreach ($rows as $row_number => $columns): ?>
  <ul class = "products row">
    <?php foreach ($columns as $column_number => $item): ?>
      <li class = "col-sm-<?php print $bootsrap_class; ?> col-md-<?php print $bootsrap_class; ?>  product project-item">
        <?php print $item; ?>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endforeach; ?>
