<section class="grid grid-cols-1 md:grid-cols-2">
	<?php foreach ($section['lodges'] as $lodge): ?>
		<a href="<?php echo get_permalink($lodge); ?>" class=" relative group text-white h-[250px] overflow-hidden xl:h-[400px]">
			<div style="background-image: url(<?php echo get_field('image', $lodge) ?>);" class=" bg-cover bg-no-repeat absolute top-0 left-0 w-full h-full transition-all duration-300 transform group-hover:scale-125"></div>
			<div class="absolute top-0 left-0 w-full h-full bg-black/75"></div>
			<div class="z-20 relative h-full flex justify-center items-center">
				<h3 class="font-title font-light text-2xl max-w-[280px] uppercase text-center md:text-3xl md:max-w-[350px] xl:text-5xl xl:max-w-[560px]"><?php echo get_the_title($lodge); ?></h3>
				<div class="w-10 h-10 bg-sand flex justify-center items-center absolute right-0 bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 xl:w-16 xl:h-16">
					>
				</div>
			</div>
		</a>
	<?php endforeach; ?>
</section>