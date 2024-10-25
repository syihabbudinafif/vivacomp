@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative h-[600px] -mb-[388px]">
        <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
            <x-navbar></x-navbar>
        </div>
    </div>
    <div id="Teams" class="w-full px-[10px] relative z-10">
        <div class="container max-w-[1130px] mx-auto flex flex-col gap-[50px] items-center">
            <div class="flex flex-col gap-[50px] items-center">
                <div class="breadcrumb flex items-center justify-center gap-[30px]">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Our Team</p>
                </div>
                <h2 class="font-bold text-4xl leading-[45px] text-center">We’re Here to Build <br> Your Awesome Projects
                </h2>
            </div>
            <div
                class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
                @forelse ($teams as $team)
                    <div
                        class="card bg-white flex flex-col h-full justify-center items-center p-[30px] px-[29px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">
                        <div
                            class="w-[100px] h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
                            <div class="w-[90px] h-[90px] rounded-full overflow-hidden">
                                <img src="{{ asset(Storage::url($team->avatar)) }}"
                                    class="object-cover object-center w-full h-full" alt="photo">
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 text-center">
                            <p class="font-bold text-xl leading-[30px]">{{ $team->name }}</p>
                            <p class="text-cp-light-grey">{{ $team->occupation }}</p>
                        </div>
                        <div class="flex items-center justify-center gap-[10px]">
                            <div class="flex w-6 h-6 shrink-0">
                                <img src="assets/icons/global.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-cp-dark-blue">{{ $team->location }}</p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <div id="Stats" class="w-full mt-20 bg-cp-black">
        <div class="container max-w-[1000px] mx-auto py-10">
            <div class="flex flex-wrap items-center justify-between p-[10px]">
                @forelse ($statistics as $statistic)
                    <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
                        <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
                            <img src="{{ asset(Storage::url($statistic->icon)) }}" class="object-contain w-full h-full"
                                alt="icon">
                        </div>
                        <p class="text-cp-pale-orange font-bold text-4xl leading-[54px]">{{ $statistic->goal }}</p>
                        <p class="text-cp-light-grey">{{ $statistic->name }}</p>
                    </div>
                @empty
                    <p>Belum ada data terbaru</p>
                @endforelse
            </div>
        </div>
    </div>
    <div id="Awards" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-[14px]">
                <p
                    class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    OUR AWARDS</p>
                <h2 class="font-bold text-4xl leading-[45px]">We’ve Dedicated Our<br>Best Team Efforts</h2>
            </div>
            <a href="" class="bg-cp-black p-[14px_20px] w-fit rounded-xl font-bold text-white">Explore More</a>
        </div>
        <div
            class="awards-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Solid Fundamental Crafter Async</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bali, 2020</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Most Crowded Yet Harmony Place</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Shanghai, 2021</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Small Things Made Much Big Impacts</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Zurich, 2022</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Teamwork and Solidarity</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bandung, 2023</p>
            </div>
        </div>
    </div>
    <footer class="relative w-full mt-20 overflow-hidden bg-cp-black">
        <div
            class="container max-w-[1130px] mx-auto flex flex-wrap gap-y-4 items-center justify-between pt-[100px] pb-[220px] relative z-10">
            <div class="flex flex-col gap-10">
                <div class="flex items-center gap-3">
                    <div class="flex shrink-0 h-[43px] overflow-hidden">
                        <img src="assets/logo/logo.svg" class="object-contain w-full h-full" alt="logo">
                    </div>
                    <div class="flex flex-col">
                        <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">Viva Celebrity</p>
                        <p id="CompanyTagline" class="text-sm text-cp-light-grey">Oxygenated Organic Water</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="">
                        <div class="flex w-6 h-6 overflow-hidden shrink-0">
                            <img src="assets/icons/youtube.svg" class="object-contain w-full h-full" alt="youtube">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex w-6 h-6 overflow-hidden shrink-0">
                            <img src="assets/icons/whatsapp.svg" class="object-contain w-full h-full" alt="whatsapp">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex w-6 h-6 overflow-hidden shrink-0">
                            <img src="assets/icons/facebook.svg" class="object-contain w-full h-full" alt="facebook">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex w-6 h-6 overflow-hidden shrink-0">
                            <img src="assets/icons/instagram.svg" class="object-contain w-full h-full" alt="instagram">
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap gap-[50px]">
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="text-lg font-bold text-white">Products</p>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">General
                        Contract</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Building
                        Assessment</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">3D Paper
                        Builder</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Legal
                        Constructions</a>
                </div>
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="text-lg font-bold text-white">About</p>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">We’re
                        Hiring</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Our Big
                        Purposes</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Investor
                        Relations</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Media
                        Press</a>
                </div>
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="text-lg font-bold text-white">Useful Links</p>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Privacy &
                        Policy</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Terms &
                        Conditions</a>
                    <a href="contact.html" class="transition-all duration-300 text-cp-light-grey hover:text-white">Contact
                        Us</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Download
                        Template</a>
                </div>
            </div>
        </div>
    </footer>
@endsection
