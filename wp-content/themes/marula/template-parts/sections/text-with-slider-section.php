<section class="bg-white dark:bg-dark transition-all duration-500 py-16 px-4 flex flex-col xl:flex-row xl:items-center xl:p-0">
	<div class="flex flex-col justify-start items-start gap-6 md:gap-12 xl:px-10 xl:py-16 xl:w-1/2">
		<div class="flex-col justify-start items-start gap-2 flex">
			<div class="text-sand text-xs font-utility uppercase leading-loose tracking-widest"><?php echo $section['prefix']; ?></div>
			<div class="font-title text-black text-2xl font-light dark:text-white transition-all duration-500 md:text-4xl xl:text-5xl">
				<?php echo $section['title']; ?>
			</div>
		</div>
		<div class="dark:text-white text-lg font-description leading-normal text-black transition-all duration-500">
			<?php echo $section['description']; ?>
		</div>
	</div>
	<div class="mt-6 xl:w-1/2 xl:mt-0">
		<section class="splide splide-main">
			<div class="splide__track">
				<ul class="splide__list">
					<?php foreach ($section['gallery'] as $slide): ?>
						<li class="splide__slide">
							<img class="w-full h-full object-cover" src="<?php echo $slide; ?>" alt="">
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
		<div class="mt-4">
			<section class="splide splide-thumb">
				<div class="splide__track">
					<ul class="splide__list">
						<?php foreach ($section['gallery'] as $slide): ?>
							<li class="splide__slide">
								<img class="w-full h-full object-cover" src="<?php echo $slide; ?>" alt="">
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</section>
		</div>
	</div>
</section>

<script>
    document.addEventListener( 'DOMContentLoaded', function() {
        const splideMain = new Splide( '.splide-main', {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            gap: '1rem',
            arrows: false,
            pagination: false,
        } );
        const splideThumb = new Splide( '.splide-thumb', {
            type: 'slide',
            rewind: true,
            gap: '1rem',
            pagination: false,
            arrows: false,
            fixedWidth: 110,
            fixedHeight: 70,
            cover: true,
            focus: 'left',
            isNavigation: true,
            updateOnMove: true,
        } );
        splideMain.mount();
        splideThumb.mount();

        splideMain.sync(splideThumb);
    } );
</script>