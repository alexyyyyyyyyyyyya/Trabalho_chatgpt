$(document).ready(function() {

    function loadUsuarios() {
        $.ajax({
            url: 'listar_usuarios.php',
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
            url: 'salvar_usuario.php',
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
            url: 'editar_usuario.php',
            type: 'GET',
            data: {id: id},
            success: function(data) {
                var usuario = JSON.parse(data);
                $('#id').val(usuario.id);
                $('#nome').val(usuario.nome);
                $('#email').val(usuario.email);
                $('#senha').val(usuario.senha);
            }
        });
    });

    $(document).on('click', '.excluir', function() {
        var id = $(this).data('id');

        $.ajax({
            url: 'excluir_usuario.php',
            type: 'POST',
            data: {id: id},
            success: function() {
                loadUsuarios();
            }
        });
    });

});