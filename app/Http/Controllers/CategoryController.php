<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function fetchParentCats(){
        $cats=Term::where('parent',0)->pluck('name','slug');
        return response()->json(['data' => $cats]);
    }
    
    public function fetchCatProducts(Request $request){
        $qry=Term::join('object_relationships','object_relationships.term_id','=','terms.term_id')->join('products','products.id','=','object_relationships.object_id')
        ->where('products.title','like','%'.$request->str.'%');
        
        if($request->p_id!=''){
        $term_id=Term::where('slug',$request->p_id)->pluck('term_id');
        $qry->where('terms.term_id', $term_id);  
        }
        
        $cat_p=$qry->pluck('products.title', 'products.slug');
        return response()->json(['data'=>$cat_p,'counter'=>$request->counter]);
        
    }
}