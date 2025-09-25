<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos mínimos específicos do login, mantendo a paleta laranja */
        .login-card {
            max-width: 420px;
            margin: 32px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 24px rgba(255,152,0,0.15);
            padding: 24px 24px 16px;
        }
        .login-card h2 {
            margin: 0 0 12px;
            color: #fb8c00;
            text-align: center;
        }
        .form-group { margin-bottom: 14px; }
        label { display: block; margin-bottom: 6px; color: #5d4037; }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ffcc80;
            border-radius: 6px;
            outline: none;
            transition: box-shadow .2s, border-color .2s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #ffa726;
            box-shadow: 0 0 0 3px rgba(255, 167, 38, 0.2);
        }
        .actions { display: flex; gap: 8px; justify-content: center; margin-top: 12px; }
        .hint { text-align: center; color: #8d6e63; font-size: .9rem; margin-top: 6px; }
    </style>
</head>
<body>
    <main>
        <section class="login-card">
            <h2>Entre na sua conta</h2>
            <form method="post" action="verificar_usuario.php">
                <div class="form-group">
                    <label for="usuario">Nome de usuário</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" autocomplete="username">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" autocomplete="current-password">
                </div>
                <div class="actions">
                    <button type="submit" class="btn">Entrar</button>
                    <button type="reset" class="btn" style="background:#ffb74d;">Limpar</button>
                </div>
            </form>
            <p class="hint">Este é apenas um formulário de demonstração. Nenhuma validação de servidor.</p>
        </section>
    </main>
</body>
</html>