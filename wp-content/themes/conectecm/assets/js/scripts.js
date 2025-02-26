;(function($,window) {

	VMasker($("input.telefone")).maskPattern("(99) 99999-9999");

	var $menu = document.getElementById("menu");

	document.getElementById("botao_m").addEventListener("click", function(event) {
		$menu.classList.toggle("open");
		this.classList.toggle("ativo");
	});

	var clientes = $("#clientes_content").owlCarousel({
		items: 4,
		pagination: false,
		itemsScaleUp: true
	}).data('owlCarousel');


	$("#sociais").owlCarousel({
		singleItem: true,
		itemsScaleUp: true,
		autoPlay: true,
		stopOnHover: true
	});

	$("#clientes_prev").on("click", function(event) {
		clientes.prev();
	});

	$("#clientes_next").on("click", function(event) {
		clientes.next();
	});

	$("#send_cotnato").on("click", function(event) {
		event.preventDefault();

		var contato = {
			action: "contato",
			_wpnonce: document.getElementById("_wpnonce").value,
			secutiry: document.getElementById("security").value,
			nome: document.getElementById("contato_nome").value,
			email: document.getElementById("contato_email").value,
			telefone_celular: document.getElementById("contato_telefone_celular").value,
			mensagem: document.getElementById("contato_mensagem").value
		};

		$.ajax({
			type: "post",
			url: theme.ajax_url,
			data: contato,
			beforeSend: function(res) {
				$(".preloader").css("display", "block");
				$("body").css("overflow", "hidden");

				var callbacks = document.getElementsByClassName("callback");
				for (var i = callbacks.length - 1; i >= 0; i--) {
					callbacks[i].remove();
				};
			},
			success: function(res) {
				if ( res.length ) {
					for (var i = res.length - 1; i >= 0; i--) {
						createCallback("error",res[i],"#contato_form_callbacks", true); 
					};
				} else {
					$("#sucesso_contato_form").css("display","block");				
				
					$("#contato_nome").val('');
					$("#contato_email").val('');
					$("#contato_telefone_celular").val('');
					$("#contato_mensagem").val('');
				}
			},
			error: function(res) {
				createCallback("error","Ops, estamos com problemas em nosso servidor, tente de novo mais tarde.","#contato_form_callbacks", true); 
				$(".preloader").css("display", "none");
				$("body").css("overflow", "auto");
				$("html,body").animate({scrollTop:$("#contato").offset().top}, 500, 'linear');
			}
		}).done(function() {
			$(".preloader").css("display", "none");
			$("body").css("overflow", "auto");

			$("html,body").animate({scrollTop:$("#contato").offset().top}, 500, 'linear');
		});
	});

	/*
	*	type: error, success, info
	*	message: string com mensagem do callback
	*	element: elemento que vai conter o callback
	*	prepend: se adicionar no inicio, se nada for passado o parametro e adicionado ao final do elemento
	*/
	function createCallback(type, message, element, prepend) {
		var el = "<div class='callback'><span class='"+type+"'>"+message+"</span></div>";
		if (prepend === true) {
			$(element).prepend(el);
		} else {
			$(element).append(el);
		}
	}

	$("a.link").on("click", function( event ) {
		event.preventDefault();
		$('html, body').stop().animate({scrollTop: $("#" + $(this).attr("href").split("#")[1]).offset().top+8}, 500,'linear');
	});

	$("#top").on("click", function( event ) {
		$('html, body').stop().animate({scrollTop: 0}, 500,'linear');
	});

	$(document).scroll(function() {
		var $top = $("#top");

		if ( $top.offset().top > 3000 ) {
			// open

			if ( $top.hasClass("esconder") ) {
				$top.removeClass("esconder");
			}

		} else {
			// close

			if ( !$top.hasClass("esconder") ) {
				$top.addClass("esconder");
			}

		}
	});


	$('.flexslider').flexslider({
		controlNav: false,
		prevText: "",
		nextText: "",   
	});

	$(".link2").on("click", function( event ) {
		event.preventDefault();

		$('html, body').stop().animate({scrollTop: $($(this).attr("data-href")).offset().top-64}, 500,'linear');

	});


	function menuFixo() {
		if (94  <= $(document).scrollTop() && !$("#header").hasClass("fixo") ) {

			$("#header").addClass("fixo");
		} else if (94 > $(document).scrollTop() && $("#header").hasClass("fixo") ) {
			
			$("#header").removeClass("fixo");
		}
	}

	menuFixo();

	$(document).scroll(function( event ) {
		menuFixo();
	});

	$(window).load(function () {
		setTimeout(function() {
			$("#flex_elemento_um, #flex_elemento_dois").addClass("fadeInDown").css("display", "block");
			$("#flex_elemento_tres").addClass("tada");
		}, 500);
      
   });

})(jQuery, window);