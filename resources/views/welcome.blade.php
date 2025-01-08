<?php 
   $user = Auth::user();
?>
<x-app-layout title="Beranda">
    <section class="relative h-screen video-section">
        <!-- Video Background -->
        <video 
            class="absolute top-0 left-0 w-full h-full object-cover"
            autoplay 
            loop 
            muted 
            playsinline
        >
            <source src="{{ asset('videos/hero-background.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-80"></div>

        <!-- Content -->
        <div class="relative z-10 flex items-center justify-center h-full text-white container mx-auto">
            
            <div class="text-center max-w-[900px] space-y-8 mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white">Kemitraan Strategis untuk Masa Depan UMKM anda!</h1>
                <p class="sm:text-lg md:text-xl mb-8 text-white">Melalui dukungan teknologi dan jaringan luas, kami membantu UMKM berkembang dan siap menghadapi era digital. Bersama kami, setiap langkah bisnis Anda menjadi lebih terarah, kompetitif, dan berdaya saing.</p>
            </div>
        </div>

    </section>
    {{-- <section class="relative h-screen container py-32">
        loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet loremipsum dolor situ amet
    </section> --}}
</x-app-layout>
