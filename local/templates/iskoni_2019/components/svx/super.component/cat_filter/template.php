<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="project-sidebar">
    <div class="filter">
        <form class="form" method="GET" action="/catalog/">
            <div class="filter-box">
                <!--<div class="filter-title h6">Технология</div>

                <ul class="filter-list">
                    <li>
                        <a href="<?=$APPLICATION->GetCurPageParam("", array("t") );?>" class="filter-link <?=empty($arResult['GET']['t']) ? 'active' : '' ?>">
                            Все
                        </a>
                    </li>
	                <?
					$rsTech = CIBlockPropertyEnum::GetList(Array("ID"=>"ASC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>1, "CODE"=>"TECH"));
					while ($arTech = $rsTech->GetNext()):
                        $active = in_array($arTech['ID'], $arResult['GET']['t']) ? 'active' : '';
                        
                        $url = $arResult['GET'];
                        if($active != ''){
                            unset($url['t'][ $arTech['ID'] ]);
                        }
                        else{
                            $url['t'][ $arTech['ID'] ] = $arTech['ID'];
                        }
                        ?>
                    <li data-tech="<?=$arTech['ID']?>">
                        <a href="/catalog/?<?=urldecode(http_build_query($url) )?>" class="filter-link <?=$active?>">
                            <?=$arTech['VALUE']?>
                        </a>
                    </li>
					<? endwhile ?>
                </ul>-->
            </div>
            <div class="filter-box">
                <div class="filter-title h6">Цена млн.руб.</div>

                <div class="filter-slider">
                    <div class="filter-slider-display">
                        <div class="d-flex align-items-center justify-content-between">
                            
                            <div class="filter-slider-item">
                                <label class="filter_amount-1">
                                    <span></span>
                                    <input type="text" name="pf" class="form-control filter-slider-input filter-slider-input-from" value="<?=floatval($arResult['GET']['pf'])?>">
                                </label>
                            </div>     

                            <span class="mx-1">
                                - 
                            </span>

                            <div class="filter-slider-item">
                                <label class="filter_amount-2">
                                    <span></span>
                                    <input type="text" name="pt" class="form-control filter-slider-input filter-slider-input-to" value="<?=floatval($arResult['GET']['pt'])?>">
                                </label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="filter-slider-element" data-step="0.01" data-min="<?=$arResult['priceMin']?>" data-max="<?=$arResult['priceMax']?>" data-min-def="<?=!empty($arResult['GET']['pf']) ? $arResult['GET']['pf'] : $arResult['priceMin']?>" data-max-def="<?=!empty($arResult['GET']['pt']) ? $arResult['GET']['pt'] : $arResult['priceMax']?>"></div>
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
                                    <input type="text" name="sf" class="form-control filter-slider-input filter-slider-input-from" value="<?=$arResult['GET']['sf']?>">
                                </label>
                            </div>     

                            <span class="mx-1">
                                - 
                            </span>

                            <div class="filter-slider-item">
                                <label class="filter_amount-2">
                                    <span></span>
                                    <input type="text" name="st" class="form-control filter-slider-input filter-slider-input-to" value="<?=$arResult['GET']['st']?>">
                                </label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="filter-slider-element" data-min="<?=$arResult['squareMin']?>" data-max="<?=$arResult['squareMax']?>" data-min-def="<?=!empty($arResult['GET']['sf']) ? $arResult['GET']['sf'] : $arResult['squareMin']?>" data-max-def="<?=!empty($arResult['GET']['st']) ? $arResult['GET']['st'] : $arResult['squareMax']?>"></div>
                </div>
            </div>

            <div class="filter-box">
                <div class="filter-title h6">
                    Этажность
                </div>

                <ul class="filter-list list-inline">
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="f1" name="f" class="custom-control-input" value="" <?=empty($arResult['GET']['f']) ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="f1">Не важно</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="f2" name="f" class="custom-control-input" value="1" <?=!empty($arResult['GET']['f']) && $arResult['GET']['f'] == 1 ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="f2">1</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="f3" name="f" class="custom-control-input" value="2" <?=!empty($arResult['GET']['f']) && $arResult['GET']['f'] == 2 ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="f3">2</label>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="filter-box">
                <div class="filter-title h6">
                    Количество спален
                </div>

                <ul class="filter-list d-flex flex-wrap">
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="c1" name="br" class="custom-control-input" value="" <?=empty($arResult['GET']['br']) ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="c1">Любое</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="c2" name="br" class="custom-control-input" value="1" <?=!empty($arResult['GET']['br']) && $arResult['GET']['br'] == 1 ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="c2">от 1 до 3</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="c3" name="br" class="custom-control-input" value="3" <?=!empty($arResult['GET']['br']) && $arResult['GET']['br'] == 3 ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="c3">от 3 до 5</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="c4" name="br" class="custom-control-input" value="5" <?=!empty($arResult['GET']['br']) && $arResult['GET']['br'] == 5 ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="c4">от 5 до 8</label>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="filter-box">
                <div class="filter-title h6">
                    Количество санузлов
                </div>

                <ul class="filter-list d-flex flex-wrap">
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="b1" name="su" class="custom-control-input" value="" <?=empty($arResult['GET']['su']) ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="b1">Любое</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="b2" name="su" class="custom-control-input" value="1" <?=!empty($arResult['GET']['su']) && $arResult['GET']['su'] == 1 ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="b2">от 1 до 2</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="b3" name="su" class="custom-control-input" value="2" <?=!empty($arResult['GET']['su']) && $arResult['GET']['su'] == 2 ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="b3">от 2 до 4</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="b4" name="su" class="custom-control-input" value="4" <?=!empty($arResult['GET']['su']) && $arResult['GET']['su'] == 4 ? 'checked' : '' ?> >
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
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="d1" name="tr" class="custom-control-input" <?=!empty($arResult['GET']['tr']) ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="d1">Терасса</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="d2" name="s" class="custom-control-input" <?=!empty($arResult['GET']['s']) ? 'checked' : '' ?> >
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
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="g1" name="g" class="custom-control-input" value="1" <?=!empty($arResult['GET']['g']) && $arResult['GET']['g'] == 1 ? 'checked' : '' ?> >
                                    <label class="custom-control-label" for="g1">отдельностоящий</label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="g2" name="g" class="custom-control-input" value="2" <?=!empty($arResult['GET']['g']) && $arResult['GET']['g'] == 2 ? 'checked' : '' ?> >
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
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="s1" name="cp" class="custom-control-input" <?=!empty($arResult['GET']['cp']) ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="s1">Навес для авто</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="s2" name="pti" class="custom-control-input" <?=!empty($arResult['GET']['pti']) ? 'checked' : '' ?> >
                            <label class="custom-control-label" for="s2">Патио</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="s3" name="bbq" class="custom-control-input" <?=!empty($arResult['GET']['bbq']) ? 'checked' : '' ?> >
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

