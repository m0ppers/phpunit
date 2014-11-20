--TEST--
phpunit --filter testBalanceIsInitiallyZero BankAccountTest ../_files/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--filter';
$_SERVER['argv'][3] = 'testBalanceIsInitiallyZero';
$_SERVER['argv'][4] = 'BankAccountTest';
$_SERVER['argv'][5] = dirname(__FILE__).'/../_files/BankAccountTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
.

Time: %s, Memory: %sMb

OK (1 test, 1 assertion)
