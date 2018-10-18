$(function(){
    inputAddCategoria = $('#input-add-categoria').detach();
})

let addCategoria = function () {
    $('#add-categoria').hide()
    inputSelectCategoria = $('#input-select-categoria').detach()
    $('#list-categorias').show()
    inputAddCategoria.appendTo('#container-categoria');
}
let listCategorias = function () {
    $('#list-categorias').hide()
    inputAddCategoria = $('#input-add-categoria').detach();
    $('#input-add-categoria').hide()
    $('#add-categoria').show()
    inputSelectCategoria.appendTo('#container-categoria');
}
