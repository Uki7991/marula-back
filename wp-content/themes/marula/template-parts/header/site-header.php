<?php

$currentLanguage = pll_current_language();

$rightMenu = array_reduce(wp_get_nav_menu_items("second-menu-$currentLanguage"), 'transformMenu', []);
$leftMenu = array_reduce(wp_get_nav_menu_items("first-menu-$currentLanguage"), 'transformMenu', []);
$mobileMenu = array_reduce(wp_get_nav_menu_items("mobile-menu-$currentLanguage"), 'transformMenu', []);

//echo '<pre>';
//var_dump(wp_get_nav_menu_items("second-menu-$currentLanguage"));
//echo '</pre>';

?>

<header x-data="{isOpenMenu: false, darkMode: false, toggleDarkMode() {
        if (document.documentElement.classList.contains('dark')) {
            this.darkMode = false;
            document.documentElement.classList.remove('dark')
            localStorage.theme = 'light'
        } else {
            this.darkMode = true;
            document.documentElement.classList.add('dark')
            localStorage.theme = 'dark'
        }
    }}" class="font-utility text-white fixed w-full bg-gradient-to-b from-black/70 via-black/20 to-transparent z-50">
	<div class="container mx-auto  px-4 py-6 flex justify-between items-center static text-xs md:px-8 xl:px-10 relative min-h-[120px]">
		<nav>
			<img @click="isOpenMenu = !isOpenMenu" class="cursor-pointer xl:hidden" src="<?php echo esc_url(get_template_directory_uri().'/assets/icons/burger.svg') ?>" alt="">
			<ul class="space-x-10 hidden xl:flex">
				<?php foreach ($leftMenu as $menu_item): ?>
				<li class="relative group">
					<?php if ($menu_item['url'] === '#'): ?>
						<div class="group-hover:text-sand transition-all duration-300 cursor-pointer">
							<?php echo $menu_item['title']; ?>
						</div>
					<?php else: ?>
						<a class="group-hover:text-sand transition-all duration-300" href="<?php echo $menu_item['url']; ?>">
							<?php echo $menu_item['title']; ?>
						</a>
					<?php endif; ?>
					<?php if ($menu_item['children']): ?>
						<ul class="hidden flex-col mt-4 min-w-max absolute top-0 pt-4 left-0 group-hover:flex transition-all duration-500">
							<?php foreach ($menu_item['children'] as $child): ?>
								<li class="">
									<a class="py-2 px-4 bg-dark hover:bg-gray-500 block" href="<?php echo $child['url']; ?>"><?php echo $child['title']; ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
			</ul>
		</nav>
		<a href="<?php echo wp_get_nav_menu_items("main-menu-$currentLanguage")[0]->url; ?>" class="flex flex-col items-center justify-center space-y-2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
			<img src="<?php echo esc_url(get_template_directory_uri().'/assets/logo.svg') ?>" alt="">
			<img src="<?php echo esc_url(get_template_directory_uri().'/assets/under-logo.svg') ?>" alt="">
		</a>
		<nav class="flex items-center space-x-4 md:space-x-11">
			<ul class="hidden xl:block">
				<?php foreach (array_filter($rightMenu, function ($key) {return $key !== 'lang';}, ARRAY_FILTER_USE_KEY) as $menu_item): ?>
				<li>
					<a href="<?php echo $menu_item['url']; ?>">
						<?php echo $menu_item['title']; ?>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>

			<div class="flex items-center space-x-1 cursor-pointer relative group">
				<span class="uppercase"><?php echo $currentLanguage; ?></span>
				<img src="<?php echo esc_url(get_template_directory_uri().'/assets/icons/arrow.svg') ?>" alt="">
				<ul class="hidden flex-col mt-4 min-w-max absolute top-0 pt-4 left-0 group-hover:flex transition-all duration-500">
					<?php foreach ($rightMenu['lang'] as $lang): ?>
						<li class="">
							<a class="py-2 px-4 bg-dark hover:bg-gray-500 block" href="<?php echo $lang['url']; ?>"><?php echo $lang['title']; ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<img class="cursor-pointer w-5 h-5" x-show="!darkMode" @click="toggleDarkMode()" src="<?php echo esc_url(get_template_directory_uri().'/assets/icons/moon.svg') ?>" alt="">
			<img class="cursor-pointer w-5 h-5" x-show="darkMode" @click="toggleDarkMode()" src="<?php echo esc_url(get_template_directory_uri().'/assets/icons/sun.svg') ?>" alt="">
			<button class="border border-white px-10 py-3 uppercase hidden xl:block">
				Book staying
			</button>
		</nav>
	</div>
	<nav class="h-screen z-50 w-screen bg-black top-0 left-0 flex flex-col justify-around items-center transition-all transform -translate-x-full duration-500 fixed xl:hidden" :class="{'translate-x-0': isOpenMenu}">
		<img @click="isOpenMenu = !isOpenMenu" src="<?php echo esc_url(get_template_directory_uri().'/assets/icons/x.svg') ?>" class="w-7 h-7 absolute top-5 right-5 cursor-pointer" alt="">
		<ul class="mx-auto py-[20%] flex flex-col space-y-12 text-center">
			<?php foreach ($mobileMenu as $menu_item): ?>
				<li>
					<a href="<?php echo $menu_item['url']; ?>">
						<?php echo $menu_item['title']; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>

		<ul class="flex space-x-10">
			<li>
				<a href="#">
					<img src="<?php echo esc_url(get_template_directory_uri().'/assets/icons/facebook.svg') ?>" alt="">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?php echo esc_url(get_template_directory_uri().'/assets/icons/twitter.svg') ?>" alt="">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?php echo esc_url(get_template_directory_uri().'/assets/icons/instagram.svg') ?>" alt="">
				</a>
			</li>
		</ul>
	</nav>


</header>