
<div class="container">
    <h4 class="mt-2 text-center">Юзеры</h4>
    <table class="table text-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">E-mail</th>
            <th scope="col">Баланс</th>
            <th scope="col">Промо</th>
        </tr>
        </thead>

        <tbody>
        <?php
        getUsr();
        ?>

        </tbody>
    </table>
</div>
