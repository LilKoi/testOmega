@include('header')
<section>
    <div class="container">
        <form method="{{isset($position) ? 'POST' : 'POST'}}" action="{{isset($position) ? route('positions.update', $position->id) : route('positions.store')}}">
            @csrf
            @if(isset($position))
            {{ method_field('PUT') }}
            @endif
            <input {{ isset($position) ? "value=" . $position->name . "'" : '' }} type="text" placeholder="Имя" name="name" class="form-control">
            <button class="btn btn-primary w-50 d-block mx-auto mt-3">Создать</button>
        </form>
    </div>
</section>
@include('footer')