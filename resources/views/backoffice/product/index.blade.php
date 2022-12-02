<x-backofficelayout>
    <h1>Backoffice</h1>
    <table class="products_table">
        <thead class="products_th">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>picture</th>
            <th>available</th>
            <th>category</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody class="products_td">
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>
                    <details>
                        <summary>Description</summary>{{$product->description}}
                    </details>
                </td>
                <td>{{$product->price}} €</td>
                <td>{{$product->picture}}</td>
                <td>{{$product->available}}</td>
                <td>{{$product->category_id ? $product->category->name : ''}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
                <td>
                    <a href="{{route('bo_p_edit',[$product->id])}}">
                        <button>
                            <img src="{{asset('storage/pictures/edit.svg')}}"
                                 alt="edit item">
                        </button>
                    </a>
                </td>
                <td>
                    <form action="{{route('bo_p_delete',[$product->id])}}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button>
                            <img
                                src="{{asset('storage/pictures/delete_forever.svg')}}"
                                alt="delete item">
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <form action="{{route('bo_p_create')}}" method="POST">
                @csrf
                @method('POST')
                <td><input type="number" name="id" placeholder="id"
                           value="{{$product->id+1}}" required></td>
                <td><input type="text" name="name" placeholder="name" required>
                </td>
                <td><input type="text" name="description"
                           placeholder="description" required></td>
                <td><input type="text" name="price" placeholder="price"
                           required></td>
                <td><input type="text" name="price" placeholder="picture"
                           required></td>
                <td><input type="text" name="available"
                           placeholder="1 (yes) or 0 (no)" required></td>
                <td>
                    <select type="select" name="category_id"
                            placeholder="Category" required>
                        <option value="null">---</option>
                        @foreach(\App\Models\Category::all() as $category)
                            <option
                                value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </td>
                <td><input type="datetime-local" name="created_at"
                           value="{{date('Y-m-d H:i:s')}}" required></td>
                <td><input type="datetime-local" name="updated_at"
                           value="{{date('Y-m-d H:i:s')}}" required></td>
                <td>
                    <button><img src="{{asset('storage/pictures/add.svg')}}"
                                 alt="Save"></button>
                </td>
                <td>
                    <button type="reset"><img
                            src="{{asset('storage/pictures/mop.svg')}}"
                            alt="Clear"></button>
                </td>
            </form>
        </tr>
        </tfoot>
    </table>
</x-backofficelayout>
