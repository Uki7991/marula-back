<div class="bg-black text-white font-utility text-xs">
	<div class="container mx-auto py-8 px-14">
		<h2 class="uppercase text-2xl text-center"><?php echo $section['title']; ?></h2>
		<form action="" class="mt-8 flex flex-col space-y-10 md:flex-wrap md:flex-row md:space-y-8 xl:flex-nowrap xl:space-y-0 xl:space-x-10">
			<div class="flex flex-col w-full md:space-x-10 md:flex-row space-y-10 md:space-y-0 lg:w-auto lg:flex-1">
				<div class=" lg:w-1/3">
					<label class="uppercase" for="hotel">
						<?php echo $section['lodge']; ?>
					</label>
					<input id="hotel" type="text"
					       class="text-xs focus:outline-0 focus:ring-0 focus:border-white/80 w-full bg-transparent border-0 border-b border-white/80">
				</div>

				<div class="flex space-x-7 md:space-x-10 md:flex-1">
					<div class="flex-1">
						<label class="uppercase" for="arrival">
							<?php echo $section['arrival']; ?>
						</label>
						<input id="arrival" type="text"
						       class="text-xs focus:outline-0 focus:ring-0 focus:border-white/80 w-full bg-transparent border-0 border-b border-white/80">
					</div>
					<div class="flex-1">
						<label class="uppercase" for="departure">
							<?php echo $section['departure']; ?>
						</label>
						<input id="departure" type="text"
						       class="text-xs focus:outline-0 focus:ring-0 focus:border-white/80 w-full bg-transparent border-0 border-b border-white/80">
					</div>
				</div>
			</div>

			<div class="hidden md:block w-full xl:hidden"></div>

			<div class="flex flex-col space-y-10 w-full md:space-x-10 md:flex-row md:space-y-0 lg:w-auto lg:flex-1">
				<div class="md:flex-1">
					<label class="uppercase" for="guests">
						<?php echo $section['guests_count']; ?>
					</label>
					<input id="guests" type="text"
					       class="text-xs focus:outline-0 focus:ring-0 focus:border-white/80 w-full bg-transparent border-0 border-b border-white/80">
				</div>

				<button class="border border-white px-10 py-3 uppercase block mx-auto w-full py-5 md:w-auto md:m-0 md:flex-1">
					<?php echo $section['button']; ?>
				</button>
			</div>
		</form>
	</div>
</div>