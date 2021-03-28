@extends ('layouts.app')

@section('content')
<div class="bg-dark flex justify-center pt-4">
    <div class="w-4/12 bg-white p-6 rounded-lg">
    <form action="{{ route('register' )}}" method="post">
            <div class="mb-4">
                <label for="name" class="sr-only">Name </label>
                <input type="text" for="name" class="sr-only" id="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="your Name" value="">
            </div>
        </form>
    </div>
</div>
@endsection
