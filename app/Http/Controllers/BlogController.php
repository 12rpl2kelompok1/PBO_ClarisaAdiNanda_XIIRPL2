<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\Blog;
 

class BlogController extends Controller
{
    public function index()
    {

    	//$blog = new Blog;
    	//$blog->tittle = 'halo jogja';
    	//$blog->description = 'jogja dimana-mana';
    	//$blog->save();

			//Blog::create([
    		//'tittle' => 'halo halo hai',
    		//'description' => 'halo halo juga',
    //	]);

    	//$blog = Blog::where('tittle', 'halo jogja')->first();
    	//$blog->tittle = 'halo audeh';
    	//$blog->save();

    	//Blog::find('3')->update([
    		//'tittle' => 'halo jkt',
    		//'description' => 'serah dah'

    	//]);

    	//$blog = Blog::find('1');
    	//$blog->delete();


    	//Blog::destroy(3);


    	//$blog = Blog::find('2');
    	//$blog->delete();

    	$blogs = Blog::all();

    	return view('/blog/home', ['blogs' => $blogs]);
    }

	public function show($id)
	{
		
		//$users = DB::table('users')->where('username', 'like', '%a%')->get();
		
		//DB::table('users')->insert([
			// ['username' => 'testing', 'password'=> '123cm']

		// ]);

		//DB::table('users')->where('username', 'testing')
						//->update(['username' => 'diaz' ]);

		DB::table('users')->where('id', '>', 5)->delete();



		$blog = Blog::find($id);

		if(!$blog)
		abort(404);

		
    	return view('blog/single', ['blog' => $blog]);
    }

    public function create()
    {
    return view('blog/create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'tittle'      => 'required|min:5',
            'description' => 'required|min:5|max:10'

        ]);

        $blog = new Blog;
        $blog->tittle = $request->tittle;
        $blog->description = $request->description;
        $blog->save();

        return redirect('/blog');

    }

    public function edit($id)
    {
    	$blog = Blog::find($id);

		if(!$blog)
		abort(404);

		
    	return view('blog/edit', ['blog' => $blog]);

    }

    public function update(Request $request, $id)
    {
    	$blog = Blog::find($id);
    	$blog->tittle = $request->tittle;
    	$blog->description = $request->description;
    	$blog->save();


        return redirect('blog/' , $id);


    }


    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('blog');



    }



}
