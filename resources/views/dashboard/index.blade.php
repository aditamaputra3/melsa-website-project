@extends('layout.layout-admin')

@section('title')
    {{ 'Dashboard' }}
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box melsared1">
                        <div class="inner">
                            <h3>{{ $ProdukKue }}</h3>
                            <p>Produk Melsa Kue</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-clipboard"></i>
                        </div>
                        <a href="{{ route('produk.index', ['jenis_produk' => 'kue']) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box melsagray">
                        <div class="inner">
                            <h3>{{ $ProdukCatering }}</h3>
                            <p>Produk Melsa Catering</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-albums"></i>
                        </div>
                        <a href="{{ route('produk.index', ['jenis_produk' => 'catering']) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gray">
                        <div class="inner">
                            <h3>{{$Kategori}}</h3>
                            <p>Kategori</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-albums"></i>
                        </div>
                        <a href="{{ route('kategori.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>


                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>{{$Admin}}</h3>
                            <p>Admin</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-people"></i>
                        </div>
                        <a href="{{ route('admin.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
