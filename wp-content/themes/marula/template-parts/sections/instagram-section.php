<div class="bg-black flex flex-col md:flex-row md:items-center">
	<div class=" py-10 px-4 md:flex-1">
		<div class="flex flex-col space-y-4">
			<p class="text-xs font-utility text-sand"><?php echo $instagram['prefix']; ?></p>
			<h3 class="text-white font-title text-2xl font-light md:text-4xl xl:text-5xl"><?php echo $instagram['title']; ?></h3>
		</div>

		<div class="mt-20 font-description text-white text-lg flex flex-col space-y-2">
			<a href=""><?php echo $instagram['hashtag']; ?></a>
			<p><?php echo $instagram['description']; ?></p>
		</div>
	</div>
	<div class="md:shrink-0 flex xl:w-1/2">
		<div class="relative w-full">
			<img src="<?php echo $instagram['image_url'] ?>" class="w-full object-cover" alt="">
			<img src="<?php echo get_template_directory_uri().'/assets/icons/instagram.svg'; ?>" class="absolute top-4 left-4 w-7 h-7" alt="">
		</div>
		<div class="relative w-full hidden xl:block">
			<img src="<?php echo $instagram['image_url'] ?>" class="w-full object-cover" alt="">
			<img src="<?php echo get_template_directory_uri().'/assets/icons/instagram.svg'; ?>" class="absolute top-4 left-4 w-7 h-7" alt="">
		</div>
	</div>
</div>