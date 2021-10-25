<?php
error_reporting(0);
$Data = [
    [
        'id'        => 1,
        'nama'      => 'Departmen',
        'parent_id' => 0
    ],
    [
        'id'        => 2,
        'nama'      => 'Direktorat Keuangan',
        'parent_id' => 1
    ],
    [
        'id'        => 3,
        'nama'      => 'Direktorat Umum',
        'parent_id' => 1
    ], [
        'id'        => 4,
        'nama'      => 'Direktorat Medik dan Keperawatan',
        'parent_id' => 1
    ],
    [
        'id'        => 5,
        'nama'      => 'Bagian Keuangan',
        'parent_id' => 2
    ],
    [
        'id'        => 6,
        'nama'      => 'Sub Bagian Mobilisasi Dana',
        'parent_id' => 5

    ],
    [
        'id'        => 7,
        'nama'      => 'Bagian Umum',
        'parent_id' => 3
    ]

];


function buildTree(array $elements, $parentId = 0)
{
    $branch = array();

    foreach ($elements as $element) {
        if ($element['parent_id'] == $parentId) {
            $children = buildTree($elements, $element['id']);
            if ($children) {
                $element['children'] = $children;
            }
            $branch[] = $element;
        }
    }

    return $branch;
}

$Tree = buildTree($Data);

//print_r($Tree);

foreach ($Tree as $tree) {
    echo $tree['nama'] . "\n";
}
foreach ($Tree[0]['children'] as $parent) {
    echo "-" . $parent['nama'] . "\n";
    foreach ($parent['children'] as $children) {
        echo "--" . $children['nama'] . "\n";
        foreach ($children['children'] as $subchildren) {
            echo "---" . $subchildren['nama'] . "\n";
        }
    }
}
