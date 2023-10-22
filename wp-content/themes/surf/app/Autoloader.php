<?php

function rsearch($folder, $regPattern)
{
    $dir      = new RecursiveDirectoryIterator($folder);
    $ite      = new RecursiveIteratorIterator($dir);
    $files    = new RegexIterator($ite, $regPattern, RegexIterator::GET_MATCH);
    $fileList = array();
    foreach ($files as $file) {
        $fileList = array_merge($fileList, $file);
    }

    return $fileList;
}

$require_files = rsearch(__DIR__, '/^(?!.*vendor|.*Autoloader.php)\/.*\.php/');

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

foreach ($require_files as $filename) {
    if (file_exists($filename)) {
        require_once $filename;
    }
}

require_once __DIR__ . '/Helpers/helpers.php';

if (get_lang() === 'en'){
    require_once __DIR__ . '/Controllers/CrossTagsController.php';
    require_once __DIR__ . '/Controllers/WPHeadController.php';
}

require_once __DIR__ . '/Controllers/CasesPostTypeController.php';
require_once __DIR__ . '/Controllers/GutenbergController.php';
require_once __DIR__ . '/Controllers/ACFSettingsController.php';
require_once __DIR__ . '/Controllers/BackendAnalyticsController.php';
require_once __DIR__ . '/Controllers/BodyClassController.php';
require_once __DIR__ . '/Controllers/AdminController.php';
require_once __DIR__ . '/Data/GutenbergBlocks.php';
require_once __DIR__ . '/Helpers/ajax.php';
require_once __DIR__ . '/Walkers/CleanCommentsWalker.php';
// require_once __DIR__ . '/Walkers/HeaderWalker.php';