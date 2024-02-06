{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach($penempatans as $penempatan)

        <div class="col-md-12">
            <h2 style="color:blue">{{$penempatan->name}}</h2>
            <div class="jumbotron">
                <div class="row">

                    @forelse($penempatan->siswa ?? [] as $siswa)
                        <div class="col-md-3">
                            <img src="{{asset('image')}}/{{$siswa->image}}" width="210" height="155">
                            <p class="text-right">{{$siswa->nama_siswa}}
                                <span>{{$siswa->No_Telp}}</span>
                            </p>
                            <p class="text-right">
                                <a href="{{ route('detail.sekolah', ['id' => $siswa->id]) }}">
                                    <button class="btn btn-outline-danger">View</button>
                                </a>
                            </p>
                        </div>
                    @empty
                        <p>Tidak ada siswa terkait.</p>
                    @endforelse

                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>
@endsection --}}


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach($penempatans as $penempatan)

        <div class="col-md-12">
          <h2 style="color:blue">{{$penempatan->name}}</h2>
          <div class="jumbotron">
            <div class="row">

                @if($penempatan->siswa && $penempatan->siswa->isNotEmpty())
                @foreach($penempatan->siswa as $siswa)
                    <div class="col-md-3">
                        <img src="{{asset('image')}}/{{$siswa->image}}" width="210" height="155">
                        <p class="text-right">{{$siswa->nama_siswa}}
                            <span>{{$siswa->No_Telp}}</span>
                        </p>
                        <p class="text-right">
                            <a href="{{ route('detail.sekolah', ['id' => $siswa->id]) }}">
                                <button class="btn btn-outline-danger">View</button>
                            </a>
                        </p>
                    </div>
                @endforeach
                @else
                    <p>Tidak ada siswa terkait.</p>
                @endif


            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
</div>
@endsection --}}

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach($penempatans as $penempatan)

        <div class="col-md-12">
          <h2 style="color:blue">{{$penempatan->name}}</h2>
          <div class="jumbotron">
            <div class="row">

              @foreach(App\Models\Siswa::where('penempatan_id', $penempatan->id)->get() as $siswa)

              <div class="col-md-2">
                <img src="{{asset('image')}}/{{$siswa->image}}" width="180" height="180" style="border: 2px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <p class="text-right">{{$siswa->nama_siswa}}
                  <span>{{$siswa->No_Telp}}</span>
                </p>
                <p class="text-right">
                  <a href="{{route('detail',[$siswa->id])}}">
                    <button class="btn btn-outline-danger">View</button>
                  </a>
                </p>
              </div>

              @endforeach

            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
</div>
@endsection --}}


{{-- Sliderr --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach($penempatans as $penempatan)

        <div class="col-md-12">
          <h2 style="color:blue; margin-top: 20px;">{{$penempatan->name}}</h2>
          <div class="jumbotron">
            <div class="row slider px-4">
              {{-- Mulai Perulangan Slider --}}
              @foreach(App\Models\Siswa::where('penempatan_id', $penempatan->id)->get() as $siswa)

              <div class="col-md-2">
                <img src="{{asset('image')}}/{{$siswa->image}}" width="180" height="180" style="border: 2px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <p class="text-right pt-2 px-1">
                    {{$siswa->nama_siswa}}<br>
                    {{$siswa->asal_sekolah->nama_sekolah}}
                </p>
                <p class="text-right px-1">
                  <a href="{{route('detail',[$siswa->id])}}">
                    <button class="btn btn-outline-danger">Lihat</button>
                  </a>
                </p>
              </div>

              @endforeach
              {{-- Akhir Perulangan Slider --}}
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
</div>

 <!-- Sertakan dependensi carousel Slick -->
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

{{-- Inisialisasi Carousel Slick --}}
<script>
    $(document).ready(function(){
        $('.slider').each(function(){
            var slideCount = $(this).find('.col-md-2').length;

            // Periksa jika jumlah elemen kurang dari 6, maka nonaktifkan titik
            var dotsOption = (slideCount >= 6) ? true : false;

            $(this).slick({
                slidesToShow: 6,
                slidesToScroll: 3,
                infinite: true,
                dots: dotsOption,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    });
</script>
@endsection


