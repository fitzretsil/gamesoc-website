/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	config.toolbar = 'philsoc';

        config.toolbar_philsoc =
                [
                    ['Source'],
                    ['Cut','Copy','Paste','PasteText','PasteFromWord','-', 'SpellChecker'],
                    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
                    ['Image','Table','HorizontalRule','SpecialChar','PageBreak'],
                    ['Link','Unlink','Anchor'],
                    ['Maximize', 'ShowBlocks'],
                    '/',
                    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
                    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
                    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                    ['Styles','Format','FontSize'],
                    ['TextColor','BGColor']
                ];

};
