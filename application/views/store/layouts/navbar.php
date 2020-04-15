<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="<?= asset_url()?>store/images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="#">Kemeja</a></li>
			<li><a href="#">Kaos</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="<?= asset_url()?>store/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+1 912-252-7350</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="<?= base_url()?>">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="<?= asset_url()?>store/images/logo_1.png" alt=""></div>
						<div><?= $title; ?></div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Kids</a></li>
					<li><a href="#">Home Deco</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="<?= asset_url()?>store/images/search.png" alt=""></button>
					</form>
				</div>
				<!-- User -->
				<div class="user"><a href="<?= base_url('admin/Authentication')?>"><div><img src="<?= asset_url()?>store/images/user.svg" alt="https://www.flaticon.com/authors/freepik">
					<!-- <div>1</div> -->
				</div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="#"><div><img class="svg" src="<?= asset_url()?>store/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><a href="https://wa.me/+6285764196854?text=Halo%20Luxura%20saya%20ingin%20pesan%20produk" target="__blank"><img src="<?= asset_url()?>store/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></a></div></div>
				</div>
			</div>
		</div>
	</header>