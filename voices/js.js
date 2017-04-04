$('.fancybox').fancybox();
$('.box').click(function(event) {
	if($(this).attr('class').indexOf('ignorebox')>-1)return;
	var arg=$(this).attr('attr-id');
	$.fancybox.open({href : 'pages.php?p='+arg,type : 'iframe',padding : 5});
});
$('.donatebtn').click(function(event) {
	//event.stopPropagation();
	//var arg=$(this).attr('attr-id');
	//$.fancybox.open({href : 'donate.php?p='+arg,type : 'iframe',padding : 5});
  var win = window.open('./donate.php', '_blank');
  win.focus();
});

$('.addbtn').click(function(event) {
	$.fancybox.open({href : 'add.php',type : 'iframe',padding : 5});
});
$('.votebtn').click(function(event) {
	event.stopPropagation();
	if($(this).attr('class').indexOf('gray')>-1)return;
	var count=$(this).children('span').text();
	count++;
	$(this).children('span').text(count);
	$(this).removeClass('purple');
	$(this).addClass('gray');
	var idd=$(this).parent('.box').attr('attr-id');
	$.post('submitvote.php', {id:idd});
});