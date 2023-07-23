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
                    <td>{{$user->position}}</td>
                    <td>Отделы</td>
                    <td>{{$user->created_at}}</td>
                    <td><i class="bi bi-pen"></i></td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@include('footer')