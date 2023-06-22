<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products', [
            'products' => DB::table('products')->paginate(2)
        ]);
   
    }

    public function cart()
    {
        $cartItems = session()->get("cart");
        return view('cart', compact('cartItems'));
    }

    public function addtocart($id)
    {
        $product = DB::select('select * from products where id=' . $id);
        $cart = session()->get('cart');
        if (isset($cart[$product[0]->id])) {
            $cart[$id]['quantity'] += 1;
            session()->put('cart', $cart);
            return redirect()->back();
        }
        $cart[$product[0]->id] = array(
            "id" => $product[0]->id,
            "name" => $product[0]->name,
            "price" => $product[0]->price,
            "description" => $product[0]->description,
            "photo" => $product[0]->photo,
            "quantity" => 1,
        );
        session()->put('cart', $cart);

        return redirect()->back();

    }
    public function updateCart(Request $cartdata)
    {
        $cart = session()->get('cart');
        $idProduct = $cartdata['id'];
        $quantity = $cartdata['quantity'];
            if ($quantity > 0) {
                $cart[$idProduct]['quantity'] = $quantity;
            } else {
                unset($cart[$idProduct]);
            }
        session()->put('cart', $cart);
        return redirect()->route("cart.list");
    }

    public function clearAllCart(){
        session()->forget('cart');
        return redirect()->route("cart.list");
    }

    public function createGet() 
     {
          $product = new Product;
          return view('create', compact('product'));
     }

     public function createPost(Request $request)
     {
          $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'price' => 'required'
          ]);

          $img_name = $_FILES['photo']['name'];
          $tmp_img_name = $_FILES['photo']['tmp_name'];
          $path = 'images'.'\\'.$img_name;

          move_uploaded_file($tmp_img_name, $path);
          

          $product = new Product([
               'name' => $request->input('name'),
               'description' => $request->input('description'),
               'price' => $request->input('price'),
               'photo' => $path]);

		$product->save();
   }
   public function delete($productId)
   {
        Product::findOrFail($productId)->delete();

    }





    public function editGet($productId, Request $request)
     {
          $product = Product::where('id', $productId)->first();

          if (!is_null($product))
          {
               return view('update', compact('product'));
          }
          else 
          {
               return redirect()->route('product.list')->with('fail', 'There is no product with such id to be updated');
          }
     }

     public function editPost(Request $request)
     {
          $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'price' => 'required'
          ]);

          $img_name = $_FILES['photo']['name'];
          $tmp_img_name = $_FILES['photo']['tmp_name'];
          $path = 'images'.'\\'.$img_name;
          move_uploaded_file($tmp_img_name, $path);

          DB::update('update products set name = ?, description = ?, photo = ?, price = ? where id = ?',
               [
                    $request->input('name'),
                    $request->input('description'),
                    $path,
                    $request->input('price'),
                    $request->input('id')]);

        
     }
    //public function deleteProduct() {

    //}
    
}
