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
            <div class="t396__artboard" data-artboard-recid="122136901">
                <div class="t396__carrier" data-artboard-recid="122136901">

                </div>
                <div class="t396__filter" data-artboard-recid="122136901">

                </div>
                <?php if (!empty($session['cart'])): ?>
                <div class="t706__carticon t706__carticon_showed">
                    <div class="t706__carticon-text t-name t-name_xs">&nbsp;<?php echo $session['cart.sum']?>&nbsp;грн.</div>
                    <div class="t706__carticon-wrapper">
                        <div class="t706__carticon-imgwrap" style="border: 1px solid #bd7592;background-color:#ffffff;">
                            <img src="/image/cart.png"/>
                        </div>
                        <div class="t706__carticon-counter" style="background-color:#e3226f;"><?php echo $session['cart.count']?></div>
                    </div>
                </div>
                <?php else: ?>
                <div class="t706__carticon t706__carticon_showed">
                    <div class="t706__carticon-text t-name t-name_xs">Ваша корзина пуста</div>
                    <div class="t706__carticon-wrapper">
                        <div class="t706__carticon-imgwrap" style="border: 1px solid #bd7592;background-color:#ffffff;">
                            <img src="/image/cart.png"/>
                        </div>
                        <div class="t706__carticon-counter" style="background-color:#e3226f;">0</div>
                    </div>
                </div>
                <?php endif;?>
                <div class='t396__elem tn-elem tn-elem__1221369011470209944682' data-elem-id='1470209944682'>
                    <div class='tn-atom' field='tn_text_1470209944682'>
                        Натуральное кокосовое мыло без парабенов и токсинов <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221369011565873406304' data-elem-id='1565873406304'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img'
                             src='/image/milk.png'
                             imgfield='tn_img_1565873406304'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221369011565873449857' data-elem-id='1565873449857'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img'
                             src='/image/Soap.png'
                             imgfield='tn_img_1565873449857'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221369011565873481067' data-elem-id='1565873481067'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/paraben free.png' imgfield='tn_img_1565873481067'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221369011565881737738' data-elem-id='1565881737738'>
                    <div class='tn-atom' field='tn_text_1565881737738'>
                        Нежно очищает, насыщает кожу влагой и снимает воспаления. Безопасно для детей и взрослых!<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221369011566978692711' data-elem-id='1566978692711'>
                    <a class='tn-atom buy' id="for-nav" data-id="<?php echo $product[0]['id'] ?>"
                       data-count="1">Купить</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221369011567550639151' data-elem-id='1567550639151'>
                    <div class='tn-atom' field='tn_text_1567550639151'>
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
            <div class="t396__artboard" data-artboard-recid="122177362">
                <div class="t396__carrier" data-artboard-recid="122177362"></div>
                <div class="t396__filter" data-artboard-recid="122177362"></div>
                <div class='t396__elem tn-elem tn-elem__1221773621565873481067' data-elem-id='1565873481067'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/block safe.png' imgfield='tn_img_1565873481067'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565881671297' data-elem-id='1565881671297'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/block allergy.png' imgfield='tn_img_1565881671297'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565881677553' data-elem-id='1565881677553'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/block profit.png' imgfield='tn_img_1565881677553'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565881908092' data-elem-id='1565881908092'>
                    <div class='tn-atom' field='tn_text_1565881908092'>
                        Безопасно<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565881942504' data-elem-id='1565881942504'>
                    <div class='tn-atom' field='tn_text_1565881942504'>
                        Гипоаллергенно<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565881984085' data-elem-id='1565881984085'>
                    <div class='tn-atom' field='tn_text_1565881984085'>
                        Выгодно<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565882009094' data-elem-id='1565882009094'>
                    <div class='tn-atom' field='tn_text_1565882009094'>Без консервантов и токсичных ингредиентов<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565882067078' data-elem-id='1565882067078'>
                    <div class='tn-atom' field='tn_text_1565882067078'>
                        100%<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565882097747' data-elem-id='1565882097747'>
                    <div class='tn-atom' field='tn_text_1565882097747'>
                        Бережное очищение для любого типа кожи<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565882111460' data-elem-id='1565882111460'>
                    <div class='tn-atom' field='tn_text_1565882111460'>
                        Результат<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565882135201' data-elem-id='1565882135201'>
                    <div class='tn-atom' field='tn_text_1565882135201'>150 грн<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221773621565882155842' data-elem-id='1565882155842'>
                    <div class='tn-atom' field='tn_text_1565882155842'>
                        Большой объем - <br>460 мл и выгодная цена <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec124872283" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard" data-artboard-recid="124872283">
                <div class="t396__carrier" data-artboard-recid="124872283"></div>
                <div class="t396__filter" data-artboard-recid="124872283"></div>
                <div class='t396__elem tn-elem tn-elem__1248722831566070775974' data-elem-id='1566070775974'>
                    <div class='tn-atom' field='tn_text_1566070775974'>В состав большинства косметических средств входят
                        парабены, которые воздействуют на организм человека подобно гормонам, вызывая нарушения в работе
                        эндокринной системы. <br><br> Исследования Филиппы Дарбре ещё в 2004 году доказали, что в 95%
                        образцов раковой опухоли присутствовали парабены. <br> К сожалению, в странах СНГ количество
                        этих веществ в косметических средствах никак не контролируется и не нормируется. <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1248722831567082766942' data-elem-id='1567082766942'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img'
                             src='/image/chemistry.png'
                             imgfield='tn_img_1567082766942'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1248722831567083259259' data-elem-id='1567083259259'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img'
                             src='/image/carefull.png'
                             imgfield='tn_img_1567083259259'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1248722831567083402384' data-elem-id='1567083402384'>
                    <div class='tn-atom' field='tn_text_1567083402384'>Только мы сами можем позаботиться о своем
                        здоровье, став осознанными потребителями. Выбирайте продукцию MALDIVES DREAMS - она безопасна и
                        не содержит парабенов!<br></div>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec122837647" class="r t-rec" style=" " data-record-type="215">
        <a name="opisanie" style="font-size:0;"></a>
    </div>
    <div id="rec122181474" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard" data-artboard-recid="122181474">
                <div class="t396__carrier" data-artboard-recid="122181474"></div>
                <div class="t396__filter" data-artboard-recid="122181474"></div>
                <div class='t396__elem tn-elem tn-elem__1221814741565873481067' data-elem-id='1565873481067'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img'
                             src='/image/simple soap.png'
                             imgfield='tn_img_1565873481067'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565873512836' data-elem-id='1565873512836'>
                    <a class='tn-atom buy' data-id="<?php echo $product[0]['id'] ?>" data-count="1">Купить</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565882009094' data-elem-id='1565882009094'>
                    <div class='tn-atom' field='tn_text_1565882009094'>Содержит агрессивные для кожи и волос
                        сульфаты<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565882835718' data-elem-id='1565882835718'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565882937929' data-elem-id='1565882937929'>
                    <div class='tn-atom' field='tn_text_1565882937929'>
                        Обладает эстрогенной активностью и нарушает
                        работу эндокринной системы<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565882965322' data-elem-id='1565882965322'>
                    <div class='tn-atom' field='tn_text_1565882965322'>
                        Вызывает риск онкозаболеваний<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565883046934' data-elem-id='1565883046934'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565883050150' data-elem-id='1565883050150'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='/image/maldive Soap.png'
                                              imgfield='tn_img_1565883050150'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565883152398' data-elem-id='1565883152398'>
                    <div class='tn-atom' field='tn_text_1565883152398'>Не содержит парабенов<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565883152404' data-elem-id='1565883152404'>
                    <div class='tn-atom' field='tn_text_1565883152404'>
                        Полностью экологично и не тестируется на животных<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565883152408' data-elem-id='1565883152408'>
                    <div class='tn-atom' field='tn_text_1565883152408'>
                        Основано на натуральных природных сульфатах <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741565883292551' data-elem-id='1565883292551'>
                    <div class='tn-atom' field='tn_text_1565883292551'>
                        Изготовлено по международному стандарту ISO
                        9001<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741566245868234' data-elem-id='1566245868234'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/delete-cross.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741566245894250' data-elem-id='1566245894250'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/delete-cross.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741566245897346' data-elem-id='1566245897346'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/delete-cross.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741566245902722' data-elem-id='1566245902722'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/ok symbol.png'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741566245920812' data-elem-id='1566245920812'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/ok symbol.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741566245922715' data-elem-id='1566245922715'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/ok symbol.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1221814741566245925135' data-elem-id='1566245925135'>
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
    <div id="rec122220802" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard" data-artboard-recid="122220802">
                <div class="t396__carrier" data-artboard-recid="122220802"></div>
                <div class="t396__filter" data-artboard-recid="122220802"></div>
                <div class='t396__elem tn-elem tn-elem__1222208021565882009094' data-elem-id='1565882009094'>
                    <div class='tn-atom' field='tn_text_1565882009094'>В США, Японии и Евросоюзе установлен контроль над
                        содержанием парабенов в косметических средствах... И только в СНГ они допускаются к
                        использованию без ограничений. <br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208021565882835718' data-elem-id='1565882835718'>
                    <img class='tn-atom t-bgimg' src="/image/parabens.png">
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208021565883046934' data-elem-id='1565883046934'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208021565883050150' data-elem-id='1565883050150'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/old soap.png'
                             imgfield='tn_img_1565883050150'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208021565898319787' data-elem-id='1565898319787'>
                    <div class='tn-atom'><img class='tn-atom__img t-img'
                                              src='/image/red block.png'
                                              imgfield='tn_img_1565898319787'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208021565898482910' data-elem-id='1565898482910'>
                    <div class='tn-atom' field='tn_text_1565898482910'>Мыло Maldives Dreams произведено по технологии
                        Natural Power. Для нас крайне важно качество и экологичность нашей продукции! А потому мы
                        контролируем всю цепочку поставок от сырья до готового продукта. <br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208021565898482917' data-elem-id='1565898482917'>
                    <div class='tn-atom'><img class='tn-atom__img t-img'
                                              src='/image/new soap.png'
                                              imgfield='tn_img_1565898482917'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208021565898482925' data-elem-id='1565898482925'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img'
                             src='/image/blue block.png'
                             imgfield='tn_img_1565898482925'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208021565899944444' data-elem-id='1565899944444'>
                    <div class='tn-atom'><img class='tn-atom__img t-img'
                                              src='/image/leaf.png'
                                              imgfield='tn_img_1565899944444'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208021565900014788' data-elem-id='1565900014788'>
                    <div class='tn-atom'><img class='tn-atom__img t-img'
                                              src='/image/flamingo.png'
                                              imgfield='tn_img_1565900014788'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208021566070605117' data-elem-id='1566070605117'>
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
            <div class="t396__artboard" data-artboard-recid="122228014">
                <img class="t396__carrier t-bgimg" data-artboard-recid="122228014" src="/image/beach.png">
                <div class="t396__filter" data-artboard-recid="122228014"></div>
                <div class='t396__elem tn-elem tn-elem__1222280141565882835718' data-elem-id='1565882835718'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141565900959976' data-elem-id='1565900959976'>
                    <div class='tn-atom' field='tn_text_1565900959976'>5 преимуществ <br> Maldives Dream перед любым
                        другим мылом <br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070775970' data-elem-id='1566070775970'>
                    <div class='tn-atom' field='tn_text_1566070775970'>Гель и мыло 2 в 1<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070775974' data-elem-id='1566070775974'>
                    <div class='tn-atom' field='tn_text_1566070775974'>Купите один продукт вместо двух! Мягкая кожа рук
                        и тела скажет вам "спасибо"<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070884890' data-elem-id='1566070884890'>
                    <div class='tn-atom'><img class='tn-atom__img t-img'
                                              src='image/2=1.png'
                                              imgfield='tn_img_1566070884890'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070895832' data-elem-id='1566070895832'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070895839' data-elem-id='1566070895839'>
                    <div class='tn-atom' field='tn_text_1566070895839'>Экономное использование<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070895843' data-elem-id='1566070895843'>
                    <div class='tn-atom' field='tn_text_1566070895843'>Мыло прекрасно пенится - одной большой баночки
                        (460 гр.) вам хватит на 3-6 месяцев<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070895848' data-elem-id='1566070895848'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/hend.png' imgfield='tn_img_1566070895848'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070983899' data-elem-id='1566070983899'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070983908' data-elem-id='1566070983908'>
                    <div class='tn-atom' field='tn_text_1566070983908'>Уход за кожей<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070983912' data-elem-id='1566070983912'>
                    <div class='tn-atom' field='tn_text_1566070983912'>Содержание кокосового масла питает и увлажняет
                        кожу, делает ее нежной и мягкой<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566070983917' data-elem-id='1566070983917'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='/image/water.png'
                                              imgfield='tn_img_1566070983917'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566071120363' data-elem-id='1566071120363'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566071120371' data-elem-id='1566071120371'>
                    <div class='tn-atom' field='tn_text_1566071120371'>Фантастический запах<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566071120377' data-elem-id='1566071120377'>
                    <div class='tn-atom' field='tn_text_1566071120377'>Поход в душ станет SPA-процедурой, а после негo
                        за вами будет оставаться изысканный кокосовый аромат<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566071120381' data-elem-id='1566071120381'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/smells.png' imgfield='tn_img_1566071120381'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566071137520' data-elem-id='1566071137520'>
                    <div class='tn-atom'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566071137526' data-elem-id='1566071137526'>
                    <div class='tn-atom' field='tn_text_1566071137526'>Наполняет витаминами<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566071137531' data-elem-id='1566071137531'>
                    <div class='tn-atom' field='tn_text_1566071137531'>Молочная кислота мягко отшелушивает омертвевшие
                        клетки, а витамин Е способствует регенерации и продлевает молодость клеток <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566071137535' data-elem-id='1566071137535'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='/image/vitamins.png'
                                              imgfield='tn_img_1566071137535'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222280141566071398288' data-elem-id='1566071398288'>
                    <a class='tn-atom buy' data-id="<?php echo $product[0]['id'] ?>" data-count="1">Заказать</a>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec122571865" class="r t-rec">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard" data-artboard-recid="122571865">
                <div class="t396__carrier" data-artboard-recid="122571865"></div>
                <div class="t396__filter" data-artboard-recid="122571865"></div>
                <div class='t396__elem tn-elem tn-elem__1225718651565900959976' data-elem-id='1565900959976'>
                    <div class='tn-atom' field='tn_text_1565900959976'>
                        Maldives Dream гарантирует безопасность<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225718651566070775970' data-elem-id='1566070775970'>
                    <div class='tn-atom' field='tn_text_1566070775970'>
                        А главное - безопасно для детей!<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225718651566070775974' data-elem-id='1566070775974'>
                    <div class='tn-atom' field='tn_text_1566070775974'>Кокосовое мыло Maldives Dream - это натуральный
                        продукт, произведенный по международному стандарту ISO 9001:2015. Он не содержит токсичных
                        ингредиентов и не тестируется на животных.<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225718651566070884890' data-elem-id='1566070884890'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/rose block big.png' imgfield='tn_img_1566070884890'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225718651566072779397' data-elem-id='1566072779397'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/certificate.png' imgfield='tn_img_1566072779397'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225718651566282278296' data-elem-id='1566282278296'>
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
            <div class="t396__artboard" data-artboard-recid="122572712">
                <div class="t396__carrier" data-artboard-recid="122572712"></div>
                <div class="t396__filter" data-artboard-recid="122572712"></div>
                <div class='t396__elem tn-elem tn-elem__1225727121565900959976' data-elem-id='1565900959976'>
                    <div class='tn-atom' field='tn_text_1565900959976'>Подарок детям<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225727121566070775970' data-elem-id='1566070775970'>
                    <div class='tn-atom' field='tn_text_1566070775970'>Купите 1 баночку мыла себе. <br>Еще 1 мы отправим
                        деткам <br>в онкоцентр<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225727121566070775974' data-elem-id='1566070775974'>
                    <div class='tn-atom' field='tn_text_1566070775974'>У вас есть шанс не только купить ароматное
                        кокосовое мыло-гель для душа для себя, но и подарить такое же детям, которые лечатся в
                        онкоцентрах вашего города и области!<br></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225727121566070884890' data-elem-id='1566070884890'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/leaf1.png' imgfield='tn_img_1566070884890'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225727121566072779397' data-elem-id='1566072779397'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/rose block.png' imgfield='tn_img_1566072779397'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225727121566073440340' data-elem-id='1566073440340'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/onkokids.png' imgfield='tn_img_1566073440340'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225727121566073502758' data-elem-id='1566073502758'>
                    <div class='tn-atom'><img class='tn-atom__img t-img' src='/image/maldive Soap.png'
                                              imgfield='tn_img_1566073502758'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225727121566073525477' data-elem-id='1566073525477'>
                    <a class='tn-atom buy' data-id="<?php echo $product[0]['id'] ?>" data-count="1">Заказать</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1225727121566073609702' data-elem-id='1566073609702'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/maldive Soap.png' imgfield='tn_img_1566073609702'>
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
            <div class="t396__artboard" data-artboard-recid="122220841">
                <div class="t396__carrier" data-artboard-recid="122220841"></div>
                <div class="t396__filter" data-artboard-recid="122220841"></div>
                <div class='t396__elem tn-elem tn-elem__1222208411565897663839' data-elem-id='1565897663839'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/tree.png' imgfield='tn_img_1565897663839'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208411565897705852' data-elem-id='1565897705852'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/tree.png' imgfield='tn_img_1565897705852'></div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208411565900817189' data-elem-id='1565900817189'>
                    <a class='tn-atom buy' data-id="<?php echo $product[0]['id'] ?>" data-count="1">Купить</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208411566979742793' data-elem-id='1566979742793'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/rose block big.png' imgfield='tn_img_1566979742793'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208411566979781669' data-elem-id='1566979781669'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/Soap.png' imgfield='tn_img_1566979781669'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208411566979945827' data-elem-id='1566979945827'>
                    <div class='tn-atom' field='tn_text_1566979945827'>
                        Вернем деньги в течение 30 дней
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208411566979991561' data-elem-id='1566979991561'>
                    <div class='tn-atom' field='tn_text_1566979991561'>
                        если мыло Maldives Dream вам не понравится или не подойдет
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1222208411566981742987' data-elem-id='1566981742987'>
                    <div class='tn-atom' field='tn_text_1566981742987'>
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
                <div class="t-radio__wrapper t-radio__wrapper-payment" data-tilda-payment-variants-hook="y">
                    <label class="t-radio__control t-text t-text_xs" style="">
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
        <a href="/site/official" style="">политикой конфиденциальности.</a>
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
    <a href="http://sale.maldivesdreams.com.ua/official" style="">политикой конфиденциальности.</a>
</div>
<?php Modal::end(); ?>
