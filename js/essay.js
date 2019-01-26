$(document).ready(function(){
	var academic = 1.5,pages = 1 * 8.50,deadline = 2,total = 0, type = 1;
	
	function calculate(){
		total = parseInt(academic * pages * deadline * type);
		$(".static_price").text("$ " + total);
		$(".active_price").text("$ " + total);
		$(".results").text("$" + total);
		$(".real_price").val(total);
	}
	
	calculate();
	
	$("#academic").change(function(){
		var that = $(this);
		academic = that.val();
		calculate();
	});
	
	$("#pages").change(function(){
		var that = $(this);
		pages = (that.val()) * 8.50;
		calculate();
	});
	
	$("#deadline").change(function(){
		var that = $(this);
		deadline = that.val();
		calculate();
	});
	
	$("#type").change(function(){
		var that = $(this);
		type = that.val();
		calculate();
	});
	
	//................fetch email................................
	$('#exampleInputEmail').on('blur',function(){
		var email = $(this).val();
		$.ajax({
			url:'process/fetch_email.php',
			method:'POST',
			data:{email:email}
		});
	});
	
	//..........................................................
	
	$('#submitPaper').on('click',function(e){
		var errorr = '';
		$('#order_form').find('textarea, input, select').each(function(){
			var that = $(this);
			that.parent().removeClass('has-error');
			
			if(that.val() == '' || that.val() == null){
				that.parent().addClass('has-error');
				errorr = 'error';
			}
		});
		
		if(errorr == 'error'){
			$('body,html').animate({
				scrollTop: 0
			},800,'linear');
			
			e.preventDefault();
		}
		
	});
});