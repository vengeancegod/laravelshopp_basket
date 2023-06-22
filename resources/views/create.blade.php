<div>
    <h3> Добавление нового товара </h3>
    <form action="{{ route('product.createPost') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>
        Название: 
        <input type="text" name="name" />
        </p>
        <p>
        Описание: 
        <input type="text" name="description" />
        </p>
        <p>
        Изображение: 
        <input type="file" name="photo"/>
        </p>
        <p>
         Цена:
         <input type="number" name="price" />   
        </p>
        <button type="submit" class="btn btn-warning"> Добавить </button>
    </form>
</div>
