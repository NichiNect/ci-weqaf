  $(function(){

  	$('.konfirmModal').on('click', function(){
    	// get data from atribute in button a
    	const idInv = $(this).data('id');

    	// ajax
    	$.ajax({
    		url: 'http://localhost/phphtdocs/CI-weqaf/admin/getkonfirm',
    		data: {id: idInv},
    		method: 'post',
    		dataType: 'json',
    		success: function(data) {

    			console.log(data.id);
    			$('#idd').val(data.id);
    			// change attr action form
    			$('.modal-body form').attr('action', 'http://localhost/phphtdocs/CI-weqaf/admin/konfirm/investor_pribadi/' + data.id);
    		}

    	});

    });


    $('.konfirmM').on('click', function(){
    	// get data from atribute in button a
    	const idInv = $(this).data('id');

    	// ajax
    	$.ajax({
    		url: 'http://localhost/phphtdocs/CI-weqaf/admin/getkonfirm2',
    		data: {id: idInv},
    		method: 'post',
    		dataType: 'json',
    		success: function(data) {

    			console.log(data.id);
    			$('#idd').val(data.id);
    			// change attr action form
    			$('.modal-body form').attr('action', 'http://localhost/phphtdocs/CI-weqaf/admin/konfirm/investor_lembaga/' + data.id);
    		}

    	});
    });

  });