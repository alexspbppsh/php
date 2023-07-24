<?php
require_once (__DIR__.'/crest.php');

$result = CRest::call(
		'crm.contact.add',
		[
			'FIELDS' => [
				'NAME' => 'Тест',
				'LAST_NAME' => 'Тестов',
				'EMAIL' => [
					'0' => ['VALUE' => 'test@not.mail', 'VALUE_TYPE' => 'WORK', ],
				],
				'PHONE' => [
					'0' => ['VALUE' => '555888', 'VALUE_TYPE' => 'WORK',],
				],
			],
		]
	);

echo '<pre>';
	print_r($result);
echo '</pre>';