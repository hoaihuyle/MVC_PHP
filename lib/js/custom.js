/**
 * Authur @Huy
 * Function add multi input
 */
$(document).ready(function() {
    $('#input-select').on('change', function() {
        $value = this.value ;
        if($value === 'add_new'){
            $('#add_input_New').show();
            $('#close_select_input').addClass('disabled');
        }else{
            $('#add_input_New').hide();
            $('#close_select_input').removeClass('disabled');
        }
    });

    //Add click work full/part/one
    $('#btn_Action').click(function(){
        var item = $(this).parent().find('.input_containt_key')
        var quatati = item.length;

        // input = $('.Work_ip').children().html();
        // type = $('.cate_per select').html();
        // name =  $(this).parent().attr('id');
        // string = "Tên công việc không được để trống";
        // str = "";
        inputAppend = '<div class="form-group row input_containt_key">';
        inputAppend += '<label class="col-12 col-sm-3 col-form-label text-sm-right ">Nhập Nội dung cho từ khóa</label>';
        inputAppend += '<div class="col-10 col-sm-8 col-lg-6">';
        inputAppend += '    <input name="name_menu" type="text" required="" placeholder="Từ khóa" class="form-control text-primary"></div>';
        inputAppend += '<div class="col-1 del_work">';
        inputAppend += '    <a><img src="/lib/imageBoth/close.svg" alt=""></a> </div></div>';

        $(this).parent().find('#group_Append').append(inputAppend);  
    });
    
    //del click work full/part/one
    $('.input_containt_key').click(function() {
        console.log(this);
        console.log($($(this).parent()).html);
        var input_containt_key = $(this).parents();
        var group_Append =  $(input_containt_key).parents();
        var quatati = $(group_Append).length;

        if(quatati <= 3 && quatati >1)
        {
            $(input_containt_key).remove();
        }
        if(quatati == 1){
            alert('Mặc định công việc không được dưới 1');
        }
    });

    $('#group_Append').on('click', '.del_work',function() {
        var item = $(this).parents()[0];
        var quatati = $($(item).parent()[0]).find('.input_containt_key').length;
        if(quatati >1)
        {
            $(item).remove();
        }else{
            alert('Mặc định công việc không được dưới 1');
        }
    });

});

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

/**
 * Author @Huy
 * Handle filter image
 * Framework: temtempusdominus-bootstrap-4
 */
$(document).ready(function() {
    /**
     * Function initialization date
     */
    var d=new Date();
    var nextmonth=d.getMonth()+1;
    var firstDay = new Date(d.getFullYear(), d.getMonth(), 1);
    var lastday=new Date(d.getFullYear(),nextmonth,0);
    var y = d.getFullYear();
    var m = d.getMonth();

    $(function(){
        $('#startFilter').datetimepicker({
            defaultDate:firstDay,
            format:'DD-MM-YYYY'
        });
        $('#endFilter').datetimepicker({
            defaultDate: lastday,
            format:'DD-MM-YYYY'
        });
    });
    
	/**
	 * Author @Huy
	 * Calculator the end day of month and set 
	 * Set current day if not filter before
	 * Declare parameter in header Page
	 */
	if(startFilter == null) $("#startFilter").datepicker("setDate", new Date(y,m-2,1));
	else $("#startFilter").datepicker("setDate", startFilter);
	
	if(endFilter == null) $("#endFilter").datepicker("setDate", new Date(y,m+1,0));
	else $("#endFilter").datepicker("setDate", endFilter);

	/**
	 * Author @Huy
	 * Catch event when change change day select
	 * Note: Start of month in JS is 0 that means: month[0] = "January"; month[1] = "February";
	 * @param ev
	 * @returns
	 */
	$('#startFilter').change(function (ev) {
    	startString = $('#startFilter').val();
		endString = $('#endFilter').val();
		
    	var dObject = new Date(endString);
    	
    	$('#endFilter').datepicker('update', new Date(dObject.getFullYear(),dObject.getMonth()+1,0));
    	
    	if(startString==""){
    		$('#endFilter').datepicker('update', "");
    	}else{
    		if(endString==""){
    			$('#endFilter').datepicker('update', new Date(dObject.getFullYear(),dObject.getMonth()+1,0));
    		}
    	}
    });
	
	
	$('#endFilter').change(function (ev) {
    	dString = ($('#endFilter').val());
    	var dObject = new Date(dString);
    	
    	if(dObject.getDate()==1){
    		$('#endFilter').datepicker('update', new Date(dObject.getFullYear(),dObject.getMonth()+1,0));
    	}

    });
});