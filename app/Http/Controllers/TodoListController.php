<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Todolist;
use App\Http\Requests\TodolistRequest;
use App\Services\FlashMessageService;

class TodoListController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 一覧
     *
     * @param Request $request
     * @param string $user_id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(Request $request, $target_y='', $target_m='', $user_id='')
    {
        $query = Todolist::query();
        $query->where('user_id', Auth::id());

        if (!empty($request->keyword)) {
            $query->where(function($q) use($request){
                $q->orWhere('title', 'LIKE', '%'. $request->keyword. '%')
                ->orWhere('memo', 'LIKE', '%'. $request->keyword. '%');
            });
        }

        $todolists = $query->orderBy('created_at')->get();

        return view('/todolist/index', compact('todolists'));
    }

    /**
     * 新規登録
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        $todolist = new Todolist();

        return view('/todolist/add', compact('todolist'));
    }


    /**
     * 新規作成 実行
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function addStore(TodolistRequest $request)
    {
        try {
            \DB::transaction(function() use($request) {

                $todolist = new Todolist();

                $todolist->user_id = Auth::id();
                $todolist->title = $request->title;
                $todolist->memo = $request->memo;
                $todolist->save();
            });

            FlashMessageService::success('TODOの登録が完了しました。');

        } catch (\Exception $e) {
            report($e);
            FlashMessageService::error('TODOの登録に失敗しました。');
        }

        return redirect()->route('index');
    }

    /**
     * 編集
     *
     * @param unknown $user_id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit($todolist_id)
    {
        $todolist = Todolist::findOrFail($todolist_id);

        return view('/todolist/edit', compact('todolist'));
    }

    /**
     * 編集 更新実行
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function editStore(TodolistRequest$request, $todolist_id)
    {
        try {
            \DB::transaction(function() use($request, $todolist_id) {

                $todolist = Todolist::findOrFail($todolist_id);

                $todolist->title = $request->title;
                $todolist->memo = $request->memo;
                $todolist->update();
            });

            FlashMessageService::success('TODOの更新が完了しました。');

        } catch (\Exception $e) {
            report($e);
            FlashMessageService::error('TODOの更新に失敗しました。');
        }

        return redirect()->route('index');
    }

    /**
     * 削除 実行
     *
     * @param Request $request
     * @param unknown $user_id
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Http\RedirectResponse
     */
    public function delete($todolist_id)
    {
        try {
            $todolist = Todolist::findOrFail($todolist_id);

            \DB::transaction(function() use($todolist) {

                $todolist->delete();
            });

            FlashMessageService::success('TODOの削除が完了しました。');

        } catch (\Exception $e) {
            report($e);
            FlashMessageService::error('TODOの削除に失敗しました。');
        }

        return redirect()->route('index');
    }
}
