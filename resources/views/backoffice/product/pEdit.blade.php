<x-backofficelayout>
    <h1><a href="{{route('bo_product')}}">Backoffice</a> product : {{$product->id}} | {{$product->name}}</h1>
    <table class="products_table">
        <thead class="products_th">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>html</th>
            <th>description</th>
            <th>price</th>
            <th>picture</th>
            <th>available</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody class="products_td">
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->html}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}} €</td>
            <td>{{$product->picture}}</td>
            <td>{{$product->available}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td>
                <a href="#">
                    <button>
                        <img src="{{asset('storage/pictures/edit.svg')}}" alt="edit item">
                    </button>
                </a>
            </td>
            <td>
                <form action="{{route('bo_p_delete',[$product->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>
                        <img src="{{asset('storage/pictures/delete_forever.svg')}}" alt="delete item">
                    </button>
                </form>
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <form action="{{route('bo_p_update',[$product->id])}}" method="POST">
                @csrf
                @method('POST')
                <td><input class="idwrap" type="number" name="id" placeholder="id" value="{{$product->id}}" required></td>
                <td><input type="text" name="name" placeholder="name" value="{{$product->name}}" required></td>
                <td><textarea name="html" placeholder="html" value="{{$product->description}}"
                           required>{{$product->html}}</textarea></td>
                <td><input type="text" name="description" placeholder="description" value="{{$product->description}}" </td>
                <td><input type="text" name="price" placeholder="price" value="{{$product->price}}" required></td>
                <td><input type="text" name="picture" placeholder="picture" value="{{$product->picture}}" required></td>
                <td><input class="availablewrap" type="text" name="available" placeholder="1 (yes) or 0 (no)" value="{{$product->available}}"
                           required></td>
                <td><input type="datetime-local" name="created_at" value="{{$product->created_at}}" readonly required></td>
                <td><input type="datetime-local" name="updated_at" value="{{date('Y-m-d H:i:s')}}" readonly required></td>
                <td>
                    <button>
                        <img src="{{asset('storage/pictures/save.svg')}}" alt="Save">
                    </button>
                </td>
                <td>
                    <button type="reset"><img src="{{asset('storage/pictures/mop.svg')}}" alt="Clear"></button>
                </td>
            </form>
        </tr>
        </tfoot>
    </table>
    <h2>Category name : {{$product->category->name}}</h2>
</x-backofficelayout>
