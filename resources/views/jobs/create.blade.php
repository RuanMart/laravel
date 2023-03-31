@extends('jobs.main')
@section('body')
    <div id="add-form-container" class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Divulgue a vaga preenchendo o formulário</h1>
            </div>
            <div id="form-box" class="col-md-12">
                <h2>Preencha os dados da melhor forma possível para encontrar mais rápido seu dev!</h2>
                <form action="{{ route('jobs.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Título da vaga:</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Digite o título da vaga" required>
                        <small id="titleHelp" class="form-text text-muted">O título é muito importante, seja claro e
                            objetivo.</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição da vaga:</label>
                        <textarea type="text" class="form-control" id="description" name="description"
                            placeholder="Descreva as atividades do desenvolvedor..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="company">Empresa contratante:</label>
                        <input type="text" class="form-control" id="company" name="company"
                            placeholder="Digite a empresa que vai contratar" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail para contato:</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Digite o e-mail para contato" required>
                    </div>
                    <div class="form-group">
                        <label for="salary">Salário oferecido:</label>
                        <input type="text" class="form-control" id="salary" name="salary"
                            placeholder="Digite o Salário da vaga" required>
                    </div>
                    <input type="hidden" name="new_job" value="0">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
