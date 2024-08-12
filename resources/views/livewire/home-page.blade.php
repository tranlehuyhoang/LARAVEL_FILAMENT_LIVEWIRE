<div>
    <link
        href="{{ asset('assets/frontend/font-awesome/font-awesome-4.3.0/font-awesome-4.3.0/css/font-awesome.min.css') }}?v=12082024"
        rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/main.css') }}?v=12082024" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/bootstrap/css/bootstrap.min.css') }}?v=12082024" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/js/slick/slick.css') }}" rel="stylesheet" />

    <script src="{{ asset('assets/frontend/js/jquery-1.11.1.min.js') }}?v=12082024"></script>
    <script src="{{ asset('assets/frontend/bootstrap/js/bootstrap.min.js') }}?v=12082024"></script>
    <script type="text/javascript">
    $(function() {
        var url = window.location.href.toLowerCase();
        $("ul.small-menu li a").each(function() {
            if ((url == (this.href.toLowerCase())) || (url.indexOf(this.href.toLowerCase())) != -1) {
                $(this).addClass("active-link");
            }

        });
    });
    </script>
    <div id="numcart1" class="hide"></div>
    <div class="hide" itemscope itemtype="http://schema.org/LocalBusiness">
        <div itemprop="name">Vi Tính Hoàng Tin - Chuẩn đoán và khắc phục dùm Quý khách trong thời gian nhanh nhất có thể
            với giá cả phải chăng</div>
        <p itemprop="descripton">
            Chúng tôi là một cửa hàng tin học, chuyên bán linh kiện vi tính, laptop, máy bộ văn phòng trường học quán
            net vv...
            Ngoài ra chúng tôi nhận thu mua thanh lý máy tính - laptop , thiết bị tin học công ty , quán net với giá thu
            mua cao, hoa hồng cho người giới thiệu. CHỈ TIÊU YÊU CẦU MÀ CHÚNG TÔI ĐỀ RA: Chỉ tiêu bán hàng: Hàng chuẩn,
            chất lượng, chính hãng, bảo hành 1 đổi 1 uy tín, giao hàng tận nơi trong nội thành và các tỉnh toàn quốc...
            Cách thức mua hàng, thanh lý: Trực tiếp đến tận nơi kiểm tra, test nhanh gọn, tiền mặt hoặc chuyển khoản
            liền nhanh nhất cho khách hàng...Với sự nhiệt huyết yêu nghề nghiệp, phúc vụ tận tính cho khách hàng, chúng
            tồi quyết tâm chăm sóc khách hàng tốt nhất. vừa long khách đến vừa lòng khách đi. Sự tin tưởng và ủng hộ của
            khách hàng trong suốt thời gian qua là nguồn động viên to lớn trên bước đường phát triển của Vi Tính Trọng
            Thủy. Chúng tôi xin hứa sẽ không ngừng hoàn thiện, phục vụ khách hàng tốt nhất để luôn xứng đáng với niềm
            tin ấy."
        </p>
        <p>Phone: <span itemprop="telephone" content="0938 114 419">0938 114 419</span></p>
        <address itemscope itemtype="http://schema.org/PostalAddress" itemprop="address">
            <span itemprop="streetAddress">SỐ 12, ĐƯỜNG TA15, THỚI AN, QUẬN 12, TP HCM</span>
            <span itemprop="addressLocality">QUẬN 12</span>,
            <span itemprop="addressRegion">TP HCM</span>
        </address>
    </div>
    <div class="menu-r">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <table style="width:100%;">
                        <tr>
                            <td>
                                <a href="/"><img height="85" width="501"
                                        src="https://www.vitinhtrongthuy.com/assets/frontend/img/logo-1.png?v=1"
                                        alt="Vi Tính Trọng Thủy" class="img-responsive" /></a>
                            </td>
                            <td>
                                <button type="button" class="btn-s hidden-md hidden-lg"
                                    onclick="javascript: $('.menu').toggleClass('hidden-xs hidden-sm');"><i
                                        class="fa fa-bars fa-lg"></i></button>
                            </td>

                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <div class="header-giohang">
                        <a class="dps-ht" id="dps-ht-header" data-id="1" data-type="22" href="#"><i
                                class="fa fa-phone"></i><span class="text-danger">0938 114 419</span></a>
                        <span class="cr">-</span>
                        <a href="/gio-hang" title="Xem giỏ hàng"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
                        <span class="cr">-</span>
                        <a class="dps-ht" id="dps-em" data-id="2" data-type="4" href="#"
                            style="white-space:nowrap;margin-bottom:2px;"></a>
                    </div>
                    <table class="search-reg">
                        <tr>
                            <td><input type="text" id="txt-search" placeholder="Vui lòng nhập từ khóa" /></td>
                            <td><button type="button"><i class="fa fa-search"></i> Tìm kiếm</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="topheader">
        <div class="container">
            <ul class="menu no-ul hidden-xs hidden-sm">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="/gioi-thieu">Giới thiệu</a></li>
                <li>
                    <a href="/san-pham">Sản phẩm</a>

                </li>
                <li>
                    <a href="/chinh-sach/ban-bao-gia-thu-mua-linh-kien-cu">BẢN B&#193;O GI&#193; THU MUA LINH KIỆN
                        CŨ</a>
                </li>
                <li>
                    <a href="/chinh-sach/chinh-sach-bao-hanh">CH&#205;NH S&#193;CH BẢO H&#192;NH</a>
                </li>
                <li>
                    <a href="/chinh-sach/huong-dan-thanh-toan">Hướng dẫn thanh to&#225;n</a>
                </li>

                <li><a href="/tin-tuc">Tin tức</a></li>
                <li><a href="/lien-he">Liên hệ</a></li>
                <li><a href="/gio-hang" class="hidden-md hidden-lg">Giỏ hàng</a></li>
            </ul>
        </div>
    </div>
    <link href="https://www.vitinhtrongthuy.com/assets/frontend/js/jquery.bxslider/jquery.bxslider.min.css?v=1"
        rel="stylesheet" />
    <div class="container">
        <div class="slided">
            <ul class="bxslider">
                <li><img style="width:100%;" src="/Upload/SlideShow/ada9b951-d340-456b-8238-87b27060c53f.jpg?v=1" />
                </li>
                <li><img style="width:100%;" src="/Upload/SlideShow/b5c1181c-20d3-44f0-84ad-c29771b681b5.jpg?v=1" />
                </li>
                <li><img style="width:100%;" src="/Upload/SlideShow/34d815d5-ad49-4bb7-a0cc-592f5537b7a1.jpg?v=1" />
                </li>

            </ul>
        </div>
    </div>

    <div class="form-group"></div>



    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <style>
                .thumbnail {
                    border-top: 1px solid #ddd;
                }

                .thumbnail {
                    margin-bottom: 20px;
                    background: #fff;
                    display: block;
                    border: 1px solid #eee;
                    border-top: none;
                    padding: 9px;
                }

                .thumbnail .caption {
                    padding: 9px;
                    color: #333;
                }

                .onl {
                    margin-bottom: 4px;
                }

                .onl span {
                    text-align: right;
                }

                .onl b {
                    float: left;
                    width: 50%;
                }
                </style>
                <div class="blog-heading">
                    <i class="fa fa-sellsy"></i> Danh mục sản phẩm
                </div>
                <div class="blog-cata-content form-group">
                    <ul class="no-ul">
                        <li class="n-w br-d" data-class="mcc" data-id="mcc-103" data-click="clickToggle">
                            <a href="/san-pham/linh-kien-may-tinh"><i class="fa fa-angle-right"></i>LINH KIỆN M&#193;Y
                                T&#205;NH</a>
                            <i class="fa fa-angle-down arrow"></i>

                        </li>
                        <ul class="no-ul mcc" id="mcc-103" style="display:none;">
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/keyboard-ban-phim"><i
                                        class="fa fa-angle-right"></i>KEYBOARD - B&#192;N PH&#205;M</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/cpu-bo-vi-xu-ly"><i
                                        class="fa fa-angle-right"></i>CPU - BỘ VI XỬ L&#221;</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/vga-car-do-hoa"><i
                                        class="fa fa-angle-right"></i>VGA - CAR ĐỒ HỌA</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/mouse-chuot"><i
                                        class="fa fa-angle-right"></i>MOUSE - CHUỘT</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/loa-tai-nghe"><i
                                        class="fa fa-angle-right"></i>LOA - TAI NGHE</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/fan-led,-fan-cpu"><i
                                        class="fa fa-angle-right"></i>FAN LED, FAN CPU</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/power-bo-nguon"><i
                                        class="fa fa-angle-right"></i>POWER - BỘ NGUỒN</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/man-hinh"><i
                                        class="fa fa-angle-right"></i>M&#192;N H&#204;NH</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/hdd-ssd-o-cung"><i
                                        class="fa fa-angle-right"></i>HDD - SSD - Ổ CỨNG</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/ram-bo-nho"><i
                                        class="fa fa-angle-right"></i>RAM - BỘ NHỚ</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/mainboard-bo-mach-chu"><i
                                        class="fa fa-angle-right"></i>MAINBOARD - BO MẠCH CHỦ</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/vo-thung--case-"><i
                                        class="fa fa-angle-right"></i>VỎ TH&#217;NG - ( CASE )</a>
                            </li>

                        </ul>
                        <li class="n-w br-d" data-class="mcc" data-id="mcc-110" data-click="clickToggle">
                            <a href="/san-pham/may-bo-dell-hp"><i class="fa fa-angle-right"></i>M&#193;Y BỘ DELL -
                                HP</a>

                        </li>
                        <ul class="no-ul mcc" id="mcc-110" style="display:none;">

                        </ul>
                        <li class="n-w br-d" data-class="mcc" data-id="mcc-54" data-click="clickToggle">
                            <a href="/san-pham/may-game-do-hoa"><i class="fa fa-angle-right"></i>M&#193;Y GAME - ĐỒ
                                HỌA</a>

                        </li>
                        <ul class="no-ul mcc" id="mcc-54" style="display:none;">

                        </ul>
                        <li class="n-w br-d" data-class="mcc" data-id="mcc-102" data-click="clickToggle">
                            <a href="/san-pham/laptop-xach-tay"><i class="fa fa-angle-right"></i>LAPTOP X&#193;CH
                                TAY</a>
                            <i class="fa fa-angle-down arrow"></i>

                        </li>
                        <ul class="no-ul mcc" id="mcc-102" style="display:none;">
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/laptop-hp"><i
                                        class="fa fa-angle-right"></i>Laptop Hp</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/laptop-acer"><i
                                        class="fa fa-angle-right"></i>Laptop Acer</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/laptop-lenovo"><i
                                        class="fa fa-angle-right"></i>Laptop Lenovo</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/laptop-sony"><i
                                        class="fa fa-angle-right"></i>Laptop Sony</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/laptop-asus"><i
                                        class="fa fa-angle-right"></i>Laptop Asus</a>
                            </li>
                            <li class="n-w br-d">
                                <a class="pa_l_20 pa_l_20_child" href="/san-pham/laptop-dell"><i
                                        class="fa fa-angle-right"></i>Laptop Dell</a>
                            </li>

                        </ul>
                        <li class="n-w br-d" data-class="mcc" data-id="mcc-73" data-click="clickToggle">
                            <a href="/san-pham/thiet-bi-mang"><i class="fa fa-angle-right"></i>THIẾT BỊ MẠNG </a>

                        </li>
                        <ul class="no-ul mcc" id="mcc-73" style="display:none;">

                        </ul>
                        <li class="n-w br-d" data-class="mcc" data-id="mcc-74" data-click="clickToggle">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac"><i class="fa fa-angle-right"></i>C&#193;C
                                THIẾT BỊ TIN HỌC KH&#193;C</a>

                        </li>
                        <ul class="no-ul mcc" id="mcc-74" style="display:none;">

                        </ul>
                        <li class="n-w br-d" data-class="mcc" data-id="mcc-72" data-click="clickToggle">
                            <a href="/san-pham/camera-quan-sat"><i class="fa fa-angle-right"></i>CAMERA QUAN
                                S&#193;T</a>

                        </li>
                        <ul class="no-ul mcc" id="mcc-72" style="display:none;">

                        </ul>
                        <li class="n-w br-d" data-class="mcc" data-id="mcc-63" data-click="clickToggle">
                            <a href="/san-pham/bao-trom-bao-chay"><i class="fa fa-angle-right"></i>B&#193;O TRỘM -
                                B&#193;O CH&#193;Y</a>

                        </li>
                        <ul class="no-ul mcc" id="mcc-63" style="display:none;">

                        </ul>
                    </ul>
                </div>
                <div class="blog-heading">
                    <i class="fa fa-question"></i> Hỗ trợ khách hàng
                </div>
                <div class="blog-cata-content form-group">
                    <div class="text-center">
                        <b style="margin:10px 0;display:block;">Hỗ trợ đại lý</b>
                        <div class="inl"><a href="tel:0938 114 419"><i class="fa fa-phone"></i> 0938 114 419</a></div>
                        <div class="inl "><a href="#"><img
                                    src="https://www.vitinhtrongthuy.com/assets/frontend/img/skype.png?v=1"></a></div>
                    </div>
                </div>
                <div class="blog-heading">
                    <i class="fa fa-facebook"></i> Fanpage
                </div>
                <div class="form-group">
                    <div id="fb-root"></div>
                    <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=142391655885110";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-page" data-href="https://www.facebook.com/vitinhtrongthuy" data-tabs="timeline"
                        data-height="200" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/vitinhtrongthuy/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/vitinhtrongthuy/">Vi Tính Trọng Thủy</a></blockquote>
                    </div>
                </div>
                <div class="blog-heading"><i class="fa fa-newspaper-o"></i> Tin tức mới</div>
                <div class="blog-cata-content form-group">
                    <div class="form-group">
                        <a href="/tin-tuc/may-tinh-re-nhat-cho-sinh-vien-hien-nay-ben-dep" class="blog-name">
                            M&#225;y t&#237;nh rẻ nhất cho sinh vi&#234;n hiện nay bền đẹp
                        </a>
                        <p class="blog-info">Đăng lúc | 03/07/2020</p>
                    </div>
                    <div class="form-group">
                        <a href="/tin-tuc/bo-vi-tinh-van-phong-gia-re-nhat,-lai-cuc-ben-chi-" class="blog-name">
                            Bộ vi t&#237;nh văn ph&#242;ng gi&#225; rẻ nhất, lại cực bền chỉ 3 triệu đồng/ m&#225;y
                        </a>
                        <p class="blog-info">Đăng lúc | 29/06/2020</p>
                    </div>

                </div>
                <div class="blog-heading">
                    <i class="fa fa-question"></i> Thống Kê Truy Cập
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <div class="onl clear-fix">
                            <b>Online:</b> <span>8</span>
                        </div>
                        <div class="onl clear-fix">
                            <b>Hôm nay:</b> <span>105</span>
                        </div>
                        <div class="onl clear-fix">
                            <b>Tất cả:</b> <span>374,732</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">

                <div class='title-d form-group'>LINH KIỆN M&#193;Y T&#205;NH</div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-gaming-e-dra-egm24f75-24-inch" class="img-products">

                                <img width="193" height="193" alt="M&#224;n h&#236;nh Gaming E-DRA EGM24F75 24 inch"
                                    src="/Upload/Products/710a9eda-07e7-4f08-ba34-0e86040e6a19.webp?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-gaming-e-dra-egm24f75-24-inch" class="title-products">
                                M&#224;n h&#236;nh Gaming E-DRA EGM24F75 24 inch
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,200,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    2,200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/vga-car-do-hoa/vga-zotac-1060-6g" class="img-products">

                                <img width="193" height="193" alt="VGA Zotac 1060-6G"
                                    src="/Upload/Products/87b6b9d6-6d73-4b07-a3b3-335e963eb996.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/vga-car-do-hoa/vga-zotac-1060-6g" class="title-products">
                                VGA Zotac 1060-6G
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,900,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    1,900,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/vga-car-do-hoa/vga-msi-geforce-gtx-1050" class="img-products">

                                <img width="193" height="193" alt="VGA MSI GeForce GTX 1050"
                                    src="/Upload/Products/184c2474-6734-41b2-85e8-86e67a68c9cd.webp?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/vga-car-do-hoa/vga-msi-geforce-gtx-1050" class="title-products">
                                VGA MSI GeForce GTX 1050
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,400,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    1,400,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/vga-car-do-hoa/vga-colorful-geforce-gtx-1050-ti-nb-4g-v"
                                class="img-products">

                                <img width="193" height="193" alt="VGA COLORFUL GEFORCE GTX 1050 TI NB 4G-V"
                                    src="/Upload/Products/6e304931-36e3-4648-8b3a-92fead8e8efc.webp?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/vga-car-do-hoa/vga-colorful-geforce-gtx-1050-ti-nb-4g-v"
                                class="title-products">
                                VGA COLORFUL GEFORCE GTX 1050 TI NB 4G-V
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,700,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    1,700,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/mouse-chuot/chuot-khong-day-newmen-f368-1000dpi" class="img-products">

                                <img width="193" height="193" alt="Chuột kh&#244;ng d&#226;y NEWMEN F368 1000DPI "
                                    src="/Upload/Products/dab29d01-4764-4532-8d13-6f612d33fc9f.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/mouse-chuot/chuot-khong-day-newmen-f368-1000dpi" class="title-products">
                                Chuột kh&#244;ng d&#226;y NEWMEN F368 1000DPI
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    200,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/mouse-chuot/chuot-khong-day-orico-wdm-v2c" class="img-products">

                                <img width="193" height="193" alt="Chuột Kh&#244;ng d&#226;y Orico WDM-V2C"
                                    src="/Upload/Products/511ab397-0b1d-4a73-9181-d3aea7052bf2.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/mouse-chuot/chuot-khong-day-orico-wdm-v2c" class="title-products">
                                Chuột Kh&#244;ng d&#226;y Orico WDM-V2C
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    180,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    180,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/mouse-chuot/chuot-khong-day-a4-tech-fg12" class="img-products">

                                <img width="193" height="193" alt="Chuột kh&#244;ng d&#226;y A4 Tech FG12"
                                    src="/Upload/Products/4162871c-bd5b-4275-b02c-c2eb3d935dbf.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/mouse-chuot/chuot-khong-day-a4-tech-fg12" class="title-products">
                                Chuột kh&#244;ng d&#226;y A4 Tech FG12
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    220,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    220,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/mouse-chuot/chuọt-khong-day-eblue-ems816-usb-wireless"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="Chu&#244;̣t kh&#244;ng d&#226;y Eblue EMS816 (USB-Wireless)"
                                    src="/Upload/Products/322f1c71-2614-4888-a6da-88826601ede1.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/mouse-chuot/chuọt-khong-day-eblue-ems816-usb-wireless"
                                class="title-products">
                                Chu&#244;̣t kh&#244;ng d&#226;y Eblue EMS816 (USB-Wireless)
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    150,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    150,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class='title-d form-group'>M&#193;Y BỘ DELL - HP</div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-bo-dell-hp/barebonemay-tinh-hp-800g1-usdt-i5-4460-,-ram-8g-,-"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="Barebonem&#225;y t&#237;nh HP 800G1 USDT : I5 4460 , Ram 8G , SSD 240G"
                                    src="/Upload/Products/c30eecf0-b6fe-4207-a1db-12bcac794384.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-bo-dell-hp/barebonemay-tinh-hp-800g1-usdt-i5-4460-,-ram-8g-,-"
                                class="title-products">
                                Barebonem&#225;y t&#237;nh HP 800G1 USDT : I5 4460 , Ram 8G , SSD 240G
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    2,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-bo-dell-hp/barebone-may-tinh-hp-800g1-usdt-i3-4150-,-ram-8g-,"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="Barebone  m&#225;y t&#237;nh HP 800G1 USDT :I3 4150 , ram 8G , SSD 240G"
                                    src="/Upload/Products/91dc0942-ea55-4a2e-9154-71863776aeb7.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-bo-dell-hp/barebone-may-tinh-hp-800g1-usdt-i3-4150-,-ram-8g-,"
                                class="title-products">
                                Barebone m&#225;y t&#237;nh HP 800G1 USDT :I3 4150 , ram 8G , SSD 240G
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,300,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    2,300,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-bo-dell-hp/hp-800g3-sff-790" class="img-products">

                                <img width="193" height="193" alt="HP 800G3 SFF "
                                    src="/Upload/Products/f80edb5d-c244-4761-a225-575d2cdd1984.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-bo-dell-hp/hp-800g3-sff-790" class="title-products">
                                HP 800G3 SFF
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    5,000,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    5,000,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-bo-dell-hp/hp-800g3-sff-cpu-i5" class="img-products">

                                <img width="193" height="193" alt="HP 800G3 SFF cpu i5"
                                    src="/Upload/Products/5697013d-d290-4e28-aff2-2d265713b17d.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-bo-dell-hp/hp-800g3-sff-cpu-i5" class="title-products">
                                HP 800G3 SFF cpu i5
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    3,000,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    3,000,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-bo-dell-hp/may-bo-dell-7040-i3-6100" class="img-products">

                                <img width="193" height="193" alt="M&#225;y bộ Dell 7040 I3 6100"
                                    src="/Upload/Products/7b7e2abf-6ec0-44a5-b062-d4b5b032986e.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-bo-dell-hp/may-bo-dell-7040-i3-6100" class="title-products">
                                M&#225;y bộ Dell 7040 I3 6100
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,800,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    2,800,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-bo-dell-hp/may-bo-hp-800g2-cpu-i3-6100" class="img-products">

                                <img width="193" height="193" alt="M&#225;y bộ Hp 800G2 cpu i3 6100"
                                    src="/Upload/Products/abac7b2f-d053-48d3-85ea-c861b2cdb944.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-bo-dell-hp/may-bo-hp-800g2-cpu-i3-6100" class="title-products">
                                M&#225;y bộ Hp 800G2 cpu i3 6100
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,800,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    2,800,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-bo-dell-hp/may-bo-dell-3020mt-i3-4150--thung-to-"
                                class="img-products">

                                <img width="193" height="193" alt="M&#225;y bộ Dell 3020MT I3 4150 ( th&#249;ng to )"
                                    src="/Upload/Products/71e9318e-1741-4a25-8ecc-4946589ccbe2.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-bo-dell-hp/may-bo-dell-3020mt-i3-4150--thung-to-"
                                class="title-products">
                                M&#225;y bộ Dell 3020MT I3 4150 ( th&#249;ng to )
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,000,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    2,000,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-bo-dell-hp/may-bo-dell-3020sff-i7-4770" class="img-products">

                                <img width="193" height="193" alt="M&#225;y bộ Dell 3020sff  i7 4770"
                                    src="/Upload/Products/d989a047-f231-47b1-adac-f50b674751fc.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-bo-dell-hp/may-bo-dell-3020sff-i7-4770" class="title-products">
                                M&#225;y bộ Dell 3020sff i7 4770
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    4,000,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    4,000,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class='title-d form-group'>M&#193;Y GAME - ĐỒ HỌA</div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-game-do-hoa/pc-gamer-9100f,-ram-8g,-vga-1660-super-6g-chuyen-g"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="PC Gamer 9100f, ram 8G, vga 1660 super/ 6G chuy&#234;n games"
                                    src="/Upload/Products/b38f7b77-33a5-4a42-be0a-661185f989ab.webp?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-game-do-hoa/pc-gamer-9100f,-ram-8g,-vga-1660-super-6g-chuyen-g"
                                class="title-products">
                                PC Gamer 9100f, ram 8G, vga 1660 super/ 6G chuy&#234;n games
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    7,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    7,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-game-do-hoa/pc-gamer-cau-hinh-cao-i5-10400f,-b460m-aorus,-ram-"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="PC Gamer cấu h&#236;nh cao: i5 10400F, B460M Aorus, Ram 16G RGB..."
                                    src="/Upload/Products/72610489-0514-414c-8ae7-085a3462d672.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-game-do-hoa/pc-gamer-cau-hinh-cao-i5-10400f,-b460m-aorus,-ram-"
                                class="title-products">
                                PC Gamer cấu h&#236;nh cao: i5 10400F, B460M Aorus, Ram 16G RGB...
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    12,000,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    12,000,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-game-do-hoa/pc-gamer-,-xeon-1231v3-~-i7-4770-,-ram-16g-,-ssd-1"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="PC Gamer , Xeon 1231V3 ~ I7 4770 , Ram 16G , ssd 120G."
                                    src="/Upload/Products/2312cb29-fe9c-4bca-b749-9111f1c62017.jfif?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-game-do-hoa/pc-gamer-,-xeon-1231v3-~-i7-4770-,-ram-16g-,-ssd-1"
                                class="title-products">
                                PC Gamer , Xeon 1231V3 ~ I7 4770 , Ram 16G , ssd 120G.
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    7,900,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    7,900,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-game-do-hoa/pc-cau-hinh-cao-,-chuyen-game-,-do-hoa-i5-9400-,-v"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="PC cấu h&#236;nh cao , chuy&#234;n game , đồ hoạ I5 9400 , vga gtx 1660 / 6G supper"
                                    src="/Upload/Products/d249e88e-0b24-425d-a73b-9145a6245d27.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-game-do-hoa/pc-cau-hinh-cao-,-chuyen-game-,-do-hoa-i5-9400-,-v"
                                class="title-products">
                                PC cấu h&#236;nh cao , chuy&#234;n game , đồ hoạ I5 9400 , vga gtx 1660 / 6G supper
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    10,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    10,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-game-do-hoa/pc-gammer-cpu-12400f-+-vga-1660-super-6g"
                                class="img-products">

                                <img width="193" height="193" alt="Pc Gammer CPU 12400F + VGA 1660 Super/6G"
                                    src="/Upload/Products/370d1f72-2fe6-4a69-bd70-103029e60c5a.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-game-do-hoa/pc-gammer-cpu-12400f-+-vga-1660-super-6g"
                                class="title-products">
                                Pc Gammer CPU 12400F + VGA 1660 Super/6G
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    11,000,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    11,000,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-game-do-hoa/pc-van-phong-i5-4570" class="img-products">

                                <img width="193" height="193" alt="PC văn ph&#242;ng i5 4570 "
                                    src="/Upload/Products/47862d6c-a993-469a-88fa-3557e096ffd2.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-game-do-hoa/pc-van-phong-i5-4570" class="title-products">
                                PC văn ph&#242;ng i5 4570
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    2,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-game-do-hoa/pc-games-cpu-i7-8700-9700f" class="img-products">

                                <img width="193" height="193" alt="PC Games  cpu i7 8700 - 9700F"
                                    src="/Upload/Products/b3ebc4f9-b095-4afe-8b92-ac1cfe7b117f.webp?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-game-do-hoa/pc-games-cpu-i7-8700-9700f" class="title-products">
                                PC Games cpu i7 8700 - 9700F
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    11,000,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    11,000,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/may-game-do-hoa/pc-games-i3-9100f,-vga-1050,-ram-8g"
                                class="img-products">

                                <img width="193" height="193" alt="Pc Games i3 9100F, Vga 1050, Ram 8G"
                                    src="/Upload/Products/b405e49f-4fc5-469b-b3b5-69b8ee1d4728.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/may-game-do-hoa/pc-games-i3-9100f,-vga-1050,-ram-8g"
                                class="title-products">
                                Pc Games i3 9100F, Vga 1050, Ram 8G
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    5,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    5,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class='title-d form-group'>LAPTOP X&#193;CH TAY</div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/laptop-hp/laptop-hp-640-g2,-ram-8g,-cpu-i5-6300u" class="img-products">

                                <img width="193" height="193" alt="Laptop Hp 640 G2, Ram 8G, cpu i5 6300U"
                                    src="/Upload/Products/ec6f8c1e-3d46-483a-9489-11b1a8feef91.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/laptop-hp/laptop-hp-640-g2,-ram-8g,-cpu-i5-6300u" class="title-products">
                                Laptop Hp 640 G2, Ram 8G, cpu i5 6300U
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    5,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    5,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/laptop-hp/laptop-hp-450-g3,-ram-8g,-cpu-i5-6200u" class="img-products">

                                <img width="193" height="193" alt="Laptop Hp 450 G3, Ram 8G, cpu i5 6200U"
                                    src="/Upload/Products/0b51e2ee-7419-4781-9e6f-d8653ca50d7a.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/laptop-hp/laptop-hp-450-g3,-ram-8g,-cpu-i5-6200u" class="title-products">
                                Laptop Hp 450 G3, Ram 8G, cpu i5 6200U
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    6,000,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    6,000,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/laptop-dell/dell-latitude-e5540-i3-4030u-,-ram-4g-,ssd-240g-,-"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="Dell Latitude E5540  I3 4030U , Ram 4G ,SSD 240G , Pin tr&#226;u"
                                    src="/Upload/Products/1b8ec9b4-f7f8-4a88-926e-07263276e182.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/laptop-dell/dell-latitude-e5540-i3-4030u-,-ram-4g-,ssd-240g-,-"
                                class="title-products">
                                Dell Latitude E5540 I3 4030U , Ram 4G ,SSD 240G , Pin tr&#226;u
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    5,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    5,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/laptop-hp/laptop-hp-840-g3-i5-6300u,-ram-8g-ssd-256g"
                                class="img-products">

                                <img width="193" height="193" alt="Laptop Hp 840 G3 I5 6300U, Ram 8G SSD 256G"
                                    src="/Upload/Products/62cfc3fd-1cd2-49a6-b8f0-2bb134ce5988.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/laptop-hp/laptop-hp-840-g3-i5-6300u,-ram-8g-ssd-256g"
                                class="title-products">
                                Laptop Hp 840 G3 I5 6300U, Ram 8G SSD 256G
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    6,000,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    6,000,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/laptop-dell/laptop-dell-latitude-e7390-core-i5-8350u-8g-256g"
                                class="img-products">

                                <img width="193" height="193" alt="Laptop Dell Latitude E7390 - Core i5-8350U/8G/256G"
                                    src="/Upload/Products/069ed1c0-1c64-4f77-af6e-3c4a90fbac16.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/laptop-dell/laptop-dell-latitude-e7390-core-i5-8350u-8g-256g"
                                class="title-products">
                                Laptop Dell Latitude E7390 - Core i5-8350U/8G/256G
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    6,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    6,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/laptop-hp/laptop-hp-450-g2-cpu-i5" class="img-products">

                                <img width="193" height="193" alt="Laptop HP 450 G2 Cpu i5 "
                                    src="/Upload/Products/54a6f9e1-c893-47c1-b4e9-58341f0c9523.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/laptop-hp/laptop-hp-450-g2-cpu-i5" class="title-products">
                                Laptop HP 450 G2 Cpu i5
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    5,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    5,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/laptop-hp/laptop-hp-probook-450-g3-core-i5-6200u" class="img-products">

                                <img width="193" height="193" alt="Laptop HP ProBook 450 G3 Core i5-6200U"
                                    src="/Upload/Products/58db50fe-9663-4af8-b8f9-1b9a944f27b4.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/laptop-hp/laptop-hp-probook-450-g3-core-i5-6200u" class="title-products">
                                Laptop HP ProBook 450 G3 Core i5-6200U
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    6,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    6,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/laptop-hp/laptop-hp-640-g1-cpu-i5-4200" class="img-products">

                                <img width="193" height="193" alt="Laptop HP 640 G1 cpu i5 4200"
                                    src="/Upload/Products/8afc0a13-f539-4b15-b49e-e394904ec7ab.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/laptop-hp/laptop-hp-640-g1-cpu-i5-4200" class="title-products">
                                Laptop HP 640 G1 cpu i5 4200
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    4,500,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    4,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class='title-d form-group'>THIẾT BỊ MẠNG </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/thiet-bi-mang/card-mang-khong-day-pci-express-tp-link-tl-wn881nd"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="CARD MẠNG KH&#212;NG D&#194;Y PCI EXPRESS TP-LINK TL-WN881ND WIRELESS N300MBPS"
                                    src="/Upload/Products/beaeeb70-b3e8-4518-983d-c7651c316d12.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/thiet-bi-mang/card-mang-khong-day-pci-express-tp-link-tl-wn881nd"
                                class="title-products">
                                CARD MẠNG KH&#212;NG D&#194;Y PCI EXPRESS TP-LINK TL-WN881ND WIRELESS N300MBPS
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    200,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/thiet-bi-mang/tenda-u2-la-usb-thu-wifi-chuan-n" class="img-products">

                                <img width="193" height="193" alt="Tenda U2 l&#224; USB thu Wifi chuẩn N"
                                    src="/Upload/Products/55b99cbe-c1ba-4200-a3cd-58cc4570b3ed.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/thiet-bi-mang/tenda-u2-la-usb-thu-wifi-chuan-n" class="title-products">
                                Tenda U2 l&#224; USB thu Wifi chuẩn N
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    200,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/thiet-bi-mang/card-wireless-n-usb-tp-link-tl-wn722n-150mbps"
                                class="img-products">

                                <img width="193" height="193" alt="Card Wireless N USB TP-Link TL-WN722N- 150Mbps"
                                    src="/Upload/Products/51caea0d-a57c-4f8e-b4f8-24ac89068152.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/thiet-bi-mang/card-wireless-n-usb-tp-link-tl-wn722n-150mbps"
                                class="title-products">
                                Card Wireless N USB TP-Link TL-WN722N- 150Mbps
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    250,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    250,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class='title-d form-group'>C&#193;C THIẾT BỊ TIN HỌC KH&#193;C</div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/bo-chia-usb-30-ra-4-cong" class="img-products">

                                <img width="193" height="193" alt="Bộ chia USB 3.0 ra 4 cổng "
                                    src="/Upload/Products/056ee357-ba0f-42fe-9a90-eda3e3a6eb09.jpeg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/bo-chia-usb-30-ra-4-cong"
                                class="title-products">
                                Bộ chia USB 3.0 ra 4 cổng
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    100,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    100,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/loa-vi-tinh-kisonli-v360" class="img-products">

                                <img width="193" height="193" alt="Loa vi t&#237;nh Kisonli V360"
                                    src="/Upload/Products/7067e4e8-fbb8-4107-98e0-18526829a972.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/loa-vi-tinh-kisonli-v360"
                                class="title-products">
                                Loa vi t&#237;nh Kisonli V360
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    100,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    100,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/day-cable-loa-1-dau-35-ra-2-av-dai-1m8"
                                class="img-products">

                                <img width="193" height="193" alt="D&#226;y cable loa 1 đầu 3.5 ra 2 AV d&#224;i 1m8"
                                    src="/Upload/Products/1e5875ca-1903-49fd-b5e2-6dc12c34c63c.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/day-cable-loa-1-dau-35-ra-2-av-dai-1m8"
                                class="title-products">
                                D&#226;y cable loa 1 đầu 3.5 ra 2 AV d&#224;i 1m8
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    50,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    50,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/cap-chuyen-doi-displayport-sang-hdmi"
                                class="img-products">

                                <img width="193" height="193" alt="c&#225;p chuyển đổi displayport sang hdmi"
                                    src="/Upload/Products/c5f6591c-bf37-4c66-9463-06a2cd0dd1e9.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/cap-chuyen-doi-displayport-sang-hdmi"
                                class="title-products">
                                c&#225;p chuyển đổi displayport sang hdmi
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    80,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    80,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/cuc-sac-man-hinh-samsung-,-lg"
                                class="img-products">

                                <img width="193" height="193" alt="Cục sạc m&#224;n h&#236;nh samsung , LG"
                                    src="/Upload/Products/397b2830-5f35-4f1e-be80-6882bae4d32c.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/cuc-sac-man-hinh-samsung-,-lg"
                                class="title-products">
                                Cục sạc m&#224;n h&#236;nh samsung , LG
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    250,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    250,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/day-display-port-1m5" class="img-products">

                                <img width="193" height="193" alt="D&#226;y Display port 1m5"
                                    src="/Upload/Products/d5cb51ab-f3e0-4788-b746-9597a60bae88.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/day-display-port-1m5" class="title-products">
                                D&#226;y Display port 1m5
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    100,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    100,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/lot-chuot-razer-size-nho" class="img-products">

                                <img width="193" height="193" alt="L&#243;t chuột Razer size nhỏ"
                                    src="/Upload/Products/0339a2ae-89fa-4940-904f-1e44915f082a.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/lot-chuot-razer-size-nho"
                                class="title-products">
                                L&#243;t chuột Razer size nhỏ
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    40,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    40,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/lot-chuot-dareu-101-black"
                                class="img-products">

                                <img width="193" height="193" alt="L&#243;t chuột dareu 101 black"
                                    src="/Upload/Products/dfcc89e7-6b8d-4e81-9714-1de5441a3900.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/lot-chuot-dareu-101-black"
                                class="title-products">
                                L&#243;t chuột dareu 101 black
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    100,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    100,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class='title-d form-group'>CAMERA QUAN S&#193;T</div>
                <div></div>

                <div class='title-d form-group'>B&#193;O TRỘM - B&#193;O CH&#193;Y</div>
                <div></div>



            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 hidden-xs">
                    <h4>Đăng ký nhận tin hoặc tư vấn miễn phí</h4>
                </div>
                <div class="col-md-5 col-sm-6">
                    <table class="form-dangki">
                        <tr>
                            <td>
                                <input type="text" id="txt-dangki" placeholder="Vui lòng nhập email của bạn"
                                    class="dangki" />
                            </td>
                            <td>
                                <button type="button" class="register">Đăng ký</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs foo-phone">
                    <i class="fa fa-microphone"></i> <a href="#" class="dps-ht" style="color:#fff;" id="dps-tel"
                        data-id="1" data-type="2"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="upfooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="dps-ht" id="dps-ht-lienhe" data-id="5" data-type="1"></div>
                </div>
                <div class="col-sm-2">
                    <h3>GIỚI THIỆU CHUNG</h3>
                    <ul class="no-ul">
                        <li><a href="/gioi-thieu">Giới thiệu</a></li>
                        <li><a href="/san-pham">Sản phẩm</a></li>
                        <li><a href="/tin-tuc">Tin tức</a></li>
                        <li><a href="/lien-he">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3>CHÍNH SÁCH CHUNG</h3>
                    <ul class="no-ul">
                        <li><a href="/chinh-sach/huong-dan-thanh-toan">Hướng dẫn thanh to&#225;n</a></li>
                        <li><a href="/chinh-sach/chinh-sach-bao-hanh">CH&#205;NH S&#193;CH BẢO H&#192;NH</a></li>
                        <li><a href="/chinh-sach/ban-bao-gia-thu-mua-linh-kien-cu">BẢN B&#193;O GI&#193; THU MUA LINH
                                KIỆN CŨ</a></li>

                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3>HÌNH THỨC THANH TOÁN</h3>
                    <img width="242" height="122" alt="Payment" title="Payment"
                        src="https://www.vitinhtrongthuy.com/assets/frontend/img/pay.png?v=1" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="jsLienhe" name="jsLienhe"
        value='[{"SetId":1,"SettingId":"Hotline","SettingValue":"0938 114 419","SettingContent":""},{"SetId":2,"SettingId":"Email","SettingValue":"trongthuycomputer@gmail.com","SettingContent":""},{"SetId":4,"SettingId":"Địa chỉ","SettingValue":"SỐ 38, ĐƯỜNG TA15, THỚI AN, QUẬN 12, TP HCM","SettingContent":"<div class=\"footer-info\">            <div class=\"company\">VI TÍNH TRỌNG THỦY</div>\n\n            <p>SỐ 38, ĐƯỜNG TA15, THỚI AN, QUẬN 12, TP HCM</p>\n\n                <p>Tel: 0938 114 419</p>\n\n                <p>Email: trongthuycomputer@gmail.com</p>\n\n        </div>"},{"SetId":5,"SettingId":"Địa chỉ liên hệ ở footer","SettingValue":"VI TÍNH TRỌNG THỦY","SettingContent":"<div class=\"footer-info\">            <div style=\"margin-top:0;margin-bottom:20px;font-weight: bold;font-size:15px\">VI TÍNH TRỌNG THỦY</div>            <p><span style=\"font-weight: bold;\">SỐ 38, ĐƯỜNG TA15, THỚI AN, QUẬN 12, TP HCM</span></p>                <p><span style=\"font-weight: bold;\">Tel: 0938 114 419</span></p>                <p><span style=\"font-weight: bold;\">Email: trongthuycomputer@gmail.com</span></p>        </div>"},{"SetId":6,"SettingId":"Facebook","SettingValue":"Ho Van Trong","SettingContent":"<p><a href=\"https://www.facebook.com/trong.v.ho.5\" target=\"_blank\">https://www.facebook.com/trong.v.ho.5</a><br></p>"}]' />
    <a href="#" class="backtotop" id="back-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <script src="{{ asset('assets/frontend/js/slick/slick.min.js') }}?v=1"></script>
    <script src="{{ asset('assets/frontend/js/slick/truot.js') }}?v=1"></script>
    <script src="{{ asset('assets/frontend/js/jquery.bxslider/jquery.bxslider.min.js') }}?v=1"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        if ($(".dps-ht").length > 0) {
            $(".dps-ht").each(function() {
                var _id = $(this).attr("id");
                var curId = $(this).attr("data-id");
                var _ty = $(this).attr("data-type");
                var _su = $(this).attr("data-subT");
                var data = JSON.parse($("#jsLienhe").val().toString());
                var data_length = Object.keys(data).length;
                for (var i = 0; i < data_length; i++) {
                    if (data[i] != '') {
                        if (data[i].SetId == curId) {
                            if (_ty == "1") {
                                $("#" + _id).html(data[i].SettingContent);
                            } else if (_ty == "2") {
                                $("#" + _id).html(data[i].SettingValue);
                                $("#" + _id).attr("href", "tel:" + data[i].SettingValue.toString()
                                    .replaceAll(".", "").replaceAll(" ", ""));
                            } else if (_ty == "22") {
                                $("#" + _id).html(
                                    "<i class=\"fa fa-phone\"></i><span class=\"text-danger\">" +
                                    data[i].SettingValue + "</span>");
                                $("#" + _id).attr("href", "tel:" + data[i].SettingValue.toString()
                                    .replaceAll(".", "").replaceAll(" ", ""));
                            } else if (_ty == "4") {
                                $("#" + _id).html("<i class=\"fa fa-envelope\"></i> " + data[i]
                                    .SettingValue);
                                $("#" + _id).attr("href", "mailto:" + data[i].SettingValue.toString());
                            } else if (_ty == "3") {
                                $("#" + _id).html(_su + data[i].SettingValue);
                            } else if (_ty == "5") {
                                $("#" + _id).attr("alt", data[i].SettingValue);
                                $("#" + _id).attr("title", data[i].SettingValue);
                            }
                            break;
                        }
                    }
                }
            });
        }
    });
    $("*[data-click='clickToggle']").click(function() {
        var strClass = $(this).attr("data-class");
        var strId = $(this).attr("data-id");
        $("." + strClass).slideUp();
        $("#" + strId).slideDown();
        $(this).find(".arrow").toggleClass("fa-angle-down");
        $(this).find(".arrow").toggleClass("fa-angle-up");
    });
    $('.bxslider').bxSlider({
        mode: 'horizontal',
        captions: true,
        adaptiveHeight: true,
        auto: true,
    });
    $(".search-reg button").click(function() {
        var txtsearch = $(".search-reg #txt-search").val();
        window.location.href = "/tim-kiem?seachtext=" + txtsearch;
    });
    $(".register").click(function() {
        var emaildangki = $("#txt-dangki").val();
        if (emaildangki.length == 0) {
            alert("Cần nhập vào email đầy đủ");
            return;
        }
        $.ajax({
            url: '/dang-ki-email',
            data: '_strEmail=' + emaildangki,
            dataType: 'text',
            type: 'GET',
            cache: false,
            success: function(result) {
                if (result == "1") {
                    alert("Đã đăng kí thông tin gửi thành công");
                    $("#txt-dangki").val('');
                } else {
                    alert("Có lỗi từ hệ thống");
                }
            }
        });
    });
    $("*[data-click='clickToggle']:first").click();
    </script>



</div>