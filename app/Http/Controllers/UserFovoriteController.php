<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFovoriteController extends Controller
{ public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをフォローする
        \Auth::user()->fovorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザをアンフォローするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->fovorites2($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    public function loadRelationshipCounts()
    {
        $this->loadCount(['microposts', 'fovorites1', 'fovorites2']);
    }
}
