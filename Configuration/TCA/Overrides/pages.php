<?php

// add folder icon
$GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-tt_news'] = 'apps-pagetree-folder-contains-news';
$GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = array(
    0 => 'LLL:EXT:tt_news/Resources/Private/Language/locallang_tca.xml:tt_news',
    1 => 'tt_news',
    2 => 'apps-pagetree-folder-contains-news'
);
