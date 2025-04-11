<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="shortcut icon" href="{{ asset('img/FAVICON_xeat.ico')}}">

    <link rel="stylesheet" href="{{ asset('css/home/reset.css') }}">

    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">

    <!-- <link rel="stylesheet" href="../css/reset.css"> -->
    <!-- <link rel="stylesheet" href="../css/home.css"> -->

    <script src="https://kit.fontawesome.com/a1578c39bd.js" crossorigin="anonymous"></script>
    <title>X-eat</title>
</head>
<body>

    <header>
       
    <span><img class="navegacao_logo" src="{{ asset('img/x-eat_logo.png') }}" alt="logo x-eat"></span>
        <nav class="navegacao">
            <a class="navegacao_item" href="{{ route('dashboard.index')}}"><span class="fa-solid fa-house"></span> <span>Home</span></a>
            <a class="navegacao_item" href="#"><span class="fa-solid fa-magnifying-glass"></span> <span>Mais Informações</span></a>
            <a class="navegacao_item" href="../x-eat/login.html"><span class="fa-solid fa-user"></span> <span>Login</span></a>
            <a class="navegacao_item" href="#"><span class="fa-solid fa-right-to-bracket"></span> <span>Cadastrar-se</span></a>
        </nav>
    </header>

    <main>
        <section>
            <article class="article">
                    <h1 class="article_titulo">Deixe sua dieta no piloto automático com o X-Eat!</h1>
                    <p class="article_texto">Criamos planos de refeições personalizados com base nas suas preferências alimentares, orçamento e cronograma. Alcance suas metas nutricionais com facilidade usando nossa calculadora de calorias, planos semanais de refeições, listas de compras e muito mais.
                        Crie seu plano de refeições em segundos.</p>
                        <p class="article_texto">Pronto para começar? Nos informe sobre sua dieta e deixe-nos cuidar do resto!</p>
            </article>
            <article class="article_food">
                <div class="article_food_texto">
                    <img class="article_food_icon" src="{{ asset('img/icone_carne.png')}}" alt="icone carne">
                    <span class="food_label">Proteinas</span>
                </div>
                
                <div class="article_food_texto">
                    <img class="article_food_icon" src="{{ asset('img/icone_pera.png')}}" alt="icone pera">
                    <span class="food_label">Frutas</span>
                </div>
            
                <div class="article_food_texto">
                    <img class="article_food_icon" src="{{ asset('img/icone_ovo.png')}}" alt="icone ovo">
                    <span class="food_label">Outros</span>
                </div>
            
                <div class="article_food_texto">
                    <img class="article_food_icon" src="{{ asset('img/icone_balanca.png')}}" alt="icone balança">
                    <span class="food_label">Balanciados</span>
                </div>
            
                <div class="article_food_texto">
                    <img class="article_food_icon" src="{{ asset('img/icone_pizza.png')}}"  alt="icone pizza">
                    <span class="food_label">Livres</span>
                </div>
            </article>
        </section>

        <aside class="aside">
                <div class="aside_content">
                    
                <img class="aside_img" src="{{ asset('img/imagem_prato.jpg')}}" alt="imagem prato ">
                </div>
        </aside>
    </main>
      
</body>
</html>
