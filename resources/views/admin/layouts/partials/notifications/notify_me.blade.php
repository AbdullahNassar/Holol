<a href="{{route('admin.messages')}}">
	<strong style="color: red;">{{Auth::guard('admins')->user()->name}}</strong> لديك رسالة جديدة<strong style="margin-right: 40px;">{{$notification->created_at}}</strong>
</a>