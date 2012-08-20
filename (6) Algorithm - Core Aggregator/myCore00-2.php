
<?php						//verification script

if (stripos($t_tx, 'EXPENSE', 0) === false && stripos($t_tx, 'SALES', 0) === false) {unset($t_tx); $m_tx = "false";}

if (stripos($t_bx, 'ASSET', 0) === false || stripos($t_bx, 'LIABILIT', 0) === false) {unset($t_bx); $m_bx = "false";}
if (stripos($t_bx, 'CASH', 0) === false) {unset($t_bx); $m_bx = "false";}

if (stripos($t_gx, 'CASH', 0) === false) {unset($t_gx); $m_gx = "false";}

?>