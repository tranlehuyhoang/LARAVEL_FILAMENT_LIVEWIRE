<div>
    <head>
    <title>{{$product->name}}</title>
    </head>
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
    
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a wire:navigate href="/">Trang chủ</a></li>
                <li class="breadcrumb-item"><a wire:navigate href="/san-pham">Sản phẩm</a></li>
                <li class="breadcrumb-item">
                    <a href="{{ $product->category ? url('/san-pham/' . $product->category->slug) : '#' }}">
                        {{ ucfirst($product->category->name ?? 'Danh mục') }}
                    </a>
                    
                </li>
                <li class="breadcrumb-item"><span>{{ $product->name }}</span></li>
            </ol>
    
            <div class="row">
                @livewire('partials.sidebar')
                <div class="col-md-9" id="secondDiv">
    
    
                    <link href="https://www.vitinhtrongthuy.com/assets/frontend/js/magnific/magnific-popup.css?v=1"
                        rel="stylesheet" />
                    <style>
                    .mfp-content {
                        background: #fff;
                    }
    
                    .mfp-arrow {
                        display: none !important;
                    }
                    </style>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-2">
                                @foreach($product->images as $image)
                                    <div class="thumbnail">
                                        <a href="javascript:ChangeIma('{{ Storage::url($image) }}')">
                                            <img style='height:30px;width:30px;' src="{{ Storage::url($image) }}" class="img-responsive" />
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-sm-10">
                                <div class="popup-gallery">
                                    <div class="thumbnail">
                                        <a class="a" id="detail-img" title="{{ $product->name }}" href="{{ $product->main_image_url }}">
                                            <img id="detail-img1" src="{{ Storage::url(is_array($product->images) ? $product->images[0] : $product->images) }}" class="img-responsive" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="ttchitietsap">
                            {{ $product->name }}
                        </h1>
                        <div class="region-rpce">
                            <b>Giá: </b>
                            <span class="price">{{ number_format($product->price, 0, ',', '.') }} VNĐ</span>
                            <span class="old-prc hide">{{ number_format($product->old_price, 0, ',', '.') }} VNĐ</span>
                        </div>
                        <div class="sum-detail">
                            <table>
                                <tr>
                                    <td class="text-right" style="width:130px">
                                        <input type="number" id="txtnumcart" class="form-control" value="{{ $quantity }}" min="1" max="100" wire:model="quantity" />
                                    </td>
                                    <td class="text-right" style="padding-left:10px;">
                                        <button type="button" class="btn btn-primary" wire:click="addToCart({{ $product->id }})">
                                            <i class="fa fa-shopping-cart"></i> Đặt hàng
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            <div class="motasoluot">
                                <ul class="no-ul list-de">
                                    <li>
                                        <b>Tên sản phẩm: </b> <span>{{ $product->name }}</span>
                                    </li>
                                    <li>
                                        <b>Id:</b> <span>{{ $product->id }}</span>
                                    </li>
                                    <li>
                                        <b>Giá: </b><span class="text-danger"><b>{{ number_format($product->price, 0, ',', '.') }}đ</b></span>
                                    </li>
                                
                                    <li>
                                        <b>Kho hàng:</b> 
                                        <span>
                                            {{ $product->is_stock ? 'Còn hàng' : 'Hết hàng' }}
                                        </span>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <div class="reg-d form-group">
                        <a class="reg-dtitle">Mô tả chung</a>
                    </div>
                    <div class="news-detail form-group">
                        <p><strong>&nbsp;TH&Ocirc;NG SỐ CƠ BẢN:</strong></p>
                        <ul>
                            {!! Str::markdown($product->description) !!}
                        </ul>
                    </div>
                    <div class="reg-d form-group">
                        <a class="reg-dtitle">Sản phẩm liên quan</a>
                    </div>
                    <div class="form-group"></div>
                    <div class="row">
                        @foreach($relatedProducts as $product)
                            <div class="col-md-3 col-sm-4 col-50">
                                <div class="product-item mg-30">
                                    <a wire:navigate href="{{ url('/san-pham/' . $product->category->slug . '/' . $product->slug) }}" class="img-products">
                                        <img width="193" height="193"
                                            alt="{{ $product->name }}"
                                          src="{{ Storage::url(is_array($product->images) ? $product->images[0] : $product->images) }}"
                                            class="img-responsive img-center" />
                                        <div class="sh">
                                            <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                        </div>
                                    </a>
                                    <a  wire:navigate href="{{ url('/san-pham/' . $product->category->slug . '/' . $product->slug) }}" class="title-products">
                                        {{ $product->name }}
                                    </a>
                                    <div class="text-center">
                                        <div class="price-number">
                                            {{ number_format($product->price) }} VNĐ
                                        </div>
                                        @if($product->old_price)
                                            <div class="old-price text-center hide">
                                                {{ number_format($product->old_price) }} VNĐ
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <script src="https://www.vitinhtrongthuy.com/assets/frontend/js/shopcart/elnino.shopcart.js"></script>
    
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Giỏ hàng hiện có: (<span id="numcart"
                                            class="text-danger">0</span>) sản phẩm</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="showCrt"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Mua tiếp</button>
                                    <button type="button" class="btn btn-primary" onclick="PostShopcart()">Xem giỏ
                                        hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://www.vitinhtrongthuy.com/assets/frontend/js/magnific/jquery.magnific-popup.js?v=1">
                    </script>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        $('.popup-gallery').magnificPopup({
                            delegate: '.a',
                            type: 'image',
                            tLoading: 'Loading image #%curr%...',
                            mainClass: 'mfp-img-mobile',
                            gallery: {
                                enabled: true,
                                navigateByImgClick: true,
                                preload: [0,
                                    1
                                ] // Will preload 0 - before current, and 1 after the current image
                            },
                            image: {
                                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                                titleSrc: function(item) {
                                    return item.el.attr('title') +
                                        '<small>by www.vitinhtrongthuy.com</small>';
                                }
                            }
                        });
                    });
    
                    function ChangeIma(url) {
                        $("#detail-img").attr("href", url);
                        $("#detail-img1").attr("src", url);
                    }
                    </script>
    
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
</div>