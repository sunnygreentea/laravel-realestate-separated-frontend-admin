@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.listing.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.listings.update", [$listing->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.listing.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $listing->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.listing.fields.name_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="ptype_id">{{ trans('cruds.listing.fields.ptype') }}</label>
                <select class="form-control" id="ptype_id" name="ptype_id">
                    <option value="">Select</option>
                    @foreach ($propertytypes as $ptype)
                    <option value="{{$ptype->id}}" @if ($listing->ptype_id==$ptype->id)selected @endif>{{$ptype->name}}</option> 
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="required" for="city_id">{{ trans('cruds.listing.fields.city') }}</label>
                <select class="form-control" id="city_id" name="city_id">
                    <option value="">Select</option>
                    @foreach ($cities as $city)
                    <option value="{{$city->id}}" @if ($listing->city_id==$city->id)selected @endif>{{$city->name}}</option> 
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="required" for="is_featured">{{ trans('cruds.listing.fields.featured') }}</label><br>
                <input type="radio" name="is_featured" value=1 @if($listing->is_featured==1) checked @endif>Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="is_featured"  value=0 @if($listing->is_featured==0) checked @endif>No
            </div>

            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.listing.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" id="price" value="{{ old('price', $listing->price) }}" required>
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.listing.fields.price_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="beds">{{ trans('cruds.listing.fields.beds') }}</label>
                <select class="form-control" id="beds" name="beds">
                    <option value="">Select</option>
                    <option value=1 @if($listing->beds==1) selected @endif>1</option>
                    <option value=2 @if($listing->beds==2) selected @endif>2</option>
                    <option value=3 @if($listing->beds==3) selected @endif>3</option>
                    <option value=4 @if($listing->beds==4) selected @endif>4</option>
                    <option value=5 @if($listing->beds==5) selected @endif>5</option>
                </select>
            </div>

            <div class="form-group">
                <label class="required" for="baths">{{ trans('cruds.listing.fields.baths') }}</label>
                <select class="form-control" id="baths" name="baths">
                    <option value="">Select</option>
                    <option value=1 @if($listing->baths==1) selected @endif>1</option>
                    <option value=2 @if($listing->baths==2) selected @endif>2</option>
                    <option value=3 @if($listing->baths==3) selected @endif>3</option>
                    <option value=4 @if($listing->baths==4) selected @endif>4</option>
                </select>
            </div>

            <div class="form-group">
                <label for="garage">{{ trans('cruds.listing.fields.garage') }}</label>
                <select class="form-control" id="garage" name="garage">
                    <option value="">Select</option>
                    <option value=1 @if($listing->garage==1) selected @endif>1</option>
                    <option value=2 @if($listing->garage==2) selected @endif>2</option>
                    <option value=3 @if($listing->garage==3) selected @endif>3</option>
                    <option value=4 @if($listing->garage==4) selected @endif>4</option>
                </select>
            </div>

            <div class="form-group">
                <label for="area">{{ trans('cruds.listing.fields.area') }}</label>
                <input class="form-control {{ $errors->has('area') ? 'is-invalid' : '' }}" type="text" name="area" id="area" value="{{ old('area', $listing->area) }}" required>
                @if($errors->has('area'))
                    <div class="invalid-feedback">
                        {{ $errors->first('area') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.listing.fields.area_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="area">{{ trans('cruds.listing.fields.amenties') }}</label>
                <textarea class="form-control" rows="5" id="amenties" name="amenties">{{ old('amenties', $listing->amenties) }}</textarea>
            </div>

            <div class="form-group">
                <label for="description">{{ trans('cruds.listing.fields.description') }}</label>
                <textarea class="form-control" rows="5" id="description" name="description">{{ old('description', $listing->description) }}</textarea>
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