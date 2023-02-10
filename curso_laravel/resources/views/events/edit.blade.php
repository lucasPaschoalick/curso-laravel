@extends('layouts.main')

@section('title', 'Editar: ' . $event->title)

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1 class="mb-4">Editar: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            <!-- Especifica que o method é PUT e não POST -->
            @csrf
            @method('PUT')
            <div class="form-group mb-4">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="from-control-file">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
            </div>
            <div class="form-group mb-4">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}">
            </div>
            <div class="form-group mb-4">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
            </div>
            <div class="form-group mb-4">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}">
            </div>
            <div class="form-group mb-4">
                <label for="title">O evento é público ou privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Público</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Privado</option>
                </select>                
            </div>
            <div class="form-group mb-4">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descreva as atividades do evento">{{ $event->description }}</textarea>
            </div>
            <div class="form-group mb-4">
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="form-group mb-4">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                    <input type="checkbox" name="items[]" value="Open drink"> Open drink
                    <input type="checkbox" name="items[]" value="Open food"> Open food
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Editar Evento">
        </form>

    </div>

@endsection
