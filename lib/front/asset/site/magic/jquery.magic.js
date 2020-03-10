/** 
 * MagicJs
 * Copyright 2018 Phuc Magic
 * Written while remember to a girl
 * Licensed (https://dai.han.338@facebook.vom)
 */
! function (t) {
  /**
   * Date 15-06-2018
   * Today I going to watch worldcup 2018
   */
  t.fn.mcScroll = function (n) {
    if (this.length === 0) return this;
    if (this.length > 1) return this.each(function () {
      t(this).mcScroll(n);
    }), this;
    initScroll(this);
  }
  /**
   * Date 14-06-2018
   * Today I not meet girl who is my love
   */
  t.fn.mcTreeView = function (n) {
    var e = {
      classMain: n !== undefined && n.classMain !== undefined ? n.classMain : "mc-tree-view",
      classExpanded: n !== undefined && n.classExpanded !== undefined ? n.classExpanded : "mc-state-expanded",
      classCollapsed: n !== undefined && n.classCollapsed !== undefined ? n.classCollapsed : "mc-state-collapsed",
      classToggle: n !== undefined && n.classToggle !== undefined ? n.classToggle : "mc-toggle",
      toggle: n !== undefined && n.toggle !== undefined ? n.toggle : true,
      callBack: n !== undefined && n.callBack !== undefined ? n.callBack : null
    };

    if (this.length === 0) return this;
    if (this.length > 1) return this.each(function () {
      t(this).mcTreeView(n);
    }), this;
    this.addClass(e.classMain);
    e.classMain = 'mc-sub-view'
    this.find('>li').each((index, element) => {
      if (t(element).find('ul').length != 0) {
        t(t(element).find('ul')).mcTreeView(n);
        let show = t(element).hasClass('mc-expanded');
        show ? null : t(element).addClass(e.classCollapsed).find('>ul').css({
          display: 'none'
        });
        e.toggle ? t(element).append('<button class="' + e.classToggle + '"></button>') : null;
        let toggle = e.toggle ? t(element).find('>.' + e.classToggle) : t(element).find('>*');
        toggle.click((event) => {
          if (!show) {
            t(element).addClass(e.classExpanded);
            t(element).removeClass(e.classCollapsed);
            t(element).find('>ul').slideDown(250);
          } else {
            t(element).removeClass(e.classExpanded);
            t(element).addClass(e.classCollapsed);
            t(element).find('>ul').slideUp(250);
          }
          show = !show;

        });
      }
      t(element).find('>*').click(function () {
        if (e.callBack) {
          e.callBack(t(element));
        }
      });
    });
    e.classMain = 'mc-tree-view'
  }
}(jQuery);

initScroll = (scrollBox) => {
  var contentName = scrollBox.attr('content') ? scrollBox.attr('content') : '.scroll-content';
  var scrollContent = scrollBox.find(contentName);
  scrollBox.css('height', '100%');
  if (scrollContent.prop('scrollHeight') > scrollBox.height()) {
    scrollBox.append("<div class='scroll-bar'><div class='scroll'></div></div>");
    actionScroll(scrollBox);
  }

  function actionScroll(scrollBox) {
    scrollBox.css('overflow', 'scroll');
    scrollBox.css('position', 'relative');
    scrollBox.css('height', '100%');
    var content = scrollBox.find('>' + contentName);
    var widthContent = content.innerWidth();
    scrollBox.css('overflow', 'hidden');
    var widthBox = scrollBox.innerWidth();
    var scrollBarWidth = widthBox - widthContent;
    content.css('width', `calc(100% + ${scrollBarWidth}px)`);
    // content.css('padding-right', `${scrollBarWidth}px`);
    content.css('height', '100%');
    content.css('overflow', 'auto');
    content.css('position', 'relative');
    content.css('box-sizing', 'unset');
    repositionScrollBar(scrollBox);
    mouseSeek(scrollBox);
    mouseDrag(scrollBox);
    content.scroll(function (e) {
      repositionScrollBar(scrollBox);
    });
  }

  function sizeScrollBar(scrollBox) {
    var height = scrollBox.find(contentName).height();
    var scrollHeight = scrollBox.find(contentName).prop("scrollHeight");
    return height / scrollHeight * 100;
  }

  function scrollBarTop(scrollBox) {
    var height = scrollBox.find(contentName).scrollTop();
    var scrollHeight = scrollBox.find(contentName).prop("scrollHeight");
    return height / scrollHeight * 100;
  }

  function repositionScrollBar(scrollBox) {
    var scrollContent = scrollBox.find(contentName);
    var scroll = scrollBox.find('.scroll');
    scroll.css('height', sizeScrollBar(scrollBox) + "%");
    scroll.css('top', scrollBarTop(scrollBox) + "%");
  }

  function mouseSeek(scrollBox) {
    var scrollBar = scrollBox.find('.scroll-bar');
    var scroll = scrollBox.find('.scroll');
    var scrollContent = scrollBox.find(contentName);
    var scroll = scrollBox.find('.scroll');

    scrollBar.click(function (e) {
      e.preventDefault();
      e.stopPropagation();
      var curTop = (e.pageY - scrollBar.offset().top) / scrollContent.height();
      curTop = curTop * scrollContent.prop('scrollHeight') - (scroll.height() / 2);
      scrollContent.animate({
        scrollTop: curTop
      }, 200);
    });

    scroll.click(function (e) {
      e.preventDefault();
      e.stopPropagation();
    });
  }

  function mouseDrag(scrollBox) {
    var click = false;
    var lastY = 0;
    var scroll = scrollBox.find('.scroll');
    var scrollContent = scrollBox.find(contentName);
    $(document).mousemove(function (e) {
      e.stopPropagation();
      if (click == true) {
        curTop = e.pageY - lastY;
        lastY = e.pageY;
        curTop = scrollBox.find(contentName).scrollTop() + (curTop / scrollBox.find('.scroll-bar').height() * scrollBox.find(contentName).prop("scrollHeight"));
        scrollBox.find(contentName).scrollTop(curTop);
      }
    });

    scroll.mousedown(function (e) {
      e.preventDefault();
      e.stopPropagation();
      click = true;
      lastY = e.pageY;
    });

    $(document).mouseup(function (e) {
      e.preventDefault();
      e.stopPropagation();
      click = false;
      lastY = 0;
    });
  }
}