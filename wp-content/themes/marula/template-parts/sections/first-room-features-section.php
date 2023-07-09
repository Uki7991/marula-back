<section class="bg-white dark:bg-dark transition-all duration-500 flex">
	<div class="container mx-auto px-4 py-8 flex-col justify-start items-start inline-flex space-y-7 md:py-14 xl:flex-row xl:justify-between xl:items-center">
		<div class="xl:w-1/2">
			<p class="text-sand text-xs font-normal font-utility uppercase leading-loose tracking-widest">
				<?php echo $section['prefix']; ?>
			</p>
			<p class="text-black text-2xl font-title font-light dark:text-white transition-all duration-500 mt-3 md:text-4xl xl:text-5xl"><?php echo $section['title']; ?></p>
			<div class="text-black text-lg font-normal font-description leading-normal dark:text-white transition-all duration-500 mt-5 flex flex-col gap-3 xl:mt-10">
				<?php echo $section['description']; ?>
			</div>
		</div>

		<div class="flex flex-col gap-7 xl:w-1/3">
			<div class="flex flex-col gap-2 md:flex-row md:max-w-[80%] md:gap-10 xl:max-w-none">
				<ul class="list-disc list-inside flex flex-col gap-2 xl:list-outside">
					<?php foreach ($section['features1'] as $feature): ?>
						<li
						    class="text-black text-lg font-normal font-description leading-normal dark:text-white transition-all duration-500">
							<?php echo $feature['name']; ?>
						</li>
					<?php endforeach; ?>
				</ul>
				<ul class="list-disc list-inside flex flex-col gap-2 xl:list-outside">
					<?php foreach ($section['features2'] as $feature): ?>
						<li
							class="text-black text-lg font-normal font-description leading-normal dark:text-white transition-all duration-500">
							<?php echo $feature['name']; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<a href="#"
				   class="text-sand text-xs font-normal font-utility uppercase leading-loose tracking-widest">more</a>
			</div>
		</div>


	</div>
</section>