<?php
	/**
	 * MoreMediaTypes plugin
	 *
	 * @package MoreMediaTypes
	 * @copyright Daniele Binaghi, 2019-2022
	 * @license https://www.cecill.info/licences/Licence_CeCILL_V2.1-en.html CeCILL v2.1
	 */

	class MoreMediaTypesPlugin extends Omeka_Plugin_AbstractPlugin
	{
		const MIME_MS_DOC	= 'application/doc';
		const MIME_MS_DOC_2	= 'application/ms-doc';
		const MIME_MS_DOC_3	= 'application/msword';
		const MIME_MS_XLS	= 'application/excel';
		const MIME_MS_XLS_2	= 'application/vnd.ms-excel';
		const MIME_MS_XLS_3	= 'application/vnd.ms-office';
		const MIME_MS_PPT	= 'application/powerpoint';
		const MIME_MS_PPT_2	= 'application/mspowerpoint';
		const MIME_MS_PPT_3	= 'application/vnd.ms-powerpoint';
		const MIME_MS_DOCX	= 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
		const MIME_MS_XLSX	= 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
		const MIME_MS_PPTX	= 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
		const MIME_OOO_ODT	= 'application/vnd.oasis.opendocument.text';
		const MIME_OOO_SXC	= 'application/vnd.oasis.opendocument.spreadsheet';
		const MIME_OOO_SXI	= 'application/vnd.oasis.opendocument.presentation';
		const MIME_TEXT		= 'text/plain';
		const MIME_RTF		= 'application/rtf';
		const MIME_RTF_2	= 'text/rtf';
		const MIME_HTML		= 'text/html';
		const MIME_ZIP		= 'application/zip';
		const MIME_ARJ		= 'application/arj';
		const MIME_RAR		= 'application/x-rar';
		const MIME_PDF		= 'application/pdf';
		const MIME_EPUB		= 'application/epub+zip';
		const MIME_MOBI		= 'application/vnd.amazon.mobi8-ebook';
		const MIME_MOBI_2	= 'application/x-mobipocket-ebook';
		const MIME_MOBI_3	= 'application/vnd.amazon.ebook';
		const MIME_AUDIO	= 'audio';
		const MIME_IMAGE	= 'image';
		const MIME_VIDEO	= 'video';
		const MIME_GENERIC	= 'generic';

		protected $_hooks = array(
			'install',
			'uninstall',
			'initialize',
			'config',
			'config_form'
		);

		public function hookInstall()
		{
			set_option('more_media_types_msofficeformats', '0');
			set_option('more_media_types_msofficexformats', '0');
			set_option('more_media_types_openofficeformats', '0');
			set_option('more_media_types_text', '0');
			set_option('more_media_types_rtf', '0');
			set_option('more_media_types_html', '0');
			set_option('more_media_types_pdf', '0');
			set_option('more_media_types_ebook', '0');
			set_option('more_media_types_compressed', '0');
			set_option('more_media_types_replacestandardicons', '0');
		}

		public function hookUninstall()
		{
			delete_option('more_media_types_msofficeformats');
			delete_option('more_media_types_msofficexformats');
			delete_option('more_media_types_openofficeformats');
			delete_option('more_media_types_text');
			delete_option('more_media_types_rtf');
			delete_option('more_media_types_html');
			delete_option('more_media_types_pdf');
			delete_option('more_media_types_ebook');
			delete_option('more_media_types_compressed');
			delete_option('more_media_types_replacestandardicons');
		 }

		public function hookInitialize()
		{
			add_translation_source(dirname(__FILE__) . '/languages');

			if (get_option('more_media_types_msofficeformats')) {
				add_file_fallback_image(self::MIME_MS_DOC,	'fallback-ms_word.png');
				add_file_fallback_image(self::MIME_MS_DOC_2,'fallback-ms_word.png');
				add_file_fallback_image(self::MIME_MS_DOC_3,'fallback-ms_word.png');
				add_file_fallback_image(self::MIME_MS_XLS, 	'fallback-ms_excel.png');
				add_file_fallback_image(self::MIME_MS_XLS_2,'fallback-ms_excel.png');
				add_file_fallback_image(self::MIME_MS_XLS_3,'fallback-ms_excel.png');
				add_file_fallback_image(self::MIME_MS_PPT, 	'fallback-ms_powerpoint.png');
				add_file_fallback_image(self::MIME_MS_PPT_2,'fallback-ms_powerpoint.png');
				add_file_fallback_image(self::MIME_MS_PPT_3,'fallback-ms_powerpoint.png');
			}
			if (get_option('more_media_types_msofficexformats')) {
				add_file_fallback_image(self::MIME_MS_DOCX, 'fallback-ms_word.png');
				add_file_fallback_image(self::MIME_MS_XLSX, 'fallback-ms_excel.png');
				add_file_fallback_image(self::MIME_MS_PPTX, 'fallback-ms_powerpoint.png');
			}
			if (get_option('more_media_types_openofficeformats')) {
				add_file_fallback_image(self::MIME_OOO_ODT,	'fallback-ooo_writer.png');
				add_file_fallback_image(self::MIME_OOO_SXC,	'fallback-ooo_calc.png');
				add_file_fallback_image(self::MIME_OOO_SXI,	'fallback-ooo_impress.png');
			}
			if (get_option('more_media_types_text')) 	add_file_fallback_image(self::MIME_TEXT,	'fallback-text.png');
			if (get_option('more_media_types_rtf')) 	add_file_fallback_image(self::MIME_RTF,		'fallback-rtf.png');
			if (get_option('more_media_types_rtf')) 	add_file_fallback_image(self::MIME_RTF_2,	'fallback-rtf.png');
			if (get_option('more_media_types_html')) 	add_file_fallback_image(self::MIME_HTML,	'fallback-html.png');
			if (get_option('more_media_types_pdf')) 	add_file_fallback_image(self::MIME_PDF,		'fallback-pdf.png');
			if (get_option('more_media_types_ebook')) {
				add_file_fallback_image(self::MIME_EPUB,	'fallback-epub.png');
				add_file_fallback_image(self::MIME_MOBI,	'fallback-mobi.png');
				add_file_fallback_image(self::MIME_MOBI_2,	'fallback-mobi.png');
				add_file_fallback_image(self::MIME_MOBI_3,	'fallback-mobi.png');
			}
			if (get_option('more_media_types_compressed')) {
				add_file_fallback_image(self::MIME_ZIP, 'fallback-compressed.png');
				add_file_fallback_image(self::MIME_ARJ, 'fallback-compressed.png');
				add_file_fallback_image(self::MIME_RAR, 'fallback-compressed.png');
			}
			if (get_option('more_media_types_replacestandardicons')) {
			    add_file_fallback_image(self::MIME_AUDIO,	'fallback-audio1.png');
			    add_file_fallback_image(self::MIME_IMAGE,	'fallback-image1.png');
			    add_file_fallback_image(self::MIME_VIDEO,	'fallback-video1.png');
			    add_file_fallback_image(self::MIME_GENERIC,	'fallback-file1.png');
			}
		}

		public function hookConfig($args)
		{
			$post = $args['post'];
			set_option('more_media_types_msofficeformats', $post['more_media_types_msofficeformats']);
			set_option('more_media_types_msofficexformats', $post['more_media_types_msofficexformats']);
			set_option('more_media_types_openofficeformats', $post['more_media_types_openofficeformats']);
			set_option('more_media_types_text', $post['more_media_types_text']);
			set_option('more_media_types_rtf', $post['more_media_types_rtf']);
			set_option('more_media_types_html', $post['more_media_types_html']);
			set_option('more_media_types_pdf', $post['more_media_types_pdf']);
			set_option('more_media_types_ebook', $post['more_media_types_ebook']);
			set_option('more_media_types_compressed', $post['more_media_types_text']);
			set_option('more_media_types_replacestandardicons', $post['more_media_types_replacestandardicons']);
		}

		public function hookConfigForm()
		{
			include 'config_form.php';
		}
	}
?>
