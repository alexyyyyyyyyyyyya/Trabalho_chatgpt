$(document).ready(function() {

    function loadUsuarios() {
        $.ajax({
            url: 'listar_moto.php',
            type: 'GET',
            success: function(data) {
                $('#usuariosTable').html(data);
            }
        });
    }

    loadUsuarios();

    $('#usuarioForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: 'salvar_moto.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data) {
                loadUsuarios();
                $('#usuarioForm')[0].reset();
            }
        });
    });

    $(document).on('click', '.editar', function() {
        var id = $(this).data('id');

        $.ajax({
            url: 'editar_moto.php',
            type: 'GET',
            data: {id: id},
            success: function(data) {
                var usuario = JSON.parse(data);
                $('#id').val(usuario.id);
                $('#marca').val(usuario.marca);
                $('#cor').val(usuario.cor);
                $('#valor').val(usuario.valor);
                $('#ano').val(usuario.ano);
            }
        });
    });

    $(document).on('click', '.excluir', function() {
        var id = $(this).data('id');

        $.ajax({
            url: 'excluir_moto.php',
            type: 'POST',
            data: {id: id},
            success: function() {
                loadUsuarios();
            }
        });
    });

});