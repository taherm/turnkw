<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
<script src="{{asset('master/style-switcher/style.switcher.js')}}" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>
<script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/common/common.min.js')}}"></script>
<script src="{{asset('vendor/jquery.validation/jquery.validation.min.js')}}"></script>
<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
<script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
<script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('vendor/vide/vide.min.js')}}"></script>
<script src="{{asset('/js/instafeed.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')}}"></script>
<script src="{{asset('js/views/view.home.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('js/theme.init.js')}}"></script>
<script type="text/javascript">
	var feed = new Instafeed({
		get: 'user',
		userId: '18973642',
		limit: '4',
		resolution: 'low_resolution',
		accessToken: '18973642.1677ed0.4afd9743af5545219d07f80c56ea9c71',
		template: '  <div class="col-sm-3"><a href="@{{link}}"><img src="@{{image}}" class="img-thumbnail img-responsive"/></a> </div>'
	});
	feed.run();
</script>
<script>
	(function(i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function() {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-42715764-5', 'auto');
	ga('send', 'pageview');
</script>
<script src="{{asset('master/analytics/analytics.js')}}"></script>