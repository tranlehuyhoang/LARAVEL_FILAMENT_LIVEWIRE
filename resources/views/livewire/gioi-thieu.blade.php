<div>

    <link
        href="https://www.vitinhtrongthuy.com/gioi-thieu/assets/frontend/font-awesome/font-awesome-4.3.0/font-awesome-4.3.0/css/font-awesome.min.css?v=12082024"
        rel="stylesheet" />
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
            if ((url == (this.href.toLowerCase())) || (url.indexOf(this.href.toLowerCase())) != -
                1) {
                $(this).addClass("active-link");
            }

        });
    });
    </script>
    <div id="numcart1" class="hide"></div>
    <div class="hide" itemscope itemtype="http://schema.org/LocalBusiness">
        <div itemprop="name">Vi Tính Hoàng Tin - Chuẩn đoán và khắc phục dùm Quý khách trong thời gian nhanh nhất
            có
            thể
            với giá cả phải chăng</div>
        <p itemprop="descripton">
            Chúng tôi là một cửa hàng tin học, chuyên bán linh kiện vi tính, laptop, máy bộ văn phòng trường học
            quán
            net vv...
            Ngoài ra chúng tôi nhận thu mua thanh lý máy tính - laptop , thiết bị tin học công ty , quán net với
            giá
            thu
            mua cao, hoa hồng cho người giới thiệu. CHỈ TIÊU YÊU CẦU MÀ CHÚNG TÔI ĐỀ RA: Chỉ tiêu bán hàng: Hàng
            chuẩn,
            chất lượng, chính hãng, bảo hành 1 đổi 1 uy tín, giao hàng tận nơi trong nội thành và các tỉnh toàn
            quốc...
            Cách thức mua hàng, thanh lý: Trực tiếp đến tận nơi kiểm tra, test nhanh gọn, tiền mặt hoặc chuyển
            khoản
            liền nhanh nhất cho khách hàng...Với sự nhiệt huyết yêu nghề nghiệp, phúc vụ tận tính cho khách hàng,
            chúng
            tồi quyết tâm chăm sóc khách hàng tốt nhất. vừa long khách đến vừa lòng khách đi. Sự tin tưởng và ủng
            hộ
            của
            khách hàng trong suốt thời gian qua là nguồn động viên to lớn trên bước đường phát triển của Vi Tính
            Trọng
            Thủy. Chúng tôi xin hứa sẽ không ngừng hoàn thiện, phục vụ khách hàng tốt nhất để luôn xứng đáng với
            niềm
            tin ấy."
        </p>
        <p>Phone: <span itemprop="telephone" content="0938 114 419">0938 114 419</span></p>
        <address itemscope itemtype="http://schema.org/PostalAddress" itemprop="address">
            <span itemprop="streetAddress">SỐ 12, ĐƯỜNG TA15, THỚI AN, QUẬN 12, TP HCM</span>
            <span itemprop="addressLocality">QUẬN 12</span>,
            <span itemprop="addressRegion">TP HCM</span>
        </address>
    </div>
    @livewire('partials.menu')
    <div class="form-group"></div>
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Giới thiệu</li>
        </ol>

        <div class="row">
            @livewire('partials.sidebar')
            <div class="col-md-9" id="secondDiv">


                <div class="title-d form-group">Giới thiệu</div>
                <div class="news-detail form-group">
                    <ul>
                        <li class="tr_bq"><span style="font-size: 12pt; color: #0000ff;"><strong>Vi T&iacute;nh
                                    Trọng
                                    Thủy được th&agrave;nh lập th&aacute;ng 10 năm 2010.&nbsp;</strong></span></li>
                        <li class="tr_bq"><span style="font-size: 12pt;"><strong>Ch&uacute;ng t&ocirc;i l&agrave;
                                    một
                                    cửa h&agrave;ng tin học, chuy&ecirc;n b&aacute;n linh kiện vi t&iacute;nh,
                                    laptop,
                                    m&aacute;y bộ văn ph&ograve;ng trường học qu&aacute;n net vv...</strong></span>
                        </li>
                        <li class="tr_bq"><span style="font-size: 12pt;"><strong>Ngo&agrave;i ra ch&uacute;ng
                                    t&ocirc;i
                                    nhận thu mua thanh l&yacute; m&aacute;y t&iacute;nh - laptop , thiết bị tin học
                                    c&ocirc;ng ty , qu&aacute;n net với gi&aacute; thu mua cao, hoa hồng cho người
                                    giới
                                    thiệu.</strong></span></li>
                        <li><strong>*********************************************************************************</strong>
                        </li>
                        <li><span style="font-size: 12pt;"><span style="color: #0000ff;"><strong>CHỈ TI&Ecirc;U
                                        Y&Ecirc;U CẦU M&Agrave; CH&Uacute;NG T&Ocirc;I ĐỀ
                                        RA:</strong></span></span>
                        </li>
                        <li><span style="font-size: 12pt; color: #ff0000;"><em><strong>Chỉ ti&ecirc;u b&aacute;n
                                        h&agrave;ng: H&agrave;ng chuẩn, &nbsp;chất lượng, ch&iacute;nh h&atilde;ng,
                                        bảo
                                        h&agrave;nh 1 đổi 1 uy t&iacute;n, giao h&agrave;ng tận nơi trong nội
                                        th&agrave;nh v&agrave; c&aacute;c tỉnh to&agrave;n
                                        quốc...</strong></em></span>
                        </li>
                        <li class="tr_bq"><span style="font-size: 12pt; color: #ff0000;"><em><strong>C&aacute;ch
                                        thức
                                        mua h&agrave;ng, thanh l&yacute;: Trực tiếp đến tận nơi kiểm tra, test
                                        nhanh
                                        gọn, tiền mặt hoặc chuyển khoản liền nhanh nhất cho kh&aacute;ch
                                        h&agrave;ng...</strong></em></span></li>
                        <li class="tr_bq"><span style="font-size: 12pt;"><strong>Với sự nhiệt huyết y&ecirc;u nghề
                                    nghiệp, phục vụ tận t&igrave;nh cho kh&aacute;ch h&agrave;ng, ch&uacute;ng tồi
                                    quyết
                                    t&acirc;m chăm s&oacute;c kh&aacute;ch h&agrave;ng tốt nhất, vui l&ograve;ng
                                    kh&aacute;ch đến, vừa l&ograve;ng kh&aacute;ch đi.</strong></span></li>
                        <li class="tr_bq"><span style="font-size: 12pt;"><strong>Sự tin tưởng v&agrave; ủng hộ của
                                    kh&aacute;ch h&agrave;ng trong suốt thời gian qua l&agrave; nguồn động
                                    vi&ecirc;n
                                    to
                                    lớn tr&ecirc;n bước đường ph&aacute;t triển của Vi T&iacute;nh Trọng Thủy.
                                </strong></span></li>
                        <li class="tr_bq"><span style="font-size: 12pt;"><strong>Ch&uacute;ng t&ocirc;i xin hứa sẽ
                                    kh&ocirc;ng ngừng ho&agrave;n thiện, phục vụ kh&aacute;ch h&agrave;ng tốt nhất
                                    để
                                    lu&ocirc;n xứng đ&aacute;ng với niềm tin ấy."</strong></span></li>
                        <li><strong>**********************************************************************************</strong>
                        </li>
                        <li class="tr_bq"><span style="font-size: 12pt; color: #0000ff;"><strong>UY T&Iacute;N TẠO
                                    N&Ecirc;N THƯƠNG HIỆU</strong></span></li>
                        <li class="tr_bq"><span style="font-size: 12pt;"><strong>Vi T&iacute;nh Trọng
                                    Thủy</strong></span></li>
                        <li class="tr_bq"><span style="font-size: 12pt;"><strong>Add: số 38 - Đường TA15 - Thới An
                                    -
                                    Quận 12 - TP HCM</strong></span></li>
                        <li class="tr_bq"><span style="font-size: 12pt;"><strong>Hotline:
                                    0938.114419</strong></span>
                        </li>
                        <li class="tr_bq"><img
                                src="../../Upload/2023/1/14/313340671_2756103894520520_1207001001444854701_n024346.jpg"
                                alt="" width="820" height="312" /></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
    @livewire('partials.footer')
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
                                $("#" + _id).attr("href", "mailto:" + data[i].SettingValue
                                    .toString());
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
