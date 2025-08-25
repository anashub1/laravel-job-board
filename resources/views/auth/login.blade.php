<x-layoutsimple :title="$pageTitle">
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-white">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"
        class="mx-auto h-10 w-auto" />
      <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">
        Login with your account
      </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form action="/login" method="POST" class="space-y-6">
        @csrf  
        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
          <div class="mt-2">
            <input id="email" value="{{old('email')}}" type="email" name="email" required autocomplete="email" class="block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder-gray-400 
                          focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
          </div>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="mt-2"> 
            <input id="password" value="{{old('password')}}" type="password" name="password" required autocomplete="new-password" class="block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder-gray-400 
                          focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
          </div>
        </div>
        @if ($errors->has('password'))
          <div class="text-red-500 rext-sm">
              {{$errors->first('password')}}
          </div>
        @endif

        <!-- Submit Button -->
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white 
                         shadow-sm hover:bg-indigo-500 
                         focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
           Login
          </button>
        </div>
      </form>
    </div>
  </div>
</x-layoutsimple>