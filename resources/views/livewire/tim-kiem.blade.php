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
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Tìm kiếm</li>
        </ol>

        <div class="row">
            @livewire('partials.sidebar')
            <div class="col-md-9" id="secondDiv">


                <div class="title-d form-group">Kết quả tìm kiếm</div>
                <div class="alert alert-info">
                    Hiện đang có <b>33</b> sản phẩm
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-gaming-e-dra-egm24f75-24-inch" class="img-products">

                                <img alt="M&#224;n h&#236;nh Gaming E-DRA EGM24F75 24 inch"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/710a9eda-07e7-4f08-ba34-0e86040e6a19.webp"
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
                                <div class="old-price text-center text-invisible">
                                    2,200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-may-tinh-dell-p2717h-ips-27" class="img-products">

                                <img alt="M&#224;n h&#236;nh m&#225;y t&#237;nh Dell P2717H IPS - 27&quot;"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/7459da75-7ac3-4b78-a1ed-2aa634b3e4b2.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    2,900,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/cuc-sac-man-hinh-samsung-,-lg"
                                class="img-products">

                                <img alt="Cục sạc m&#224;n h&#236;nh samsung , LG"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/397b2830-5f35-4f1e-be80-6882bae4d32c.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    250,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-samsung-s22c450-22in" class="img-products">

                                <img alt="M&#224;n h&#236;nh Samsung S22C450  22in"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/795a48ef-1b59-474e-b9e1-8a1908b7df7d.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    1,200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-may-tinh-infinity-v2423f-24-inch-fhd-100h"
                                class="img-products">

                                <img alt="M&#192;N H&#204;NH M&#193;Y T&#205;NH INFINITY V2423F 24 INCH FHD 100HZ"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/b7ae1e44-c824-4e21-818f-234f2250e611.jpeg"
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
                                <div class="old-price text-center text-invisible">
                                    2,200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-lcd-24″-msi-pro-mp241x-fhd-va-75hz-8ms"
                                class="img-products">

                                <img alt="M&#224;n h&#236;nh LCD 24″ MSI Pro MP241X FHD VA 75Hz 8Ms "
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/7162387e-d348-4d19-83b8-1c4f4b4c8eba.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    2,300,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-dell-20in-e2016-e2018" class="img-products">

                                <img alt="M&#224;n h&#236;nh Dell 20in E2016- E2018"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/000ae180-d968-4e8a-b0ff-9bad8f13554d.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    1,400,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/laptop-dell/laptop-dell-latitude-7400-2in1-touch-core-i5-8365u"
                                class="img-products">

                                <img alt="Laptop Dell Latitude 7400 2in1 TOUCH - Core i5 8365U | Ram 16G | Ssd 512G | m&#224;n h&#236;nh 14 inch FHD Cảm ứng x360"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/7619bb7c-a6c2-4c79-8944-ce329043df97.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/laptop-dell/laptop-dell-latitude-7400-2in1-touch-core-i5-8365u"
                                class="title-products">
                                Laptop Dell Latitude 7400 2in1 TOUCH - Core i5 8365U | Ram 16G | Ssd 512G | m&#224;n
                                h&#236;nh 14 inch FHD Cảm ứng x360
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    9,800,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    9,800,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-infinity-sniper-pro-–-27-inch-fhd-fast-ip"
                                class="img-products">

                                <img alt="M&#224;n h&#236;nh Infinity Sniper Pro – 27 inch FHD Fast IPS / 165Hz"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/620c28f3-0ad2-4628-8537-3515b548f170.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    3,000,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-hp-20in-lv-2011" class="img-products">

                                <img alt="M&#224;n h&#236;nh Hp 20in LV 2011"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/12c52d94-03e7-484a-8bfe-dede8622ebc2.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    1,300,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-25in-hp-model-25f" class="img-products">

                                <img alt="M&#224;n H&#236;nh 25in HP Model 25F"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/f81f69ea-2ad8-4452-8b54-0bbe22c7c21a.png"
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
                                <div class="old-price text-center text-invisible">
                                    1,800,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-samsung-s22c300" class="img-products">

                                <img alt="M&#224;n h&#236;nh samsung S22C300"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/d550cd0c-593d-40ba-b35f-01ffd96e5cf2.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    1,200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-dell-e2414h-led" class="img-products">

                                <img alt="M&#224;n h&#236;nh dell E2414H led"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/8fcfea99-4cef-41ec-9db1-439a9c453184.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    1,700,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/day-vga-zin-cho-man-hinh" class="img-products">

                                <img alt="D&#226;y vga zin cho m&#224;n h&#236;nh"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/080f5eb6-17a4-4fbd-a5a6-33153c41eaba.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/day-vga-zin-cho-man-hinh"
                                class="title-products">
                                D&#226;y vga zin cho m&#224;n h&#236;nh
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    50,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    50,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/cap-dvi-cho-man-hinh-12m" class="img-products">

                                <img alt="C&#225;p dvi cho m&#224;n h&#236;nh  1.2m"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/8b7efa71-974a-469a-aa98-9312aaba31ea.jfif"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/cac-thiet-bi-tin-hoc-khac/cap-dvi-cho-man-hinh-12m"
                                class="title-products">
                                C&#225;p dvi cho m&#224;n h&#236;nh 1.2m
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    50,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    50,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-hp-p200" class="img-products">

                                <img alt="M&#224;n h&#236;nh HP P200"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/352db730-894d-4844-b81d-93e76a6bef04.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    1,300,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-samsung-32-in-model-s32e36f" class="img-products">

                                <img alt="M&#224;n h&#236;nh samsung 32 in. Model : S32E36F"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/fd7f7968-d5af-41f8-872a-8369e7c589d6.jpg"
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
                                <div class="old-price text-center text-invisible">
                                    1,800,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-24-in-hieu-benq" class="img-products">

                                <img alt="M&#224;n h&#236;nh 24 in hiệu BenQ"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/6982a9ed-327e-49a3-9fa2-f771eaef5748.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-24-in-hieu-benq" class="title-products">
                                M&#224;n h&#236;nh 24 in hiệu BenQ
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,500,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    1,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-lg-24in-24m47vq" class="img-products">

                                <img alt="M&#224;n h&#236;nh LG 24in 24M47VQ"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/7b9f6bc5-c4b8-4094-9f4b-c410b510d293.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-lg-24in-24m47vq" class="title-products">
                                M&#224;n h&#236;nh LG 24in 24M47VQ
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,800,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    1,800,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-aoc-27-in-model-27b1h-cong-nghe-ips"
                                class="img-products">

                                <img alt="M&#224;n h&#236;nh Aoc 27 in: Model 27B1H c&#244;ng nghệ IPS"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/56e18f14-75b1-4b56-9041-66a58e8609e5.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-aoc-27-in-model-27b1h-cong-nghe-ips"
                                class="title-products">
                                M&#224;n h&#236;nh Aoc 27 in: Model 27B1H c&#244;ng nghệ IPS
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,900,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    2,900,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/vga-car-do-hoa/vga-man-hinh-gigabyte-gtx-1660-oc-6g-6gb-gddr6,-19"
                                class="img-products">

                                <img alt="Vga  m&#224;n h&#236;nh GIGABYTE GTX 1660 OC-6G (6GB GDDR6, 192-bit, HDMI+DP, 1x8-pin)"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/4df86583-8aeb-4187-b1a5-3da57260cb26.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/vga-car-do-hoa/vga-man-hinh-gigabyte-gtx-1660-oc-6g-6gb-gddr6,-19"
                                class="title-products">
                                Vga m&#224;n h&#236;nh GIGABYTE GTX 1660 OC-6G (6GB GDDR6, 192-bit, HDMI+DP, 1x8-pin)
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    4,300,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    4,300,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/vga-car-do-hoa/vga-man-hinh-asus-tuf-gtx-1660-super-o6g-gaming-6g"
                                class="img-products">

                                <img alt="Vga m&#224;n h&#236;nh ASUS TUF GTX 1660 Super-O6G GAMING (6GB GDDR6, 192-bit, DVI+HDMI+DP, 1x8-pin)"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/ca204638-ddfe-48d8-a9e0-4e662306642f.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/vga-car-do-hoa/vga-man-hinh-asus-tuf-gtx-1660-super-o6g-gaming-6g"
                                class="title-products">
                                Vga m&#224;n h&#236;nh ASUS TUF GTX 1660 Super-O6G GAMING (6GB GDDR6, 192-bit,
                                DVI+HDMI+DP, 1x8-pin)
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    4,500,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    4,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-cong-samsung-27c27f397" class="img-products">

                                <img alt="M&#224;n h&#236;nh cong Samsung 27&quot;C27F397 "
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/4c62bb9d-5318-4713-a52a-9b8a97862383.png"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-cong-samsung-27c27f397" class="title-products">
                                M&#224;n h&#236;nh cong Samsung 27&quot;C27F397
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,200,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    2,200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/vga-car-do-hoa/vga-man-hinh-msi-gtx-1660-super-ventus-xs-oc-6gb-g"
                                class="img-products">

                                <img alt="Vga m&#224;n h&#236;nh MSI GTX 1660 Super VENTUS XS OC (6GB GDDR6, 192-bit, HDMI+DP)"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/1a122caa-5908-41f6-874b-e1498cabda9d.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/vga-car-do-hoa/vga-man-hinh-msi-gtx-1660-super-ventus-xs-oc-6gb-g"
                                class="title-products">
                                Vga m&#224;n h&#236;nh MSI GTX 1660 Super VENTUS XS OC (6GB GDDR6, 192-bit, HDMI+DP)
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    4,500,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    4,500,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-lg-27ea33-led-ips" class="img-products">

                                <img alt="M&#224;n h&#236;nh LG 27EA33 LED IPS"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/66e546d0-c85e-4758-a11e-2a35d64029d9.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-lg-27ea33-led-ips" class="title-products">
                                M&#224;n h&#236;nh LG 27EA33 LED IPS
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,600,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    1,600,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-cong-gigabyte-g27fc-a-27-va-165hz"
                                class="img-products">

                                <img alt="M&#224;n h&#236;nh cong GIGABYTE G27FC A 27&quot; VA 165Hz"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/d41aecda-cf6f-4f69-9273-1fb5d9453ff9.png"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-cong-gigabyte-g27fc-a-27-va-165hz"
                                class="title-products">
                                M&#224;n h&#236;nh cong GIGABYTE G27FC A 27&quot; VA 165Hz
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,800,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    2,800,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-cong-samsung-lc24rg50fqexxv-24-va-144hz"
                                class="img-products">

                                <img alt="M&#224;n H&#236;nh cong Samsung LC24RG50FQEXXV 24&quot; VA 144Hz"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/68a17d5a-860d-4f87-b0ef-f5a833a26bf0.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-cong-samsung-lc24rg50fqexxv-24-va-144hz"
                                class="title-products">
                                M&#224;n H&#236;nh cong Samsung LC24RG50FQEXXV 24&quot; VA 144Hz
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    2,200,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    2,200,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-dell-22in-e2216h" class="img-products">

                                <img alt="M&#224;n h&#236;nh Dell 22in E2216H"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/8a2703ba-4111-45a8-9e99-818a22c9254b.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-dell-22in-e2216h" class="title-products">
                                M&#224;n h&#236;nh Dell 22in E2216H
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,300,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    1,300,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-hieu-lg-20in" class="img-products">

                                <img alt="M&#224;n h&#236;nh hiệu LG 20in"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/31191b7b-572c-490e-9597-be983c0e57f1.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-hieu-lg-20in" class="title-products">
                                M&#224;n h&#236;nh hiệu LG 20in
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    900,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    900,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-viewsonic-va2201-h-22inch-fhd-va-75-hz-hd"
                                class="img-products">

                                <img alt="M&#224;n H&#236;nh Viewsonic VA2201-H (22inch/ FHD/ VA/ 75 Hz/ HDMI/ VGA/ 3Yrs)"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/10c2f1db-d24a-47fe-b8de-07e365bf0696.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-viewsonic-va2201-h-22inch-fhd-va-75-hz-hd"
                                class="title-products">
                                M&#224;n H&#236;nh Viewsonic VA2201-H (22inch/ FHD/ VA/ 75 Hz/ HDMI/ VGA/ 3Yrs)
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,300,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    1,300,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-lg-22in-22m47" class="img-products">

                                <img alt="M&#224;n h&#236;nh LG 22in 22M47"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/9d9e3ea2-5233-43d2-921a-ba9ec56d9845.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-lg-22in-22m47" class="title-products">
                                M&#224;n h&#236;nh LG 22in 22M47
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,100,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    1,100,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-viewsonic-va2201-h-22-inch-fhd-va-75hz-hd"
                                class="img-products">

                                <img alt="M&#224;n H&#236;nh ViewSonic VA2201-H 22 Inch FHD VA 75Hz (HDMI, VGA)"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/198c8fe9-1004-4b75-b162-97e0e3233ef9.jpg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-viewsonic-va2201-h-22-inch-fhd-va-75hz-hd"
                                class="title-products">
                                M&#224;n H&#236;nh ViewSonic VA2201-H 22 Inch FHD VA 75Hz (HDMI, VGA)
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,300,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    1,300,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-50">
                        <div class="product-item mg-30">
                            <a href="/san-pham/man-hinh/man-hinh-aoc-27-in-i2769v-ips" class="img-products">

                                <img alt="M&#224;n h&#236;nh AOC 27 in  I2769V IPS"
                                    src="https://www.vitinhtrongthuy.com/Upload/Products/32a02489-6f1e-4754-8526-24b667024241.jpeg"
                                    class="img-responsive img-center" />
                                <div class="sh">
                                    <div class="vi-more"><i class="fa fa-search-plus"></i></div>
                                </div>
                            </a>
                            <a href="/san-pham/man-hinh/man-hinh-aoc-27-in-i2769v-ips" class="title-products">
                                M&#224;n h&#236;nh AOC 27 in I2769V IPS
                            </a>
                            <div class="text-center">
                                <div class="price-number">
                                    1,700,000 VNĐ
                                </div>
                                <div class="old-price text-center text-invisible">
                                    1,700,000 VNĐ
                                </div>
                            </div>

                        </div>
                    </div>

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