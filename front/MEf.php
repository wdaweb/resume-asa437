<div class="text-center font-weight-bold h4 mt-5" style="font-size:25px">個人簡介</div>
<!-- 原文:我叫劉邦鍊。曾任職於新竹科學園區半導體開發工程師,工作接觸了程式撰寫。也開啟對程式語文興趣。 自此開始一段學習的過程。2019結束半導體工作，決心要轉換職場，開始在職訓局進修學習PHP資料庫網頁設計 -->

<?php
    $db=new DB('me');
    // $row=$db->find(1);
    $rows=$db->all();
    foreach($rows as $row){
?>

<div class="h5 m-3 font-weight-bold"> <?=$row['text'];?> </div>

<br><br>
<div class="font-weight-bold h4" style="font-size:25px">個人資訊</div>
<br>
<div class="h5 m-3 font-weight-bold">Name: <?=$row['name'];?> </div>
<div class="h5 m-3 font-weight-bold">E-mail: <?=$row['mail'];?> </div>
<div class="h5 m-3 font-weight-bold">phone: <?=$row['phone'];?> </div>
<div class="h5 m-3 font-weight-bold">Interest:<?=$row['interest'];?></div>


<?php
 }
?>



