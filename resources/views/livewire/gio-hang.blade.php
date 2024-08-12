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
    @livewire('partials.menu')
    <div class="form-group"></div>
    <div class="container">

        <div class="row">
            @livewire('partials.sidebar')
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