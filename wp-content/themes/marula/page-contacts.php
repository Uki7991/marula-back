<?php
	get_header();
?>

<section class="px-4 pt-36 pb-10 bg-white dark:bg-dark flex flex-col space-y-12 transition-all duration-500 md:px-8 xl:flex-row xl:px-0 xl:pb-0">
	<div class="xl:w-1/2">
		<img class="w-full object-cover" src="<?php echo get_template_directory_uri() . '/assets/images/map.jpg' ?>" alt="">
	</div>
	<div class="flex-1 flex flex-col space-y-6 md:space-y-16 xl:justify-center xl:px-40">
		<p class="font-title text-black dark:text-white text-2xl font-light transition-all duration-500 md:text-5xl">Contact details</p>
		<div class="flex flex-col gap-6">
			<p class=""><span class="text-sand text-xs font-utility uppercase leading-loose tracking-widest">email:&nbsp;</span><span class="text-black dark:text-white text-lg font-description underline leading-normal transition-all duration-500">bookingmarulapark.com</span></p>
			<p class=""><span class="text-sand text-xs font-utility uppercase leading-loose tracking-widest">telephone:&nbsp;</span><span class="text-black dark:text-white text-lg font-description underline leading-normal transition-all duration-500">+264 (0)81 684 0335</span></p>
			<p class=""><span class="text-sand text-xs font-utility uppercase leading-loose tracking-widest">Whatsapp:&nbsp;</span><span class="text-black dark:text-white text-lg font-description underline leading-normal transition-all duration-500">+264 (0)81 684 0335</span></p>
		</div>
		<button class="border px-10 py-3 uppercase border-black dark:border-white font-description font-normal dark:text-white w-max transition-all duration-500">
			Contact
		</button>
	</div>
</section>

<?php

get_footer();

?>
