<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title><?=$this->formatter->escape($title)?></title>

    <link href="<?=BASE_DIR?>assets/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <?php foreach ($styles as $style): ?>
        <link<?=$this->formatter->buildTagProperty($style);?>rel="stylesheet">
    <?php endforeach; ?>
</head>
<body class="d-flex flex-column h-100">
