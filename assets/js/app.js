(function ($) {
  'use strict';
  var App = (function () {
    // Base UI Actions
    function bindUiActions() {
      $('.btn-menu').on('click', function (e) {
        e.preventDefault();
        $('body').toggleClass('u-menu-open');
        // $('.ui.sidebar').sidebar('toggle');
      });
      $('.btn--submenu-toggle').on('click', function (e) {
        e.preventDefault();   
        $(this).next('.submenu').slideToggle(200);
        $(this).parent().toggleClass('u-submenu-open');
      });
    }
    function responsive() {
      function initResponsive() {}
      $(window).scroll(function () {
        if (window.matchMedia("(max-width: 1223px)").matches && $(document).scrollTop() > 0) {
          $('.main-header').addClass('u-fixed');
        } else {
          $('.main-header').removeClass('u-fixed');
        }
      });
      $(window).resize(function () {
        initResponsive();
      });
      $(document).ready(function () {
        initResponsive();
      });
    }
    function form() {
      // Select
      $('select.dropdown').dropdown();
      // Tooltip
      $('[data-content]').popup();
      // Checkbox
      $('.checkbox').checkbox();
      // File upload
      $('.file-upload__upload input[type="file"]').change(function () {
        var files = $(this)[0].files;
        for (var i = 0; i < files.length; i++) {
          $(this).closest('.file-upload').find('.file-upload__files').append('<div class="file-upload__files__item"><span class="file-upload__files__item__title">' + files[i].name + '</span><button class="file-upload__files__item__remove"><i class="fa fa-times"></i></button></div>');
        }
        $(this).closest('.file-upload').find('.file-upload__files').fadeIn(200);
      });
      $('body').on('click', '.file-upload__files__item__remove', function (e) {
        e.preventDefault();
        $(this).closest('.file-upload__files__item').fadeOut(200, function () {
          $(this).remove();
        });
        if ($(this).closest('.file-upload').find('.file-upload__files__item').length === 1) {
          $(this).closest('.file-upload').find('.file-upload__files').fadeOut(200);
        }
      });
    }
    
    function modal() {
      $('[data-openmodal]').on('click', function (e) {
        var mId = $(this).data('openmodal');
        console.log(mId);
        $('[data-modal="' + mId + '"]').modal('show');
      });
      $('.modal-close').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.ui.modal').modal('hide');
      });
    }
    function tabs() {
      $('.tabs__head__item').tab();
    }
    return {
      init: function () {
        bindUiActions();
        responsive();
        form();
        modal();
        tabs();
      }
    };
  })();
  App.init();
})(jQuery);
