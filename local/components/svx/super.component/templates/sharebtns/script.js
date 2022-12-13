
var share = {

    title: encodeURIComponent(document.title),
    url: encodeURIComponent(document.location.href),
    descr: ( document.querySelector("meta[name='description']") !== null ? encodeURIComponent(document.querySelector("meta[name='description']").getAttribute("content") ) : '' ),
    photo: '',


    popup: function(url) {
    	window.open(url, 'sharer','toolbar=0,status=0,width=800,height=500');
        return false;
    },
    vk: function(){
    	this.popup('https://vk.com/share.php?url='+this.url+'&text='+this.descr);
    },
    fb: function(){
        url = 
            'https://www.facebook.com/sharer.php?s=100' +
            '&p[title]=' + this.title + 
            '&p[summary]=' + this.descr + 
            '&p[url]=' + this.url + 
            '&p[images][0]=' + this.photo;

        this.popup(url);
    },
    od: function(){
    	url = 
    		'https://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1' + 
    		'&st.comments=' + this.title + 
    		'&st.surl=' + this.url;

    		this.popup(url);
    },
    tw: function(){
        url = 
            'https://twitter.com/share?' + 
            '&text=' + this.title + 
            '&url=' + this.url;
            // '&via=' + 123 + 
            // '&hashtags=' + 'Comma, separated. hashtags' + 

            this.popup(url);
    },
    tg: function(){
    	url = 
    		'https://telegram.me/share/url?' + 
    		'&text=' + this.title + ' ' + this.descr +
    		'&url=' + this.url;

    		this.popup(url);
    }
}
