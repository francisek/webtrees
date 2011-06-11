<?php
// Xenea theme
//
// webtrees: Web based Family History software
// Copyright (C) 2011 webtrees development team.
//
// Derived from PhpGedView
// Copyright (C) 2002 to 2010  PGV Development Team.  All rights reserved.
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// $Id$

if (!defined('WT_WEBTREES')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$theme_name = "xenea"; // need double quotes, as file is scanned/parsed by script
$stylesheet       = WT_THEME_DIR.'style.css';
$rtl_stylesheet   = WT_THEME_DIR.'style_rtl.css';
$print_stylesheet = WT_THEME_DIR.'print.css';
$headerfile       = WT_THEME_DIR.'header.php';
$footerfile       = WT_THEME_DIR.'footer.php';
$WT_USE_HELPIMG   = true;

//-- variables for image names
$WT_IMAGES=array(
	'add'=>WT_THEME_DIR.'images/add.png',
	'admin'=>WT_THEME_DIR.'images/admin.png',
	'ancestry'=>WT_THEME_DIR.'images/ancestry.png',
	'calendar'=>WT_THEME_DIR.'images/calendar.png',
	'center'=>WT_THEME_DIR.'images/center.gif',
	'cfamily'=>WT_THEME_DIR.'images/cfamily.png',
	'charts'=>WT_THEME_DIR.'images/pedigree.png',
	'childless'=>WT_THEME_DIR.'images/childless.png',
	'children'=>WT_THEME_DIR.'images/children.png',
	'clippings'=>WT_THEME_DIR.'images/clippings.png',
	'darrow'=>WT_THEME_DIR.'images/darrow.png',
	'darrow2'=>WT_THEME_DIR.'images/darrow2.png',
	'ddarrow'=>WT_THEME_DIR.'images/ddarrow.png',
	'default_image_F'=>WT_THEME_DIR.'images/silhouette_female.png',
	'default_image_M'=>WT_THEME_DIR.'images/silhouette_male.png',
	'default_image_U'=>WT_THEME_DIR.'images/silhouette_unknown.png',
	'descendant'=>WT_THEME_DIR.'images/descendancy.png',
	'dline'=>WT_THEME_DIR.'images/dline.png',
	'dline2'=>WT_THEME_DIR.'images/dline2.png',
	'edit_fam'=>WT_THEME_DIR.'images/edit_fam.png',
	'edit_indi'=>WT_THEME_DIR.'images/edit_indi.png',
	'edit_media'=>WT_THEME_DIR.'images/edit_indi.png',
	'edit_note'=>WT_THEME_DIR.'images/edit_indi.png',
	'edit_repo'=>WT_THEME_DIR.'images/edit_repo.png',
	'edit_sour'=>WT_THEME_DIR.'images/edit_sour.png',
	'fambook'=>WT_THEME_DIR.'images/fambook.png',
	'fanchart'=>WT_THEME_DIR.'images/fanchart.png',
	'favorites'=>WT_THEME_DIR.'images/gedcom.png',
	'fscreen'=>WT_THEME_DIR.'images/fscreen.gif',
	'gedcom'=>WT_THEME_DIR.'images/gedcom.png',
	'help'=>WT_THEME_DIR.'images/help.png',
	'hline'=>WT_THEME_DIR.'images/hline.png',
	'home'=>WT_THEME_DIR.'images/home.png',
	'hourglass'=>WT_THEME_DIR.'images/hourglass.png',
	'indis'=>WT_THEME_DIR.'images/indis.png',
	'itree'=>WT_THEME_DIR.'images/tree.png',
	'larrow'=>WT_THEME_DIR.'images/larrow.png',
	'larrow2'=>WT_THEME_DIR.'images/larrow2.png',
	'ldarrow'=>WT_THEME_DIR.'images/ldarrow.png',
	'lists'=>WT_THEME_DIR.'images/lists.png',
	
	// - lifespan chart arrows
	'lsdnarrow'=>WT_THEME_DIR.'images/lifespan-down.png',
	'lsltarrow'=>WT_THEME_DIR.'images/lifespan-left.png',
	'lsrtarrow'=>WT_THEME_DIR.'images/lifespan-right.png',
	'lsuparrow'=>WT_THEME_DIR.'images/lifespan-up.png',
	
	'media'=>WT_THEME_DIR.'images/media.png',
	'menu_help'=>WT_THEME_DIR.'images/menu_help.png',
	'menu_media'=>WT_THEME_DIR.'images/menu_media.png',
	'menu_note'=>WT_THEME_DIR.'images/menu_note.png',
	'menu_repository'=>WT_THEME_DIR.'images/menu_repository.png',
	'menu_source'=>WT_THEME_DIR.'images/menu_source.png',
	'minus'=>WT_THEME_DIR.'images/minus.png',
	'mypage'=>WT_THEME_DIR.'images/mypage.png',
	'note'=>WT_THEME_DIR.'images/notes.png',
	'patriarch'=>WT_THEME_DIR.'images/patriarch.png',
	'pedigree'=>WT_THEME_DIR.'images/pedigree.png',
	'place'=>WT_THEME_DIR.'images/place.png',
	'plus'=>WT_THEME_DIR.'images/plus.png',
	'rarrow'=>WT_THEME_DIR.'images/rarrow.png',
	'rarrow2'=>WT_THEME_DIR.'images/rarrow2.png',
	'rdarrow'=>WT_THEME_DIR.'images/rdarrow.png',
	'relationship'=>WT_THEME_DIR.'images/relationship.png',
	'reminder'=>WT_THEME_DIR.'images/reminder.png',
	'remove'=>WT_THEME_DIR.'images/delete.png',
	'reports'=>WT_THEME_DIR.'images/report.png',
	'repository'=>WT_THEME_DIR.'images/repository.png',
	'rings'=>WT_THEME_DIR.'images/rings.png',
	'search'=>WT_THEME_DIR.'images/search.png',
	'selected'=>WT_THEME_DIR.'images/selected.png',
	'sex_f_15x15'=>WT_THEME_DIR.'images/sex_f_15x15.png',
	'sex_f_9x9'=>WT_THEME_DIR.'images/sex_f_9x9.png',
	'sex_m_15x15'=>WT_THEME_DIR.'images/sex_m_15x15.png',
	'sex_m_9x9'=>WT_THEME_DIR.'images/sex_m_9x9.png',
	'sex_u_15x15'=>WT_THEME_DIR.'images/sex_u_15x15.png',
	'sex_u_9x9'=>WT_THEME_DIR.'images/sex_u_9x9.png',
	'sfamily'=>WT_THEME_DIR.'images/sfamily.png',
	'source'=>WT_THEME_DIR.'images/source.png',
	'spacer'=>WT_THEME_DIR.'images/spacer.png',
	'statistic'=>WT_THEME_DIR.'images/statistic.png',
	'stop'=>WT_THEME_DIR.'images/stop.png',
	'timeline'=>WT_THEME_DIR.'images/timeline.png',
	'tree'=>WT_THEME_DIR.'images/tree.png',
	'uarrow'=>WT_THEME_DIR.'images/uarrow.png',
	'uarrow2'=>WT_THEME_DIR.'images/uarrow2.png',
	'udarrow'=>WT_THEME_DIR.'images/udarrow.png',
	'vline'=>WT_THEME_DIR.'images/vline.png',
	'warning'=>WT_THEME_DIR.'images/warning.png',
	'webtrees'=>WT_THEME_DIR.'images/webtrees.png',
	'wiki'=>WT_THEME_DIR.'images/w_22.png',
	'zoomin'=>WT_THEME_DIR.'images/zoomin.png',
	'zoomout'=>WT_THEME_DIR.'images/zoomout.png',
	
	//- buttons for data entry pages
	'button_addmedia'=>WT_THEME_DIR.'images/buttons/addmedia.png',
	'button_addnote'=>WT_THEME_DIR.'images/buttons/addnote.png',
	'button_addrepository'=>WT_THEME_DIR.'images/buttons/addrepository.png',
	'button_addsource'=>WT_THEME_DIR.'images/buttons/addsource.png',
	'button_calendar'=>WT_THEME_DIR.'images/buttons/calendar.png',
	'button_family'=>WT_THEME_DIR.'images/buttons/family.png',
	'button_find_facts'=>WT_THEME_DIR.'images/buttons/find_facts.png',
	'button_head'=>WT_THEME_DIR.'images/buttons/head.png',
	'button_indi'=>WT_THEME_DIR.'images/buttons/indi.png',
	'button_keyboard'=>WT_THEME_DIR.'images/buttons/keyboard.png',
	'button_media'=>WT_THEME_DIR.'images/buttons/media.png',
	'button_note'=>WT_THEME_DIR.'images/buttons/note.png',
	'button_place'=>WT_THEME_DIR.'images/buttons/place.png',
	'button_repository'=>WT_THEME_DIR.'images/buttons/repository.png',
	'button_source'=>WT_THEME_DIR.'images/buttons/source.png',
	'target'=>WT_THEME_DIR.'images/buttons/target.png',
	
	// media images
	'media_audio'=>WT_THEME_DIR.'images/media/audio.png',
	'media_doc'=>WT_THEME_DIR.'images/media/doc.png',
	'media_flash'=>WT_THEME_DIR.'images/media/flash.png',
	'media_flashrem'=>WT_THEME_DIR.'images/media/flashrem.png',
	'media_ged'=>WT_THEME_DIR.'images/media/ged.png',
	'media_globe'=>WT_THEME_DIR.'images/media/globe.png',
	'media_html'=>WT_THEME_DIR.'images/media/html.png',
	'media_pdf'=>WT_THEME_DIR.'images/media/pdf.png',
	'media_picasa'=>WT_THEME_DIR.'images/media/picasa.png',
	'media_tex'=>WT_THEME_DIR.'images/media/tex.png',
	'media_wmv'=>WT_THEME_DIR.'images/media/wmv.png',
	'media_wmvrem'=>WT_THEME_DIR.'images/media/wmvrem.png',
);

//-- Variables for the Fan chart
$fanChart = array(
	'font' => WT_ROOT.'includes/fonts/DejaVuSans.ttf',
	'size' => '7px',
	'color' => '#000000',
	'bgColor' => '#eeeeee',
	'bgMColor' => '#b1cff0',
	'bgFColor' => '#e9daf1'
);

//-- This section defines variables for the pedigree chart
$bwidth = 220; // -- width of boxes on pedigree chart
$bheight = 80; // -- height of boxes on pedigree chart
$baseyoffset = 10; // -- position the entire pedigree tree relative to the top of the page
$basexoffset = 10; // -- position the entire pedigree tree relative to the left of the page
$bxspacing = 1; // -- horizontal spacing between boxes on the pedigree chart
$byspacing = 5; // -- vertical spacing between boxes on the pedigree chart
$brborder = 1; // -- box right border thickness

// -- global variables for the descendancy chart
$Dbaseyoffset = 0; // -- position the entire descendancy tree relative to the top of the page
$Dbasexoffset = 0; // -- position the entire descendancy tree relative to the left of the page
$Dbxspacing = 1; // -- horizontal spacing between boxes
$Dbyspacing = 2; // -- vertical spacing between boxes
$Dbwidth = 270; // -- width of DIV layer boxes
$Dbheight = 80; // -- height of DIV layer boxes
$Dindent = 15; // -- width to indent descendancy boxes
$Darrowwidth = 15; // -- additional width to include for the up arrows

$CHARTS_CLOSE_HTML = true; //-- should the charts, pedigree, descendacy, etc close the HTML on the page

// --  The largest possible area for charts is 300,000 pixels. As the maximum height or width is 1000 pixels
$WT_STATS_S_CHART_X = "440";
$WT_STATS_S_CHART_Y = "125";
$WT_STATS_L_CHART_X = "900";
// --  For map charts, the maximum size is 440 pixels wide by 220 pixels high
$WT_STATS_MAP_X = "440";
$WT_STATS_MAP_Y = "220";

$WT_STATS_CHART_COLOR1 = "ffffff";
$WT_STATS_CHART_COLOR2 = "84beff";
$WT_STATS_CHART_COLOR3 = "c3dfff";
