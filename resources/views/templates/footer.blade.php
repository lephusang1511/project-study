{{$foo}}
<link rel="stylesheet" href="{{URL::asset('css/footer.css')}}">
<div class="footer-top">
    <div class="footer">
        <div class="left">
            <div class="title">{{trans('caption_master.0001')}}</div>
            <div class="contact">
                <div class="showroom">Show room 1</div>
                <p>S? 1A4 C� Ch�nh Lan, Thanh Xu�n, H� N?i<br>Gi? l�m vi?c: 9h - 21h<br> ?T: (04).6651.5675</p>
            </div>
            <div class="contact">
                <div class="showroom">Show room 2</div>
                <p>S? 1A4 C� Ch�nh Lan, Thanh Xu�n, H� N?i<br>Gi? l�m vi?c: 9h - 21h<br> ?T: (04).6651.5675
                <br>dia chi map</p>
            </div>
        </div>
        <div class="right">
            <div class="sales">
                <div class="title">{{trans('caption_master.0002')}}</div>
                <ul>
                    <li>
                        <div class="h4"><a title="Ch�nh s�ch khuy?n m?i" href="http://www.giaytot.com/chinh-sach-khuyen-mai.html" target="_blank">Ch�nh s�ch khuy?n m?i</a></div>
                    </li>
                    <li>
                        <div class="h4"><a title="Gi�y nam ??ng ph?c, mua s? l??ng l?n" href="http://www.giaytot.com/blog/giay-nam-dong-phuc-cong-so-nang-tam-doanh-nghiep/" target="_blank">D�nh cho mua s? l??ng l?n</a></div>
                    </li>
                </ul>
            </div>
            <div class="connect">
                <div class="title">{{trans('caption_master.0003')}}</div>
                <ul>
                    <li><a class="facebook" href="https://www.facebook.com/GiaytotOfficial" target="_blank"> &nbsp; </a></li>
                    <li><a class="youtube" href="http://www.youtube.com/user/giaytot" target="_blank">&nbsp; </a></li>
                    <li><a class="twt" href="https://twitter.com/giaytot" target="_blank">&nbsp; </a></li>
                    <li><a class="wpress" href="http://www.giaytot.com/blog/" target="_blank">&nbsp; </a></li>
                    <li style="margin: 0;"><a class="google" title="Giaytot G+" href="https://plus.google.com/+Giaytotgiaynamthoitrang/posts">&nbsp; </a></li>
                </ul>
                <p><a class="appstore">&nbsp; </a> <a class="googleplay">&nbsp; </a></p>
            </div>
            <h2>{{trans('caption_master.0004')}}</h2>
            <form action="http://www.giaytot.com/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
                <div class="newsletter-content">
                    <div class="input-box">
                        <input type="text" name="email" id="newsletter-footer" placeholder="Nh?p email c?a b?n t?i ?�y ..." title="Nh?p email c?a b?n t?i ?�y ..." class="input-text required-entry validate-email">
                        <button type="submit" title="??ng k�" class="button"><span>??ng k�</span></button>
                    </div>
                    <p class="note">{{trans('caption_master.0005')}}</p>
                    <style>.newsletter-content .input-box{margin:7px 0}.newsletter-content .note{font-size:12px;color:#fffefe;clear:both}.newsletter-content .button span{background:#138995;border:none;border-radius:0;padding:4px 14px 4px}#newsletter-footer{padding:5px 4px;width:359px}</style>
                </div>
            </form>
        </div>
    </div>
</div>