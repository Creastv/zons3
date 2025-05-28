<?php
$title = get_field('display_title', get_the_ID());
$customTitle = get_field('custom_title', get_the_ID());



?>
<?php if ($title || is_home() || is_archive() || is_search() || is_tag() || $customTitle && $customTitle['title']): ?>
	<header class="entry-header text-center">

		<?php if ($title || is_home() || is_archive() || is_search() || is_tag()): ?>
			<h1 class="entry-title">
				<?php if (is_category()) :
					single_cat_title();
				elseif (is_tax()) :
					single_tag_title();
				elseif (get_post_type(get_the_ID()) == 'nasze-specjalizacje' && is_singular('nasze-specjalizacje')) :
					the_title();
				elseif (get_post_type(get_the_ID()) == 'zespol') :
					_e('Prelegenci', 'go');

				elseif (is_404()) :
					_e('404', 'go');
				elseif (is_search()) :
					_e('Wyniki wyszukiwania', 'go');
				elseif (is_page()) :
					the_title();
				elseif (is_tag()) :
					single_tag_title();

				elseif (is_author()) :
					the_post();
					printf(__('%s', 'go'), get_the_author());
					rewind_posts();
				elseif (is_day()) :
					printf(__('Dzień: %s', 'go'), '<span>' . get_the_date() . '</span>');
				elseif (is_month()) :
					printf(__('Miesiąc: %s', 'go'), '<span>' . get_the_date('F Y') . '</span>');
				elseif (is_year()) :
					printf(__('Rok: %s', 'go'), '<span>' . get_the_date('Y') . '</span>');
				elseif (is_tax('post_format', 'post-format-aside')) :
					_e('Asides', 'go');
				elseif (is_tax('post_format', 'post-format-image')) :
					_e('Images', 'go');
				elseif (is_tax('post_format', 'post-format-video')) :
					_e('Videos', 'go');
				elseif (is_tax('post_format', 'post-format-quote')) :
					_e('Quotes', 'go');
				elseif (is_tax('post_format', 'post-format-link')) :
					_e('Links', 'go');
				else :
					_e('Aktualności', 'go');
				endif; ?>
			</h1>
		<?php else : ?>
			<div class="entry-header__wrap">
				<?php if (!empty($customTitle['label'])): ?>
					<span class="entry-label"><?php echo $customTitle['label']; ?></span>
				<?php endif; ?>
				<?php if (!empty($customTitle['title'])): ?>
					<h1 class="entry-title">
						<?php echo $customTitle['title']; ?>
					</h1>
				<?php endif; ?>
			</div>
			<?php if (!empty($customTitle['description'])): ?>
				<div class="entry-desc">
					<?php echo $customTitle['description']; ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		<?php if (is_home()): ?>
			<ul class="archive-cat">
				<?php
				$categories = get_categories();
				foreach ($categories as $category) {
					echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
				}
				?>
			</ul>
		<?php endif; ?>
		<?php if (is_category()) : ?>
			<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
			<?php the_archive_description('<div class="entry-desc">', '</div>'); ?>
		<?php endif; ?>

	</header>
<?php endif; ?>