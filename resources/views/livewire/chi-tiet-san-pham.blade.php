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
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/san-pham">Sản phẩm</a></li>
            <li class="breadcrumb-item"><a href="/san-pham/man-hinh">M&#192;N H&#204;NH</a></li>
            <li class="breadcrumb-item"><span>M&#224;n h&#236;nh Gaming E-DRA EGM24F75 24 inch</span></li>
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
                                <div class="thumbnail"><a
                                        href="javascript:ChangeIma('/Upload/Products/710a9eda-07e7-4f08-ba34-0e86040e6a19.webp')"><img
                                            style='height:30px;width:30px;'
                                            src="/Upload/Products/710a9eda-07e7-4f08-ba34-0e86040e6a19.webp"
                                            class="img-responsive" /></a></div>
                                <div class="thumbnail">
                                    <a
                                        href="javascript:ChangeIma('/Upload/Products/ab965a83-4829-4611-b23a-512dc21d37de.jpg')"><img
                                            id="cc-1207"
                                            onerror="javascript:this.src='/Upload/Products/ab965a83-4829-4611-b23a-512dc21d37de.jpg'"
                                            src="/Upload/Products/medium/ab965a83-4829-4611-b23a-512dc21d37de.jpg"
                                            alt="M&#224;n h&#236;nh Gaming E-DRA EGM24F75 24 inch"
                                            class="img-responsive" style='height:30px;width:30px;' /></a>
                                </div>

                            </div>
                            <div class="col-sm-10">
                                <div class="popup-gallery">
                                    <div class="thumbnail">
                                        <a class="a" id="detail-img"
                                            title="M&#224;n h&#236;nh Gaming E-DRA EGM24F75 24 inch"
                                            href="/Upload/Products/710a9eda-07e7-4f08-ba34-0e86040e6a19.webp"><img
                                                id="detail-img1"
                                                src="/Upload/Products/710a9eda-07e7-4f08-ba34-0e86040e6a19.webp"
                                                class="img-responsive" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="ttchitietsap">
                            M&#224;n h&#236;nh Gaming E-DRA EGM24F75 24 inch
                        </h1>
                        <div class="region-rpce">
                            <b>Giá: </b>
                            <span class="price">2,200,000 VNĐ</span>
                            <span class="old-prc hide">2,200,000 VNĐ</span>
                        </div>
                        <div class="sum-detail">
                            <table class="table">
                                <tr>
                                    <td class="text-right" style="width:90%;">
                                        <div class="fb-like-wrap">
                                            <div id="fb-root"></div>
                                            <script>
                                            (function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src =
                                                    "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=142391655885110&version=v2.3";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                            </script>
                                            <div class="fb-like"
                                                data-href="https://www.vitinhtrongthuy.com/san-pham/man-hinh/man-hinh-gaming-e-dra-egm24f75-24-inch"
                                                data-layout="button_count" data-action="like" data-show-faces="true"
                                                data-share="true"></div>



                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                                        <script src="https://apis.google.com/js/platform.js" async defer>
                                        {
                                            lang: 'vi'
                                        }
                                        </script>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td class="text-right" style="width:130px">
                                        <input type="number" id="txtnumcart" class="form-control" value="1" min="1"
                                            max="100" />
                                    </td>
                                    <td class="text-right" style="padding-left:10px;">
                                        <button type="button" class="btn btn-primary"
                                            onclick="AddShopCart('879', 'M&#224;n h&#236;nh Gaming E-DRA EGM24F75 24 inch', '2200000', $('#txtnumcart').val())"><i
                                                class="fa fa-shopping-cart"></i> Đặt hàng</button>
                                    </td>
                                </tr>
                            </table>
                            <div class="motasoluot">
                                <ul class="no-ul list-de">
                                    <li>
                                        <b>Tên máy: </b> <span>M&#224;n h&#236;nh Gaming E-DRA EGM24F75 24 inch</span>
                                    </li>
                                    <li>
                                        <b>Model:</b> <span>M&#224;n h&#236;nh Gaming E-DRA EGM24F75 24 inch</span>
                                    </li>
                                    <li>
                                        <b>Giá: </b><span class="text-danger"><b>2,200,000đ</b></span>
                                    </li>
                                    <li>
                                        <b>Tình trạng:</b> <span>Mới </span>
                                    </li>
                                    <li>
                                        <b>Bảo hành:</b> <span>12 th&#225;ng </span>
                                    </li>
                                    <li>
                                        <b>Xuất xứ:</b> <span>Ch&#237;nh h&#227;ng</span>
                                    </li>
                                    <li>
                                        <b>Kho hàng:</b> <span>20</span>
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
                        <li><strong>Kiểu d&aacute;ng m&agrave;n h&igrave;nh:</strong>&nbsp;Phẳng</li>
                        <li><strong>Tỉ lệ khung h&igrave;nh:</strong>&nbsp;16:9</li>
                        <li><strong>K&iacute;ch thước mặc định:</strong>&nbsp;23.8 inch</li>
                        <li><strong>C&ocirc;ng nghệ tấm nền:</strong>&nbsp;IPS</li>
                        <li><strong>Ph&acirc;n giải điểm ảnh:</strong>&nbsp;FHD (1920x1080)</li>
                        <li><strong>Tần số qu&eacute;t m&agrave;n:</strong>&nbsp;100Hz</li>
                        <li><strong>Thời gian đ&aacute;p ứng:</strong>&nbsp;1ms (MPRT)</li>
                        <li><strong>Độ s&aacute;ng hiển thị:</strong>&nbsp;250cd/m2</li>
                        <li><strong>Chỉ số m&agrave;u sắc:</strong>&nbsp;16.7 triệu m&agrave;u - 97%sRGB</li>
                        <li><strong>Hỗ trợ ti&ecirc;u chuẩn:</strong>&nbsp;VESA (100 mm x 100 mm)</li>
                        <li><strong>Cổng cắm kết nối:</strong>&nbsp;HDMI</li>
                        <li><strong>Phụ kiện trong hộp:</strong>&nbsp;C&aacute;p nguồn, c&aacute;p HDMI</li>
                    </ul>
                </div>
                <div class="reg-d form-group">
                    <a class="reg-dtitle">Sản phẩm liên quan</a>
                </div>
                <div class="form-group"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-may-tinh-dell-p2717h-ips-27" class="img-products">

                                <img width="193" height="193"
                                    alt="M&#224;n h&#236;nh m&#225;y t&#237;nh Dell P2717H IPS - 27&quot;"
                                    src="/Upload/Products/7459da75-7ac3-4b78-a1ed-2aa634b3e4b2.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-may-tinh-dell-p2717h-ips-27" class="title-products">
                                M&#224;n h&#236;nh m&#225;y t&#237;nh Dell P2717H IPS - 27&quot;
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,900,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    2,900,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-samsung-s22c450-22in" class="img-products">

                                <img width="193" height="193" alt="M&#224;n h&#236;nh Samsung S22C450  22in"
                                    src="/Upload/Products/795a48ef-1b59-474e-b9e1-8a1908b7df7d.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-samsung-s22c450-22in" class="title-products">
                                M&#224;n h&#236;nh Samsung S22C450 22in
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,200,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    1,200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-may-tinh-infinity-v2423f-24-inch-fhd-100h"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="M&#192;N H&#204;NH M&#193;Y T&#205;NH INFINITY V2423F 24 INCH FHD 100HZ"
                                    src="/Upload/Products/b7ae1e44-c824-4e21-818f-234f2250e611.jpeg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-may-tinh-infinity-v2423f-24-inch-fhd-100h"
                                class="title-products">
                                M&#192;N H&#204;NH M&#193;Y T&#205;NH INFINITY V2423F 24 INCH FHD 100HZ
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
                            <a href="/san-pham/man-hinh/man-hinh-lcd-24″-msi-pro-mp241x-fhd-va-75hz-8ms"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="M&#224;n h&#236;nh LCD 24″ MSI Pro MP241X FHD VA 75Hz 8Ms "
                                    src="/Upload/Products/7162387e-d348-4d19-83b8-1c4f4b4c8eba.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-lcd-24″-msi-pro-mp241x-fhd-va-75hz-8ms"
                                class="title-products">
                                M&#224;n h&#236;nh LCD 24″ MSI Pro MP241X FHD VA 75Hz 8Ms
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
                            <a href="/san-pham/man-hinh/man-hinh-dell-20in-e2016-e2018" class="img-products">

                                <img width="193" height="193" alt="M&#224;n h&#236;nh Dell 20in E2016- E2018"
                                    src="/Upload/Products/000ae180-d968-4e8a-b0ff-9bad8f13554d.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-dell-20in-e2016-e2018" class="title-products">
                                M&#224;n h&#236;nh Dell 20in E2016- E2018
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
                            <a href="/san-pham/man-hinh/man-hinh-infinity-sniper-pro-–-27-inch-fhd-fast-ip"
                                class="img-products">

                                <img width="193" height="193"
                                    alt="M&#224;n h&#236;nh Infinity Sniper Pro – 27 inch FHD Fast IPS / 165Hz"
                                    src="/Upload/Products/620c28f3-0ad2-4628-8537-3515b548f170.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-infinity-sniper-pro-–-27-inch-fhd-fast-ip"
                                class="title-products">
                                M&#224;n h&#236;nh Infinity Sniper Pro – 27 inch FHD Fast IPS / 165Hz
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
                            <a href="/san-pham/man-hinh/man-hinh-hp-20in-lv-2011" class="img-products">

                                <img width="193" height="193" alt="M&#224;n h&#236;nh Hp 20in LV 2011"
                                    src="/Upload/Products/12c52d94-03e7-484a-8bfe-dede8622ebc2.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-hp-20in-lv-2011" class="title-products">
                                M&#224;n h&#236;nh Hp 20in LV 2011
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,300,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    1,300,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-25in-hp-model-25f" class="img-products">

                                <img width="193" height="193" alt="M&#224;n H&#236;nh 25in HP Model 25F"
                                    src="/Upload/Products/f81f69ea-2ad8-4452-8b54-0bbe22c7c21a.png?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-25in-hp-model-25f" class="title-products">
                                M&#224;n H&#236;nh 25in HP Model 25F
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,800,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    1,800,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-samsung-s22c300" class="img-products">

                                <img width="193" height="193" alt="M&#224;n h&#236;nh samsung S22C300"
                                    src="/Upload/Products/d550cd0c-593d-40ba-b35f-01ffd96e5cf2.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-samsung-s22c300" class="title-products">
                                M&#224;n h&#236;nh samsung S22C300
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,200,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    1,200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-dell-e2414h-led" class="img-products">

                                <img width="193" height="193" alt="M&#224;n h&#236;nh dell E2414H led"
                                    src="/Upload/Products/8fcfea99-4cef-41ec-9db1-439a9c453184.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-dell-e2414h-led" class="title-products">
                                M&#224;n h&#236;nh dell E2414H led
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
                            <a href="/san-pham/man-hinh/man-hinh-hp-p200" class="img-products">

                                <img width="193" height="193" alt="M&#224;n h&#236;nh HP P200"
                                    src="/Upload/Products/352db730-894d-4844-b81d-93e76a6bef04.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-hp-p200" class="title-products">
                                M&#224;n h&#236;nh HP P200
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,300,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    1,300,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-samsung-32-in-model-s32e36f" class="img-products">

                                <img width="193" height="193" alt="M&#224;n h&#236;nh samsung 32 in. Model : S32E36F"
                                    src="/Upload/Products/fd7f7968-d5af-41f8-872a-8369e7c589d6.jpg?v=1"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-samsung-32-in-model-s32e36f" class="title-products">
                                M&#224;n h&#236;nh samsung 32 in. Model : S32E36F
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,800,000 VNĐ
                                </div>
                                <div class="old-price text-center hide">
                                    1,800,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>

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