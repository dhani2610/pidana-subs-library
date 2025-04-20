@extends('pidana.layouts.layout')

@section('content')
    <style>
        :root {
            --default-font: "Roboto", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --heading-font: "Nunito", sans-serif;
            --nav-font: "Inter", sans-serif;
        }

        /* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
        :root {
            --background-color: #ffffff;
            /* Background color for the entire website, including individual sections */
            --default-color: #212529;
            /* Default color used for the majority of the text content across the entire website */
            --heading-color: #2d465e;
            /* Color for headings, subheadings and title throughout the website */
            --accent-color: #002f84;
            /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
            --surface-color: #ffffff;
            /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
            --contrast-color: #ffffff;
            /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
        }

        /* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
        :root {
            --nav-color: #212529;
            /* The default color of the main navmenu links */
            --nav-hover-color: #002f84;
            /* Applied to main navmenu links when they are hovered over or active */
            --nav-mobile-background-color: #ffffff;
            /* Used as the background color for mobile navigation menu */
            --nav-dropdown-background-color: #ffffff;
            /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
            --nav-dropdown-color: #212529;
            /* Used for navigation links of the dropdown items in the navigation menu. */
            --nav-dropdown-hover-color: #002f84;
            /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
        }

        .pricing .pricing-card {
            height: 100%;
            padding: 2rem;
            background: var(--surface-color);
            border-radius: 1rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .pricing .pricing-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .pricing .pricing-card.popular {
            background: var(--accent-color);
            color: var(--contrast-color);
        }

        .pricing .pricing-card.popular h3,
        .pricing .pricing-card.popular h4 {
            color: var(--contrast-color);
        }

        .pricing .pricing-card.popular .price .currency,
        .pricing .pricing-card.popular .price .amount,
        .pricing .pricing-card.popular .price .period {
            color: var(--contrast-color);
        }

        .pricing .pricing-card.popular .features-list li {
            color: var(--contrast-color);
        }

        .pricing .pricing-card.popular .features-list li i {
            color: var(--contrast-color);
        }

        .pricing .pricing-card.popular .btn-light {
            background: var(--contrast-color);
            color: var(--accent-color);
        }

        .pricing .pricing-card.popular .btn-light:hover {
            background: color-mix(in srgb, var(--contrast-color), transparent 10%);
        }

        .pricing .pricing-card .popular-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--contrast-color);
            color: var(--accent-color);
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-size: 0.875rem;
            font-weight: 600;
            box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.08);
        }

        .pricing .pricing-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .pricing .pricing-card .price {
            margin-bottom: 1.5rem;
        }

        .pricing .pricing-card .price .currency {
            font-size: 1.5rem;
            font-weight: 600;
            vertical-align: top;
            line-height: 1;
        }

        .pricing .pricing-card .price .amount {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1;
        }

        .pricing .pricing-card .price .period {
            font-size: 1rem;
            color: color-mix(in srgb, var(--default-color), transparent 40%);
        }

        .pricing .pricing-card .description {
            margin-bottom: 2rem;
            font-size: 0.975rem;
        }

        .pricing .pricing-card h4 {
            font-size: 1.125rem;
            margin-bottom: 1rem;
        }

        .pricing .pricing-card .features-list {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem 0;
        }

        .pricing .pricing-card .features-list li {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .pricing .pricing-card .features-list li i {
            color: var(--accent-color);
            margin-right: 0.75rem;
            font-size: 1.25rem;
        }

        .pricing .pricing-card .btn {
            width: 100%;
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            font-weight: 500;
            border-radius: 50px;
        }

        .pricing .pricing-card .btn.btn-primary {
            background: var(--accent-color);
            border: none;
            color: var(--contrast-color);
        }

        .pricing .pricing-card .btn.btn-primary:hover {
            background: color-mix(in srgb, var(--accent-color), transparent 15%);
        }
    </style>
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Hero Section with Full-Screen Background -->
    <div class="container-fluid hero-section"
        style="position: relative; background: url('{{ asset('storage/photos/IMG_3084.JPG') }}') no-repeat center center fixed; background-size: cover; height: 65vh; border-radius: 0;">
        <!-- Overlay transparan untuk meningkatkan keterbacaan teks -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;">
        </div>

        <!-- Konten Utama tanpa latar belakang putih -->
        <div class="content text-center" style="position: relative; z-index: 2; padding-top: 15vh;">
            <div class="col-md-8 mx-auto text-white">
                <h1 class="display-4 text-shadow">Library Hukum</h1>
                <p class="lead text-shadow">Akses koleksi buku dan materi hukum terbaik di ujung jari Anda</p>
            </div>
        </div>
    </div>

    <!-- Library Content Section -->
    <section class="library-section py-5 mb-5">
        <div class="container">
            <!-- Judul dan Tombol Berlangganan -->
            <div class="row justify-content-between align-items-center mb-4">
                <div class="col-lg-6">
                    <h2 class="mb-0">Koleksi Buku Kami</h2>
                    <p class="text-muted">Dapatkan akses ke berbagai buku hukum berkualitas</p>

                    <!-- Koleksi Buku dalam grid -->
                    <div class="row g-4">
                        @foreach ($buku as $item)
                            <div class="col-md-4">
                                <div class="card h-90 shadow-sm border-0 rounded-lg overflow-hidden">
                                    <!-- Gambar Buku -->
                                    <img src="{{ asset('assets/img/cover/' . $item->cover) }}"
                                        class="card-img-top img-thumbnail" alt="Judul Buku 1"
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $item->title }}</h5>
                                        <p class="card-text text-muted">{{ $item->deskripsi }}</p>
                                        @if (Auth::guard('admin')->check() != null)
                                            @php
                                                $transaksi = \App\Models\Transaksi::where(
                                                    'paket_id',
                                                    Auth::guard('admin')->user()->id_paket,
                                                )
                                                    ->orderBy('created_at', 'desc')
                                                    ->first();
                                                if (!empty($transaksi)) {
                                                    $expired = \Carbon\Carbon::now()->gt(
                                                        \Carbon\Carbon::parse($transaksi->sampai_tanggal),
                                                    );
                                                    $fresh = false;
                                                } else {
                                                    $expired = [];
                                                    $fresh = true;
                                                }
                                            @endphp
                                            @if (!empty($expired) || $fresh == true)
                                                @if ($fresh == false)
                                                    <a href="#pricing"
                                                        class="btn btn-warning mt-2 w-100 shadow-sm">Berlangganan</a>
                                                @else
                                                    <a href="#pricing"
                                                        class="btn btn-warning mt-2 w-100 shadow-sm">Berlangganan</a>
                                                @endif
                                            @else
                                                <a href="{{ asset('documents/pdf/' . $item->file) }}" target="_blank"
                                                    class="btn btn-warning mt-2 w-100 shadow-sm">Lihat PDF</a>
                                            @endif
                                        @else
                                            <a href="{{ url('admin/login') }}" target="_blank"
                                                class="btn btn-warning mt-2 w-100 shadow-sm">Lihat PDF</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- Library Content Section -->

            <!-- Pricing Section -->
            <section id="pricing" class="pricing section light-background">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Harga Layanan</h2>
                    <p>Kami menawarkan berbagai paket berlangganan buku hukum pidana yang dirancang untuk menunjang
                        pemahaman dan penerapan hukum secara mendalam dan terstruktur.</p>

                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row g-4 justify-content-center">

                        @foreach ($data as $item)
                            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="pricing-card popular">
                                    <div class="popular-badge">Most Popular</div>
                                    <h3>{{ $item->nama }}</h3>
                                    <div class="price">
                                        @if (!empty($item->harga_coret) && $item->harga_coret != 0)
                                            <div class="old-price mb-1">
                                                <i>
                                                    <span class="text-white" style="text-decoration: line-through;">
                                                        Rp{{ number_format($item->harga_coret, 0, ',', '.') }}
                                                    </span>
                                                </i>
                                            </div>
                                        @endif
                                        <span class="currency">Rp</span>
                                        <span class="amount">{{ number_format($item->harga, 0, ',', '.') }}</span>
                                        <span class="period">/ {{ $item->type }}</span>
                                    </div>

                                    <p class="description">Dapatkan akses eksklusif ke berbagai pembahasan mendalam seputar
                                        hukum pidana. Dengan berlangganan, Anda akan selalu terupdate dengan analisis kasus
                                        terkini, interpretasi pasal-pasal penting, serta panduan praktis yang membantu
                                        pemahaman hukum secara menyeluruh.</p>


                                    <h4>Featured Included:</h4>
                                    <ul class="features-list" style="margin-bottom: 22%">
                                        @foreach (json_decode($item->benefit) as $index => $benefit)
                                            <li>
                                                <i class="bi bi-check-circle-fill"></i>
                                                {{ $benefit }}
                                            </li>
                                        @endforeach
                                    </ul>


                                    <a href="{{ route('checkout', $item->id) }}" class="btn btn-light mt-3"
                                        data-id="{{ $item->id }}">
                                        Subscribe Now <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </section><!-- /Pricing Section -->

        @endsection
