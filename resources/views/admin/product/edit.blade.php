@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.product.title_singular') }}
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route("admin.product.update", [$id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="parent">{{ trans('cruds.product.fields.kategori_produk') }}</label>
                <select class="form-control js-example-basic-single {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="id_kategori_produk" id="id_kategori_produk">
                    <option value="" selected disabled>-- Pilih Kategori Produk</option>
                    @foreach($category as $id => $item)
                        <option value="{{ $item->id }}" {{  $data->id_kategori_produk == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_kategori_produk'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_kategori_produk') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.kategori_produk_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="parent">{{ trans('cruds.product.fields.kriteria_produk') }}</label>
                <select class="form-control js-example-basic-single {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="id_criteria" id="id_criteria">
                    <option value="" selected disabled>-- Pilih Kriteria Produk</option>
                    @foreach($criteria as $id => $item)
                        <option value="{{ $item->id }}" {{  $data->id_criteria == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_criteria'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_criteria') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.kriteria_produk_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="parent">{{ trans('cruds.product.fields.brand_produk') }}</label>
                <select class="form-control js-example-basic-single {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="id_brand" id="id_brand">
                    <option value="" selected disabled>-- Pilih Brand Produk</option>
                    @foreach($brand as $id => $item)
                        <option value="{{ $item->id }}" {{  $data->id_brand == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_brand'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_brand') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.brand_produk_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.product.fields.nama_produk') }}</label>
                <input class="form-control {{ $errors->has('nama_produk') ? 'is-invalid' : '' }}" type="text" name="nama_produk" id="nama_produk" value="{{ old('nama_produk', $data->nama_produk) }}" required autocomplete="">
                @if($errors->has('nama_produk'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_produk') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.nama_produk_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="deskripsi_produk">{{ trans('cruds.product.fields.deskripsi_produk') }}</label>
                <textarea id="editor" class="form-control {{ $errors->has('deskripsi_produk') ? 'is-invalid' : '' }}" name="deskripsi_produk" rows="10" cols="50" autocomplete="">{{  $data->deskripsi_produk ? $data->deskripsi_produk : '' }}</textarea>
                @if($errors->has('deskripsi_produk'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deskripsi_produk') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.deskripsi_produk_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.product.fields.harga_produk') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="number" name="harga_produk" id="harga_produk" value="{{ old('harga_produk', $data->harga_produk) }}" required autocomplete="">
                @if($errors->has('harga_produk'))
                    <div class="invalid-feedback">
                        {{ $errors->first('harga_produk') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.harga_produk_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
</script>
@endsection