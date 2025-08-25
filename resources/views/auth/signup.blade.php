<x-layoutsimple :title="$pageTitle">
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-white">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"
        class="mx-auto h-10 w-auto" />
      <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">
        Create your account
      </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form action="/signup" method="POST" class="space-y-6">
        @csrf

        <!-- First Name -->
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
          <div class="mt-2">
            <input id="name" value="{{ old('name') }}" type="text" name="name" required autocomplete="name" class="block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder-gray-400 
      focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
            @error('name')
              <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
          </div>
        </div>


        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
          <div class="mt-2">
            <input id="email" value="{{ old('email') }}" type="email" name="email" required autocomplete="email" class="block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder-gray-400 
              focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
            @error('email')
              <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="mt-2">
            <input id="password" type="password" name="password" required autocomplete="new-password" class="block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder-gray-400 
              focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
            @error('password')
              <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <!-- Confirm Password -->
        <div>
          <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
          <div class="mt-2">
            <input id="password_confirmation" type="password" name="password_confirmation" required
              autocomplete="new-password" class="block w-full rounded-md border border-gray-300 px-3 py-2 text-base text-gray-900 placeholder-gray-400 
              focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
          </div>
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white 
                         shadow-sm hover:bg-indigo-500 
                         focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Create Account
          </button>
        </div>
      </form>
    </div>
  </div>
</x-layoutsimple>