@extends('layouts.main')
@section('main-content')
    {{-- JUMBOTRON --}}
    <div class="home-jumbotron">
        <div class="home-layover"></div>
        <div class="jumbotron-banner">
            <h1 class="jumbotron-title">interior decorations</h1>
            <hr class="decorative-line">
            <p class="jumbotron-subtitle">looking for furniture for your living room</p>
            <div class="jumbotron-btn btn">
                <a href="#">
                    shop now
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    {{-- EXPLORER BANNER --}}
    <section class="explore-banner">
        <div class="explore-banner-options">
            <div class="explore-banner-set">
                <img src="{{ asset('images/lamps.jpg') }}" alt="Lamps image">
                <div class="banner-title">
                    <h2>lighting collections</h2>
                    <a href="#">
                        Explorer
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="explore-banner-set">
                <img src="{{ asset('images/audio-decor.jpg') }}" alt="Audio decor image">
                <div class="banner-title">
                    <h2>audio decor</h2>
                    <a href="#">
                        view collections
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="explore-banner-set">
                <img src="{{ asset('images/new-arrivals.jpg') }}" alt="New arrivals image">
                <div class="banner-title">
                    <h2>new arrivals</h2>
                    <a href="#">
                        shop now
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- PRODUCT CARD --}}
    <section class="product-card">
        <div class="product-card-title title-set">
            <h2>best selling products</h2>
            <hr class="decorative-line">
            <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod temper!</p>
        </div>
        <div class="product-card-list">
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/egg-slicer.jpg') }}" alt="Chair image">
                    </div>
                    <div class="product-info">
                        <p>form egg slicer</p>
                        <span>$35.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/pendant-lamp.jpg') }}" alt="Chair image">
                        <span class="scount badge">&#8722;29&#37;</span>
                    </div>
                    <div class="product-info">
                        <p>cymbal pendant</p>
                        <span>$25.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/chair-wood-legs.jpg') }}" alt="Chair image">
                    </div>
                    <div class="product-info">
                        <p>chair wood legs</p>
                        <span>$30.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/oil-lamp.jpg') }}" alt="Chair image">
                    </div>
                    <div class="product-info">
                        <p>light oil lamp</p>
                        <span>$65.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/shaker.jpg') }}" alt="Chair image">
                    </div>
                    <div class="product-info">
                        <p>line cocktail shaker</p>
                        <span>$65.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/piep-show.jpg') }}" alt="Chair image">
                    </div>
                    <div class="product-info">
                        <p>piep show</p>
                        <span>$15.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/herit-chair.jpg') }}" alt="Chair image">
                    </div>
                    <div class="product-info">
                        <p>herit chair</p>
                        <span>$55.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/table-lamp.jpg') }}" alt="Chair image">
                    </div>
                    <div class="product-info">
                        <p>buddy table lamp</p>
                        <span>$35.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/clock.jpg') }}" alt="Chair image">
                    </div>
                    <div class="product-info">
                        <p>picto wall clock</p>
                        <span>$15.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/brush-set.jpg') }}" alt="Chair image">
                        <span class="status badge">New</span>
                    </div>
                    <div class="product-info">
                        <p>brush set small</p>
                        <span>$65.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/thermos.jpg') }}" alt="Chair image">
                    </div>
                    <div class="product-info">
                        <p>cru thermos jug</p>
                        <span>$45.00</span>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="product-img">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/bowl.jpg') }}" alt="Chair image">
                    </div>
                    <div class="product-info">
                        <p>urkiola bowl</p>
                        <span>$85.00</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="product-card-btn btn">
            <a href="#">
                Load More
                <i class="fas fa-arrow-down"></i>
            </a>
        </div>
    </section>
    {{-- BLOG POST --}}
    <section class="blog-post">
        <div class="container">
            <div class="blog-post-title title-set">
                <h2>latest blog posts</h2>
                <hr class="decorative-line">
                <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod temper!</p>
            </div>
            <div class="blog-post-list">
                <div class="card">
                    <a href="#">
                        <div class="post-img">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/record-player.jpg') }}" alt="Record player image">
                        </div>
                        <div class="post-info">
                            <p>
                                <span>By</span> admin <span>on</span> February 21, 2020
                            </p>
                            <p>The Kozmophone is a Holographic, Bluetooth Turntable</p>
                            <p>Imagine a turntable with a portable and detachable phonograph-style horn speaker and a miniature.</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#">
                        <div class="post-img">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/pi.jpg') }}" alt="Pi image">
                        </div>
                        <div class="post-info">
                            <p>
                                <span>By</span> admin <span>on</span> February 21, 2020
                            </p>
                            <p>The Pi Offers a Futuristic Slice of Proximity Charging For New iPhones</p>
                            <p>This startup founded by MIT grds wants users to charge up to four iPhones at the same time.</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#">
                        <div class="post-img">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/vases.jpg') }}" alt="Vases image">
                        </div>
                        <div class="post-info">
                            <p>
                                <span>By</span> admin <span>on</span> February 21, 2020
                            </p>
                            <p>Poilu Vases Are 3D Printed with Implanted "Hair"</p>
                            <p>A collection of 3D printed vases where "hair" is implanted during the printing process.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- NEWSLETTER --}}
    <section class="newsletter">
        <div class="newsletter-title title-set">
            <h2>subscribe our newsletter</h2>
            <hr class="decorative-line">
            <p>Sign up for our newsletter to be updated on the latest designd, exclusive offers, inspiration and tips!</p>
        </div>        
        <div class="newsletter-sign">
            <input type="text" placeholder="Your email address">
            <div class="btn">
                <a href="#">
                    Subscribe
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    {{-- SERVICES --}}
    <section class="services">
        <div class="container">
            <ul class="services-list">
                <li>
                    <i class="fas fa-plane fa-rotate-270"></i>
                    <div class="services-text">
                        <span>Free Shipping</span>
                        <p>Free shipping for all US order</p>
                    </div>
                </li>
                <li>
                    <i class="far fa-life-ring"></i>
                    <div class="services-text">
                        <span>Support 24/7</span>
                        <p>we support 24 hours a day</p>
                    </div>
                </li>
                <li>
                    <i class="fas fa-sync-alt"></i>
                    <div class="services-text">
                        <span>30 days return</span>
                        <p>you have 30 days to return</p>
                    </div>
                </li>
                <li>
                    <i class="fas fa-shield-alt"></i>
                    <div class="services-text">
                        <span>Payment 100% Secure</span>
                        <p>Payment 100% Secure</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

@endsection