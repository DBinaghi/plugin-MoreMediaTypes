<?php 
	$ms_office_formats = get_option('more_media_types_msofficeformats');
	$ms_office_x_formats = get_option('more_media_types_msofficexformats');
	$open_office_formats = get_option('more_media_types_openofficeformats');
	$text_format = get_option('more_media_types_text');
	$html_format = get_option('more_media_types_html');
	$pdf_format = get_option('more_media_types_pdf');
	$compressed_format = get_option('more_media_types_compressed');
	$replace_standard_icons = get_option('more_media_types_replacestandardicons');
	$view = get_view();
?>

<h2><?php echo __('Formati Microsoft Office'); ?></h2>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_msofficeformats', __('Aggiunge formati standard')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('Se selezionata, aggiunge le icone per i formati standard Microsoft Office: Word, Excel e PowerPoint.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_msofficeformats', $ms_office_formats, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_msofficexformats', __('Aggiunge formati xml')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('Se selezionata, aggiunge le icone per i formati xml Microsoft Office di Word, Excel e PowerPoint (attenzione: verificare che il tipo di media sia accettato nella configurazione di Omeka)'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_msofficexformats', $ms_office_x_formats, null, array('1', '0')); ?>
	</div>
</div>

<h2><?php echo __('Formati Open Office'); ?></h2>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_openofficeformats', __('Aggiunge formati standard')); ?>
	</div>					
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('Se selezionata, aggiunge le icone per i formati standard Open Office: Writer, Calc e Impress.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_openofficeformats', $open_office_formats, null, array('1', '0')); ?>
	</div>
</div>

<h2><?php echo __('Altri formati'); ?></h2>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_text', __('Aggiunge formato testo')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('Se selezionata, aggiunge una icona per il formato testo.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_text', $text_format, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_html', __('Aggiunge formato HTML')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('Se selezionata, aggiunge una icona per il formato HTML.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_html', $html_format, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_pdf', __('Aggiunge formato PDF')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('Se selezionata, aggiunge una icona per il formato PDF.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_pdf', $pdf_format, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_compressed', __('Aggiunge formati compressi')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('Se selezionata, aggiunge una icona per i formati compressi ZIP e ARJ.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_compressed', $compressed_format, null, array('1', '0')); ?>
	</div>
</div>

<h2><?php echo __('Icone standard'); ?></h2>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('more_media_types_replacestandardicons', __('Sostituisce icone standard')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('Se selezionata, sostituisce le icone standard per i formati Image, Audio, Video e quella di default.'); ?>
		</p>
		<?php echo $view->formCheckbox('more_media_types_replacestandardicons', $replace_standard_icons, null, array('1', '0')); ?>
	</div>
</div>