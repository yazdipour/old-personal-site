//$('.box').click(function(event) {
//	var arg=$(this).attr('attr-id');
//	$.fancybox.open({href : './pages/pages.php?p='+arg,type : 'iframe',padding : 5});
//});
$('.box>a').click(function(event) {
	event.stopPropagation();
});