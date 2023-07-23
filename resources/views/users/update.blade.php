@include('header')
<section>
    <div class="container">
        <form method="POST" action="{{route('user.update',['user' => $user->id])}}" enctype="multipart/form-data">
            @csrf
            <h5>Департамент</h5>
            <select class="form-control" name="departaments[]"  multiple="multiple">
                @foreach($departaments as $departament)
                <option value="{{$departament->id}}">{{$departament->name}}</option>
                @endforeach
            </select>
            <h5>Позиции</h5>
            <select class="form-control" name="position_id">
                @foreach($positions as $position)
                <option value="{{$position->id}}">{{$position->name}}</option>
                @endforeach
            </select>
            <input class="form-control my-3" value="{{$user->name}}" type="text" name="name" placeholder="Имя">
            <input class="form-control my-3" value="{{$user->email}}" type="text" name="email"placeholder="Почта">
            <input class="form-control my-3" type="password" name="password" placeholder="Пароль">
            <input class="form-control my-3" type="file" name="avatar">
            {{ method_field('PUT') }}
            <button class="btn btn-primary w-50 mx-auto d-block">Обновить</button>
        </form>
    </div>
</section>
@include('footer')