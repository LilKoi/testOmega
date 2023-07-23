@include('header')
<section>
    <div class="container">
        <form method="{{isset($departament) ? 'POST' : 'POST'}}" action="{{isset($departament) ? route('departaments.update', $departament->id) : route('departaments.store')}}">
            @csrf
            @if(isset($departament))
            {{ method_field('PUT') }}
            @endif
            <input {{isset($departament) ? "value=" . $departament->name : ""}} type="text" placeholder="Имя" name="name" class="form-control">
            <button class="btn btn-primary w-50 d-block mx-auto mt-3">Создать</button>
        </form>
    </div>
</section>
@include('footer')