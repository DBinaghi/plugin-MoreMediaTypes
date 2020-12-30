<?php 
	$ms_office_formats = get_option('more_media_types_msofficeformats');
	$ms_office_x_formats = get_option('more_media_types_msofficexformats');
	$open_office_formats = get_option('more_media_types_openofficeformats');
	$text_format = get_option('more_media_types_text');
	$rtf_format = get_option('more_media_types_rtf');
	$html_format = get_option('more_media_types_html');
	$pdf_format = get_option('more_media_types_pdf');
	$compressed_format = get_option('more_media_types_compressed');
	$ebook_format = get_option('more_media_types_ebook');
	$replace_standard_icons = get_option('more_media_types_replacestandardicons');
	$view = get_view();
?>

<p><?php echo __('Please note: when enabling new media types, check that they are allowed as per <a href="/admin/settings/edit-security" title="click to open the configuration page" target="_blank">Omeka configuration</a>.'); ?></p>

<h2><?php echo __('Microsoft Office formats'); ?></h2>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_msofficeformats', __('Add standard formats')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, adds images for Microsoft standard formats: Word, Excel and PowerPoint.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_msofficeformats', $ms_office_formats, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_msofficexformats', __('Add XML formats')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, adds images for Microsoft Office xml formats of Word, Excel and PowerPoint (warning: check that the media type is allowed in Omeka configuration).'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_msofficexformats', $ms_office_x_formats, null, array('1', '0')); ?>
	</div>
</div>

<h2><?php echo __('Open Office formats'); ?></h2>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_openofficeformats', __('Add standard formats')); ?>
	</div>					
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, adds images for Open Office standard formats: Writer, Calc and Impress.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_openofficeformats', $open_office_formats, null, array('1', '0')); ?>
	</div>
</div>

<h2><?php echo __('Other formats'); ?></h2>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_text', __('Add text format')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, adds image for text format.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_text', $text_format, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_text', __('Add RTF format')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, adds image for RTF (Rich Text Format) format.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_rtf', $rtf_format, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_html', __('Add HTML format')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, adds image for HTML (HyperText Markup Language) format.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_html', $html_format, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_pdf', __('Add PDF format')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, adds image for PDF (Portable Document Format) format.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_pdf', $pdf_format, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_ebook', __('Add eBook formats (ePub & MOBI)')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, adds image for eBook (ePub & MOBI) formats.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_ebook', $ebook_format, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_compressed', __('Add compressed formats')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, adds image for ZIP, RAR and ARJ compressed formats.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_compressed', $compressed_format, null, array('1', '0')); ?>
	</div>
</div>

<h2><?php echo __('Default images'); ?></h2>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_replacestandardicons', __('Change default images')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, changes default images for Image, Audio and Video formats, as well as the default fallback one.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_replacestandardicons', $replace_standard_icons, null, array('1', '0')); ?>
	</div>
</div>
