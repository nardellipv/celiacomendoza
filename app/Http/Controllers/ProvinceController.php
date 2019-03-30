<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Blog;
use celiacomendoza\Commerce;
use celiacomendoza\Province;
use celiacomendoza\Region;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function listArgentina()
    {
        $commerces = Commerce::with('region')
            ->where('region_id','!=','NULL')
            ->orderBy('votes_positive', 'DESC')
            ->paginate(12);

        $provinces = Province::orderBy('name', 'ASC')
            ->get();

        $posts = Blog::orderBy('created_at', 'DESC')
            ->skip(1)
            ->take(2)
            ->get();

        $postLast = Blog::latest()->first();

        return view('web.parts.country._companiesArg', compact('commerces','postLast','posts','provinces'));
    }

    public function listProvince($slug)
    {

        $province = Province::where('slug', $slug)
            ->first();

        $commerces = Commerce::with('region')
            ->where('region_id','!=','NULL')
            ->where('province_id', $province->id)
            ->orderBy('votes_positive', 'DESC')
            ->paginate(12);

        $provinces = Province::orderBy('name', 'ASC')
            ->get();

        $regions = Region::where('province_id', $province->id)
            ->get();

        $posts = Blog::orderBy('created_at', 'DESC')
            ->skip(1)
            ->take(2)
            ->get();

        $postLast = Blog::latest()->first();

        return view('web.parts.country._searchRegionArg', compact('commerces','provinces','province','postLast','posts','regions'));
    }

    public function listSearchProvince(Request $request, $slug)
    {
        $region = Region::where('id', $request['region'])
            ->first();

        $commerces = Commerce::with('region')
            ->where('region_id','!=','NULL')
            ->where('region_id', $region->id)
            ->orderBy('votes_positive', 'DESC')
            ->paginate(12);

        $province = Province::where('slug', $slug)
            ->first();

        $provinces = Province::orderBy('name', 'ASC')
            ->get();

        $regions = Region::where('province_id', $region->id)
            ->get();

        $posts = Blog::orderBy('created_at', 'DESC')
            ->skip(1)
            ->take(2)
            ->get();

        $postLast = Blog::latest()->first();

        return view('web.parts.country._searchRegionArg', compact('commerces','provinces','region','postLast','posts','regions',
            'province'));
    }
}
