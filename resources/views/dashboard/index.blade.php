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
                          <div class="small-box bg-info">
                            <div class="inner">
                                <h3>40</h3>
                                <p>Produk</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-clipboard"></i>
                            </div>
                            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>

                          
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                                <h3>9</h3>
                                <p>Kategori</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-albums"></i>
                            </div>
                            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>

                          
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>5</h3>
                                <p>Admin</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-people"></i>
                            </div>
                            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                      {{-- <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$Koordinator}}</h3>
                                <p>Koordinator</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-briefcase"></i>
                            </div>
                            <a href="{{ route('dosen.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div> --}}
                      </div>
                      <!-- ./col -->
                  </div>
                  <!-- /.row -->

                  <!-- /.row (main row) -->
              </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
      </div>
      @endsection
