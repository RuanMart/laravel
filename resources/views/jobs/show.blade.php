@extends('jobs.main')
@section('body')
    <div id="job-view-container" class="container">
        <div class="row text-center">
            <a class="back-link main-color" href="/">Voltar</a>
            <div id="img-container" class="col-md-12">
                <img src="/img/company.svg" alt="Company">
            </div>
            <div class="col-md-12">
                <h1 class="main-color">{{ $job->title }}</h1>
                <p class="bold">Quem eles estão buscando:</p>
                <p class="job-desc">{{ $job->description }}</p>
                <p><span class="bold">O salário informado é de:</span> R{{ $job->salary }}</p>
                <p>
                    Para trabalhar na <span class="bold main-color">{{ $job->company }}</span> envie um e-mail para: <a
                        class="main-color" href="mail:to{{ $job->email }}">{{ $job->email }}</a>
                </p>
            </div>
        </div>
    </div>
@endsection
