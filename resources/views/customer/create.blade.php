<form method="POST" action="{{route('Customer.store')}}">{{csrf_field()}}
<input type="text" name="txt_Id" />
<input type="text" name="txt_Name" />
<input type="text" name="txt_Address" />

<input type="submit" name="S_save" id="S_save" value="save"/>
</form>