@include('header')
<section class="py-5">
    <div class="container">
    <div class="d-flex justify-content-between mb-5">
            <a href="{{route('positions.create')}}" class="btn btn-primary">создать</a>
        </div>
        <table class="table mx-auto">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
                    <th>Дата</th>
                    <th>Изменить</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                @foreach($positions as $index=> $position)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$position->name}}</td>
                    <td>{{$position->created_at}}</td>
                    <td><a href="{{route('positions.edit',['position' =>$position->id])}}"><i class="bi bi-pen"></i></a></td>
                    <td><a href="{{route('positions.destroy',['position' =>$position->id])}}"><i class="bi bi-trash"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@include('footer')