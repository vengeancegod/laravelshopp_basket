<div>
    <h3> Обновление информации </h3>
    <form action="{{ route('product.editPost') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>
        <input type="hidden" value="{{$product->id}}" name="id" />
        </p>
        <p>
        Новое название товара: 
        <input type="text" value = "{{$product->name}}" name="name" />
        </p>
        <p>
        Новое описание: 
        <input type="text" value = "{{$product->description}}" name="description" />
        </p>
        <p>
        Новое изображение : 
        <input type="file" value = "{{$product->photo}}" name="photo"/>
        </p>
        <p>
        Новая цена:
         <input type="number" value = "{{$product->price}}" name="price" />   
        </p>
        <button type="submit" class="btn btn-warning"> Обновить </button>
    </form>
</div>
