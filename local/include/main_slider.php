<div class="houses section text-center">
    <div class="container">
        <div class="section-head">
            <h2 class="section-title text-center"><a href="/catalog/ready/" style=" color: #3E4531;">Построенные дома</a></h2>
        </div>

        <div class="houses-slider" data-inrow="6">

        	<?
            $items = array(
                array('/upload/catalog/h01.jpg','/upload/catalog/h01-small.jpg'),
                array('/upload/catalog/h02.jpg','/upload/catalog/h02-small.jpg'),
                array('/upload/catalog/h03.jpg','/upload/catalog/h03-small.jpg'),
                array('/upload/catalog/h04.jpg','/upload/catalog/h04-small.jpg'),
                array('/upload/catalog/h05.jpg','/upload/catalog/h05-small.jpg'),
                array('/upload/catalog/h06.jpg','/upload/catalog/h06-small.jpg')
            );
            foreach($items as $item):?>
            <div class="houses-item">
                <a href="<?=$item[0]?>" data-fancybox="h">
                    <img src="<?=$item[1]?>" class="lazy" data-src="<?=$item[1]?>" data-mobile-src="<?=$item[1]?>" alt="">
                </a>
            </div>
            <?endforeach?>

        </div>
    </div>
</div>