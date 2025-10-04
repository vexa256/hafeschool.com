<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Blogs;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    function MgtBlogs() {

        $Blogs = Blogs::with([
            'category',
            'paragraphs' => fn($q) => $q->orderBy('created_at', 'asc'),
            // 'quotes'     => fn($q) => $q->orderBy('created_at', 'asc'),
            // 'tags'       => fn($q) => $q->orderBy('created_at', 'asc'),
        ])->get();



        $data = [
            'Page'  => 'blogs.MgtBlogs',
            'Title' => 'Blogs',
            'Desc'  => 'Manage Blogs',
            'Blogs' => $Blogs,
        ];

        return view('index', $data);
    }

    function CreateBlog()  {

        $Category = DB::table('blog_categories')->get();

        $data = [
            'Page'=>'blogs.CreateBlog',
            'Title'=>'Create',
            'Desc'=>'Create Blog',
            'Category'=> $Category,

            ];

            return view('index', $data);
    }
    function UpdateBlog($id)  {
        $Blog = DB::table('blogs as B')
        ->where('B.id',$id)
        ->join('blog_categories as C','C.id','=','B.CategoryID')
        ->select('B.*','C.CategoryName','C.id as CatID')
        ->get();

        $Category = DB::table('blog_categories')->get();

        $data = [
            'Page'=>'blogs.UpdateBlog',
            'Title'=>'Update',
            'Desc'=>'Create Blog',
            'Blog' => $Blog,
            'Category' => $Category,

            ];

            return view('index', $data);
    }

    function CreateBlogForm(Request $request) {

        $request->validate([
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '_blog.' . $request->Image->extension();
        $request->Image->move('uploads/blogs', $imageName);

        DB::table('blogs')->insert([
            'CategoryID' => $request->CategoryID,
            'Name' => $request->Name,
            'Author' => Auth::user()->name,
            'Details' => $request->Details,
            'created_at' => now(),
            'Image' => 'uploads/blogs/' . $imageName,
            'slug'  => Str::slug($request->Name, '-'),
        ]);

        return redirect()->route('MgtBlogs')->with('success', 'Blog created successfully!');

    }

    function UpdateBlogForm(Request $request) {

        $request->validate([
            'id'          => 'required',
            'TableName'          => 'required',
        ]);

        $UploadUpdate = DB::table($request->TableName)
        ->where('id', $request->id)
        ->first();

    if ($request->hasfile('Image')) {

        unlink($UploadUpdate->Image);

        $ImageName = time() . '_blogs' . $request->Image->extension();

        $request->Image->move('uploads/blogs', $ImageName);

        DB::table('blogs')->where('id', $request->id)->update([
            'CategoryID' => $request->CategoryID,
            'Name' => $request->Name,
            'Author' => Auth::user()->name,
            'Details' => $request->Details,
            'updated_at' => now(),
            'Image' => 'uploads/blogs/' . $imageName,
            'slug'  => Str::slug($request->Name, '-'),
        ]);

    }

    DB::table($request->TableName)->where('id', $request->id)
    ->update(
        array_merge(
            $request->except([
                '_token',
                'TableName',
                'id',
                'Image',
            ]),
            [
                'slug' => Str::slug($request->Name, '-'),
            ]
        )
    );
            return redirect()->route('MgtBlogs')->with('success', 'Blog updated successfully!');
    }

    function MgtBlogCategory()  {

        $Categories = DB::table('blog_categories')->get();

        $data = [
            'Page'=>'blogs.MgtBlogCategory',
            'Title'=>'Categories',
            'Desc'=>'Manage Categories',
            'Categories' => $Categories,

            ];

            return view('index', $data);
    }

    function CreateBlogCategory(Request $request) {

        DB::table('blog_categories')->insert([
            'CategoryName' => $request->CategoryName
        ]);
        return redirect()->back()->with('success', 'Category created successfully!');

    }
    function UpdateBlogCategory(Request $request) {

        DB::table('blog_categories')->where('id',$request->id)->update([
            'CategoryName' => $request->CategoryName
        ]);
        return redirect()->back()->with('success', 'Category updated successfully!');

    }

    function BlogParagraph($id)  {
        $Blog = DB::table('blogs')
        ->where('id',$id)->get();

        $data = [
            'Page'=>'blogs.BlogParagraph',
            'Title'=>'Paragraph',
            'Desc'=>'Create Blog Paragraph',
            'Blog' => $Blog,

            ];

            return view('index', $data);
    }

    function CreateBlogParagraph(Request $request) {
        DB::table('blog_paragraphs')->insert([
            'BlogID' => $request->BlogID,
            'Title' => $request->Title,
            'Paragraph' => $request->Paragraph,
            'created_at' => now(),
        ]);
        return redirect()->route('MgtBlogs')->with('success', 'Paragraph created successfully!');

    }
    function UpdateBlogParagraph(Request $request) {
        DB::table('blog_paragraphs')->where('id',$request->id)->update([
            'Title' => $request->Title,
            'Paragraph' => $request->Paragraph,
            'updated_at' => now(),
        ]);
        return redirect()->route('MgtBlogs')->with('success', 'Paragraph updated successfully!');

    }

    // Create Blog Quote
    function CreateBlogQuote(Request $request) {
        DB::table('blog_quotes')->insert([
            'BlogID'     => $request->BlogID,
            'Quote'      => $request->Quote,
            'Author'     => $request->Author,
            'created_at' => now(),
        ]);

        return redirect()->route('MgtBlogs')->with('success', 'Quote created successfully!');
    }

    // Update Blog Quote
    function UpdateBlogQuote(Request $request) {
        DB::table('blog_quotes')->where('id', $request->id)->update([
            'Quote'      => $request->Quote,
            'Author'     => $request->Author, // optional
            'updated_at' => now(),
        ]);

        return redirect()->route('MgtBlogs')->with('success', 'Quote updated successfully!');
    }

    // Create Blog Tag
    function CreateBlogTags(Request $request) {
        $request->validate([
            'BlogID' => 'required|exists:blogs,id',
            'Tags' => 'required|string',
        ]);

        $tags = explode(',', $request->Tags); // Split by commas
        foreach ($tags as $tag) {
            $trimmedTag = trim($tag);
            if ($trimmedTag !== '') {
                DB::table('blog_tags')->insert([
                    'BlogID' => $request->BlogID,
                    'Tags' => $trimmedTag,
                    'slug' => Str::slug($request->Tags),
                    'created_at' => now(),
                ]);
            }
        }

        return redirect()->route('MgtBlogs')->with('success', 'Tags added successfully!');
    }


    // Update Blog Tag
    function UpdateBlogTag(Request $request) {
        DB::table('blog_tags')->where('id', $request->id)->update([
            'Tag'        => $request->Tag,
            'slug' => Str::slug($request->Tags),
            'updated_at' => now(),
        ]);

        return redirect()->route('MgtBlogs')->with('success', 'Tag updated successfully!');
    }



}
