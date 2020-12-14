<!-- tailwind.config.js 
module.exports = {
    plugins: [
        require('@tailwindcss/custom-forms'),
    ],
}

-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="V3L1Z5GaFpbAVdvKMLclMGTFZmuhVyIFX4ggWQEZ">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Livewire Styles -->
<style>
    [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid] {
        display: none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>

        <!-- Scripts -->
        <script src="/js/app.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased bg-body text-body font-body">
        <div class="container mx-auto px-4"> 
        
          <nav class="flex flex-wrap items-center justify-between p-4"><div class="flex flex-shrink-0 mr-10"><a class="text-xl text-indigo-600 font-semibold font-heading" href="#">Adaptive Strength</a></div>
            <div class="block lg:hidden">
              <button class="navbar-burger flex items-center py-2 px-3 text-indigo-500 rounded border border-indigo-500">
                <svg class="fill-current h-3 w-3" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></button>
            </div>
            <div class="navbar-menu hidden lg:flex lg:flex-grow lg:items-center w-full lg:w-auto">
              <div class="lg:mr-auto">
                <a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="#">Products</a>
                <a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="#">Team</a><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="#">Customers</a><a class="block lg:inline-block mt-4 lg:mt-0 text-blue-900 hover:text-indigo-600" href="#">Blog</a></div>
              <div>
                @if (Route::has('login'))
                @auth
                <a class="block lg:inline-block mt-4 lg:mt-0 lg:mr-8 text-blue-900 hover:text-indigo-600" href="{{ url('/dashboard') }}" >Dashboard</a>
                @else
                <a class="block lg:inline-block mt-4 lg:mt-0 lg:mr-8 text-blue-900 hover:text-indigo-600" href="{{ route('login') }}">Sign in</a>
                @if (Route::has('register'))
                <a class="inline-block py-3 px-6 mt-4 lg:mt-0 leading-none text-white bg-indigo-600 hover:bg-indigo-700 font-semibold rounded shadow" href="{{ route('register') }}">Sign up</a></div>
                @endif
                @endauth
                @endif
            </div>
          </nav>
        

          
          <section class="py-12 px-4"><div class="flex flex-wrap items-center text-center lg:text-left -mx-2">
              <div class="lg:w-1/2 px-2 lg:pr-10 mt-10 lg:mt-0 order-1 lg:order-none">
                <h2 class="text-5xl mb-6 leading-tight font-semibold font-heading">Adaptive or die.</h2>
                <p class="mb-8 text-gray-400 leading-relaxed">Professional, dedicated, local. Dunder Mifflin is on its best patch to change the way you think about paper. That&rsquo;s us - people who sell limitless paper in the paperless world.</p>
                <div><a class="inline-block py-4 px-8 mr-6 leading-none text-white bg-indigo-600 hover:bg-indigo-700 font-semibold rounded shadow" href="#">Sign up</a><a class="text-indigo-600 hover:underline" href="#">Learn more</a></div>
              </div>
              <div class="lg:w-1/2 px-2"><img src="images/butler-raines-wave.jpg" alt=""></div>
            </div>
          </section>
        
          <section class="py-12 px-4">
            <div class="flex flex-wrap items-center text-center lg:text-left -mx-2">
              <div class="lg:w-1/2 px-2"><img src="images/new_ideas.svg" alt=""></div>
              <div class="lg:w-1/2 px-2 lg:pl-16 mt-10 lg:mt-0">
                <h2 class="text-4xl px-4 mb-4 leading-tight font-semibold font-heading">How to get Dunder Mifflined?</h2>
                <div class="p-4 mb-4">
                  <h3 class="text-2xl mb-2 font-semibold font-heading">1. Contact our Sales</h3>
                  <p class="text-gray-400 leading-relaxed">During the phone call we will be able to present you all details of cooperation, pricing and special offers, suited for your company.</p>
                </div>
                <div class="p-4 mb-4 rounded shadow-md">
                  <h3 class="text-2xl mb-2 font-semibold font-heading">2. Sign the documents</h3>
                  <p class="text-gray-400 leading-relaxed">We can also talk during business meeting, or visit your office anytime you want! Our employees will provide proper contracts.</p>
                </div>
                <div class="p-4 mb-4">
                  <h3 class="text-2xl mb-2 font-semibold font-heading">3. Wait for delivery!</h3>
                  <p class="text-gray-400 leading-relaxed">You don’t buy a pig... or shall I say a paper in a poke. The supplies will be delivered to your company every first Monday of the month.</p>
                </div>
              </div>
            </div>
          </section>
        
          <section class="py-8 px-4 text-center">
            <div class="max-w-2xl mx-auto">
              <h2 class="text-4xl font-semibold font-heading">Sign Up</h2>
              <p class="mt-6 mb-8 text-gray-400 leading-relaxed">Are you a carte blanche of the paper industry? No worries, our team will help you in implementation process and dispel doubts.</p>
              <form class="w-full max-w-lg mx-auto">
                <div class="flex flex-wrap">
                  <div class="w-full md:w-2/3">
                    <input class="appearance-none block w-full py-3 px-4 mb-4 md:mb-0 leading-snug text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded md:rounded-r-none focus:outline-none" type="text" placeholder="michael@dundermifflin.com">
                  </div>
                  <div class="w-full md:w-1/3">
                    <button class="inline-block w-full py-4 px-8 leading-none text-white bg-indigo-600 hover:bg-indigo-700 font-semibold rounded md:rounded-l-none">Sign up</button>
                  </div>
                </div>
              </form>
            </div>
          </section>
        
          <section class="py-8 px-4">
            <div class="flex flex-wrap -mx-6">
              <div class="lg:w-1/2 px-6 mb-6 lg:mb-0">
                <h3 class="text-2xl mb-4 font-semibold">Features</h3>
                <p>Dunder Mifflin Paper Productions is the way to provide your company an extraordinary paper, sold by extraordinary people.</p>
              </div>
              <div class="lg:w-1/2 px-6">
                <h3 class="text-2xl mb-4 font-semibold">Benefits</h3>
                <p>Professional, dedicated, local. Dunder Mifflin is on its best patch to change the way you think about paper. That’s us - people who sell limitless paper in the paperless world.</p>
              </div>
            </div>
          </section>
        </div>
      </body>
    </html>
    
    
    <body class="antialiased bg-body text-body font-body">
      <div class="container mx-auto px-4"> 
      
        <nav class="flex flex-wrap items-center justify-between p-4"><div class="flex flex-shrink-0 mr-10"><a class="text-xl text-indigo-600 font-semibold font-heading" href="#">Adaptive Strength</a></div>
          <div class="block lg:hidden">
            <button class="navbar-burger flex items-center py-2 px-3 text-indigo-500 rounded border border-indigo-500">
              <svg class="fill-current h-3 w-3" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></button>
          </div>
          <div class="navbar-menu hidden lg:flex lg:flex-grow lg:items-center w-full lg:w-auto">
            <div class="lg:mr-auto"><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="#">Products</a><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="#">Team</a><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="#">Customers</a><a class="block lg:inline-block mt-4 lg:mt-0 text-blue-900 hover:text-indigo-600" href="#">Blog</a></div>
            <div><a class="block lg:inline-block mt-4 lg:mt-0 lg:mr-8 text-blue-900 hover:text-indigo-600" href="#">Sign in</a><a class="inline-block py-3 px-6 mt-4 lg:mt-0 leading-none text-white bg-indigo-600 hover:bg-indigo-700 font-semibold rounded shadow" href="#">Sign up</a></div>
          </div>
        </nav>
      
        <section class="py-12 px-4"><div class="flex flex-wrap items-center text-center lg:text-left -mx-2">
            <div class="lg:w-1/2 px-2 lg:pr-10 mt-10 lg:mt-0 order-1 lg:order-none">
              <h2 class="text-5xl mb-6 leading-tight font-semibold font-heading">Adaptive or die.</h2>
              <p class="mb-8 text-gray-400 leading-relaxed">Professional, dedicated, local. Dunder Mifflin is on its best patch to change the way you think about paper. That&rsquo;s us - people who sell limitless paper in the paperless world.</p>
              <div><a class="inline-block py-4 px-8 mr-6 leading-none text-white bg-indigo-600 hover:bg-indigo-700 font-semibold rounded shadow" href="#">Sign up</a><a class="text-indigo-600 hover:underline" href="#">Learn more</a></div>
            </div>
            <div class="lg:w-1/2 px-2"><img src="images/butler-raines-wave.jpg" alt=""></div>
          </div>
        </section>
      
        <section class="py-12 px-4">
          <div class="flex flex-wrap items-center text-center lg:text-left -mx-2">
            <div class="lg:w-1/2 px-2"><img src="placeholders-2-0/pictures/new_ideas.svg" alt=""></div>
            <div class="lg:w-1/2 px-2 lg:pl-16 mt-10 lg:mt-0">
              <h2 class="text-4xl px-4 mb-4 leading-tight font-semibold font-heading">How to get Dunder Mifflined?</h2>
              <div class="p-4 mb-4">
                <h3 class="text-2xl mb-2 font-semibold font-heading">1. Contact our Sales</h3>
                <p class="text-gray-400 leading-relaxed">During the phone call we will be able to present you all details of cooperation, pricing and special offers, suited for your company.</p>
              </div>
              <div class="p-4 mb-4 rounded shadow-md">
                <h3 class="text-2xl mb-2 font-semibold font-heading">2. Sign the documents</h3>
                <p class="text-gray-400 leading-relaxed">We can also talk during business meeting, or visit your office anytime you want! Our employees will provide proper contracts.</p>
              </div>
              <div class="p-4 mb-4">
                <h3 class="text-2xl mb-2 font-semibold font-heading">3. Wait for delivery!</h3>
                <p class="text-gray-400 leading-relaxed">You don’t buy a pig... or shall I say a paper in a poke. The supplies will be delivered to your company every first Monday of the month.</p>
              </div>
            </div>
          </div>
        </section>
      
        <section class="py-8 px-4 text-center">
          <div class="max-w-2xl mx-auto">
            <h2 class="text-4xl font-semibold font-heading">Sign Up</h2>
            <p class="mt-6 mb-8 text-gray-400 leading-relaxed">Are you a carte blanche of the paper industry? No worries, our team will help you in implementation process and dispel doubts.</p>
            <form class="w-full max-w-lg mx-auto">
              <div class="flex flex-wrap">
                <div class="w-full md:w-2/3">
                  <input class="appearance-none block w-full py-3 px-4 mb-4 md:mb-0 leading-snug text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded md:rounded-r-none focus:outline-none" type="text" placeholder="michael@dundermifflin.com">
                </div>
                <div class="w-full md:w-1/3">
                  <button class="inline-block w-full py-4 px-8 leading-none text-white bg-indigo-600 hover:bg-indigo-700 font-semibold rounded md:rounded-l-none">Sign up</button>
                </div>
              </div>
            </form>
          </div>
        </section>
      
        <section class="py-8 px-4">
          <div class="flex flex-wrap -mx-6">
            <div class="lg:w-1/2 px-6 mb-6 lg:mb-0">
              <h3 class="text-2xl mb-4 font-semibold">Features</h3>
              <p>Dunder Mifflin Paper Productions is the way to provide your company an extraordinary paper, sold by extraordinary people.</p>
            </div>
            <div class="lg:w-1/2 px-6">
              <h3 class="text-2xl mb-4 font-semibold">Benefits</h3>
              <p>Professional, dedicated, local. Dunder Mifflin is on its best patch to change the way you think about paper. That’s us - people who sell limitless paper in the paperless world.</p>
            </div>
          </div>
        </section>
      </div>
    </body>
</html>
