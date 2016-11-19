$(document).ready(function(){
//load proposals for a project

var prop=document.getElementById('prop_content');
  $.ajax({
		type: "GET",
		url: "../proposal/show",
		data: 'project='+2,
		success: function( data, textStatus, jQxhr ){
			//alert("Success");


      var pr=jQuery.parseJSON(data);
      alert(pr.length);

			if(pr.length>0){

        //hide animator
        $('.AnimatedLoader').hide();

        for(var i=0;i<pr.length;i++)
          {
                          var tr=prop.insertRow(prop.rows.length);
                          tr.setAttribute("id","prop_tr")
                          var td1=tr.insertCell(0);
                          td1.setAttribute("id","prop_img");
                          td1.innerHTML="fghfghf";

                          var td2=tr.insertCell(1);
                          td2.setAttribute("id","prop_description");
                          td2.innerHTML=pr[0].id;

          }
      }


		},
		error: function( jqXhr, textStatus, errorThrown ){
			alert( errorThrown );
		}
	});




});
