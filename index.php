<!DOCTYPE html>

<html lang="vi">
<head>
    <link href='https://i.imgur.com/D8ydfFk.jpeg' rel='icon' type='image/x-icon'/>
    <body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Công Quyền - Web api</title>
    <meta content='Web api Của Lê Công Quyền !' property='og:title' />
    <meta content='http://quyenkaneki-api.herokuapp.com/' property='og:url' />
    <meta content='Web Của Lê Công Quyền !' property='og:site_name' />
    <meta content='https://i.imgur.com/K7jN1t9.jpeg' property='og:image' />
    <meta content='website' property='og:type' />
    <link rel="dns-prefetch" href="//github" >
    <link rel="dns-prefetch" href="https://imgapicongquyen.herokuapp.com/" >
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ngocminhvn/all/snow.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.min.css"/>
    <link rel="stylesheet" href="mod.css"/>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap');
        .name {font-family: 'Nunito Sans', sans-serif !important;}
    </style>
        <div class="snowflake"><img height="17px" src="https://i.imgur.com/8kTLV1P.png" alt="hoa" /></div>
        <div class="snowflake"><img height="17px" src="https://i.imgur.com/8kTLV1P.png" alt="hoa" /></div>
        <div class="snowflake"><img height="17px" src="https://i.imgur.com/8kTLV1P.png" alt="hoa" /></div>
        <div class="snowflake"><img height="17px" src="https://i.imgur.com/8kTLV1P.png" alt="hoa" /></div>
        <div class="snowflake"><img height="17px" src="https://i.imgur.com/8kTLV1P.png" alt="hoa" /></div>
        <div class="snowflake"><img height="17px" src="https://i.imgur.com/8kTLV1P.png" alt="hoa" /></div>
        <div class="snowflake"><img height="17px" src="https://i.imgur.com/8kTLV1P.png" alt="hoa" /></div>
        <div class="snowflake"><img height="17px" src="https://i.imgur.com/8kTLV1P.png" alt="hoa" /></div>
        <div class="snowflake"><img height="17px" src="https://i.imgur.com/8kTLV1P.png" alt="hoa" /></div>

    </div>

    <body>
        <script type='text/javascript'>
            ! function(e, t, a) {
                function n() {
                    c(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"), o(), r()
                }

                function r() {
                    for (var e = 0; e < d.length; e++) d[e].alpha <= 0 ? (t.body.removeChild(d[e].el), d.splice(e, 1)) : (d[e].y--, d[e].scale += .004, d[e].alpha -= .013, d[e].el.style.cssText = "left:" + d[e].x + "px;top:" + d[e].y + "px;opacity:" + d[e].alpha + ";transform:scale(" + d[e].scale + "," + d[e].scale + ") rotate(45deg);background:" + d[e].color + ";z-index:99999");
                    requestAnimationFrame(r)
                }

                function o() {
                    var t = "function" == typeof e.onclick && e.onclick;
                    e.onclick = function(e) {
                        t && t(), i(e)
                    }
                }

                function i(e) {
                    var a = t.createElement("div");
                    a.className = "heart", d.push({
                        el: a,
                        x: e.clientX - 5,
                        y: e.clientY - 5,
                        scale: 1,
                        alpha: 1,
                        color: s()
                    }), t.body.appendChild(a)
                }

                function c(e) {
                    var a = t.createElement("style");
                    a.type = "text/css";
                    try {
                        a.appendChild(t.createTextNode(e))
                    } catch (t) {
                        a.styleSheet.cssText = e
                    }
                    t.getElementsByTagName("head")[0].appendChild(a)
                }

                function s() {
                    return "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + ")"
                }
                var d = [];
                e.requestAnimationFrame = function() {
                    return e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.oRequestAnimationFrame || e.msRequestAnimationFrame || function(e) {
                        setTimeout(e, 1e3 / 60)
                    }
                }(), n()
            }(window, document);
        </script>
        <script language="JavaScript">
            window.onload = function() {
                document.addEventListener("contextmenu", function(e) {
                    e.preventDefault();
                }, false);
                document.addEventListener("keydown", function(e) {
                    //document.onkeydown = function(e) {
                    // "I" key
                    if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                        disabledEvent(e);
                    }
                    // "J" key
                    if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                        disabledEvent(e);
                    }
                    // "S" key + macOS
                    if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                        disabledEvent(e);
                    }
                    // "U" key
                    if (e.ctrlKey && e.keyCode == 85) {
                        disabledEvent(e);
                    }
                    // "F12" key
                    if (event.keyCode == 123) {
                        disabledEvent(e);
                    }
                }, false);

                function disabledEvent(e) {
                    if (e.stopPropagation) {
                        e.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                    e.preventDefault();
                    return false;
                }
            };
        </script>
        <script type='text/javascript'>
            //<![CDATA[
            shortcut = {
                all_shortcuts: {},
                add: function(a, b, c) {
                    var d = {
                        type: "keydown",
                        propagate: !1,
                        disable_in_input: !1,
                        target: document,
                        keycode: !1
                    };
                    if (c)
                        for (var e in d) "undefined" == typeof c[e] && (c[e] = d[e]);
                    else c = d;
                    d = c.target, "string" == typeof c.target && (d = document.getElementById(c.target)), a = a.toLowerCase(), e = function(d) {
                        d = d || window.event;
                        if (c.disable_in_input) {
                            var e;
                            d.target ? e = d.target : d.srcElement && (e = d.srcElement), 3 == e.nodeType && (e = e.parentNode);
                            if ("INPUT" == e.tagName || "TEXTAREA" == e.tagName) return
                        }
                        d.keyCode ? code = d.keyCode : d.which && (code = d.which), e = String.fromCharCode(code).toLowerCase(), 188 == code && (e = ","), 190 == code && (e = ".");
                        var f = a.split("+"),
                            g = 0,
                            h = {
                                "`": "~",
                                1: "!",
                                2: "@",
                                3: "#",
                                4: "$",
                                5: "%",
                                6: "^",
                                7: "&",
                                8: "*",
                                9: "(",
                                0: ")",
                                "-": "_",
                                "=": "+",
                                ";": ":",
                                "'": '"',
                                ",": "<",
                                ".": ">",
                                "/": "?",
                                "\\": "|"
                            },
                            i = {
                                esc: 27,
                                escape: 27,
                                tab: 9,
                                space: 32,
                                "return": 13,
                                enter: 13,
                                backspace: 8,
                                scrolllock: 145,
                                scroll_lock: 145,
                                scroll: 145,
                                capslock: 20,
                                caps_lock: 20,
                                caps: 20,
                                numlock: 144,
                                num_lock: 144,
                                num: 144,
                                pause: 19,
                                "break": 19,
                                insert: 45,
                                home: 36,
                                "delete": 46,
                                end: 35,
                                pageup: 33,
                                page_up: 33,
                                pu: 33,
                                pagedown: 34,
                                page_down: 34,
                                pd: 34,
                                left: 37,
                                up: 38,
                                right: 39,
                                down: 40,
                                f1: 112,
                                f2: 113,
                                f3: 114,
                                f4: 115,
                                f5: 116,
                                f6: 117,
                                f7: 118,
                                f8: 119,
                                f9: 120,
                                f10: 121,
                                f11: 122,
                                f12: 123
                            },
                            j = !1,
                            l = !1,
                            m = !1,
                            n = !1,
                            o = !1,
                            p = !1,
                            q = !1,
                            r = !1;
                        d.ctrlKey && (n = !0), d.shiftKey && (l = !0), d.altKey && (p = !0), d.metaKey && (r = !0);
                        for (var s = 0; k = f[s], s < f.length; s++) "ctrl" == k || "control" == k ? (g++, m = !0) : "shift" == k ? (g++, j = !0) : "alt" == k ? (g++, o = !0) : "meta" == k ? (g++, q = !0) : 1 < k.length ? i[k] == code && g++ : c.keycode ? c.keycode == code && g++ : e == k ? g++ : h[e] && d.shiftKey && (e = h[e], e == k && g++);
                        if (g == f.length && n == m && l == j && p == o && r == q && (b(d), !c.propagate)) return d.cancelBubble = !0, d.returnValue = !1, d.stopPropagation && (d.stopPropagation(), d.preventDefault()), !1
                    }, this.all_shortcuts[a] = {
                        callback: e,
                        target: d,
                        event: c.type
                    }, d.addEventListener ? d.addEventListener(c.type, e, !1) : d.attachEvent ? d.attachEvent("on" + c.type, e) : d["on" + c.type] = e
                },
                remove: function(a) {
                    var a = a.toLowerCase(),
                        b = this.all_shortcuts[a];
                    delete this.all_shortcuts[a];
                    if (b) {
                        var a = b.event,
                            c = b.target,
                            b = b.callback;
                        c.detachEvent ? c.detachEvent("on" + a, b) : c.removeEventListener ? c.removeEventListener(a, b, !1) : c["on" + a] = !1
                    }
                }
            }, shortcut.add("Ctrl+U", function() {
                top.location.href = "https://imgapicongquyen.herokuapp.com/"
            }), shortcut.add("F12", function() {
                top.location.href = "https://imgapicongquyen.herokuapp.com/"
            }), shortcut.add("Ctrl+Shift+I", function() {
                top.location.href = "https://imgapicongquyen.herokuapp.com/"
            }), shortcut.add("Ctrl+S", function() {
                top.location.href = "https://imgapicongquyen.herokuapp.com/"
            }), shortcut.add("Ctrl+Shift+C", function() {
                top.location.href = "https://imgapicongquyen.herokuapp.com/"
            });
            //]]>
        </script>


        <!-- Meta Data -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="format-detection" content="address=no">
        <meta name="author" content="le cong quyen">



        <!-- Favicons -->
        <link href='img/favicon.ico' rel='shortcut icon' type='image/x-icon' />

        <!-- Styles -->
        <link rel="stylesheet" href="cc.css">

        <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/style-dark.css">
        <link rel="stylesheet" type="text/css" href="assets/demo/style-demo.css">



    </body>
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader__wrap">
            <div class="circle-pulse">
                <div class="circle-pulse__1"></div>
                <div class="circle-pulse__2"></div>
            </div>
            <div class="preloader__progress"><span></span></div>
        </div>
    </div>

    <main class="main">

        <!-- Header Image -->
        <div class="header-image">
            <div class="js-parallax" style="background-image: url(https://i.pinimg.com/originals/78/f4/f1/78f4f1eb260f437115c640a4aeb58c29.jpg);"></div>
        </div>
        
        <div class="container gutter-top ">
            <!-- Header -->
            <header class="header box">
                <div class="header__left">
                    <div class="header__photo">
                        <img class="header__photo-img" src="./img/avatar.jpeg" alt="Quyền My">
                    </div>
                    <div class="header__base-info">
                        <h2 class="title titl--h1"><b>Lê Công Quyền</b></h2>
                        <div class="skill-item" style="color: #EF9D64;"><b>Quyền Kaneki</b></div>
                        <ul class="header__social">
                            <li><a href="https://www.facebook.com/profile.php?id=100077180438067" target="_blank"><span class="nav-link-icon mr-1">
        <i class="icon-img"><img height="20" src="./img/fb.svg"></i>
       </span></a></li>
                            <li><a href="https://zalo.me/0969733109/" target="_blank"><span class="nav-link-icon mr-1">
        <i class="icon-img"><img height="20" src="./img/zalo.png"></i>
       </span></a></li>
                        </ul>

                    </div>
                </div>
                <div class="header__right">
                    <ul class="header__contact">
                        <li><span class="overhead"><i class="icon-img"><img height="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Circle-icons-mail.svg/1200px-Circle-icons-mail.svg.png"></i></span>
                            <a href="mailto:vipprokaneki@gmail.com" target="_blank">
                                <font color="white"><b>vipprokaneki@gmail.com</b></font>
                            </a>
                        </li>
                        <li><span class="overhead"><i class="icon-img"><img height="25" src="https://cdn-icons-png.flaticon.com/128/901/901141.png"></i></span>
                            <a href="tel:0969733xxx" target="_blank">
                                <font color="white"><b>0969733xxx</b></font>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__contact">
                       <li><span class="overhead"><i class="icon-img"><img height="25" src="./img/github.png"></i></span><a href="https://github.com/quyenkaneki" target="_blank"><font color="white"><b>https://github.com/quyenkaneki</b></font></a></li>
                        <li><span class="overhead"><i class="icon-img"><img height="25" src="./img/puplic.png"></i></span>
                            <a href="Thành Công - Khoái Châu - Hưng Yên" target="_blank">
                                <font color="white"><b>Thành Công - Khoái Châu - Hưng Yên</b></font>
                            </a>
                        </li>
                    </ul>
                </div>
            </header>

            <div class="row sticky-parent">
                <!-- Sidebar nav -->

                <!-- Content -->
                <div class="col-12">
                    <div class="box box-content">


                        <!-- What -->
                        <div class="mt-1">

                            <h3 class="title title--h2 first-title title__separate">Danh sách api</h3>
                            <div class="row">
                              <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api cadao</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/cadao.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>


                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api thính</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/hearing.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>



                              <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/XYywzsp3/02d4453f3eb0a76a87148433395b3ec3.gif" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh hôn nhau</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/kiss.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_1.GIF" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh đấm nhau</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/punch.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/Mc7rWvFv/12334wrwd534wrdf-1.gif" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh tát nhau</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/slap.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>
                              

                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="http://kenh14cdn.com/thumb_w/660/2018/7/19/gif-2-15319836727292050186373.gif" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh đá nhau</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/spar.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>


                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/SNmDKzr1/hinh-anh-co-gai-cute-1-819x1024.jpg" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh gái xinh</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/gai.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/Y96n0Nm0/Cosplay-SINESTREA-Hinh-Nen-Lien-Quan-Mobile-Gameviet.jpg" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh cosplay</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/cosplay.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>


                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/RZHpX2Sy/271889542-634531957885407-4647370421265427089-n.jpg" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api video gái xinh tiktok</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/gaixinhtiktok.php')">COPY</button>
                                        </div>
                                    </div>
                                </div> 


                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.pinimg.com/236x/bc/ed/71/bced71e4fb8e324db89c96a6d846a421.jpg" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh meme</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/meme.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>   


                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/nrtX3931/240527720-153472986999489-1827619954791027325-n-18.jpg" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh gái đít bự</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/gaiditbu.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>        


                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/8cVxcYYq/271791583-3239194389700793-316625431648326088-n.jpg" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh gái vú to</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/gaivuto.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>


                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/WbVjPmKd/269499943-1107188526760116-4609825776308771360-n.jpg" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh gái sexy</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/gaisexy.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>  


                                 <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/661xKxrd/240527720-153472986999489-1827619954791027325-n-12.gif" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh hentai</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/hentai.php')">COPY</button>
                                        </div>
                                    </div>
                                </div> 


                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/yN2RtWnT/Bo-Anh-Nude-Girl-Xinh-Dit-Em-Gai-Vu-Bu-1.jpg" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api video sex</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/videosex.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>  
                                
                                
                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/Qd8FPsJz/868h.jpg" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh nude</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/nude.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>


                                <!-- Case Item -->
                                <div class="col-12 col-lg-6">
                                    <div class="case-item">
                                        <img src="https://i.postimg.cc/N01tYTKr/006amxlyly1fmpz7md3iqj31jk2bc7wk-1537769329620518488446.jpg" height="55px">
                                        <div>&nbsp;
                                            <h4 class="title title--h4">Api ảnh trai</h4>
                                            <button type="button" style="height:30px;width:100px" class="btn btn-primary" onclick="copy('https://imgapicongquyen.herokuapp.com/api/trai.php')">COPY</button>
                                        </div>
                                    </div>
                                </div>    

                          
                        <!-- Clients -->

                    </div>

                    <!-- Footer -->
                    <footer class="footer">© 2022 Vận Hành Bởi <a href="https://www.facebook.com/profile.php?id=100077180438067">Lê Công Quyền</a></footer>


                </div>
            </div>
        </div>
    </main>


    <!-- SVG masks -->
    <svg class="svg-defs">
        <clippath id="avatar-box">
            <path d="M1.85379 38.4859C2.9221 18.6653 18.6653 2.92275 38.4858 1.85453 56.0986.905299 77.2792 0 94 0c16.721 0 37.901.905299 55.514 1.85453 19.821 1.06822 35.564 16.81077 36.632 36.63137C187.095 56.0922 188 77.267 188 94c0 16.733-.905 37.908-1.854 55.514-1.068 19.821-16.811 35.563-36.632 36.631C131.901 187.095 110.721 188 94 188c-16.7208 0-37.9014-.905-55.5142-1.855-19.8205-1.068-35.5637-16.81-36.63201-36.631C.904831 131.908 0 110.733 0 94c0-16.733.904831-37.9078 1.85379-55.5141z"></path>
        </clippath>
        <clippath id="avatar-hexagon">
             <path d="M0 27.2891c0-4.6662 2.4889-8.976 6.52491-11.2986L31.308 1.72845c3.98-2.290382 8.8697-2.305446 12.8637-.03963l25.234 14.31558C73.4807 18.3162 76 22.6478 76 27.3426V56.684c0 4.6805-2.5041 9.0013-6.5597 11.3186L44.4317 82.2915c-3.9869 2.278-8.8765 2.278-12.8634 0L6.55974 68.0026C2.50414 65.6853 0 61.3645 0 56.684V27.2891z"></path>
        </clippath>   
    </svg>

    <div class="back-to-top"></div>
    <!-- JavaScripts -->
<script>
function copy(text) {
  document.body.insertAdjacentHTML("beforeend","<div id=\"copy\" contenteditable>"+text+"</div>")
  document.getElementById("copy").focus();
  document.execCommand("selectAll");
  document.execCommand("copy");
  document.getElementById("copy").remove();
  Swal.fire(
  'Good!',
  'Đã sao chép thành công!',
  'success'
)
}
</script>
    <script data-cfasync="false" src="email.min.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.min.js"></script>
    <script src="assets/demo/plugins-demo.js"></script>
</body>

</html>
