@include('header')
<section class="py-5">
    <div class="container">
    <div class="d-flex justify-content-between mb-5">
            <a href="{{route('departaments.create')}}" class="btn btn-primary">создать</a>
        </div>
        <table class="table mx-auto">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
                    <th>Изменить</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departaments as $index=> $user)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$departaments->name}}</td>
                    <td>{{$departaments->created_at}}</td>
                    <td><i class="bi bi-pen"></i></td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@include('footer')