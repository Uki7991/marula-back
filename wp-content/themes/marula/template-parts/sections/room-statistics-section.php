<section class="bg-white dark:bg-dark transition-all duration-500">
	<div class="container mx-auto flex flex-wrap justify-around gap-4 py-5 px-4 md:py-14 xl:justify-between">
		<?php foreach ($section['statistics'] as $index => $statistic): ?>
			<div class="flex-col justify-start items-start gap-1 inline-flex">
				<p class=" text-sand text-3xl font-light font-title uppercase tracking-widest md:text-5xl"><?php echo $statistic['statistic']['title']; ?></p>
				<p class="transition-all duration-500 font-description text-black text-sm uppercase tracking-wider dark:text-white md:text-2xl"><?php echo $statistic['statistic']['description']; ?></p>
			</div>
			<?php if (($index + 1) % 2 == 0): ?>
				<div class="w-full md:hidden"></div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</section>