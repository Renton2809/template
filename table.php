<div class="row">
    <div class="col-sm-7 sm-margin-b-60">
        <!-- Таблица -->
        <?php echo drawTable(10,10, 'yellow'); ?>
        <!-- Таблица -->
    </div>
    <div class="col-sm-5">
        <form action=''>
            <label>Количество колонок: </label><br />
            <input name='cols' type='text' value="" /><br />
            <label>Количество строк: </label><br />
            <input name='rows' type='text' value="" /><br />
            <label>Цвет: </label><br />
            <input name='color' type='text' value="" /><br /><br />
            <input type='submit' value='Создать' />
        </form>

    </div>
</div>
