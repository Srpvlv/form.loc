<h1>Список клиентов</h1>

<table border="1">
    <tr>
    <td>ID</td>
    <td>Name</td>
    </tr>
<?php
use yii\helpers\Url;
//use yii\web\UrlManager;

foreach ($Clients as $Client){
    echo '<tr>';
    echo '<td>'.$Client->id.'</td>';
    echo '<td>'.$Client->name.'</td>';
    echo '<td><a href="'.Url::to(['default/edit','id' => $Client->id]).'" >Edit</a></td>';
    echo '<td><a href="'.Url::to(['default/delete','id' => $Client->id]).'" >Delete</a></td>';
    echo '</tr>';
}
?>
</table>
<br>
<?php
echo '<a href="'.Url::to(['default/form']).'" >Новый клиент</a>';
?>

 