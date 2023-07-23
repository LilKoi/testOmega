@include('header')
<section>
    <div class="container">
        <form method="POST" action="{{route('departaments.store')}}">
            @csrf
            <input type="text" placeholder="Имя" name="name" class="form-control">
            <button class="btn btn-primary w-50 d-block mx-auto mt-3">Создать</button>
        </form>
    </div>
</section>
@include('footer')