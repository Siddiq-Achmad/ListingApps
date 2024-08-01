var bar = document.getElementById('js-progressbar');
    var loadingStatus = document.getElementById('loadingA');
    var loading = setInterval(function () {
        bar.value += 10;
        // console.log(bar.value);
        //loadingStatus.innerHTML = bar.value + '%' ;
        if (bar.value >= bar.max) {
            clearInterval(loading);
        }
    }, 10);




    function unLoader(e) {
        bar.value=0;
        
        $("#app").hide();
    
        $("#spinner").show();
        }
    
        $(window).on('load', function() {
        setTimeout(function(){
            $("#spinner").hide();
            $("#app").show();
                window.onbeforeunload = unLoader;
            },100); 
        });
    
    
        $(function(){
        //Scroll event
        $(window).scroll(function(){
            var scrolled = $(window).scrollTop();
            if (scrolled > 200) $('.backtotop').fadeIn('slow');
            if (scrolled < 200) $('.backtotop').fadeOut('slow');
        });
        
        //Click event
        $('.backtotop').click(function () {
            $("html, body").animate({ scrollTop: "0" },  500);
        });
        });
    
      