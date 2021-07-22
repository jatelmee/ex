<div class="container-mini">
    <script>
        $(()=>{
            const alert = $('#alert');
            if (!$('div').is('.message')){
                alert.addClass('none');
            }
        })
    </script>
    <div class=" login-form">
        <div class="alert alert-danger w-100 mw-500" id="alert" role="alert">
            <?php if (isset($_SESSION['messageSum']) and $_SESSION['messageSum'] != ''):?>
                <div class="message">
                    <?=$_SESSION['messageSum']?>
                </div>
            <?php endif;?>
        </div>
    </div>
    <form action="/reg-bet" method="post">
        <div class="card text-white bg-dark mb-3 w-100 mt-4" >
            <div class="card-header">Купон <?=$row->e_type?></div>
            <div class="card-body">
                <h5 class="card-title">На вашем счету: <?=$_SESSION['balance']?> RUB</h5>
                <table class="table text-light mt-2 w-75">
                    <tbody>
                    <tr>
                        <th scope="row">Сума ставки:</th>
                        <td>
                            <input type="number" name="sum" value="100" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Игра</th>
                        <td>
                            <input type="text"  value="<?=$row->teem1?> - <?=$row->teem2?>" class="form-control" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Ставка</th>
                        <td>
                            <input type="text"  value="<?=replaceBet($_GET['type'])?>" class="form-control" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/bet-event?id=<?=$row->id?>" class="btn btn-outline-info">Назад</a>
                        </td>
                        <td>
                            <input type="submit" value="Поставить" class="btn btn-outline-info">
                            <input type="hidden" value="<?=$_SESSION['id']?>" name="userid">
                            <input type="hidden" value="<?=$_GET['id']?>" name="event">
                            <input type="hidden" value="<?=$_GET['type']?>" name="bet">
                            <input type="hidden" value="<?=date("Y-m-d H:i:s")?>" name="datetime">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>
