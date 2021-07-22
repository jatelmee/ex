<?php
$event = getEventById($_GET['id']);
if ($event == false){
    echo '<script>document.location.href = "/";</script>';
}
?>
<div class="container-mini">
    <a href="edit-event?id=<?=$event->id?>" class="btn btn-primary"> Изменить детали события</a>
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Значение</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Событие</td>
            <td><?=$event->event?></td>
        </tr>
        <tr>
            <td>Тип</td>
            <td><?=$event->e_type?></td>
        </tr>
        <tr>
            <td>Команда 1</td>
            <td><?=$event->teem1?></td>
        </tr>
        <tr>
            <td>Команда 2</td>
            <td><?=$event->teem2?></td>
        </tr>
        <tr>
            <td>П1</td>
            <td><?=$event->p1?></td>
        </tr>
        <tr>
            <td>П2</td>
            <td><?=$event->p2?></td>
        </tr>
        <tr>
            <td>Б2,5</td>
            <td><?=$event->b25?></td>
        </tr>
        <tr>
            <td>M2,5</td>
            <td><?=$event->m25?></td>
        </tr>
        <tr>
            <td>Ф1(-1,5)</td>
            <td><?=$event->f1_m15?></td>
        </tr>
        <tr>
            <td>Ф2(-1,5)</td>
            <td><?=$event->f2_m15?></td>
        </tr>
        <tr>
            <td>Ф1(1,5)</td>
            <td><?=$event->f1_15?></td>
        </tr>
        <tr>
            <td>Ф2(1,5)</td>
            <td><?=$event->f2_15?></td>
        </tr>
        <tr>
            <td>2 - 0</td>
            <td><?=$event->ts20?></td>
        </tr>
        <tr>
            <td>0 - 2</td>
            <td><?=$event->ts02?></td>
        </tr>
        <tr>
            <td>2 - 1</td>
            <td><?=$event->ts21?></td>
        </tr>
        <tr>
            <td>1 - 2</td>
            <td><?=$event->ts12?></td>
        </tr>
        <tr>
            <td>Карта 1 П1</td>
            <td><?=$event->k1p1?></td>
        </tr>
        <tr>
            <td>Карта 1 П2</td>
            <td><?=$event->k1p2?></td>
        </tr>
        <tr>
            <td>Карта 2 П1</td>
            <td><?=$event->k2p1?></td>
        </tr>
        <tr>
            <td>Карта 2 П2</td>
            <td><?=$event->k2p2?></td>
        </tr>
        <tr>
            <td>Чёт/Нечёт</td>
            <td><?=$event->tc." / ".$event->tnc?></td>
        </tr>
        </tbody>
    </table>
    <a href="dell-event?id=<?=$event->id?>" class="btn btn-primary">Удалить событие</a>
</div>

