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

echo '<table border="1" bgcolor="#ffffff" >';
echo "<tr>";
echo "<td colspan='7' align='center' bordercolor='black'><b>".$mes. " - " . $anio . "</b></td>";
echo "</tr>";
echo "<tr>";
echo "<td align='center' bordercolor='black'><b>L</b></td>
      <td align='center' bordercolor='black'><b>M</b></td>
      <td align='center' bordercolor='black'><b>X</b></td>
      <td align='center' bordercolor='black'><b>J</b></td>
      <td align='center' bordercolor='black'><b>V</b></td>
      <td align='center' bordercolor='black'><b>S</b></td>
      <td align='center' bordercolor='black'><b>D</b></td>";
echo "</tr>";

echo "<tr>";
 
for($i=1;$i<$diaSemanaDia1;$i++){
    echo "<td>&nbsp;</td>";
}
for($i=$diaSemanaDia1;$i<8;$i++){
    echo "<td align='center' bordercolor='black'>".$dia."</td>";
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
            echo "<td align='center' bordercolor='black'>".$dia."</td>";
            $dia++;
        }
    }
    echo "</tr>";
}

echo "</table>";
?>