$(document).ready(function () {
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        // Clear previous errors
        $('#login-alert').hide().text('');

        // Disable button and show spinner
        var btn = $(this).find('button[type="submit"]');
        var originalText = 'INGRESAR';
        btn.prop('disabled', true);
        $('#login-btn-text').text('Procesando...');
        $('#login-spinner').show();

        var formData = {
            emailOrUsername: $('#emailOrUsername').val(),
            password: $('#password').val()
        };

        $.ajax({
            type: 'POST',
            url: 'http://localhost:8000/api/auth/login',
            data: JSON.stringify(formData),
            contentType: 'application/json',
            success: function (response) {
                if (response.success) {
                    var token = response.data.token;
                    var user = response.data.user;

                    // Encode user object to base64 for the URL
                    // We need to use btoa but handle unicode characters properly if any
                    var userJson = JSON.stringify(user);
                    var userStr = btoa(unescape(encodeURIComponent(userJson)));

                    // Redirect to Admin Dashboard with token and user data
                    // This uses the ExternalCallback route we identified in the dashboard
                    window.location.href = 'http://localhost:5173/auth/callback?token=' + encodeURIComponent(token) + '&user=' + encodeURIComponent(userStr);
                } else {
                    $('#login-alert').text(response.error || 'Credenciales inválidas').show();
                    resetBtn(btn, originalText);
                }
            },
            error: function (xhr, status, error) {
                var errorMsg = 'Error al conectar con el servidor';
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    errorMsg = xhr.responseJSON.error;
                }
                $('#login-alert').text(errorMsg).show();
                resetBtn(btn, originalText);
            }
        });
    });

    function resetBtn(btn, text) {
        btn.prop('disabled', false);
        $('#login-btn-text').text(text);
        $('#login-spinner').hide();
    }
});
