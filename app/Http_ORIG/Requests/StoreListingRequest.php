<?php

namespace App\Http\Requests;

use App\Listing;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreListingRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('listing_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'       => [
                'required',
            ],
            'ptype_id'       => [
                'required',
            ],
            'city_id'       => [
                'required',
            ],
            'price'       => [
                'required',
            ],
            'beds'       => [
                'required',
            ],
            'baths'       => [
                'required',
            ],
            'area'       => [
                'required',
            ],
            'description'  => [
                'required',
            ],


        ];
    }
}
