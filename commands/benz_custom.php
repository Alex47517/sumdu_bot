<?php
//
// Command: Бенз #
// Text: !бенз #
// Info: Розрахунок витрат на паливо #
// Syntax: !бенз [витрата палива на 100км (літри)] [відстань (км)] [ціна за літр (грн)] #
// Args: 1 #
// Rank: USER #
//
if (!$cmd[2]) $cmd[2] = 100;
if (!$cmd[3]) $cmd[3] = 50;
$one = (1*100)/round($cmd[1], 2);
$one = round(1/$one, 2);
$sum = round($cmd[2])*$one;
$chat->sendMessage("🚗 <b>Результат:</b>
🖍 Витрата: ".$cmd[1]." л. на 100км
🖌 Ціна за літр: ".$cmd[3]." грн.
🖋 Їдемо: ".$cmd[2]." км
========
📏 Витрати палива на 1 км: ".round($one, 2)." л.
💵 ".round(($one*$cmd[3]), 2)." грн/км
========
📍Витрати палива: ".round($sum, 2)." л.
💸 ".round(($sum*$cmd[3]), 2)." грн
");