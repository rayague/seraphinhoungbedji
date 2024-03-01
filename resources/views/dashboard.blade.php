<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Oluwatobi Trans') }}
        </h2>
    </x-slot>

    <a href="{{ route('informations') }}" class="font-semibold text-xl text-light-800 leading-tight btn btn-primary">
        {{ __('Me Contacter') }}
    </a>

    <div class="py-12">
        <div class="container">
            <div class="row">
                @foreach($adminpost as $adminposts)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow" style="background-color: rgb(224, 224, 224);">
                            <img src="{{ asset('uploads/photos/' . $adminposts->photo) }}" class="card-img-top img-container" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $adminposts->title }}</h5>
                                <p class="card-text">{{ $adminposts->comments }}</p>
                                {{-- <a href="#" class="btn btn-primary">Me contacter</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-primary text-center my-5 ">
            © Ray Ague, +22960932967, <a href="mailto:rayague03@gmail.com">rayague@gmail.com</a>.
        </div>
    </div>
</x-app-layout>
