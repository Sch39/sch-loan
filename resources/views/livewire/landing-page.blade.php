@section('title', 'Home')

<div>

    <div class="relative font-inter antialiased">

        <main class="relative min-h-screen flex flex-col justify-center bg-slate-900 overflow-hidden">
            <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">

                <div class="text-center">

                    <!-- Illustration #1 -->
                    <div class="absolute top-0 left-0 rotate-180 -translate-x-3/4 -scale-x-100 blur-3xl opacity-70 pointer-events-none"
                        aria-hidden="true">
                        <img src="https://cruip-tutorials.vercel.app/particle-animation/shape.svg" class="max-w-none"
                            width="852" height="582" alt="Illustration" />
                    </div>

                    <!-- Illustration #2 -->
                    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 blur-3xl opacity-70 pointer-events-none"
                        aria-hidden="true">
                        <img src="{{ asset('icon.png') }}" class="max-w-none" width="852" height="582"
                            alt="Illustration" />
                    </div>

                    <!-- Particles animation -->
                    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
                        <canvas data-particle-animation></canvas>
                    </div>

                    <div class="relative">
                        <h1
                            class="inline-flex font-extrabold text-5xl md:text-6xl bg-clip-text text-transparent bg-gradient-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">
                            Sch Loan</h1>
                        <div class="max-w-3xl mx-auto mb-8">
                            <p class="text-lg text-slate-400">Merupakan website yang menangani manajemen peminjaman
                                kendaraan di PT Sch39 Dev</p>
                        </div>
                        <div class="inline-flex justify-center space-x-4">
                            <div>
                                <a class="inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-800 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150 group"
                                    href="#0">
                                    Login <span
                                        class="tracking-normal text-indigo-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1"></span>
                                </a>
                            </div>
                            <div>
                                <a class="inline-flex justify-center whitespace-nowrap rounded-lg bg-slate-700 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-slate-500 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150"
                                    href="#0">
                                    Daftar kendaraan tersedia
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>


    </div>
</div>
@push('scriptsBelow')
@vite('resources/js/page/landing.js')
@endpush