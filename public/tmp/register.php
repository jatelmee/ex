<?php
if(uid()){
    redirect();
}

?>
<script>
    $(()=>{
        const alert = $('#alert');
        if (!$('div').is('.message')){
            alert.addClass('none');
        }
    })
</script>
<div class="container">
    <div class=" login-form">
        <div class="alert alert-danger w-100 mw-500" id="alert" role="alert">
            <?php if (isset($_SESSION['message']) and $_SESSION['message'] != ''):?>
                <div class="message">
                    <?=$_SESSION['message']?>
                </div>
            <?php endif;?>
        </div>
    </div>


    <div class="login-form">
        <form class="flex-column m-3 " action="/register" method="post">
            <h3 class="text-center mt-4">Регистрация</h3>
            <div class="form-group mt-2">
                <label for="email">Email адрес</label>
                <input type="email" class="form-control" id="email" name="email" value="<?=toFill('email')?>"  placeholder="Введите email">
                <small class="form-text text-muted">Мы никогда никому не передадим вашу электронную почту.</small>
            </div>
            <div class="form-group mt-2">
                <label for="email">ФИО</label>
                <input type="text" class="form-control" id="uname" name="uname"  value="<?=toFill('uname')?>"   placeholder="Имя">
                <input type="text" class="form-control mt-2" id="sname" name="sname"  value="<?=toFill('sname')?>"   placeholder="Фамилия">
            </div>
            <div class="form-group mt-2">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль">
            </div>
            <div class="form-group mt-2">
                <label for="password">Подтверждение пароля</label>
                <input type="password" class="form-control" id="password-repeat" name="password-repeat" placeholder="Повторите пароль">
            </div>
            <div class="form-group mt-2">
                <label for="">Часовой пояс</label>
                <input class="form-control" type="text"  placeholder="Москва (+3GMT)" readonly>
            </div>
            <div class="form-group mt-2">
                <label for="">Валюта</label>
                <input class="form-control" type="text"  placeholder="RUB (Российский рубль)" readonly>
            </div>
            <div class="form-group mt-2">
                <label for="password">Промокод(не обязательно)</label>
                <input type="text" class="form-control" id="promo" name="promo"  value="<?=toFill('promo')?>"  placeholder="Промокод">
            </div>
            <input name="check" type="submit" class="btn-outline-info btn mt-4 w-100" value="Зарегистрироваться" id="btn">

            <p class="form-text mt-2">Нажимая на кнопку "Регистрация", ты соглашаешься с
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link p-0" style="font-size: 14px" data-toggle="modal" data-target="#exampleModalLong">
                    Договором оферты
                </button>
                <br>и подтверждаешь, что тебе больше 18 лет</p>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalLongTitle">Договор</h5>

                        </div>
                        <div class="modal-body text-dark">
                            <p>Настоящий договор об оказании игорных услуг через веб-сайт www.cyber-pro.bet заключен между компанией  Cyber Pro Ltd (далее по тексту – «Cyber Pro»), зарегистрированной и действующей по законодательству Кюрасао, с одной стороны,

                                и Физическим лицом, пользующимся игорными услугами на веб-сайте www.cyber-pro.bet (далее по тексту – « Игрок»), с другой стороны, (далее по тексту – «Договор»).

                                Данный Договор является публичным, включает в себя положения договора присоединения и действует в случае выбора Игроком валюты игры иной, чем доллар США (USD) или Евро (EUR).
                            </p>
                            <p>1. Предмет Договора.</p>
                            <p>                            1.1. Услуги по участию в перечне пари
                            </p>
                            <p>                            1.1.1. Cyber Pro предоставляет Игроку услуги по участию Игрока в перечне пари в соответствии с утвержденным Cyber Pro действующим порядком Правил игры (далее по тексту – «Правила»).
                            </p>
                            <p>                            1.1.2. Cyber Pro предоставляет Игроку возможность формировать букмекерские ставки и осуществлять управление игровым счетом на сайте в сети Интернет ( www.cyber-pro.bet).
                            </p>
<p>                            1.2. Услуги по участию в других играх на сайте  www.cyber-pro.bet
</p>


<p>                            1.2.1. Cyber Pro предоставляет Игроку услуги по участию Игрока в других играх, представленных на сайте www.cyber-pro.bet в соответствии с утвержденным Cyber Pro действующим порядком, который представлен для каждой отдельной игры во вкладке «Как играть» (далее по тексту –«Правила Игр»)
</p>
<p>                            1.3. Правила и Правила Игр являются частью данного Договора. В случае противоречий между положениями Правил и/или Правил Игр и данного Договора, преимущественную силу имеют положения данного Договора.
</p>
<p>                            1.4. Положения данного Договора распространяются и на услуги по участию в перечне пари, и на услуги по участию в других играх на сайте  www.cyber-pro.bet.
</p>
<p>                            1.5. После регистрации Игрока на сайте Cyber Pro в сети Интернет ( www.cyber-pro.bet) считается, что Игрок принимает условия настоящего Договора, в полном объеме ознакомлен с Правилами и Правилами Игр, и согласен играть в соответствии с ними, в том числе Игрок согласен со всеми ставками комиссионных сборов за осуществление перечисления денежных средств, а также подтверждает свое согласие на получение e-mail и sms-оповещений о новых услугах.
</p>
<p>                            2. Права и обязанности сторон.
</p>
<p>                            2.1. Cyber Pro  обязан:
</p>
<p>                            2.1.1. Зарегистрировать Игрока и присвоить ему уникальный номер игрового счета.
</p>
<p>                            2.1.2. Обеспечить Игроку возможность управления игровым счетом.
</p>
<p>                            2.1.3. Сохранять конфиденциальность полученной об Игроке информации при регистрации, сделанных ставках, результатах игры Игрока и денежных расчетах с ним и другой информации согласно Закона о защите персональных данных Кюрасао 2013 года (Personal Data Protection Act, Curacao).
</p>
<p>                            2.1.4. Обеспечить Игрока круглосуточной технической поддержкой по электронной почте или телефону "Горячей линии".
</p>
<p>                            2.2. Cyber Pro имеет право:
</p>
<p>                            2.2.1. Приостановить предоставление сервиса, в случае невыполнения Игроком условий настоящего Договора или Правил/Правил Игр.
</p>
<p>                            2.2.2. Изменять условия настоящего Договора в одностороннем порядке. Cyber Pro не направляет Игроку дополнительно уведомлений о изменениях в Договоре, Правилах/Правилах Игр. Игрок обязан самостоятельно следить за соответствующими изменениями.
</p>
<p>                            2.3. Игрок обязан:
</p>
<p>                            2.3.1. Самостоятельно ознакомиться с Правилами/Правилами Игр и получить исчерпывающие разъяснения по неясным вопросам.
</p>
<p>                            2.3.2. Хранить в тайне номер своего игрового счета и пароли доступа к нему. Все операции, произведенные с использованием корректно введенных имени Игрока и пароля и/или номера счета, будут рассматриваться как действительные вне зависимости от того, были ли они авторизованы Игроком, и Cyber Pro не несет ответственности за любые претензии в том случае, если Игрок сообщит свое имя пользователя, пароль или номер счета другому лицу.
</p>
<p>                            2.4. Игрок имеет право:
</p>
<p>                         2.4.1. Получать от Cyber Pro полный перечень пари, в соответствии с действующими Правилами/Правилами Игр.
</p>

<p>                           2.4.2. Клиент имеет право один раз в 90 дней в одностороннем порядке отказаться от игры с Parimatch, предварительно сообщив об этом по электронной почте с зарегистрированного адреса, обязательно пройдя авторизацию. Счет будет заблокирован после проведения окончательных взаиморасчетов. В исключительных случаях, игрок может повторно подать запрос на отказ от игры, но не менее, чем через 30(тридцать) дней после предыдущего запроса. Компания оставляет право отказать в повторном блокировании счета.
</p>
<p>                            2.4.3. Устанавливать для своего игрового счета ограничения по максимальному размеру ставок и потраченных денежных средств или применять самоотвод от игры на свое усмотрение в порядке, предусмотренному Правилами/Правилами Игр.
</p>
<p>                            3. Порядок расчетов.
</p>
<p>                            3.1. Все взаиморасчеты осуществляются в соответствии с действующими Правилами/Правил Игр. Все ставки сборов Cyber Pro и ставки комиссионных сборов за осуществление перечисления денежных средств зависят от страны резидентства Игрока или страны, на территории которой находится Игрок в момент получения услуг Cyber Pro. Все ставки сборов Cyber Pro и ставки комиссионных сборов за осуществление перечисления денежных средств указаны в Правилах/Правилах Игр.
</p>
<p>                            3.2. Игрок несет ответственность за корректность осуществляемых им платежей и хранение расчетных документов.
</p>
<p>                            3.3. Фактом оплаты считается фактическое поступление средств на счета Cyber Pro Ltd.
</p>
<p>                            3.4. Если игровой счет Клиента был заблокирован по причине мошеннических или других противозаконных действий со стороны Игрока, остаток на его игровом счете направляется Cyber Pro для лиц, пострадавших от указанных действий Игрока, или для целей благотворительности.
</p>
<p>                            3.5. В случае технических неполадок в системе расчетов Cyber Pro, выплата Игроку осуществляется в порядке, предусмотренном Правилами/Правилами Игр.
</p>
<p>                            3.6. Cyber Pro не предоставляет Игроку кредиты для совершения игры.
</p>
<p>                            3.7. Для получения услуг по участию в перечне пари и услуг по участию в других играх на сайте  www.cyber-pro.bet используется единый игровой счет Игрока.
</p>
<p>                            4. Особые условия и ответственность сторон.
</p>
<p>                            4.1. Cyber Pro не несет ответственности за сохранность денежных средств на игровом счете в случае разглашения Игроком номера счета и паролей доступа к нему.
</p>
<p>                            4.2. Cyber Pro не несет ответственности за упущенные выгоды, в случае временных технических неполадок сервера и электронных каналов связи, которые могут повлечь невозможность Игроком пользоваться сервисом Cyber Pro.
</p>
<p>                            4.3. Cyber Pro не несет ответственность за качество работы финансовых и технических партнеров и посредников.
</p>
<p>                            4.4. Cyber Pro не несет ответственность за предоставление по требованию государственных органов информации об Игроке, полученной Cyber Pro при регистрации Игрока, сделанных ставках, результатах игры Игрока и денежных расчетах с ним. Игрок разрешает Cyber Pro собирать, хранить и использовать его персональные данные для целей оценки его платежеспособности или подбора для него маркетинговых продуктов и услуг.
</p>
<p>                            4.5. Игрок принимает на себя в полном объеме все риски, связанные с использованием телефонных линий, Интернета и прочих средств связи.
</p>
<p>                            4.6. Игрок в полном объеме отвечает за сохранность номера игрового счета и паролей доступа к нему.
</p>
<p>                            4.7. Регистрация Игрока означает полную удовлетворенность им средствами безопасности, применяемых Cyber Pro.
</p>
<p>                            4.8. Регистрация Игрока означает гарантию со стороны Игрока того, что:
</p>
<p>                            4.8.1. Игрок достиг возраста 18 лет и согласно законодательству страны, резидентом которой является Игрок или страны, на территории которой находится Игрок в момент получения услуг Cyber Pro, Игрок имеет право получать услуги, предоставляемые Cyber Pro.
</p>
<p>                            4.8.2. Игрок не является полноправным владельцем денежных средств, которые он размещает на своем игровом счете.
</p>
<p>                            4.9. Игрок подтверждает свое согласие на проверку Cyber Pro его возраста, страны резидентства Игрока или страны, на территории которой находится Игрок в момент получения услуг Cyber Pro , и идентификацию его личности.
</p>
<p>                            4.10. Игрок гарантирует, что вся информация, которую он предоставил Cyber Pro, является правдивой.
</p>
<p>                            4.11. В случае, если данный Договор представлен не на русском языке, преимущественную силу имеет русскоязычная версия данного Договора.
</p>
<p>                            4.12. В случае, если Cyber Pro обнаружит, что Игрок не достиг возраста 18 лет, а также в случае обнаружения мошеннических или других противозаконных действий, в том числе ставки на "договорные" матчи, со стороны Игрока, Cyber Pro может применить блокировку игрового счета Игрока и проводить расследование действий Игрока согласно с Правилами/Правилами Игр.
</p>
<p>                            4.13. Cyber Pro не предоставляет услуги на территории стан, законодательство которых запрещает пользование онлайн услугами, предоставляемыми на веб-сайте www.cyber-pro.bet, в частности на территории следующих стран: США, Израиль, Сингапур, Территория Мохоки Канавак (Канада), Эстония, Франция, Республика Кипр, Великобритания, Италия. Настоящим Cyber Pro информирует, что законодательство Сингапура запрещает предоставление игровых услуг онлайн потребителям, которые физически находятся в Сингапуре. Не смотря на вышеизложенные положения в данном пункте, Cyber Pro не обязана и не будет: уведомлять Игрока о наличии или содержании положений законодательства какой-либо страны, которые запрещают пользование онлайн услугами, которые предоставляются на веб-сайте www.cyber-pro.bet, предоставлять консультаций по этим вопросам.
</p>
<p>                            4.14. Настоящим Игрок гарантирует, что в момент получения онлайн услуг от Cyber Pro:
</p>
<p>                            (a) он/она физически не находится на территории какой-либо из стран, указанных в пункте 4.13 Договора;
</p>
<p>                            (b) он/она соблюдает законодательство страны гражданства Игрока и/или страны, на территории которой находится Игрок в момент получения услуг от Cyber Pro, в отношении права или запрета на пользование услугами, предоставляемыми на веб-сайте www.cyber-pro.bet.
</p>
<p>                            4.15. Игрок обязан самостоятельно осуществлять действия, которые могут требоваться положениями законодательства страны налогового резидентства Игрока и/или страны, на территории которой находится Игрок в момент получения выигрыша, в связи с уплатой налогов или других обязательных платежей с полученного им дохода от Cyber Pro. Cyber Pro не обязан уведомлять Игрока о наличии или содержании таких положений законодательства, а также не предоставляет консультаций по этим вопросам.
</p>
<p>                            5. Форс-мажор.
</p>
<p>                            5.1. Стороны согласились, что в случае возникновения форс-мажорных обстоятельств (действия непреодолимой силы, которая не зависит от воли сторон Договора), включая действия государственных органов, которые делают невозможным выполнение Сторонами своих обязательств по этому Договору, пожар, наводнения, другие стихийные беды, Стороны освобождаются от выполнения своих обязательств по этому Договору на время действия отмеченных обстоятельств. В случае, когда действие отмеченных обстоятельств длится более чем 30 (тридцать) календарных дней, каждая из Сторон имеет право разорвать этот Договор и не несет ответственности за такое расторжение при условии, что она уведомит об этом другую Сторону не позднее как за 15 (пятнадцать) дней до расторжения. Достаточным доказательством действия форс-мажорных обстоятельств является документ, выданный торгово-промышленной Палатой. Возникновение отмеченных обстоятельств не является основанием для отказа Cyber Pro от возврата средств Игроку с игрового счета.
</p>
<p>                            6. Порядок рассмотрения претензий и споров.
</p>
<p>                            6.1. Претензии Игрока принимаются Cyber Pro к рассмотрению только в письменном виде и в срок не позднее 10 (десяти) календарных дней с даты возникновения спорной ситуации. Срок рассмотрения претензий Игрока составляет не более 30 (тридцати) календарных дней.
</p>
<p>                            6.2. Рассмотрение претензий Cyber Pro осуществляется только при наличии у Игрока соответствующих финансовых документов, подтверждающих оплату заключенного пари.
</p>
<p>                            6.3. Споры, возникающие относительно данного Договора, рассматриваются судом Кюрасао или Curaçao eGaming, которая уполномочена и регулируется Правительством Кюрасао, в соответствии с законодательством Кюрасао. Для обращения в Curaçao eGaming можно отправить сообщение электронной почтой по адресу support@cyber-pro.bet или заполнить форму сообщения на этой странице.
</p>
<p>                            7. Права на объекты интеллектуальной собственности
</p>
<p>                            7.1. Все элементы дизайна, тексты, графические изображения, музыка, звуки, фотографии, видеоматериалы и их подборки и расположение на веб-сайте Cyber Pro (  www.cyber-pro.bet), а также компиляции программного обеспечения, исходные коды, ПО и все прочие материалы являются объектами защиты авторских прав и иных прав собственности, которые либо принадлежат Cyber Pro, либо используются Cyber Pro по лицензии, выданной третьими лицами, являющимися их владельцами. В той части, в которой любые материалы могут быть скачаны или распечатаны, такие материалы также могут быть скачаны на отдельный персональный компьютер, и их отдельные части могут быть распечатаны для использования в личных и некоммерческих целях Игрока.
</p>
<p>                            7.2. Ни при каких обстоятельствах использование услуг Cyber Pro не дает Игроку прав на любую интеллектуальную собственность (например, авторские права, ноу-хау или торговые марки), принадлежащую Cyber Pro или любому другому третьему лицу.
</p>
<p>                            7.3. Игрок не имеет право самостоятельно осуществлять или позволять другому лицу осуществлять копирование, хранение, опубликование, аренду, лицензирование, продажу, распространение, изменение, добавление, удаление, уничтожение или нарушение работы веб-сайта ( www.cyber-pro.bet) или любого его раздела любым способом, а также напрямую или опосредованно нарушать или вмешиваться в работу веб-сайта (www.cyber-pro.bet) (либо планировать такие действия) или изменять его, за исключением случаев, когда это происходит в ходе просмотра или использования веб-сайта (www.cyber-pro.bet) согласно Правилам/Правилами Игр.
</p>
<p>                            8. Заключение и расторжение Договора.
</p>
<p>                            8.1. Момент регистрации Игрока на сайте www.cyber-pro.bet считается моментом заключения Договора.
</p>
<p>                            8.2. Расторжением Договора считается уведомление Cyber Pro Игрока с предоставлением подтверждения произведенных с ним окончательных расчетов.
</p>
<p>                            8.3. Уступка обязательств по Договору со стороны Игрока не допускается. Игрок не может уступать свои обязательства по настоящему Договору, равно как и любые права или обязательства по настоящему Договору, любому другому физическому или юридическому лицу.
</p>
<p>                            8.4. Cyber Pro оставляет за собой право перевести или передать права и обязанности по данному Договору целиком или частично без уведомления Игрока при условии, что любая такая передача будет на тех же условиях или на не менее благоприятных для Игрока.
</p>
<p>                            8.5. По всем вопросам, не урегулированным настоящим Договором, стороны руководствуются действующим законодательством Кюрасао.
</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>


</div>
