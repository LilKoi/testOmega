@include('header')
<section>
    <div class="container">
        <form method="POST" action="{{route('')}}">
        @csrf
        </form>
    </div>
</section>
@include('footer')