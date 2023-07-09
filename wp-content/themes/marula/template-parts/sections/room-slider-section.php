<div class="bg-white dark:bg-dark py-4 transition-all duration-500">
	<section class="splide room-slider">
		<div class="splide__track">
			<ul class="splide__list">
				<?php foreach ($section['images'] as $image): ?>
					<li class="splide__slide">
						<img src="<?php echo $image; ?>" class="h-full w-full object-cover" alt="">
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
</div>

<script>
    const roomSliderOptions = {
        arrows: false,
        pagination: false,
	    height: 300,
        padding: {right: 80},
        gap: 16,
        mediaQuery: 'min',
        breakpoints: {
            768: {
                perPage: 2,
                padding: {right: 80, left: 80}
            },
            1280: {
                type: 'loop',
                focus: 'center',
                padding: {right: 0, left: 0},
            }
        }
    };

	const roomSlider = new Splide('.room-slider', roomSliderOptions);
    roomSlider.mount();
</script>