<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        /*$data = [
                ['first_name' => 'John', 'last_name' => 'Doe', 'age' => 'twenties'],
                ['first_name' => 'Fred', 'last_name' => 'Ali', 'age' => 'thirties'],
                ['first_name' => 'Alex', 'last_name' => 'Cho', 'age' => 'thirties']
        ];
       if ( Product::create($data) ) {
           echo '插入完成';
       }*/
       /* Product::create([
            'first_name' => 'Alex', 'last_name' => 'Cho', 'age' => 'thirties'
        ]);*/
        // 依据姓氏排序
       /* usort($data, function ($item1, $item2) {
            return $item1['last_name'] <=> $item2['last_name'];
        });

  // 依据年龄范围分组
        $new_data = [];

        foreach ($data as $key => $item) {
            $new_data[$item['age']][$key] = $item;
        }

        ksort($new_data, SORT_NUMERIC);

// 从年龄为 30 岁组里获取用户全名
        $result = array_map(function($item) {
            return $item['first_name'].' '.$item['last_name'];
        }, $new_data['thirties']);

// 将数组转换为字符串并以行分隔符分隔
        $final = implode("\n", $result);
       $data = Product::all();
        /*$data->where('age', 'thirties')
        ->sortBy('last_name')
        ->map(function($item){
            return $item['first_name'].' '.$item['last_name'];
        })
        ->implode("\n");*/
       $data = Product::all();
       $resource = $data->where('age', 'thirties')
           ->sortBy('last_name')
           ->toConcatenatedString(['first_name', 'last_name']);
       echo '<pre>';
       print_r($resource);

    }
    /*
     * 现在让我们看下第二个示例，假设我们一个用户列表，我们需要基于角色（role）过滤出来，然后进一步如果他们的注册时间为 5 年或以上且 last name 以字母 A-M 开始的仅获取第一个用户
     */

    public function create()
    {
        /*$users = [
            ['name' => 'John Doe', 'role' => 'vip', 'years' => 7],
            ['name' => 'Fred Ali', 'role' => 'vip', 'years' => 3],
            ['name' => 'Alex Cho', 'role' => 'user', 'years' => 9],
        ];*/
        /*Role::create([
            'name' => 'Alex Cho', 'role' => 'user', 'years' => 9
        ]);*/
        //php 代码实现
        /*$subset = [];
        foreach ($users as $user) {
            if ($user['role'] === 'vip' && $user['years'] >= 5) {
                if (preg_match('/\s[A-Z]/', $user['name'])) {
                    $subset[] = $user;
                }
            }
        }
        return reset($subset)*/
        $data = Role::all();

       /* $res = $data->where('role', 'vip')
            ->map(function($user) {
                return preg_match('/\s[A-Z]/', $user['name']);
            })
            ->firstWhere('years', '>=', '5');*/
     $res = $data->where('role', 'vip')
         ->whereRegex('/\s[A-M]/', 'name')
         ->firstWhere('years', '>=', 5);

        echo '<pre>';
        print_r($res);

    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
