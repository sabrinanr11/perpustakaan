<form action="{{route('add_Store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Angka 1</label>
        <input type="text" name="angka1">
    </div>
    <div class="form-group">
        <label for="">Angka 2</label>
        <input type="text" name="angka2">
    </div>
    <div class="form-group">
        <button type="submit">Sum</button>
    </div>
</form>

<h1>The total number is : {{$total}}</h1>