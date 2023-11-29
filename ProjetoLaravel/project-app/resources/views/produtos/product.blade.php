@extends('layouts.main')

{{-- Alteração do Titulo Home --}}
@section('title', 'Produtos')

@section('content')
    <br><br><br><br><br><br><br>
    <h1>Colocar código HTML para Lista de Produtos</h1>
    <br><br>
    <table>
        <tr>
            <th style="width: 1%;">CÓDIGO PRODUTO</th>
            <th style="width: 7%;">SABORES</th>
            <th style="width: 50%;">DESCRIÇÕES</th>
            <th>Botões</th>
            <th style="width: 1%;">VALORES</th>
        </tr>
        {{-- @foreach ($collection as $item) --}}
            <tr>
                <td>#123</td>
                <td>CALABRESA PICANTE</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut deserunt cum voluptates sequi facilis
                    omnis quaerat ipsa esse, eaque, corporis doloremque ipsam fugiat perspiciatis fugit sunt rerum iure!
                    Doloremque, fugit!</td>
                <td>Botões</td>
                <td>€</td>
            </tr>
        {{-- @endforeach --}}

        <tr>
            <td>#123</td>
            <td>FRANGO</td>
            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque necessitatibus rerum repellendus
                molestias accusantium non ipsa minus aperiam aut? Inventore accusamus quisquam recusandae vitae ratione
                voluptate, reprehenderit ad necessitatibus saepe.</td>
            <td>€</td>
        </tr>
        <tr>
            <td>#123</td>
            <td>CHORISSO</td>
            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque necessitatibus rerum repellendus
                molestias accusantium non ipsa minus aperiam aut? Inventore accusamus quisquam recusandae vitae ratione
                voluptate, reprehenderit ad necessitatibus saepe.</td>
            <td>€</td>
        </tr>
        <tr>
            <td>#123</td>
            <td>QUATRO QUEIJOS</td>
            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque necessitatibus rerum repellendus
                molestias accusantium non ipsa minus aperiam aut? Inventore accusamus quisquam recusandae vitae ratione
                voluptate, reprehenderit ad necessitatibus saepe.</td>
            <td>€</td>
        </tr>
        <tr>
            <td class="colsPan" colspan="4">SABORES ESPECIAIS</td>
        </tr>
        <tr>
            <td>#123</td>
            <td>FRANGO COM CATUPIRY</td>
            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque necessitatibus rerum repellendus
                molestias accusantium non ipsa minus aperiam aut? Inventore accusamus quisquam recusandae vitae ratione
                voluptate, reprehenderit ad necessitatibus saepe.</td>
            <td>€</td>
        </tr>
        <tr>
            <td>#123</td>
            <td>ESPECIAL DA CASA</td>
            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque necessitatibus rerum repellendus
                molestias accusantium non ipsa minus aperiam aut? Inventore accusamus quisquam recusandae vitae ratione
                voluptate, reprehenderit ad necessitatibus saepe.</td>
            <td>€</td>
        </tr>
    </table>
    <br><br><br><br>

@endsection
