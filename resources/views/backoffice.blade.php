<x-backofficelayout>
    <x-slot name="content">
        <h1>Backoffice</h1>
        <table class="products_table">
            <thead class="products_th">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>description</th>
                    <th>price</th>
                    <th>available</th>
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
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}} €</td>
                    <td>{{$product->available}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td><a href="#"><img src="{{asset('storage/pictures/svg-5.svg')}}" alt="edit item"></a></td>
                    <td><a href="#"><img src="{{asset('storage/pictures/svg-4.svg')}}" alt="delete item"></a></td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><button>add</button></td>
            </tr>
            </tfoot>
        </table>
    </x-slot>
</x-backofficelayout>
