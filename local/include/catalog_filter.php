<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
if (!CModule::IncludeModule("iblock")){
	return;
}
?>

<div class="project-sidebar">
    <div class="filter">
        <form class="form" method="GET" action="/catalog/">
            <div class="filter-box">
                <div class="filter-title h6">Технология</div>

                <ul class="filter-list">
                    <li>
                        <a href="<?=$APPLICATION->GetCurPageParam("", array("arFilter"=>array("tech")) );?>" class="filter-link active">
                            Все
                        </a>
                    </li>
	                <?
					$rsTech = CIBlockPropertyEnum::GetList(Array("ID"=>"ASC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>1, "CODE"=>"TECH"));
					while ($arTech = $rsTech->GetNext()):?>
                    <li>
                        <a href="<?=$APPLICATION->GetCurPageParam("arFilter[tech]=".$arTech['ID'], array() );?>" class="filter-link">
                            <?=$arTech['VALUE']?>
                        </a>
                    </li>
					<? endwhile ?>
                </ul>
            </div>

            <div class="filter-box">
                <div class="filter-title h6">Цена</div>

                <div class="filter-slider">
                    <div class="filter-slider-display">
                        <div class="d-flex align-items-center justify-content-between">
                            
                            <div class="filter-slider-item">
                                <label class="filter_amount-1">
                                    <span></span>
                                    <input type="text" name="slider" class="form-control filter-slider-input filter-slider-input-from" >
                                </label>
                            </div>     

                            <span class="mx-1">
                                - 
                            </span>

                            <div class="filter-slider-item">
                                <label class="filter_amount-2">
                                    <span></span>
                                    <input type="text" name="slider" class="form-control filter-slider-input filter-slider-input-to">
                                </label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="filter-slider-element" data-min="4000000" data-max="20000000" data-min-def="4000000" data-max-def="14000000"></div>
                </div>

            </div>

            <div class="filter-box">
                <div class="filter-title h6">
                    Жилая площадь
                </div>

                <div class="filter-slider">
                    <div class="filter-slider-display">
                        <div class="d-flex align-items-center justify-content-between">
                            
                            <div class="filter-slider-item">
                                <label class="filter_amount-1">
                                    <span></span>
                                    <input type="text" name="slider" class="form-control filter-slider-input filter-slider-input-from" >
                                </label>
                            </div>     

                            <span class="mx-1">
                                - 
                            </span>

                            <div class="filter-slider-item">
                                <label class="filter_amount-2">
                                    <span></span>
                                    <input type="text" name="slider" class="form-control filter-slider-input filter-slider-input-to">
                                </label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="filter-slider-element" data-min="30" data-max="1000" data-min-def="30" data-max-def="300"></div>
                </div>
            </div>

            <div class="filter-box">
                <div class="filter-title h6">
                    Этажность
                </div>

                <ul class="filter-list list-inline">
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="f1" name="f" class="custom-control-input" checked>
                            <label class="custom-control-label" for="f1">Не важно</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="f2" name="f" class="custom-control-input">
                            <label class="custom-control-label" for="f2">1</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="f3" name="f" class="custom-control-input">
                            <label class="custom-control-label" for="f3">2</label>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="filter-box">
                <div class="filter-title h6">
                    Колличество спален
                </div>

                <ul class="filter-list d-flex flex-wrap">
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="c1" name="c" class="custom-control-input" checked>
                            <label class="custom-control-label" for="c1">Любое</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="c2" name="c" class="custom-control-input">
                            <label class="custom-control-label" for="c2">от 1 до 3</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="c3" name="c" class="custom-control-input">
                            <label class="custom-control-label" for="c3">от 3 до 5</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="c4" name="c" class="custom-control-input">
                            <label class="custom-control-label" for="c4">от 5 до 8</label>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="filter-box">
                <div class="filter-title h6">
                    Колличество санузлов
                </div>

                <ul class="filter-list d-flex flex-wrap">
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="b1" name="b" class="custom-control-input" checked>
                            <label class="custom-control-label" for="b1">Любое</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="b2" name="b" class="custom-control-input">
                            <label class="custom-control-label" for="b2">от 1 до 2</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="b3" name="b" class="custom-control-input">
                            <label class="custom-control-label" for="b3">от 2 до 4</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="b4" name="b" class="custom-control-input">
                            <label class="custom-control-label" for="b4">от 4 до 6</label>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="filter-box">
                <div class="filter-title h6">
                    Дополнительно
                </div>

                <ul class="filter-list d-flex flex-wrap">
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="d1" name="d" class="custom-control-input" checked>
                            <label class="custom-control-label" for="d1">Терасса</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="d2" name="d" class="custom-control-input">
                            <label class="custom-control-label" for="d2">Сауна</label>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="filter-box">
                <div class="row">
                    <div class="col-4">
                        <div class="filter-title h6">
                            Гараж
                        </div>
                    </div>

                    <div class="col-8">
                        <ul class="filter-list list-inline">
                            <li>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="g1" name="g" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="g1">встроенный</label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="g2" name="g" class="custom-control-input">
                                    <label class="custom-control-label" for="g2">встроенный</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="filter-box filter-box_last">

                <ul class="filter-list list-inline">
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="s1" name="s" class="custom-control-input" checked>
                            <label class="custom-control-label" for="s1">Навес для авто</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="s2" name="s" class="custom-control-input">
                            <label class="custom-control-label" for="s2">Патио</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="s3" name="s" class="custom-control-input">
                            <label class="custom-control-label" for="s3">Зона для барбекю</label>
                        </div>
                    </li>
                </ul>
            </div>



            <button type="submit" class="btn btn-orange">
                Применить
            </button>

            <button type="reset" class="btn btn-success">
                Сбросить фильтр
            </button>
        </form>
    </div>
</div>

