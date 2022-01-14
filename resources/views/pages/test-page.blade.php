<x-layouts.back-layout>

    <div class="my-10 border border-2 p-10">
        <form action="{{ route('form.contact') }}" method="post">
            @csrf
            @method('POST')
            <div>
                <label for="test">Image</label>
                <input type="text" name="test">
            </div>
        </form>
    </div>

    <div class="not-prose relative bg-gray-50 rounded-xl overflow-hidden dark:bg-gray-800/25"><div style="background-position: 10px 10px;" class="absolute inset-0 bg-grid-gray-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] dark:bg-grid-gray-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]"></div><div class="relative rounded-xl overflow-auto">
            <!-- Snap Point -->
            <div class="flex ml-[50%] items-end justify-start pt-10 mb-6">
                <div class="ml-2 rounded font-mono text-[0.625rem] leading-6 px-1.5 ring-1 ring-inset bg-indigo-50 text-indigo-600 ring-indigo-600 dark:bg-indigo-500 dark:ring-0 dark:text-white dark:highlight-white/10">snap point</div>
                <div class="absolute top-0 bottom-0 left-1/2 border-l border-indigo-500"></div>
            </div>
            <!-- Contents -->
            <div class="relative w-full flex gap-6 snap-x overflow-x-auto pb-14">
                <div class="snap-center shrink-0">
                    <div class="shrink-0 w-4 sm:w-48"></div>
                </div>
                <div class="snap-center shrink-0 first:pl-8 last:pr-8">
                    <img class="shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80">
                </div>
                <div class="snap-center shrink-0 first:pl-8 last:pr-8">
                    <img class="shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1540206351-d6465b3ac5c1?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80">
                </div>
                <div class="snap-center shrink-0 first:pl-8 last:pr-8">
                    <img class="shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1622890806166-111d7f6c7c97?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80">
                </div>
                <div class="snap-center shrink-0 first:pl-8 last:pr-8">
                    <img class="shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1590523277543-a94d2e4eb00b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80">
                </div>
                <div class="snap-center shrink-0 first:pl-8 last:pr-8">
                    <img class="shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1575424909138-46b05e5919ec?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80">
                </div>
                <div class="snap-center shrink-0 first:pl-8 last:pr-8">
                    <img class="shrink-0 w-80 h-40 rounded-lg shadow-xl bg-white" src="https://images.unsplash.com/photo-1559333086-b0a56225a93c?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=160&amp;q=80">
                </div>
                <div class="snap-center shrink-0">
                    <div class="shrink-0 w-4 sm:w-48"></div>
                </div>
            </div>
        </div><div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5"></div></div>


</x-layouts.back-layout>
