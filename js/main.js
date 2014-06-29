(function($){

$.getJSON(
    '/wp-json/posts/',
    function (data) {
        $(data).each(function(){
            console.log(this);
            $('#posts').append('<li><a href="'+this.link+'">'+this.title+'</li>');
        });
    }
);

})(jQuery);