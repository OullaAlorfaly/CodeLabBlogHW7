<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator; //capital letter
use DB;


class PagesController extends Controller
{
    public function getHome()
    {
        return view('pages.home');
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getVideos()
    {
        return view('pages.videos');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getSponsors()
    {
        return view('pages.sponsors');
    }

    public function getSignIn()
    {
        return view('pages.signin');
    }

    public function getSignOut()
    {
        return view('pages.signout');
    }

    public function getSignUp()
    {
        return view('pages.signUp');
    }

    public function requestSignUp(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required',
            'password2'=>'required | same:password',
        ]);

        if ($validator->fails())
            $request->session()->put('email',$request->email);
            $request->session()->put('password',$request->password);
            $request->session()->put('password2',$request->password2);

           return redirect('/signin');
    }

    public function requestSignIn(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'email' => 'required | email',
            'password' => 'required',
            'password2'=>'required | same:password',
            ]);
        $email = $r->session()->get('email');
        $pass = $r->session()->get('password');
        $pass2 = $r->session()->get('password2');
        if(($email == $r->email) && ($pass == $r->password) && ($pass2 == $r->password2)){

            return redirect('/');

        }else{
            return redirect()->back()->WithErrors($validator->errors()->all());
        }

    }

    public function getBlogs()
    {
      // return DB::table('blogs')->get(); bach all record
       // $sql= DB::table('blogs')->where('id','=',1)->Orwhere('id','=',2)->get();
      //  return DB::table('blogs')->select(DB::raw('count(*) as jk'))->get(); using raw like pure sql
      // $sql= DB::table('blogs')->insert(['title'=>"sdjsl",'content'=>"dsefjkhwhgfiuw"]);
       // $sql= DB::table('blogs')->where('id','=',3)->update(['title'=>"sdjsl",'content'=>"iuw"]);
      //  $sql= DB::table('blogs')->whereIn('id',[2,3,4])->update(['title'=>"sdjsl",'content'=>"iuw"]); update on more than on row
        //$sql= DB::table('blogs')->where(['id'=>2])->delete();
       // return $sql;
       $blog = DB::table('blogs')->paginate(3);
        return view('pages.table' ,compact('blog'));
    }

    public function deleteBlogs($id)
    {
        $id= DB::table('blogs')->where('id','=',$id)->delete();
        return redirect('/get_blogs');
    }


    public function getEditBlogs($id)
    {
        $user = DB::table('users')->get();
        $blog = DB::table('blogs')
            ->join('users','blogs.user_id',"=","users.id")
            ->select('blogs.*','users.name')
            ->where('blogs.id','=',$id)->get();
        return view('pages.editBlogs',compact('blog','user'));
    }

    public function editBlogs($id ,Request $request)
    {
        $id= DB::table('blogs')->where('id','=',$id)
             -> update(['title'=>$request->title,
                        'content'=>$request->blogContent,
                        'user_id'=>$request->user]);

        return redirect('/get_blogs');

    }
}


