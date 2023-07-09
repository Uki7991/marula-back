<section class="bg-white py-6 dark:bg-dark transition-all duration-500 xl:py-14">
	<div class="container mx-auto px-4">
		<section class="splide second-room-features-slide">
			<div class="splide__track">
				<ul class="splide__list">
					<?php foreach ($section['sliders'] as $slide): ?>
						<li class="splide__slide">
							<div class="flex flex-col gap-2">
								<p class="text-sand text-xs font-utility uppercase leading-loose tracking-widest"><?php echo $slide['features']['title']; ?></p>
								<ul class="list-disc flex flex-col gap-2 list-inside">
									<?php foreach ($slide['features']['features'] as $feature): ?>
										<li v-for="feature in features" class="text-black text-lg font-description leading-normal dark:text-white transition-all duration-500"><?php echo $feature['name'];  ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
	</div>
</section>

<script>
    const secondRoomFeaturesOptions = {
        fixedWidth: 220,
        gap: 20,
        arrows: false,
        pagination: false,
        padding: {right: 80},
        mediaQuery: 'min',
        breakpoints: {
            1024: {
                gap: 95,
            }
        }
    }

    const secondRoomFeaturesSlider = new Splide('.second-room-features-slide', secondRoomFeaturesOptions);
    secondRoomFeaturesSlider.mount();
</script>