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
                    @if(Auth::user()->role_id != 3)
                        @if(Auth::user()->role_id != 2)
                            <th>Изменить</th>
                        @endif
                    <th>Удалить</th>
                    @endif
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
                    @if(Auth::user()->role_id != 3)
                        @if(Auth::user()->role_id != 2)
                            <td><a href="{{route('user.edit',['user' => $user->id])}}"> <i class="bi bi-pen"></i></a></td>
                        @endif
                    <td><a href="{{route('user.delete',['user' => $user->id])}}"><i class="bi bi-trash"></i></a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@include('footer')