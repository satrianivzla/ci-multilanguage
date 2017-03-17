		$(function(){
			$('#lang').change(function(){
				
				var lang = $(this).val();
				
				$.ajax({
					url: 'Welcome/setLanguage',
					type: 'POST',
					data: {lang:lang},
					success: function (response) {
						// alert(response);
						location.reload();
					}
				});
			});
		});