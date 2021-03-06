'use strict'

/*******************************************************************************
* dialog-polyfill-a11y-fixes.js - Fixes for the HTML5 dialog polyfill
* 
* Written by Zoltan Hawryluk <zoltan.dulac@gmail.com>
* Part of the Enable accessible component library.
* Version 1.0 released Dec. 28, 2021
*
* More information about this script available at:
* https://www.useragentman.com/enable/dialog.php
* 
* Released under the MIT License.
******************************************************************************/

import accessibility from '../accessibility.module.js';

/**
 * Updates the passed dialog to retain focus and restore it when the dialog is closed. Won't
 * upgrade a dialog more than once. Supports IE11+ and is a no-op otherwise.
 * @param {!HTMLDialogElement} dialog to upgrade
 */

const registerFocusRestoreDialog = (function() {

  if (!window.WeakMap || !window.MutationObserver) {
    return function() {};
  }
  var registered = new WeakMap();

  // store previous focused node centrally
  var previousFocus = null;
  document.addEventListener('focusout', function(ev) {
    previousFocus = ev.target;
  }, true);

  return function registerFocusRestoreDialog(dialog) {
    if (dialog.localName !== 'dialog') {
      throw new Error('Failed to upgrade focus on dialog: The element is not a dialog.');
    }
    if (registered.has(dialog)) { return; }
    registered.set(dialog, null);

    // replace showModal method directly, to save focus
    var realShowModal = dialog.showModal;
    dialog.showModal = function() {
      var savedFocus = document.activeElement;
      if (savedFocus === document || savedFocus === document.body) {
        // some browsers read activeElement as body
        savedFocus = previousFocus;
      }
      registered.set(dialog, savedFocus);
      realShowModal.call(this);
    };

    // watch for 'open' change and clear saved
    var mo = new MutationObserver(function() {
      if (dialog.hasAttribute('open')) {
        accessibility.setKeepFocusInside(dialog, true);
      } else {
        accessibility.setKeepFocusInside(dialog, false);
      }
    });
    mo.observe(dialog, { attributes: true, attributeFilter: ['open'] });

    // on close, try to focus saved, if possible
    dialog.addEventListener('close', function() {
      if (dialog.hasAttribute('open')) {
        return; // in native, this fires the frame later
      }
      var savedFocus = registered.get(dialog);
      if (document.contains(savedFocus)) {
        var wasFocus = document.activeElement;
        savedFocus.focus();
        if (document.activeElement !== savedFocus) {
          wasFocus.focus(); // restore focus, we couldn't focus saved
        }
      }
      savedFocus = null;
      registered.set(dialog, null);
    });

    // FIXME: If a modal dialog is readded to the page (either remove/add or .appendChild), it will
    // be a non-modal. It will still have its 'close' handler called and try to focus on the saved
    // element.
    //
    // These could basically be solved if 'close' yielded whether it was a modal or non-modal
    // being closed. But it doesn't. It could also be solved by a permanent MutationObserver, as is
    // done inside the polyfill.
  }
}());

export default registerFocusRestoreDialog;