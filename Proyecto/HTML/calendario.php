<?php
$dia_actual=date('d');
$mes=date('m');
$anio=date('Y');
$dias_mes=date('t');
$dia=1;

$segDia1=mktime(0,0,0,$mes,1,$anio);
$arrayDia1=getdate($segDia1);
$diaSemanaDia1=$arrayDia1['wday'];
if($diaSemanaDia1==0)
    $diaSemanaDia1=7;

echo "<table border='1'>";
echo "<tr>";
echo "<td colspan='7'>".$mes. " - " . $anio . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>L</td><td>M</td><td>X</td><td>J</td><td>V</td><td>S</td><td>D</td>";
echo "</tr>";

echo "<tr>";
 
for($i=1;$i<$diaSemanaDia1;$i++){
    echo "<td>&nbsp;</td>";
}
for($i=$diaSemanaDia1;$i<8;$i++){
    echo "<td>".$dia."</td>";
    $dia++;
}
echo "</tr>";
$num=ceil(($dias_mes-$dia+1)/7);
for($j=0;$j<$num;$j++){
    echo "<tr>";
    for($i=1;$i<8;$i++){
        if($dia>$dias_mes)
            echo "<td>&nbsp;</td>";
        else{
            echo "<td>".$dia."</td>";
            $dia++;
        }
    }
    echo "</tr>";
}

echo "</table>";
?>