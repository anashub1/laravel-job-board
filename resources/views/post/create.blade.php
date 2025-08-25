<x-layout :title="$pageTitle">
  <form method="POST" action="/blog">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Create New Post</h2>
        <p class="mt-1 text-sm/6 text-gray-600">Use this form to add a new post to the blog.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

          <!-- Title -->
          <div class="sm:col-span-3">
            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
              <input id="title" value="{{ old('title') }}" type="text" name="title" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border 
                       {{ $errors->has('title') ? 'border-red-500' : 'border-gray-300' }}
                       placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm/6" />
            </div>
            @error('title')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>

          <!-- Author -->
          <div class="sm:col-span-3">
            <label for="author" class="block text-sm/6 font-medium text-gray-900">Author</label>
            <div class="mt-2">
              <input id="author" value="{{ old('author') }}" type="text" name="author" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border
                       {{ $errors->has('author') ? 'border-red-500' : 'border-gray-300' }}
                       placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm/6" />
            </div>
            @error('author')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>

          <!-- Content -->
          <div class="col-span-full">
            <label for="body" class="block text-sm/6 font-medium text-gray-900">Content</label>
            <p class="mt-1 text-sm/6 text-gray-600">Write a few sentences about the article.</p>
            <div class="mt-2">
              <textarea id="body" name="body" rows="3"
                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border
                       {{ $errors->has('body') ? 'border-red-500' : 'border-gray-300' }}
                       placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm/6">{{ old('body') }}</textarea>
            </div>
            @error('body')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>

          <!-- Published Checkbox -->
          <div class="col-span-full">
            <div class="mt-6 space-y-6">
              <div class="flex gap-3">
                <div class="flex h-6 shrink-0 items-center">
                  <div class="group grid size-4 grid-cols-1">
                    <input id="published" type="checkbox" name="published" {{ old('published') ? 'checked' : '' }}
                      class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white
         checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 
         focus-visible:outline-offset-2 focus-visible:outline-indigo-600" />

                    <svg viewBox="0 0 14 14" fill="none"
                      class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white">
                      <path d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="opacity-0 group-has-checked:opacity-100" />
                    </svg>
                  </div>
                </div>
                <div class="text-sm/6">
                  <label for="published" class="font-medium text-gray-900">Is Published?</label>
                  <p class="text-gray-500">Do you want it published or saved as draft.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Actions -->
      <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/blog" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500
                 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          Save
        </button>
      </div>
    </div>
  </form>
</x-layout>