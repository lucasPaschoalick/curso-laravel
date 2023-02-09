@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1 class="mb-4">Crie um evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="from-control-file">
            </div>
            <div class="form-group mb-4">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group mb-4">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div class="form-group mb-4">
                <label for="title">O evento é público ou privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Público</option>
                    <option value="1">Privado</option>
                </select>                
            </div>
            <div class="form-group mb-4">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descreva as atividades do evento"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>

    </div>

@endsection
