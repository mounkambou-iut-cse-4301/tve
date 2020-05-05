	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
				<div class="float-left">
					<ul class="list header_social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>

					</ul>
				</div>
				<div class="float-right">
					<a class="dn_btn" href="">+018 6936 2503</a>
					<a class="dn_btn" href="">abdelkarim@iut-dhaka.edu</a>
				</div>
			</div>
		</div>
		<div class="main_menu"  style="background-color:#008B8B">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active "><a class="nav-link text_nav" href="/">Home</a></li>
							<li class="nav-item"><a class="nav-link text_nav" href="/firstyeardetail">CSE 1</a></li>
							<li class="nav-item"><a class="nav-link text_nav" href="/secondyeardetail">CSE 2</a></li>
							<li class="nav-item"><a class="nav-link text_nav" href="/thirdyeardetail">CSE 3</a></li>
							<li class="nav-item"><a class="nav-link text_nav" href="/fourthyeardetail">CSE 4</a></li>
							 @guest
							<li class="nav-item"><a class="nav-link text_nav" href="/teacherlogin">Login As Teacher</a></li>
							<li class="nav-item"><a class="nav-link text_nav" href="/login">Login As Student</a></li>
                            @endguest
                            @auth
                            <li class="nav-item"><a class="nav-link text_nav" href="/logout_s_t">Logout</a></li>
                           
                            @endauth
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area End =================-->