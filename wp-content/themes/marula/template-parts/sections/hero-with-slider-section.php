<div class="relative">
	<section class="splide hero-splide">
		<div class="splide__track">
			<ul class="splide__list">
				<?php foreach ($section['images'] as $image): ?>
					<li class="splide__slide">
						<img src="<?php echo $image; ?>" class="w-full h-screen object-cover" alt="">
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<p class="text-xs z-10 font-utility absolute bottom-7 left-4 md:left-7 uppercase text-white">Home / Services / horse riding</p>
</div>

<script>
    const heroOptions = {
        mediaQuery: 'min',
        arrows: false,
        pagination: false,
        type: 'loop',
        breakpoints: {
            1280: {
                // arrows: {
                //     prev: '<img src="/assets/icons/arrow-left.svg">',
                //     next: '<img src="/assets/icons/arrow-right.svg">',
                // }
            }
        }
    }

    const heroSplide = new Splide('.hero-splide', heroOptions);

    heroSplide.mount();
</script>