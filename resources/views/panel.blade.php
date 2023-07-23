@include('header')
<section class="py-5">
    <div class="container">
        <table class="table mx-auto">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
                    <th>Должность</th>
                    <th>Отделы</th>
                    <th>Дата</th>
                    <th>Изменить</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index=> $user)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        @if(isset($user->position))
                        <p>{{$user->position->name}}</p>
                        @endif
                    </td>
                    <td>
                        @if(isset($user->departments))
                        @foreach($user->departments as $departament)
                        <p>{{$departament->name}}</p>
                        @endforeach
                        @endif

                    </td>
                    <td>{{$user->created_at}}</td>
                    <td><a href="{{route('user.edit',['user' => $user->id])}}"> <i class="bi bi-pen"></i></a></td>
                    <td><a href="{{route('user.delete',['user' => $user->id])}}"><i class="bi bi-trash"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@include('footer')