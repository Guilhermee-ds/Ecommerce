@extends("layout")
@section("conteudo")
            @if(isset($lista))
                @foreach ( $lista as $prod)

                    <div class="col-3 mb-3">
                        <div Class="card">
                            <img src="{{asset($prod->foto)}}" class="card-img-top"/>
                            <div class="card-body">
                                <h6 class="card-title">{{ $prod->nome }}</h6>
                                <h4 class="card-title">R$:{{number_format ($prod->valor,3, '.','')}}</h4>
                                <a href="#" class="btn btn-sm btn-secondary">Adicionar Ao carrinho</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
@endsection
