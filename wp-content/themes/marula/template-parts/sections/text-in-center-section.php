<div class="bg-white flex transition-all duration-500 dark:bg-dark">
	<div class="container mx-auto py-12 px-4 flex-col justify-center inline-flex xl:py-36 <?php echo $section['left'] ? 'items-start' : 'items-center'; ?>">
		<p class="text-sand text-xs font-utility uppercase leading-loose tracking-widest <?php echo $section['left'] ? 'xl:w-1/2' : 'text-center'; ?>"><?php echo $section['prefix']; ?></p>
		<h3 class="text-black text-2xl font-light font-title mt-4 dark:text-white transition-all duration-500 md:text-4xl xl:text-5xl <?php echo $section['left'] ? 'xl:w-1/2' : 'text-center'; ?>"><?php echo $section['title']; ?></h3>
		<p class="text-black text-lg font-normal leading-normal font-description mt-10 dark:text-white transition-all duration-500 <?php echo $section['left'] ? 'xl:w-1/2' : 'text-center'; ?>"><?php echo $section['description']; ?></p>
	</div>
</div>