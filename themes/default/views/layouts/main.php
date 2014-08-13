<?php
   include('header.php');
?>
    <ul class="breadcrumb">
        <li><a href="#">Главная</a> <span class="divider">/</span></li>
        <li><a href="#">Электроинструмент</a> <span class="divider">/</span></li>
        <li><a href="#">Шуруповерты</a><span class="divider">/</span></li>
        <li><a href="#">Дрель-шуруповерт Ижмаш ПШИ-980</a></li>
    </ul>
    <div class="row">
        <h4 class="product-name-h">Дрель-шуруповерт Ижмаш ПШИ-980</h4>
        <div class="pull-left">
            <div class="product-one">
                <img src="/web/images/img-product.png">
            </div>
            <a href="#" class="product-buy" title="">Купить</a>
        </div>
        <div class="tabbable pull-left"> <!-- Only required for left/right tabs -->
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab1" data-toggle="tab">Основное</a>
                </li>
                <li>
                    <a href="#tab2" data-toggle="tab">Характеристики</a>
                </li>
                <li>
                    <a href="#tab3" data-toggle="tab">Отзывы</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <ul class="tab-content-ul">
                        <li class="availability-yes">В наличии</li>
                        <li>Цена</li>
                    </ul>
                </div>
                <div class="tab-pane" id="tab2">
                    <p>Привет, я 2-я секция.</p>
                </div>
                <div class="tab-pane" id="tab3">
                    <p>Ну а я - отзывы.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row views">
        <h5>Вы просматривали</h5>
        <div class="my-views"></div>
        <div class="my-views"></div>
        <div class="my-views"></div>
        <div class="my-views"></div>
        <div class="my-views"></div>
        <div class="my-views"></div>
        <div class="my-views"></div>
        <div class="my-views"></div>
        <div class="my-views"></div>
        <div class="my-views"></div>
    </div>

<?php
    include('footer.php');
?>