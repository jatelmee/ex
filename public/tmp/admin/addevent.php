
<script>
    $(()=>{
        const alert = $('#alert');
        if (!$('div').is('.message')){
            alert.addClass('none');
        }
    })
</script>

<div class="container-mini">
    <div class=" login-form">
        <div class="alert alert-danger w-100 mw-500" id="alert" role="alert">
            <?php if (isset($_SESSION['message']) and $_SESSION['message'] != ''):?>
                <div class="message">
                    <?=$_SESSION['message']?>
                </div>
            <?php endif;?>
        </div>
    </div>
    <h4 class="mt-2 text-center">Добавить событие</h4>
    <form action="/addevent" method="post">
        <div class="row">
            <div class="form-group mt-2">
                <label for="event">Название события</label>
                <input type="text" class="form-control" id="event" name="event"  placeholder="Событие">
            </div>
            <div class="form-group mt-2">
                <label for="inputState">Тип события</label>
                <select id="inputState" name="e_type" class="form-control">
                    <option selected>Dota 2</option>
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
            <div class="col mt-2">
                <div class="form-group">
                    <label for="teem1">Команда 1</label>
                    <input type="text" class="form-control" id="teem1" name="teem1"  placeholder="Команда 1">
                </div>
            </div>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="teem1=2">Команда 2</label>
                    <input type="text" class="form-control" id="teem2" name="teem2"  placeholder="Команда 2">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-2">
                <div class="form-group">
                    <label for="p1">П1</label>
                    <input type="number" step="0.1" class="form-control" id="p1" name="p1"  value="1">
                </div>
            </div>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="p2">П2</label>
                    <input type="number" step="0.1" class="form-control" id="p2"  name="p2" value="1">
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="mt-2 text-center">Тотал карт</h4>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="b1">Больше 2.5</label>
                    <input type="number" step="0.1" class="form-control" id="b1" name="b25"  value="1">
                </div>
            </div>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="b2">Меньше 2.5</label>
                    <input type="number" step="0.1" class="form-control" id="b2" name="m25"  value="1">
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="mt-2 text-center">Фора по картам</h4>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="f1_m">Фора 1(-1.5)</label>
                    <input type="number" step="0.1"  class="form-control" id="f1_m" name="f1_m15"  value="1">
                </div>
            </div>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="f2_m">Фора 2(-1.5)</label>
                    <input type="number"  step="0.1" class="form-control" id="f2_m" name="f2_m15" value="1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-2">
                <div class="form-group">
                    <label for="f1_p">Фора 1(1.5)</label>
                    <input type="number" step="0.1" class="form-control" id="f1_p" name="f1_15"  value="1">
                </div>
            </div>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="f2_p">Фора 2(1.5)</label>
                    <input type="number" step="0.1" class="form-control" id="f2_p" name="f2_15"   value="1">
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="mt-2 text-center">Точный счёт</h4>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="2-0">2-0</label>
                    <input type="number"  step="0.1"  class="form-control" id="2-0" name="ts20" value="1">
                </div>
            </div>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="0-2">0-2</label>
                    <input type="number" step="0.1"  class="form-control" id="0-2" name="ts02" value="1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-2">
                <div class="form-group">
                    <label for="2-1">2-1</label>
                    <input type="number" step="0.1"  class="form-control" id="2-1" name="ts21" value="1">
                </div>
            </div>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="1-2">1-2</label>
                    <input type="number" step="0.1"  class="form-control" id="1-2" name="ts12" value="1">
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="mt-2 text-center">Карта 1 исход</h4>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="p1k1">П1</label>
                    <input type="number" step="0.1"  class="form-control" id="p1k1" name="k1p1"  value="1">
                </div>
            </div>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="p2k1">П2</label>
                    <input type="number" step="0.1"  class="form-control" id="p2k1" name="k1p2"  value="1">
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="mt-2 text-center">Карта 2 исход</h4>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="p1k2">П1</label>
                    <input type="number" step="0.1"  class="form-control" id="p1k2" name="k2p1" value="1">
                </div>
            </div>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="p2k2">П2</label>
                    <input type="number" step="0.1"  class="form-control" id="p2k2" name="k2p2" value="1">
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="mt-2 text-center">Тотал чёт/нечёт</h4>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="tc">Чёт</label>
                    <input type="number" step="0.1"  class="form-control" id="tc" name="tc" value="1">
                </div>
            </div>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="tnc">Нечёт</label>
                    <input type="number" step="0.1"  step="0,1" class="form-control" id="tnc" name="tnc" value="1">
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="mt-2 text-center">Время начала</h4>
            <div class="col mt-2">
                <div class="form-group">
                    <label for="inputDate">Введите дату:</label>
                    <input type="date" name="date" id="date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputDate">Время:</label>
                    <input type="time" name="time" id="time" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <input type="submit" class="btn btn-outline-info mt-4" value="Добавить">
        </div>
    </form>


</div>








