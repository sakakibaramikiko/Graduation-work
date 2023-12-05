<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 商品一覧
     */
    public function index()
    {
        // 商品一覧取得
        $items = Item::all();

        return view('item/index', compact('items'));
    }

    /**
     * 指定した商品のリンク先を表示する
     */
    public function getItemUrl()
    {
        // 'type'が 'Jewelry | ジュエリー' の商品を表示する
        $item = Item::where('type', 'Jewelry | ジュエリー');
        if ($item) {
            return view('items.index', ['item' => $item]);
        }
        else {
            // 'type'が 'Jewelry | ジュエリー' の商品がない場合の処理
            return view('items.not_found');
        }   
    }
    /**
     * 商品登録
     */
    public function add(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // バリデーション
            // dd($request);
            $this->validate($request, [
                'name' => 'required|unique:items|max:100',
                'type' => 'required|max:100',
                'total_price' => 'required|numeric|digits_between:1,10',
                'detail' => 'nullable|max:500',
                'img_name' => 'nullable|image|max:50'
            ],
            [   
                'name.required' => '商品名を入力してください。',
                'name.unique' => '既に登録されている商品です。',
                'name.max' => '商品名は100文字以内で入力してください。',
                'type.required' => '種別を入力してください。',
                'type.max' => '種別は100文字以内で入力してください。',
                'total_price.required' => '価格を入力してください。',
                'total_price.numeric' => '価格は数字で入力してください。',
                'total_price.digits_between' => '価格は1～10桁以内で入力してください。',
                'detail.max' => '詳細は500文字以内で入力してください。',
                'img_name.image' => '画像形式はファイルをアップロードしてください。',
                'img_name.max' => '画像ファイルは50キロバイト以下のファイルを選択してください。'
            ]);

            // 画像ファイルを処理する
            $imageData = null;
            if ($request->hasFile('img_name')) {
                $image = $request->file('img_name');
                $imageData ='data:image/png;base64,'.base64_encode(file_get_contents($image->path()));
            }   
                Item::create([
                    'user_id' => Auth::user()->id,
                    'name' => $request->name,
                    'type' => $request->type,
                    'total_price' => $request->total_price,
                    'detail' => $request->detail,
                    'img_name' => $imageData
                ]);
            return redirect('items')->with('message','商品情報が登録されました。');   
        }           
        return view('item/add');
    }

    // 商品編集画面へ遷移
    public function edit(string $id)
    {
        $item = Item::find($id);
        return view('item.edit', compact('item'));
    }

    // 商品更新処理
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            // 'name' => 'required|unique:item,name,'. $id . '|max:100',
            'name' => 'required|max:100',
            'type' => 'required|max:100',
            'total_price' => 'required|numeric|digits_between:1,10',
            'detail' => 'nullable',
            'img_name' => 'nullable|image|max:50'
        ],
        [
            'name.required' => '商品面を入力してください。',
            'name.unique' =>'既に登録されている商品です。',
            'name.max' =>'商品名は100文字以内で入力してください。',
            'type.required' => '種別を入力してください。',
            'type.max' => '種別は100文字以内で入力してください。',
            'total_price.required' => '価格を入力してください。',
            'total_price.numeric' => '価格は数字で入力してください。',
            'total_price.digits_between' => '価格は1～10桁以内で入力してください。',
            'img_name.image' => '画像形式ファイルをアップロードしてください。',
            'img_name.max' => '画像ファイルは50キロバイト以下のファイルを選択してください。'
        ]);
        $item = Item::find($id);
            $item->name = $request->input('name');
            $item->type = $request->input('type');
            $item->total_price = $request->input('total_price');
            $item->detail = $request->input('detail');

        // 画像ファイルを処理する
        $deleteImage = $request->has('delete_image'); // チェックボックスの状態を取得
        if ($deleteImage) {
            // 画像を削除する場合
            $item->update([
                'name' => $validated['name'],
                'type' => $validated['type'],
                'total_price' => $validated['total_price'],
                'detail' => $validated['detail'],
                'img_name' => null // 画像を削除するために null で更新
            ]);
        } elseif ($request->hasFile('img_name')) {
            // 新しい画像がアップロードされた場合
            $image = $request->file('img_name');
            $imageData = 'data:image/png;base64,'.base64_encode(file_get_contents($image->path()));

            $item->update([
                'name' => $validated['name'],
                'type' => $validated['type'],
                'total_price' => $validated['total_price'],
                'detail' => $validated['detail'],
                'img_name' => $imageData
            ]);
        } else {
            // 画像の変更がない場合は通常の情報変更を行う
            $item->update([
                'name' => $validated['name'],
                'type' => $validated['type'],
                'total_price' => $validated['total_price'],
                'detail' => $validated['detail']
            ]);
            
        }
        return redirect()->route('index');
    }

    // 商品削除
    public function destroy($id)
    {
        $items = Item::find($id);
        $items->delete();
        return redirect()->route('index');
    }
}
