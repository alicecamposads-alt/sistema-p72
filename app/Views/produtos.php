<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($titulo?? 'Produtos') ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">

</head>

<body>

<h1><?= esc($titulo ?? 'Produtos') ?></h1>

<p><?= esc($texto ?? 'Bem-vindo à página de produtos!') ?></p>

</body>

</html>