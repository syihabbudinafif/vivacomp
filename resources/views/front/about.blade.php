@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
            <x-navbar></x-navbar>
            <div class="flex flex-col gap-[50px] items-center py-20">
                <div class="breadcrumb flex items-center justify-center gap-[30px]">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">About Us</p>
                </div>
                <h2 class="font-bold text-4xl leading-[45px] text-center">Since Beginning We Only <br> Want to Make World
                    Better</h2>
            </div>
        </div>
    </div>
    <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">
        @forelse ($abouts as $about)
            <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
                <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                    <img src="{{ asset(Storage::url($about->thumbnail)) }}" class="object-contain w-full h-full"
                        alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                    <p
                        class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                        OUR {{ $about->type }}</p>
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="font-bold text-4xl leading-[45px]">{{ $about->name }}</h2>
                        <div class="flex flex-col gap-5">
                            @forelse ($about->keypoints as $keypoint)
                                <div class="flex items-center gap-[10px]">
                                    <div class="flex w-6 h-6 shrink-0">
                                        <img src="assets/icons/tick-circle.svg" alt="icon">
                                    </div>
                                    <p class="leading-[26px] font-semibold">{{ $keypoint->keypoint }}</p>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
    <!-- <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
        <h2 class="text-lg font-bold">Trusted by 500+ Top Leaders Worldwide</h2>
        <div class="flex flex-wrap justify-center gap-5 logo-container">
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-44.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
        </div>
    </div> -->
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
        <div class="awards-card-container grid grid-cols-4 gap-[30px] justify-center">
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
        <div class="absolute -bottom-[135px] w-full">
            <p class="font-extrabold text-[250px] leading-[375px] text-center text-white opacity-5">APIP</p>
        </div>
    </footer>
@endsection
