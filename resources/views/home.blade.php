<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Myshop - Ecommerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-hN4K0qMqojeTq7+RZK0lW1tzd3MhLNPQa5OIGLjg2x5znoPdXh7iR6mG5WrDk7A8lTQH9ZVdj/0c9ka3J4y+2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">MyShop</a>
        <div class="collapse navbar-collapse mr-auto">
            <div class="navbar-nav">
                <a class="nav-link" href="#">HOME</a>
                <a class="nav-link" href="#">Categorias</a>
                <a class="nav-link" href="#">Cadastrar</a>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-3 mb-3">
                <div Class="card">
                    <img src="{{asset('images/produto1.jpg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">Produto 1</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div Class="card">
                    <img src="{{asset('images/produto2.jpg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">Produto 2</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div Class="card">
                    <img src="{{asset('images/produto3.jpg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">Produto 3</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div Class="card">
                    <img src="{{asset('images/produto4.jpg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">Produto 4</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div Class="card">
                    <img src="{{asset('images/produto5.jpg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">Produto 5</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div Class="card">
                    <img src="{{asset('images/produto6.jpg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">Produto 6</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div Class="card">
                    <img src="{{asset('images/produto7.jpg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">Produto 7</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div Class="card">
                    <img src="{{asset('images/produto8.jpg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">Produto 8</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div Class="card">
                    <img src="{{asset('images/produto9.jpg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">Produto 9</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div Class="card">
                    <img src="{{asset('images/produto10.jpg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">Produto 10</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>