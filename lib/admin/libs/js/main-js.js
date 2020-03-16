
jQuery(document).ready(function($) {
    'use strict';

    // ============================================================== 
    // Notification list
    // ============================================================== 
    if ($(".notification-list").length) {

        $('.notification-list').slimScroll({
            height: '250px'
        });

    }

    // ============================================================== 
    // Menu Slim Scroll List
    // ============================================================== 


    if ($(".menu-list").length) {
        $('.menu-list').slimScroll({

        });
    }

    // ============================================================== 
    // Sidebar scrollnavigation 
    // ============================================================== 

    if ($(".sidebar-nav-fixed a").length) {
        $('.sidebar-nav-fixed a')
            // Remove links that don't actually link to anything

            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top - 90
                        }, 1000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                };
                $('.sidebar-nav-fixed a').each(function() {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');
            });

    }

    // ============================================================== 
    // tooltip
    // ============================================================== 
    if ($('[data-toggle="tooltip"]').length) {
            
            $('[data-toggle="tooltip"]').tooltip()

        }

     // ============================================================== 
    // popover
    // ============================================================== 
       if ($('[data-toggle="popover"]').length) {
            $('[data-toggle="popover"]').popover()

    }
     // ============================================================== 
    // Chat List Slim Scroll
    // ============================================================== 
        

        if ($('.chat-list').length) {
            $('.chat-list').slimScroll({
            color: 'false',
            width: '100%'


        });
    }
    // ============================================================== 
    // dropzone script
    // ============================================================== 

 //     if ($('.dz-clickable').length) {
 //            $(".dz-clickable").dropzone({ url: "/file/post" });
 // }

}); // AND OF JQUERY


// $(function() {
//     "use strict";


    

   // var monkeyList = new List('test-list', {
    //    valueNames: ['name']

     // });
  // var monkeyList = new List('test-list-2', {
    //    valueNames: ['name']

   // });

// ============================================================== 
// Custom by Thanh -- 
// ==============================================================  
//carousel  product_detail
jQuery(document).ready(function($) {
    var maxHeight = 0;$('.main_effect_content').each(function(){if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }});$('.main_effect_content').height(maxHeight);
});
// ============================================================== 
// Custom by Huy -- script add handle click table - Multi Item Selection
// ==============================================================  
jQuery(document).ready(function($) {
    $('.multiselects tr').click(function() {
        console.log($(this));
        checkInput=$(this).find("input[type='checkbox']");
        if($(checkInput). is(":checked")){
            $(checkInput).attr('checked', false)
        }
        else if($(checkInput). is(":not(:checked)")){
            $(checkInput).attr('checked', true)
        }

    });

});  
/**
 * Handle exception comp and cate in product page, users not selected
 */
$("#validationform").submit(function(event){
// var valDDL = $(this).val();  
    //event.preventDefault();
        var comp = $("#input-select-comp").val();
        var cate = $("#input-select-cate").val();
        if(comp==0 ||cate==0)
        {
            event.preventDefault();
            if(comp==0) $("#erroCate").show();
            if(comp==0) $("#erroComp").show();
            $('body,html').animate({
                scrollTop: 0
            }, 800);
        } 

});

// //Declare parameter
// var officeId= getUrlParameter('category');
// var jobId= getUrlParameter('company');
// // var extypeId= getUrlParameter('extype');

// var startFilter= getUrlParameter('startFilter');
// var endFilter= getUrlParameter('endFilter');

//End declare

// Datetime picker -calendar
    // /**
    //  * Author @Huy
    //  * Set type of time
    //  */
    // $('.input-group.date').datepicker({format: "yyyy-mm-dd"});
    
    
    // /**
    //  * Author @Huy
    //  * Setting calendar in t_office_addexpense
    //  * Just display month and year YYYYMM, with type of YYYYMM is int 
    //  */
    // $("#targetYM input").datepicker( {
    //     format: "yyyymm",
    //     startView: "months", 
    //     minViewMode: "months"
    // });
    
    // /**
    //  * Author @Huy
    //  * Set datetime picker in t_office_expense
    //  * Set default value which is the current date
    //  * Get fist day of month and end of day of month
    //  */
    // $('#filterTime .input-daterange').datepicker({
    //     format: "yyyy-mm-dd",
    //     minViewMode: 1,
    //     clearBtn: true,
    //     todayHighlight: true,
    //     toggleActive: true
    // });

    // $(function () {
    //     $('#datetimepicker7').datetimepicker();
    //     $('#datetimepicker8').datetimepicker({
    //         useCurrent: false
    //     });
    //     $("#datetimepicker7").on("change.datetimepicker", function (e) {
    //         $('#datetimepicker8').datetimepicker('minDate', e.date);
    //     });
    //     $("#datetimepicker8").on("change.datetimepicker", function (e) {
    //         $('#datetimepicker7').datetimepicker('maxDate', e.date);
    //     });
    // });

    // /**
    //  * Author @Huy
    //  * Calculator the end day of month and set 
    //  * Set current day if not filter before
    //  * Declare parameter in header Page
    //  */
    // var d = new Date;
    // y = d.getFullYear();
    // m = d.getMonth();
        
    // if(startFilter == null) $("#startFilter").datepicker("setDate", new Date(y,m-2,1));
    // else $("#startFilter").datepicker("setDate", startFilter);
    
    // if(endFilter == null) $("#endFilter").datepicker("setDate", new Date(y,m+1,0));
    // else $("#endFilter").datepicker("setDate", endFilter);

    // /**
    //  * Author @Huy
    //  * Catch event when change change day select
    //  * Note: Start of month in JS is 0 that means: month[0] = "January"; month[1] = "February";
    //  * @param ev
    //  * @returns
    //  */
    // $('#startFilter').change(function (ev) {
    //     startString = $('#startFilter').val();
    //     endString = $('#endFilter').val();
        
    //     var dObject = new Date(endString);
        
    //     $('#endFilter').datepicker('update', new Date(dObject.getFullYear(),dObject.getMonth()+1,0));
        
    //     if(startString==""){
    //         $('#endFilter').datepicker('update', "");
    //     }else{
    //         if(endString==""){
    //             $('#endFilter').datepicker('update', new Date(dObject.getFullYear(),dObject.getMonth()+1,0));
    //         }
    //     }
    // });
    
    
    // $('#endFilter').change(function (ev) {
    //     dString = ($('#endFilter').val());
    //     var dObject = new Date(dString);
        
    //     if(dObject.getDate()==1){
    //         $('#endFilter').datepicker('update', new Date(dObject.getFullYear(),dObject.getMonth()+1,0));
    //     }

    // });
// // End datetime picker
// //$(document).ready(function() {
// //      function disableBack() { window.history.forward() }
// //
// //      window.onload = disableBack();
// //      window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
// //  });
// //$(document).ready(function(){
// //  $("#filterTable").click(function(){
// //    searchTitleNews();
// //  });
// //});

// function checkToAddHref (url){
//     if(startFilter != null && endFilter != null){
//       url = url + '&startFilter='+startFilter+'&endFilter='+endFilter;
//     }

//     if( officeId != null && jobId != null && extypeId !=null){
//       url = url+'&officeId='+officeId+'&jobId='+jobId+'&extypeId='+extypeId;
//     }

//     return url;
// }

// /**
//  * Author @Huy
//  * Add Selected Option
//  * Get paremeter in header page
//  */

// $("#officeId option").each(function(){ if($(this).val()==officeId)  $(this).attr("selected","selected"); });
// $("#jobId option").each(function(){ if($(this).val()==jobId)  $(this).attr("selected","selected"); });
// // $("#extypeId option").each(function(){ if($(this).val()==extypeId)  $(this).attr("selected","selected"); });

