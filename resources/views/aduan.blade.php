<x-layouts.default>
    <div class="flex gap-32 h-screen absolute top-0 left-0 w-full">
        <form class="flex mt-32 gap-10  flex-col pl-20" action="/aduan" method="POST">
            {{
                csrf_field()
            }}
            <div class="grid gap-2">
                <h1 class="text-5xl font-bold">Aduan Mahasiswa</h1>
                <p>Silahkan masukkan saran atau keluhan anda dibawah ini</p>
            </div>
            <div class="w-full grid gap-2">
                <p>Keluhan atau saran Anda</p>
                <textarea name="keluhan" id="keluhan" class="textarea textarea-bordered w-full min-h-32" placeholder="Keluhan atau saran Anda"></textarea>
            </div>
            <div class=" grid gap-4">
                <p class="text-xs">Keluhan atau saran Anda akan dikirim sebagai Muh Refa, pengiriman secara anonim tidak
                    akan membagikan nama Anda namun nama Anda akan disimpan untuk follow up saran
                    dan keluhan yang anda masukkan.</p>
                <div class="form-control">
                    <label class="cursor-pointer label w-fit gap-4">
                        <input type="checkbox" checked="checked" class="checkbox checkbox-sm" name="anonim">
                        <span class="label-text">Kirim sebagai anonim</span>
                    </label>
                    <button class="btn btn-primary my-8">
                        Kirim
                    </button>
                </div>
            </div>
        </form>
        <div class="grow w-1/2 h-full ">
            <div class="pt-32 h-full pb-32 overflow-auto flex flex-col gap-5 pr-20">
                <div class="grid gap-2">
                    <h1 class="text-5xl font-bold">Aduan Terbaru</h1>
                    <p class="text-sm">Berikut adalah daftar aduan terbaru yang telah dikirim oleh mahasiswa</p>
                </div>
                @if(count($reports) == 0)
                <div class="w-full border-2 p-4 rounded-lg flex gap-5 h-full">
                    <div class="w-full">
                        <div class="flex justify-between">
                            <h1 class="font-bold">Tidak ada aduan</h1>
                        </div>
                        <p class="text-sm">Belum ada aduan yang dikirimkan oleh mahasiswa</p>
                    </div>
                </div>
                @else
                @foreach ($reports as $aduan)
                <div class="w-full border-2 p-4 rounded-lg flex gap-5">

                    <div class="avatar placeholder shrink-0">
                        <div class="bg-neutral text-neutral-content rounded-full w-12">
                            <span class="text-2xl">
                                {{$aduan['name'][0]}}
                            </span>
                        </div>
                    </div>
                    <div class="w-5/6">
                        <div class="flex justify-between">
                            <h1 class="font-bold">{{ $aduan['name'] }}</h1>
                            <p class="text-xs">{{ $aduan['created_at'] }}</p>
                        </div>
                        <p class="text-sm">{{ $aduan['content'] }}</p>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</x-layouts.default>