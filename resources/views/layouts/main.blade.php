<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>@yield('title')
	  </title>
		<link rel="stylesheet" id="wp-block-library-css" href="{{ asset('css/style.min.css') }}">
		<link rel="stylesheet" id="esteem_style-css" href="{{ asset('css/style(1).css') }}">
		<link rel="stylesheet" id="esteem-responsive-css" href="{{ asset('css/responsive.css') }}">
		<link rel="stylesheet" id="esteem-fontawesome-css" href="{{ asset('css/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		
		<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery-migrate.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/corona-virus-data-public.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/esteem-custom.js') }}"></script>

   </head>
   <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" class="home page-template page-template-page-templates page-template-business page-template-page-templatesbusiness-php page page-id-20 wp-custom-logo no-sidebar-full-width blog-medium wide better-responsive-menu">
    
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header id="masthead" class="site-header" role="banner">

		<div class="inner-wrap">
			<div class="hgroup-wrap clearfix">
				<div class="site-branding">
					<div class="header-logo-image">
						<a href="{{url('/') }}" class="custom-logo-link" rel="home"><img width="240" height="55" src="./img/cropped-logov16.png" class="custom-logo" alt="Covid-19 Tanri Abeng University" srcset="./img/cropped-logov16.png 340w, ./img/cropped-logov16-300x93.png 300w" sizes="(max-width: 340px) 100vw, 340px"></a>						
					</div> <!-- .header-logo-image -->

					<div class="header-text screen-reader-text">
						<h1 id="site-title">
						<a href="{{url('/') }}" title="Covid-19 Tanri Abeng University" rel="home">
						Covid-19 Tanri Abeng University								</a>
						</h1>
						<p class="site-description">Informasi Covid-19 Tanri Abeng University</p>
					</div> 
					<!-- .header-text -->
				</div> <!-- .site-branding -->

				<div class="hgroup-wrap-right">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<h3 class="menu-toggle"></h3>
						<div class="nav-menu clearfix">
						<ul id="menu-menu" class="menu nav-menu" aria-expanded="true">
							<li id="menu-item-272" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-20 current_page_item menu-item-272"><a href="{{url('/') }}" aria-current="page">Beranda</a></li>
							<li id="menu-item-275" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-275">
								<a href="{{url('/about') }}">Tentang Covid-19</a>
								<ul class="sub-menu">
									<!-- <li id="menu-item-276" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-276"><a href="#">Info Update</a></li> -->
									<li id="menu-item-277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-277"><a href="{{url('/data-covid') }}">Data Covid-19</a></li>
								</ul>
								<span class="sub-toggle">  </span>
							</li>
							<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-274">
								<a href="{{url('/donasi') }}">Donasi</a>
								<ul class="sub-menu">
									<li id="menu-item-278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-278"><a href="{{url('/penggalangan-bantuan') }}">Penggalangan Bantuan</a></li>
									<li id="menu-item-279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279"><a href="{{url('/permohonan-bantuan') }}">Permohonan Bantuan</a></li>
								</ul>
								<span class="sub-toggle">  </span>
							</li>
							<li id="menu-item-273" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-273"><a href="{{url('/kontak') }}">Contact</a></li>
						</ul>
						</div> <!-- .nav-menu -->
					</nav> <!-- #site-description -->
				</div> <!-- .hgroup-wrap-right -->
			</div> <!-- .hgroup-wrap -->
		</div> <!-- .inner-wrap -->

        </header>

		@yield('container')

         <footer id="colophon" class="clearfix">
            <div class="widget-wrap inner-wrap clearfix">
               <div class="tg-one-third">
                  <aside id="text-3" class="widget widget_text">
                     <h3 class="widget-title"><span>Lorem Ipsum</span></h3>
                     <div class="textwidget">
                        <p class="lead" style="color:white;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                     </div>
                  </aside>
			   </div> <!-- .tg-one-third -->
			   
               <div class="tg-one-third">
                  <aside id="text-4" class="widget widget_text">
                     <h3 class="widget-title"><span>Contact</span></h3>
                     <div class="textwidget">
                        <ul style="color:white;">
                           <li><strong>TANRI ABENG UNIVERSITY</strong></li>
                           <li class="lead">Jl. Swadarma Raya No.58, Ulujami, Pesanggrahan, &nbsp;Jakarta Selatan,12250</li>
                           <li class="lead">Phone : +62 21 5890 8888 (+62) 8123 729 0009</li>
                           <li class="lead">Website : tau.ac.id</li>
                        </ul>
                     </div>
                  </aside>
			   </div> <!-- .tg-one-third -->
			   
               <!-- <div class="tg-one-third tg-one-third-last">
                  <aside id="recent-posts-3" class="widget widget_recent_entries">
                     <h3 class="widget-title"><span>Recent Post</span></h3>
                     <ul>
                        <li>
                           <a href="#">Sejumlah Kampung Ramai-ramai ‘Lockdown’, Bupati Sleman: Bagus!</a>
                        </li>
                        <li>
                           <a href="#">Sebut Tegal Bukan Lockdown Tapi Isolasi Kampung, Ini Alasan Ganjar</a>
                        </li>
                        <li>
                           <a href="#">Pakai Test Kit Corona Beli dari E-Commerce, Seberapa Efektif?</a>
                        </li>
                     </ul>
                  </aside>
               </div> .last -->
            </div> <!-- .widget-wrap -->
            <div id="site-generator" class="inner-wrap">
               <div class="copyright">Copyright © 2020 <a href="{{url('/') }}" title="Covid-19 Tanri Abeng University"><span>Covid-19 Tanri Abeng University</span></a>. Development by <a href="http://tau.ac.id/" target="_blank" title="TAU"><span>TAU</span></a></div>
            </div> <!-- #site-generator -->
         </footer>
         <a href="#" id="scroll-up" style="display: none;"><i class="icon-angle-up"></i></a>
      </div>
		<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.cycle2.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.cycle2.swipe.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/navigation.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/skip-link-focus-fix.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/wp-embed.min.js') }}"></script>
		<!-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> -->
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('js/jquery.sticky.js') }}"></script>
		<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
		<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
		<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('js/aos.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
   </body>
</html>