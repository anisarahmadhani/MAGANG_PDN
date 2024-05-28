@extends('auth.template')

@section('tittle')
Login
@endsection

@section('content')
    <section class="bg-sky-100 min-h-screen flex items-center justify-center">
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
          <div class="md:w-1/2 px-4 md:px-16">
            <h2 class="font-bold text-2xl text-blue-700 text-center p-4">Login
            </h2>
            @if(session('pesan'))
              @if(session('pesan') == 'Periksa Kembali Password dan Username')
                  <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
                    <p>{{session('pesan')}}</p>
                  </div>  
              @else
              <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
                <p>{{session('pesan')}}</p>
              </div>
              @endif  
            @endif
            <form class="space-y-6" action="{{route('login')}}" method="POST">
              @csrf
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2">
              </div>
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2">
              </div>
            </div>
      
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
            </div>
          </form>
      
            <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
              <p>Belum punya akun ?</p>
              <a href="{{ route('register') }}" class="hover:scale-110 duration-300">Register</a>
            </div>
          </div>
          <!-- image -->
          <div class="md:block hidden w-1/2">
            <img class="rounded-2xl" src="img/signin.jpg">
          </div>
        </div>
      </section>

@endsection