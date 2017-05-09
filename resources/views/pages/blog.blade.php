@extends('layouts.app')

@section('app-name', 'Bootstrap')
@section('title', 'Contact')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

<div class="stripe blog">
    <div class="container">
        <h2 class="stripe-title">Blog Page</h2>
        <p class="lead">Quickly include Bootstrap's CSS and JS into any project. Use your favorite package manager, download the source, or use the Bootstrap CDN.</p>

        <div class="row">
            <div class="col-md-8 mb-3">
                
                <div class="card article">
                  <div class="card-block">
                    <h4 class="card-title">Article title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Article subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Article link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>

                <div class="card article">
                  <div class="card-block">
                    <h4 class="card-title">Article title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Article subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Article link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>

                <div class="card article">
                  <div class="card-block">
                    <h4 class="card-title">Article title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Article subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Article link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>

                <div class="card article">
                  <div class="card-block">
                    <h4 class="card-title">Article title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Article subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Article link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="list-group mb-3">
                  <button type="button" class="list-group-item list-group-item-action active">
                    Cras justo odio
                  </button>
                  <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                  <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                  <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                  <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
                </div>

                <ul class="list-group">
                  <li class="list-group-item justify-content-between">
                    Cras justo odio
                    <span class="badge badge-default badge-pill">14</span>
                  </li>
                  <li class="list-group-item justify-content-between">
                    Dapibus ac facilisis in
                    <span class="badge badge-default badge-pill">2</span>
                  </li>
                  <li class="list-group-item justify-content-between">
                    Morbi leo risus
                    <span class="badge badge-default badge-pill">1</span>
                  </li>
                </ul>
                
            </div>

        </div>
    </div>
</div>

@endsection