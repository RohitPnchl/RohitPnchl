<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Products;
use Session;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->login) {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            $user = User::where('email', $request->email)->where('password', md5($request->password))->first();
            if ($user) {
                Session::put('user', $user);
                return view('steel-works.index', compact('user'));
            } else {
                return back()->with('error', 'Login failed!');
            }
        }

        return view('steel-works.index');
    }

    /**
     * Show the products page for new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        $products = Products::orderBy('id', 'desc')->get();

        return view('steel-works.products', compact('products'));
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('steel-works.contact');
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageSave(Request $request)
    {
        $file = $request->file('product');
        $filename = time() . '.' . $request->file('product')->extension();
        $doc_name = $file->getClientOriginalName();
        $filePath = storage_path('app/public') . '/products/';
        $file->move($filePath, $filename);

        $product = Products::create([
            'product'       => $doc_name,
            'product_name'  => $filename,
            'path'          => '/products/'. $filename
        ]);

        return redirect()->route('products');
    }

    public function about()
    {
        return view('steel-works.about');
    }

    public function destroy($id)
    {
        Products::find($id)->delete();

        return back();
    }
}
