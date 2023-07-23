@include('header')
<section>
    <div class="container">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <input class="form-control my-2" type="text" name="email" placeholder="email@email.ru">
            <input class="form-control my-2" type="password" name="password">
            <button class="btn btn-primary w-50 d-block mx-auto mt-3">Создать</button>
        </form>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</section>
@include('footer')