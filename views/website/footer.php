<section class="subfooter">
	<div class="container">
		<div class="row">
			<div class="col l3 s12 sub-footer-col">
				<img src="/img/logo.png" class="responsive-img"><br>
				<p style="text-align: justify;">Tylos academy for games &amp; recreation private limited is an unlisted private company incorporated on 23 march, 2015. The registered office of the company is at ramkripa, ourambath house Velappaya p.o., Thrissur, kerala.</p>
				<a href="https://www.facebook.com/TYLOS-Academy-387548051664078/"><div class="social-icons fb"></div></a> <a href="#"><div class="social-icons twitter"></div></a> <a href="#"><div class="social-icons gplus"></div></a> <a href="#"><div class="social-icons instagram"></div></a> <a href="#"><div class="social-icons youtube"></div></a>
			</div>
			<div class="col l3 s12 sub-footer-col">
				<h6 class="white-text">Latest Blog</h6>
				<ul class="news">
					<?php 
					$db = new db; 
					$data = $db->get('news','title,`id`',"WHERE status = 1 ORDER BY `id` DESC");
					foreach($data['result'] as $key=>$rw){
						$slug = strtolower($rw[0]);
					$slug = preg_replace('#[ -]+#', '-', $slug);
					?>
					<li><a href="/blog/<?php echo $rw[1]; ?>/<?php echo $slug ?>"><?php echo $rw[0]; ?></a></li>
					<?php
					}
					?>
				</ul>
			</div>
			<div class="col l3 s12 sub-footer-col">
				<h6 class="white-text">Latest tweets</h6>
				<ul class="news">
					<li><a href="#"><img src="/img/twitter-icon.png" class="responsive-img left"> Federer enjoyed a stellar 2017 and added two more Grand Slam titles - Australian Open and Wimbledon - to take his haul to 19.</a></li>
					<li><a href="#"><img src="/img/twitter-icon.png" class="responsive-img left"> World No.65 Daniil Medvedev was confirmed as top seed for the ATP Challenger event,</a></li>
					<li><a href="#"><img src="/img/twitter-icon.png" class="responsive-img left"> Brighton at forefront of FA plan to revolutionise English women’s football</a></li>
				</ul>
			</div>
			<div class="col l3 s12">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=796032190561711';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-page" data-href="https://www.facebook.com/TYLOS-Academy-387548051664078/" data-tabs="timeline" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/TYLOS-Academy-387548051664078/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TYLOS-Academy-387548051664078/">TYLOS Academy</a></blockquote></div>
				<h6 class="white-text">NewsLetter</h6>
				<p>Subscribe to our Newsletter</p>
				<div class="input-field">
					<div class="col s8 no-padding"><input type="text" class="newsletter-input" name="news-letter-email" placeholder="Your Email"></div><div class="col s4 no-padding"><button class="newsletter-btn"><i class="material-icons">send</i></button></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col s12">
				&copy; Tylos Academy for Games &amp; Recreation (P) Ltd., All Rights Reserved
			</div>
		</div>
	</div>
</section>
<ul id="slide-out" class="side-nav">
    <li><div class="user-view" style="height: 200px;">
      <div class="background">
        <img src="/img/banner-home.jpg">
      </div>
    </div></li>
    <li><a href="/">Home</a></li>
    <li><a href="/about-us-tylos/">We're tylos</a></li>
	<li><a href="/search/court-new/">Courts</a></li>
	<li><a href="/search/room-new/">Rooms</a></li>
	<li><a href="/search/events/">Courses</a></li>
	<li><a href="/blog/">Blog</a></li>
	<li><a href="/gallery/">Gallery</a></li>
	<li><a href="/contact-us-tylos/">Contact Us</a></li>
  </ul>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<!--<script src="https://api.klubsta.com/sdk.js?v=0.2.0"> </script>-->
<script src="/js/moment.min.js" type="text/javascript"></script>
<script src="/js/daterangepicker.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/app.js?v=2.0.9"></script>
<script type="text/javascript" src="/js/multislider.min.js"></script>
</body>
</html>
