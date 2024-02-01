<x-layouts.default>
    <div class="w-full h-screen absolute top-0 left-0 grid grid-cols-2">
        <div class="bg-cover w-full h-full bg-[url('{{ asset('/assets/img/bg.jpg') }}')]">

        </div>
        <form class="grid place-items-center" action="/login" method="POST">
            <div class="w-full max-w-xl grid gap-5">
                <div class="grid gap-2">
                    <h1 class="text-5xl font-bold">Masuk</h1>
                    <p>Silahkan maasukkan username dan password simtik Anda</p>
                </div>

                <div class="grid w-full form-control gap-2">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="input input-bordered input-primary">
                </div>
                <div class="grid w-full form-control gap-2">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="input input-bordered input-primary">
                </div>
                {{
                    csrf_field()
                }}
                <!-- handle back with errors -->
                @if ($errors->any())
                    <div class="alert alert-error">
                        <div class="flex-1">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                @endif
                <button class="btn btn-primary btn-block">
                    Masuk
                </button>
            </div>
        </form>
    </div>
</x-layouts.default>