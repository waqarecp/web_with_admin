<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProduct;
use DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        
        $this->ProductModel = new Product();

    }
    public function index(Request $request)
    {
        // $products = Product::paginate(20);

        // if ($request->ajax()) {
        //     $data = Product::get();
        //     return Datatables::of($data)->addIndexColumn()
        //         ->addColumn('action', function($row){
        //             $btn = '<form action="'.url('admin/products/' . $row->id).'" method="POST">
        //             <a href="'.url("admin/products/" . $row->id).'" title="show">
        //               <i class="fas fa-eye text-success"></i>
        //             </a>

        //             <a href="'.url("admin/products/" .$row->id. "/edit").'">
        //                 <i class="fas fa-edit"></i>
        //             </a>
                    
        //             <input type="hidden" name="_token" value="' . csrf_token() . '">
        //             <input type="hidden" name="_method" value="delete">
        //             <button type="submit" title="delete" style="border: none; background-color:transparent;">
        //             <i class="fas fa-trash  text-danger"></i>
        //          </button>
        //             </form>';
        //             return $btn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }

        return view('admin.products.index');
        // return view('admin.products.index', compact('products'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getProducts(Request $request){
        $data = array();
        $productsList=$this->ProductModel->getAllProducts($request,'Normal');

        // dd($activeNoaasList);
        if(!empty($productsList))
        {
            foreach ($productsList as $list)
            {
                $nestedData['id'] = $list->id;
                $nestedData['name'] = $list->name;
                $nestedData['description'] = $list->description;
                $nestedData['price'] = $list->price;
                $nestedData['created_at'] = $list->created_at;
                $btn = '<form action="'.url('admin/products/' . $list->id).'" method="POST">
                            <a href="'.url("admin/products/" . $list->id).'" title="show">
                              <i class="fas fa-eye text-success"></i>
                            </a>
        
                            <a href="'.url("admin/products/" .$list->id. "/edit").'">
                                <i class="fas fa-edit"></i>
                            </a>
                            
                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash  text-danger"></i>
                         </button>
                            </form>';
                $nestedData['action'] = $btn;
                $data[] = $nestedData;

            }
        }
        $json_data = array(
                    "draw"            => intval($request->input('draw')),
                    "recordsTotal"    => $this->ProductModel->getAllProducts($request,'Counts'),
                    "recordsFiltered" => $this->ProductModel->getAllProducts($request,'Filters'),
                    "data"            => $data
                    );
        echo json_encode($json_data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
       
        Product::create($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {   
        
        return view('admin.products.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduct $request, Product $product)
    {
       
        $product->update($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}