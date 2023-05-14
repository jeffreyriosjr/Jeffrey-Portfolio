<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jeffrey_alexander_rios_jr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Oswald:wght@200&family=Qwitcher+Grypen&display=swap"
		rel="stylesheet">
	<script src="https://kit.fontawesome.com/ba414641d6.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="navigation container-fluid mt-4">
		<ul class="m-0">
			<li class="list active">
				<a href="#">
					<span class="icon">
						<ion-icon name="home-outline"></ion-icon>
					</span>
					<span class="text">Home</span>
				</a>
			</li>
			<li class="list">
				<a href="#">
					<span class="icon">
						<ion-icon name="person-outline"></ion-icon>
					</span>
					<span class="text">Profile</span>
				</a>
			</li>
			<li class="list">
				<a href="#">
					<span class="icon">
						<ion-icon name="chatbubble-outline"></ion-icon>
					</span>
					<span class="text">Message</span>
				</a>
			</li>
			<li class="list">
				<a href="#">
					<span class="icon">
						<ion-icon name="camera-outline"></ion-icon>
					</span>
					<span class="text">Photos</span>
				</a>
			</li>
			<li class="list">
				<a href="#">
					<span class="icon">
						<ion-icon name="settings-outline"></ion-icon>
					</span>
					<span class="text">Settings</span>
				</a>
			</li>
			<div class="indicator"></div>
		</ul>
	</div>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script>const list = document.querySelectorAll(".list");

		function activeLink() {
			list.forEach((item) => item.classList.remove("active"));
			this.classList.add("active");
		}
		list.forEach((item) => item.addEventListener("click", activeLink));
	</script>