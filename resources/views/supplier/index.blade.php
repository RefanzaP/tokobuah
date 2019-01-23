

@foreach ($supplier as $supplierlist)
{{ $supplierlist->Supplier_id}}</br>
{{ $supplierlist->Supplier_name}}</br>
{{ $supplierlist->Supplier_address}}</br>
@endforeach
<a href="{{ url('Supplier/create')}}">Tambah info</a>