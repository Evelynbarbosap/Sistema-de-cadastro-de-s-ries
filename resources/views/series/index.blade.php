@extends('layout')

@section('cabecalho')
 Séries assistidas
@endsection

@section('conteudo')
<div class="container pt-3">
<a href="{{route('serie.create')}}" type="button" class="btn btn-success" id="addSerie">Adicionar</a>
</div>
<div class="container pt-3" id="content">
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Título</th>
                <th>Avaliação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ragnarok</td>
                <td>Muito boa</td>
                <td>
                    <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Excluir"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <td>Chicago Fire</td>
                <td>Excelente</td>
                <td>
                    <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Excluir"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <td>Winx</td>
                <td>Horrivel</td>
                <td>
                    <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Excluir"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="pages"> {!! $series->links() !!} </div>
</div>
@endsection
