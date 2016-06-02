jQuery(document).ready(function($) {
	"use strict";
	//  Tab Panel in page option
	$('.tab-list a').on('click', function(e){
		e.preventDefault();
		var tab_id = $(this).attr('href');
		var tab_content = $(this).parents('.tab-panel').find('.tab-container ' + '#' + tab_id);

		$(this).parents('.tab-list').find('li').removeClass('active');
		$(this).parent().addClass('active');

		$(this).parents('.tab-panel').find('.tab-container .tab-content.active').hide();
		tab_content.fadeIn().addClass('active');
	});


	$('.action-remove').live('click',function(e){
		var i = $(this).data('index');
		$('.row-'+i).remove();

	});
	$('.action-add').on('click',function(e){
		var t = $('#template-service-field').html(),
		r = $('.service-table tbody tr');
		
		t = t.replace(/{{row_index}}/g, r.length);
		$('.service-table tbody').append(t);
	});

});


