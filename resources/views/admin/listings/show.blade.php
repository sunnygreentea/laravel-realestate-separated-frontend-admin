@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.listing.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.listings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.listing.fields.id') }}
                        </th>
                        <td>
                            {{ $listing->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.listing.fields.name') }}
                        </th>
                        <td>
                            {{ $listing->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.listing.fields.agent') }}
                        </th>
                        <td>
                            {{ $listing->user->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.listing.fields.price') }}
                        </th>
                        <td>
                            @money($listing->price)
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.listing.fields.beds') }}
                        </th>
                        <td>
                            {{ $listing->beds }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.listing.fields.baths') }}
                        </th>
                        <td>
                            {{ $listing->baths }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.listing.fields.garage') }}
                        </th>
                        <td>
                            {{ $listing->garage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.listing.fields.area') }}
                        </th>
                        <td>
                            {{ $listing->area }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.listing.fields.amenties') }}
                        </th>
                        <td>
                            {{ $listing->amenties }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.listing.fields.description') }}
                        </th>
                        <td>
                            {{ $listing->description }}
                        </td>
                    </tr>
                   
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.listings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection