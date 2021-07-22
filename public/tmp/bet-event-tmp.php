<div class="container-mini">
    <h4 class="mt-2 text-center"><?=$row->event?></h4>
    <div class="main-green-block">
        <div class="teems-names">
            <h5><?=$row->teem1?></h5>
            <div class="game-date-block">
                <h7 class="text-center mt-2">
                    Дата и время начала:<br>
                    <?=$row->datetime?>
                </h7>
            </div>
            <h5><?=$row->teem2?></h5>
        </div>
    </div>
    <div class="bets-block">
        <div class="bets-row">
            <div>П1</div>
            <div>П2</div>
        </div>
        <div class="bets-row bg-purpur">
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=p1"><?=$row->p1?></a>
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=p2"><?=$row->p2?></a>
        </div>
        <div class="bets-row">
            <div class="w-100">Тотал</div>
        </div>
        <div class="bets-row">
            <div>Больше 2,5</div>
            <div>Меньше 2,5</div>
        </div>
        <div class="bets-row bg-purpur">
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=b25"><?=$row->b25?></a>
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=m25"><?=$row->m25?></a>
        </div>
        <div class="bets-row">
            <div>Чётный</div>
            <div>Нечётный</div>
        </div>
        <div class="bets-row bg-purpur">
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=tc"><?=$row->tc?></a>
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=tnc"><?=$row->tnc?></a>
        </div>
        <div class="bets-row">
            <div class="w-100">Фора</div>
        </div>
        <div class="bets-row">
            <div>Фора 1(-1,5)</div>
            <div>Фора 2(-1,5)</div>
        </div>
        <div class="bets-row bg-purpur">
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=f1_m15"><?=$row->f1_m15?></a>
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=f2_m15"><?=$row->f2_m15?></a>
        </div>
        <div class="bets-row">
            <div>Фора 1(1,5)</div>
            <div>Фора 2(1,5)</div>
        </div>
        <div class="bets-row bg-purpur">
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=f1_15"><?=$row->f1_15?></a>
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=f2_15"><?=$row->f2_15?></a>
        </div>
        <div class="bets-row">
            <div class="w-100">Точный счёт</div>
        </div>
        <div class="bets-row">
            <div>2:0</div>
            <div>0:2</div>
            <div>2:1</div>
            <div>1:2</div>
        </div>
        <div class="bets-row bg-purpur">
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=ts20"><?=$row->ts20?></a>
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=ts02"><?=$row->ts02?></a>
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=ts21"><?=$row->ts21?></a>
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=ts12"><?=$row->ts12?></a>
        </div>
        <div class="bets-row">
            <div class="w-100">Карта 1</div>
        </div>
        <div class="bets-row">
            <div>П1</div>
            <div>П2</div>
        </div>
        <div class="bets-row bg-purpur">
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=k1p1"><?=$row->k1p1?></a>
            <a class="column"  href="/make-bet?id=<?=$row->id?>&type=k1p2"><?=$row->k1p2?></a>
        </div>
        <div class="bets-row">
            <div class="w-100">Карта 2</div>
        </div>
        <div class="bets-row">
            <div>П1</div>
            <div>П2</div>
        </div>
        <div class="bets-row bg-purpur">
            <a class="column" href="/make-bet?id=<?=$row->id?>&type=k2p1"><?=$row->k2p1?></a>
            <a class="column"  href="/make-bet?id=<?=$row->id?>&type=k2p1"><?=$row->k2p2?></a>
        </div>
    </div>
</div>
