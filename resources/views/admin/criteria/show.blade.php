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
        {{ trans('global.show') }} {{ trans('cruds.criteria.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.criterias.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            {{ trans('cruds.criteria.fields.id') }}
                        </td>
                        <td>
                            {{ $criteria->id }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ trans('cruds.criteria.fields.name') }}
                        </td>
                        <td>
                            {{ $criteria->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.criterias.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection