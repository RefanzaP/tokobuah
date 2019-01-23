

@foreach ($customer as $customerlist)
{{ $customerlist->customer_id}}</br>
{{ $customerlist->name}}</br>
{{ $customerlist->address}}</br>
<a href="/Customer/{{ $customerlist->customer_id}}">show</a>
<br/> 
@endforeach

<a href="{{ url('Customer/create')}}">Tambah info</a>