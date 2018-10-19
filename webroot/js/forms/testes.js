$(function(){
    if ($('#input-artigo-id').length) {
        inputArtigoNome = $('#input-artigo-nome').detach();
        setTimeout(function(){
            inputArtigoCategoriaId = $('#input-artigo-categoria-id').detach();
        }, 100);
        inputArtigoCategoriaNome = $('#input-artigo-categoria-nome').detach();
        $('#add-artigo').show();
    }
    if ($('#input-ferramenta-id').length) {
        inputFerramentaNome = $('#input-ferramenta-nome').detach();
        $('#add-ferramenta').show();
    }
});

// addArtigo
// listArtigos
// addCategoriaArtigo
// listCategoriasArtigos
// addFerramenta
// listFerramentas

let addArtigo = function () {
    $('#add-artigo').hide();
    $('#list-artigos').show();
    inputArtigoId = $('#input-artigo-id').detach();
    inputArtigoNome.appendTo('#container-artigo');
    inputArtigoCategoriaId.appendTo('#container-artigo-categoria');
    $('#add-artigo-categoria').show();
}
let listArtigos = function() {
    $('#list-artigos').hide();
    $('#add-artigo').show();
    inputArtigoNome = $('#input-artigo-nome').detach();
    inputArtigoId.appendTo('#container-artigo');
    if ($('#input-artigo-categoria-id').length) {
        inputArtigoCategoriaId = $('#input-artigo-categoria-id').detach();
    }
    if ($('#input-artigo-categoria-nome').length) {
        inputArtigoCategoriaNome = $('#input-artigo-categoria-nome').detach();
    }
    $('#add-artigo-categoria').hide();
    $('#list-artigos-categorias').hide();
}

let addArtigoCategoria = function() {
    $('#add-artigo-categoria').hide();
    $('#list-artigos-categorias').show();
    inputArtigoCategoriaId = $('#input-artigo-categoria-id').detach();
    inputArtigoCategoriaNome.appendTo('#container-artigo-categoria');
}
let listArtigosCategorias = function () {
    $('#list-artigos-categorias').hide();
    $('#add-artigo-categoria').show();
    inputArtigoCategoriaNome = $('#input-artigo-categoria-nome').detach();
    inputArtigoCategoriaId.appendTo('#container-artigo-categoria');
}

let addFerramenta = function() {
    $('#add-ferramenta').hide();
    $('#list-ferramentas').show();
    inputFerramentaId = $('#input-ferramenta-id').detach();
    inputFerramentaNome.appendTo('#container-ferramenta');
}
let listFerramentas = function () {
    $('#list-ferramentas').hide();
    $('#add-ferramenta').show();
    inputFerramentaNome = $('#input-ferramenta-nome').detach();
    inputFerramentaId.appendTo('#container-ferramenta');
}
