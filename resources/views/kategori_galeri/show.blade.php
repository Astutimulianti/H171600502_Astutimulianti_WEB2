@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Galeri</div>

                <div class="card-body">
                   
                   <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">ID</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $KategoriGaleri ->id !!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $KategoriGaleri ->nama !!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">User id</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $KategoriGaleri ->users_id!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Creat</label> 
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $KategoriGaleri ->created_at!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Update</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $KategoriGaleri ->updated_at!!}</label>
                      </div>

                      <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                      <a href="{!! route('kategori_galeri.index')!!}" class="btn btn-primary">Back</a>
                    </div>
                  </div>
                </div>
              </div>
                </div>
            </div>
        </div>
@endsection

