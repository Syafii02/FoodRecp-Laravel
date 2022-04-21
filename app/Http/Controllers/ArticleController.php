<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Type;
use App\Model\Post;

class ArticleController extends Controller
{
    public function index()
    {
        $items = Article::paginate(7);

        return view('pages.admin.artikel.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $types = Type::all();

        return view('pages.admin.artikel.create', [
            'categories' => $categories,
            'types' => $types
        ]);
        // return view('pages.admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  

        $this->validate($request, [
            'title' => 'required|max:50',
            'category_id' => 'required',
            'type_id' => 'required',
            'deskripsi' => 'required',
            'duration' => 'required|max:255',
            'link_video' => 'required|max:255',
            'alat' => 'required|max:500',
            'bahan' => 'required|max:500',
            'langkah_langkah' => 'required|max:2000',
            'images' => 'required|mimes:png,jpg,jpeg,svg',
            // 'images_path' => 'required|mimes:png,jpg,jpeg,svg'

        ]);

        $filename = $request->images->getClientOriginalName();
        $images = $request->images->storeAs('images', $filename);
        
        $articles=Article::create([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'type_id'=>$request->type_id,
            'deskripsi'=>$request->deskripsi,
            'duration'=>$request->duration,
            'link_video'=>$request->link_video,
            'images'=>$images,
            'alat'=>$request->alat,
            'bahan'=>$request->bahan,
            'langkah_langkah'=>$request->langkah_langkah
        ]);

        // dd($request->$postData);

        return redirect()->route('artikel.index')->with('success', 'Posting data berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Article::findOrFail($id);
        $categories = Category::all();
        $types = Type::all();

        return view('pages.admin.artikel.edit', [
            'item' => $item,
            'categories' => $categories,
            'types' => $types,
        ]);
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
        $this->validate($request, [
            'title' => 'required|max:50',
            'category_id' => 'required',
            'type_id' => 'required',
            'duration' => 'required|max:255',
            'link_video' => 'required|max:255',
            'alat' => 'required|max:500',
            'bahan' => 'required|max:500',
            'langkah_langkah' => 'required|max:2000',
            'images' => 'required|mimes:png,jpg,jpeg,svg',
            // 'images.*' => 'mimes:png,jpg,jpeg'
        ]);
        
        $data = $request->all();

        $item = Article::findOrFail($id);

        $filename = $request->images->getClientOriginalName();
        $images['images'] = $request->images->storeAs('images', $filename);

        $item->update($data);
        $item->update($images);

        return redirect()->route('artikel.index')->with('success', 'Data berhasil di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Article::findOrFail($id);
        $item->delete();

        return redirect()->route('artikel.index')->with('success', 'Data berhasil Dihapus!!!');
    }
}
