<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>User Id </th>
		<th>Title </th>
		<th>Slug </th>
		<th>Status </th>
		<th>Body </th>
		<th>Category Id </th>
		<th>Image </th>
		<th>Published At </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->user_id }} </td>
	 	<td> {{$record->title }} </td>
	 	<td> {{$record->slug }} </td>
	 	<td> {{$record->status }} </td>
	 	<td> {{$record->body }} </td>
	 	<td> {{$record->category_id }} </td>
	 	<td> {{$record->image }} </td>
	 	<td> {{$record->published_at }} </td>
	<td><a href="{{route('blogposts.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a href="{{route('blogposts.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('blogposts.destroy',$record->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-default cursor-pointer  btn-sm">
        <i class="text-danger fa fa-remove"></i>
    </button>
</form></td></tr>

    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3">
            {{{$records->render()}}}
        </td>
    </tr>
    </tfoot>
</table>