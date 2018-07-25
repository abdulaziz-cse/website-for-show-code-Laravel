

<form action="{{ Route('pay') }}" method="POST">
 {{ csrf_field() }}

<input type="hideen" name="price"   value="{{ $items['price'}} " />
<input type="hideen" name="name"   value="{{ $items['name' }} " />

</form>

