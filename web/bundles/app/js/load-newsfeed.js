$(document).ready(function(){
//load news feed for a project

var prop=document.getElementById('news_content');
  $.ajax({
		type: "GET",
		url: "../newsfeed/show",
		data: 'user='+2,//temporary
		success: function( data, textStatus, jQxhr ){

        //alert("data");
        var pr=data;

  			if(pr.length>0){



          for(var i=0;i<pr.length;i++)
            {
                            var tr=prop.insertRow(prop.rows.length);
                            tr.setAttribute("id","newsfeed_tr")
                            var td1=tr.insertCell(0);
                            td1.setAttribute("id","feed_img");
                            td1.innerHTML=" <img src='{{'img/photo.jpg') }}' alt='Symfony!' /> ";

                            var td2=tr.insertCell(1);
                            td2.setAttribute("id","feed_description");
                            td2.innerHTML=pr[0].description;






            }
        }



		},
		error: function( jqXhr, textStatus, errorThrown ){
			alert( errorThrown );
		}
	});




});
