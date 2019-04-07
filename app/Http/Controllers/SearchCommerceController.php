<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Blog;
use celiacomendoza\Commerce;
use celiacomendoza\Province;
use celiacomendoza\Region;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchCommerceController extends Controller
{
    public function searchCommerce(Request $request)
    {
        $searchCommerce = Commerce::with(['region','province'])
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

        return view('web.parts._searchCommerce', compact('searchCommerce','countCommerce','regions', 'province','provinces',
            'posts'));
    }

    public function searchOnlyCommerce(Request $request)
    {
        $commerce = Commerce::with(['region','province'])
            ->where('name','LIKE',"%$request->searchCommerce%")
            ->first();

        if (!$commerce){
            return back()->with('messageSearch', 'No econtramos ningun local con ese nombre');
        }
        return view('web.parts._dataCommerce', compact('commerce'));
    }
}
