<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
        <div class="mt-5">
            <div class="text-center">
                <img src="{{ asset('images/zahid.jpg') }}" class="img-thumbnail" width="250px"
                height="150px"  alt="">
            </div>
            <div class="mt-5 text-white mx-5 text-justify">
                <h1 class="fw-blod st-font">Hello</h1>
                <div class="px-4" style="line-height:2rem;">
                    <p style="text-indent:100px;">I am <b class="text-warning">Zahid Mughal</b>
                    having 5 years of Full-Stack Web development experience for globle businesses,
                I offer the technical expertise you are seeking for your web developer position.</p>
                <p>Since earning my bachelor's degree in internet and web development from XYZ university,
                    I have serve as a web developer at <b class="text-warning">Maga business Solution</b>,
                    one of the biggest premier digital marketing and web development firm,In this position,
                    I have led web development project for clients in divers technology 
                </p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ asset('contact') }}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{ asset('contact') }}" class="btn btn-outline-info">Hire Me</a>
            </div>
        </div>
    </x-slot>
</x-layout>