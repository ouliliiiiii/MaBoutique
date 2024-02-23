<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduitsRequest;
use App\Http\Requests\UpdateProduitsRequest;
use App\Models\Category;
use App\Models\Produits;
use Illuminate\Http\Request;
use App\Interfaces\CategorieInterface;
use App\Interfaces\ProduitsInterface;

class ProduitsController extends Controller
{
    private $cateService;
    private $proService;

    public function __construct(CategorieInterface $cate,ProduitsInterface $pro) 
    {
        $this->cateService = $cate;
        $this->proService=$pro;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cate=$request->query('cate');
        $page=$request->query('page');
        $size=$request->query('size'); 
        
    $categories = $this->cateService->all();
   
    $produit = $this->proService->getProduits($request);
  
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
