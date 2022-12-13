ymaps.ready(init);
// var adress_needed = [55.74891146638803,37.54294049999999];

function init() {



    $('.map')
    	.css({'width':'100%','height':'400px',"margin-bottom":"50px"})
    	.each(function(i,e){

	    ymaps.geocode( $(e).data('addr') , {
	        results: 1
	    }).then(function (res) {
	        var firstGeoObject = res.geoObjects.get(0),
	            coords = firstGeoObject.geometry.getCoordinates(),
	            bounds = firstGeoObject.properties.get('boundedBy');

		    var myMap = new ymaps.Map('map_'+i, {
		        center:coords,
		        zoom: 15,
		        controls: []
		    });

	        myMap.controls.add('zoomControl', { left: 5, top: 5 });

	        myMap.setBounds(bounds, {
	            checkZoomRange: true
	        });

	        var myPlacemark = new ymaps.Placemark(coords, {
	            balloonContent: $(e).data('addr') ,
	            // hintContent: ''
	        }, {
	            iconLayout: 'default#image',
	            iconImageHref: '/favicon.png',
	            iconImageSize: [40, 40],
	            iconImageOffset: [-20, -40]
	        });           

	        

	        myMap.geoObjects.add(myPlacemark);

	        //myPlacemark.balloon.open();
	    });

    });



}