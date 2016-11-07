$("select").on('change', function(e){
	if($("#project-budget option:selected").val() == "custom"){
		$("#min_budget_group").show(1000);
		$("#max_budget_group").show(1000);
	}
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
}

function fillProject(){
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
	min_budget = ("#project-custom-min-budget").val();
	max_budget = ("#project-custom-max-budget").val();
}