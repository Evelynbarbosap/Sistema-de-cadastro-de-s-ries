@extends('layout')

@section('cabecalho')
Adicionar Séries
@endsection

@section('conteudo')
<div class=" pt-4 col-md-4 offset-md-4">
    <div class="row bg-dark" id="form">
        <form  method="post" enctype="multipart/form-data" >
            @csrf
            <div id="title-register">
                <h2 class="text-light">Cadastrar</h2>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleInputTitle1" class="text-light">Título</label>
                <input type="text" class="form-control" id="Title" name="title" aria-describedby="titleHelp" placeholder="Digite um titulo">
            </div>
            <div class="form-group row" >
                <div class="col-lg-10">
                    <label class="text-light">Avaliação</label>
                </div>
                <div class="col-lg-12">
                    <select class="form-control" name="assessment" id="assessment" required="required" >
                        <option value="">Selecione</option>
                        @foreach($assessments as $assessment )
                            <option value="{{$assessment->id}}">{{$assessment->assessment}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Adicionar</button>
            <a href="{{route('series')}}" type="button" class="btn btn-light">Voltar</a>
        </form>
    </div>
</div>
@endsection
