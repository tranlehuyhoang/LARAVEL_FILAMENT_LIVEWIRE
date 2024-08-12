<div>
    <link
        href="{{ asset('assets/frontend/font-awesome/font-awesome-4.3.0/font-awesome-4.3.0/css/font-awesome.min.css') }}?v=12082024"
        rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/main.css') }}?v=12082024" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/bootstrap/css/bootstrap.min.css') }}?v=12082024" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/js/slick/slick.css') }}?v=1" rel="stylesheet" />
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
    <div class="form-group"></div>
    <div class="container">

        <div class="row">
            <div class="col-md-3" id="firstDiv">
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
                            <b>Online:</b> <span>7</span>
                        </div>
                        <div class="onl clear-fix">
                            <b>Hôm nay:</b> <span>111</span>
                        </div>
                        <div class="onl clear-fix">
                            <b>Tất cả:</b> <span>374,738</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9" id="secondDiv">
                


                <style type="text/css">
                    .tieude-d{
                        border-bottom:3px #ff0000 solid;
                        color:#333;display:inline-block;padding:10px 0;
                    }
                </style>
                <div class="form-group"><big class="tieude-d"><b>Giỏ hàng</b></big></div>
                <div id="showcart"> <table class="table"><thead><tr><th>Tên hàng</th><th>Số lượng</th><th>Đơn giá</th><th>Thành tiền</th><th></th></tr></thead><tbody><tr><td>Chuột không dây NEWMEN F368 1000DPI </td><td><input type="text" onchange="javascript:UpdateCart('0')" data-id="0" value="1" class="dd form-control input-sm" style="max-width:80px;"></td><td>200,000</td><td><b>200,000</b></td><td><a href="javascript:DeleteShpCrt('0')"><i class="fa fa-times fa-lg"></i></a></td></tr><tr><td>Màn hình Gaming E-DRA EGM24F75 24 inch</td><td><input type="text" onchange="javascript:UpdateCart('1')" data-id="1" value="100" class="dd form-control input-sm" style="max-width:80px;"></td><td>2,200,000</td><td><b>220,000,000</b></td><td><a href="javascript:DeleteShpCrt('1')"><i class="fa fa-times fa-lg"></i></a></td></tr></tbody></table><ul class="list2"><li><span>Tổng tiền: </span><b class="text-danger">220,200,000 VNĐ </b></li></ul></div>
                <div class="" id="regtongtin">
                    <div class="form-group"><big class="tieude-d"><b>Nhập thông tin đơn hàng</b></big></div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody><tr><td><label>Họ Tên</label></td><td><input type="text" id="name" class="form-control input-sm"></td></tr>
                            <tr><td><label>Địa chỉ</label></td><td><input type="text" id="address" class="form-control input-sm"></td></tr>
                            <tr><td><label>Email</label></td><td><input type="text" id="email" class="form-control input-sm"></td></tr>
                            <tr><td><label>Điện thoại</label></td><td><input type="text" id="phone" class="form-control input-sm"></td></tr>
                            <tr><td><label>Ghi chú</label></td><td><textarea id="txtcontent" class="form-control input-sm"></textarea></td></tr>
                            <tr><td class="text-right" colspan="2"><input type="button" value="Gửi thông tin đơn hàng" class="btn btn-primary" onclick="SendInfo()"></td></tr>
                        </tbody></table>
                    </div>
                </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            LoadBigCart();
                        });
                        function isNumber(evt) {
                            evt = (evt) ? evt : window.event;
                            var charCode = (evt.which) ? evt.which : evt.keyCode;
                            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                                return false;
                            }
                            return true;
                        }
                        function UpdateCart(i) {
                            var val = $("input[data-id='" + i + "']").val();
                            if (!isNumber(val))
                            { return; }
                            $.ajax({
                                url: '/Tool/UpdateShopCart.aspx',
                                data: 'num=' + i + "&val=" + val,
                                dataType: 'text',
                                type: 'GET',
                                cache: false,
                                success: function (result) {
                                    if (result == "1") {
                                        LoadBigCart();
                                    }
                                }
                            });
                        }
                        function SendInfo() {
                            var strName = $("#name").val();
                            if (strName.length == 0)
                            {
                                $("#name").focus(); return;
                            }
                            var strEmail = $("#email").val();
                            if ((strEmail.length == 0)||(!validateEmail(strEmail)))
                            {
                                alert("Cần nhập email cho phù hợp"); $("#email").focus(); return;
                            }
                            var strPhone = $("#phone").val();
                            if ((strPhone.length == 0) || (!validateFone(strPhone))) {
                                alert("Cần nhập điện thoại cho phù hợp"); $("#phone").focus(); return;
                            }
                            var strAddress = $("#address").val();
                            if (strAddress.length == 0)
                            {
                                alert("Cần nhập đầy đủ địa chỉ"); return;
                            }
                            $.ajax({
                                url: '/themdonhang',
                                data: 'strName=' + strName + "&strEmail=" + strEmail + '&strAddress=' + strAddress + '&strPhone=' + strPhone + '&strNote=' + $("#txtcontent").val(),
                                dataType: 'text',
                                type: 'GET',
                                cache: false,
                                success: function (result) {
                                    if (result == "1") {
                                        alert("Đặt hàng thành công");
                                        window.location.href = "/";
                                    }
                                }
                            });
                        }
                    </script>
                    <script src="/assets/frontend/js/shopcart/elnino.shopcart.js"></script>
                    <script src="/assets/frontend/js/validate/validate.js"></script>
                
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


    <script type="text/javascript">
    $(document).ready(function() {
        if ($(document).width() < 991) {
            $('#secondDiv').insertBefore('#firstDiv');
        }
    });
    </script>

</div>