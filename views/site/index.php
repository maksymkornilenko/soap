<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper; ?>
<div id="allrecords" class="t-records">
    <div id="rec122136901" class="r t-rec">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard">
                <div class="t396__carrier">

                </div>
                <div class="t396__filter">

                </div>

                <?php if (!empty($cookies['count']->value)): ?>
                    <div class="t706__carticon t706__carticon_showed">
                        <div class="t706__carticon-text t-name t-name_xs">&nbsp;<?php echo $cookies['sum'] ?>&nbsp;грн.
                        </div>
                        <div class="t706__carticon-wrapper">
                            <div class="t706__carticon-imgwrap"
                                 style="border: 1px solid #bd7592;background-color:#ffffff;">
                                <img src="/image/cart.png"/>
                            </div>
                            <div class="t706__carticon-counter"
                                 style="background-color:#e3226f;"><?php echo $cookies['count'] ?></div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="t706__carticon t706__carticon_showed">
                        <div class="t706__carticon-text t-name t-name_xs">Ваша корзина пуста</div>
                        <div class="t706__carticon-wrapper">
                            <div class="t706__carticon-imgwrap"
                                 style="border: 1px solid #bd7592;background-color:#ffffff;">
                                <img src="/image/cart.png"/>
                            </div>
                            <div class="t706__carticon-counter" style="background-color:#e3226f;">0</div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class='t396__elem tn-elem' data-elem-id='1470209944682'>
                    <div class='tn-atom'>
                        Натуральное кокосовое мыло без парабенов и токсинов <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565873406304'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img'
                             src='/image/milk.png'
                             imgfield='tn_img_1565873406304'>
                    </div>
                </div>
                <div class='t396__elem tn-elem ' data-elem-id='1565873449857'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img'
                             src='/image/Soap.png'
                             imgfield='tn_img_1565873449857'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565873481067'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/paraben free.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem ' data-elem-id='1565881737738'>
                    <div class='tn-atom'>
                        Нежно очищает, насыщает кожу влагой и снимает воспаления. Безопасно для детей и взрослых!<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem ' data-elem-id='1566978692711'>
                    <a class='tn-atom buy' id="for-nav" data-name="Кокосовое мыло"
                       data-id="<?php echo $products['id'] ?>"
                       data-count="1">Купить</a>
                </div>
                <div class='t396__elem tn-elem ' data-elem-id='1567550639151'>
                    <div class='tn-atom'>
                        1 банка - 150 грн<br>
                        2 банки - 250 грн<br>
                        3 банки - 300 грн<br>
                    </div>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec122177362" class="r t-rec"><!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard" >
                <div class="t396__carrier"></div>
                <div class="t396__filter"></div>
                <div class='t396__elem tn-elem' data-elem-id='1565873481067'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/block safe.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565881671297'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/block allergy.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565881677553'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/block profit.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565881908092'>
                    <div class='tn-atom'>
                        Безопасно<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565881942504'>
                    <div class='tn-atom'>
                        Гипоаллергенно<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565881984085'>
                    <div class='tn-atom'>
                        Выгодно<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882009094'>
                    <div class='tn-atom'>Без консервантов и токсичных ингредиентов<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882067078'>
                    <div class='tn-atom'>
                        100%<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882097747'>
                    <div class='tn-atom'>
                        Бережное очищение для любого типа кожи<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882111460'>
                    <div class='tn-atom'>
                        Результат<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882135201'>
                    <div class='tn-atom'>150 грн<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882155842'>
                    <div class='tn-atom'>
                        Большой объем - <br>460 мл и выгодная цена <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec124872283" class="r t-rec">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard">
                <div class="t396__carrier"></div>
                <div class="t396__filter"></div>
                <div class='t396__elem tn-elem' data-elem-id='1566070775974'>
                    <div class='tn-atom'>
                        В состав большинства косметических средств входят
                        парабены, которые воздействуют на организм человека подобно гормонам, вызывая нарушения в работе
                        эндокринной системы. <br><br> Исследования Филиппы Дарбре ещё в 2004 году доказали, что в 95%
                        образцов раковой опухоли присутствовали парабены. <br> К сожалению, в странах СНГ количество
                        этих веществ в косметических средствах никак не контролируется и не нормируется. <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1567082766942'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img'
                             src='/image/chemistry.png'
                             imgfield='tn_img_1567082766942'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1567083259259'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img'
                             src='/image/carefull.png'
                             imgfield='tn_img_1567083259259'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1567083402384'>
                    <div class='tn-atom'>
                        Только мы сами можем позаботиться о своем
                        здоровье, став осознанными потребителями. Выбирайте продукцию MALDIVES DREAMS - она безопасна и
                        не содержит парабенов!<br>
                    </div>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec122837647" class="r t-rec">
        <a name="opisanie"></a>
    </div>
    <div id="rec122181474" class="r t-rec">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard">
                <div class="t396__carrier"></div>
                <div class="t396__filter"></div>
                <div class='t396__elem tn-elem' data-elem-id='1565873481067'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/simple soap.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565873512836'>
                    <a class='tn-atom buy' data-name="Кокосовое мыло" data-id="<?php echo $products['id'] ?>"
                       data-count="1">Купить</a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882009094'>
                    <div class='tn-atom'>Содержит агрессивные для кожи и волос
                        сульфаты<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882835718'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882937929'>
                    <div class='tn-atom'>
                        Обладает эстрогенной активностью и нарушает
                        работу эндокринной системы<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882965322'>
                    <div class='tn-atom'>
                        Вызывает риск онкозаболеваний<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565883046934'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565883050150'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='/image/maldive Soap.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565883152398'>
                    <div class='tn-atom'>Не содержит парабенов<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565883152404'>
                    <div class='tn-atom'>
                        Полностью экологично и не тестируется на животных<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565883152408'>
                    <div class='tn-atom'>
                        Основано на натуральных природных сульфатах <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565883292551'>
                    <div class='tn-atom'>
                        Изготовлено по международному стандарту ISO
                        9001<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566245868234'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/delete-cross.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566245894250'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/delete-cross.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566245897346'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/delete-cross.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566245902722'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/ok symbol.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566245920812'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/ok symbol.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566245922715'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/ok symbol.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566245925135'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/ok symbol.png'>
                    </div>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec122838177" class="r t-rec">
        <a name="security"></a>
    </div>
    <div id="rec122220802" class="r t-rec">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard">
                <div class="t396__carrier"></div>
                <div class="t396__filter"></div>
                <div class='t396__elem tn-elem' data-elem-id='1565882009094'>
                    <div class='tn-atom'>В США, Японии и Евросоюзе установлен контроль над
                        содержанием парабенов в косметических средствах... И только в СНГ они допускаются к
                        использованию без ограничений. <br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565882835718'>
                    <img class='tn-atom t-bgimg' src="/image/parabens.png">
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565883046934'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565883050150'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/old soap.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565898319787'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/red block.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565898482910'>
                    <div class='tn-atom'>
                        Мыло Maldives Dreams произведено по технологии
                        Natural Power. Для нас крайне важно качество и экологичность нашей продукции! А потому мы
                        контролируем всю цепочку поставок от сырья до готового продукта. <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565898482917'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='/image/new soap.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565898482925'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/blue block.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565899944444'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='/image/leaf.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565900014788'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/flamingo.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070605117'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/maldive dreams logo2.png'>
                    </div>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec122228014" class="r t-rec">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard">
                <img class="t396__carrier t-bgimg" src="/image/beach.png">
                <div class="t396__filter" ></div>
                <div class='t396__elem tn-elem' data-elem-id='1565882835718'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565900959976'>
                    <div class='tn-atom'>5 преимуществ <br> Maldives Dream перед любым
                        другим мылом <br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070775970'>
                    <div class='tn-atom'>Гель и мыло 2 в 1<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070775974'>
                    <div class='tn-atom'>Купите один продукт вместо двух! Мягкая кожа рук
                        и тела скажет вам "спасибо"<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070884890'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='image/2=1.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070895832'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070895839'>
                    <div class='tn-atom'>Экономное использование<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070895843'>
                    <div class='tn-atom'>Мыло прекрасно пенится - одной большой баночки
                        (460 гр.) вам хватит на 3-6 месяцев<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070895848'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/hend.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070983899'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070983908'>
                    <div class='tn-atom'>Уход за кожей<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070983912'>
                    <div class='tn-atom'>Содержание кокосового масла питает и увлажняет
                        кожу, делает ее нежной и мягкой<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070983917'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='/image/water.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566071120363'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566071120371'>
                    <div class='tn-atom'>Фантастический запах<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566071120377'>
                    <div class='tn-atom'>Поход в душ станет SPA-процедурой, а после негo
                        за вами будет оставаться изысканный кокосовый аромат<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566071120381'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/smells.png' imgfield='tn_img_1566071120381'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566071137520'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566071137526'>
                    <div class='tn-atom'>Наполняет витаминами<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566071137531'>
                    <div class='tn-atom'>Молочная кислота мягко отшелушивает омертвевшие
                        клетки, а витамин Е способствует регенерации и продлевает молодость клеток <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566071137535'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='/image/vitamins.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566071398288'>
                    <a class='tn-atom buy' data-name="Кокосовое мыло" data-id="<?php echo $products['id'] ?>"
                       data-count="1">Заказать</a>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec122571865" class="r t-rec">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard">
                <div class="t396__carrier"></div>
                <div class="t396__filter"></div>
                <div class='t396__elem tn-elem' data-elem-id='1565900959976'>
                    <div class='tn-atom'>
                        Maldives Dream гарантирует безопасность<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070775970'>
                    <div class='tn-atom'>
                        А главное - безопасно для детей!<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070775974'>
                    <div class='tn-atom'>Кокосовое мыло Maldives Dream - это натуральный
                        продукт, произведенный по международному стандарту ISO 9001:2015. Он не содержит токсичных
                        ингредиентов и не тестируется на животных.<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070884890'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/rose block big.png' imgfield='tn_img_1566070884890'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566072779397'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/certificate.png' imgfield='tn_img_1566072779397'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566282278296'>
                    <img class='tn-atom t-bgimg' src="/image/ISOjpg.jpg">
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec122838247" class="r t-rec">
        <a name="gift"></a>
    </div>
    <div id="rec122572712" class="r t-rec t-rec_pb_0">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard">
                <div class="t396__carrier"></div>
                <div class="t396__filter"></div>
                <div class='t396__elem tn-elem' data-elem-id='1565900959976'>
                    <div class='tn-atom'>Подарок детям<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070775970'>
                    <div class='tn-atom'>Купите 1 баночку мыла себе. <br>Еще 1 мы отправим
                        деткам <br>в онкоцентр<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070775974'>
                    <div class='tn-atom'>У вас есть шанс не только купить ароматное
                        кокосовое мыло-гель для душа для себя, но и подарить такое же детям, которые лечатся в
                        онкоцентрах вашего города и области!<br></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566070884890'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/leaf1.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566072779397'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/rose block.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566073440340'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/onkokids.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566073502758'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='/image/maldive Soap.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566073525477'>
                    <a class='tn-atom buy' data-name="Кокосовое мыло" data-id="<?php echo $products['id'] ?>"
                       data-count="1">Заказать</a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566073609702'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/maldive Soap.png'>
                    </div>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec125897078" class="r t-rec"><a name="garant"></a>
    </div>
    <div id="rec122220841" class="r t-rec t-rec_pt_0">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard">
                <div class="t396__carrier"></div>
                <div class="t396__filter"></div>
                <div class='t396__elem tn-elem' data-elem-id='1565897663839'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/tree.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565897705852'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/tree.png'></div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1565900817189'>
                    <a class='tn-atom buy' data-name="Кокосовое мыло" data-id="<?php echo $products['id'] ?>"
                       data-count="1">Купить</a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566979742793'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/rose block big.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566979781669'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/Soap.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566979945827'>
                    <div class='tn-atom'>
                        Вернем деньги в течение 30 дней
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566979991561'>
                    <div class='tn-atom'>
                        если мыло Maldives Dream вам не понравится или не подойдет
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566981742987'>
                    <div class='tn-atom'>
                        Вам понравится! <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
</div>
<?php Modal::begin([
    'id' => 'cart',
    'size' => 'model-lg',
    'options' => [
        'tabindex' => false
    ]]); ?>
<div class="modal-body2">
    <h3>
        <p>Корзина пуста</p>
    </h3>
</div>
<div class="t706__cartwin-bottom">
    <div class="t706__cartwin-prodamount-wrap t-descr t-descr_sm">
        <?php $form = ActiveForm::begin(['id' => '1contact-form', 'options' => ['name' => 'calculator1']]); ?>
        <?= $form->field($client, 'name') ?>
        <p class="error-name"></p>
        <?= $form->field($client, 'phone') ?>
        <p class="error-phone"></p>
        <?= $form->field($client, 'email') ?>
        <p class="error-email"></p>
        <?= $form->field($order, 'area')->widget(Select2::classname(), [
            'data' => ArrayHelper::map($areas, 'ref', 'description_ru'),
            'options' => ['placeholder' => 'Выберите область ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>
        <?= $form->field($order, 'city')->widget(Select2::classname(), [
            'data' => [],
            'options' => ['placeholder' => 'Выберите  город ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>
        <?= $form->field($order, 'warehouse')->widget(Select2::classname(), [
            'data' => [],
            'options' => ['placeholder' => 'Выберите  отделение Новой почты ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>
        <?php ActiveForm::end() ?>

        <div class="t706__form-bottom-text t-text t-text_xs">Нажимая кнопку отправить, я соглашаюсь с
            <a href="/site/official" style="">политикой конфиденциальности.</a>
        </div>
        <div class="t-input-group t-input-group_pm" style="margin: 40px 0;">
            <div class="t-input-title t-descr t-descr_md" style="">Способ оплаты</div>
            <div class="t-input-block">
                <div class="t-radio__wrapper t-radio__wrapper-payment">
                    <label class="t-radio__control t-text t-text_xs">
                        <input type="radio" name="paymentsystem" value="cash"
                               class="t-radio t-radio_payment" data-payment-variant-system="cash" checked>
                        <div class="t-radio__indicator">

                        </div>
                        Наличными при получении (+комиссия Новой Почты 20грн.+2% от суммы покупки)
                    </label>
                    <label class="t-radio__control t-text t-text_xs" style="">
                        <input type="radio" name="paymentsystem" value="liqpay" class="t-radio t-radio_payment"
                               data-payment-variant-system="liqpay">
                        <div class="t-radio__indicator">

                        </div>
                        Картой Visa, Mastercard, Privat24 через LiqPay без комиссии </label>
                </div>
            </div>
        </div>
        <div class="error-send"></div>
        <a href="/site/view" class="btn btn-success sendOrder">Оформить заказ</a>
        <button type="button" class="btn btn-danger clearCart">Очистить корзину</button>
    </div>
</div>
<?php Modal::end();
?>
<?php
Modal::begin([
    'header' => '<div class="t702__text-wrapper t-align_center">
                <div class="t702__title t-title t-title_xxs" style="">
                    Введите номер телефона, мы перезвоним как можно скорее.
                </div>
            </div>',
    'options' => ['id' => 'callback-modal'],
    'footer' => '',
]);
?>
<div class="t702__wrapper">
    <?php $call = ActiveForm::begin(['id' => 'callback-form']); ?>
    <?= $call->field($callback, 'name') ?>
    <?= $call->field($callback, 'phone') ?>
    <?php ActiveForm::end(); ?>
    <div class="t702__form-bottom-text t-text t-text_xs t-align_center">Нажимая кнопку "отправить", я соглашаюсь
        с
        <a href="/site/official">политикой конфиденциальности.</a>
    </div>

</div>
<div class="button-callback">
    <a href="/site/callback" class="btn btn-success sendCallbackForm">Отправить</a>
</div>
<?php Modal::end(); ?>
<?php Modal::begin([
    'header' => '',
    'options' => ['id' => 'answer-callback-modal'],
    'footer' => '',
]);
?>
<div class="modal-bodycallback">
</div>
<div class="t702__form-bottom-text t-text t-text_xs t-align_center">Нажимая кнопку "отправить", я соглашаюсь с
    <a href="http://sale.maldivesdreams.com.ua/official">политикой конфиденциальности.</a>
</div>
<?php Modal::end(); ?>
