<div class="text-center font-weight-bold h4 mt-5">求職條件</div>
    <?php
        $db=new DB('jobc');
        $jobc=$db->find(1);
    ?>

    <ui class="h5 font-weight-bold">
            <li>希望工作地點:</li>
            <p class="mx-5"> <?=$jobc['place'];?> </p>

            <li>希望應徵職務:</li>
            <p class="mx-5"> <?=$jobc['job'];?> </p>

            <li>就業狀況</li>
            <p class="mx-5"> <?=$jobc['status'];?> </p>

            <li>可上班日</li>
            <p class="mx-5"> <?=$jobc['available'];?> </p>
    </ui>

    <!-- 原文:
    <ui>
        <li style="font-size:20px">希望工作地點</li>
        <p class="mx-5">台北市、新北市</p>

        <li style="font-size:20px">希望應徵職務:</li>
        <p class="mx-5">前端工程師、後端工程師、UX/UI </p>

        <li style="font-size:20px">就業狀況</li>
        <p class="mx-5">待業中</p>

        <li style="font-size:20px">可上班日</li>
        <p class="mx-5">隨時</p>
    </ui> -->


