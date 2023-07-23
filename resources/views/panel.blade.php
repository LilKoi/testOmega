<!DOCTYPE html>
@extends('header')
<section>
    <div class="container">
        <table class="table mx-auto">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
                    <th>Должность</th>
                    <th>Отделы</th>
                    <th>Дата</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index=> $user)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>Должность</td>
                    <td>Отделы</td>
                    <td>Дата</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@extends('footer')