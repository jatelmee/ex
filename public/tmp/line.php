
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://odds.incub.space/v1/events/40/0/sub/10/line/ru",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array("Package: UNC59r9xrjx52xT92UcYPs7aN43B4Mcg"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $arr = json_decode($response);
    $body = $arr->body;
}
function getEvent_id($id){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://odds.incub.space/v1/event/".$id."/list/line/ru",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array("Package: UNC59r9xrjx52xT92UcYPs7aN43B4Mcg"
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    return json_decode($response->body);

}
?>
<div class="container-mini">
    <div class='game-block'>
        <div class='row w-100'>
            <div class='col-5'>
                Название<br>
            </div>
            <div class='col'>
                К-во игр
            </div>
            <div class='col'>
                П1
            </div>
            <div class='col'>
                П2
            </div>
        </div>
    </div>
    <?php
    foreach ($body as $key => $value){
        $el = $body[$key];
        echo "
                <a class='game-block' href='/bet-event?id=".$el->tournament_id."'>
                    <div class='row w-100'>
                        <div class='col-5'>
                ".$el->tournament_name."<br>
                        </div>
                        <div class='col'>
                ".$el->counter."
                        </div>                        
                        <div class='col'>
                ".$el->counter."
                        </div>
                        <div class='col'>
                ".$el->counter."
                        </div>
                    </div>
                </a>
        ";
    }
    ?>
</div>
