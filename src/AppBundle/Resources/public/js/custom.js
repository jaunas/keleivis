$('body').on('hidden.bs.modal', '.modal', function () {
	$(this).removeData('bs.modal');
});

function postForm($form, callback) {
	var submitBtn = $form.find(":submit");
	submitBtn.button('loading');
	
	$.ajax({
		type	: $form.attr('method'),
		url		: $form.attr('action'),
		data	: $form.serializeArray(),
		success	: function(data) {
			if ($form.attr('refresh_path')) {
				ajaxLoadContent($form.attr('refresh_path'), $form.attr('refresh_id'));
			}
			
			submitBtn.button('reset');
			callback(data);
		}
	});
}

function ajax(button, path) {
	$(button).button('loading');

	$.ajax({
		type	: 'GET',
		url		: path,
		success	: function() {
			$(button).button('reset');
			var modal = $(button).closest(".modal");
			if (modal) {
				modal.modal('hide');
			}
		}
	});
}

function ajaxLoadContent(path, id) {
	$.ajax({
		type	: 'GET',
		url		: path,
		success	: function(data) {
			//$(document).getE
			$("#"+id).html(data);
		}
	});
}