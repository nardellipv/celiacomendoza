<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Blog;
use celiacomendoza\CharacteristicCommerce;
use celiacomendoza\Commerce;
use celiacomendoza\CommercePayment;
use celiacomendoza\Product;
use celiacomendoza\Province;
use celiacomendoza\Region;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchCommerceController extends Controller
{
    public function searchCommerce(Request $request)
    {
        $commerces  = Commerce::with(['region','province'])
            ->where('region_id','!=','NULL')
            ->where('province_id', $request->provinceSearch)
            ->where('name','LIKE',"%$request->commerceSearch%")
            ->orderBy('votes_positive', 'DESC')
            ->paginate(6);

        $countCommerce = Commerce::with(['region','province'])
            ->where('region_id','!=','NULL')
            ->where('province_id', $request->provinceSearch)
            ->where('name','LIKE',"%$request->commerceSearch%")
            ->orderBy('votes_positive', 'DESC')
            ->count();

        $regions = Region::where('province_id', $request->provinceSearch)
            ->get();

        $province = Province::where('id', $request->provinceSearch)
            ->first();

        $provinces = Province::orderBy('name', 'ASC')
            ->get();

        $posts = Blog::orderBy('created_at', 'DESC')
            ->take(3)
            ->get();

        return view('web.parts._companies', compact('commerces','countCommerce','regions', 'province','provinces',
            'posts'));
    }

    public function searchOnlyCommerce(Request $request)
    {
        $commerce = Commerce::where('name','LIKE',"%$request->searchCommerce%")
            ->firstOrFail();

        if (!$commerce){
            return back()->with('messageSearch', 'No econtramos ningun local con ese nombre');
        }

        $province = Province::where('id', $commerce->province_id)
            ->first();

        $products = Product::with(['category'])
            ->where('commerce_id', $commerce->id)
            ->where('available', 'YES')
            ->paginate(10);

        $commercePayment = CommercePayment::with(['payment'])
            ->where('commerce_id', $commerce->id)
            ->get();

        $characteristicCommerces = CharacteristicCommerce::with('characteristic')
            ->where('commerce_id', $commerce->id)
            ->get();

        $relateds = Commerce::with(['region', 'province'])
            ->where('province_id', $commerce->province_id)
            ->where('region_id','!=', NULL)
            ->orderByRaw('RAND()')
            ->take(3)
            ->get();

        $provinces = Province::orderBy('name', 'ASC')
            ->get();


        return view('web.parts._dataCommerce', compact('commerce','province','posts','characteristicCommerces',
            'commercePayment','relateds','provinces','products'));
    }
}
