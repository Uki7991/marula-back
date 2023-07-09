<?php

get_header();

$isSectionSet = false;

foreach ( get_fields()['sections'] as $section ) {
	$file = str_replace('_', '-', array_shift($section));
	$isTwoColumn = $file === 'two-column-info-section';
	if (!$isTwoColumn && !$isSectionSet) {
		echo '<div class="section fp-auto-height-responsive">';
		$isSectionSet = true;
	}
	if ($isTwoColumn && $isSectionSet) {
		echo '</div>';
		$isSectionSet = false;
	}

	include get_template_directory() . "/template-parts/sections/$file.php";

}
get_footer();