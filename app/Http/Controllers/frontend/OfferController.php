<?php

namespace App\Http\Controllers\frontend;

use App\Models\Offer;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(12);
        return view('frontend.offers.all-offers', compact('categories'));
    }

    public function offerIndex($slug)
    {
        // dd($slug);
        $category = Category::where('slug', $slug)->firstOrFail();
        $offers = $category->offers()->latest()->paginate(12, ['*'], 'offer');
        $relatedCategories = Category::where('id', '!=', $category->id)->latest()->limit(6)->get();
        return view('frontend.offers.offer-index', compact('category', 'relatedCategories', 'offers'));
    }

    public function OfferShow($categorySlug, $offerSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $offer = Offer::where('category_id', $category->id)->where('slug', $offerSlug)->firstOrFail();
        $relatedOffers = Offer::where('category_id', $category->id)->where('id', '!=', $offer->id)->latest()->limit(6)->get();
        // dd($relatedOffers);
        return view('frontend.offers.offer-show', compact('category', 'offer', 'relatedOffers'));
    }
}
