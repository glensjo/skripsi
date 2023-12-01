@extends('layouts.guest')
@section('content')
    
    <br><br><br><br><br><br>
    <section id="catalog" style="position: relative;">
        <div class="separator"></div>
        <div class="container-fluid">
            <div class="col-md-12 text-center">
                <h3 class="section-title wow fadeInUp">Our Catalog</h3>
                <p class="subheading wow fadeInUp">Ciptakan produk dan promosikan <i>brand</i> bersama <span class="highlight">cigem creative</span>.</p>
            </div>
            <div id="filters-container-fullwidth" class="cbp-l-filters-alignCenter wow fadeInUp">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Semua
                <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".Convection" class="cbp-filter-item">Convection
                <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".Merchandise" class="cbp-filter-item">Merchandise
                <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".Printing" class="cbp-filter-item">Printing
                <div class="cbp-filter-counter"></div>
                </div>
            </div>
            <div id="grid-container-fullwidth" class="cbp-l-grid-fullScreen">
            <!-- show product with foreach from database -->
            <ul>
			@foreach ($dtpr as $i => $m)
                <li class="cbp-item effect effects {{ $m->category }}">
                    <div class="img">
                        <img src="{{ url('/photo products/'.$m->photo) }}" class="img-responsive" alt="Kaos" />
                        <div class="overlay">
                            <ul class="expand">
                            <li class="cbp-l-icon">
                                <a href="/products/{{ $m->product_code }}"  data-title="Kaos">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <!-- <li class="cbp-l-icon">
                                <a href="projects/project1.html" class="cbp-singlePage">
                                    <i class="icon-link"></i>
                                </a>
                            </li> -->
                            <li class="cbp-l-caption-title">{{ $m->product_name }}</li>
                            <li class="cbp-l-caption-desc">{{ $m->product_code }}</li>
                            </ul>
                        </div>
                    </div>
                </li>
			@endforeach    
            </ul>
            </div>            
        </div>
    </section>
@endsection