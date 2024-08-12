
<div>
    <link
        href="{{ asset('assets/frontend/font-awesome/font-awesome-4.3.0/font-awesome-4.3.0/css/font-awesome.min.css') }}?v=12082024"
        rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/main.css') }}?v=12082024" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/bootstrap/css/bootstrap.min.css') }}?v=12082024" rel="stylesheet" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto&subset=vietnamese&ver=4.6.1"
        type="text/css" media="all" />
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
    <div class="container">



        <style>
            .contentMce ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }
        </style>
        <script type="text/javascript" src="{{ asset('assets-app/js/formvalidate/jquery.validate.js') }}?v=12082024">
        </script>
        <script type="text/javascript" src="{{ asset('assets-app/js/formvalidate/validate.js') }}?v=12082024"></script>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Li&#234;n Hệ</li>
        </ol>

        <div class="mg-30"></div>
        <div class="row form-group">
            <div class="col-md-6">
                <div class="mg-30">
                    <div class="footer-info">
                        <div class="company">VI TÍNH TRỌNG THỦY</div>

                        <p>SỐ 38, ĐƯỜNG TA15, THỚI AN, QUẬN 12, TP HCM</p>

                        <p>Tel: 0938 114 419</p>

                        <p>Email: trongthuycomputer@gmail.com</p>

                    </div>
                </div>
                <div class="footer-info">
                    <h3 class="company">Thông tin liên hệ</h3>
                    <div class="form-group">
                        <i>Hãy gửi cho chúng tôi yêu cầu của bạn, chúng tôi sẽ liên lạc với bạn trong thời gian sớm
                            nhất</i>
                    </div>
                    <form method="post" id="frmContact" action="/lien-he">
                        <div class="form-group">
                            <input type="text" id="txthotent" name="txthotent" class="form-control"
                                placeholder="Họ Tên" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="txtemail" name="txtemail" class="form-control" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="txtphone" name="txtphone" class="form-control"
                                placeholder="Tiêu đề" />
                        </div>
                        <div class="form-group">
                            <textarea id="txtnoidung" class="form-control" name="txtnoidung"
                                placeholder="Nhập nội dung"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Gửi thông tin</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div id="hcmMap" style="height: 401px;"></div>
            </div>
        </div>
        <script>
            function initMap() {
                var myLatLng = new google.maps.LatLng(10.880914, 106.650768);
                var styles = [{
                        "featureType": "administrative",
                        "elementType": "labels",
                        "stylers": [{
                                "color": "#FFFFFF"
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "all",
                        "stylers": [{
                                "visibility": "simplified"
                            },
                            {
                                "color": "#303030"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text",
                        "stylers": [{
                                "visibility": "simplified"
                            },
                            {
                                "color": "#FFFFFF"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [{
                                "visibility": "simplified"
                            },
                            {
                                "color": "#808080"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text",
                        "stylers": [{
                                "color": "#FFFFFF"
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#303030"
                        }]
                    }
                ]
                var map = new google.maps.Map(document.getElementById('hcmMap'), {
                    zoom: 17,
                    center: myLatLng
                });
                //map.setOptions({ styles: styles });
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'VPTC Group!'
                });
            }
        </script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxag880KtQvTSkIRKX7bbzLPVGrv2gqSg&callback=initMap">
        </script>
        <script type="text/javascript">
            $("#frmContact").validate({
                rules: {
                    txthotent: "required",
                    txtemail: {
                        required: true,
                        email: true
                    },
                    txtphone: {
                        required: true
                    }
                }, // end rules
                submitHandler: function(form) {
                    ShowLoading();
                    $("#frmContact").submit();
                },
                invalidHandler: function() {
                    $("#gif").addClass("hide");
                }
            });
        </script>



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


</div>