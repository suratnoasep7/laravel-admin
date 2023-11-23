@extends('layouts.admin')

@section('styles')
<style type="text/css">
    .img-responsive {
        width: 64px;
        height: 64px;
    }
    .table td, .table th {
        width: 50%;
    }
</style>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.brand.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.brand.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            {{ trans('cruds.brand.fields.id') }}
                        </td>
                        <td>
                            {{ $brand->id }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ trans('cruds.brand.fields.name') }}
                        </td>
                        <td>
                            {{ $brand->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.brand.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection