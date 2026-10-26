<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Conteúdos cadastrados</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff0f5, #fce4ec);
            margin: 0;
            padding: 40px 25px;
            color: #444;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #8e4162;
            font-size: 34px;
            margin-bottom: 35px;
            letter-spacing: 0.5px;
        }

        table {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(142, 65, 98, 0.12);
        }

        thead {
            background: linear-gradient(135deg, #b84d79, #d77da0);
            color: white;
        }

        th {
            padding: 20px 16px;
            text-align: left;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 0.7px;
        }

        td {
            padding: 18px 16px;
            border-bottom: 1px solid #f5e1e9;
            font-size: 15px;
            line-height: 1.6;
        }

        tbody tr {
            transition: background-color 0.3s;
        }

        tbody tr:nth-child(even) {
            background-color: #fff8fb;
        }

        tbody tr:hover {
            background-color: #fce7ef;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        th:first-child,
        td:first-child {
            text-align: center;
            width: 70px;
        }

        th:last-child,
        td:last-child {
            text-align: center;
            width: 120px;
        }

        td a {
            display: inline-block;
            background-color: #b84d79;
            color: white;
            text-decoration: none;
            padding: 9px 18px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
        }

        td a:hover {
            background-color: #8e4162;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(142, 65, 98, 0.2);
        }

        p {
            max-width: 1200px;
            margin: 15px auto;
            padding: 15px 20px;
            background-color: white;
            border-left: 5px solid #c96b91;
            border-radius: 7px;
            box-shadow: 0 3px 10px rgba(142, 65, 98, 0.07);
        }

        @media (max-width: 700px) {
            body {
                padding: 25px 12px;
            }

            h1 {
                font-size: 26px;
                margin-bottom: 25px;
            }

            table {
                font-size: 12px;
            }

            th,
            td {
                padding: 10px 7px;
                font-size: 12px;
                overflow-wrap: anywhere;
            }

            td a {
                padding: 7px 9px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    <h1>Conteúdos cadastrados</h1>

    <?php if ($mensagem = session()->getFlashdata('mensagem')): ?>
        <p><?= esc($mensagem) ?></p>
    <?php endif; ?>

    <?php if (empty($conteudos)): ?>

        <p>Nenhum conteúdo encontrado.</p>

    <?php else: ?>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($conteudos as $item): ?>
                    <tr>
                        <td><?= esc($item['Id']) ?></td>
                        <td><?= esc($item['Titulo']) ?></td>
                        <td><?= nl2br(esc($item['Texto'] ?? '')) ?></td>
                        <td>
                            <a href="<?= site_url('conteudos/editar/' . $item['Id']) ?>">
                                Editar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>

</body>
</html>