<?php require ($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php")?>

<?php
/*$el = new CIBlockElement;

$elementId = $el->Add ([
    'IBLOCK_ID'=>129,
    'PROPERTY_VALUES' => [
        'SUM'=> 333 ],
    'NAME'=>'"Элемент Василий'
]);
if($elementId) {
    echo 'New ID: '.$elementId;
} else {
    echo 'Error: '.$el->LAST_ERROR;
}*/
$res = CIBlockElement::GetList(
    [],
    ['IBLOCK_ID'=>129, 'ACTIVE'=>'Y'],
    false,
    ['nPageSize'=>50],
    ['ID', 'IBLOCK_ID', 'NAME', 'PROPERTY_*']
);

 ?>
<?php require ($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
