<?php
/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="b b--<?php print $component_theme; ?><?php if ($component_theme !== 'w'): ?> p-a300<?php endif; ?>">
  <?php if (isset($content['field_component_title'])): ?>
    <div class="sh sh--sm <?php print $section_header_theme; ?> m-b200">
      <?php print render($content['field_component_title']); ?>
    </div>
  <?php endif; ?>
  <?php if (isset($content['field_description'])): ?>
    <div class="t--info m-b300"><?php print render($content['field_description']); ?></div>
  <?php endif; ?>
  <?php if (isset($content['field_newsletter'])): ?>
    <?php $newsletter_id = $content['field_newsletter']['#items'][0]['entity']->field_id['und'][0]['value']; ?>
    <!-- Start Upaknee -->
    <div id='form_<?php print render($newsletter_id); ?>'></div><script>
      window.__ugv = ( typeof window.__ugv != 'undefined' && window.__ugv instanceof Array ) ? window.__ugv : [];
      var def = {
        i: '<?php print render($newsletter_id); ?>',
        s: 'https://widgets.upaknee.com/',
        f: 'forms/api/',
        c: 485644,
        l: 4173778,
        t: 'd',
        a: 0,
        d: ['form_<?php print render($newsletter_id); ?>']
      };
      window.__ugv.push(def);
    </script>
    <script>
      (function () {
        var w = window;
        var d = document;
        function l() {
          var s = d.createElement('script');
          s.type = 'text/javascript';
          s.async = true;
          s.src = def['s']+def['f']+'upakneeForm.js';
          var x = d.getElementsByTagName('script')[0];
          x.parentNode.insertBefore(s, x);
        }
        if (w.attachEvent) {
          w.attachEvent('onload', l);
          } else {
            w.addEventListener('load', l, false);
          }
      })()
    </script>
    <!-- End Upaknee -->
  <?php endif; ?>
</div>
