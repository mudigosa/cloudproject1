`$('#multiplication').on('submit', function() {
	var that = $(this),
		contents = that.serialize();
	$.ajax({
		url: 'multiplication.php',
			dataType: 'json',
			type: 'post',
			data: contents,
			success: function(data) {
		if(data.success) {
			alert('the result is' + data.result);
		}
		}
		});
		return false;
});
