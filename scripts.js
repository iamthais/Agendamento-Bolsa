/* Validação de campos quando input possui atributo data-pattern */
$(document).on('input', 'input[data-pattern]', function (e) {

    /** Exemplos: https://blog.igorescobar.com/2012/03/13/mascaras-com-jquery-mask-plugin/ 
     * 
     * A - Permite inserir LETRAS e NUMEROS (ABCDEF...123456789)
     * 0 ou # - Permite Inserir apenas numeros (123456789)
     * S - Para String (Aparentemente mesma coisa que usar "A")
     * 
     *   $('.cpf').mask('000.000.000-00', {reverse: true});
     *   $('.money').mask('000.000.000.000.000,00', {reverse: true});
     *   $('.mixed').mask('AAA 000-S0S');
     *   $('.phone_with_ddd').mask('(00) 0000-0000')
     *   $('.cep').mask('00000-000');
     *   $('.date').mask('11/11/1111');
     *   $('.time').mask('00:00:00');
     *   $('.date_time').mask('00/00/0000 00:00:00');
     * 
    */

    let input = this.id;
    let format = this.getAttribute("data-pattern");
    $('#' + input).mask(format);

});


function exibeCampo3(elem) {

    if (elem.value == 1) {
        $('#3_obsdiv').removeAttr('hidden');
    } else {
        $('#3_obsdiv').attr('hidden', true);
    }
}

function exibeCampo4(elem) {

    if (elem.value == 1) {
        $('#4_obsdiv').removeAttr('hidden');
    } else {
        $('#4_obsdiv').attr('hidden', true);
    }
}


function exibeCampo5(elem) {

    if (elem.value == 1) {
        $('#5_obsdiv').removeAttr('hidden');
    } else {
        $('#5_obsdiv').attr('hidden', true);
    }
}


function termoAceite() {
    let box1 = document.getElementById("box1")
    let box2 = document.getElementById("box2")

    const toggle = (ev) => {
        if (ev.target.id === "box1") {
            box1.checked = true;
            box2.checked = false;
        } else {
            box1.checked = false;
            box2.checked = true;
        }
    }
    box1.addEventListener("change", toggle)
    box2.addEventListener("change", toggle)
}

function habilitaDataNascimento() {
    const input = document.getElementById('data_nascimento');
    const placeholder = document.getElementById('data_nascimento_po');

    input.removeAttribute('hidden');
    placeholder.setAttribute('hidden', true);

    input.click();
}

var option = document.getElementById("chektermo");
option.addEventListener('change', getChekTermo)
var option2 = document.getElementById("chektermo1");
option2.addEventListener('change', getChekTermo)

function getChekTermo() {
    var btn_enviar = document.getElementById("botaoenviar");

    if (option.checked === true) {
        btn_enviar.removeAttribute('disabled')
    } else {
        btn_enviar.setAttribute('disabled', true);
    }

}