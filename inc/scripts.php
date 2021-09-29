<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-999999999-1', 'auto');
	ga('send', 'pageview');
</script>

<script>
	var body = document.querySelector('body');
	body.addEventListener('click', function(e){
		if (e.target.nodeName === 'A') {
			var elHref = e.target.href || '';
			if (elHref.search('tel') === 0) {
				var phoneNum = elHref.replace('tel:','');
				ga('send', 'event', phoneNum, 'call');
			}
		}
	});
</script>