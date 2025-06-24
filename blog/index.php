<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Meu Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Container Principal -->
<div class="container">
    
    <!-- Alert Bootstrap -->
    <div class="alert alert-success text-center" role="alert">
        Bem-vindo ao meu blog!
    </div>

    <div class="row">

        <!-- Conteúdo Principal -->
        <div class="col-md-8">
            <?php
                $posts = [
                    [
                        "titulo" => "Primeiro Post do Blog",
                        "data" => "23 de Junho de 2025",
                        "imagem" => "img/post1.jpg",
                        "conteudo" => "Post do blog testando"
                    ],
                    [
                        "titulo" => "PHP",
                        "data" => "20 de Junho de 2025",
                        "imagem" => "img/post2.jpg",
                        "conteudo" => "Mais um post para o blog"
                    ],
                    [
                        "titulo" => "Teste Bootstrap",
                        "data" => "18 de Junho de 2025",
                        "imagem" => "img/post3.jpg",
                        "conteudo" => "post 3 testando"
                    ]
                ];

                foreach ($posts as $post) {
                    echo '<div class="card mb-4">';
                    echo '<img src="'.$post["imagem"].'" class="card-img-top" alt="Imagem do post">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">'.$post["titulo"].'</h5>';
                    echo '<p class="card-text"><small class="text-muted">'.$post["data"].'</small></p>';
                    echo '<p class="card-text">'.$post["conteudo"].'</p>';
                    echo '<a href="#" class="btn btn-primary">Leia mais...</a>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Sobre o Autor
                </div>
                <div class="card-body">
                    <p>Olá! Meu nome é Fabio Setuba. Este é um blog para a atividade de Desenvolvimento Web.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Rodapé com Formulário de Contato -->
<footer class="mt-4">
    <div class="container">
        <h5>Entre em Contato</h5>
        <form>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Seu nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" placeholder="Seu e-mail">
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem:</label>
                <textarea class="form-control" id="mensagem" rows="3" placeholder="Sua mensagem"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Enviar</button>
        </form>

        <hr>
        <p>Endereço: Rua Exemplo, 123 - Cidade Fictícia</p>
        <p>Telefone: (11) 99999-9999</p>
        <p>Email: contato@meublog.com</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
