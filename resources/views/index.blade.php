@extends('layouts.default')

@section('content')
      @if (count($errors) > 0)
      <ul>
        <li>
        @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
        </li>
      </ul>
      @endif
    <form action="/todo/create" method="post" class="form-add">
    @csrf
      <input class="input-add" type="text" name="content">
      <button class="btn-add">追加</button>
    </form>
    <table>
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    @foreach($items as $item)
    <form action="/todo/update" method="post">
    @csrf
    <tr>
      <td>
        <p>{{$item->created_at}}</p>
      </td>
      <td>
        <input class="input-update" type="text" name="content" value="{{$item->content}}">
        <input type="hidden" name="id" value="{{$item->id}}">
      </td>
        <td>
          <button class="btn-update">更新</button>
        </td>
    </form>
      <form action="/todo/delete" method="post">
      @csrf
        <input type="hidden" name="id" value="{{$item->id}}">
        <td>
          <button class="btn-delete">削除</button>
        </td>
      </form>
      </tr>
      @endforeach
    </table>
@endsection
