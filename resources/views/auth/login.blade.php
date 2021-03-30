@extends ('layouts.app')

@section('content')
<div class="bg-dark flex justify-center pt-4">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        @if(session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-4 text-white text-center">
        {{session('status')}}
        </div>
        @endif
    <form action="{{ route('login' )}}" method="post">
    @csrf


            <div class="mb-4">
                <label for="email" cla ss="sr-only">Email </label>
                <input type="text" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" placeholder="your email" value="{{old('email')}}">
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="p assword" class="sr-only">Password </label>
                <input type="password" name="password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" placeholder="your password" value="">
                @error('password')
                    <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
            </div>
            <div class="">
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
