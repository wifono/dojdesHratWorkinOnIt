String.prototype.capitalize = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
};



(function ($) {

var article = $('article'),
    selected = $('#nav').find('.active'),
    section = $('section');


$('#nav a, .gamenav a').on('click', function(){

   
event.preventDefault();
   

    var href = $(this).attr('href'),
        a = $(this)
        li = a.parent();

 if (selected.is(li) ) return;

 selected = li;

li.addClass('active')
    .siblings().removeClass('active');



section.find('article').fadeOut();


$.ajax({
    url: href,
    type: 'GET',
    datatype: 'html'
}).done(function (data) {

   
    var newArticle = $(data).find(article);
        article.html(newArticle);

        newArticle.addClass('fadeIn' + selected.data('from'));

    section.html( $(data).find('article'))
});

});
    

 // ----------------------------------------------------------------------
 var gallery = $('.gallery'),
    startingOpacity = section.find('img').css('opacity');

 section.on('mouseenter mouseleave', 'img', function( event ) {

   

    var opacity = event.type === 'mouseenter' ? 1 : startingOpacity;
    $(this).stop().fadeTo(200, opacity);
});

//---------------------------------------------------------------------------

var overlay = $('<div/>)', { id: 'overlay' });

    overlay.appendTo('body').hide();

section.on('click', 'a', function(event) { 

var href = $(this).attr('href'),
    image = $('<img>', {src: href});

    overlay.html(image)
            .show();


    overlay.show();

    event.preventDefault();

overlay.on('click', function() {
    overlay.hide();
});
});

// FORMULAR
var form = $('#playerform'),
    sub = $('#submitform'),
    pname = $('#playername');
    


form.on('submit', function(event){   
    event.preventDefault();
    event.stopImmediatePropagation();

    var that =$(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {};
    that.find('[name]').each(function(value){
        var that = $(this),
            name = that.attr('name'),
            value = that.val();

        data[name] = value;

        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(event){

                var playerList = $('.players'),
                playername = $('#playername').val();

                playerList.append(that.val());

                form.fadeOut(200, function(){
                    form.fadeIn().delay(200)});
                
                pname.val('');               
}});
  
});

});


// LOGIN BUTTON 

let loginButton = $('.loginicon'),
    loginWind = $('.login');

loginButton.on('click', function(event){
    event.preventDefault();
    loginButton.fadeOut(200).css('opacity', "0",);

    loginWind.css('opacity', '1');

    setTimeout(function(){loginWind.css('opacity', '0')}, 3000);
    setTimeout(function(){loginButton.fadeIn()}, 3000)
    
})

// LOGIN PAGE

let login = $('#loginbutton',);
    reg = $('#regbutton');
    regPage = $('.regcont')

login.on('click', function(event){
    event.preventDefault();
    loginPage.fadeIn(100);

});

reg.on('click', function(event){
    event.preventDefault();

    regPage.fadeIn(100);
});

let close = $('.closebut'),
    loginPage = $('.logincont');

close.on('click', function(){
    loginPage.fadeOut(200);
    regPage.fadeOut();
})


    

}) (jQuery)