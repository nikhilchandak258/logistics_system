
$(document).ready(function(){
var $remslots=$("#slot_store").text();   		//Stores remaining of slots
var $tempSlotNoHolder;
var $finalslots=$remslots;
function decrementNoOfSlots($parent){			//to check if no of slots==0 and to decrement if no so
$remslots=$("#slot_store").text();
$finalslots=$remslots;
if($parent.hasClass("slot1")==true)
{
$remslots-=1;
return $remslots;
}
else if($parent.hasClass("slot2")==true)
{
$remslots-=2;
return $remslots;
}
else if($parent.hasClass("slot3")==true)
{
$remslots-=3;
return $remslots;
}

}

function incrementNoOfSlots($parent){
$finalslots=parseInt($("#slot_store").text(), 10);
if($parent.hasClass("slot1")==true)
{
$finalslots+=1;
$("#slot_store").text($finalslots);
}
else if($parent.hasClass("slot2")==true)
{
$finalslots+=2;
$("#slot_store").text($finalslots);
}
else if($parent.hasClass("slot3")==true)
{
$finalslots+=3;
$("#slot_store").text($finalslots);
}
}



/*Day 1 Code*/


$('.11s2s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".11s2s").prop( "disabled",true );
	$(".11s").prop( "disabled",true );
	$(".12s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".11s2s").prop( "disabled",true );
	$(".11s").prop( "disabled",true );
	$(".12s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".11s2s").prop( "disabled",false );
$(".11s").prop( "disabled",false );
$(".12s").prop( "disabled",false);
}
});


$('.11s').click(function(){
if($(this).prop( "checked" )==true)
{
	$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".11s2s").prop( "disabled",true );
	$(".11s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	/*$("table input[type='checkbox']")
		.prop('disabled',true);*/
	$(".11s2s").prop( "disabled",true );
	$(".11s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($remslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
/*$("table input[type='checkbox']")
		.prop('disabled',false);*/
$(".11s2s").prop( "disabled",false );
$(".11s").prop( "disabled",false );
}
});


$('.12s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".11s2s").prop( "disabled",true );
	$(".12s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".11s2s").prop( "disabled",true );
	$(".12s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".11s2s").prop( "disabled",false );
$(".12s").prop( "disabled",false );
}
});


$('.13s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".13s4s").prop( "disabled",true );
	$(".13s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".13s4s").prop( "disabled",true );
	$(".13s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".13s4s").prop( "disabled",false );
$(".13s").prop( "disabled",false );
}
});


$('.13s4s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".13s4s").prop( "disabled",true );
	$(".13s").prop( "disabled",true );
	$(".14s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".13s4s").prop( "disabled",true );
	$(".13s").prop( "disabled",true );
	$(".14s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".13s4s").prop( "disabled",false );
$(".13s").prop( "disabled",false );
$(".14s").prop( "disabled",false);
}
});


$('.14s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".13s4s").prop( "disabled",true );
	$(".14s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".13s4s").prop( "disabled",true );
	$(".14s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".13s4s").prop( "disabled",false );
$(".14s").prop( "disabled",false );
}
});
/*End of Day 1 Code*/


/*Day 2 Code*/
$('.21s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".21s2s").prop( "disabled",true );
	$(".21s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".21s2s").prop( "disabled",true );
	$(".21s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".21s2s").prop( "disabled",false );
$(".21s").prop( "disabled",false );
}
});


$('.21s2s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".21s2s").prop( "disabled",true );
	$(".22s3s").prop( "disabled",true );
	$(".21s").prop( "disabled",true );
	$(".22s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".21s2s").prop( "disabled",true );
	$(".22s3s").prop( "disabled",true );
	$(".21s").prop( "disabled",true );
	$(".22s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
	incrementNoOfSlots($(this).parent());
	$(".21s2s").prop( "disabled",false );
	$(".22s3s").prop( "disabled",false );
	$(".21s").prop( "disabled",false );
	$(".22s").prop( "disabled",false );

}
});


$('.22s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".21s2s").prop( "disabled",true );
	$(".22s3s").prop( "disabled",true );
	$(".22s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".21s2s").prop( "disabled",true );
	$(".22s3s").prop( "disabled",true );
	$(".22s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".21s2s").prop( "disabled",false );
$(".22s3s").prop( "disabled",false );
$(".22s").prop( "disabled",false );
}
});


$('.23s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".23s").prop( "disabled",true );
	$(".22s3s").prop( "disabled",true );
	$(".23s4s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".23s").prop( "disabled",true );
	$(".22s3s").prop( "disabled",true );
	$(".23s4s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".23s").prop( "disabled",false );
$(".22s3s").prop( "disabled",false );
$(".23s4s").prop( "disabled",false );
}
});


$('.24s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".24s").prop( "disabled",true );
	$(".23s4s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".24s").prop( "disabled",true );
	$(".23s4s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".24s").prop( "disabled",false );
$(".23s4s").prop( "disabled",false );
}
});


$('.22s3s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".22s").prop( "disabled",true );
	$(".23s").prop( "disabled",true );
	$(".21s2s").prop( "disabled",true );
	$(".23s4s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".22s").prop( "disabled",true );
	$(".23s").prop( "disabled",true );
	$(".21s2s").prop( "disabled",true );
	$(".23s4s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".23s4s").prop( "disabled",false );
$(".21s2s").prop( "disabled",false );
$(".22s").prop( "disabled",false );
$(".23s").prop( "disabled",false );
}
});


$('.23s4s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".23s4s").prop( "disabled",true );
	$(".22s3s").prop( "disabled",true );
	$(".23s").prop( "disabled",true );
	$(".24s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".23s4s").prop( "disabled",true );
	$(".22s3s").prop( "disabled",true );
	$(".23s").prop( "disabled",true );
	$(".24s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".23s4s").prop( "disabled",false );
$(".24s").prop( "disabled",false );
$(".23s").prop( "disabled",false );
$(".22s3s").prop( "disabled",false );
}
});



/*End of Day 2 Code*/

/*Day 3 Code*/
$('.31s2s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".31s").prop( "disabled",true );
	$(".32s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".31s").prop( "disabled",true );
	$(".32s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".31s").prop( "disabled",false );
$(".32s").prop( "disabled",false );
}
});


$('.31s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".31s").prop( "disabled",true );
	$(".31s2s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".31s").prop( "disabled",true );
	$(".31s2s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".31s").prop( "disabled",false );
$(".31s2s").prop( "disabled",false );
}
});


$('.32s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".32s").prop( "disabled",true );
	$(".31s2s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".32s").prop( "disabled",true );
	$(".31s2s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".32s").prop( "disabled",false );
$(".31s2s").prop( "disabled",false );
}
});


$('.33s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".33s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".33s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".33s").prop( "disabled",false );
}
});


$('.34s').click(function(){
if($(this).prop( "checked" )==true)
{
$tempSlotNoHolder=decrementNoOfSlots($(this).parent());
	if($tempSlotNoHolder>0){
	$finalslots=$tempSlotNoHolder;
	$(".34s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else if($tempSlotNoHolder==0){
	$finalslots=$tempSlotNoHolder;
	$(".34s").prop( "disabled",true );
	$(this).prop( "disabled",false );
	$("#slot_store").text($finalslots);
	}
	else{
	alert("You don't have enough free slots to attend this workshop.Please select any other workshop");
	$(this).prop( "checked",false );
	}
}
else {
incrementNoOfSlots($(this).parent());
$(".34s").prop( "disabled",false );
}
});

/*End of Day 3 Code*/

});
