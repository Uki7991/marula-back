<section class="section two-column-info-section bg-white py-12 px-4 xl:p-0 dark:bg-dark transition-all duration-500">
	<div class="container mx-auto xl:flex xl:flex-row xl:w-full xl:max-w-none xl:items-center xl:h-screen">
		<div class=" xl:w-1/2 xl:px-8 text-black dark:text-white transition-all duration-500">
			<div class="md:w-2/3 xl:w-auto xl:px-16">
				<p class="text-sand text-xs text-utility"><?php echo $section['prefix']; ?></p>
				<h3 class="font-title text-2xl font-light mt-4 md:text-4xl xl:text-5xl"><?php echo $section['title']; ?></h3>

				<div class="text-base mt-5 font-description">
					<?php echo $section['description']; ?>
				</div>
			</div>
		</div>
		<img src="<?php echo $section['image']; ?>" alt="" class="mt-6 w-full xl:h-screen xl:object-cover xl:m-0 xl:w-1/2 transition-all duration-500 delay-100">
	</div>
</section>