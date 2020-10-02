@extends('layout')

@section('cabecalho')
Adicionar Séries
@endsection

@section('conteudo')
<div class=" pt-4 col-md-4 offset-md-4">
    <div class="row" id="form">
        <form  method="post"  enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="exampleInputTitle1">Título</label>
                <input type="text" class="form-control" id="Title" name="title" aria-describedby="titleHelp" placeholder="Digite a série">
            </div>
            <div class="form-group">
                <label for="exampleInputImage1">Imagem</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image" lang="es">
                    <label class="custom-file-label" for="customFileLang">Selecionar</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Adicionar</button>
            <a href="{{route('series')}}" type="button" class="btn btn-light">Voltar</a>
        </form>
    </div>
</div>
@endsection
