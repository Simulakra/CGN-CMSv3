/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config
	config.filebrowserBrowseUrl = '../../std/ckeditor/plugins/kcfinder/browse.php?type=files&lang=tr';
   	config.filebrowserImageBrowseUrl = '../../std/ckeditor/plugins/kcfinder/browse.php?type=images&lang=tr';
    config.filebrowserFlashBrowseUrl = '../../std/ckeditor/plugins/kcfinder/browse.php?type=flash&lang=tr';

   	config.forcePasteAsPlainText = true;

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'tools' },
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'others' },
		{ name: 'about' }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Subscript,Superscript,SImage';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';

	//----------custom wordcount block
	config.wordcount = {

    // Whether or not you want to show the Paragraphs Count
    showParagraphs: false,

    // Whether or not you want to show the Word Count
    showWordCount: true,

    // Whether or not you want to show the Char Count
    showCharCount: true,

    // Whether or not you want to count Spaces as Chars
    countSpacesAsChars: false,

    // Whether or not to include Html chars in the Char Count
    countHTML: true,
    
    // Maximum allowed Word Count, -1 is default for unlimited
    maxWordCount: -1,

    // Maximum allowed Char Count, -1 is default for unlimited
    maxCharCount: -1,

    // Add filter to add or remove element before counting (see CKEDITOR.htmlParser.filter), Default value : null (no filter)
    filter: new CKEDITOR.htmlParser.filter({
        elements: {
            div: function( element ) {
                if(element.attributes.class == 'mediaembed') {
                    return false;
                }
            }
        }
    })
	};
};
