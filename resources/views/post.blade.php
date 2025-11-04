@extends('app')

@section('title', 'Posts - Travel Gallery')

@section('content')
<div class="container">
    <div class="header">
        <h1>📝 Semua Destinasi Wisata</h1>
        <p>Koleksi lengkap destinasi wisata yang telah dikunjungi</p>
        <span class="badge">Total: {{ $totalPosts }} Destinasi</span>
    </div>

    <div class="posts-grid">
        @forelse($posts as $post)
        <div class="post-card">
            <div class="post-image">
                <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
            </div>
            <div class="post-content">
                <h3>{{ $post->title }}</h3>
                <p class="location">📍 {{ $post->location }}</p>
                <p class="description">{{ Str::limit($post->description, 100) }}</p>
                <div class="post-meta">
                    <span>🕒 {{ $post->created_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>
        @empty
        <div class="empty-state">
            <h3>Belum ada postingan</h3>
            <p>Silakan tambahkan data destinasi wisata terlebih dahulu</p>
        </div>
        @endforelse
    </div>
</div>

@push('styles')
<style>
    .posts-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 25px;
    }

    .post-card {
        background: rgba(255,255,255,0.95);
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .post-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.5);
    }

    .post-image {
        height: 220px;
        overflow: hidden;
    }

    .post-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .post-card:hover .post-image img {
        transform: scale(1.1);
    }

    .post-content {
        padding: 20px;
    }

    .post-content h3 {
        font-size: 20px;
        color: #2c3e50;
        margin-bottom: 8px;
    }

    .post-content .location {
        color: #3498db;
        font-size: 14px;
        margin-bottom: 12px;
    }

    .post-content .description {
        color: #555;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .post-meta {
        color: #999;
        font-size: 12px;
        padding-top: 12px;
        border-top: 1px solid #eee;
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
        .posts-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush
@endsection
