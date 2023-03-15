<?php 
include_once "inc/session/sessioncheck.php";
include_once "inc/db/connection.php";
$userId = $user["id"];

$installMentSql = "select sum(installment) installment, '' as nonce from debits where userId = 1;";

$installment = $db->__selectSingle($installMentSql);

$billSql = "select sum(amount) amount ,billType from bill where status='pending' group by billType;";
$bills = $db->__select($billSql);

$_userSql = "select * from users where id = 1;";

$_user = $db->__selectSingle($_userSql);

$totalExpense = 0;
foreach ($bills as $value) {
    $totalExpense += $value["amount"];
}
$otherExpense = 2000;
$totalExpense += $installment["installment"];
$totalExpense += $otherExpense;
// var_dump($bills);
// echo "<br/>";
// echo $totalExpense;
// echo "<br/>";
// echo $_user["balanceInBank"];
// echo "<br/>";
// echo $_user["monthlySalary"];
// echo "<br/>";