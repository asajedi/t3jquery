<?php

########################################################################
# Extension Manager/Repository config file for ext "t3jquery".
#
# Auto generated 28-01-2010 19:07
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
	'version' => '0.5.6',
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
	'_md5_values_when_last_written' => 'a:469:{s:21:"class.tx_t3jquery.php";s:4:"df88";s:21:"ext_conf_template.txt";s:4:"4958";s:12:"ext_icon.gif";s:4:"72a2";s:17:"ext_localconf.php";s:4:"93b5";s:15:"ext_php_api.dat";s:4:"082c";s:14:"ext_tables.php";s:4:"0fd6";s:14:"doc/manual.sxw";s:4:"d2a6";s:31:"mod1/class.JavaScriptPacker.php";s:4:"0c37";s:36:"mod1/class.JavaScriptPacker_php5.php";s:4:"f7ed";s:26:"mod1/class.analyzeJqJS.php";s:4:"5681";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"7754";s:14:"mod1/index.php";s:4:"a3cd";s:18:"mod1/locallang.xml";s:4:"d4f1";s:22:"mod1/locallang_mod.xml";s:4:"de73";s:19:"mod1/moduleicon.gif";s:4:"72a2";s:15:"res/jqconfig.js";s:4:"f6c3";s:26:"res/jquery/jquery-1.2.6.js";s:4:"fb0a";s:26:"res/jquery/jquery-1.3.0.js";s:4:"b1d7";s:26:"res/jquery/jquery-1.3.1.js";s:4:"d99a";s:26:"res/jquery/jquery-1.3.2.js";s:4:"92d4";s:26:"res/jquery/jquery-1.4.0.js";s:4:"02c5";s:26:"res/jquery/jquery-1.4.1.js";s:4:"959e";s:33:"res/jquery/1.6.0/jquery.easing.js";s:4:"a6f7";s:27:"res/jquery/1.6.0/jquery.xml";s:4:"d2b8";s:36:"res/jquery/1.6.0/ui/effects.blind.js";s:4:"e498";s:37:"res/jquery/1.6.0/ui/effects.bounce.js";s:4:"37d8";s:35:"res/jquery/1.6.0/ui/effects.clip.js";s:4:"084f";s:35:"res/jquery/1.6.0/ui/effects.core.js";s:4:"8e36";s:35:"res/jquery/1.6.0/ui/effects.drop.js";s:4:"c4fe";s:38:"res/jquery/1.6.0/ui/effects.explode.js";s:4:"d50a";s:35:"res/jquery/1.6.0/ui/effects.fold.js";s:4:"c9b8";s:40:"res/jquery/1.6.0/ui/effects.highlight.js";s:4:"ff28";s:38:"res/jquery/1.6.0/ui/effects.pulsate.js";s:4:"bee4";s:36:"res/jquery/1.6.0/ui/effects.scale.js";s:4:"aaa9";s:36:"res/jquery/1.6.0/ui/effects.shake.js";s:4:"f395";s:36:"res/jquery/1.6.0/ui/effects.slide.js";s:4:"60e8";s:39:"res/jquery/1.6.0/ui/effects.transfer.js";s:4:"7d8b";s:43:"res/jquery/1.6.0/ui/jquery-ui-1.6.custom.js";s:4:"8789";s:35:"res/jquery/1.6.0/ui/ui.accordion.js";s:4:"f462";s:30:"res/jquery/1.6.0/ui/ui.core.js";s:4:"1db7";s:36:"res/jquery/1.6.0/ui/ui.datepicker.js";s:4:"d353";s:32:"res/jquery/1.6.0/ui/ui.dialog.js";s:4:"52af";s:35:"res/jquery/1.6.0/ui/ui.draggable.js";s:4:"2641";s:35:"res/jquery/1.6.0/ui/ui.droppable.js";s:4:"ab30";s:35:"res/jquery/1.6.0/ui/ui.resizable.js";s:4:"b44d";s:36:"res/jquery/1.6.0/ui/ui.selectable.js";s:4:"06b6";s:32:"res/jquery/1.6.0/ui/ui.slider.js";s:4:"911b";s:34:"res/jquery/1.6.0/ui/ui.sortable.js";s:4:"c399";s:30:"res/jquery/1.6.0/ui/ui.tabs.js";s:4:"8c6f";s:46:"res/jquery/1.6.0/ui/i18n/jquery.ui.i18n.all.js";s:4:"133e";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-ar.js";s:4:"121c";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-bg.js";s:4:"6545";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-ca.js";s:4:"7fc0";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-cs.js";s:4:"0b06";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-da.js";s:4:"c619";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-de.js";s:4:"f5a9";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-eo.js";s:4:"72f4";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-es.js";s:4:"9315";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-fa.js";s:4:"bbca";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-fi.js";s:4:"f5bf";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-fr.js";s:4:"5be0";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-he.js";s:4:"d03b";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-hr.js";s:4:"f7e0";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-hu.js";s:4:"5831";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-hy.js";s:4:"3281";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-id.js";s:4:"328b";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-is.js";s:4:"c790";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-it.js";s:4:"a071";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-ja.js";s:4:"81d8";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-ko.js";s:4:"0b70";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-lt.js";s:4:"0b1b";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-lv.js";s:4:"9568";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-nl.js";s:4:"5676";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-no.js";s:4:"bce1";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-pl.js";s:4:"8d19";s:47:"res/jquery/1.6.0/ui/i18n/ui.datepicker-pt-BR.js";s:4:"38e8";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-ro.js";s:4:"691b";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-ru.js";s:4:"c833";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-sk.js";s:4:"d74a";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-sl.js";s:4:"b618";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-sq.js";s:4:"57ff";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-sv.js";s:4:"477e";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-th.js";s:4:"7131";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-tr.js";s:4:"08b7";s:44:"res/jquery/1.6.0/ui/i18n/ui.datepicker-uk.js";s:4:"c4f4";s:47:"res/jquery/1.6.0/ui/i18n/ui.datepicker-zh-CN.js";s:4:"be0f";s:47:"res/jquery/1.6.0/ui/i18n/ui.datepicker-zh-TW.js";s:4:"44ef";s:33:"res/jquery/1.7.1/jquery.easing.js";s:4:"a6f7";s:27:"res/jquery/1.7.1/jquery.xml";s:4:"9e63";s:36:"res/jquery/1.7.1/ui/effects.blind.js";s:4:"0991";s:37:"res/jquery/1.7.1/ui/effects.bounce.js";s:4:"1b87";s:35:"res/jquery/1.7.1/ui/effects.clip.js";s:4:"f08f";s:35:"res/jquery/1.7.1/ui/effects.core.js";s:4:"2348";s:35:"res/jquery/1.7.1/ui/effects.drop.js";s:4:"3990";s:38:"res/jquery/1.7.1/ui/effects.explode.js";s:4:"4eae";s:35:"res/jquery/1.7.1/ui/effects.fold.js";s:4:"69cd";s:40:"res/jquery/1.7.1/ui/effects.highlight.js";s:4:"13aa";s:38:"res/jquery/1.7.1/ui/effects.pulsate.js";s:4:"d661";s:36:"res/jquery/1.7.1/ui/effects.scale.js";s:4:"2a54";s:36:"res/jquery/1.7.1/ui/effects.shake.js";s:4:"0952";s:36:"res/jquery/1.7.1/ui/effects.slide.js";s:4:"0db9";s:39:"res/jquery/1.7.1/ui/effects.transfer.js";s:4:"2565";s:35:"res/jquery/1.7.1/ui/ui.accordion.js";s:4:"3a63";s:30:"res/jquery/1.7.1/ui/ui.core.js";s:4:"4dcd";s:36:"res/jquery/1.7.1/ui/ui.datepicker.js";s:4:"0e1c";s:32:"res/jquery/1.7.1/ui/ui.dialog.js";s:4:"4876";s:35:"res/jquery/1.7.1/ui/ui.draggable.js";s:4:"1cb4";s:35:"res/jquery/1.7.1/ui/ui.droppable.js";s:4:"c231";s:37:"res/jquery/1.7.1/ui/ui.progressbar.js";s:4:"67fe";s:35:"res/jquery/1.7.1/ui/ui.resizable.js";s:4:"4905";s:36:"res/jquery/1.7.1/ui/ui.selectable.js";s:4:"ae55";s:32:"res/jquery/1.7.1/ui/ui.slider.js";s:4:"4bd8";s:34:"res/jquery/1.7.1/ui/ui.sortable.js";s:4:"aa83";s:30:"res/jquery/1.7.1/ui/ui.tabs.js";s:4:"79cb";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-ar.js";s:4:"825b";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-bg.js";s:4:"3bc2";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-ca.js";s:4:"763e";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-cs.js";s:4:"2e3e";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-da.js";s:4:"b511";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-de.js";s:4:"bd00";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-el.js";s:4:"6056";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-eo.js";s:4:"50b6";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-es.js";s:4:"f817";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-fa.js";s:4:"0018";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-fi.js";s:4:"da07";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-fr.js";s:4:"9ad7";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-he.js";s:4:"cf87";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-hr.js";s:4:"633a";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-hu.js";s:4:"d79e";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-hy.js";s:4:"dd77";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-id.js";s:4:"bc1a";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-is.js";s:4:"1cc8";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-it.js";s:4:"cb20";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-ja.js";s:4:"bb67";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-ko.js";s:4:"a57e";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-lt.js";s:4:"3454";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-lv.js";s:4:"973a";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-ms.js";s:4:"3d5c";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-nl.js";s:4:"83e4";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-no.js";s:4:"b42c";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-pl.js";s:4:"dae5";s:47:"res/jquery/1.7.1/ui/i18n/ui.datepicker-pt-BR.js";s:4:"8cdf";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-ro.js";s:4:"ccd5";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-ru.js";s:4:"5dc4";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-sk.js";s:4:"dfa4";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-sl.js";s:4:"67a2";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-sq.js";s:4:"bb5a";s:47:"res/jquery/1.7.1/ui/i18n/ui.datepicker-sr-SR.js";s:4:"463b";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-sr.js";s:4:"7ec9";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-sv.js";s:4:"f842";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-th.js";s:4:"46de";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-tr.js";s:4:"0b4f";s:44:"res/jquery/1.7.1/ui/i18n/ui.datepicker-uk.js";s:4:"e5e7";s:47:"res/jquery/1.7.1/ui/i18n/ui.datepicker-zh-CN.js";s:4:"ae93";s:47:"res/jquery/1.7.1/ui/i18n/ui.datepicker-zh-TW.js";s:4:"4786";s:33:"res/jquery/1.7.2/jquery.easing.js";s:4:"a6f7";s:27:"res/jquery/1.7.2/jquery.xml";s:4:"9e63";s:36:"res/jquery/1.7.2/ui/effects.blind.js";s:4:"5463";s:37:"res/jquery/1.7.2/ui/effects.bounce.js";s:4:"402a";s:35:"res/jquery/1.7.2/ui/effects.clip.js";s:4:"355a";s:35:"res/jquery/1.7.2/ui/effects.core.js";s:4:"d7c2";s:35:"res/jquery/1.7.2/ui/effects.drop.js";s:4:"d78b";s:38:"res/jquery/1.7.2/ui/effects.explode.js";s:4:"d8e3";s:35:"res/jquery/1.7.2/ui/effects.fold.js";s:4:"2e89";s:40:"res/jquery/1.7.2/ui/effects.highlight.js";s:4:"cb0e";s:38:"res/jquery/1.7.2/ui/effects.pulsate.js";s:4:"6521";s:36:"res/jquery/1.7.2/ui/effects.scale.js";s:4:"c642";s:36:"res/jquery/1.7.2/ui/effects.shake.js";s:4:"82cc";s:36:"res/jquery/1.7.2/ui/effects.slide.js";s:4:"8e17";s:39:"res/jquery/1.7.2/ui/effects.transfer.js";s:4:"c7a4";s:35:"res/jquery/1.7.2/ui/ui.accordion.js";s:4:"1136";s:30:"res/jquery/1.7.2/ui/ui.core.js";s:4:"3819";s:36:"res/jquery/1.7.2/ui/ui.datepicker.js";s:4:"aa49";s:32:"res/jquery/1.7.2/ui/ui.dialog.js";s:4:"a5dc";s:35:"res/jquery/1.7.2/ui/ui.draggable.js";s:4:"8199";s:35:"res/jquery/1.7.2/ui/ui.droppable.js";s:4:"2645";s:37:"res/jquery/1.7.2/ui/ui.progressbar.js";s:4:"bb02";s:35:"res/jquery/1.7.2/ui/ui.resizable.js";s:4:"3fa4";s:36:"res/jquery/1.7.2/ui/ui.selectable.js";s:4:"7d7f";s:32:"res/jquery/1.7.2/ui/ui.slider.js";s:4:"c4e8";s:34:"res/jquery/1.7.2/ui/ui.sortable.js";s:4:"b2dc";s:30:"res/jquery/1.7.2/ui/ui.tabs.js";s:4:"8b5f";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-ar.js";s:4:"825b";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-bg.js";s:4:"3bc2";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-ca.js";s:4:"763e";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-cs.js";s:4:"2e3e";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-da.js";s:4:"b511";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-de.js";s:4:"bd00";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-el.js";s:4:"6056";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-eo.js";s:4:"50b6";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-es.js";s:4:"f817";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-fa.js";s:4:"0018";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-fi.js";s:4:"da07";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-fr.js";s:4:"9ad7";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-he.js";s:4:"cf87";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-hr.js";s:4:"633a";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-hu.js";s:4:"d79e";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-hy.js";s:4:"dd77";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-id.js";s:4:"bc1a";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-is.js";s:4:"1cc8";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-it.js";s:4:"cb20";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-ja.js";s:4:"bb67";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-ko.js";s:4:"a57e";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-lt.js";s:4:"3454";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-lv.js";s:4:"973a";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-ms.js";s:4:"3d5c";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-nl.js";s:4:"83e4";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-no.js";s:4:"b42c";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-pl.js";s:4:"dae5";s:47:"res/jquery/1.7.2/ui/i18n/ui.datepicker-pt-BR.js";s:4:"8cdf";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-ro.js";s:4:"ccd5";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-ru.js";s:4:"5dc4";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-sk.js";s:4:"dfa4";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-sl.js";s:4:"67a2";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-sq.js";s:4:"bb5a";s:47:"res/jquery/1.7.2/ui/i18n/ui.datepicker-sr-SR.js";s:4:"9817";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-sr.js";s:4:"9675";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-sv.js";s:4:"f842";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-th.js";s:4:"46de";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-tr.js";s:4:"0b4f";s:44:"res/jquery/1.7.2/ui/i18n/ui.datepicker-uk.js";s:4:"e5e7";s:47:"res/jquery/1.7.2/ui/i18n/ui.datepicker-zh-CN.js";s:4:"ae93";s:47:"res/jquery/1.7.2/ui/i18n/ui.datepicker-zh-TW.js";s:4:"4786";s:33:"res/jquery/1.8a2/jquery.easing.js";s:4:"a6f7";s:27:"res/jquery/1.8a2/jquery.xml";s:4:"413f";s:36:"res/jquery/1.8a2/ui/effects.blind.js";s:4:"36dd";s:37:"res/jquery/1.8a2/ui/effects.bounce.js";s:4:"2062";s:35:"res/jquery/1.8a2/ui/effects.clip.js";s:4:"2a8b";s:35:"res/jquery/1.8a2/ui/effects.core.js";s:4:"0e3f";s:35:"res/jquery/1.8a2/ui/effects.drop.js";s:4:"e840";s:38:"res/jquery/1.8a2/ui/effects.explode.js";s:4:"4d72";s:35:"res/jquery/1.8a2/ui/effects.fade.js";s:4:"9111";s:35:"res/jquery/1.8a2/ui/effects.fold.js";s:4:"2db3";s:40:"res/jquery/1.8a2/ui/effects.highlight.js";s:4:"8e2e";s:38:"res/jquery/1.8a2/ui/effects.pulsate.js";s:4:"496d";s:36:"res/jquery/1.8a2/ui/effects.scale.js";s:4:"ec9a";s:36:"res/jquery/1.8a2/ui/effects.shake.js";s:4:"34c6";s:36:"res/jquery/1.8a2/ui/effects.slide.js";s:4:"f5ea";s:39:"res/jquery/1.8a2/ui/effects.transfer.js";s:4:"2d8f";s:35:"res/jquery/1.8a2/ui/ui.accordion.js";s:4:"c3ee";s:30:"res/jquery/1.8a2/ui/ui.core.js";s:4:"27c3";s:36:"res/jquery/1.8a2/ui/ui.datepicker.js";s:4:"c373";s:32:"res/jquery/1.8a2/ui/ui.dialog.js";s:4:"a55c";s:35:"res/jquery/1.8a2/ui/ui.draggable.js";s:4:"dfb7";s:35:"res/jquery/1.8a2/ui/ui.droppable.js";s:4:"e262";s:31:"res/jquery/1.8a2/ui/ui.mouse.js";s:4:"2486";s:34:"res/jquery/1.8a2/ui/ui.position.js";s:4:"c3f4";s:37:"res/jquery/1.8a2/ui/ui.progressbar.js";s:4:"a9b4";s:35:"res/jquery/1.8a2/ui/ui.resizable.js";s:4:"5ca4";s:36:"res/jquery/1.8a2/ui/ui.selectable.js";s:4:"a78e";s:32:"res/jquery/1.8a2/ui/ui.slider.js";s:4:"ad7e";s:34:"res/jquery/1.8a2/ui/ui.sortable.js";s:4:"a8f1";s:34:"res/jquery/1.8a2/ui/ui.stackfix.js";s:4:"8651";s:30:"res/jquery/1.8a2/ui/ui.tabs.js";s:4:"49c2";s:32:"res/jquery/1.8a2/ui/ui.widget.js";s:4:"b734";s:41:"res/jquery/1.8a2/ui/i18n/datepicker-af.js";s:4:"3f15";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-ar.js";s:4:"e557";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-az.js";s:4:"4991";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-bg.js";s:4:"ce4f";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-bs.js";s:4:"ead4";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-ca.js";s:4:"c121";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-cs.js";s:4:"6a9f";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-da.js";s:4:"537b";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-de.js";s:4:"3206";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-el.js";s:4:"ad0a";s:47:"res/jquery/1.8a2/ui/i18n/ui.datepicker-en-GB.js";s:4:"cc6d";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-eo.js";s:4:"1668";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-es.js";s:4:"19c2";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-et.js";s:4:"360b";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-eu.js";s:4:"facf";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-fa.js";s:4:"767a";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-fi.js";s:4:"519a";s:47:"res/jquery/1.8a2/ui/i18n/ui.datepicker-fr-CH.js";s:4:"d7f1";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-fr.js";s:4:"8503";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-he.js";s:4:"b896";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-hr.js";s:4:"1609";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-hu.js";s:4:"5901";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-hy.js";s:4:"dd08";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-id.js";s:4:"46ad";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-is.js";s:4:"c040";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-it.js";s:4:"8155";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-ja.js";s:4:"6fc3";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-ko.js";s:4:"675a";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-lt.js";s:4:"2995";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-lv.js";s:4:"c14a";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-ms.js";s:4:"9664";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-nl.js";s:4:"6a12";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-no.js";s:4:"e428";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-pl.js";s:4:"be47";s:47:"res/jquery/1.8a2/ui/i18n/ui.datepicker-pt-BR.js";s:4:"e96e";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-ro.js";s:4:"7afd";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-ru.js";s:4:"882c";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-sk.js";s:4:"aa44";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-sl.js";s:4:"3d94";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-sq.js";s:4:"7400";s:47:"res/jquery/1.8a2/ui/i18n/ui.datepicker-sr-SR.js";s:4:"45f4";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-sr.js";s:4:"944a";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-sv.js";s:4:"c7a4";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-th.js";s:4:"d9b2";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-tr.js";s:4:"d783";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-uk.js";s:4:"a597";s:44:"res/jquery/1.8a2/ui/i18n/ui.datepicker-vi.js";s:4:"40b4";s:47:"res/jquery/1.8a2/ui/i18n/ui.datepicker-zh-CN.js";s:4:"f564";s:47:"res/jquery/1.8a2/ui/i18n/ui.datepicker-zh-TW.js";s:4:"dd8a";s:33:"res/jquery/1.8b1/jquery.easing.js";s:4:"a6f7";s:27:"res/jquery/1.8b1/jquery.xml";s:4:"a192";s:36:"res/jquery/1.8b1/ui/effects.blind.js";s:4:"db50";s:37:"res/jquery/1.8b1/ui/effects.bounce.js";s:4:"2cbb";s:35:"res/jquery/1.8b1/ui/effects.clip.js";s:4:"072f";s:35:"res/jquery/1.8b1/ui/effects.core.js";s:4:"89a7";s:35:"res/jquery/1.8b1/ui/effects.drop.js";s:4:"cf98";s:38:"res/jquery/1.8b1/ui/effects.explode.js";s:4:"f666";s:35:"res/jquery/1.8b1/ui/effects.fade.js";s:4:"4fd1";s:35:"res/jquery/1.8b1/ui/effects.fold.js";s:4:"27d1";s:40:"res/jquery/1.8b1/ui/effects.highlight.js";s:4:"2e85";s:38:"res/jquery/1.8b1/ui/effects.pulsate.js";s:4:"9334";s:36:"res/jquery/1.8b1/ui/effects.scale.js";s:4:"46b4";s:36:"res/jquery/1.8b1/ui/effects.shake.js";s:4:"6311";s:36:"res/jquery/1.8b1/ui/effects.slide.js";s:4:"5336";s:39:"res/jquery/1.8b1/ui/effects.transfer.js";s:4:"9e11";s:35:"res/jquery/1.8b1/ui/ui.accordion.js";s:4:"a2bd";s:38:"res/jquery/1.8b1/ui/ui.autocomplete.js";s:4:"32ca";s:32:"res/jquery/1.8b1/ui/ui.button.js";s:4:"9d87";s:30:"res/jquery/1.8b1/ui/ui.core.js";s:4:"0b7f";s:36:"res/jquery/1.8b1/ui/ui.datepicker.js";s:4:"a249";s:32:"res/jquery/1.8b1/ui/ui.dialog.js";s:4:"440e";s:35:"res/jquery/1.8b1/ui/ui.draggable.js";s:4:"8733";s:35:"res/jquery/1.8b1/ui/ui.droppable.js";s:4:"257d";s:31:"res/jquery/1.8b1/ui/ui.mouse.js";s:4:"443f";s:34:"res/jquery/1.8b1/ui/ui.position.js";s:4:"5021";s:37:"res/jquery/1.8b1/ui/ui.progressbar.js";s:4:"2d0a";s:35:"res/jquery/1.8b1/ui/ui.resizable.js";s:4:"6c8f";s:36:"res/jquery/1.8b1/ui/ui.selectable.js";s:4:"4790";s:32:"res/jquery/1.8b1/ui/ui.slider.js";s:4:"b959";s:34:"res/jquery/1.8b1/ui/ui.sortable.js";s:4:"91d4";s:30:"res/jquery/1.8b1/ui/ui.tabs.js";s:4:"fcb8";s:32:"res/jquery/1.8b1/ui/ui.widget.js";s:4:"4ef5";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-af.js";s:4:"17a6";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-ar.js";s:4:"5de1";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-az.js";s:4:"45ba";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-bg.js";s:4:"fd0b";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-bs.js";s:4:"624f";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-ca.js";s:4:"0c8f";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-cs.js";s:4:"9ead";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-da.js";s:4:"571a";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-de.js";s:4:"1ee6";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-el.js";s:4:"dd4b";s:47:"res/jquery/1.8b1/ui/i18n/ui.datepicker-en-GB.js";s:4:"6de2";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-eo.js";s:4:"962e";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-es.js";s:4:"06de";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-et.js";s:4:"c106";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-eu.js";s:4:"55a7";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-fa.js";s:4:"9363";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-fi.js";s:4:"3529";s:47:"res/jquery/1.8b1/ui/i18n/ui.datepicker-fr-CH.js";s:4:"6b21";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-fr.js";s:4:"4ec4";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-he.js";s:4:"5eb8";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-hr.js";s:4:"bb5b";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-hu.js";s:4:"bd92";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-hy.js";s:4:"88d0";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-id.js";s:4:"4ae1";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-is.js";s:4:"f032";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-it.js";s:4:"11eb";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-ja.js";s:4:"27bc";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-ko.js";s:4:"90cc";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-lt.js";s:4:"bab7";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-lv.js";s:4:"ae2b";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-ms.js";s:4:"b35e";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-nl.js";s:4:"4dad";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-no.js";s:4:"1fa3";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-pl.js";s:4:"e6fa";s:47:"res/jquery/1.8b1/ui/i18n/ui.datepicker-pt-BR.js";s:4:"d994";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-ro.js";s:4:"311e";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-ru.js";s:4:"c55a";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-sk.js";s:4:"9f57";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-sl.js";s:4:"c8ab";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-sq.js";s:4:"c4c7";s:47:"res/jquery/1.8b1/ui/i18n/ui.datepicker-sr-SR.js";s:4:"09de";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-sr.js";s:4:"7045";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-sv.js";s:4:"b370";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-th.js";s:4:"c50e";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-tr.js";s:4:"ee1f";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-uk.js";s:4:"c990";s:44:"res/jquery/1.8b1/ui/i18n/ui.datepicker-vi.js";s:4:"af6a";s:47:"res/jquery/1.8b1/ui/i18n/ui.datepicker-zh-CN.js";s:4:"af3b";s:47:"res/jquery/1.8b1/ui/i18n/ui.datepicker-zh-TW.js";s:4:"f167";s:34:"res/jquery/1.8rc1/jquery.easing.js";s:4:"a6f7";s:28:"res/jquery/1.8rc1/jquery.xml";s:4:"a192";s:37:"res/jquery/1.8rc1/ui/effects.blind.js";s:4:"eec0";s:38:"res/jquery/1.8rc1/ui/effects.bounce.js";s:4:"20d7";s:36:"res/jquery/1.8rc1/ui/effects.clip.js";s:4:"bd54";s:36:"res/jquery/1.8rc1/ui/effects.core.js";s:4:"d2a2";s:36:"res/jquery/1.8rc1/ui/effects.drop.js";s:4:"a7fd";s:39:"res/jquery/1.8rc1/ui/effects.explode.js";s:4:"5465";s:36:"res/jquery/1.8rc1/ui/effects.fade.js";s:4:"fa51";s:36:"res/jquery/1.8rc1/ui/effects.fold.js";s:4:"b9ed";s:41:"res/jquery/1.8rc1/ui/effects.highlight.js";s:4:"95a0";s:39:"res/jquery/1.8rc1/ui/effects.pulsate.js";s:4:"bf24";s:37:"res/jquery/1.8rc1/ui/effects.scale.js";s:4:"61e0";s:37:"res/jquery/1.8rc1/ui/effects.shake.js";s:4:"6ffd";s:37:"res/jquery/1.8rc1/ui/effects.slide.js";s:4:"e4db";s:40:"res/jquery/1.8rc1/ui/effects.transfer.js";s:4:"2828";s:36:"res/jquery/1.8rc1/ui/ui.accordion.js";s:4:"44eb";s:39:"res/jquery/1.8rc1/ui/ui.autocomplete.js";s:4:"b9a2";s:33:"res/jquery/1.8rc1/ui/ui.button.js";s:4:"1419";s:31:"res/jquery/1.8rc1/ui/ui.core.js";s:4:"4530";s:37:"res/jquery/1.8rc1/ui/ui.datepicker.js";s:4:"e64d";s:33:"res/jquery/1.8rc1/ui/ui.dialog.js";s:4:"6156";s:36:"res/jquery/1.8rc1/ui/ui.draggable.js";s:4:"8cfd";s:36:"res/jquery/1.8rc1/ui/ui.droppable.js";s:4:"9f78";s:32:"res/jquery/1.8rc1/ui/ui.mouse.js";s:4:"0e43";s:35:"res/jquery/1.8rc1/ui/ui.position.js";s:4:"9b1a";s:38:"res/jquery/1.8rc1/ui/ui.progressbar.js";s:4:"7979";s:36:"res/jquery/1.8rc1/ui/ui.resizable.js";s:4:"c2e0";s:37:"res/jquery/1.8rc1/ui/ui.selectable.js";s:4:"6032";s:33:"res/jquery/1.8rc1/ui/ui.slider.js";s:4:"4f07";s:35:"res/jquery/1.8rc1/ui/ui.sortable.js";s:4:"46bd";s:31:"res/jquery/1.8rc1/ui/ui.tabs.js";s:4:"f274";s:33:"res/jquery/1.8rc1/ui/ui.widget.js";s:4:"306a";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-af.js";s:4:"17a6";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-ar.js";s:4:"5de1";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-az.js";s:4:"45ba";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-bg.js";s:4:"fd0b";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-bs.js";s:4:"624f";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-ca.js";s:4:"0c8f";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-cs.js";s:4:"9ead";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-da.js";s:4:"571a";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-de.js";s:4:"1ee6";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-el.js";s:4:"dd4b";s:48:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-en-GB.js";s:4:"6de2";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-eo.js";s:4:"962e";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-es.js";s:4:"06de";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-et.js";s:4:"c106";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-eu.js";s:4:"55a7";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-fa.js";s:4:"9363";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-fi.js";s:4:"3529";s:48:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-fr-CH.js";s:4:"6b21";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-fr.js";s:4:"4ec4";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-he.js";s:4:"5eb8";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-hr.js";s:4:"bb5b";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-hu.js";s:4:"bd92";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-hy.js";s:4:"88d0";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-id.js";s:4:"4ae1";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-is.js";s:4:"f032";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-it.js";s:4:"11eb";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-ja.js";s:4:"27bc";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-ko.js";s:4:"90cc";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-lt.js";s:4:"bab7";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-lv.js";s:4:"ae2b";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-ms.js";s:4:"b35e";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-nl.js";s:4:"4dad";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-no.js";s:4:"1fa3";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-pl.js";s:4:"e6fa";s:48:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-pt-BR.js";s:4:"d994";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-ro.js";s:4:"f27c";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-ru.js";s:4:"c55a";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-sk.js";s:4:"9f57";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-sl.js";s:4:"c8ab";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-sq.js";s:4:"c4c7";s:48:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-sr-SR.js";s:4:"09de";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-sr.js";s:4:"7045";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-sv.js";s:4:"b370";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-th.js";s:4:"c50e";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-tr.js";s:4:"ee1f";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-uk.js";s:4:"c990";s:45:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-vi.js";s:4:"af6a";s:48:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-zh-CN.js";s:4:"af3b";s:48:"res/jquery/1.8rc1/ui/i18n/ui.datepicker-zh-TW.js";s:4:"f167";}',
	'suggests' => array(
	),
);

?>