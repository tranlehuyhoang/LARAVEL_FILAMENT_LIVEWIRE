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
            @foreach($categories as $category)
            <li class="n-w br-d" data-class="mcc" data-id="mcc-63" data-click="clickToggle">
                <a wire:navigate href="/san-pham/{{ $category->slug ?? '#' }}" wire:key='{{ $category->id }}'><i class="fa fa-angle-right"></i>{{ $category->name }}</a>
            </li>
            @endforeach
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