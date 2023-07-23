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
                @foreach($departaments as $index=> $departament)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$departament->name}}</td>
                    <td>{{$departament->created_at}}</td>
                    <td><a href="{{route('departaments.edit',['departament' =>$departament->id])}}"><i class="bi bi-pen"></i></a></td>
                    <td><a href="{{route('departaments.destroy',['departament' =>$departament->id])}}"><i class="bi bi-trash"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@include('footer')