$(document).ready(function(){
//load proposals for a project

var prop=document.getElementById('prop_content');
  $.ajax({
		type: "GET",
		url: "../proposal/show",
		data: 'project='+2,
		success: function( data, textStatus, jQxhr ){
			//alert("Success");
      //alert(data[0].id);

      //var pr=jQuery.parseJSON(data);
      //alert(pr.length);
      var pr=data;

			if(pr.length>0){

        //hide animator
        $('.AnimatedLoader').hide();

        for(var i=0;i<pr.length;i++)
          {
                          var tr=prop.insertRow(prop.rows.length);
                          tr.setAttribute("id","prop_tr")
                          var td1=tr.insertCell(0);
                          td1.setAttribute("id","prop_img");
                          td1.innerHTML=" <img src='{{'img/photo.jpg') }}' alt='Symfony!' /> ";

                          var td2=tr.insertCell(1);
                          td2.setAttribute("id","prop_description");
                          td2.innerHTML=pr[0].description+"<br/><button>Award</button>&nbsp;<button>chat</button>";

                          var td3=tr.insertCell(2);
                          //td3.setAttribute("id","prop_description");
                          td3.innerHTML="$ 25"+"<br/><hr/>";




          }
      }


		},
		error: function( jqXhr, textStatus, errorThrown ){
			alert( errorThrown );
		}
	});




});
