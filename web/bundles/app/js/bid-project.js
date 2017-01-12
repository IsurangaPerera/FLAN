var objectT = {
	"project_bid" : []
};

function postProjectBid(){

	amount = $("#bidSSum").val();
	currency = $("#bid-currency-sign").html();
	deliver_in = $("#perioddel").val();
	is_sponsored = $("#chkbx_sb").is(':checked');
	is_highlighted = $("#chkbx_hb").is(':checked');
	project_id = $("#pppid").html();

	objectT.project_bid.push({
		"amount"		 : amount,
		"currency"       : currency,
		"deliver_in"     : deliver_in,
		"project_id"  	 : project_id,
		"is_sponsored"   : is_sponsored,
		"is_highlighted" : is_highlighted
	});

	$.ajax({
		type: "POST",
		url: "../post",
		data: JSON.stringify(objectT),
		success: function( data, textStatus, jQxhr ){
			window.location.href = "../../dashboard";
			//$("#inline-bids").slideUp("slow");
			//$("#adfeat").slideUp("slow");
			//$("#sucmsg").slideDown('slow');
		},
		error: function( jqXhr, textStatus, errorThrown ){
			console.log(jqXhr.status);
			console.log(jqXhr.data);
			console.log(textStatus);
			console.log(errorThrown);

			var objectT = {
				"project_bid" : []
			};
		}
	});
}