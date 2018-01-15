/**
 * @file
 * Javascript to support menu_language_filter module.
 */

(function () {

  'use strict';

  Drupal.behaviors.menu_language_filter = {
    attach: function (context, settings) {
      jQuery('#edit-filter').insertBefore('#menu-overview');
    }
  };
})();
