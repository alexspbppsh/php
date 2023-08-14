<?php require ($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php")?>

<?php
//var params = {
//    'IBLOCK_TYPE_ID': 'lists',
//        'IBLOCK_ID': '129',
//        'ELEMENT_CODE': 'element1',
//        'FIELDS': {
//        'NAME': 'Test element 1',
//             'SOTRUDNIK' // PROPERTY_577 - Пользовательское свойство типа "Сотрудник"
//                }
//        };
//

   BX.rest.callMethod('lists.element.add', params,
       function(result)
        {
            if(result.error())
                alert("Error: " + result.error());
            else
                alert("Success: " + result.data());
        }
   );
 ?>
<?php require ($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
