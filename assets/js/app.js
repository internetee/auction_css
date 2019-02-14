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
      $('.btn.toggle').on('click', function (e) {
        e.preventDefault();   
        $(this).next('.submenu').slideToggle(200);
        $(this).parent().toggleClass('u-submenu-open');
      });
    }
    function auth() {
      $('.login-block form').on('submit', function (e) {
        if ($(this).find('.login-block__confirm').length) {
          e.preventDefault();
          $(this).find('.login-block__login').slideUp(200, function () {
            $(this).closest('.login-block').find('.login-block__confirm').slideDown(200);
          });
        }
      });
    }
    function responsive() {
      function initResponsive() {}
      $(window).scroll(function () {
        if (window.matchMedia("(max-width: 1024px)").matches && $(document).scrollTop() > 0) {
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
    function initAccordion() {
      if ($('.accordion').length) {
        if (window.location.hash) {
          var target = $(window.location.hash);
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top + 5
            }, 500);
            showAccordionItem(target);
          }
        }
        $(window).on('hashchange', function() {
          if (window.location.hash) {
            var target = $(window.location.hash);
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top + 5
              }, 500);
              showAccordionItem(target);
            }
          }
        });
        
        var aLink = $('[data-accordion-item]');
        aLink.on('click', function (e) {
          e.preventDefault();
          e.stopPropagation();
          var urlHash = encodeURI($(this).attr('href'));
          var item = $($(this).data('accordion-item'));
          
          if ($(item).hasClass('accordion__item--active')) {
            e.preventDefault();
            hideAccordionItem(item);
            history.replaceState('', document.title, window.location.pathname);
          } else {
            showAccordionItem(item);
            if (e.target.nodeName !== 'SPAN') {
              if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                if (target.length) {
                  $('html, body').animate({
                    scrollTop: target.offset().top
                  }, 500);
                  window.location.hash = $(target).attr('id');
                }
              }
            }
          }
        });
      } 
      var anchorBlock = $('.anchor-block'),
        anchorBlockContainer = $('.article--sidebar, .page--sidebar'),
        blockFromTop,
        lastId,
        menuItems = anchorBlock.find(".anchor-block__item > a"),
        scrollItems = menuItems.map(function () {
          var item = $($(this).attr("href"));
          if (item.length) {
            return item;
          }
        });
    
      menuItems.click(function (e) {
        e.preventDefault();
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top + 1;
        $('html, body').stop().animate({
          scrollTop: offsetTop
        }, 200);
        if ($(this).next('ul').length) {
          $(this).toggleClass('u-active');
          $(this).next('ul').slideToggle(200);
        }
      });
      $(window).scroll(function () {
        if ($(anchorBlock).length && $(window).innerWidth() > 1023) {
          var maxScroll = anchorBlockContainer.offset().top + anchorBlockContainer.outerHeight() - anchorBlock.outerHeight(),
              fromTop = $(this).scrollTop();
          var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
              return this;
          });
          cur = cur[cur.length - 1];
          var id = cur && cur.length ? cur[0].id : "";
          // anchor block fixed on scroll
          if (!anchorBlock.hasClass('anchor-block--fixed')) {
            blockFromTop = anchorBlock.offset().top
          }
          if (fromTop >= blockFromTop) {
            anchorBlock.addClass('anchor-block--fixed');
          } else {
            anchorBlock.removeClass('anchor-block--fixed');
          }
          if (fromTop >= maxScroll) {
            anchorBlock.addClass('anchor-block--bottom');
          } else {
            anchorBlock.removeClass('anchor-block--bottom');
          }
          // anchor block items active on scroll
          if (lastId !== id) {
            lastId = id;
            menuItems
                .closest('.anchor-block__item').removeClass("anchor-block__item--active")
                .end().filter("[href='#" + id + "']").closest('.anchor-block__item').addClass("anchor-block__item--active");
          }
          if (id) {
            var parentElem = $('#' + id).parent();
            if (isScrolledIntoView($(parentElem))) {
              console.log(parentElem);
            }
          }
        }
      });    
    };
    function showAccordionItem(item) {
      $(item).addClass('accordion__item--active').find('.accordion__item__body').slideDown(300);
    };

    function isScrolledIntoView(elem) {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();
      
      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(elem).height();
      
      return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    };

    function hideAccordionItem(item) {
      $(item)
          .removeClass('accordion__item--active')
          .find('.accordion__item__body').slideUp(300);
    };

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
        auth();
        form();
        modal();
        tabs();
        initAccordion();
      }
    };
  })();
  App.init();
})(jQuery);
