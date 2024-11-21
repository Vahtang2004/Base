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
<a class="nav-link" href="/register/">Регистрация</a>
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
</head>
<body>
    
<footer class="sticky-bottom bg-dark text-light">
<div class="container-fluid p-3 pt-3">
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