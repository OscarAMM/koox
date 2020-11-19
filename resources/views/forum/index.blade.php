@extends('layouts.app')
@section('content')
<div class="container">
    <div class="pricing-header  px-3  pb-md-4 mx-auto text-center">
        <h1 class=" text-monospace font-weight-bold border-bottom">Foro Ko'ox tsikbal</h1>
        <div class="btn-group mb-2">
            <a href="{{route('home')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left"
                    style="color:black;"></i>
                Regresar</a>
            <a href="{{route('forum_create')}}" class="btn btn-sm btn-link"><i class="fas fa-plus"
                    style="color:green;"></i> Crear tópico</a>
        </div>
    </div>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
        <div class="media text-muted pt-3">

            <i class="fas fa-user-tie fa-2x mt-1 mr-2"></i>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
        </div>
        <small class="d-block text-right mt-3">
            <a href="#">All updates</a>
        </small>
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Suggestions</h6>
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff"
                    dy=".3em">32x32</text>
            </svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name</strong>
                    <a href="#">Follow</a>
                </div>
                <span class="d-block">@username</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff"
                    dy=".3em">32x32</text>
            </svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name</strong>
                    <a href="#">Follow</a>
                </div>
                <span class="d-block">@username</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff"
                    dy=".3em">32x32</text>
            </svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name</strong>
                    <a href="#">Follow</a>
                </div>
                <span class="d-block">@username</span>
            </div>
        </div>
        <small class="d-block text-right mt-3">
            <a href="#">All suggestions</a>
        </small>
    </div>
</div>
@endsection