<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Recipe;
use App\Ingredient;

class RecipesController extends BaseController
{
    
    public function index()
    {
        return redirect('recipes/browse');
    }

    /**
     * Browse the recipes.
     *
     * @return \Illuminate\Http\Response
     */
    public function browse()
    {
        $recipes = Recipe::paginate(20);

        return view('recipes.browse', ['recipes' => $recipes]);
    }

    public function search()
    {
        $ingredients = Ingredient::byCategory();

        return view('recipes.search', ['ingredients' => $ingredients]);
    }

    public function searchResults($q = NULL)
    {
        if (!isset($q)) {
            return redirect('recipes/search');
        }

        $recipes = Recipe::select('id', 'name', 'description', 'image')
            ->with('ingredients')
            ->paginate(20);
        foreach ($recipes as &$recipe) {
            foreach ($recipe->ingredient->name as $ingredient) {
                if (!in_array($ingredient, $q)) {
                    unset($recipe);
                    break;
                }
            }
        }

        return $this->view('recipes.browse', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'We don\'t need this page except maybe for admins only.';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'Store new captured recipe in database.';
    }

    /**
     * Show a single recipe on page.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('recipes.show', Recipe::getCard($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'We probably don\'t need this either.';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 'Update a recipe\'s database entry.';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Probably unnecessary.';
    }
}
