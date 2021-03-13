<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDO</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #dfd9d9;
    }

    .hamburger__menu a {
        color: white !important;
        text-decoration: none !important;
    }

    a {

        text-decoration: none !important;
    }

    .todo h1 {
        margin-top: 10rem;
    }

    .container {
        width: 600px;
    }

    form {
        background: #2FCC9A;
        border: 2px solid #228e6c;
        border-radius: 10px;
        padding: 20px 10px;
        margin-bottom: 20px;
    }

    #task {
        width: 60%;
        float: left;
        margin-right: 5%;
    }

    .todo ul li {
        width: 570px;
        height: auto;
        word-wrap: break-word;
        list-style: none;
        padding: 15px;
        margin-top: 10px;
        background: #fcfcfc;
        border: 1px solid silver;
        border-radius: 5px;
    }

    .todo ul li:hover {
        background: #e5e5e5;
    }

    .active {
        background-color: red;
    }

    .delete {
        border: 0;
        padding: 5px 15px;
        color: white;
        font-size: 13px;
        background: #db5757;
        border-radius: 5px;
        position: relative;
        left: 240px;
        top: -10px;
    }


    .delete:hover {
        background: #a04141;
    }


    @media screen and (max-width: 770px) {
        .container {
            width: 500px;
        }

        .todo ul li {
            width: 470px;
        }

        .delete {
            left: 190px;
        }
    }

    @media screen and (max-width: 520px) {
        .container {
            width: 310px;
        }

        .todo ul li {
            width: 280px;
        }

        .delete {
            left: 90px;
        }
    }
</style>

<body>
    <header class="header">
        <div class="logo">
            <a href="/index.html"><img src="/img/logo/logo.png" alt="logo"></a>
        </div>
        <div>
            <ul class="links">
                <li class="header__item"><a href="/index.html#home">Home</a></li>
                <li class="header__item"><a href="/index.html#about">About</a></li>
                <li class="header__item"><a href="/index.html#servicing">Servicing</a></li>
                <li class="header__item"><a href="/index.html#portfolio">Portfolio</a></li>
                <li class="header__item"><a href="/index.html#contact">Contact us</a></li>
                <li class="header__item"><a href="/to-do.php">ToDo</a></li>
            </ul>
        </div>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                <li class="menu__item"><a href="/index.html#home">Home</a></li>
                <li class="menu__item"><a href="/index.html#about">About</a></li>
                <li class="menu__item"><a href="/index.html#servicing">Servicing</a></li>
                <li class="menu__item"><a href="/index.html#portfolio">Portfolio</a></li>
                <li class="menu__item"><a href="/index.html#contact">Contact us</a></li>
                <li class="menu__item"><a href="/to-do.php">ToDo</a></li>

            </ul>
        </div>
    </header>
    <div class="container">
        <div class="todo">
            <h1>Список дел</h1>
            <form action="/add.php" method="post">
                <input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">
                <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
            </form>
            <div class="todo__item">
                <?php
                require 'configDB.php';
                echo '<ul>';
                $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
                while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                    echo '<li><b>' . $row->task . '</b></li>';
                    echo '<div><a href="/delete.php?id=' . $row->id . '"><button class = "delete"> Удалить </button></a></div>';
                }
                echo '</ul>';
                ?>
            </div>
        </div>
    </div>
</body>

</html>