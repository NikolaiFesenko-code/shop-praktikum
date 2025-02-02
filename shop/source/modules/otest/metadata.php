<?php
/**
 * Metadata for module
 */
$sMetadataVersion = '2.0';

$aModule = [
    'id'          => 'otest',
    'title'       => 'O3 Testmodul',
    'description' => 'neu Feld',
    'version'     => '1.0.0',
    'author'      => 'Mykola Fesenko',
    'extend'      => [
        "OxidEsales\Eshop\Application\Model\Article" => "otest\Model\Article",
    ],
    'templates' => [],
    'blocks' => [
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_longdesc',
            'file'     => 'views/blocks/o3test_productmain.tpl'
        ],
    ],
    'settings' => [],
];