

<h3 class="cent">新增圖片</h3>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="width:70%;margin:auto">
    <tr>
        <td style="text-align:right">圖片：</td>
        <td><input type="file" name="img"></td>
    </tr>
    <tr>
        <td style="text-align:right">標題區替代文字：</td>
        <td><input type="text" name="text"></td>
    </tr>
</table>
<div style="width:100px;margin:auto">
<input type="hidden" name="table" value="<?=$_GET['table'];?>">

<table>
<tr> 
    <td colspan="2">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </td>
</tr>
</table>


</form>
