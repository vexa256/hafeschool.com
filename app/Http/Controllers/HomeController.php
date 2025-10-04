<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;
use DB;

class HomeController extends Controller
{
    function Home() {

        $Slider = DB::table('sliders')
        ->where('status','1')->get();

        $Gallery = DB::table('galleries')
        ->limit(6)->latest()->get();

        $About = DB::table('abouts')->get();
        $Points = DB::table('about_points')->get();
        $Paragraphs = DB::table('about_paragraphs')->get();

        $WhyUs = DB::table('whies')->get();

        $Blogs = DB::table('blogs')->get();

        $data = [
            'Page' => 'home',
            'Title' => 'Welcome',
            'Slider' => $Slider,
            'Gallery' => $Gallery,
            'About' => $About,
            'Points' => $Points,
            'Paragraphs' => $Paragraphs,
            'WhyUs' => $WhyUs,
            'Blogs' => $Blogs,
        ];
        return view('home',$data);
    }

    function AboutPage()  {

        $Gallery = DB::table('galleries')
        ->limit(6)->latest()->get();

        $About = DB::table('abouts')->get();
        $Points = DB::table('about_points')->get();
        $Paragraphs = DB::table('about_paragraphs')->get();

        $WhyUs = DB::table('whies')->get();


        $data = [
            'Page' => 'pages.about',
            'Title' => 'About Us',
            'Desc' => 'About',
            'Gallery' => $Gallery,
            'About' => $About,
            'Points' => $Points,
            'Paragraphs' => $Paragraphs,
            'WhyUs' => $WhyUs,
        ];
        return view('pgBg',$data);

    }

    function BlogPage() {

        $Gallery = DB::table('galleries')
        ->limit(6)->latest()->get();

        $Blogs = DB::table('blogs')->get();

        $Categories = BlogCategory::withCount('blogs')->get();

        $blogsAll = DB::table('blogs')->get();

        $Gallery = DB::table('galleries')
        ->limit(6)->get();

        // $catNameP = DB::table('blog_categories as C')
        // ->join('blogs as B','B.CategoryID','=','C.id')
        // ->where('B.slug',$slug)->get();
        // $catName = $catNameP->value('CategoryName');
        $data = [
            'Page' => 'pages.blogs',
            'Title' => 'Our Blog Posts',
            'Desc' => 'Blog',
            'Gallery' => $Gallery,
            'Blogs' => $Blogs,
            'Categories' => $Categories,
            'blogsAll' => $blogsAll,

        ];
        return view('pgBg',$data);

    }

    function BlogDetails($slug)  {

        $blogsRaw = DB::table('blogs as B')
            ->where('B.slug', $slug)
            ->join('blog_categories as C', 'C.id', '=', 'B.CategoryID')
            ->leftJoin('blog_paragraphs as P', 'P.BlogID', '=', 'B.id')
            // ->leftJoin('blog_quotes as Q', 'Q.BlogID', '=', 'B.id')
            // ->leftJoin('blog_tags as T', 'T.BlogID', '=', 'B.id')
            ->select(
                'B.*',
                'C.CategoryName as category_name',
                'P.id as paragraph_id', 'P.Paragraph as paragraph_text', 'P.Title as paragraph_title',
                // 'Q.id as quote_id', 'Q.Quote as quote_text','Q.Author as quote_author',
                // 'T.id as tag_id', 'T.Tags as tag_text'
            )
            ->orderBy('P.created_at', 'asc')
            // ->orderBy('Q.created_at', 'asc')
            // ->orderBy('T.created_at', 'asc')
            ->get();

            $BlogNameHere = $blogsRaw->value('Name');
            // dd($BlogNameHere);

        // Group paragraphs by blog
        $Blogs = $blogsRaw->groupBy('id')->map(function($items) {
            $blog = $items->first(); // basic blog info

            // Unique paragraphs by id
            $blog->paragraphs = $items->map(fn($i) => (object)[
                'id' => $i->paragraph_id,
                'title' => $i->paragraph_title,
                'paragraph' => $i->paragraph_text
            ])->unique('id')->values(); // values() resets keys

            return $blog;
        });


        // $Tags = DB::table('blog_tags')->get();
        $Categories = BlogCategory::withCount('blogs')->get();

        $blogsAll = DB::table('blogs')->get();

        $Gallery = DB::table('galleries')
        ->limit(6)->get();

        $catNameP = DB::table('blog_categories as C')
        ->join('blogs as B','B.CategoryID','=','C.id')
        ->where('B.slug',$slug)->get();
        $catName = $catNameP->value('CategoryName');

        $data = [
            'Page' => 'pages.blogDetails',
            'Title' => $BlogNameHere,
            'Desc' => 'Blog Details',
            'Blogs' => $Blogs,
            // 'Tags' => $Tags,
            'Categories' => $Categories,
            'blogsAll' => $blogsAll,
            'Gallery' => $Gallery,
            'catName' => $catName,
        ];

        return view('pgBg',$data);

    }

    function ContactPage() {


        $Gallery = DB::table('galleries')
        ->limit(6)->get();

        $data = [
            'Page' => 'pages.contact',
            'Title' => 'Contact',
            'Desc' => 'Contact Us',
            'Gallery' => $Gallery,
        ];

        return view('pgBg',$data);

    }
    function GalleryPage() {


        $Gallery = DB::table('galleries')
        ->limit(6)->get();

        $GalleryAll = DB::table('galleries')
        ->get();

        $data = [
            'Page' => 'pages.gallery',
            'Title' => 'Gallery',
            'Desc' => 'Our Gallery',
            'Gallery' => $Gallery,
            'GalleryAll' => $GalleryAll,
        ];

        return view('pgBg',$data);

    }

}
