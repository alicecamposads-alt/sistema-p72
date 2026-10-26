<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar conteúdo</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff0f5, #fce4ec);
            margin: 0;
            padding: 40px 20px;
            color: #444;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #8e4162;
            font-size: 32px;
            margin-bottom: 30px;
        }

        form {
            background-color: white;
            max-width: 750px;
            margin: 0 auto;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(142, 65, 98, 0.12);
        }

        form div {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #8e4162;
            font-weight: bold;
            font-size: 15px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #e5b8ca;
            border-radius: 8px;
            font-family: Arial, sans-serif;
            font-size: 15px;
            color: #444;
            background-color: #fffafd;
            transition: 0.3s;
        }

        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            border-color: #c96b91;
            box-shadow: 0 0 0 3px rgba(201, 107, 145, 0.15);
            background-color: white;
        }

        textarea {
            resize: vertical;
            min-height: 180px;
            line-height: 1.6;
        }

        button {
            background: linear-gradient(135deg, #b84d79, #d77da0);
            color: white;
            border: none;
            padding: 13px 25px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #8e4162;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(142, 65, 98, 0.2);
        }

        form a {
            display: inline-block;
            margin-left: 10px;
            padding: 12px 22px;
            border: 1px solid #c96b91;
            border-radius: 8px;
            color: #a94d75;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            transition: 0.3s;
        }

        form a:hover {
            background-color: #fff0f5;
        }

        form > div:has(ul) {
            background-color: #fff0f0;
            border-left: 5px solid #d9536f;
            padding: 15px 20px;
            border-radius: 7px;
        }

        form > div:has(ul) p {
            color: #a8324a;
            font-weight: bold;
            margin-top: 0;
        }

        form > div:has(ul) ul {
            color: #a8324a;
            padding-left: 20px;
            margin-bottom: 0;
        }

        @media (max-width: 600px) {
            body {
                padding: 25px 12px;
            }

            h1 {
                font-size: 25px;
            }

            form {
                padding: 22px 18px;
            }

            button,
            form a {
                padding: 12px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <h1>Editar conteúdo #<?= esc($conteudo['Id']) ?></h1>

    <form
        method="post"
        action="<?= site_url('conteudos/atualizar/' . $conteudo['Id']) ?>"
    >

        <?= csrf_field() ?>

        <?php if (!empty($erros)): ?>
            <div>
                <p>Verifique os campos:</p>
                <ul>
                    <?php foreach ($erros as $erro): ?>
                        <li><?= esc($erro) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div>
            <label for="Titulo">Título</label>

            <input
                type="text"
                id="Titulo"
                name="Titulo"
                maxlength="255"
                value="<?= esc($conteudo['Titulo'] ?? '') ?>"
                required
            >
        </div>

        <div>
            <label for="Texto">Texto</label>

            <textarea
                id="Texto"
                name="Texto"
                rows="10"
                required
            ><?= esc($conteudo['Texto'] ?? '') ?></textarea>
        </div>

        <button type="submit">Salvar alterações</button>

        <a href="<?= site_url('conteudos') ?>">Cancelar</a>

    </form>

</body>
</html>