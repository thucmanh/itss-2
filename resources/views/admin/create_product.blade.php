@extends('layout_admin')
@section('content')
<!--? slider Area Start-->
<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="{{ URL::to('/admin/home-page') }}" class="nav-link active">管理ページ</a>
        </li>
        <li class="nav-item">
            <a href="{{ URL::to('/home-page') }}" class="nav-link active">ホームページ</a>
        </li>
    </ul>
</div>

<section class="slider-area slider-area2">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-11 col-md-12">
                        <div class="hero__caption hero__caption2">
                            <h1 data-animation="bounceIn" data-delay="0.2s">新しい材料を作成する</h1>
                            <!-- breadcrumb Start-->

                            <!-- breadcrumb End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
        @endif
        <!-- <div class="form-input">
            <label for="email" class="col-form-label text-md-right">アバター</label>
            <input type="file" name="url_img" value="{{ old('url_img') }}" required accept="image/png, image/jpeg">
            @error('avatar_url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div> -->
        <div class="form-group">
            <label for="product_name">材料名：</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required="required">
        </div>
        <div class="form-group">
            <label for="price">お金 (１キロガム)</label>
            <input type="number" min="0" step="0.1" id="product_price" name="product_price">
        </div>
        <div class="form-group">
            <label for="price">写真をアプロード</label>
            <input type="file" name="url_img" required accept="image/png, image/jpeg">
        </div>

        <div class="form-group" >
            <button style="cursor:pointer" type="submit" class="btn btn-primary">材料を追加</button>
        </div>
    </form>
</div>
@endsection