<div class="row">
    <h2>Задайте вопрос</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>

    <form action='' method='post'>
        <label>Тема письма: </label><br />
        <input name='subject' type='text' size="50"/><br />
        <label>Содержание: </label><br />
        <textarea name='body' cols="50" rows="10"></textarea><br /><br />
        <input type='submit' value='Отправить' />
    </form>

    <?php
    $size = ini_get('post_max_size');
    //echo $size;
    $letter = $size{strlen($size)-1};
    switch($letter){
        case 'K' : $size *= 1024;break;
        case 'M' : $size *= 1024 * 1024;break;
        case 'G' : $size *= 1024 * 1024 * 1024;break;
    }
    ?>
    <br>
    <p>Максимальный размер отправляемых данных <?= $size ?> байт.</</p>
</div>
<!--// end row -->
