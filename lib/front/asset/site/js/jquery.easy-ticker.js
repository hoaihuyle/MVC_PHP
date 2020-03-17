! function(t, e, o, n) {
    var i = "easyTicker",
        s = {
            direction: "up",
            easing: "swing",
            speed: "slow",
            interval: 2e3,
            height: "auto",
            visible: 0,
            mousePause: 1,
            controls: {
                up: "",
                down: "",
                toggle: "",
                playText: "Play",
                stopText: "Stop"
            }
        };

    function c(n, i) {
        var c = this;

        function r() {
            c.timer = setInterval(function() {
                1 == c.winFocus && a(c.opts.direction)
            }, c.opts.interval), t(c.opts.controls.toggle).addClass("et-run").html(c.opts.controls.stopText)
        }

        function l() {
            clearInterval(c.timer), c.timer = 0, t(c.opts.controls.toggle).removeClass("et-run").html(c.opts.controls.playText)
        }

        function a(t) {
            var e, o, n;
            if (c.elem.is(":visible")) {
                "up" == t ? (e = ":first-child", o = "-=", n = "appendTo") : (e = ":last-child", o = "+=", n = "prependTo");
                var i = c.targ.children(e),
                    s = i.outerHeight();
                c.targ.stop(!0, !0).animate({
                    top: o + s + "px"
                }, c.opts.speed, c.opts.easing, function() {
                    i.hide()[n](c.targ).fadeIn(), c.targ.css("top", 0), p()
                })
            }
        }

        function u(t) {
            l(), a("up" == t ? "up" : "down")
        }

        function p() {
            var e, o;
            "auto" == c.opts.height && 0 != c.opts.visible ? (anim = "init" == arguments.callee.caller.name ? 0 : 1, function(e) {
                var o = 0;
                c.targ.children(":lt(" + c.opts.visible + ")").each(function() {
                    o += t(this).outerHeight()
                }), 1 == e ? c.elem.stop(!0, !0).animate({
                    height: o
                }, c.opts.speed) : c.elem.css("height", o)
            }(anim)) : "auto" == c.opts.height && (e = 0, o = c.elem.css("display"), c.elem.css("display", "block"), c.targ.children().each(function() {
                e += t(this).outerHeight()
            }), c.elem.css({
                display: o,
                height: e
            }))
        }
        return c.opts = t.extend({}, s, i), c.elem = t(n), c.targ = t(n).children(":first-child"), c.timer = 0, c.mHover = 0, c.winFocus = 1, c.elem.children().css("margin", 0).children().css("margin", 0), c.elem.css({
            position: "relative",
            height: c.opts.height,
            overflow: "hidden"
        }), c.targ.css({
            position: "absolute",
            margin: 0
        }), setInterval(function() {
            p()
        }, 100), r(), t([e, o]).off("focus.jqet").on("focus.jqet", function() {
            c.winFocus = 1
        }).off("blur.jqet").on("blur.jqet", function() {
            c.winFocus = 0
        }), 1 == c.opts.mousePause && c.elem.mouseenter(function() {
            c.timerTemp = c.timer, l()
        }).mouseleave(function() {
            0 !== c.timerTemp && r()
        }), t(c.opts.controls.up).on("click", function(t) {
            t.preventDefault(), u("up")
        }), t(c.opts.controls.down).on("click", function(t) {
            t.preventDefault(), u("down")
        }), t(c.opts.controls.toggle).on("click", function(t) {
            t.preventDefault(), 0 == c.timer ? r() : l()
        }), {
            up: function() {
                u("up")
            },
            down: function() {
                u("down")
            },
            start: r,
            stop: l,
            options: c.opts
        }
    }
    t.fn[i] = function(e) {
        return this.each(function() {
            t.data(this, i) || t.data(this, i, new c(this, e))
        })
    }
}(jQuery, window, document);