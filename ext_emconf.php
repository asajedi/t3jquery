<?php

########################################################################
# Extension Manager/Repository config file for ext "t3jquery".
#
# Auto generated 07-05-2010 20:22
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'T3 jQuery',
	'description' => 'Provides a shared version of the jQuery Javascript framework for use in other extensions. See class.tx_t3jquery.php for API and usage. Includes BE module for configuring which parts of jQuery UI you want included.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.1.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Juergen Furrer',
	'author_email' => 'juergen.furrer@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:427:{s:21:"class.tx_t3jquery.php";s:4:"0b97";s:21:"ext_conf_template.txt";s:4:"95c7";s:12:"ext_icon.gif";s:4:"72a2";s:17:"ext_localconf.php";s:4:"e020";s:15:"ext_php_api.dat";s:4:"082c";s:14:"ext_tables.php";s:4:"edea";s:13:"locallang.xml";s:4:"6e83";s:24:"compat/flashmessages.css";s:4:"4e2c";s:20:"compat/gfx/error.png";s:4:"e4dd";s:26:"compat/gfx/information.png";s:4:"3750";s:21:"compat/gfx/notice.png";s:4:"a882";s:17:"compat/gfx/ok.png";s:4:"8bfe";s:22:"compat/gfx/warning.png";s:4:"c847";s:14:"doc/manual.sxw";s:4:"2a25";s:37:"lib/class.tx_t3jquery_tsparserext.php";s:4:"ccb0";s:31:"mod1/class.JavaScriptPacker.php";s:4:"0c37";s:36:"mod1/class.JavaScriptPacker_php5.php";s:4:"f7ed";s:26:"mod1/class.analyzeJqJS.php";s:4:"5681";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"7754";s:14:"mod1/index.php";s:4:"f7e6";s:18:"mod1/locallang.xml";s:4:"2e32";s:22:"mod1/locallang_mod.xml";s:4:"d5a6";s:19:"mod1/moduleicon.gif";s:4:"72a2";s:15:"res/jqconfig.js";s:4:"8cfc";s:26:"res/jquery/jquery-1.2.6.js";s:4:"fb0a";s:26:"res/jquery/jquery-1.3.0.js";s:4:"b1d7";s:26:"res/jquery/jquery-1.3.1.js";s:4:"d99a";s:26:"res/jquery/jquery-1.3.2.js";s:4:"92d4";s:26:"res/jquery/jquery-1.4.0.js";s:4:"02c5";s:26:"res/jquery/jquery-1.4.1.js";s:4:"959e";s:26:"res/jquery/jquery-1.4.2.js";s:4:"c0ac";s:33:"res/jquery/tools/1.1.2/jquery.xml";s:4:"1f04";s:48:"res/jquery/tools/1.1.2/ui/flowplayer.controls.js";s:4:"c6cd";s:45:"res/jquery/tools/1.1.2/ui/flowplayer.embed.js";s:4:"5632";s:39:"res/jquery/tools/1.1.2/ui/flowplayer.js";s:4:"dc26";s:48:"res/jquery/tools/1.1.2/ui/flowplayer.playlist.js";s:4:"7f2f";s:41:"res/jquery/tools/1.1.2/ui/tools.expose.js";s:4:"a363";s:45:"res/jquery/tools/1.1.2/ui/tools.flashembed.js";s:4:"9bb3";s:48:"res/jquery/tools/1.1.2/ui/tools.overlay.apple.js";s:4:"0bbb";s:50:"res/jquery/tools/1.1.2/ui/tools.overlay.gallery.js";s:4:"79d0";s:42:"res/jquery/tools/1.1.2/ui/tools.overlay.js";s:4:"5c4b";s:56:"res/jquery/tools/1.1.2/ui/tools.scrollable.autoscroll.js";s:4:"9261";s:54:"res/jquery/tools/1.1.2/ui/tools.scrollable.circular.js";s:4:"3173";s:45:"res/jquery/tools/1.1.2/ui/tools.scrollable.js";s:4:"58f6";s:56:"res/jquery/tools/1.1.2/ui/tools.scrollable.mousewheel.js";s:4:"828f";s:55:"res/jquery/tools/1.1.2/ui/tools.scrollable.navigator.js";s:4:"4e14";s:47:"res/jquery/tools/1.1.2/ui/tools.tabs.history.js";s:4:"8af8";s:39:"res/jquery/tools/1.1.2/ui/tools.tabs.js";s:4:"0f5d";s:49:"res/jquery/tools/1.1.2/ui/tools.tabs.slideshow.js";s:4:"4fa9";s:50:"res/jquery/tools/1.1.2/ui/tools.tooltip.dynamic.js";s:4:"c38c";s:42:"res/jquery/tools/1.1.2/ui/tools.tooltip.js";s:4:"1c31";s:48:"res/jquery/tools/1.1.2/ui/tools.tooltip.slide.js";s:4:"0997";s:40:"res/jquery/ui/1.6.0/jquery-noConflict.js";s:4:"0da0";s:36:"res/jquery/ui/1.6.0/jquery.easing.js";s:4:"a6f7";s:30:"res/jquery/ui/1.6.0/jquery.xml";s:4:"9d6d";s:39:"res/jquery/ui/1.6.0/ui/effects.blind.js";s:4:"e498";s:40:"res/jquery/ui/1.6.0/ui/effects.bounce.js";s:4:"37d8";s:38:"res/jquery/ui/1.6.0/ui/effects.clip.js";s:4:"084f";s:38:"res/jquery/ui/1.6.0/ui/effects.core.js";s:4:"8e36";s:38:"res/jquery/ui/1.6.0/ui/effects.drop.js";s:4:"c4fe";s:41:"res/jquery/ui/1.6.0/ui/effects.explode.js";s:4:"d50a";s:38:"res/jquery/ui/1.6.0/ui/effects.fold.js";s:4:"c9b8";s:43:"res/jquery/ui/1.6.0/ui/effects.highlight.js";s:4:"ff28";s:41:"res/jquery/ui/1.6.0/ui/effects.pulsate.js";s:4:"bee4";s:39:"res/jquery/ui/1.6.0/ui/effects.scale.js";s:4:"aaa9";s:39:"res/jquery/ui/1.6.0/ui/effects.shake.js";s:4:"f395";s:39:"res/jquery/ui/1.6.0/ui/effects.slide.js";s:4:"60e8";s:42:"res/jquery/ui/1.6.0/ui/effects.transfer.js";s:4:"7d8b";s:46:"res/jquery/ui/1.6.0/ui/jquery-ui-1.6.custom.js";s:4:"8789";s:38:"res/jquery/ui/1.6.0/ui/ui.accordion.js";s:4:"f462";s:33:"res/jquery/ui/1.6.0/ui/ui.core.js";s:4:"1db7";s:39:"res/jquery/ui/1.6.0/ui/ui.datepicker.js";s:4:"d353";s:35:"res/jquery/ui/1.6.0/ui/ui.dialog.js";s:4:"52af";s:38:"res/jquery/ui/1.6.0/ui/ui.draggable.js";s:4:"2641";s:38:"res/jquery/ui/1.6.0/ui/ui.droppable.js";s:4:"ab30";s:38:"res/jquery/ui/1.6.0/ui/ui.resizable.js";s:4:"b44d";s:39:"res/jquery/ui/1.6.0/ui/ui.selectable.js";s:4:"06b6";s:35:"res/jquery/ui/1.6.0/ui/ui.slider.js";s:4:"911b";s:37:"res/jquery/ui/1.6.0/ui/ui.sortable.js";s:4:"c399";s:33:"res/jquery/ui/1.6.0/ui/ui.tabs.js";s:4:"8c6f";s:49:"res/jquery/ui/1.6.0/ui/i18n/jquery.ui.i18n.all.js";s:4:"133e";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-ar.js";s:4:"121c";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-bg.js";s:4:"6545";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-ca.js";s:4:"7fc0";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-cs.js";s:4:"0b06";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-da.js";s:4:"c619";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-de.js";s:4:"f5a9";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-eo.js";s:4:"72f4";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-es.js";s:4:"9315";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-fa.js";s:4:"bbca";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-fi.js";s:4:"f5bf";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-fr.js";s:4:"5be0";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-he.js";s:4:"d03b";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-hr.js";s:4:"f7e0";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-hu.js";s:4:"5831";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-hy.js";s:4:"3281";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-id.js";s:4:"328b";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-is.js";s:4:"c790";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-it.js";s:4:"a071";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-ja.js";s:4:"81d8";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-ko.js";s:4:"0b70";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-lt.js";s:4:"0b1b";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-lv.js";s:4:"9568";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-nl.js";s:4:"5676";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-no.js";s:4:"bce1";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-pl.js";s:4:"8d19";s:50:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-pt-BR.js";s:4:"38e8";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-ro.js";s:4:"691b";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-ru.js";s:4:"c833";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-sk.js";s:4:"d74a";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-sl.js";s:4:"b618";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-sq.js";s:4:"57ff";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-sv.js";s:4:"477e";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-th.js";s:4:"7131";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-tr.js";s:4:"08b7";s:47:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-uk.js";s:4:"c4f4";s:50:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-zh-CN.js";s:4:"be0f";s:50:"res/jquery/ui/1.6.0/ui/i18n/ui.datepicker-zh-TW.js";s:4:"44ef";s:40:"res/jquery/ui/1.7.1/jquery-noConflict.js";s:4:"0da0";s:36:"res/jquery/ui/1.7.1/jquery.easing.js";s:4:"a6f7";s:30:"res/jquery/ui/1.7.1/jquery.xml";s:4:"0537";s:39:"res/jquery/ui/1.7.1/ui/effects.blind.js";s:4:"0991";s:40:"res/jquery/ui/1.7.1/ui/effects.bounce.js";s:4:"1b87";s:38:"res/jquery/ui/1.7.1/ui/effects.clip.js";s:4:"f08f";s:38:"res/jquery/ui/1.7.1/ui/effects.core.js";s:4:"2348";s:38:"res/jquery/ui/1.7.1/ui/effects.drop.js";s:4:"3990";s:41:"res/jquery/ui/1.7.1/ui/effects.explode.js";s:4:"4eae";s:38:"res/jquery/ui/1.7.1/ui/effects.fold.js";s:4:"69cd";s:43:"res/jquery/ui/1.7.1/ui/effects.highlight.js";s:4:"13aa";s:41:"res/jquery/ui/1.7.1/ui/effects.pulsate.js";s:4:"d661";s:39:"res/jquery/ui/1.7.1/ui/effects.scale.js";s:4:"2a54";s:39:"res/jquery/ui/1.7.1/ui/effects.shake.js";s:4:"0952";s:39:"res/jquery/ui/1.7.1/ui/effects.slide.js";s:4:"0db9";s:42:"res/jquery/ui/1.7.1/ui/effects.transfer.js";s:4:"2565";s:38:"res/jquery/ui/1.7.1/ui/ui.accordion.js";s:4:"3a63";s:33:"res/jquery/ui/1.7.1/ui/ui.core.js";s:4:"4dcd";s:39:"res/jquery/ui/1.7.1/ui/ui.datepicker.js";s:4:"0e1c";s:35:"res/jquery/ui/1.7.1/ui/ui.dialog.js";s:4:"4876";s:38:"res/jquery/ui/1.7.1/ui/ui.draggable.js";s:4:"1cb4";s:38:"res/jquery/ui/1.7.1/ui/ui.droppable.js";s:4:"c231";s:40:"res/jquery/ui/1.7.1/ui/ui.progressbar.js";s:4:"67fe";s:38:"res/jquery/ui/1.7.1/ui/ui.resizable.js";s:4:"4905";s:39:"res/jquery/ui/1.7.1/ui/ui.selectable.js";s:4:"ae55";s:35:"res/jquery/ui/1.7.1/ui/ui.slider.js";s:4:"4bd8";s:37:"res/jquery/ui/1.7.1/ui/ui.sortable.js";s:4:"aa83";s:33:"res/jquery/ui/1.7.1/ui/ui.tabs.js";s:4:"79cb";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-ar.js";s:4:"825b";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-bg.js";s:4:"3bc2";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-ca.js";s:4:"763e";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-cs.js";s:4:"2e3e";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-da.js";s:4:"b511";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-de.js";s:4:"bd00";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-el.js";s:4:"6056";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-eo.js";s:4:"50b6";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-es.js";s:4:"f817";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-fa.js";s:4:"0018";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-fi.js";s:4:"da07";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-fr.js";s:4:"9ad7";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-he.js";s:4:"cf87";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-hr.js";s:4:"633a";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-hu.js";s:4:"d79e";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-hy.js";s:4:"dd77";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-id.js";s:4:"bc1a";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-is.js";s:4:"1cc8";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-it.js";s:4:"cb20";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-ja.js";s:4:"bb67";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-ko.js";s:4:"a57e";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-lt.js";s:4:"3454";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-lv.js";s:4:"973a";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-ms.js";s:4:"3d5c";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-nl.js";s:4:"83e4";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-no.js";s:4:"b42c";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-pl.js";s:4:"dae5";s:50:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-pt-BR.js";s:4:"8cdf";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-ro.js";s:4:"ccd5";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-ru.js";s:4:"5dc4";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-sk.js";s:4:"dfa4";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-sl.js";s:4:"67a2";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-sq.js";s:4:"bb5a";s:50:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-sr-SR.js";s:4:"463b";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-sr.js";s:4:"7ec9";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-sv.js";s:4:"f842";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-th.js";s:4:"46de";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-tr.js";s:4:"0b4f";s:47:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-uk.js";s:4:"e5e7";s:50:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-zh-CN.js";s:4:"ae93";s:50:"res/jquery/ui/1.7.1/ui/i18n/ui.datepicker-zh-TW.js";s:4:"4786";s:40:"res/jquery/ui/1.7.2/jquery-noConflict.js";s:4:"0da0";s:36:"res/jquery/ui/1.7.2/jquery.easing.js";s:4:"a6f7";s:30:"res/jquery/ui/1.7.2/jquery.xml";s:4:"0537";s:39:"res/jquery/ui/1.7.2/ui/effects.blind.js";s:4:"5463";s:40:"res/jquery/ui/1.7.2/ui/effects.bounce.js";s:4:"402a";s:38:"res/jquery/ui/1.7.2/ui/effects.clip.js";s:4:"355a";s:38:"res/jquery/ui/1.7.2/ui/effects.core.js";s:4:"d7c2";s:38:"res/jquery/ui/1.7.2/ui/effects.drop.js";s:4:"d78b";s:41:"res/jquery/ui/1.7.2/ui/effects.explode.js";s:4:"d8e3";s:38:"res/jquery/ui/1.7.2/ui/effects.fold.js";s:4:"2e89";s:43:"res/jquery/ui/1.7.2/ui/effects.highlight.js";s:4:"cb0e";s:41:"res/jquery/ui/1.7.2/ui/effects.pulsate.js";s:4:"6521";s:39:"res/jquery/ui/1.7.2/ui/effects.scale.js";s:4:"c642";s:39:"res/jquery/ui/1.7.2/ui/effects.shake.js";s:4:"82cc";s:39:"res/jquery/ui/1.7.2/ui/effects.slide.js";s:4:"8e17";s:42:"res/jquery/ui/1.7.2/ui/effects.transfer.js";s:4:"c7a4";s:38:"res/jquery/ui/1.7.2/ui/ui.accordion.js";s:4:"1136";s:33:"res/jquery/ui/1.7.2/ui/ui.core.js";s:4:"3819";s:39:"res/jquery/ui/1.7.2/ui/ui.datepicker.js";s:4:"aa49";s:35:"res/jquery/ui/1.7.2/ui/ui.dialog.js";s:4:"a5dc";s:38:"res/jquery/ui/1.7.2/ui/ui.draggable.js";s:4:"8199";s:38:"res/jquery/ui/1.7.2/ui/ui.droppable.js";s:4:"2645";s:40:"res/jquery/ui/1.7.2/ui/ui.progressbar.js";s:4:"bb02";s:38:"res/jquery/ui/1.7.2/ui/ui.resizable.js";s:4:"3fa4";s:39:"res/jquery/ui/1.7.2/ui/ui.selectable.js";s:4:"7d7f";s:35:"res/jquery/ui/1.7.2/ui/ui.slider.js";s:4:"c4e8";s:37:"res/jquery/ui/1.7.2/ui/ui.sortable.js";s:4:"b2dc";s:33:"res/jquery/ui/1.7.2/ui/ui.tabs.js";s:4:"8b5f";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-ar.js";s:4:"825b";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-bg.js";s:4:"3bc2";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-ca.js";s:4:"763e";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-cs.js";s:4:"2e3e";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-da.js";s:4:"b511";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-de.js";s:4:"bd00";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-el.js";s:4:"6056";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-eo.js";s:4:"50b6";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-es.js";s:4:"f817";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-fa.js";s:4:"0018";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-fi.js";s:4:"da07";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-fr.js";s:4:"9ad7";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-he.js";s:4:"cf87";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-hr.js";s:4:"633a";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-hu.js";s:4:"d79e";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-hy.js";s:4:"dd77";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-id.js";s:4:"bc1a";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-is.js";s:4:"1cc8";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-it.js";s:4:"cb20";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-ja.js";s:4:"bb67";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-ko.js";s:4:"a57e";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-lt.js";s:4:"3454";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-lv.js";s:4:"973a";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-ms.js";s:4:"3d5c";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-nl.js";s:4:"83e4";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-no.js";s:4:"b42c";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-pl.js";s:4:"dae5";s:50:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-pt-BR.js";s:4:"8cdf";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-ro.js";s:4:"ccd5";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-ru.js";s:4:"5dc4";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-sk.js";s:4:"dfa4";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-sl.js";s:4:"67a2";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-sq.js";s:4:"bb5a";s:50:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-sr-SR.js";s:4:"9817";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-sr.js";s:4:"9675";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-sv.js";s:4:"f842";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-th.js";s:4:"46de";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-tr.js";s:4:"0b4f";s:47:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-uk.js";s:4:"e5e7";s:50:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-zh-CN.js";s:4:"ae93";s:50:"res/jquery/ui/1.7.2/ui/i18n/ui.datepicker-zh-TW.js";s:4:"4786";s:40:"res/jquery/ui/1.8.0/jquery-noConflict.js";s:4:"0da0";s:36:"res/jquery/ui/1.8.0/jquery.easing.js";s:4:"a6f7";s:30:"res/jquery/ui/1.8.0/jquery.xml";s:4:"7817";s:39:"res/jquery/ui/1.8.0/ui/effects.blind.js";s:4:"70ee";s:40:"res/jquery/ui/1.8.0/ui/effects.bounce.js";s:4:"0571";s:38:"res/jquery/ui/1.8.0/ui/effects.clip.js";s:4:"ee65";s:38:"res/jquery/ui/1.8.0/ui/effects.core.js";s:4:"34db";s:38:"res/jquery/ui/1.8.0/ui/effects.drop.js";s:4:"9a36";s:41:"res/jquery/ui/1.8.0/ui/effects.explode.js";s:4:"ab30";s:38:"res/jquery/ui/1.8.0/ui/effects.fold.js";s:4:"2b6b";s:43:"res/jquery/ui/1.8.0/ui/effects.highlight.js";s:4:"aabe";s:41:"res/jquery/ui/1.8.0/ui/effects.pulsate.js";s:4:"76fd";s:39:"res/jquery/ui/1.8.0/ui/effects.scale.js";s:4:"f301";s:39:"res/jquery/ui/1.8.0/ui/effects.shake.js";s:4:"3f61";s:39:"res/jquery/ui/1.8.0/ui/effects.slide.js";s:4:"8f31";s:42:"res/jquery/ui/1.8.0/ui/effects.transfer.js";s:4:"28e8";s:38:"res/jquery/ui/1.8.0/ui/ui.accordion.js";s:4:"3661";s:41:"res/jquery/ui/1.8.0/ui/ui.autocomplete.js";s:4:"68af";s:35:"res/jquery/ui/1.8.0/ui/ui.button.js";s:4:"0c87";s:33:"res/jquery/ui/1.8.0/ui/ui.core.js";s:4:"5a75";s:39:"res/jquery/ui/1.8.0/ui/ui.datepicker.js";s:4:"5b53";s:35:"res/jquery/ui/1.8.0/ui/ui.dialog.js";s:4:"485b";s:38:"res/jquery/ui/1.8.0/ui/ui.draggable.js";s:4:"f054";s:38:"res/jquery/ui/1.8.0/ui/ui.droppable.js";s:4:"629a";s:34:"res/jquery/ui/1.8.0/ui/ui.mouse.js";s:4:"f1aa";s:37:"res/jquery/ui/1.8.0/ui/ui.position.js";s:4:"44ea";s:40:"res/jquery/ui/1.8.0/ui/ui.progressbar.js";s:4:"fc27";s:38:"res/jquery/ui/1.8.0/ui/ui.resizable.js";s:4:"1fa5";s:39:"res/jquery/ui/1.8.0/ui/ui.selectable.js";s:4:"0e94";s:35:"res/jquery/ui/1.8.0/ui/ui.slider.js";s:4:"feec";s:37:"res/jquery/ui/1.8.0/ui/ui.sortable.js";s:4:"b73e";s:33:"res/jquery/ui/1.8.0/ui/ui.tabs.js";s:4:"2ec9";s:35:"res/jquery/ui/1.8.0/ui/ui.widget.js";s:4:"50a1";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-af.js";s:4:"2ac3";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-ar.js";s:4:"eda1";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-az.js";s:4:"e8da";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-bg.js";s:4:"1cff";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-bs.js";s:4:"8363";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-ca.js";s:4:"b9f0";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-cs.js";s:4:"b7dd";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-da.js";s:4:"1e10";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-de.js";s:4:"ee50";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-el.js";s:4:"5e93";s:50:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-en-GB.js";s:4:"741c";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-eo.js";s:4:"2da1";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-es.js";s:4:"469e";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-et.js";s:4:"ec1d";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-eu.js";s:4:"47c4";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-fa.js";s:4:"9cf3";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-fi.js";s:4:"c796";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-fo.js";s:4:"5540";s:50:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-fr-CH.js";s:4:"8791";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-fr.js";s:4:"b658";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-he.js";s:4:"674c";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-hr.js";s:4:"dc3e";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-hu.js";s:4:"d10a";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-hy.js";s:4:"64b7";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-id.js";s:4:"cc32";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-is.js";s:4:"c1da";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-it.js";s:4:"b1dc";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-ja.js";s:4:"e17d";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-ko.js";s:4:"16ca";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-lt.js";s:4:"ab35";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-lv.js";s:4:"2062";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-ms.js";s:4:"85de";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-nl.js";s:4:"ea6c";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-no.js";s:4:"39e5";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-pl.js";s:4:"f529";s:50:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-pt-BR.js";s:4:"5cac";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-ro.js";s:4:"e11f";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-ru.js";s:4:"0ee5";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-sk.js";s:4:"0760";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-sl.js";s:4:"72d8";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-sq.js";s:4:"98b5";s:50:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-sr-SR.js";s:4:"e282";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-sr.js";s:4:"a19f";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-sv.js";s:4:"0b01";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-ta.js";s:4:"dbf6";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-th.js";s:4:"2620";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-tr.js";s:4:"9718";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-uk.js";s:4:"9ae7";s:47:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-vi.js";s:4:"0c3d";s:50:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-zh-CN.js";s:4:"26ec";s:50:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-zh-HK.js";s:4:"3b93";s:50:"res/jquery/ui/1.8.0/ui/i18n/ui.datepicker-zh-TW.js";s:4:"8a92";s:40:"res/jquery/ui/1.8.1/jquery-noConflict.js";s:4:"0da0";s:36:"res/jquery/ui/1.8.1/jquery.easing.js";s:4:"a6f7";s:30:"res/jquery/ui/1.8.1/jquery.xml";s:4:"7817";s:39:"res/jquery/ui/1.8.1/ui/effects.blind.js";s:4:"36b3";s:40:"res/jquery/ui/1.8.1/ui/effects.bounce.js";s:4:"c51a";s:38:"res/jquery/ui/1.8.1/ui/effects.clip.js";s:4:"3b0b";s:38:"res/jquery/ui/1.8.1/ui/effects.core.js";s:4:"5645";s:38:"res/jquery/ui/1.8.1/ui/effects.drop.js";s:4:"f2e8";s:41:"res/jquery/ui/1.8.1/ui/effects.explode.js";s:4:"8f85";s:38:"res/jquery/ui/1.8.1/ui/effects.fold.js";s:4:"79ff";s:43:"res/jquery/ui/1.8.1/ui/effects.highlight.js";s:4:"dd42";s:41:"res/jquery/ui/1.8.1/ui/effects.pulsate.js";s:4:"b86b";s:39:"res/jquery/ui/1.8.1/ui/effects.scale.js";s:4:"3cb4";s:39:"res/jquery/ui/1.8.1/ui/effects.shake.js";s:4:"f4fa";s:39:"res/jquery/ui/1.8.1/ui/effects.slide.js";s:4:"6c6d";s:42:"res/jquery/ui/1.8.1/ui/effects.transfer.js";s:4:"1375";s:38:"res/jquery/ui/1.8.1/ui/ui.accordion.js";s:4:"e480";s:41:"res/jquery/ui/1.8.1/ui/ui.autocomplete.js";s:4:"8726";s:35:"res/jquery/ui/1.8.1/ui/ui.button.js";s:4:"166e";s:33:"res/jquery/ui/1.8.1/ui/ui.core.js";s:4:"f444";s:39:"res/jquery/ui/1.8.1/ui/ui.datepicker.js";s:4:"6061";s:35:"res/jquery/ui/1.8.1/ui/ui.dialog.js";s:4:"751a";s:38:"res/jquery/ui/1.8.1/ui/ui.draggable.js";s:4:"467f";s:38:"res/jquery/ui/1.8.1/ui/ui.droppable.js";s:4:"332c";s:34:"res/jquery/ui/1.8.1/ui/ui.mouse.js";s:4:"fded";s:37:"res/jquery/ui/1.8.1/ui/ui.position.js";s:4:"fde0";s:40:"res/jquery/ui/1.8.1/ui/ui.progressbar.js";s:4:"c652";s:38:"res/jquery/ui/1.8.1/ui/ui.resizable.js";s:4:"a77f";s:39:"res/jquery/ui/1.8.1/ui/ui.selectable.js";s:4:"4071";s:35:"res/jquery/ui/1.8.1/ui/ui.slider.js";s:4:"5b89";s:37:"res/jquery/ui/1.8.1/ui/ui.sortable.js";s:4:"2ba4";s:33:"res/jquery/ui/1.8.1/ui/ui.tabs.js";s:4:"2575";s:35:"res/jquery/ui/1.8.1/ui/ui.widget.js";s:4:"e772";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-af.js";s:4:"2ac3";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-ar.js";s:4:"eda1";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-az.js";s:4:"e8da";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-bg.js";s:4:"1cff";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-bs.js";s:4:"8363";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-ca.js";s:4:"b9f0";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-cs.js";s:4:"b7dd";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-da.js";s:4:"1e10";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-de.js";s:4:"ee50";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-el.js";s:4:"5e93";s:50:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-en-GB.js";s:4:"741c";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-eo.js";s:4:"2da1";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-es.js";s:4:"469e";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-et.js";s:4:"ec1d";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-eu.js";s:4:"47c4";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-fa.js";s:4:"9cf3";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-fi.js";s:4:"c796";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-fo.js";s:4:"5540";s:50:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-fr-CH.js";s:4:"869e";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-fr.js";s:4:"b658";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-he.js";s:4:"674c";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-hr.js";s:4:"dc3e";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-hu.js";s:4:"d10a";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-hy.js";s:4:"64b7";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-id.js";s:4:"cc32";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-is.js";s:4:"c1da";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-it.js";s:4:"b1dc";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-ja.js";s:4:"e17d";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-ko.js";s:4:"16ca";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-lt.js";s:4:"ab35";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-lv.js";s:4:"2062";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-ms.js";s:4:"85de";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-nl.js";s:4:"ea6c";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-no.js";s:4:"39e5";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-pl.js";s:4:"bc6c";s:50:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-pt-BR.js";s:4:"5cac";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-ro.js";s:4:"e11f";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-ru.js";s:4:"0ee5";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-sk.js";s:4:"0760";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-sl.js";s:4:"72d8";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-sq.js";s:4:"98b5";s:50:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-sr-SR.js";s:4:"e282";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-sr.js";s:4:"a19f";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-sv.js";s:4:"0b01";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-ta.js";s:4:"dbf6";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-th.js";s:4:"2620";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-tr.js";s:4:"9718";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-uk.js";s:4:"9ae7";s:47:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-vi.js";s:4:"0c3d";s:50:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-zh-CN.js";s:4:"26ec";s:50:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-zh-HK.js";s:4:"3b93";s:50:"res/jquery/ui/1.8.1/ui/i18n/ui.datepicker-zh-TW.js";s:4:"8a92";}',
	'suggests' => array(
	),
);

?>