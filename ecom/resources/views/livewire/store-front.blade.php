<div>
    @foreach ($this->products as $product)
        <div>
            {{ $product->name }}
        </div>
    @endforeach
</div>
