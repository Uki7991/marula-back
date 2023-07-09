<section style="background-image: url(<?php echo $section['background_image']; ?>);" class="h-screen bg-cover bg-no-repeat bg-center relative">
	<div class="absolute w-full h-full top-0 left-0 bg-black/20 z-10"></div>
	<div class="container mx-auto flex flex-col space-y-12 justify-center z-20 relative items-center text-gray-50 h-full md:flex-row md:justify-between md:space-y-0">
		<?php foreach ($section['statistics'] as $statistic): ?>
		<div class="text-center max-w-[220px] font-light font-title xl:max-w-[270px]">
			<p class="text-lg uppercase leading-5"><?php echo $statistic['statistic']['prefix'] ?? ''; ?></p>
			<p class="text-3xl md:text-6xl md:leading-[66px] xl:text-7xl xl:leading-[90px] "><?php echo $statistic['statistic']['counter']; ?></p>
			<p class="text-xl uppercase leading-5 mt-2"><?php echo $statistic['statistic']['title']; ?></p>
			<p class="text-xl mt-4"><?php echo $statistic['statistic']['description']; ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</section>