/*global jQuery*/

jQuery(function ($) {
  "use strict";

  let domain = window.location.hostname;
  console.log("%cJS Initialization", "color:#ffffff; font-weight:bold; font-size: 1.4em", " " + domain);
  console.log("%cinit.js", "color:#00ff00", "-> Loaded");

  /* Fancy background toggle */
  $('.button.activate-fancy-bg').click(function () {
    let target = $('body');
    target.toggleClass('fancy-bg-active');
    $(this).toggleClass('active');
  });

  /* Footer */
  let currentYear = (new Date).getFullYear();
  $('#copyright.current-year').text(currentYear);

  let
    i,
    value,
    input_length,
    max,
    min,
    width,
    prefix;

  $('.submit').click(function () {
    input_length = $("#length");

    max = parseInt(input_length.attr('max'), 10);
    min = parseInt(input_length.attr('min'), 10);
    value = parseInt(input_length.val(), 10);
    if (value >= min && value <= max) {
      $('#alert').hide();
      width = value * 10;
      prefix = $("#prefix_chars").val();

      let action = this.id;
      let password = randString(value, prefix);
      let passwordField = $('.hidden_password');

      passwordField.val(password);
      console.log("Generate -> " + value + " characters => " + "%c" + password, "color:#f0ad4e");

      $('#field_password').show();
      $('#button_copy').show();

      passwordField.select();
    } else {
      $('#field_password').hide();
      $('#button_copy').hide();
      if (value >= max) {
        $('#alert').addClass('alert').text('Character limit exceeded (' + value + ')').show();
      } else {
        $('#alert').addClass('alert').text('Character limit too low (' + value + ')').show();
      }
    }
  });

  function randString(limit, prefix) {
    let
      password = '',
      possible,
      basic_chars         = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',
      basic_chars_safe    = 'ABCDEFGHJMNPQRSTUVWXYZabcdefghmnpqrstvwxyz23456789',
      special_chars       = '!"#$%&()*+,-./:;<=><?@[]^_{|}~',
      special_chars_safe  = '#*+-=@_#' + '*@_';

    const
      cb_special_chars = $('input#special_chars'),
      cb_safe_chars    = $('input#safe_chars');


    if ( cb_special_chars.is(':checked') || cb_safe_chars.is(':checked') ) {

      if ( cb_special_chars.is(':checked') && cb_safe_chars.is(':checked')) {

        possible = basic_chars_safe + special_chars_safe;
        console.log('safe + special => checked');

      } else if (cb_safe_chars.is(':checked')) {

        possible = basic_chars_safe;
        console.log('safe => checked');

      } else if (cb_special_chars.is(':checked')) {

        possible = basic_chars + special_chars;
        console.log('special => checked');

      }
    } else {
      possible = basic_chars;
      console.log('none => checked');
    }

    limit = limit - prefix.length;

    for (i = 0; i < limit; i++) {
      password += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    password = prefix + password;
    return password;
  }

  $('#button_copy').click(function () {
    copyFunction();
  });

  function copyFunction() {
    /* Set field target */
    let passwordField = $('.hidden_password');

    /*
     * The .val() method is primarily used to get the values of form elements
     * such as input, select and textarea. When called on an empty collection,
     * it returns undefined.
     */
    console.log(passwordField.val());

    /* Select the text field */
    passwordField.select();

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    //alert("Copied: " + copyText);
  }

});
