@extends('layout')

@section('cabecalho')
 Séries assistidas
@endsection

@section('conteudo')
<div class="container pt-3" id="adicionar">
    <a href="{{route('serie.create')}}" type="button" class="btn btn-success" id="addSerie">Adicionar</a>
</div>
<div class="container pt-3" id="content">
    <div class="row">
        <table class="table table-dark">
            <thead>
            <tr>
                <th> <h2>Listagem</h2> </th>
            </tr>
            <tr>
                <th>Título</th>
                <th>Avaliação</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($series as $serie)
                <tr>
                    <td>{{ $serie->title }}</td>
                    <td>{{ $serie->assessment_id }}</td>
                    <td>
                        <a href="{{route('serie.edit', $serie->id)}}" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-edit"></i></a>
                        <form method="post" id="formdelete" action="{{route('serie.delete', $serie->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"  id="buttonDelete" data-toggle="tooltip" data-placement="bottom" title="Excluir"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="pages">
    {!! $series->links() !!}
</div>
@endsection
