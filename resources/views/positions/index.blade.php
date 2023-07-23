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
                    @if(Auth::user()->role_id != 3)
                        @if(Auth::user()->role_id != 2)
                            <th>Изменить</th>
                        @endif
                    <th>Удалить</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($positions as $index=> $position)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$position->name}}</td>
                    <td>{{$position->created_at}}</td>
                    @if(Auth::user()->role_id != 3)
                        @if(Auth::user()->role_id != 2)
                            <td><a href="{{route('positions.edit',['position' =>$position->id])}}"><i class="bi bi-pen"></i></a></td>
                        @endif
                    <td><a href="{{route('positions.destroy',['position' =>$position->id])}}"><i class="bi bi-trash"></i></a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@include('footer')