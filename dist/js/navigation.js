! function() {
    function e() {
        for (var e = this; - 1 === e.className.indexOf("nav-menu");) "li" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace(" focus", "") : e.className += " focus"), e = e.parentElement
    }
    var a, t, n, s, l;
    if (a = document.getElementById("site-navigation"), a && (t = a.getElementsByTagName("button")[0], "undefined" != typeof t)) {
        if (n = a.getElementsByTagName("ul")[0], "undefined" == typeof n) return void(t.style.display = "none");
        n.setAttribute("aria-expanded", "false"), -1 === n.className.indexOf("nav-menu") && (n.className += " nav-menu"), t.onclick = function() {
            -1 !== a.className.indexOf("toggled") ? (a.className = a.className.replace(" toggled", ""), t.setAttribute("aria-expanded", "false"), n.setAttribute("aria-expanded", "false")) : (a.className += " toggled", t.setAttribute("aria-expanded", "true"), n.setAttribute("aria-expanded", "true"))
        }, s = n.getElementsByTagName("a"), l = n.getElementsByTagName("ul");
        for (var i = 0, r = l.length; i < r; i++) l[i].parentNode.setAttribute("aria-haspopup", "true");
        for (i = 0, r = s.length; i < r; i++) s[i].addEventListener("focus", e, !0), s[i].addEventListener("blur", e, !0)
    }
}();