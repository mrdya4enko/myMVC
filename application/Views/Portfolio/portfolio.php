<h1>Портфолио</h1>
<p>
<table>
Ссылка в таблице на мою страничку VKontakte
<tr><td>Год</td><td>Ссылка</td></tr>
<?php

	foreach($data as $row)
    {
        echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td></tr>';
    }
?>
</table>
</p>
