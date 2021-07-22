
<div class="container">
    <h4 class="mt-2 text-center">События</h4>
    <table class="table text-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Событие</th>
            <th scope="col">Тип</th>
            <th scope="col">К1</th>
            <th scope="col">К2</th>
            <th scope="col">П1 / П2</th>
            <th scope="col">Б2,5 / М2,5</th>
            <th scope="col">Открыть</th>
        </tr>
        </thead>

        <tbody>
        <?php
        getEvents();
        ?>

        </tbody>
    </table>
</div>
