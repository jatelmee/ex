<?php
$event = getEventById($_GET['id']);
if ($event == false){
    echo '<script>document.location.href = "/";</script>';
}
?>
<div class="container-mini">
    <form action="/save-event_data?id=<?=$event->id?>" method="post">
        <input type="submit" value="Сохранить" class="btn btn-primary">
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
                <td><input type="text" class="form-control" name="event" value="<?=$event->event?>"></td>
            </tr>

            <tr>
                <td>Тип</td>
                <td>
                    <div class="form-group mt-2">
                        <select id="inputState" name="e_type" class="form-control">
                            <option>Dota 2</option>
                            <option>Counter-Strike</option>
                            <option>Call of Duty</option>
                            <option>King of Glory</option>
                            <option>League of Legends</option>
                            <option>Overwatch</option>
                            <option>Rainbow Six</option>
                            <option>Starcraft 1</option>
                            <option>StarCraft II</option>
                            <option>Valorant</option>
                            <option>Rocket League</option>
                            <option>Киберфутбол</option>
                            <option>Кибербаскетбол</option>
                        </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Команда 1</td>
                <td><input type="text" class="form-control" name="teem1" value="<?=$event->teem1?>"></td>
            </tr>
            <tr>
                <td>Команда 2</td>
                <td><input type="text" class="form-control" name="teem2" value="<?=$event->teem2?>"></td>
            </tr>
            <tr>
                <td>П1</td>
                <td><input type="number" class="form-control" name="p1" value="<?=$event->p1?>"></td>
            </tr>
            <tr>
                <td>П2</td>
                <td><input type="number" class="form-control" name="p2" value="<?=$event->p2?>"></td>
            </tr>
            <tr>
                <td>Б2,5</td>
                <td><input type="number" class="form-control" name="b25" value="<?=$event->b25?>"></td>
            </tr>
            <tr>
                <td>M2,5</td>
                <td><input type="number" class="form-control" name="m25" value="<?=$event->m25?>"></td>
            </tr>
            <tr>
                <td>Ф1(-1,5)</td>
                <td><input type="number" class="form-control" name="f1_m15" value="<?=$event->f1_m15?>"></td>
            </tr>
            <tr>
                <td>Ф2(-1,5)</td>
                <td><input type="number" class="form-control" name="f2_m15" value="<?=$event->f2_m15?>"></td>
            </tr>
            <tr>
                <td>Ф1(1,5)</td>
                <td><input type="number" class="form-control" name="f1_15" value="<?=$event->f1_15?>"></td>
            </tr>
            <tr>
                <td>Ф2(1,5)</td>
                <td><input type="number" class="form-control" name="f2_15" value="<?=$event->f2_15?>"></td>
            </tr>
            <tr>
                <td>2 - 0</td>
                <td><input type="number" class="form-control" name="ts20" value="<?=$event->ts20?>"></td>
            </tr>
            <tr>
                <td>0 - 2</td>
                <td><input type="number" class="form-control" name="ts02" value="<?=$event->ts02?>"></td>
            </tr>
            <tr>
                <td>2 - 1</td>
                <td><input type="number" class="form-control" name="ts21" value="<?=$event->ts21?>"></td>
            </tr>
            <tr>
                <td>1 - 2</td>
                <td><input type="number" class="form-control" name="ts12" value="<?=$event->ts12?>"></td>
            </tr>
            <tr>
                <td>Карта 1 П1</td>
                <td><input type="number" class="form-control" name="k1p1" value="<?=$event->k1p1?>"></td>
            </tr>
            <tr>
                <td>Карта 1 П2</td>
                <td><input type="number" class="form-control" name="k1p2" value="<?=$event->k1p2?>"></td>
            </tr>
            <tr>
                <td>Карта 2 П1</td>
                <td><input type="number" class="form-control" name="k2p1" value="<?=$event->k2p1?>"></td>
            </tr>
            <tr>
                <td>Карта 2 П2</td>
                <td><input type="number" class="form-control" name="k2p2" value="<?=$event->k2p2?>"></td>
            </tr>
            <tr>
                <td>Чёт</td>
                <td><input type="number" class="form-control" name="tc" value="<?=$event->tc?>"></td>
            </tr>
            <tr>
                <td>Нечёт</td>
                <td><input type="number" class="form-control" name="tnc" value="<?=$event->tnc?>"></td>
            </tr>
            <tr>
                <td>Дата и время:<br><?=$event->datetime?></td>
                <td>
                    <input type="date" class="form-control" name="date" value="<?=$event->datetime?>">
                    <input type="time" class="form-control mt-1" name="time" value="<?=$event->datetime?>">
                </td>
            </tr>
            </tbody>
        </table>
    </form>

</div>

