<div class="bg-mtom-orange">
    <div class="container py-10">
        <div class="xl:flex justify-between items-center xl:space-x-3">
            <div class="xl:w-1/2 text-center xl:text-left">
                <h1 class="text-mtom-blue text-4xl font-title font-black">Vous avez <br class="hidden xl:block 2xl:hidden">des questions ?</h1>
                <h4 class="mt-2">Renseignez vos informations et nous vous contacterons au plus vite</h4>
            </div>
            <div>
                <form method="post"
                      action="{{ route('form.call-to-action') }}"
                      class="mt-6 xl:mt-0">
                    @csrf
                    @method('POST')
                    <div class="text-center xl:text-right md:space-x-3">
                        <label class="relative block md:inline-block w-full md:w-[30%]">
                            <input type="text" name="nom" class="custom-input-2" placeholder="Nom" value="{{ old('nom') }}">
                            <i class="absolute top-2 left-3 text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </i>
                        </label>
                        <label class="relative block md:inline-block w-full md:w-[40%] mt-4 md:mt-0">
                            <input type="email" name="email" class="custom-input-2" placeholder="Courriel" value="{{ old('email') }}">
                            <i class="absolute top-2 left-3 text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </i>
                        </label>
                        <button type="submit"
                                class="bg-mtom-blue text-white py-2 px-6 rounded-full font-bold w-full md:w-auto mt-4 md:mt-0 hover:scale-[1.03] hover:shadow-lg transition">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
