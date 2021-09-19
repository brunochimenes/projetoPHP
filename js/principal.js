$(document).ready(function () {
  $body = $('body');

  $(document).on({
    ajaxStart: function () { $body.addClass("loading"); },
    ajaxError: function () { errosend(); },
    ajaxStop: function () { $body.removeClass("loading"); }
  });

  $(document).ajaxError(function () {
    alert("Erro no ajax!");
  });

  var msg = $('.resposta');

  function carregando(mensagem = "Aguarde o envio da requisição") {
    msg.empty().html('<p class="load"><img src="img/loading.gif" alt="Carregando..."/>' + mensagem + '</p>').fadeIn("fast");
  }

  function errosend() {
    msg.empty().html('<p class="error"><strong>Erro inesperado</strong>. ' + 'Favor contate o administrador</p>').fadeIn("fast");
  }

  function errodados(mensagem) {
    msg.empty().html('<p class="error">' + mensagem + '</p>').fadeIn("fast");
  }

  function sucesso(mensagem) {
    msg.empty().html('<p class="success">' + mensagem + '</p>').fadeIn("fast");
  }

  var btn = $('.btn-user');

  btn.click(function () {
    var data = $('.form-user').serialize();

    $.ajax({
      url: "gravar_usuario.php",
      method: "POST",
      data: data,
      dataType: "JSON",
      beforeSend: function () { carregando(); },
      success: function (result) {
        result['codigo'] == 0 ? errodados(result['mensagem']) : sucesso(result['mensagem']);
      },
      error: function (e) {
        if (e.status == 404) {
          errosend();
        }
      }
    });
    return false;
  });
});