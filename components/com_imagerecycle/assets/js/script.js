/** 
 * ImageRecycle
 * 
 * We developed this code with our hearts and passion.
 * We hope you found it useful, easy to understand and to customize.
 * Otherwise, please feel free to contact us at contact@imagerecycle.com *
 * @package ImageRecycle
 * @copyright Copyright (C) 2014 ImageRecycle (http://www.imagerecycle.com). All rights reserved.
 * @license GNU General Public License version 2 or later; http://www.gnu.org/licenses/gpl-2.0.html
 */

/* Image Recycle */
jQuery.noConflict();
jQuery(document).ready(function($) {

initButtons = function() {
       
        //Optimize image via ajax
        $('.optimize.ir-action').unbind('click').bind('click', function(e) {

            e.preventDefault();
            var $this = $(e.target);
            var image = $this.data('image-realpath');
            if (!image || $this.hasClass('disabled')) {
                return false;
            }

            $.ajax({
                url: optimize_url,
                data: {image: image, form_key: window.FORM_KEY},
                type: 'post',
                dataType: 'json',
                beforeSend: function() {
                    $this.addClass('disabled');
                    var $status = $this.closest('tr').find('.ir-status');
                    $status.html($("#ir-loader").html());
                },
                success: function(response) {

                    var $status = $this.closest('tr').find('.ir-status');
                    if (response.status === true) {
                        $status.addClass('msg-success');
                        $status.empty().text(response.datas.msg);
                        if (response.datas.newSize) {
                            $this.closest('tr').find('.filesize').empty().text(response.datas.newSize);
                        }
                        $this.removeClass('disabled optimize').addClass('revert').text('Revert to original');
                        initButtons();
                    }
                    else {
                        $status.addClass('msg-error');
                        $status.empty().text(response.datas.msg);
                        setTimeout(function() {
                            $this.removeClass('disabled');
                            $status.empty();
                        }, 5000);
                    }


                }
            });
        });

        $('.revert.ir-action').unbind('click').bind('click', function(e) {
            e.preventDefault();

            var $this = $(e.target);
            var image = $this.data('image-realpath');
            if (!image || $this.hasClass('disabled')) {
                return false;
            }

            $.ajax({
                url: revert_url,
                data: {image: image, form_key: window.FORM_KEY},
                //async : false,
                type: 'post',
                dataType: 'json',
                beforeSend: function() {
                    $this.addClass('disabled');
                    var $status = $this.closest('tr').find('.ir-status');
                    $status.html($("#ir-loader").html());
                },
                success: function(response) {

                    var $status = $this.closest('tr').find('.ir-status');
                    if (response.status === true) {
                        $status.addClass('msg-success');
                        $status.empty().text(response.datas.msg);
                        if (response.datas.newSize) {
                            $this.closest('tr').find('.filesize').empty().text(response.datas.newSize);
                        }
                        $this.removeClass('disabled revert').addClass('optimize').text('Optimize');
                        initButtons();
                    }
                    else {
                        $status.addClass('msg-error');
                        $status.empty().text(response.datas.msg);
                        setTimeout(function() {
                            $this.removeClass('disabled');
                            $status.empty();
                        }, 5000);
                    }

                }
            });
        })
    };
    initButtons();
    startTime = 0;
     // Do bulk action
    $('.do-bulk-action').bind('click', function(e) {
        e.preventDefault();
        if ($('.ir-bulk-action').val() == '-1') {

            var ir_bulk_action = $('.ir-bulk-action');
            var border_color = '#DDD';
            ir_bulk_action.css('border-color', '#FF3300');
            setTimeout(function() {
                ir_bulk_action.css('border-color', border_color);
            }, 300);
        }
        else if ($('.ir-bulk-action').val() !== 'optimize_all') {

            if ($('.ir-checkbox:checked').length < 1) {
                alert("No image selected");
            } else {

                $('.ir-checkbox:checked').each(function(i) {
                    $(this).parents('tr').find('.ir-action.optimize').click();
                });
            }

        } else {
            irBox = $("#ir_wait");
            if(irBox.length===0){
                $('body').append('<div id="ir_wait"><div class="ir_innerContent"><section class="progress_wraper">'+ $("#progress_init").html() +'</section></div></div>');
                irBox = $("#ir_wait");
            }
            cWidth  = Math.floor($(window).width()*0.9);
            cHeight = Math.floor($(window).height()*0.9);
            $("#ir_wait .progress_wraper").css('width',cWidth ).css('height',cHeight);
            innerContent = irBox.children(".ir_innerContent");
            innerContent.css('margin-top',(-cHeight/2)+'px').css('margin-left',(-cWidth/2)+'px');                              
            innerContent.css('height','').css('width','').css('top','').css('left','');
                                            
            $('progress').each(function() {
                var max = $(this).val();
                    $(this).val(0).animate({ value: max }, { duration: 2000});
            });

            $('#ir_wait').click(function() {
                window.location.reload();
            });
            startTime = Date.now();
            optimizeAll();
        }
    });
    
    optimizeAll = function() {
        $.ajax({
            url: optimizeall_url,
            data: {form_key: window.FORM_KEY},
            type: 'post',
            dataType: 'json',
            success: function(response) {
                if (typeof (response.status) !== 'undefined' && response.status === true) {
                    if (response.datas.continue === true) {
                        $('#ir_wait span').html('Processing ...' + response.datas.totalOptimizedImages + ' / ' + response.datas.totalImages + ' images');
                        if(typeof(response.datas.processedImages) != 'undefined') {
                            curTime =  Date.now();
                            remainFiles = response.datas.totalImages - response.datas.totalOptimizedImages;
                            remainTime = (curTime - startTime)/response.datas.processedImages * remainFiles;
                            remainTimeStr = toHHMMSS(Math.floor(remainTime / 1000));                                                     
                            $('#ir_wait .progress_wraper .timeRemain').html(remainTimeStr +' before finished');
                        }
                        var percent = (response.datas.totalOptimizedImages/response.datas.totalImages)*100;
                        var oldVal = $('#ir_wait progress').val();
                        $('#ir_wait progress').val(percent);
                        $('#ir_wait progress').val(oldVal).animate({ value: percent }, { duration: 500});
                        
                        optimizeAll();
                    } else {
                        window.location.href = window.location.href;
                    }
                }else {
                     if (typeof (response.datas) !== 'undefined') {
                        //alert(response.datas.errMsg);
                        $('#ir_wait span').html("An error occurred: " + response.datas.errMsg).css('color','#FF3300');     
                        setTimeout(function() {
                           window.location.href = window.location.href;
                        }, 3000);                       
                     }                                             
                }
            },
            error: function (xhr, txtStatus, thrownError) {
                if(thrownError!="") {
                    alert("An error occurred: " + thrownError);
                }               
            }
        })
    }
    
    toHHMMSS = function(sec_num) {     
        var hours   = Math.floor(sec_num / 3600);
        var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
        var seconds = sec_num - (hours * 3600) - (minutes * 60);        
        
        if (minutes < 10) {minutes = "0"+minutes;}
        if (seconds < 10) {seconds = "0"+seconds;}
        var time  = '';
        if(hours==0) {
             time    = minutes+'m '+seconds;
        }else {
            if (hours   < 10) {hours   = "0"+hours;}
            time    = hours+'h '+minutes+'m '+seconds+'s';
        }
        
        return time;
    }
});