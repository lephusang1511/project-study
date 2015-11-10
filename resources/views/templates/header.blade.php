<script>
    $(document).ready(function() {
        $(".li-menu").hover(function(){
            if($(this).find("div.sub-menu > div").children().length > 1) {
                $(this).find("div.sub-menu").css("display", "inline");
            }
        }, function(){
            $(this).find("div.sub-menu").css("display", "none");
        });
    });
</script>

<style>
    body {
        background: #f8f8f8;
    }
    ul, ol {
        padding: 0;
        list-style: none;
        margin: 0;
    }
    a:link {
        text-decoration: none;
    }

    .top-notice {
        float: left;
        padding: 0;
        width: 100%;
    }
    .top-notice-logo {
        width: 80%;
        margin: 0 auto;
        /*position: fixed;*/
    }

    .quick-access {
        float: left;
        width: 720px;
        text-align: left;
        padding: 10px 0;
        margin-left: 40px;
        margin-top: 20px;
        margin-bottom: 0px;
    }
    .quick-access .box-cart.has_item {
        background: url(default/giaytot4.0/images/xbox-cart-active.png.pagespeed.ic.ehHkiflcEU.png) no-repeat 0 0;
        background-color: #0000C2;
    }


    .quick-access .box-cart {
        width: 46px;
        height: 46px;
        float: right;
        background-image: url(default/giaytot4.0/images/xgiaytot1.png.pagespeed.ic.4quoIjkMYS.png);
        background-repeat: no-repeat;
        background-position: 0 -440px;
        background-color: #0000C2;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        line-height: 55px;
        text-align: center;
        position: relative;
    }

    .top-banner {
        width: 100%;
        float: left;
        background-color: #000;
        display: inline-block;
        /*background: rgba(0, 0, 0,.68);*/
    }
    .top-banner-tran {
        width: 80%;
        margin: 0 auto;
        /*display: inline-block;*/
        /*position: fixed;*/
    }
    .top-banner-tran > ul > li {
        /*display: inline;*/
        float: left;
        position: relative;
        margin-right: 3px;
        /*width: 15%;*/
    }
    .top-banner-tran > ul > li:hover {
        background-color: #666;
        /*background: rgba(0, 0, 0,.68);*/
    }
    .top-banner-tran ul li a.menu {
        float: left;
        font-size: 14px;
        color: #fff;
        text-transform: uppercase;
        padding: 9px 10px;
    }
    .top-banner-tran ul li div.sub-menu {
        position: absolute;
        top: 38px;
        background: #fff;
        left: 0;
        z-index: 1000;
        border: 1px solid #cecece;
        padding: 5px 10px;
        display: none;
    }
    .top-banner-tran ul li div ol {
        float: left;
        width: 200px;
    }
</style>
<div class="top-notice">
    <div>
        GIAYTOT.COM - WEBSITE BÁN GIÀY DÉP NAM TRỰC TUYẾN HÀNG ĐẦU VIỆT NAM
    </div>
    <div class="top-notice-logo">
        <h2 style="float: left">
            <a href="http://www.giaytot.com/" title="g" class="logo"><img width="259" height="53" src="http://www.giaytot.com/skin/frontend/default/giaytot4.0/images/259x53xlogo.png.pagespeed.ic.ZBw6zV-szw.png" alt="g"></a>
        </h2>
        <div class="quick-access">
            <div style="float: left">
            <form id="search_mini_form" action="http://www.giaytot.com/catalogsearch/result/" method="get">
                <div class="form-search">
                    <!--label for="search">Search:</label-->
                    <input id="search" type="text" name="q" placeholder="Tìm kiếm trên 5000 sản phẩm" value="" class="input-text search" maxlength="128" autocomplete="off">
                    <button type="submit" title="Tìm" class="button search"><span>Tìm</span></button>

                    <h2 style="font-size: 11px;"><strong style="color: #c61c22; font-family: arial, helvetica, sans-serif; font-size: 8pt;">Gợi ý từ khóa: </strong><span style="color: #000000; font-size: 12px;"><a title="giay nam, ban giay nam 2015, giay dep nam dep" href="http://www.giaytot.com/giay-dep-nam/giay-da-nam.html" target="_blank"><span style="color: #000000;">Giày da nam thời trang</span></a>, <a title="giay nam, giày nam công sở, giày nam đẹp" href="http://www.giaytot.com/giay-dep-nam/giay-nam-cong-so.html" target="_blank"><span style="color: #000000;">giày nam công sở</span></a></span><span style="font-size: 12px;">, </span><span style="font-size: 12px; color: #000000;"><a title="giay nam thoi trang, giày nam thời trang, giày nam đẹp" href="http://www.giaytot.com/giay-dep-nam/giay-luoi-nam.html/" target="_blank"><span style="color: #000000;">giày lười nam</span></a>, <a href="http://www.giaytot.com/giay-dep-nam/giay-made-in-vietnam.html"><span style="color: #000000;">giày made in Việt Nam</span></a></span></h2>                <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
                </div>
            </form>
            </div>
            <div class="box-cart has_item">
                <a style="padding:10px 15px;color:#fff;text-decoration:none;" href="http://www.giaytot.com/checkout/cart/">0</a>
            </div>
        </div>
    </div>
</div>
<div class="top-banner">
    <div class="top-banner-tran">
        <ul>
            <li class="li-menu">
                <a href="#" class="menu">
                    <span>Giầy Nam</span>
                </a>
                <div class="sub-menu">
                    <div style="width: 600px">
                        <ol>
                            <li>
                                <a href="#">
                                    <span>Giầy Nam 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Giầy Nam 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Giầy Nam 1</span>
                                </a>
                            </li>
                        </ol>
                        <ol>
                            <li>
                                <a href="#">
                                    <span>Giầy Nam 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Giầy Nam 1</span>
                                </a>
                            </li>
                            <li><a href="#">
                                    <span>Giầy Nam 1</span>
                                </a>
                            </li>
                        </ol>
                        <ol>
                            <li>
                                <a href="#">
                                    <span>Giầy Nam 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Giầy Nam 1</span>
                                </a>
                            </li>
                            <li><a href="#">
                                    <span>Giầy Nam 1</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </li>
            <li class="li-menu">
                <a href="#" class="menu">
                    <span>Giầy Nữ</span>
                </a>
                <div class="sub-menu"></div>
            </li>
            <li class="li-menu">
                <a href="#" class="menu">
                    <span>Bóp da</span>
                </a>
                <div class="sub-menu"></div>
            </li>
            <li class="li-menu">
                <a href="#" class="menu">
                    <span>Túi xách</span>
                </a>
                <div class="sub-menu"></div>
            </li>
        </ul>
    </div>
</div>