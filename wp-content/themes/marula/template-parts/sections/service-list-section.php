<section class="bg-white dark:bg-dark transition-all duration-500">
	<div class="container mx-auto grid gap-10 grid-cols-1 px-4 py-16 md:grid-cols-2">
		<div class="xl:w-3/5">
			<div class="flex-col flex justify-start items-start gap-6 md:gap-10">
				<p class="text-sand text-xs font-utility  uppercase leading-loose tracking-widest">The price
					includes
				</p>
				<div class="flex-col justify-start items-start flex font-description gap-4 text-black dark:text-white transition-all duration-500">
					<?php foreach ($section['services']['includes'] as $service): ?>
						<p class="text-lg  leading-normal"><?php echo $service['name']; ?></p>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="xl:w-3/5">
			<div class="justify-end items-center inline-flex">
				<div class="flex-col justify-start items-start gap-6 md:gap-10 inline-flex">
					<p class="text-sand text-xs font-utility uppercase leading-loose tracking-widest">For an
						additional fee
					</p>
					<div class="flex-col justify-start items-start gap-4 text-black dark:text-white transition-all duration-500 flex font-description">
						<?php foreach ($section['services']['fee'] as $service): ?>
							<p class="text-lg  leading-normal"><?php echo $service['name']; ?></p>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>