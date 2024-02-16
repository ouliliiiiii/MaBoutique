<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduitsRequest;
use App\Http\Requests\UpdateProduitsRequest;
use App\Models\Category;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = trim($request->get('q'));
        /* dd($key); */
       /*  $posts = Post::query()
                 ->where('title', 'like', "%{$key}%")
                 ->orWhere('content', 'like', "%{$key}%")
                 ->orderBy('created_at', 'desc')
              ->get(); */

    //recuperer le parametre passe en ur
        $cate=$request->query('cate');
        $page=$request->query('page');
        $size=$request->query('size');
        if(!$page)
            $page=1;
        if(!$size)
            $size=8;

        $categories = Category::all();
        $rech = trim($request->query('q'));

    //Select * from produits where category_id=? 
        $produit=Produits::where(function($req) use ($cate)
        {
         //transformer chaine de caractere en tableau avec explode
            $req->whereIn('category_id', explode(',',$cate))->orWhereRaw("' ".$cate." '=' '");
            
        })->where('nom', 'like', "{$rech}%")//<-afficher le nombre de produits par recherche
         ->orderBy('created_at', 'ASC')->paginate($size);//<-afficher le nombre de produits par page 
        

        return view('web.shop', [
            'produit' => $produit,
            'categories' => $categories,
            'page' => $page,
            'size' => $size,
            'cate' => $cate

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduitsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduitsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //pour recuperer le detail du produits passe en parametre
            $p = Produits::findOrFail($id);

        //pour recuperer d autres produits de facon aleatoire
            $produits=Produits::where('id', '!=', $id)->inRandomOrder('id')->get()->take(6);

            return view('web.detail', [
                'p' => $p,
                'produits' => $produits
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit(Produits $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduitsRequest  $request
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduitsRequest $request, Produits $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produits $produits)
    {
        //
    }
}
