<div class="bg-white dark:bg-dark transition-all duration-500">
	<div class="container mx-auto px-4 py-10 xl:items-center xl:px-10 xl:py-24 xl:flex"
	     :class="{'xl:flex-row': direction === 'ltr', 'xl:flex-row-reverse': direction === 'rtl'}">
		<h3 class="font-utility text-black text-sm mb-8 tracking-wider xl:w-1/3 xl:text-2xl dark:text-white transition-all duration-500"
		    :class="{'xl:text-right': direction === 'rtl'}">Relaxing</h3>
		<div class="relative overflow-hidden flex-1">
			<section class="splide splide-slider">
				<div class="splide__track">
					<ul class="splide__list">
						<?php foreach ( $section['slides'] as $slide ): ?>
							<li class="splide__slide">
								<div class="">
									<img class="xl:h-[500px] object-cover" src="<?php echo $slide['image'] ?>" alt="">
									<p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white uppercase font-title font-light text-xl xl:text-3xl">
										<?php echo $slide['service']; ?>
									</p>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>

<script>
    const direction = <?php echo $section['direction']; ?>;
    document.addEventListener('DOMContentLoaded', function () {

        const padding = direction === 'ltr' ? {right: 80, left: 40} : {left: 80, right: 40}

        const splideSlider = new Splide('.splide-slider', {
            rewind: false,
            perPage: 1,
            arrows: false,
            pagination: false,
            gap: '1rem',
            direction: 'ltr',
            padding: {right: 80},
            mediaQuery: 'min',
            breakpoints: {
                768: {
                    perPage: 2,
                },
                1280: {
                    perPage: 1,
                    padding: padding,
                    direction: direction,
                    height: 600
                }
            }
        });

        splideSlider.mount();
    });

</script>