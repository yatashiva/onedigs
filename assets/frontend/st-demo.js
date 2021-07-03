;(function() {
  'use strict';


  $(activate);


  function activate() {

    $('.nav-tabs')
      .scrollingTabs({
        leftArrowContent: [
          '<div class="custom-arrow">',
          '  <svg class="icon icon-point-left">',
          '    <use xlink:href="#icon-point-left"></use>',
          '  </svg>',
          '</div>'
        ].join(''),
        rightArrowContent: [
          '<div class="custom-arrow">',
          '  <svg class="icon icon-point-right">',
          '    <use xlink:href="#icon-point-right"></use>',
          '  </svg>',
          '</div>'
        ].join('')
      })
      .on('ready.scrtabs', function() {
        $('.tab-content').show();
      });

  }
}());
