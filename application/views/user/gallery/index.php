<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Post</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('user/post_baru') ?>" class="btn btn-success">Post Baru</a>
                    <!-- Button trigger modal -->
                    <hr>
                    <div class="container">
                        <div class="card card-icon mb-2 mt-2">
                            <div class="row no-gutters">
                                <div class="col-auto card-icon-aside bg-primary"><i class="mr-1 text-white-50" data-feather="file-text"></i></div>
                                <div class="col">
                                    <div class="card-body py-5">
                                        <h2 class="card-title">{{ $item->judul }}</h2>
                                        <p class="card-text">{!! substr($item->konten,0,250) !!}...</p>
                                        <hr>
                                        <a class="btn btn-success mt-2" href="{{ route('post.show', $item->id) }}">
                                            <i class="mr-1" data-feather="eye"></i>
                                            View
                                        </a>
                                        <a class="btn btn-primary mt-2" href="{{route('post.edit', $item->id)}}">
                                            <i class="mr-1" data-feather="edit"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('post.destroy', $item->id) }}" method="POST" style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger mt-2" onclick="return confirm('Apakah anda ingin menghapus post ini ?');">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>