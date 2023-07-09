<?php
/**
 * The footer.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$currentLanguage = pll_current_language();

$lodgesMenu = array_reduce(wp_get_nav_menu_items("footer-lodges-menu-$currentLanguage"), 'transformMenu', []);
$footerSecondMenu = array_reduce(wp_get_nav_menu_items("footer-second-menu-$currentLanguage"), 'transformMenu', []);
?>

<footer class="bg-black font-utility text-white text-xs">
	<div class="container mx-auto px-4 pt-8 pb-20 flex flex-col md:flex-row md:flex-wrap md:justify-around md:items-end xl:items-start">
		<div class="flex flex-col items-center justify-center order-first">
			<img src="<?php echo get_template_directory_uri().'/assets/logo.svg'; ?>" class="xl:w-20 xl:h-20" alt="">
			<img src="<?php echo get_template_directory_uri().'/assets/under-logo.svg'; ?>" class="xl:transform xl:scale-150 mt-3" alt="">
		</div>
		<button class="border border-white px-10 py-3 uppercase mx-auto block mt-9 px-12 py-5 order-4 md:order-1 md:m-0 xl:order-4 xl:mt-8">
			Book staying
		</button>

		<div class="w-full order-2 hidden md:block xl:hidden"></div>

		<?php foreach ($lodgesMenu as $menu_item): ?>
			<nav class="mt-8 order-2">
				<?php if ($menu_item['url'] === '#'): ?>
					<div class="text-lg"><?php echo $menu_item['title']; ?></div>
				<?php else: ?>
					<a href="<?php echo $menu_item['url']; ?>" class="text-lg"><?php echo $menu_item['title']; ?></a>
				<?php endif; ?>
				<ul class="flex flex-col space-y-7 mt-7">
					<?php foreach ($menu_item['children'] as $child): ?>
						<li>
							<a href="<?php echo $child['url']; ?>"><?php echo $child['title']; ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</nav>
		<?php endforeach; ?>
		<nav class="mt-10 order-3 xl:mt-8">
			<ul class="flex flex-col space-y-7">
				<?php foreach ($footerSecondMenu as $menu_item): ?>
					<li>
						<a href="<?php echo $menu_item['url']; ?>"><?php echo $menu_item['title']; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</nav>

		<div class="w-full hidden xl:block order-last"></div>

		<?php
			$socialsExtendClasses = 'mt-20 justify-center order-last';
			include get_template_directory().'/template-parts/components/socials-component.php';
		?>
	</div>
</footer>

<!--</div>-->

</body>
</html>