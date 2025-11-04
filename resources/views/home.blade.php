
@extends('app')

@section('title', 'Home - Travel Gallery')

@section('content')
<div class="container">
    <div class="header">
        <h1>🌍 Selamat Datang di Travel Gallery</h1>
        <p>Jelajahi destinasi wisata menakjubkan dari seluruh dunia</p>
        <span class="badge">📊 Total Destinasi: {{ $totalPosts }}</span>
    </div>

    <div class="gallery">
        @forelse($featuredPosts as $post)
        <div class="gallery-item">
            <img src="{{ asset('images/' . $post->image_url) }}" alt="{{ $post->title }}">

            <div class="overlay">
                <div class="title">{{ $post->title }}</div>
                <div class="location">📍 {{ $post->location }}</div>
            </div>
        </div>
        @empty
        <div class="empty-state">
            <h3>Belum ada destinasi yang ditambahkan</h3>
            <p>Silakan tambahkan data destinasi wisata</p>
        </div>
        @endforelse
    </div>
</div>

@push('styles')
<style>
    .gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .gallery-item {
        position: relative;
        height: 250px;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 15px rgba(0,0,0,0.4);
    }

    .gallery-item:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 8px 25px rgba(0,0,0,0.6);
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .gallery-item .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
        padding: 20px;
        color: white;
    }

    .gallery-item .title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .gallery-item .location {
        font-size: 14px;
        opacity: 0.9;
    }

    .empty-state {
        grid-column: 1 / -1;
        text-align: center;
        padding: 60px 20px;
        background: rgba(255,255,255,0.1);
        border-radius: 8px;
        color: white;
    }

    @media (max-width: 768px) {
        .gallery {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush
@endsection

