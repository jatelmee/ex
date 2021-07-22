$("#calc-btn").on('click', function (){
    var sum = $('#sum').val();
    if (!sum)
        sum = 0;
    $('#profit').text(`Вы получите: ${sum}`);
});