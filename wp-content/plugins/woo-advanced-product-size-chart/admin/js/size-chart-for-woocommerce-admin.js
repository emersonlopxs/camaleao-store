/*
 * Custom Script file
 */

jQuery(document).ready(function ($) {
// ******************************************// 
// ** Select Box Script for Category ** 
// ******************************************// 	

    $('#chart-categories').select2(
        {
            maximumSelectionLength: 100
        });
// ******************************************// 
// ** Ajax for delete image ** 
// ******************************************//
    $("a.delete-chart-image").click(function () {
        var post_id = $(this).attr('id');
        $.ajax({
            type: 'GET',
            url: size_chart.ajaxurl,
            data: {
                'action': 'size_chart_delete_image',
                'post_id': post_id
            },
            success: function(response) {
                $('#primary-chart-image').val('');
                alert('image Delete Succefully');
                $('#field-image img').attr('src', response);
                $('#field-image img').attr('width', '');
                $('#field-image img').attr('height', '');
                $('.delete-chart-image').css('display', 'none');
            }
        });
    });
// ******************************************// 
// ** Preview Chart ** 
// ******************************************//
    $("a.preview_chart").click(function () {
        chart_id = $(this).attr('id');
        $('.size-chart-model').css('padding', '0');
        $('#wait').show();
        $('[data-remodal-id=modal]').html('');
        $.ajax({
            type: 'GET',
            url: size_chart.ajaxurl,
            data: {
                'action': 'size_chart_preview_post',
                'chart_id': chart_id
            },
            success: function(response) {
                $('#wait').hide();
                $('.size-chart-model').css('padding', '35px');
                $('[data-remodal-id=modal]').html(response);
            }
        });
    });
});