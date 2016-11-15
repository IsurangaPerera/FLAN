$("select").on('change', function(e){
	if($("#project-budget option:selected").val() == "custom"){
		$("#min_budget_group").show(1000);
		$("#max_budget_group").show(1000);
	}

	if($("#project-category option:selected").val() == "-1")
		$("#project-sub-category").show(500);
	else
		$("#project-sub-category").hide(500);

});

$('input:radio[name="budget-type"]').change(function(){
    if($("#budget-hourly").is(":checked")) {
    	$("#project-duration-select-step").show(500);
    	$("#project-duration-hours-step").show(500);
    } else {
    	$("#project-duration-select-step").hide(500);
    	$("#project-duration-hours-step").hide(500);
    }
});

var objectO = {
	"project" : [],
	"skill"   : [],
	"budget"  : []
}

function postProject(){
	fillProject();
	fillBudget();
	fillSkills();
	doPost();
}

function fillProject(){

	if($("#project-category option:selected").val() == "-1")
		type = $("#project-sub-category").val();
	else
		type = $("#project-category option:selected").html();

	name = $("#project-name").val();
	description = $("#project-description").val();

	objectO.project.push({
		"type" : type,
		"name" : name,
		"description" : description
	});
}

function fillBudget(){
	if($("#budget-hourly").is(":checked"))
		budget_type = "hourly";
	else
		budget_type = "fixed";

	duration = $("project-duration option:selected").html();

	var opt_min = {188 : 10, 5 : 30, 1 : 250, 2 : 750, 3 : 1500, 4 : 3000, 6 : 5000};
	var opt_max = {188 : 30, 5 : 250, 1 : 750, 2 : 1500, 3 : 3000, 4 : 5000, 6 : 10000}

	if($("#project-budget option:selected").val() == "custom"){
		min_budget = ("#project-custom-min-budget").val();
		max_budget = ("#project-custom-max-budget").val();
	} else {
		min_budget = opt_min[$("#project-budget option:selected").val()];
		max_budget = opt_max[$("#project-budget option:selected").val()];
	}

	commitment = $("#project-commitment").val();
	commitment_type = $("#project-commitment-type option:selected").html();

	currency = $("#project-currency option:selected").html();

	objectO.budget.push({
		"currency"		  : currency,
		"budget_type"     : budget_type,
		"duration"        : duration,
		"min_budget"  	  : min_budget,
		"max_budget"      : max_budget,
		"commitment"      : commitment,
		"commitment_type" : commitment_type
	});
}

function fillSkills() {
	skills = $("#project-skills").val();
	objectO.skill.push(skills);
}

function doPost() {
	$.ajax({
		type: "POST",
		url: "../project/post",
		data: JSON.stringify(objectO),
		success: function( data, textStatus, jQxhr ){
			//alert("Success");
			window.location.href='/proposal';
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alert( errorThrown );
		}
	});
}
