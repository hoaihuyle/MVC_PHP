/**
 * Author @Huy
 * Handle Pagination
 */
$(document).ready(function() {
    var pageItem = $(".pagination a").not(".prev,.next, .first, .end");
    var prev = $(".pagination a.prev");
    var next = $(".pagination a.next");
    var total = parseInt(pageItem.length);
    var acTive = $("a.active");

    pageItem.click(function() {
        pageItem.removeClass("active");
        $(this).not(".prev,.next, .first, .end").addClass("active");
    });

    next.click(function() {
        $('a.active').removeClass('active').next().addClass('active');
        redirecURL($('a.active'));
    });

    prev.click(function() {
        $('a.active').removeClass('active').prev().addClass('active');
        redirecURL($('a.active'));
    });

    /**
     * Author @Huy
     * Redirect page when user click to another page
     */
    function redirecURL(e) {
        var url =e.attr("href");
        window.location.href = url;
    }


    /**
     * Author @Huy
     * Handle exception first page and final page
     */
    checkToDisble($.trim(acTive.text()));
    function checkToDisble(e){
        if(e==1){
            $('a.prev').addClass('disabled');
            $('a.first').addClass('disabled');
        }
        else{
            $('a.prev').removeClass('disabled')
        }
        
        
        if(e==total){
            $('a.next').addClass('disabled');
            $('a.end').addClass('disabled');
        }
        else{
            $('a.next').removeClass('disabled')
        }
    }

    /**
     * author @Huy
     * Check to add href with filter time
     */
    // function checkToAddHref (url){
    //     if(startFilter != null && endFilter != null){
    //       url = url + '&startFilter='+startFilter+'&endFilter='+endFilter;
    //     }
    
    //     if( officeId != null && jobId != null && extypeId !=null){
    //       url = url+'&officeId='+officeId+'&jobId='+jobId+'&extypeId='+extypeId;
    //     }
    
    //     return url;
    // }

});