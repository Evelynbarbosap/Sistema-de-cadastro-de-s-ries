@extends('layout')

@section('cabecalho')
 Séries assistidas
@endsection

@section('conteudo')
<div class="container pt-3">
<a href="{{route('serie.create')}}" type="button" class="btn btn-success" id="addSerie">Adicionar</a>
</div>
<div class="container pt-3" id="content">
    <div class="row">
        @foreach($series as $serie)
        <div class="card ml-4" >
            <img src="{{url("storage/{$serie->url}")}}" class="rounded" alt="{{ $serie->title }}" style="width: 180px; height: 170px;">
            <div class="card-body">
                <h5>{{ $serie->title }}</h5>
                <form method="post" action="{{route('serie.delete', $serie->id)}}" enctype="multipart/form-data"
                onsubmit="return confirm('Tem certeza?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary mt-2" id="buttonDelete"><i class="fas fa-trash"></i></button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pages"> {!! $series->links() !!} </div>
</div>
@endsection
