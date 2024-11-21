<?php
$menu = "";
if(isset($_SESSION['login'])){
if($_SESSION['role'] == "Администратор"){
$menu .= '<li class="nav-item">
<a class="nav-link" href="/admin/">Админ Панель</a>
</li>';
}
$menu .= '<li class="nav-item">
<a class="nav-link" href="/profile/">Личный кабинет</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/admin/controllers/logout.php">
Выйти </a>
</li>';
}else{
$menu = '<li class="nav-item">
<a class="nav-link" href="/auth/">Вход</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/form.php/">Регистрация</a>
</li>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylefoot.css">
</head>
<body>
    <main class="text-success-emphasis">
        <header class="bg-success border-bottom border-success-emphasis">
        <div class="container-fluid d-flex align-items-center p-0">
        <nav class="navbar navbar-expand-lg w-100 p-3 navbar-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">Нарушениям.Нет</a>
        <button class="navbar-toggler" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"
        id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?=$menu?>
        </ul>
        </div>
        </div>
        </nav>
        </div>
        </header>

        <div class="container d-flex justify-content-center">

            <p>Лучший портал России</p>

        </div>

        <footer class="sticky-bottom bg-dark text-light foot">
            <div class="container-fluid p-3 pt-3 d-flex justify-content-center">
            <p>@Нарушениям.Нет<br>2023-2024</p>
            </div>
            </footer>
            </main>
            <script src="/assets/bootstrap/js/bootstrap.bundle.js"></script>
            <script>
            fields
            (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }
            form.classList.add('was-validated')
            }, false)
            })
            })()
            </script>
</body>
</html>