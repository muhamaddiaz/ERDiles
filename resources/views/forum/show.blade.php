@extends('layouts.app')

@section('title', 'Forum diskusi: '. $forum->judul)

@section('content')
    <div class="jumbotron home-quotes mt-5">
        <div class="container">
            <h1>Forum Diskusi</h1>
            <p>Dibuat oleh: {{$user->name}}</p>
        </div>
    </div>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissable fade show">
                <a href="" class="close" data-dismiss="alert">&times;</a>
                {{session('success')}}
            </div>
        @endif
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"></i><a href="{{route('forum.index')}}"><i class="fas fa-users"></i> Forum</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lihat forum</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2>{{$forum->judul}}</h2>
                            <p class="text-secondary">Dibuat pada: {{$forum->created_at}}</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <p>{{$forum->deskripsi}}</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <div id="disqus_thread"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="mt-4">Pembuat forum:</h3>
                <br>
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="http://gravatar.com/avatar/{{md5($user->email)}}" alt="profile image" 
                        style="width: 100px; height: 100px; border-radius: 50%" class="mb-3">
                        <h3 class="card-title">{{$user->name}}</h3>
                        <p class="card-text">{{$user->email}}</p>
                    </div>
                </div>
                @if(Auth::user()->id == $user->id)
                    <h3>Aksi </h3>
                    <br>
                    <div class="list-group">
                        <a href="#editForum" data-toggle="modal" class="list-group-item list-group-action">Perbarui forum</a>
                        <a href="#hapusForum" data-toggle="modal" class="list-group-item list-group-action">Hapus forum</a>
                    </div>
                @endif
            </div>
        </div>
        <br><br>
    </div>

    <div id="editForum" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="primary-color card-title mb-0 mt-3">Perbarui forum</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('forum.update', $forum->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" name="judul" class="form-control" value="{{$forum->judul}}" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control">{{$forum->deskripsi}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Perbarui forum</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="hapusForum" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="primary-color card-title mb-0 mt-3">Apakah anda yakin? </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('forum.destroy', $forum->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://erdles.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
@endsection