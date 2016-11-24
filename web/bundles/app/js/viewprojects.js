var data1 = '<tr class="odd ProjectTable-row project-details" id="';
var data2 = 

'"bid_placed_check="1" id="12168661" style="cursor: pointer;">'+
    '<td class=" ProjectTable-cell ProjectTable-summaryColumn title-col"><ul class="promotion-flags promotions promotion-flags--small inverted"></ul>'+
'<h2 class="ProjectTable-title">'+
    '<span class="ProjectTable-titleIcon is-ProjectTable-titleIcon-project">'+

        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.4 19.7" class="flicon-desktop">'+
          '<g fill="none">'+
            '<title>Desktop icon</title>'+
            '<path d="M21.8 15.7c0 .8-.6 1.5-1.4 1.5H2c-.8 0-1.4-.7-1.4-1.5V2.1C.6 1.3 1.2.6 2 .6h18.4c.8 0 1.4.7 1.4 1.5v13.6zM4.8 19h12.8M11.2 17.2V19"></path>'+
            '<circle cx="11.2" cy="15.3" r=".5"></circle>'+
            '<path d="M.6 13.5h21.2"></path>'+
        '</g></svg></span>'+
'<a href="'
//https://www.freelancer.com/projects/Graphic-Design/Design-project-12168661

var data3 = '/">';
var data4 = '</a></h2><p class="ProjectTable-description">';
var data5 = '</p>';
var data6 = '<span class="ProjectTable-skills">';
var data7 = '</span>';
var data8 = '</td><td class=" ProjectTable-cell ProjectTable-bidsColumn bids-col"><div class="bids-col-inner" data-bids="13">';
var data9 = '</div></td><td class=" ProjectTable-cell ProjectTable-startedColumn started-col sorting_1">';
var data10 = '</td><td class=" ProjectTable-cell ProjectTable-endColumn end-col" style="display: none;">';
var data11 = '</td><td class=" ProjectTable-cell ProjectTable-priceColumn price-col"><span class="average-bid">';
var data12 = '</span><div class="ProjectTable-status"><span class="status-label is-large is-success" data-toggle="popover" data-placement="left" data-content="Employer has a verified payment method" data-original-title="">';
var data13 = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" class="flicon-tick">'+
    '<g><polyline fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="23.5,0.57,23.5 0.5,17"></polyline></g></svg>'+
	'</span></div><div class="ProjectTable-controls">'+
	'<a class="btn btn-success btn-mini bid-now ProjectTable-control" href="';

var data14 = '">Bid Now</a></div></td>'+
			 '<td class=" ProjectTable-cell ProjectTable-bookmarkColumn bookmark-col"><a class="bookmark" data-project-id="12168661" data-type="p" data-action="on"><div class="bookmark-inner"><span data-toggle="popover" href="javascript:void(0)" data-placement="left" data-content="Bookmark this project">'+
			 '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" class="flicon-bookmark">'+
    		 '<path d="M2 1c-.55 0-1 .31-1 .7v8.94c0 .31.54.47.85.25l3.79-2.65c.2-.14.51-.14.71 0l3.79 2.65c.31.22.85.06.85-.25V1.7C11 1.31 10.55 1 10 1H2z"></path>'+
			 '</svg></span></div></a></td></tr>';

$(document).ready(function(){
	$("#dtable").html(data1+data2+data3+'Design Project'+data4+data5+data6+data7+data8+data9+data10+data11+data12+data13+data14);
});

$(document).ready(function(){
	$.ajax({
		type: "GET",
		url: "../projects/getalldata",
		success: function( data, textStatus, jQxhr ){
			
		},
		error: function( jqXhr, textStatus, errorThrown ){
		}
	});
});