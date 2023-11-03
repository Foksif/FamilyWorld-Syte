<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <script src="/public/scripts/popper.js"></script>
	<link rel="stylesheet" href="/public/styles/main.css" type="text/css"/>
</head>
<body>
	<!-- Header -->


	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<div class="header__block">
					<a href="/" class="header__logo">
						<img class="header__img" src="/public/images/logo.png" alt="">

					</a>
				</div>
				<!-- /header__block -->

				<nav class="nav">
					<a href="rules" class="nav__link">Rules</a>
					<a href="about" class="nav__link">About</a>
					<a href="faqs" class="nav__link">faqs</a>
					<a href="https://discord.gg/eQvpBKECFh" class="nav__link">Discord</a>
				</nav>
				<!-- /nav -->
				
				<div class="header__block">
					<div class="header__auth">
						<?php 
							
							if (!isset($_SESSION['authorize']['id'])) {
								echo '<a class="header__auth-l" href="">Log In</a>';
							}
							if (isset($_SESSION['authorize']['id'])) {
								echo '<a class="header__auth-l" href="">Exit</a>';
							}
						?>
						
					</div>
				</div>

			</div>
			<!-- /header__wrapper -->
		</div>
		<!-- /container -->
	</header>


	<!-- Header end -->

	<?php echo $content; ?>
	
	<!-- Footer -->

	<footer id="footer-section">
        <div class="container">
            <div class="footer">
                <div class="footer-about">
                    <div class="footer-logo-wrap">
                        <img class="footer-about__img" src="/public/images/logo.png" alt="HKinvision logo">
                        <h3 class="footer-about__header">FamilyWorld</h3>
                    </div>
                    <p class="footer-about__text">Сервер FamilyWorld не относится к Mojang Studios.</p>
                </div>
                <div class="footer-nav-wrap">
                    <div class="footer-nav">
                        <h3 class="footer-nav__header">Main</h3>
                        <ul class="footer-nav__list">
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="rules">Rules</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="about">About</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="about">Developers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-nav">
                        <h3 class="footer-nav__header">Support</h3>
                        <ul class="footer-nav__list">
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="faqs">FAQ</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="#">Terms of use</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-nav">
                        <h3 class="footer-nav__header">FamilyWorld</h3>
                        <ul class="footer-nav__list">
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="#">News</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="#">Forum</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="footer-social">
                    <a class="footer-social__link" href="https://discord.gg/eQvpBKECFh"></a>
                    <a class="footer-social__link" href="https://www.twitch.tv/foks_f"></a>
                    <a class="footer-social__link" href="https://www.youtube.com/channel/UCQWXl4zgc8ISgGTS8ChJHgA"></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <p class="footer-copyright__text">©2023 HyperTeam.</p>
            </div>
        </div>
    </footer>


	<!-- Footer end -->
	
</body>
</html>