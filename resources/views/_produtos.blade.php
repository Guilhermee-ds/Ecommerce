
@if(isset($lista))
@foreach ( $lista as $prod)
    <div class="col-3 mb-3">
           <div Class="card">
               <img src="{{asset($prod->foto)}}" class="card-img-top"/>
               <div class="card-body">
                   <h6 class="card-title">{{ $prod->nome }}</h6>
                   <h4 class="card-title">R$:{{ $prod->valor}}</h4>
                   <a href="{{route('adicionar_carrinho',['idproduto' => $prod->id])}}" class="btn btn-sm btn-secondary">Adicionar Item</a>
               </div>
           </div>
       </div>
   @endforeach
@endif
