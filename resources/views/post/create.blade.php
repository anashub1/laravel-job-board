<x-layout :title="$pageTitle">
  <form method="POST" action="/blog">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Create New Post</h2>
        <p class="mt-1 text-sm/6 text-gray-600">use this form to add new post to the blog.</p>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
              <input id="first-name" value="{{old('title')}}" type="text" name="title" autocomplete="given-name"
                class="{{ $errors->has('title') ?'outline-red-500 ':'outline-gray-300 '  }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
            @error('title')
              <span class="text-red-500">{{$message}}</span>
            @enderror
          </div> 
          <div class="sm:col-span-3">
            <label for="Author" class="block text-sm/6 font-medium text-gray-900">Author</label>
            <div class="mt-2">
              <input id="last-name" value="{{old('author')}}"  type="text" name="author" autocomplete="family-name"
                class="{{ $errors->has('author') ?'outline-red-500 ':'outline-gray-300 '  }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
            @error('author')
              <span class="text-red-500">{{$message}}</span>
            @enderror
          </div>
          <div class="col-span-full">
            <label for="content" class="block text-sm/6 font-medium text-gray-900">Content</label>
            <div class="mt-2">
              <p class="  mt-3 text-sm/6 text-gray-600">Write a few sentences about the artical.</p>
              <textarea id="content"   name="body" rows="3"
                class=" {{ $errors->has('body') ?'outline-red-500 ':'outline-gray-300 '  }}block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{old('body')}}</textarea>
            </div>
            @error('body')
              <span class="text-red-500">{{$message}}</span>
            @enderror
          </div>
          <div class="col-span-full">
            <div class="mt-6 space-y-6">
              <div class="flex gap-3">
                <div class="flex h-6 shrink-0 items-center">
                  <div class="group grid size-4 grid-cols-1">
                    <input id="published" type="checkbox" name="Published" checked aria-describedby="comments-description"
                      class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto" />
                    <svg viewBox="0 0 14 14" fill="none"
                      class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25">
                      <path d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="opacity-0 group-has-checked:opacity-100" />
                      <path d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="opacity-0 group-has-indeterminate:opacity-100" />
                    </svg>
                  </div>
                </div>
                <div class="text-sm/6">
                  <label for="comments" class="font-medium text-gray-900">Is Published ?</label>
                  <p id="comments-description" class="text-gray-500">Do you want it published or saved as draft.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/blog" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
      <button type="submit"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>

</x-layout>