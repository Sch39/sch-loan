@section('title', 'Home')


<main class='w-full'>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style="background-image: url({{ asset('assets/img/photo/container-truck-ship-port-ai-generated-image.jpg') }});">
            <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>


            <!-- Particles animation -->
            <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
                <canvas data-particle-animation></canvas>
            </div>


        </div>

        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                        <h1 class="text-white font-semibold text-6xl">
                            Sch Loan
                        </h1>
                        <p class="mt-4 text-xl text-gray-300">
                            It is a website that is useful for managing vehicle rental management at PT Sch39 Dev
                            factory.
                        </p>


                    </div>


                    @if (auth()->check())
                    @hasrole('admin')
                    <x-button.button-gradient title='Dashboard' icon='bx bx-right-arrow-circle text-xl' href='/admin'
                        class="text-lg group" />
                    @else
                    <x-button.button-gradient title='Dashboard' icon='bx bx-right-arrow-circle text-xl' href='/approver'
                        class="text-lg group" />
                    @endhasrole
                    @else
                    <x-button.button-gradient title='Login' icon='bx bx-right-arrow-circle text-xl' href='/login'
                        class="text-lg group" />
                    @endif

                </div>
            </div>
        </div>

        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-950 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <section class="pb-20 bg-gray-100 -mt-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full lg:w-3/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                <i class="fas fa-gears"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Improved Efficiency</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                This application can help optimize vehicle usage, reduce wait times, and minimize
                                scheduling conflicts.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-3/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                <i class="fas fa-line-chart"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Tracking and Analysis</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                The application gathers data for analyzing vehicle usage, aiding resource planning and
                                management.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-3/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                <i class="fas fa-wrench"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Scheduled Maintenance</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                The application can remind the company to schedule regular vehicle maintenance,
                                extending their lifespan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:pt-12 pt-6 w-full lg:w-3/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                <i class="fas fa-dollar"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Cost Savings</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                With better monitoring of vehicle usage, companies can reduce fuel costs, maintenance
                                expenses, and unplanned repairs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>


    <section class="relative py-20">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>

        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                    <img alt="factory" class="max-w-full rounded-lg shadow-lg"
                        src="{{ asset('assets/img/photo/warehouse-storage-interior-with-shelves-loaded-with-goods.jpg') }}" />
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4 mt-2">
                    <div class="md:pr-12">
                        <div class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-50"
                            id="about">
                            <i class="bx bx-rocket bx-fade-up text-2xl"></i>
                        </div>
                        <h3 class="text-3xl font-semibold">A growing company</h3>
                        <p class="mt-4 text-lg leading-relaxed text-gray-600">
                            We excel in manufacturing high-precision components for diverse industries, earning global
                            trust with over 20 years of expertise.
                        </p>

                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                class="fas fa-pencil"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">
                                            Product Design
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                class="fas fa-cog"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Fabrication</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                class="fas fa-cubes"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Assembly</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="pb-20 relative block bg-gray-900">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>


        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64 w-full">
            <div class="flex flex-wrap text-center justify-center mb-5">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">Contact Developer</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                        If you encounter a bug or any other issue, please report it to the developer by filling out the
                        following form.
                    </p>
                </div>
            </div>


        </div>
    </section> --}}

    {{-- <section class="relative block py-24 lg:pt-0 bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                <div class="w-full lg:w-6/12 px-4">


                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-200">
                        <div class="flex-auto p-5 lg:p-10">
                            <h4 class="text-2xl font-semibold">Complaint form</h4>

                            <div class="relative w-full mb-3 mt-8">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full
                                    Name *</label><input type="text"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                            </div>

                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email
                                    *</label><input type="email"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Email" style="transition: all 0.15s ease 0s;" />
                            </div>

                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="message">Message *</label><textarea rows="4" cols="80"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Type a message..."></textarea>
                                <p class='text-gray-700 text-xs font-bold mb-2"'>Required *</p>
                            </div>

                            <div class="text-center mt-6">
                                <button
                                    class="bg-gray-900 text-white active:bg-gray-700 hover:bg-gray-800 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</main>

@push('scriptsBelow')
@vite('resources/js/page/landing.js')
@endpush