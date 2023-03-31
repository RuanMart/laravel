@extends('jobs.main')
@section('body')
    <div id="top-container" class="container-fluid">
        <h1 id="main-title" class="text-center">Encontre o emprego dos seus sonhos</h1>
        <p id="main-subtitle" class="text-center">Somos o site com mais vagas de tecnologia no mercado, direcionadas a home
            office</p>
        <form id="search-form" class="form-inline" action="/" method="GET">
            <div class="form-group col-md-10">
                <input type="text" class="form-control" id="job" name="job"
                    placeholder="Digite a vaga que está buscando">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Procurar</button>
            </div>
        </form>
    </div>
    <main>
        <div id="jobs-container" class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (isset($search))
                        <h2 id="job-list-title">Buscando vagas que contem: {{ $search }}</h2>
                    @else
                        <h2 id="job-list-title">Veja as nossas vagas em destaque</h2>
                    @endif

                    <ul id="job-list" class="list-group">
                        @foreach ($jobs as $job)
                            <li class="list-group-item">
                                <img src="{{ asset('img/company.svg') }}" alt="Company">
                                <p>{{ $job->company }}</p>
                                <h2>{{ $job->title }}</h2>
                                <p>R${{ $job->salary }}</p>
                                {{-- @if ($job->created_at < new DateTime())
                                    <span class="new-job-label">NOVA</span>
                                @endif --}}
                                <a class="btn btn-primary" href="/jobs/{{ $job->id }}">Ver vaga</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
