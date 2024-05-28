@extends('auth.template')

@section('tittle')
Register
@endsection

@section('content')
    <section class="bg-sky-100 min-h-screen flex items-center justify-center">
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
          <div class="md:w-1/2 px-4 md:px-16">
            <h2 class="font-bold text-2xl text-blue-700 text-center p-4">Register</h2>
            <form class="space-y-6" action="{{route('register.post')}}" method="POST">
              @csrf
              <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name <span>{{$errors->first('name')}}</span></label>
                <div class="mt-2">
                  <input id="name" name="name" value="{{old('name')}}" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2">
                </div>
              </div>
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address <span>{{$errors->first('email')}}</span></label>
              <div class="mt-2">
                <input id="email" name="email" type="email" value="{{old('email')}}" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2">
              </div>
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password <span>{{$errors->first('password')}}</span></label>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" value="{{old('password')}}" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2">
              </div>
            </div>
      
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold 
              leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
               focus-visible:outline-indigo-600">Sign Up</button>
            </div>
          </form>
          <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
            <p>Sudah punya akun ?</p>
            <a href="{{ route('/') }}" class="hover:scale-110 duration-300">Login</a>
          </div>
        </div>
          <!-- image -->
          <div class="md:block hidden w-1/2">
            <img class="rounded-2xl" src="img/signin.jpg">
          </div>
        </div>
      </section>

@endsection