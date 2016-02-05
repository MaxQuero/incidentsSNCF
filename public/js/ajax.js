$(document).ready(function(){
	$(".search").submit(function(event){
		event.preventDefault();

        $.ajax({
			url : 'controllers/proxy.php', // La ressource ciblée
			dataType : 'json',
			success : function(ans){ // code_html contient le HTML renvoyé
			$(ans.records).each(function(i){
                var field = ans.records[i].fields;
					var html = "<li> <p>date :"+field.date+"</p><p> localisation : "+field.localisation+"</p><p>type : "+field.type+"</p></li>";
					$(".content").append(html);

				});
			}
		});
	});
});