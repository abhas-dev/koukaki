<?php
if (!empty($characters)) {
	foreach ($characters as $character) {
		echo "<div class='swiper'>";
        echo "<div class='swiper-wrapper'>";
        echo "<div class='swiper-slide'>Slide 1</div>";
        echo "</div>";
        echo "</div>";

		echo '<figure>';
		echo get_the_post_thumbnail($character['ID'], 'full');
		echo '<figcaption>' . $character['title'] . '</figcaption>';
		echo '</figure>';
	}
}
?>


<div class="swiper charactersSwiper">
	<div class="swiper-wrapper">
		<?php
		if (!empty($characters)) :
			foreach ($characters as $character) : ?>
				<div class="swiper-slide">
					<figure>
						<?= get_the_post_thumbnail($character['ID'], 'full'); ?>
						<figcaption><?= $character['title'] ?></figcaption>
					</figure>
				</div>
			<?php
			endforeach;
		endif;
		?>
	</div>
</div>
