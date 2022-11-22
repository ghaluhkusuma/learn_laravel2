@extends("layout/aplikasi")
@section("konten")
    

<h1>{{$judul}}</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aperiam odio doloremque, alias quibusdam cupiditate porro quo dolor architecto quos.</p>
<p>
    <ul>
        <li>Email : {{$kontak["email"]}}</li>
        <li>Instagram : {{$kontak["ig"]}}</li>
    </ul>
</p>
@endsection