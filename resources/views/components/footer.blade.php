
<!-- Footer Area Start-->
<footer class="footer-area">
    <div class="footer-bg">

        <div class="container">
            <div class="bg-bd">
                <div class="cl-logo owl-carousel">

                    @foreach($clients as $client)
                        <div class="brand-logo">
                            <a href="{{$client['url']}}"><img src="{{$client['logo']}}" alt=""/></a>
                        </div>

                    @endforeach
                </div>
                <div class="clear"></div>
                <div class="row top-speac">
                    <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                        <div class="widget">
                            <div class="footer-lago"><a href="#"><img src="{{asset('front/img/logo.png')}}"
                                                                      alt="logo.jpg')}}"/></a></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veure dol dolore eu fugiat nulla
                                pariatur.</p>
                            <ul class="social-link">
                                <li><a href="#" data-bs-toggle="tooltip" title="facebook"><i class="fa fa-facebook"></i>
                                    </a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="twitter"><i class="fa fa-twitter"></i>

                                    </a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="rss"><i class="fa fa-rss"></i>

                                    </a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="youtube"><i class="fa fa-youtube"></i>

                                    </a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="google-plus"><i
                                            class="fa fa-google-plus"></i>

                                    </a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="copyright-text">
                            <p><b>Copyright </b> &copy; <span class="color"><a href="#"> BootExperts.</a></span>All
                                Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-6 col-12">
                        <div class="payment payment-center">
                            <ul>
                                <li><a href="#"><img src="{{asset('front/img/payment.png')}}" alt=""/></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- jquery -->
<script src="{{asset('front/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('front/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>

<!-- popper js
============================================ -->
<script src="{{asset('front/js/popper.min.js')}}"></script>

<!-- bootstrap js
============================================ -->
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>

<!-- price-slider js
============================================ -->
<script src="{{asset('front/js/price-slider.js')}}"></script>

<!-- jquery-meanmenu js -->
<script src="{{asset('front/js/jquery.meanmenu.js')}}"></script>

<!-- owl.carousel.min js
============================================ -->
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>

<!-- Nivo slider js
============================================ -->
<script src="{{asset('front/js/jquery.nivo.slider.js')}}"></script>

<!-- elevateZoom js
============================================ -->
<script src="{{asset('front/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>

<!-- jquery.bxslider.min.js
============================================ -->
<script src="{{asset('front/js/jquery.bxslider.min.js')}}"></script>

<!-- wow js
============================================ -->
<script src="{{asset('front/js/wow.js')}}"></script>

<!-- jquery.scrollUp js
============================================ -->
<script src="{{asset('front/js/jquery.scrollUp.min.js')}}"></script>

<!-- plugins js
============================================ -->
<script src="{{asset('front/js/plugins.js')}}"></script>

<!-- main js
============================================ -->
<script src="{{asset('front/js/main.js')}}"></script>
<script>
    $('#sortingCategory').change(function() {

        window.location.replace("http://34.106.224.182/category/"+$("#categoryID").val()+"/"+'1'+"/"+this.value);

    });
    $('#sortingCategorySearch').change(function() {

        window.location.replace("http://34.106.224.182/searching/"+$("#searchId").val()+"/"+'1'+"/"+this.value);

    });


    var idProductForCatChange = 0;
    function addChangeCategeory(id){
        idProductForCatChange = id;
    }
    function changeProductCategory (id){
        if(idProductForCatChange !== 0){
            console.log(location.protocol + "//" + location.host+"/updateProductId/");
            $.ajax({
                type: "POST",
                url: location.protocol + "//" + location.host+"/updateProductId/",
                data: {
                    id:idProductForCatChange,
                    category: id,
                    "_token": "{{ csrf_token() }}",
                },

                cache: false,
                success: function (data) {
                    location.reload();

                }
            });
        }

    }
</script>
</body>
</html>

