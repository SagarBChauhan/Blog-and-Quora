<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Models\UserLogin;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function register(){
        return view('register');
    }
    public function registerStore(Request $request)
    {
        $userLogin = new UserLogin(["username"=>$request->get('inputEmail'),"password"=>$request->get('inputPassword'),"type"=>$request->get('type'),]);
        $userLogin->save();

        $data = UserLogin::all()->toArray();
        return view('pages.registration',compact('data'));
    }
    public function login(){
        return view('login');
    }

    public function viewCovid19(){
        $question = Question::all()->where('categorie', 'covid19')->toArray();
        return view('topics.Covid19', compact('question'));
    }
    public function viewindoChina(){
        $question = Question::all()->where('categorie', 'indo china standoff')->toArray();
        return view('topics.IndoChina', compact('question'));
    }
    public function viewIT(){
        $question = Question::all()->where('categorie', 'it')->toArray();
        return view('topics.IT', compact('question'));
    }
    public function viewpolitics(){
        $question = Question::all()->where('categorie', 'politics')->toArray();
        return view('topics.Politics', compact('question'));
    }
    public function viewspacetech(){
        $question = Question::all()->where('categorie', 'space technology')->toArray();
        return view('topics.SpaceTech', compact('question'));
    }

    public function store(Request $request)
    {
        $question = new Question(["question"=>$request->get('question'), "categorie"=>$request->get('categorie')]);
        $question->save();
        $question = Question::all()->toArray();
        if($request->get('categorie')=="covid19")
        {
            $question = Question::all()->where('categorie', 'covid19')->toArray();
            return view('topics.Covid19', compact('question'));
        }
        else if($request->get('categorie')=="indo china standoff")
        {
            $question = Question::all()->where('categorie', 'indo china standoff')->toArray();
            return view('topics.IndoChina', compact('question'));
        }
        else if($request->get('categorie')=="it")
        {
            $question = Question::all()->where('categorie', 'it')->toArray();
            return view('topics.IT', compact('question'));
        }
        else if($request->get('categorie')=="politics")
        {
            $question = Question::all()->where('categorie', 'politics')->toArray();
            return view('topics.Politics', compact('question'));
        }
        else if($request->get('categorie')=="space technology")
        {
            $question = Question::all()->where('categorie', 'space technology')->toArray();
            return view('topics.SpaceTech', compact('question'));

        }
    }

}
