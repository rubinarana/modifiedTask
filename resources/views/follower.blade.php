<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
    <table class="table table-bordered">
      <thead>
        <tr>
            <th>name</th>
            <th>created_at </th>
            <th>Followers</th>
            <th>Action</th>
        </tr>  
        </thead>

        <tbody>                
        
            @foreach($user as $u)

                <tr>
                    <td>
                        {{  $u->name }}
                    </td>
                    <td>
                        {{ $u->created_at }}
                    </td>
                    <td>
                        @foreach($u->followers as $follower) 
                            <span>{{ $follower->user->name }} </span>
                        @endforeach
                    </td>
                    <td>
                        @if(auth()->user()->follows($u))
                        <form action="{{ route('unfollow') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$u->id}}" name="user_id">
                            <button type="submit">UnFollow</button>
                        </form>
                        @else
                        <form action="{{ route('follow') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$u->id}}" name="user_id">
                            <button type="submit">Follow</button>
                        </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>        
</body>
</html>