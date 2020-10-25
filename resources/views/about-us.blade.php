@extends('layouts.front')

@section('content')
<style>
    .social-link {
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        border-radius: 50%;
        transition: all 0.3s;
        font-size: 0.9rem;
    }

    .social-link:hover,
    .social-link:focus {
        background: #ddd;
        text-decoration: none;
        color: #555;
    }
</style>
<div class="bg-light">
    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6">
                <h1 class="display-4">About Us</h1>
                <!-- <p class="lead text-muted mb-0">Create a minimal about us page using Bootstrap 4.</p> -->
                <!-- <p class="lead text-muted">Snippet by <a href="https://bootstrapious.com/snippets" class="text-muted"> -->
                <!-- <u>Bootstrapious</u></a> -->
                </p>
            </div>
            <div class="col-lg-6 d-none d-lg-block"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid"></div>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container">
        {!! $content->content !!}
    </div>
</div>
@endsection