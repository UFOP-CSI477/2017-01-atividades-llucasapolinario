$(document).ready(function(){

  $("#btnCalcular").click(function(){

    $("#subNutri").removeClass("danger");
    $("#Saudavel").removeClass("success");
    $("#Sobrepeso").removeClass("active");
    $("#Grau1").removeClass("warning");
    $("#Grau2").removeClass("warning");
    $("#Grau3").removeClass("danger");

    var altura = parseFloat($("input[name='altura']").val());
    var peso = parseFloat($("input[name='peso']").val());

    if(isNaN(peso)) {
      $("#peso").addClass("has-error");
      $("#alertaPeso").fadeIn();
      $("input[name='peso']").focus();
      $("input[name='peso']").val("");
      return;
    }

    if(isNaN(altura)) {
      $("#altura").addClass("has-error");
      $("#alertaAlt").fadeIn();
      $("input[name='altura']").focus();
      $("input[name='altura']").val("");
      return;
    }

      $("#altura").removeClass("has-error");
      $("#alertaAlt").hide();

      $("#peso").removeClass("has-error");
      $("#alertaPeso").hide();

      $("#resultado").removeClass("hide");

      var resultado = peso/(altura*altura);
      var pesoidealmmin = (altura*altura)*18.6;
      var pesoidealmax = (altura*altura)*24.9;

      $("input[name='inpResult']").val(resultado);
      $("input[name='inpPesoSaud']").val("Entre "+pesoidealmmin.toFixed(3)+" e "+pesoidealmax.toFixed(3));

      if(resultado <= 18.5) {
        $("Input[name='inpClass']").val("Subnutrição");
        $("#subNutri").addClass("danger");
        return;
      } else if(resultado >= 18.6 && resultado <= 24.9) {
        $("Input[name='inpClass']").val("Peso saudável");
        $("#Saudavel").addClass("success");
        return;
      } else if(resultado >= 25 && resultado <= 29.9) {
        $("Input[name='inpClass']").val("Sobrepeso");
        $("#Sobrepeso").addClass("active");
        return;
      } else if(resultado >= 30 && resultado <= 34.9) {
        $("Input[name='inpClass']").val("Obesidade Grau 1");
        $("#Grau1").addClass("warning");
        return;
      } else if(resultado >= 35 && resultado <= 39.9) {
        $("Input[name='inpClass']").val("Obesidade Grau 2");
        $("#Grau2").addClass("warning");
        return;
      } else if(resultado >= 40) {
        $("Input[name='inpClass']").val("Obesidade Grau 3");
        $("#Grau3").addClass("danger");
        return;
      }

  });

  $("#btnLimpar").click(function(){
    $("#subNutri").removeClass("danger");
    $("#Saudavel").removeClass("success");
    $("#Sobrepeso").removeClass("active");
    $("#Grau1").removeClass("warning");
    $("#Grau2").removeClass("warning");
    $("#Grau3").removeClass("danger");
    $("Input[name='inpClass']").val("");
    $("input[name='inpResult']").val("");
    $("#resultado").addClass("hide");
  });

})
