<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $cat = new \App\Models\Categoria(['categoria' =>'Geral']);
        $cat->save();

        $prod = new \App\Models\Produto(['nome'=>'iPhone 14 Pro Max Apple (128GB) Branco, Tela de 6,1", 5G e Câmera de 12MP','valor' => 9.900,'foto' => 'images/produto1.jpg','descricao' => 'O iPhone 14 tem o sistema de câmera dupla mais impressionante em um iPhone para fazer fotos espetaculares .','categoria_id' => $cat ->id,]);
        $prod->save();

        $prod2 = new \App\Models\Produto(['nome'=>'Macbook Apple Macbook Air A2337 Apple M1 13,3" 8GB SSD 256 GB Mac OS Leitor Biométrico','valor' => 20.000,'foto' => 'Apple Macbook Air M1 8gb 256gb.','categoria_id' => $cat ->id,]);
        $prod2->save();

        $prod3 = new \App\Models\Produto(['nome'=>'Apple Macbook Pro, 14 Polegadas, Chip M2 Pro, 2022 10c, CPU/16c GPU/16GB/512GB, Cinza Espacial','valor' => 30.000,'foto' => 'images/produto3.jpg','descricao' => 'Chip m2 pro da apple com cpu de 10 núcleos, gpu de 16 núcleos e neural engine de 16 núcleos.
        Memória unificada de 16 gb. Ssd de 512 gb.','categoria_id' => $cat ->id,]);
        $prod3->save();

        $prod4 = new \App\Models\Produto(['nome'=>'Notebook Dell Inspiron','valor' => 3.000,'foto' => 'images/produto4.jpg','descricao' => 'Notebook Dell Inspiron i15-i1100-A70S 15.6" Full HD 11ª Geração Intel Core i7 8GB 256GB SSD NVIDIA GeForce Windows 11','categoria_id' => $cat ->id,]);
        $prod4->save();

        $prod5 = new \App\Models\Produto(['nome'=>'2022 Apple iPad de 10,9 polegadas','valor' => 5.000,'foto' => 'images/produto5.jpg','descricao' => '2022 Apple iPad de 10,9 polegadas, prateado.','categoria_id' => $cat ->id,]);
        $prod5->save();

        $prod6 = new \App\Models\Produto(['nome'=>'Smart TV LED 40" FULL HD TCL','valor' => 9.900,'foto' => 'images/produto6.jpg','descricao' => 'Smart TV LED 40" FULL HD TCL, Melhor Smart tv para assistir jogos.','categoria_id' => $cat ->id,]);
        $prod6->save();

        $prod7 = new \App\Models\Produto(['nome'=>'Smart TV LED 55" FULL HD TCL','valor' => 4.000,'foto' => 'images/produto7.jpg','descricao' => 'Lançamento da TCL de 2023.','categoria_id' => $cat ->id,]);
        $prod7->save();

        $prod8 = new \App\Models\Produto(['nome'=>'Smart TV LED 35" FULL HD TCL','valor' => 2.000,'foto' => 'images/produto8.jpg','descricao' => 'Smart TV LED 35" FULL HD TCL para filmes e jogos.','categoria_id' => $cat ->id,]);
        $prod8->save();

        $prod9 = new \App\Models\Produto(['nome'=>'Smart TV LED 55" 4K UHD Samsung','valor' => 9.900,'foto' => 'images/produto9.jpg','descricao' => 'Smart TV LED 55" 4K UHD Samsung lançamento de 2023.','categoria_id' => $cat ->id,]);
        $prod9->save();

        $prod10 = new \App\Models\Produto(['nome'=>'Galaxy Tab S18','valor' => 3.000,'foto' => 'images/produto10.jpg','descricao' => 'Galaxy Tab S8 o novo lançamento da samsung.','categoria_id' => $cat ->id,]);
        $prod10->save();


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
