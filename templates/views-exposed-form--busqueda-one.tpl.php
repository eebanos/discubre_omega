<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
  <?php
    print $q;
  ?>
<?php endif; ?>
<div class="views-exposed-form-busqueda-one">
  <div class="views-exposed-widgets clearfix">
    <?php foreach ($widgets as $id => $widget): ?>
      <div id="<?php print $widget->id; ?>-wrapper" class="views-exposed-widget views-widget-<?php print $id; ?>">
          <?php if (!empty($widget->label)): ?>
<!--              --><?php /*if (drupal_is_front_page()): */?>
              <label class="grid-12 alpha omega busqueda-label" for="<?php print $widget->id; ?>">
                  <?php print $widget->label; ?>
              </label>
              <?php /*endif; */?>
             <!-- --><?php /*else: */?>
<!--              <label class="grid-6 alpha omega busqueda-label" for="<?php /*print $widget->id; */?>">
                  <?php /*print $widget->label; */?>
              </label>-->
          <?php endif; ?>
        <?php if (!empty($widget->operator)): ?>
          <div class="views-operator">
            <?php print $widget->operator; ?>
          </div>
        <?php endif; ?>
        <div class="grid-6 alpha prefix-2 views-widget">
          <?php print $widget->widget; ?>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="grid-2 omega views-exposed-widget views-submit-button">
      <?php print $button; ?>
    </div>
  </div>
</div>
