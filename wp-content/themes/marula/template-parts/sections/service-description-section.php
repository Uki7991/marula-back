<section class="bg-white dark:bg-dark transition-all duration-500">
	<div class="container mx-auto py-6 md:py-14 px-4">
		<section class="splide service-description-slider">
			<div class="splide__track">
				<ul class="splide__list">
					<?php foreach ($section['descriptions'] as $description): ?>
						<li class="splide__slide">
							<div class="flex flex-col gap-2">
								<p class="text-sand text-xs font-utility uppercase leading-loose tracking-widest"><?php echo $description['title']; ?></p>
								<p class="text-black dark:text-white transition-all duration-500 font-description">
									<?php echo $description['description']; ?>
								</p>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
	</div>
</section>

<script>
	const serviceDescriptionSlider = new Splide('.service-description-slider', {
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
    });

    serviceDescriptionSlider.mount();
</script>