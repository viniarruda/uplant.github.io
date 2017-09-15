Raphael.fn.pieChart = function(e, t, n, r, i) {
    function a(e, t, n, r, i, u) {
        var a = e + n * Math.cos(-r * o),
            f = e + n * Math.cos(-i * o),
            l = t + n * Math.sin(-r * o),
            c = t + n * Math.sin(-i * o);
        return s.path(["M", e, t, "L", a, l, "A", n, n, 0, +(i - r > 180), 0, f, c, "z"]).attr(u)
    }
    var s = this,
        o = Math.PI / 180,
        u = this.set();
    var f = 90,
        l = 100,
        c = function(o) {
            var c = r[o],
                h = 360 * c / l;
            if (r[o] == 100) {
                var p = s.circle(e, t, n).attr({
                    fill: "#9ec25e",
                    stroke: "#9ec25e",
                    "stroke-width": 0
                })
            } else {
                if (o == 1) {
                    var p = a(e, t, n, f, f + h, {
                        fill: "90-#9ec25e-#9ec25e",
                        stroke: i,
                        "stroke-width": 0
                    })
                } else {
                    var p = a(e, t, n, f, f + h, {
                        fill: "90-#cecece-#cecece",
                        stroke: i,
                        "stroke-width": 0
                    })
                }
                f += h
            }
            u.push(p)
        };
    for (var h = 0; h < r.length; h++) {
        c(h)
    }
    return u
};
$(function() {
    var e = [];
    $(".sys_circle_progress").each(function() {
        var t = parseInt($(this).attr("data-percent"));
        var n = 100 - t;
        if (n == 0) {
            e[0] = t
        } else {
            e[0] = n;
            e[1] = t
        }
        Raphael($(this).find(".sys_holder_sector")[0], 78, 78).pieChart(39, 39, 39, e, "#cecece");
        $(this).append('<span class="val-progress">' + $(this).attr("data-percent") + "%</span>")
    })
})